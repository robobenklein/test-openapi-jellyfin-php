<?php
/**
 * TranscodingInfo
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
 * TranscodingInfo Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TranscodingInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TranscodingInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'audio_codec' => 'string',
        'video_codec' => 'string',
        'container' => 'string',
        'is_video_direct' => 'bool',
        'is_audio_direct' => 'bool',
        'bitrate' => 'int',
        'framerate' => 'float',
        'completion_percentage' => 'float',
        'width' => 'int',
        'height' => 'int',
        'audio_channels' => 'int',
        'hardware_acceleration_type' => '\OpenAPI\Client\Model\HardwareEncodingType',
        'transcode_reasons' => '\OpenAPI\Client\Model\TranscodeReason[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'audio_codec' => null,
        'video_codec' => null,
        'container' => null,
        'is_video_direct' => null,
        'is_audio_direct' => null,
        'bitrate' => 'int32',
        'framerate' => 'float',
        'completion_percentage' => 'double',
        'width' => 'int32',
        'height' => 'int32',
        'audio_channels' => 'int32',
        'hardware_acceleration_type' => null,
        'transcode_reasons' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'audio_codec' => true,
		'video_codec' => true,
		'container' => true,
		'is_video_direct' => false,
		'is_audio_direct' => false,
		'bitrate' => true,
		'framerate' => true,
		'completion_percentage' => true,
		'width' => true,
		'height' => true,
		'audio_channels' => true,
		'hardware_acceleration_type' => true,
		'transcode_reasons' => false
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
        'audio_codec' => 'AudioCodec',
        'video_codec' => 'VideoCodec',
        'container' => 'Container',
        'is_video_direct' => 'IsVideoDirect',
        'is_audio_direct' => 'IsAudioDirect',
        'bitrate' => 'Bitrate',
        'framerate' => 'Framerate',
        'completion_percentage' => 'CompletionPercentage',
        'width' => 'Width',
        'height' => 'Height',
        'audio_channels' => 'AudioChannels',
        'hardware_acceleration_type' => 'HardwareAccelerationType',
        'transcode_reasons' => 'TranscodeReasons'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audio_codec' => 'setAudioCodec',
        'video_codec' => 'setVideoCodec',
        'container' => 'setContainer',
        'is_video_direct' => 'setIsVideoDirect',
        'is_audio_direct' => 'setIsAudioDirect',
        'bitrate' => 'setBitrate',
        'framerate' => 'setFramerate',
        'completion_percentage' => 'setCompletionPercentage',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'audio_channels' => 'setAudioChannels',
        'hardware_acceleration_type' => 'setHardwareAccelerationType',
        'transcode_reasons' => 'setTranscodeReasons'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audio_codec' => 'getAudioCodec',
        'video_codec' => 'getVideoCodec',
        'container' => 'getContainer',
        'is_video_direct' => 'getIsVideoDirect',
        'is_audio_direct' => 'getIsAudioDirect',
        'bitrate' => 'getBitrate',
        'framerate' => 'getFramerate',
        'completion_percentage' => 'getCompletionPercentage',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'audio_channels' => 'getAudioChannels',
        'hardware_acceleration_type' => 'getHardwareAccelerationType',
        'transcode_reasons' => 'getTranscodeReasons'
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
        $this->setIfExists('audio_codec', $data ?? [], null);
        $this->setIfExists('video_codec', $data ?? [], null);
        $this->setIfExists('container', $data ?? [], null);
        $this->setIfExists('is_video_direct', $data ?? [], null);
        $this->setIfExists('is_audio_direct', $data ?? [], null);
        $this->setIfExists('bitrate', $data ?? [], null);
        $this->setIfExists('framerate', $data ?? [], null);
        $this->setIfExists('completion_percentage', $data ?? [], null);
        $this->setIfExists('width', $data ?? [], null);
        $this->setIfExists('height', $data ?? [], null);
        $this->setIfExists('audio_channels', $data ?? [], null);
        $this->setIfExists('hardware_acceleration_type', $data ?? [], null);
        $this->setIfExists('transcode_reasons', $data ?? [], null);
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
     * Gets audio_codec
     *
     * @return string|null
     */
    public function getAudioCodec()
    {
        return $this->container['audio_codec'];
    }

    /**
     * Sets audio_codec
     *
     * @param string|null $audio_codec audio_codec
     *
     * @return self
     */
    public function setAudioCodec($audio_codec)
    {
        if (is_null($audio_codec)) {
            array_push($this->openAPINullablesSetToNull, 'audio_codec');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('audio_codec', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['audio_codec'] = $audio_codec;

        return $this;
    }

    /**
     * Gets video_codec
     *
     * @return string|null
     */
    public function getVideoCodec()
    {
        return $this->container['video_codec'];
    }

    /**
     * Sets video_codec
     *
     * @param string|null $video_codec video_codec
     *
     * @return self
     */
    public function setVideoCodec($video_codec)
    {
        if (is_null($video_codec)) {
            array_push($this->openAPINullablesSetToNull, 'video_codec');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('video_codec', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['video_codec'] = $video_codec;

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
     * Gets is_video_direct
     *
     * @return bool|null
     */
    public function getIsVideoDirect()
    {
        return $this->container['is_video_direct'];
    }

    /**
     * Sets is_video_direct
     *
     * @param bool|null $is_video_direct is_video_direct
     *
     * @return self
     */
    public function setIsVideoDirect($is_video_direct)
    {
        if (is_null($is_video_direct)) {
            throw new \InvalidArgumentException('non-nullable is_video_direct cannot be null');
        }
        $this->container['is_video_direct'] = $is_video_direct;

        return $this;
    }

    /**
     * Gets is_audio_direct
     *
     * @return bool|null
     */
    public function getIsAudioDirect()
    {
        return $this->container['is_audio_direct'];
    }

    /**
     * Sets is_audio_direct
     *
     * @param bool|null $is_audio_direct is_audio_direct
     *
     * @return self
     */
    public function setIsAudioDirect($is_audio_direct)
    {
        if (is_null($is_audio_direct)) {
            throw new \InvalidArgumentException('non-nullable is_audio_direct cannot be null');
        }
        $this->container['is_audio_direct'] = $is_audio_direct;

        return $this;
    }

    /**
     * Gets bitrate
     *
     * @return int|null
     */
    public function getBitrate()
    {
        return $this->container['bitrate'];
    }

    /**
     * Sets bitrate
     *
     * @param int|null $bitrate bitrate
     *
     * @return self
     */
    public function setBitrate($bitrate)
    {
        if (is_null($bitrate)) {
            array_push($this->openAPINullablesSetToNull, 'bitrate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('bitrate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['bitrate'] = $bitrate;

        return $this;
    }

    /**
     * Gets framerate
     *
     * @return float|null
     */
    public function getFramerate()
    {
        return $this->container['framerate'];
    }

    /**
     * Sets framerate
     *
     * @param float|null $framerate framerate
     *
     * @return self
     */
    public function setFramerate($framerate)
    {
        if (is_null($framerate)) {
            array_push($this->openAPINullablesSetToNull, 'framerate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('framerate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['framerate'] = $framerate;

        return $this;
    }

    /**
     * Gets completion_percentage
     *
     * @return float|null
     */
    public function getCompletionPercentage()
    {
        return $this->container['completion_percentage'];
    }

    /**
     * Sets completion_percentage
     *
     * @param float|null $completion_percentage completion_percentage
     *
     * @return self
     */
    public function setCompletionPercentage($completion_percentage)
    {
        if (is_null($completion_percentage)) {
            array_push($this->openAPINullablesSetToNull, 'completion_percentage');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('completion_percentage', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['completion_percentage'] = $completion_percentage;

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
            array_push($this->openAPINullablesSetToNull, 'width');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('width', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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
            array_push($this->openAPINullablesSetToNull, 'height');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('height', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets audio_channels
     *
     * @return int|null
     */
    public function getAudioChannels()
    {
        return $this->container['audio_channels'];
    }

    /**
     * Sets audio_channels
     *
     * @param int|null $audio_channels audio_channels
     *
     * @return self
     */
    public function setAudioChannels($audio_channels)
    {
        if (is_null($audio_channels)) {
            array_push($this->openAPINullablesSetToNull, 'audio_channels');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('audio_channels', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['audio_channels'] = $audio_channels;

        return $this;
    }

    /**
     * Gets hardware_acceleration_type
     *
     * @return \OpenAPI\Client\Model\HardwareEncodingType|null
     */
    public function getHardwareAccelerationType()
    {
        return $this->container['hardware_acceleration_type'];
    }

    /**
     * Sets hardware_acceleration_type
     *
     * @param \OpenAPI\Client\Model\HardwareEncodingType|null $hardware_acceleration_type hardware_acceleration_type
     *
     * @return self
     */
    public function setHardwareAccelerationType($hardware_acceleration_type)
    {
        if (is_null($hardware_acceleration_type)) {
            array_push($this->openAPINullablesSetToNull, 'hardware_acceleration_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hardware_acceleration_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['hardware_acceleration_type'] = $hardware_acceleration_type;

        return $this;
    }

    /**
     * Gets transcode_reasons
     *
     * @return \OpenAPI\Client\Model\TranscodeReason[]|null
     */
    public function getTranscodeReasons()
    {
        return $this->container['transcode_reasons'];
    }

    /**
     * Sets transcode_reasons
     *
     * @param \OpenAPI\Client\Model\TranscodeReason[]|null $transcode_reasons transcode_reasons
     *
     * @return self
     */
    public function setTranscodeReasons($transcode_reasons)
    {
        if (is_null($transcode_reasons)) {
            throw new \InvalidArgumentException('non-nullable transcode_reasons cannot be null');
        }
        $this->container['transcode_reasons'] = $transcode_reasons;

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

