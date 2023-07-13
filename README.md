# Sidecar Virus Scanner for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/statix-php/sidecar-virus-scan.svg?style=flat-square)](https://packagist.org/packages/statix-php/sidecar-virus-scan)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/statix-php/sidecar-virus-scan/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/statix-php/sidecar-virus-scan/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/statix-php/sidecar-virus-scan/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/statix-php/sidecar-virus-scan/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/statix-php/sidecar-virus-scan.svg?style=flat-square)](https://packagist.org/packages/statix-php/sidecar-virus-scan)

This package is built on [Laravel Sidecar](https://github.com/hammerstonedev/sidecar) and [ClamAVNet](https://www.clamav.net/), it provides a very easy way to deploy a robust virus scanning capability for your Laravel applications. 

## Installation

This package requires that [`hammerstone/sidecar`](https://github.com/hammerstonedev/sidecar) has been installed in your Laravel application.

You can install the package via composer:

```bash
composer require statix-php/sidecar-virus-scan
```

You can optionally publish the config file with:

```bash
php artisan vendor:publish --tag="sidecar-virus-scan-config"
```

This is the contents of the published config file:

```php
return [
    //
];
```

Register the `ScanForVirusFunction::class` in your `sidecar.php` config file.

```php
/*
 * All of your function classes that you'd like to deploy go here.
 */
'functions' => [
    \Statix\VirusScan\Functions\ScanForVirusFunction::class,
],
```

Deploy the Lambda function by running:

```bash
php artisan sidecar:deploy --activate
```

See Sidecar documentation for details.

## Usage

```php
$virusScan = new Statix\VirusScan();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Wyatt Castaneda](https://github.com/statix-php)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
