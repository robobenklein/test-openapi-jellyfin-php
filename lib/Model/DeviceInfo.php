<?php
/**
 * DeviceInfo
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Jellyfin API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 10.8.10
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * DeviceInfo Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DeviceInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeviceInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'access_token' => 'string',
        'id' => 'string',
        'last_user_name' => 'string',
        'app_name' => 'string',
        'app_version' => 'string',
        'last_user_id' => 'string',
        'date_last_activity' => '\DateTime',
        'capabilities' => '\OpenAPI\Client\Model\DeviceInfoCapabilities',
        'icon_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'access_token' => null,
        'id' => null,
        'last_user_name' => null,
        'app_name' => null,
        'app_version' => null,
        'last_user_id' => 'uuid',
        'date_last_activity' => 'date-time',
        'capabilities' => null,
        'icon_url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => true,
		'access_token' => true,
		'id' => true,
		'last_user_name' => true,
		'app_name' => true,
		'app_version' => true,
		'last_user_id' => false,
		'date_last_activity' => false,
		'capabilities' => true,
		'icon_url' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'Name',
        'access_token' => 'AccessToken',
        'id' => 'Id',
        'last_user_name' => 'LastUserName',
        'app_name' => 'AppName',
        'app_version' => 'AppVersion',
        'last_user_id' => 'LastUserId',
        'date_last_activity' => 'DateLastActivity',
        'capabilities' => 'Capabilities',
        'icon_url' => 'IconUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'access_token' => 'setAccessToken',
        'id' => 'setId',
        'last_user_name' => 'setLastUserName',
        'app_name' => 'setAppName',
        'app_version' => 'setAppVersion',
        'last_user_id' => 'setLastUserId',
        'date_last_activity' => 'setDateLastActivity',
        'capabilities' => 'setCapabilities',
        'icon_url' => 'setIconUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'access_token' => 'getAccessToken',
        'id' => 'getId',
        'last_user_name' => 'getLastUserName',
        'app_name' => 'getAppName',
        'app_version' => 'getAppVersion',
        'last_user_id' => 'getLastUserId',
        'date_last_activity' => 'getDateLastActivity',
        'capabilities' => 'getCapabilities',
        'icon_url' => 'getIconUrl'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('access_token', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('last_user_name', $data ?? [], null);
        $this->setIfExists('app_name', $data ?? [], null);
        $this->setIfExists('app_version', $data ?? [], null);
        $this->setIfExists('last_user_id', $data ?? [], null);
        $this->setIfExists('date_last_activity', $data ?? [], null);
        $this->setIfExists('capabilities', $data ?? [], null);
        $this->setIfExists('icon_url', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets access_token
     *
     * @return string|null
     */
    public function getAccessToken()
    {
        return $this->container['access_token'];
    }

    /**
     * Sets access_token
     *
     * @param string|null $access_token Gets or sets the access token.
     *
     * @return self
     */
    public function setAccessToken($access_token)
    {
        if (is_null($access_token)) {
            array_push($this->openAPINullablesSetToNull, 'access_token');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('access_token', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['access_token'] = $access_token;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Gets or sets the identifier.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets last_user_name
     *
     * @return string|null
     */
    public function getLastUserName()
    {
        return $this->container['last_user_name'];
    }

    /**
     * Sets last_user_name
     *
     * @param string|null $last_user_name Gets or sets the last name of the user.
     *
     * @return self
     */
    public function setLastUserName($last_user_name)
    {
        if (is_null($last_user_name)) {
            array_push($this->openAPINullablesSetToNull, 'last_user_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_user_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_user_name'] = $last_user_name;

        return $this;
    }

    /**
     * Gets app_name
     *
     * @return string|null
     */
    public function getAppName()
    {
        return $this->container['app_name'];
    }

    /**
     * Sets app_name
     *
     * @param string|null $app_name Gets or sets the name of the application.
     *
     * @return self
     */
    public function setAppName($app_name)
    {
        if (is_null($app_name)) {
            array_push($this->openAPINullablesSetToNull, 'app_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('app_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['app_name'] = $app_name;

        return $this;
    }

    /**
     * Gets app_version
     *
     * @return string|null
     */
    public function getAppVersion()
    {
        return $this->container['app_version'];
    }

    /**
     * Sets app_version
     *
     * @param string|null $app_version Gets or sets the application version.
     *
     * @return self
     */
    public function setAppVersion($app_version)
    {
        if (is_null($app_version)) {
            array_push($this->openAPINullablesSetToNull, 'app_version');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('app_version', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['app_version'] = $app_version;

        return $this;
    }

    /**
     * Gets last_user_id
     *
     * @return string|null
     */
    public function getLastUserId()
    {
        return $this->container['last_user_id'];
    }

    /**
     * Sets last_user_id
     *
     * @param string|null $last_user_id Gets or sets the last user identifier.
     *
     * @return self
     */
    public function setLastUserId($last_user_id)
    {
        if (is_null($last_user_id)) {
            throw new \InvalidArgumentException('non-nullable last_user_id cannot be null');
        }
        $this->container['last_user_id'] = $last_user_id;

        return $this;
    }

    /**
     * Gets date_last_activity
     *
     * @return \DateTime|null
     */
    public function getDateLastActivity()
    {
        return $this->container['date_last_activity'];
    }

    /**
     * Sets date_last_activity
     *
     * @param \DateTime|null $date_last_activity Gets or sets the date last modified.
     *
     * @return self
     */
    public function setDateLastActivity($date_last_activity)
    {
        if (is_null($date_last_activity)) {
            throw new \InvalidArgumentException('non-nullable date_last_activity cannot be null');
        }
        $this->container['date_last_activity'] = $date_last_activity;

        return $this;
    }

    /**
     * Gets capabilities
     *
     * @return \OpenAPI\Client\Model\DeviceInfoCapabilities|null
     */
    public function getCapabilities()
    {
        return $this->container['capabilities'];
    }

    /**
     * Sets capabilities
     *
     * @param \OpenAPI\Client\Model\DeviceInfoCapabilities|null $capabilities capabilities
     *
     * @return self
     */
    public function setCapabilities($capabilities)
    {
        if (is_null($capabilities)) {
            array_push($this->openAPINullablesSetToNull, 'capabilities');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('capabilities', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['capabilities'] = $capabilities;

        return $this;
    }

    /**
     * Gets icon_url
     *
     * @return string|null
     */
    public function getIconUrl()
    {
        return $this->container['icon_url'];
    }

    /**
     * Sets icon_url
     *
     * @param string|null $icon_url icon_url
     *
     * @return self
     */
    public function setIconUrl($icon_url)
    {
        if (is_null($icon_url)) {
            array_push($this->openAPINullablesSetToNull, 'icon_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('icon_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['icon_url'] = $icon_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


