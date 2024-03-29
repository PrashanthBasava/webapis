<?php
/**
 * ProductDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * A title for your API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.6-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ProductDetails Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchant_id' => 'int',
        'api_key' => 'string',
        'url' => 'string',
        'version' => 'string',
        'card_no' => 'string',
        'total' => 'int',
        'ip_address' => 'string',
        'email' => 'string',
        'session_id' => 'string',
        'mack' => 'string',
        'product_type' => 'string',
        'product_item' => 'string',
        'product_description' => 'string',
        'product_quantity' => 'int',
        'product_price' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchant_id' => 'int32',
        'api_key' => null,
        'url' => null,
        'version' => null,
        'card_no' => null,
        'total' => 'int32',
        'ip_address' => null,
        'email' => null,
        'session_id' => null,
        'mack' => null,
        'product_type' => null,
        'product_item' => null,
        'product_description' => null,
        'product_quantity' => 'int64',
        'product_price' => 'int64'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'merchant_id' => 'merchantId',
        'api_key' => 'apiKey',
        'url' => 'url',
        'version' => 'version',
        'card_no' => 'cardNo',
        'total' => 'total',
        'ip_address' => 'ipAddress',
        'email' => 'email',
        'session_id' => 'sessionId',
        'mack' => 'mack',
        'product_type' => 'productType',
        'product_item' => 'productItem',
        'product_description' => 'productDescription',
        'product_quantity' => 'productQuantity',
        'product_price' => 'productPrice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_id' => 'setMerchantId',
        'api_key' => 'setApiKey',
        'url' => 'setUrl',
        'version' => 'setVersion',
        'card_no' => 'setCardNo',
        'total' => 'setTotal',
        'ip_address' => 'setIpAddress',
        'email' => 'setEmail',
        'session_id' => 'setSessionId',
        'mack' => 'setMack',
        'product_type' => 'setProductType',
        'product_item' => 'setProductItem',
        'product_description' => 'setProductDescription',
        'product_quantity' => 'setProductQuantity',
        'product_price' => 'setProductPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_id' => 'getMerchantId',
        'api_key' => 'getApiKey',
        'url' => 'getUrl',
        'version' => 'getVersion',
        'card_no' => 'getCardNo',
        'total' => 'getTotal',
        'ip_address' => 'getIpAddress',
        'email' => 'getEmail',
        'session_id' => 'getSessionId',
        'mack' => 'getMack',
        'product_type' => 'getProductType',
        'product_item' => 'getProductItem',
        'product_description' => 'getProductDescription',
        'product_quantity' => 'getProductQuantity',
        'product_price' => 'getProductPrice'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['api_key'] = isset($data['api_key']) ? $data['api_key'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['card_no'] = isset($data['card_no']) ? $data['card_no'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['session_id'] = isset($data['session_id']) ? $data['session_id'] : null;
        $this->container['mack'] = isset($data['mack']) ? $data['mack'] : null;
        $this->container['product_type'] = isset($data['product_type']) ? $data['product_type'] : null;
        $this->container['product_item'] = isset($data['product_item']) ? $data['product_item'] : null;
        $this->container['product_description'] = isset($data['product_description']) ? $data['product_description'] : null;
        $this->container['product_quantity'] = isset($data['product_quantity']) ? $data['product_quantity'] : null;
        $this->container['product_price'] = isset($data['product_price']) ? $data['product_price'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets merchant_id
     *
     * @return int
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param int $merchant_id merchant_id
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets api_key
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     *
     * @param string $api_key api_key
     *
     * @return $this
     */
    public function setApiKey($api_key)
    {
        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets card_no
     *
     * @return string
     */
    public function getCardNo()
    {
        return $this->container['card_no'];
    }

    /**
     * Sets card_no
     *
     * @param string $card_no card_no
     *
     * @return $this
     */
    public function setCardNo($card_no)
    {
        $this->container['card_no'] = $card_no;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets ip_address
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param string $ip_address ip_address
     *
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets session_id
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     *
     * @param string $session_id session_id
     *
     * @return $this
     */
    public function setSessionId($session_id)
    {
        $this->container['session_id'] = $session_id;

        return $this;
    }

    /**
     * Gets mack
     *
     * @return string
     */
    public function getMack()
    {
        return $this->container['mack'];
    }

    /**
     * Sets mack
     *
     * @param string $mack mack
     *
     * @return $this
     */
    public function setMack($mack)
    {
        $this->container['mack'] = $mack;

        return $this;
    }

    /**
     * Gets product_type
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type
     *
     * @param string $product_type product_type
     *
     * @return $this
     */
    public function setProductType($product_type)
    {
        $this->container['product_type'] = $product_type;

        return $this;
    }

    /**
     * Gets product_item
     *
     * @return string
     */
    public function getProductItem()
    {
        return $this->container['product_item'];
    }

    /**
     * Sets product_item
     *
     * @param string $product_item product_item
     *
     * @return $this
     */
    public function setProductItem($product_item)
    {
        $this->container['product_item'] = $product_item;

        return $this;
    }

    /**
     * Gets product_description
     *
     * @return string
     */
    public function getProductDescription()
    {
        return $this->container['product_description'];
    }

    /**
     * Sets product_description
     *
     * @param string $product_description product_description
     *
     * @return $this
     */
    public function setProductDescription($product_description)
    {
        $this->container['product_description'] = $product_description;

        return $this;
    }

    /**
     * Gets product_quantity
     *
     * @return int
     */
    public function getProductQuantity()
    {
        return $this->container['product_quantity'];
    }

    /**
     * Sets product_quantity
     *
     * @param int $product_quantity product_quantity
     *
     * @return $this
     */
    public function setProductQuantity($product_quantity)
    {
        $this->container['product_quantity'] = $product_quantity;

        return $this;
    }

    /**
     * Gets product_price
     *
     * @return int
     */
    public function getProductPrice()
    {
        return $this->container['product_price'];
    }

    /**
     * Sets product_price
     *
     * @param int $product_price product_price
     *
     * @return $this
     */
    public function setProductPrice($product_price)
    {
        $this->container['product_price'] = $product_price;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


