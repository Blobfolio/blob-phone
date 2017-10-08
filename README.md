# blob-phone

blob-phone is a light(er)-weight implementation of Google's amazing [libphonenumber](https://github.com/googlei18n/libphonenumber) for PHP.

[![Build Status](https://travis-ci.org/Blobfolio/blob-phone.svg?branch=master)](https://travis-ci.org/Blobfolio/blob-phone)

&nbsp;

## Table of Contents

 * [Features](#features)
 * [Installation](#installation)
 * [Use](#use)
 * [Javascript](#javascript)
 * [License](#license)

&nbsp;

## Features

blob-phone is primarily concerned with validating and formatting arbitrary telephone numbers in international format (e.g. `+1 201-555-0123`). Along the way it also manages to gather information about a number's:

 * Country
 * Continent
 * Type (e.g. `mobile`, `voip`, etc.)

Other data and formatting features from `libphonenumber` have been stripped out to reduce the library's size. For a more comprehensive implementation of `libphonenumber` written for PHP, take a look at [libphonenumber-for-php](https://github.com/giggsey/libphonenumber-for-php).

&nbsp;

## Installation

The PHP library for blob-phone requires:

 * PHP 5.6+
 * [blobfolio/blob-common](https://github.com/Blobfolio/blob-common)

Install with Composer:

```bash
composer require "blobfolio/blob-phone:dev-master"
```

&nbsp;

## Use

#### Get started

```php
$phone = new blobfolio\phone\phone($phone_number, $country_code='US');
```

The constructor accepts two arguments:

 * (*string*) Phone number (pre-formatted or not);
 * (*string*) (*optional*) ISO country code (suspected); Default: `"US"`

Providing a probable country of origin will help with identification, so is recommended. Otherwise your number may end up on the wrong side of the planet.

blob-phone uses a brute-force technique to identify and format a phone number, prioritizing tests as follows:

 * The country provided;
 * Other countries with the same prefix;
 * Other countries on the same continent;
 * Everywhere else, alphabetically;

&nbsp;

#### Check it

```php
if ($phone->is_phone($types=array())) {
    ...
}
```

This method accepts an optional array of types of phone numbers in case you are looking for something specific. Type detection is hit or miss, so if you require high accuracy, you should verify this some other way.

The possible types are:
 * `"fixed"`, i.e. landline
 * `"mobile"`
 * `"pager"`
 * `"personal_number"`
 * `"premium_rate"`, e.g. your favorite party line
 * `"shared_cost"`
 * `"toll_free"`
 * `"voicemail"`
 * `"voip"`, e.g. Google Voice

This method returns `TRUE` or `FALSE`.

&nbsp;

#### Pull It

```php
// If you only want the number, you can typecast it:
$formatted = (string) $phone; //+598 9423 1234

// If you want more details:
print_r($phone->get_data());
/*
Array(
    [country] => CA             
    [prefix] => 1               
    [region] => North America   
    [types] => Array(
        [0] => fixed              
        [1] => mobile
    )
    [number] => +1 204-234-5678
)
*/
```

&nbsp;

#### All Together Now...

```php
$phone = '1012345678';
$country = 'CN';

$phone = (string) blobfolio\phone\phone($phone, $country);
if (strlen($phone)) {
    echo "Your pretty phone number is: $phone";
}
else {
    echo "I don't think that was right...";
}
```

&nbsp;

## Javascript

blob-phone is also available as a dependency-free Javascript library. To use it, simply include `lib/js/blob-phone.min.js` in your project.

This library has a single method: `blobPhone.parse()`, which takes two arguments:

 * (*string*) Phone number (pre-formatted or not);
 * (*string*) (*optional*) ISO country code (suspected); Default: `"US"`

Providing a probable country of origin will help with identification, so is recommended. Otherwise your number may end up on the wrong side of the planet.

This will return `FALSE` if the number could not be parsed, or an object containing the number details, like:

```js
var parsed = blobPhone.parse(2015550123);
/*
{
    country: "US",
    number: "+1 201-555-0123",
    prefix: 1,
    region: "North America",
    types: [
        "fixed",
        "mobile"
    ]
}
*/
```

&nbsp;

## License

Copyright © 2017 [Blobfolio, LLC](https://blobfolio.com) &lt;hello@blobfolio.com&gt;

This work is free. You can redistribute it and/or modify it under the terms of the Do What The Fuck You Want To Public License, Version 2.

    DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
    Version 2, December 2004
    
    Copyright (C) 2004 Sam Hocevar <sam@hocevar.net>
    
    Everyone is permitted to copy and distribute verbatim or modified
    copies of this license document, and changing it is allowed as long
    as the name is changed.
    
    DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
    TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION
    
    0. You just DO WHAT THE FUCK YOU WANT TO.
