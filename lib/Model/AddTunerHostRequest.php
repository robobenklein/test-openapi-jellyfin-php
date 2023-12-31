<?php
/**
 * AddTunerHostRequest
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
 * AddTunerHostRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AddTunerHostRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddTunerHost_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'url' => 'string',
        'type' => 'string',
        'device_id' => 'string',
        'friendly_name' => 'string',
        'import_favorites_only' => 'bool',
        'allow_hw_transcoding' => 'bool',
        'enable_stream_looping' => 'bool',
        'source' => 'string',
        'tuner_count' => 'int',
        'user_agent' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'url' => null,
        'type' => null,
        'device_id' => null,
        'friendly_name' => null,
        'import_favorites_only' => null,
        'allow_hw_transcoding' => null,
        'enable_stream_looping' => null,
        'source' => null,
        'tuner_count' => 'int32',
        'user_agent' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'url' => true,
		'type' => true,
		'device_id' => true,
		'friendly_name' => true,
		'import_favorites_only' => false,
		'allow_hw_transcoding' => false,
		'enable_stream_looping' => false,
		'source' => true,
		'tuner_count' => false,
		'user_agent' => true
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
        'id' => 'Id',
        'url' => 'Url',
        'type' => 'Type',
        'device_id' => 'DeviceId',
        'friendly_name' => 'FriendlyName',
        'import_favorites_only' => 'ImportFavoritesOnly',
        'allow_hw_transcoding' => 'AllowHWTranscoding',
        'enable_stream_looping' => 'EnableStreamLooping',
        'source' => 'Source',
        'tuner_count' => 'TunerCount',
        'user_agent' => 'UserAgent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'url' => 'setUrl',
        'type' => 'setType',
        'device_id' => 'setDeviceId',
        'friendly_name' => 'setFriendlyName',
        'import_favorites_only' => 'setImportFavoritesOnly',
        'allow_hw_transcoding' => 'setAllowHwTranscoding',
        'enable_stream_looping' => 'setEnableStreamLooping',
        'source' => 'setSource',
        'tuner_count' => 'setTunerCount',
        'user_agent' => 'setUserAgent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'url' => 'getUrl',
        'type' => 'getType',
        'device_id' => 'getDeviceId',
        'friendly_name' => 'getFriendlyName',
        'import_favorites_only' => 'getImportFavoritesOnly',
        'allow_hw_transcoding' => 'getAllowHwTranscoding',
        'enable_stream_looping' => 'getEnableStreamLooping',
        'source' => 'getSource',
        'tuner_count' => 'getTunerCount',
        'user_agent' => 'getUserAgent'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('device_id', $data ?? [], null);
        $this->setIfExists('friendly_name', $data ?? [], null);
        $this->setIfExists('import_favorites_only', $data ?? [], null);
        $this->setIfExists('allow_hw_transcoding', $data ?? [], null);
        $this->setIfExists('enable_stream_looping', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('tuner_count', $data ?? [], null);
        $this->setIfExists('user_agent', $data ?? [], null);
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
     * @param string|null $id id
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
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            array_push($this->openAPINullablesSetToNull, 'url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            array_push($this->openAPINullablesSetToNull, 'type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets device_id
     *
     * @return string|null
     */
    public function getDeviceId()
    {
        return $this->container['device_id'];
    }

    /**
     * Sets device_id
     *
     * @param string|null $device_id device_id
     *
     * @return self
     */
    public function setDeviceId($device_id)
    {
        if (is_null($device_id)) {
            array_push($this->openAPINullablesSetToNull, 'device_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('device_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['device_id'] = $device_id;

        return $this;
    }

    /**
     * Gets friendly_name
     *
     * @return string|null
     */
    public function getFriendlyName()
    {
        return $this->container['friendly_name'];
    }

    /**
     * Sets friendly_name
     *
     * @param string|null $friendly_name friendly_name
     *
     * @return self
     */
    public function setFriendlyName($friendly_name)
    {
        if (is_null($friendly_name)) {
            array_push($this->openAPINullablesSetToNull, 'friendly_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('friendly_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['friendly_name'] = $friendly_name;

        return $this;
    }

    /**
     * Gets import_favorites_only
     *
     * @return bool|null
     */
    public function getImportFavoritesOnly()
    {
        return $this->container['import_favorites_only'];
    }

    /**
     * Sets import_favorites_only
     *
     * @param bool|null $import_favorites_only import_favorites_only
     *
     * @return self
     */
    public function setImportFavoritesOnly($import_favorites_only)
    {
        if (is_null($import_favorites_only)) {
            throw new \InvalidArgumentException('non-nullable import_favorites_only cannot be null');
        }
        $this->container['import_favorites_only'] = $import_favorites_only;

        return $this;
    }

    /**
     * Gets allow_hw_transcoding
     *
     * @return bool|null
     */
    public function getAllowHwTranscoding()
    {
        return $this->container['allow_hw_transcoding'];
    }

    /**
     * Sets allow_hw_transcoding
     *
     * @param bool|null $allow_hw_transcoding allow_hw_transcoding
     *
     * @return self
     */
    public function setAllowHwTranscoding($allow_hw_transcoding)
    {
        if (is_null($allow_hw_transcoding)) {
            throw new \InvalidArgumentException('non-nullable allow_hw_transcoding cannot be null');
        }
        $this->container['allow_hw_transcoding'] = $allow_hw_transcoding;

        return $this;
    }

    /**
     * Gets enable_stream_looping
     *
     * @return bool|null
     */
    public function getEnableStreamLooping()
    {
        return $this->container['enable_stream_looping'];
    }

    /**
     * Sets enable_stream_looping
     *
     * @param bool|null $enable_stream_looping enable_stream_looping
     *
     * @return self
     */
    public function setEnableStreamLooping($enable_stream_looping)
    {
        if (is_null($enable_stream_looping)) {
            throw new \InvalidArgumentException('non-nullable enable_stream_looping cannot be null');
        }
        $this->container['enable_stream_looping'] = $enable_stream_looping;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (is_null($source)) {
            array_push($this->openAPINullablesSetToNull, 'source');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('source', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets tuner_count
     *
     * @return int|null
     */
    public function getTunerCount()
    {
        return $this->container['tuner_count'];
    }

    /**
     * Sets tuner_count
     *
     * @param int|null $tuner_count tuner_count
     *
     * @return self
     */
    public function setTunerCount($tuner_count)
    {
        if (is_null($tuner_count)) {
            throw new \InvalidArgumentException('non-nullable tuner_count cannot be null');
        }
        $this->container['tuner_count'] = $tuner_count;

        return $this;
    }

    /**
     * Gets user_agent
     *
     * @return string|null
     */
    public function getUserAgent()
    {
        return $this->container['user_agent'];
    }

    /**
     * Sets user_agent
     *
     * @param string|null $user_agent user_agent
     *
     * @return self
     */
    public function setUserAgent($user_agent)
    {
        if (is_null($user_agent)) {
            array_push($this->openAPINullablesSetToNull, 'user_agent');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_agent', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user_agent'] = $user_agent;

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


