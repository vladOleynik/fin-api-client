<?php
/**
 * RemoveInterfaceParams
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * finAPI Access (alpha build)
 *
 * RESTful API for Account Information Services (AIS) and Payment Initiation Services (PIS) (alpha build)
 *
 * OpenAPI spec version: alpha
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17
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
 * RemoveInterfaceParams Class Doc Comment
 *
 * @category Class
 * @description Container for interface removal parameters
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RemoveInterfaceParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RemoveInterfaceParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bank_connection_id' => 'int',
        'interface' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bank_connection_id' => 'int64',
        'interface' => null
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
        'bank_connection_id' => 'bankConnectionId',
        'interface' => 'interface'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_connection_id' => 'setBankConnectionId',
        'interface' => 'setInterface'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_connection_id' => 'getBankConnectionId',
        'interface' => 'getInterface'
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

    const MODEL_INTERFACE_FINTS_SERVER = 'FINTS_SERVER';
    const MODEL_INTERFACE_WEB_SCRAPER = 'WEB_SCRAPER';
    const MODEL_INTERFACE_XS2_A = 'XS2A';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInterfaceAllowableValues()
    {
        return [
            self::MODEL_INTERFACE_FINTS_SERVER,
            self::MODEL_INTERFACE_WEB_SCRAPER,
            self::MODEL_INTERFACE_XS2_A,
        ];
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
        $this->container['bank_connection_id'] = isset($data['bank_connection_id']) ? $data['bank_connection_id'] : null;
        $this->container['interface'] = isset($data['interface']) ? $data['interface'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bank_connection_id'] === null) {
            $invalidProperties[] = "'bank_connection_id' can't be null";
        }
        $allowedValues = $this->getInterfaceAllowableValues();
        if (!is_null($this->container['interface']) && !in_array($this->container['interface'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'interface', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets bank_connection_id
     *
     * @return int
     */
    public function getBankConnectionId()
    {
        return $this->container['bank_connection_id'];
    }

    /**
     * Sets bank_connection_id
     *
     * @param int $bank_connection_id Bank connection identifier
     *
     * @return $this
     */
    public function setBankConnectionId($bank_connection_id)
    {
        $this->container['bank_connection_id'] = $bank_connection_id;

        return $this;
    }

    /**
     * Gets interface
     *
     * @return string
     */
    public function getInterface()
    {
        return $this->container['interface'];
    }

    /**
     * Sets interface
     *
     * @param string $interface The interface which you want to remove.
     *
     * @return $this
     */
    public function setInterface($interface)
    {
        $allowedValues = $this->getInterfaceAllowableValues();
        if (!is_null($interface) && !in_array($interface, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'interface', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['interface'] = $interface;

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


