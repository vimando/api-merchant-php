<?php
/**
 * MerchantApi
 * PHP version 5
 *
 * @category Class
 * @package  Vimando\Api\Merchant
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Merchant API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Vimando\Api\Merchant\Api;

use \Vimando\Api\Merchant\ApiClient;
use \Vimando\Api\Merchant\ApiException;
use \Vimando\Api\Merchant\Configuration;
use \Vimando\Api\Merchant\ObjectSerializer;

/**
 * MerchantApi Class Doc Comment
 *
 * @category Class
 * @package  Vimando\Api\Merchant
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MerchantApi
{
    /**
     * API Client
     *
     * @var \Vimando\Api\Merchant\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Vimando\Api\Merchant\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Vimando\Api\Merchant\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Vimando\Api\Merchant\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Vimando\Api\Merchant\ApiClient $apiClient set the API client
     *
     * @return MerchantApi
     */
    public function setApiClient(\Vimando\Api\Merchant\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getOrderImport
     *
     * getOrderImport
     *
     * @param string $id id (required)
     * @throws \Vimando\Api\Merchant\ApiException on non-2xx response
     * @return \Vimando\Api\Merchant\Model\OrderImport
     */
    public function getOrderImport($id)
    {
        list($response) = $this->getOrderImportWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getOrderImportWithHttpInfo
     *
     * getOrderImport
     *
     * @param string $id id (required)
     * @throws \Vimando\Api\Merchant\ApiException on non-2xx response
     * @return array of \Vimando\Api\Merchant\Model\OrderImport, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrderImportWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getOrderImport');
        }
        // parse inputs
        $resourcePath = "/api/merchant/orders/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('MERCHANT-KEY');
        if (strlen($apiKey) !== 0) {
            $headerParams['MERCHANT-KEY'] = $apiKey;
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Vimando\Api\Merchant\Model\OrderImport',
                '/api/merchant/orders/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Vimando\Api\Merchant\Model\OrderImport', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\OrderImport', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getOrderState
     *
     * getOrderState
     *
     * @param string $id id (required)
     * @throws \Vimando\Api\Merchant\ApiException on non-2xx response
     * @return \Vimando\Api\Merchant\Model\OrderState
     */
    public function getOrderState($id)
    {
        list($response) = $this->getOrderStateWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getOrderStateWithHttpInfo
     *
     * getOrderState
     *
     * @param string $id id (required)
     * @throws \Vimando\Api\Merchant\ApiException on non-2xx response
     * @return array of \Vimando\Api\Merchant\Model\OrderState, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrderStateWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getOrderState');
        }
        // parse inputs
        $resourcePath = "/api/merchant/orders/{id}/state";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('MERCHANT-KEY');
        if (strlen($apiKey) !== 0) {
            $headerParams['MERCHANT-KEY'] = $apiKey;
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Vimando\Api\Merchant\Model\OrderState',
                '/api/merchant/orders/{id}/state'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Vimando\Api\Merchant\Model\OrderState', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\OrderState', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation importOrder
     *
     * importOrder
     *
     * @param \Vimando\Api\Merchant\Model\Order $order order (required)
     * @throws \Vimando\Api\Merchant\ApiException on non-2xx response
     * @return \Vimando\Api\Merchant\Model\OrderImport
     */
    public function importOrder($order)
    {
        list($response) = $this->importOrderWithHttpInfo($order);
        return $response;
    }

    /**
     * Operation importOrderWithHttpInfo
     *
     * importOrder
     *
     * @param \Vimando\Api\Merchant\Model\Order $order order (required)
     * @throws \Vimando\Api\Merchant\ApiException on non-2xx response
     * @return array of \Vimando\Api\Merchant\Model\OrderImport, HTTP status code, HTTP response headers (array of strings)
     */
    public function importOrderWithHttpInfo($order)
    {
        // verify the required parameter 'order' is set
        if ($order === null) {
            throw new \InvalidArgumentException('Missing the required parameter $order when calling importOrder');
        }
        // parse inputs
        $resourcePath = "/api/merchant/orders";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($order)) {
            $_tempBody = $order;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('MERCHANT-KEY');
        if (strlen($apiKey) !== 0) {
            $headerParams['MERCHANT-KEY'] = $apiKey;
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Vimando\Api\Merchant\Model\OrderImport',
                '/api/merchant/orders'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Vimando\Api\Merchant\Model\OrderImport', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\OrderImport', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listOrderImports
     *
     * listOrderImports
     *
     * @param \Vimando\Api\Merchant\Model\Object $page Results page you want to retrieve (1..N) (optional)
     * @param \Vimando\Api\Merchant\Model\Object $size Number of records per page. (optional)
     * @throws \Vimando\Api\Merchant\ApiException on non-2xx response
     * @return \Vimando\Api\Merchant\Model\OrderImportList
     */
    public function listOrderImports($page = null, $size = null)
    {
        list($response) = $this->listOrderImportsWithHttpInfo($page, $size);
        return $response;
    }

    /**
     * Operation listOrderImportsWithHttpInfo
     *
     * listOrderImports
     *
     * @param \Vimando\Api\Merchant\Model\Object $page Results page you want to retrieve (1..N) (optional)
     * @param \Vimando\Api\Merchant\Model\Object $size Number of records per page. (optional)
     * @throws \Vimando\Api\Merchant\ApiException on non-2xx response
     * @return array of \Vimando\Api\Merchant\Model\OrderImportList, HTTP status code, HTTP response headers (array of strings)
     */
    public function listOrderImportsWithHttpInfo($page = null, $size = null)
    {
        // parse inputs
        $resourcePath = "/api/merchant/orders";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($size !== null) {
            $queryParams['size'] = $this->apiClient->getSerializer()->toQueryValue($size);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('MERCHANT-KEY');
        if (strlen($apiKey) !== 0) {
            $headerParams['MERCHANT-KEY'] = $apiKey;
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Vimando\Api\Merchant\Model\OrderImportList',
                '/api/merchant/orders'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Vimando\Api\Merchant\Model\OrderImportList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\OrderImportList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation upload
     *
     * upload
     *
     * @param \SplFileObject $file file (required)
     * @throws \Vimando\Api\Merchant\ApiException on non-2xx response
     * @return \Vimando\Api\Merchant\Model\UploadedFile
     */
    public function upload($file)
    {
        list($response) = $this->uploadWithHttpInfo($file);
        return $response;
    }

    /**
     * Operation uploadWithHttpInfo
     *
     * upload
     *
     * @param \SplFileObject $file file (required)
     * @throws \Vimando\Api\Merchant\ApiException on non-2xx response
     * @return array of \Vimando\Api\Merchant\Model\UploadedFile, HTTP status code, HTTP response headers (array of strings)
     */
    public function uploadWithHttpInfo($file)
    {
        // verify the required parameter 'file' is set
        if ($file === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file when calling upload');
        }
        // parse inputs
        $resourcePath = "/api/merchant/upload";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['multipart/form-data']);

        // form params
        if ($file !== null) {
            // PHP 5.5 introduced a CurlFile object that deprecates the old @filename syntax
            // See: https://wiki.php.net/rfc/curl-file-upload
            if (function_exists('curl_file_create')) {
                $formParams['file'] = curl_file_create($this->apiClient->getSerializer()->toFormValue($file));
            } else {
                $formParams['file'] = '@' . $this->apiClient->getSerializer()->toFormValue($file);
            }
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('MERCHANT-KEY');
        if (strlen($apiKey) !== 0) {
            $headerParams['MERCHANT-KEY'] = $apiKey;
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Vimando\Api\Merchant\Model\UploadedFile',
                '/api/merchant/upload'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Vimando\Api\Merchant\Model\UploadedFile', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\UploadedFile', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Vimando\Api\Merchant\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
