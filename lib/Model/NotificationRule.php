<?php
/**
 * NotificationRule
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
 * NotificationRule Class Doc Comment
 *
 * @category Class
 * @description Data of notification rule
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NotificationRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NotificationRule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'trigger_event' => 'string',
        'params' => 'map[string,string]',
        'callback_handle' => 'string',
        'include_details' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'trigger_event' => null,
        'params' => null,
        'callback_handle' => null,
        'include_details' => null
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
        'id' => 'id',
        'trigger_event' => 'triggerEvent',
        'params' => 'params',
        'callback_handle' => 'callbackHandle',
        'include_details' => 'includeDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'trigger_event' => 'setTriggerEvent',
        'params' => 'setParams',
        'callback_handle' => 'setCallbackHandle',
        'include_details' => 'setIncludeDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'trigger_event' => 'getTriggerEvent',
        'params' => 'getParams',
        'callback_handle' => 'getCallbackHandle',
        'include_details' => 'getIncludeDetails'
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

    const TRIGGER_EVENT_NEW_ACCOUNT_BALANCE = 'NEW_ACCOUNT_BALANCE';
    const TRIGGER_EVENT_NEW_TRANSACTIONS = 'NEW_TRANSACTIONS';
    const TRIGGER_EVENT_BANK_LOGIN_ERROR = 'BANK_LOGIN_ERROR';
    const TRIGGER_EVENT_FOREIGN_MONEY_TRANSFER = 'FOREIGN_MONEY_TRANSFER';
    const TRIGGER_EVENT_LOW_ACCOUNT_BALANCE = 'LOW_ACCOUNT_BALANCE';
    const TRIGGER_EVENT_HIGH_TRANSACTION_AMOUNT = 'HIGH_TRANSACTION_AMOUNT';
    const TRIGGER_EVENT_CATEGORY_CASH_FLOW = 'CATEGORY_CASH_FLOW';
    const TRIGGER_EVENT_NEW_TERMS_AND_CONDITIONS = 'NEW_TERMS_AND_CONDITIONS';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTriggerEventAllowableValues()
    {
        return [
            self::TRIGGER_EVENT_NEW_ACCOUNT_BALANCE,
            self::TRIGGER_EVENT_NEW_TRANSACTIONS,
            self::TRIGGER_EVENT_BANK_LOGIN_ERROR,
            self::TRIGGER_EVENT_FOREIGN_MONEY_TRANSFER,
            self::TRIGGER_EVENT_LOW_ACCOUNT_BALANCE,
            self::TRIGGER_EVENT_HIGH_TRANSACTION_AMOUNT,
            self::TRIGGER_EVENT_CATEGORY_CASH_FLOW,
            self::TRIGGER_EVENT_NEW_TERMS_AND_CONDITIONS,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['trigger_event'] = isset($data['trigger_event']) ? $data['trigger_event'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['callback_handle'] = isset($data['callback_handle']) ? $data['callback_handle'] : null;
        $this->container['include_details'] = isset($data['include_details']) ? $data['include_details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['trigger_event'] === null) {
            $invalidProperties[] = "'trigger_event' can't be null";
        }
        $allowedValues = $this->getTriggerEventAllowableValues();
        if (!is_null($this->container['trigger_event']) && !in_array($this->container['trigger_event'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'trigger_event', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['include_details'] === null) {
            $invalidProperties[] = "'include_details' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Notification rule identifier
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets trigger_event
     *
     * @return string
     */
    public function getTriggerEvent()
    {
        return $this->container['trigger_event'];
    }

    /**
     * Sets trigger_event
     *
     * @param string $trigger_event Trigger event type
     *
     * @return $this
     */
    public function setTriggerEvent($trigger_event)
    {
        $allowedValues = $this->getTriggerEventAllowableValues();
        if (!in_array($trigger_event, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'trigger_event', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['trigger_event'] = $trigger_event;

        return $this;
    }

    /**
     * Gets params
     *
     * @return map[string,string]
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * Sets params
     *
     * @param map[string,string] $params Additional parameters that are specific to the trigger event type. Please refer to the documentation for details.
     *
     * @return $this
     */
    public function setParams($params)
    {
        $this->container['params'] = $params;

        return $this;
    }

    /**
     * Gets callback_handle
     *
     * @return string
     */
    public function getCallbackHandle()
    {
        return $this->container['callback_handle'];
    }

    /**
     * Sets callback_handle
     *
     * @param string $callback_handle The string that finAPI includes into the notifications that it sends based on this rule.
     *
     * @return $this
     */
    public function setCallbackHandle($callback_handle)
    {
        $this->container['callback_handle'] = $callback_handle;

        return $this;
    }

    /**
     * Gets include_details
     *
     * @return bool
     */
    public function getIncludeDetails()
    {
        return $this->container['include_details'];
    }

    /**
     * Sets include_details
     *
     * @param bool $include_details Whether the notification messages that will be sent based on this rule contain encrypted detailed data or not
     *
     * @return $this
     */
    public function setIncludeDetails($include_details)
    {
        $this->container['include_details'] = $include_details;

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


