# sg-nric: PHP Singapore NRIC/FIN validator

PHP Singapore NRIC (National Registration Identity Card) or FIN (Foreign Identification Number) validator package


[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/makowskid/sg-nric.svg?style=flat-square)](https://packagist.org/packages/makowskid/sg-nric)


## Install

```bash
composer require makowskid/sg-nric
```


## Usage

```bash

use Makowskid\SgNric\SgNric;

$validator = new SgNric();

if ($validator->isNricValid($theNric)) {
    // NRIC is valid
    // Your code here...
}

// OR

if ($validator->isFinValid($theFin)) {
    // FIN is valid
    // Your code here...
}

```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


## License

The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.
