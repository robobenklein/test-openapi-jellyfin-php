<?php
/**
 * ClientCapabilities
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
 * ClientCapabilities Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ClientCapabilities implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClientCapabilities';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'playable_media_types' => 'string[]',
        'supported_commands' => '\OpenAPI\Client\Model\GeneralCommandType[]',
        'supports_media_control' => 'bool',
        'supports_content_uploading' => 'bool',
        'message_callback_url' => 'string',
        'supports_persistent_identifier' => 'bool',
        'supports_sync' => 'bool',
        'device_profile' => '\OpenAPI\Client\Model\ClientCapabilitiesDeviceProfile',
        'app_store_url' => 'string',
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
        'playable_media_types' => null,
        'supported_commands' => null,
        'supports_media_control' => null,
        'supports_content_uploading' => null,
        'message_callback_url' => null,
        'supports_persistent_identifier' => null,
        'supports_sync' => null,
        'device_profile' => null,
        'app_store_url' => null,
        'icon_url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'playable_media_types' => true,
		'supported_commands' => true,
		'supports_media_control' => false,
		'supports_content_uploading' => false,
		'message_callback_url' => true,
		'supports_persistent_identifier' => false,
		'supports_sync' => false,
		'device_profile' => true,
		'app_store_url' => true,
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
        'playable_media_types' => 'PlayableMediaTypes',
        'supported_commands' => 'SupportedCommands',
        'supports_media_control' => 'SupportsMediaControl',
        'supports_content_uploading' => 'SupportsContentUploading',
        'message_callback_url' => 'MessageCallbackUrl',
        'supports_persistent_identifier' => 'SupportsPersistentIdentifier',
        'supports_sync' => 'SupportsSync',
        'device_profile' => 'DeviceProfile',
        'app_store_url' => 'AppStoreUrl',
        'icon_url' => 'IconUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'playable_media_types' => 'setPlayableMediaTypes',
        'supported_commands' => 'setSupportedCommands',
        'supports_media_control' => 'setSupportsMediaControl',
        'supports_content_uploading' => 'setSupportsContentUploading',
        'message_callback_url' => 'setMessageCallbackUrl',
        'supports_persistent_identifier' => 'setSupportsPersistentIdentifier',
        'supports_sync' => 'setSupportsSync',
        'device_profile' => 'setDeviceProfile',
        'app_store_url' => 'setAppStoreUrl',
        'icon_url' => 'setIconUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'playable_media_types' => 'getPlayableMediaTypes',
        'supported_commands' => 'getSupportedCommands',
        'supports_media_control' => 'getSupportsMediaControl',
        'supports_content_uploading' => 'getSupportsContentUploading',
        'message_callback_url' => 'getMessageCallbackUrl',
        'supports_persistent_identifier' => 'getSupportsPersistentIdentifier',
        'supports_sync' => 'getSupportsSync',
        'device_profile' => 'getDeviceProfile',
        'app_store_url' => 'getAppStoreUrl',
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
        $this->setIfExists('playable_media_types', $data ?? [], null);
        $this->setIfExists('supported_commands', $data ?? [], null);
        $this->setIfExists('supports_media_control', $data ?? [], null);
        $this->setIfExists('supports_content_uploading', $data ?? [], null);
        $this->setIfExists('message_callback_url', $data ?? [], null);
        $this->setIfExists('supports_persistent_identifier', $data ?? [], null);
        $this->setIfExists('supports_sync', $data ?? [], null);
        $this->setIfExists('device_profile', $data ?? [], null);
        $this->setIfExists('app_store_url', $data ?? [], null);
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
     * Gets playable_media_types
     *
     * @return string[]|null
     */
    public function getPlayableMediaTypes()
    {
        return $this->container['playable_media_types'];
    }

    /**
     * Sets playable_media_types
     *
     * @param string[]|null $playable_media_types playable_media_types
     *
     * @return self
     */
    public function setPlayableMediaTypes($playable_media_types)
    {
        if (is_null($playable_media_types)) {
            array_push($this->openAPINullablesSetToNull, 'playable_media_types');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('playable_media_types', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['playable_media_types'] = $playable_media_types;

        return $this;
    }

    /**
     * Gets supported_commands
     *
     * @return \OpenAPI\Client\Model\GeneralCommandType[]|null
     */
    public function getSupportedCommands()
    {
        return $this->container['supported_commands'];
    }

    /**
     * Sets supported_commands
     *
     * @param \OpenAPI\Client\Model\GeneralCommandType[]|null $supported_commands supported_commands
     *
     * @return self
     */
    public function setSupportedCommands($supported_commands)
    {
        if (is_null($supported_commands)) {
            array_push($this->openAPINullablesSetToNull, 'supported_commands');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('supported_commands', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['supported_commands'] = $supported_commands;

        return $this;
    }

    /**
     * Gets supports_media_control
     *
     * @return bool|null
     */
    public function getSupportsMediaControl()
    {
        return $this->container['supports_media_control'];
    }

    /**
     * Sets supports_media_control
     *
     * @param bool|null $supports_media_control supports_media_control
     *
     * @return self
     */
    public function setSupportsMediaControl($supports_media_control)
    {
        if (is_null($supports_media_control)) {
            throw new \InvalidArgumentException('non-nullable supports_media_control cannot be null');
        }
        $this->container['supports_media_control'] = $supports_media_control;

        return $this;
    }

    /**
     * Gets supports_content_uploading
     *
     * @return bool|null
     */
    public function getSupportsContentUploading()
    {
        return $this->container['supports_content_uploading'];
    }

    /**
     * Sets supports_content_uploading
     *
     * @param bool|null $supports_content_uploading supports_content_uploading
     *
     * @return self
     */
    public function setSupportsContentUploading($supports_content_uploading)
    {
        if (is_null($supports_content_uploading)) {
            throw new \InvalidArgumentException('non-nullable supports_content_uploading cannot be null');
        }
        $this->container['supports_content_uploading'] = $supports_content_uploading;

        return $this;
    }

    /**
     * Gets message_callback_url
     *
     * @return string|null
     */
    public function getMessageCallbackUrl()
    {
        return $this->container['message_callback_url'];
    }

    /**
     * Sets message_callback_url
     *
     * @param string|null $message_callback_url message_callback_url
     *
     * @return self
     */
    public function setMessageCallbackUrl($message_callback_url)
    {
        if (is_null($message_callback_url)) {
            array_push($this->openAPINullablesSetToNull, 'message_callback_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('message_callback_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['message_callback_url'] = $message_callback_url;

        return $this;
    }

    /**
     * Gets supports_persistent_identifier
     *
     * @return bool|null
     */
    public function getSupportsPersistentIdentifier()
    {
        return $this->container['supports_persistent_identifier'];
    }

    /**
     * Sets supports_persistent_identifier
     *
     * @param bool|null $supports_persistent_identifier supports_persistent_identifier
     *
     * @return self
     */
    public function setSupportsPersistentIdentifier($supports_persistent_identifier)
    {
        if (is_null($supports_persistent_identifier)) {
            throw new \InvalidArgumentException('non-nullable supports_persistent_identifier cannot be null');
        }
        $this->container['supports_persistent_identifier'] = $supports_persistent_identifier;

        return $this;
    }

    /**
     * Gets supports_sync
     *
     * @return bool|null
     */
    public function getSupportsSync()
    {
        return $this->container['supports_sync'];
    }

    /**
     * Sets supports_sync
     *
     * @param bool|null $supports_sync supports_sync
     *
     * @return self
     */
    public function setSupportsSync($supports_sync)
    {
        if (is_null($supports_sync)) {
            throw new \InvalidArgumentException('non-nullable supports_sync cannot be null');
        }
        $this->container['supports_sync'] = $supports_sync;

        return $this;
    }

    /**
     * Gets device_profile
     *
     * @return \OpenAPI\Client\Model\ClientCapabilitiesDeviceProfile|null
     */
    public function getDeviceProfile()
    {
        return $this->container['device_profile'];
    }

    /**
     * Sets device_profile
     *
     * @param \OpenAPI\Client\Model\ClientCapabilitiesDeviceProfile|null $device_profile device_profile
     *
     * @return self
     */
    public function setDeviceProfile($device_profile)
    {
        if (is_null($device_profile)) {
            array_push($this->openAPINullablesSetToNull, 'device_profile');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('device_profile', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['device_profile'] = $device_profile;

        return $this;
    }

    /**
     * Gets app_store_url
     *
     * @return string|null
     */
    public function getAppStoreUrl()
    {
        return $this->container['app_store_url'];
    }

    /**
     * Sets app_store_url
     *
     * @param string|null $app_store_url app_store_url
     *
     * @return self
     */
    public function setAppStoreUrl($app_store_url)
    {
        if (is_null($app_store_url)) {
            array_push($this->openAPINullablesSetToNull, 'app_store_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('app_store_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['app_store_url'] = $app_store_url;

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

