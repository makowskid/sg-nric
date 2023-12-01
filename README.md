# sg-nric

PHP Singapore NRIC (National Registration Identity Card) or FIN (Foreign Identification Number) validator package


[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/makowskid/sg-nric.svg?style=flat-square)](https://packagist.org/packages/makowskid/sg-nric)


## Install

```bash
composer require makowskid/sg-nric
```


## Usage

```bash
$validator = new \Makowskid\SgNric\SgNric();

if($validator->isNricValid($theNric)) ..

//or 

if($validatator->isFinValid($theNric)) ..


```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


## License

The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.
