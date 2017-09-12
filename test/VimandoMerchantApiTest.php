<?php
/**
 * MerchantApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Vimando\Api\Merchant
 */

/**
 * Merchant API
 *
 *
 */


namespace Vimando\Api\Merchant;

require_once(__DIR__ . '/../vendor/autoload.php');



/**
 * MerchantApiTest Class Doc Comment
 *
 * @category Class
 * @package  Vimando\Api\Merchant
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VimandoMerchantApiTest extends \PHPUnit_Framework_TestCase
{
    private $api;

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        $this->api = new VimandoMerchantApi();
        $this->api->authenticate("https://shop.vimando.com","apikey","username","password");
        $this->api->setDebugMode(TRUE);
    }

    /**
     * Test case for getOrderImport
     *
     * getOrderImport.
     *
     */
    public function testGetOrderImport()
    {
        $vimandoMerchantApi = $this->api;

        $id = "1000";

        try {
            $result = $vimandoMerchantApi->getOrderImport($id);
            print_r($result);
        } catch (ApiException $e) {
            echo 'Exception when calling MerchantApi->getOrderImport: ', $e->getMessage(), PHP_EOL;
            /* get error data */
            $errorResponse = $vimandoMerchantApi->getErrorResponse($e);
            echo 'Got ErrorResponse Code: ', $errorResponse->getCode(), PHP_EOL;
        }
    }

    /**
     * Test case for getOrderState
     *
     * getOrderState.
     *
     */
    public function testGetOrderState()
    {
        $vimandoMerchantApi = $this->api;

        $id = "1000";

        try {
            $orderState = $vimandoMerchantApi->getOrderState($id);

            print_r($orderState);

            foreach($orderState->getDelivery() as $delivery){
                if(VimandoMerchantApi::CODES_OrderDelivery_ORDER_RECIVED == $delivery->getStateCode()){
                    echo 'Order was prepared for shipping : ', $orderState->getId(), PHP_EOL;
                }
            }

        } catch (ApiException $e) {
            echo 'Exception when calling MerchantApi->getOrderImportState: ', $e->getMessage(), PHP_EOL;
            /* get error data */
            $errorResponse = $vimandoMerchantApi->getErrorResponse($e);
            echo 'Got ErrorResponse Code: ', $errorResponse->getCode(), PHP_EOL;
        }
    }

    /**
     * Test case for importOrder
     *
     * importOrder.
     *
     */
    public function testImportOrder()
    {
        $vimandoMerchantApi = $this->api;

        try {

            /* customer information */
            $customer = new Model\Customer();
            $customer->setCountry(Model\Customer::COUNTRY_DE);
            $customer->setEmail("customer@gmail.com");
            $customer->setSalutation(Model\Customer::SALUTATION__1);
            $customer->setFirstname("Customer");
            $customer->setLastname("Customer");
            $customer->setStreet("Customerstreet");
            $customer->setStreetNumber("3");
            $customer->setStreetAdditional("");
            $customer->setZip("80000");
            $customer->setCity("Berlin");

            /* order position */
            $position = new Model\Position();
            $position->setSku("WP10004939-0-387");
            $position->setCount(1);

            /* format parameter */
            $formatDimension = new Model\FormatDimension();
            $formatDimension->setWidth(260);
            $formatDimension->setHeight(390);

            $position->setParameters(array($formatDimension));

            /* order object */
            $order = new Model\Order(); // \Vimando\Api\Merchant\Model\Order
            $order->setId(uniqid());
            $order->setCountry("DE");
            $order->setLocale("de");
            $order->setCurrency("EUR");
            $order->setCustomer($customer);

            /* order position list */
            $order->setPositions(array($position));

            /* call importOrder API */
            $orderImport = $vimandoMerchantApi->importOrder($order);

            /* print returned data */
            print_r($orderImport);
        } catch (ApiException $e) {
            echo 'Exception when calling MerchantApi->importOrder: ', $e->getMessage(), PHP_EOL;
            /* get error data */
            $errorResponse = $vimandoMerchantApi->getErrorResponse($e);
            echo 'Got ErrorResponse Code: ', $errorResponse->getCode(), PHP_EOL;
        }
    }

    /**
     * Test case for listOrderImports
     *
     * listOrderImports.
     *
     */
    public function testListOrderImports()
    {
        $vimandoMerchantApi = $this->api;

        try {
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
    }

    /**
     * Test case for order from json
     *
     */
    public function testOrderJson()
    {
        $vimandoMerchantApi = $this->api;

        try {

            /* read order from json */
            $orderJson = json_decode(file_get_contents(__DIR__ . "/order.json"),true);

            $order = new Model\Order($orderJson);
            $order->setId(uniqid());

            /* call importOrder API */
            $orderImport = $vimandoMerchantApi->importOrder($order);

            /* print returned data */
            print_r($orderImport);
        } catch (ApiException $e) {
            echo 'Exception when calling MerchantApi->importOrder: ', $e->getMessage(), PHP_EOL;
            /* get error data */
            $errorResponse = $vimandoMerchantApi->getErrorResponse($e);
            echo 'Got ErrorResponse Code: ', $errorResponse->getCode(), PHP_EOL;
        }
    }

    /**
     * Test case for upload
     *
     * upload.
     *
     */
    public function testUpload()
    {
        $vimandoMerchantApi = $this->api;

        try {
            $file = __DIR__ . "/mountain.jpg";
            $uploadedFile = $vimandoMerchantApi->upload($file);
            print_r($uploadedFile);
            $fileId = $uploadedFile->getId();
            echo 'File ID: ', $fileId, PHP_EOL;
        } catch (ApiException $e) {
            echo 'Exception when calling MerchantApi->upload: ', $e->getMessage(), PHP_EOL;
            /* get error data */
            $errorResponse = $vimandoMerchantApi->getErrorResponse($e);
            echo 'Got ErrorResponse Code: ', $errorResponse->getCode(), PHP_EOL;
        }
    }
}
