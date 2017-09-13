# API Merchant PHP

PHP Library for accessing the Vimando Merchant [Rest API](https://www.vimando.com/docs/api/merchant.html).

## Requirements

PHP 5.4.0 and later

## Installation & Usage

### Composer

This repository is published on Packagist.
Visit the package page here: [api-merchant-php](https://packagist.org/packages/vimando/api-merchant-php).


Install with composer cli
> composer require vimando/api-merchant-php

Or add dependency to composer.json
```
{
  "require": {
          "vimando/api-merchant-php": "^0.1.0"
   }
}
```
Then run `composer install`


You vendor folder should now contain a folder called "vimando".

```php
    require 'vendor/autoload.php';

    use Vimando\Api\Merchant\VimandoMerchantApi;

    $vimandoMerchantApi = new VimandoMerchantApi();
```


### Manual Code Installation

Download the files and include `autoload.php`:

```php
    require_once(__DIR__ . '/api-merchant-php/autoload.php');

    use Vimando\Api\Merchant\VimandoMerchantApi;

    $vimandoMerchantApi = new VimandoMerchantApi();
```

## Sample
The folder [sample](sample) contains a composer project with a sample client application. 
