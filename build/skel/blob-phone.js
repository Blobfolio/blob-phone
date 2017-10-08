/**
 * blob-phone
 *
 * This is a Javascript implementation of blob-phone, a lightweight
 * rewrite of libphonenumber.
 *
 * @see {https://github.com/Blobfolio/blob-phone/blob/master/build/build.php}
 *
 * @package blobfolio/phone
 * @author	Blobfolio, LLC <hello@blobfolio.com>
 */

/**
 * Data Source: libphonenumber
 *
 * @see {https://raw.githubusercontent.com/googlei18n/libphonenumber/master/resources/PhoneNumberMetadata.xml}
 *
 * @copyright 2017 Google
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache
 */
var blobPhone = {

	// Setup.
	minLength: 3,
	maxLength: 30,
	defaultCountry: 'US',
	types: [
		'fixed',
		'mobile',
		'pager',
		'personal_number',
		'premium_rate',
		'shared_cost',
		'toll_free',
		'uan',
		'voicemail',
		'voip',
	],


	/**
	 * Parse a Phone Number
	 *
	 * @param string $phone Phone number.
	 * @param string $country Country code.
	 * @return object|bool Data or false.
	 */
	parse: function(phone, country) {
		// Sanitize inputs.
		phone = (phone + '').replace(/[^\d]/g, '');
		if (phone.length < this.minLength || phone.length > this.maxLength) {
			return false;
		}

		country = (country + '').toUpperCase();
		if ((country.length !== 2) || (Object.keys(this.data).indexOf(country) === -1)) {
			country = this.defaultCountry;
		}

		// Our parsed template.
		var out = {
			country: '',
			number: '',
			prefix: 0,
			region: '',
			types: [],
		};

		// Build a list of countries to try based on the region. The
		// chosen country takes priority, the rest will be hit
		// alphabetically.
		var countries = [country];
		if (this.data[country].region) {
			countries = JSON.parse(JSON.stringify(this.regions[this.data[country].region]));
			countries.sort(function(a, b) {
				if (a === country) {
					return -1;
				}
				else if(b === country) {
					return 1;
				}

				return (a < b) ? -1 : 1;
			});
		}

		// No country, no number.
		if (!countries.length) {
			return false;
		}

		// Loop each country.
		for (i=0; i<countries.length; i++) {
			out.country = countries[i];
			out.prefix = this.data[out.country].prefix;
			out.region = this.data[out.country].region;
			out.types = [];

			// We'll test the number with and without its prefix.
			var test = [phone],
				tmp = phone.replace(/^0+/g, '');
			if (tmp.indexOf(out.prefix) === 0) {
				test.push(phone.substr(out.prefix.toString().length));
			}

			// Loop each number.
			for (j=0; j<test.length; j++) {
				// Loop each pattern.
				var foundPattern = false;
				for (k=0; k<this.data[out.country].patterns.length; k++) {
					var patternRegex = new RegExp('^(' + this.data[out.country].patterns[k] + ')$');
					if (!!patternRegex.test(test[j])) {
						foundPattern = true;
						break;
					}
				}

				// Loop each type.
				if (foundPattern) {
					var types = Object.keys(this.data[out.country].types);
					for (k=0; k<types.length; k++) {
						var typeRegex = new RegExp('^(' + types[k] + ')$');
						if (!!typeRegex.test(test[j])) {
							var matchedTypes = this.data[out.country].types[types[k]];
							for (l=0; l<matchedTypes.length; l++) {
								if (out.types.indexOf(matchedTypes[l]) === -1) {
									out.types.push(matchedTypes[l]);
								}
							}
						}
					}
				}

				// We found it!
				if (foundPattern && out.types.length) {
					var formats = Object.keys(this.data[out.country].formats);
					for (k=0; k<formats.length; k++) {
						var formatRegex = new RegExp('^(' + formats[k] + ')$');
						if (!!formatRegex.test(test[j])) {
							out.number = '+' + out.prefix + ' ' + test[j].replace(new RegExp('^' + formats[k] + '$'), this.data[out.country].formats[formats[k]]);
							return out;
						}
					}

					// Maybe there isn't a specific formatting pattern.
					out.number = '+' + out.prefix + ' ' + test[j];
					return out;
				}
			}
		}

		return false;
	},

	// Generated data.
	/* jshint ignore:start */
	data: %DATA%,
	prefixes: %PREFIXES%,
	regions: %REGIONS%,
	/* jshint ignore:end */
};