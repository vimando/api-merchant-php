<?php

namespace Client;

require 'vendor/autoload.php';

use Vimando\Api\Merchant\VimandoMerchantApi;

try {
    $vimandoMerchantApi = new VimandoMerchantApi();
    $vimandoMerchantApi->authenticate("https://shop.vimando.com","apikey","username","password");
    $vimandoMerchantApi->setDebugMode(TRUE);

    /* call listOrderImports API */
    $orderImportList = $vimandoMerchantApi->listOrderImports(1,50);
    /* print result count */
    echo 'OrderImport count : ', $orderImportList->getCount(), PHP_EOL;
    /* iterate over results */
    foreach($orderImportList->getOrderImports() as $orderImport){
        /* print orderImport */
        print_r($orderImport);
        if(VimandoMerchantApi::CODES_OrderImport_FAILED == $orderImport->getStateCode()){
            echo 'OrderImport failed : ', $orderImport->getInfo(), PHP_EOL;
        }
    }
} catch (ApiException $e) {
    echo 'Exception when calling MerchantApi->listOrderImports: ', $e->getMessage(), PHP_EOL;
    /* get error data */
    $errorResponse = $vimandoMerchantApi->getErrorResponse($e);
    echo 'Got ErrorResponse Code: ', $errorResponse->getCode(), PHP_EOL;
}