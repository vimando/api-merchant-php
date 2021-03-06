<?php
/**
 * OrderDelivery
 *
 * PHP version 5
 *
 * @category Class
 * @package  Vimando\Api\Merchant
 * @author   Swaagger Codegen team
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

namespace Vimando\Api\Merchant\Model;

use \ArrayAccess;

/**
 * OrderDelivery Class Doc Comment
 *
 * @category    Class
 * @package     Vimando\Api\Merchant
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderDelivery implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OrderDelivery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'history' => '\Vimando\Api\Merchant\Model\OrderStateHistory[]',
        'id' => 'string',
        'number' => 'string',
        'products' => 'string[]',
        'state' => 'string',
        'state_code' => 'string',
        'text' => 'string',
        'tracking_code' => 'string',
        'tracking_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'history' => null,
        'id' => null,
        'number' => null,
        'products' => null,
        'state' => null,
        'state_code' => null,
        'text' => null,
        'tracking_code' => null,
        'tracking_url' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'history' => 'history',
        'id' => 'id',
        'number' => 'number',
        'products' => 'products',
        'state' => 'state',
        'state_code' => 'stateCode',
        'text' => 'text',
        'tracking_code' => 'trackingCode',
        'tracking_url' => 'trackingUrl'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'history' => 'setHistory',
        'id' => 'setId',
        'number' => 'setNumber',
        'products' => 'setProducts',
        'state' => 'setState',
        'state_code' => 'setStateCode',
        'text' => 'setText',
        'tracking_code' => 'setTrackingCode',
        'tracking_url' => 'setTrackingUrl'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'history' => 'getHistory',
        'id' => 'getId',
        'number' => 'getNumber',
        'products' => 'getProducts',
        'state' => 'getState',
        'state_code' => 'getStateCode',
        'text' => 'getText',
        'tracking_code' => 'getTrackingCode',
        'tracking_url' => 'getTrackingUrl'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['history'] = isset($data['history']) ? $data['history'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['state_code'] = isset($data['state_code']) ? $data['state_code'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['tracking_code'] = isset($data['tracking_code']) ? $data['tracking_code'] : null;
        $this->container['tracking_url'] = isset($data['tracking_url']) ? $data['tracking_url'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets history
     * @return \Vimando\Api\Merchant\Model\OrderStateHistory[]
     */
    public function getHistory()
    {
        return $this->container['history'];
    }

    /**
     * Sets history
     * @param \Vimando\Api\Merchant\Model\OrderStateHistory[] $history
     * @return $this
     */
    public function setHistory($history)
    {
        $this->container['history'] = $history;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets number
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     * @param string $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets products
     * @return string[]
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     * @param string[] $products
     * @return $this
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets state_code
     * @return string
     */
    public function getStateCode()
    {
        return $this->container['state_code'];
    }

    /**
     * Sets state_code
     * @param string $state_code
     * @return $this
     */
    public function setStateCode($state_code)
    {
        $this->container['state_code'] = $state_code;

        return $this;
    }

    /**
     * Gets text
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     * @param string $text
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets tracking_code
     * @return string
     */
    public function getTrackingCode()
    {
        return $this->container['tracking_code'];
    }

    /**
     * Sets tracking_code
     * @param string $tracking_code
     * @return $this
     */
    public function setTrackingCode($tracking_code)
    {
        $this->container['tracking_code'] = $tracking_code;

        return $this;
    }

    /**
     * Gets tracking_url
     * @return string
     */
    public function getTrackingUrl()
    {
        return $this->container['tracking_url'];
    }

    /**
     * Sets tracking_url
     * @param string $tracking_url
     * @return $this
     */
    public function setTrackingUrl($tracking_url)
    {
        $this->container['tracking_url'] = $tracking_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Vimando\Api\Merchant\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Vimando\Api\Merchant\ObjectSerializer::sanitizeForSerialization($this));
    }
}


