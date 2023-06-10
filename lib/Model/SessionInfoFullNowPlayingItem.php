<?php
/**
 * SessionInfoFullNowPlayingItem
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
 * SessionInfoFullNowPlayingItem Class Doc Comment
 *
 * @category Class
 * @description Class BaseItem.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SessionInfoFullNowPlayingItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SessionInfo_FullNowPlayingItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'size' => 'int',
        'container' => 'string',
        'is_hd' => 'bool',
        'is_shortcut' => 'bool',
        'shortcut_path' => 'string',
        'width' => 'int',
        'height' => 'int',
        'extra_ids' => 'string[]',
        'date_last_saved' => '\DateTime',
        'remote_trailers' => '\OpenAPI\Client\Model\MediaUrl[]',
        'supports_external_transfer' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'size' => 'int64',
        'container' => null,
        'is_hd' => null,
        'is_shortcut' => null,
        'shortcut_path' => null,
        'width' => 'int32',
        'height' => 'int32',
        'extra_ids' => 'uuid',
        'date_last_saved' => 'date-time',
        'remote_trailers' => null,
        'supports_external_transfer' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'size' => true,
		'container' => true,
		'is_hd' => false,
		'is_shortcut' => false,
		'shortcut_path' => true,
		'width' => false,
		'height' => false,
		'extra_ids' => true,
		'date_last_saved' => false,
		'remote_trailers' => true,
		'supports_external_transfer' => false
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
        'size' => 'Size',
        'container' => 'Container',
        'is_hd' => 'IsHD',
        'is_shortcut' => 'IsShortcut',
        'shortcut_path' => 'ShortcutPath',
        'width' => 'Width',
        'height' => 'Height',
        'extra_ids' => 'ExtraIds',
        'date_last_saved' => 'DateLastSaved',
        'remote_trailers' => 'RemoteTrailers',
        'supports_external_transfer' => 'SupportsExternalTransfer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'size' => 'setSize',
        'container' => 'setContainer',
        'is_hd' => 'setIsHd',
        'is_shortcut' => 'setIsShortcut',
        'shortcut_path' => 'setShortcutPath',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'extra_ids' => 'setExtraIds',
        'date_last_saved' => 'setDateLastSaved',
        'remote_trailers' => 'setRemoteTrailers',
        'supports_external_transfer' => 'setSupportsExternalTransfer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'size' => 'getSize',
        'container' => 'getContainer',
        'is_hd' => 'getIsHd',
        'is_shortcut' => 'getIsShortcut',
        'shortcut_path' => 'getShortcutPath',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'extra_ids' => 'getExtraIds',
        'date_last_saved' => 'getDateLastSaved',
        'remote_trailers' => 'getRemoteTrailers',
        'supports_external_transfer' => 'getSupportsExternalTransfer'
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
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('container', $data ?? [], null);
        $this->setIfExists('is_hd', $data ?? [], null);
        $this->setIfExists('is_shortcut', $data ?? [], null);
        $this->setIfExists('shortcut_path', $data ?? [], null);
        $this->setIfExists('width', $data ?? [], null);
        $this->setIfExists('height', $data ?? [], null);
        $this->setIfExists('extra_ids', $data ?? [], null);
        $this->setIfExists('date_last_saved', $data ?? [], null);
        $this->setIfExists('remote_trailers', $data ?? [], null);
        $this->setIfExists('supports_external_transfer', $data ?? [], null);
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
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size size
     *
     * @return self
     */
    public function setSize($size)
    {
        if (is_null($size)) {
            array_push($this->openAPINullablesSetToNull, 'size');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('size', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets container
     *
     * @return string|null
     */
    public function getContainer()
    {
        return $this->container['container'];
    }

    /**
     * Sets container
     *
     * @param string|null $container container
     *
     * @return self
     */
    public function setContainer($container)
    {
        if (is_null($container)) {
            array_push($this->openAPINullablesSetToNull, 'container');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('container', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['container'] = $container;

        return $this;
    }

    /**
     * Gets is_hd
     *
     * @return bool|null
     */
    public function getIsHd()
    {
        return $this->container['is_hd'];
    }

    /**
     * Sets is_hd
     *
     * @param bool|null $is_hd is_hd
     *
     * @return self
     */
    public function setIsHd($is_hd)
    {
        if (is_null($is_hd)) {
            throw new \InvalidArgumentException('non-nullable is_hd cannot be null');
        }
        $this->container['is_hd'] = $is_hd;

        return $this;
    }

    /**
     * Gets is_shortcut
     *
     * @return bool|null
     */
    public function getIsShortcut()
    {
        return $this->container['is_shortcut'];
    }

    /**
     * Sets is_shortcut
     *
     * @param bool|null $is_shortcut is_shortcut
     *
     * @return self
     */
    public function setIsShortcut($is_shortcut)
    {
        if (is_null($is_shortcut)) {
            throw new \InvalidArgumentException('non-nullable is_shortcut cannot be null');
        }
        $this->container['is_shortcut'] = $is_shortcut;

        return $this;
    }

    /**
     * Gets shortcut_path
     *
     * @return string|null
     */
    public function getShortcutPath()
    {
        return $this->container['shortcut_path'];
    }

    /**
     * Sets shortcut_path
     *
     * @param string|null $shortcut_path shortcut_path
     *
     * @return self
     */
    public function setShortcutPath($shortcut_path)
    {
        if (is_null($shortcut_path)) {
            array_push($this->openAPINullablesSetToNull, 'shortcut_path');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shortcut_path', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shortcut_path'] = $shortcut_path;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int|null $width width
     *
     * @return self
     */
    public function setWidth($width)
    {
        if (is_null($width)) {
            throw new \InvalidArgumentException('non-nullable width cannot be null');
        }
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int|null $height height
     *
     * @return self
     */
    public function setHeight($height)
    {
        if (is_null($height)) {
            throw new \InvalidArgumentException('non-nullable height cannot be null');
        }
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets extra_ids
     *
     * @return string[]|null
     */
    public function getExtraIds()
    {
        return $this->container['extra_ids'];
    }

    /**
     * Sets extra_ids
     *
     * @param string[]|null $extra_ids extra_ids
     *
     * @return self
     */
    public function setExtraIds($extra_ids)
    {
        if (is_null($extra_ids)) {
            array_push($this->openAPINullablesSetToNull, 'extra_ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('extra_ids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['extra_ids'] = $extra_ids;

        return $this;
    }

    /**
     * Gets date_last_saved
     *
     * @return \DateTime|null
     */
    public function getDateLastSaved()
    {
        return $this->container['date_last_saved'];
    }

    /**
     * Sets date_last_saved
     *
     * @param \DateTime|null $date_last_saved date_last_saved
     *
     * @return self
     */
    public function setDateLastSaved($date_last_saved)
    {
        if (is_null($date_last_saved)) {
            throw new \InvalidArgumentException('non-nullable date_last_saved cannot be null');
        }
        $this->container['date_last_saved'] = $date_last_saved;

        return $this;
    }

    /**
     * Gets remote_trailers
     *
     * @return \OpenAPI\Client\Model\MediaUrl[]|null
     */
    public function getRemoteTrailers()
    {
        return $this->container['remote_trailers'];
    }

    /**
     * Sets remote_trailers
     *
     * @param \OpenAPI\Client\Model\MediaUrl[]|null $remote_trailers Gets or sets the remote trailers.
     *
     * @return self
     */
    public function setRemoteTrailers($remote_trailers)
    {
        if (is_null($remote_trailers)) {
            array_push($this->openAPINullablesSetToNull, 'remote_trailers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('remote_trailers', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['remote_trailers'] = $remote_trailers;

        return $this;
    }

    /**
     * Gets supports_external_transfer
     *
     * @return bool|null
     */
    public function getSupportsExternalTransfer()
    {
        return $this->container['supports_external_transfer'];
    }

    /**
     * Sets supports_external_transfer
     *
     * @param bool|null $supports_external_transfer supports_external_transfer
     *
     * @return self
     */
    public function setSupportsExternalTransfer($supports_external_transfer)
    {
        if (is_null($supports_external_transfer)) {
            throw new \InvalidArgumentException('non-nullable supports_external_transfer cannot be null');
        }
        $this->container['supports_external_transfer'] = $supports_external_transfer;

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


