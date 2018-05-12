<?php
/**
 * Compile Phone Data
 *
 * @package blobfolio/phone
 * @author  Blobfolio, LLC <hello@blobfolio.com>
 */

/**
 * Data Source: libphonenumber
 *
 * @see {https://raw.githubusercontent.com/googlei18n/libphonenumber/master/resources/PhoneNumberMetadata.xml}
 *
 * @copyright 2017 Google
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache
 */


use \blobfolio\dev\phone;

require(__DIR__ . '/lib/vendor/autoload.php');

// Set up some quick constants, namely for path awareness.
define('BOB_BUILD_DIR', __DIR__ . '/');
define('BOB_ROOT_DIR', dirname(BOB_BUILD_DIR) . '/');

// Compilation is as easy as calling this method!
phone::compile();

// We're done!
exit(0);
