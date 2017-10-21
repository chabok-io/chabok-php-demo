<?php
/**
 * Push
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Chabok Push
 *
 * Integrate your app with Chabok messaging & push api seamlessly
 *
 * OpenAPI spec version: 1.19.6
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Push Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Push implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'push';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'application' => 'string',
        'user' => 'string',
        'channel' => 'string',
        'content' => 'string',
        'content_binary' => 'string',
        'content_type' => 'string',
        'fallback' => 'object',
        'target' => 'object',
        'track_id' => 'string',
        'client_id' => 'string',
        'use_as_alert' => 'bool',
        'alert_text' => 'string',
        'idr' => 'bool',
        'data' => 'object',
        'in_app' => 'bool',
        'live' => 'bool',
        'ttl' => 'double',
        'notification' => 'object',
        'silent' => 'bool',
        'id' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'application' => null,
        'user' => null,
        'channel' => null,
        'content' => null,
        'content_binary' => null,
        'content_type' => null,
        'fallback' => null,
        'target' => null,
        'track_id' => null,
        'client_id' => null,
        'use_as_alert' => null,
        'alert_text' => null,
        'idr' => null,
        'data' => null,
        'in_app' => null,
        'live' => null,
        'ttl' => 'double',
        'notification' => null,
        'silent' => null,
        'id' => 'double'
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
        'application' => 'application',
        'user' => 'user',
        'channel' => 'channel',
        'content' => 'content',
        'content_binary' => 'contentBinary',
        'content_type' => 'contentType',
        'fallback' => 'fallback',
        'target' => 'target',
        'track_id' => 'trackId',
        'client_id' => 'clientId',
        'use_as_alert' => 'useAsAlert',
        'alert_text' => 'alertText',
        'idr' => 'idr',
        'data' => 'data',
        'in_app' => 'inApp',
        'live' => 'live',
        'ttl' => 'ttl',
        'notification' => 'notification',
        'silent' => 'silent',
        'id' => 'id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'application' => 'setApplication',
        'user' => 'setUser',
        'channel' => 'setChannel',
        'content' => 'setContent',
        'content_binary' => 'setContentBinary',
        'content_type' => 'setContentType',
        'fallback' => 'setFallback',
        'target' => 'setTarget',
        'track_id' => 'setTrackId',
        'client_id' => 'setClientId',
        'use_as_alert' => 'setUseAsAlert',
        'alert_text' => 'setAlertText',
        'idr' => 'setIdr',
        'data' => 'setData',
        'in_app' => 'setInApp',
        'live' => 'setLive',
        'ttl' => 'setTtl',
        'notification' => 'setNotification',
        'silent' => 'setSilent',
        'id' => 'setId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'application' => 'getApplication',
        'user' => 'getUser',
        'channel' => 'getChannel',
        'content' => 'getContent',
        'content_binary' => 'getContentBinary',
        'content_type' => 'getContentType',
        'fallback' => 'getFallback',
        'target' => 'getTarget',
        'track_id' => 'getTrackId',
        'client_id' => 'getClientId',
        'use_as_alert' => 'getUseAsAlert',
        'alert_text' => 'getAlertText',
        'idr' => 'getIdr',
        'data' => 'getData',
        'in_app' => 'getInApp',
        'live' => 'getLive',
        'ttl' => 'getTtl',
        'notification' => 'getNotification',
        'silent' => 'getSilent',
        'id' => 'getId'
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
        $this->container['application'] = isset($data['application']) ? $data['application'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['content_binary'] = isset($data['content_binary']) ? $data['content_binary'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['fallback'] = isset($data['fallback']) ? $data['fallback'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['track_id'] = isset($data['track_id']) ? $data['track_id'] : null;
        $this->container['client_id'] = isset($data['client_id']) ? $data['client_id'] : null;
        $this->container['use_as_alert'] = isset($data['use_as_alert']) ? $data['use_as_alert'] : null;
        $this->container['alert_text'] = isset($data['alert_text']) ? $data['alert_text'] : null;
        $this->container['idr'] = isset($data['idr']) ? $data['idr'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['in_app'] = isset($data['in_app']) ? $data['in_app'] : null;
        $this->container['live'] = isset($data['live']) ? $data['live'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['notification'] = isset($data['notification']) ? $data['notification'] : null;
        $this->container['silent'] = isset($data['silent']) ? $data['silent'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['application'] === null) {
            $invalid_properties[] = "'application' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalid_properties[] = "'user' can't be null";
        }
        if ($this->container['channel'] === null) {
            $invalid_properties[] = "'channel' can't be null";
        }
        if ($this->container['content'] === null) {
            $invalid_properties[] = "'content' can't be null";
        }
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

        if ($this->container['application'] === null) {
            return false;
        }
        if ($this->container['user'] === null) {
            return false;
        }
        if ($this->container['channel'] === null) {
            return false;
        }
        if ($this->container['content'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets application
     * @return string
     */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
     * Sets application
     * @param string $application
     * @return $this
     */
    public function setApplication($application)
    {
        $this->container['application'] = $application;

        return $this;
    }

    /**
     * Gets user
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     * @param string $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets channel
     * @return string
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     * @param string $channel
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets content
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets content_binary
     * @return string
     */
    public function getContentBinary()
    {
        return $this->container['content_binary'];
    }

    /**
     * Sets content_binary
     * @param string $content_binary
     * @return $this
     */
    public function setContentBinary($content_binary)
    {
        $this->container['content_binary'] = $content_binary;

        return $this;
    }

    /**
     * Gets content_type
     * @return string
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     * @param string $content_type
     * @return $this
     */
    public function setContentType($content_type)
    {
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets fallback
     * @return object
     */
    public function getFallback()
    {
        return $this->container['fallback'];
    }

    /**
     * Sets fallback
     * @param object $fallback
     * @return $this
     */
    public function setFallback($fallback)
    {
        $this->container['fallback'] = $fallback;

        return $this;
    }

    /**
     * Gets target
     * @return object
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     * @param object $target
     * @return $this
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets track_id
     * @return string
     */
    public function getTrackId()
    {
        return $this->container['track_id'];
    }

    /**
     * Sets track_id
     * @param string $track_id
     * @return $this
     */
    public function setTrackId($track_id)
    {
        $this->container['track_id'] = $track_id;

        return $this;
    }

    /**
     * Gets client_id
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     * @param string $client_id
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets use_as_alert
     * @return bool
     */
    public function getUseAsAlert()
    {
        return $this->container['use_as_alert'];
    }

    /**
     * Sets use_as_alert
     * @param bool $use_as_alert
     * @return $this
     */
    public function setUseAsAlert($use_as_alert)
    {
        $this->container['use_as_alert'] = $use_as_alert;

        return $this;
    }

    /**
     * Gets alert_text
     * @return string
     */
    public function getAlertText()
    {
        return $this->container['alert_text'];
    }

    /**
     * Sets alert_text
     * @param string $alert_text
     * @return $this
     */
    public function setAlertText($alert_text)
    {
        $this->container['alert_text'] = $alert_text;

        return $this;
    }

    /**
     * Gets idr
     * @return bool
     */
    public function getIdr()
    {
        return $this->container['idr'];
    }

    /**
     * Sets idr
     * @param bool $idr
     * @return $this
     */
    public function setIdr($idr)
    {
        $this->container['idr'] = $idr;

        return $this;
    }

    /**
     * Gets data
     * @return object
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     * @param object $data
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets in_app
     * @return bool
     */
    public function getInApp()
    {
        return $this->container['in_app'];
    }

    /**
     * Sets in_app
     * @param bool $in_app
     * @return $this
     */
    public function setInApp($in_app)
    {
        $this->container['in_app'] = $in_app;

        return $this;
    }

    /**
     * Gets live
     * @return bool
     */
    public function getLive()
    {
        return $this->container['live'];
    }

    /**
     * Sets live
     * @param bool $live
     * @return $this
     */
    public function setLive($live)
    {
        $this->container['live'] = $live;

        return $this;
    }

    /**
     * Gets ttl
     * @return double
     */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
     * Sets ttl
     * @param double $ttl
     * @return $this
     */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;

        return $this;
    }

    /**
     * Gets notification
     * @return object
     */
    public function getNotification()
    {
        return $this->container['notification'];
    }

    /**
     * Sets notification
     * @param object $notification
     * @return $this
     */
    public function setNotification($notification)
    {
        $this->container['notification'] = $notification;

        return $this;
    }

    /**
     * Gets silent
     * @return bool
     */
    public function getSilent()
    {
        return $this->container['silent'];
    }

    /**
     * Sets silent
     * @param bool $silent
     * @return $this
     */
    public function setSilent($silent)
    {
        $this->container['silent'] = $silent;

        return $this;
    }

    /**
     * Gets id
     * @return double
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param double $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

