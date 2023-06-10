<?php
/**
 * PlayerStateInfo
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
 * PlayerStateInfo Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PlayerStateInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PlayerStateInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'position_ticks' => 'int',
        'can_seek' => 'bool',
        'is_paused' => 'bool',
        'is_muted' => 'bool',
        'volume_level' => 'int',
        'audio_stream_index' => 'int',
        'subtitle_stream_index' => 'int',
        'media_source_id' => 'string',
        'play_method' => '\OpenAPI\Client\Model\PlayMethod',
        'repeat_mode' => '\OpenAPI\Client\Model\RepeatMode',
        'live_stream_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'position_ticks' => 'int64',
        'can_seek' => null,
        'is_paused' => null,
        'is_muted' => null,
        'volume_level' => 'int32',
        'audio_stream_index' => 'int32',
        'subtitle_stream_index' => 'int32',
        'media_source_id' => null,
        'play_method' => null,
        'repeat_mode' => null,
        'live_stream_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'position_ticks' => true,
		'can_seek' => false,
		'is_paused' => false,
		'is_muted' => false,
		'volume_level' => true,
		'audio_stream_index' => true,
		'subtitle_stream_index' => true,
		'media_source_id' => true,
		'play_method' => true,
		'repeat_mode' => false,
		'live_stream_id' => true
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
        'position_ticks' => 'PositionTicks',
        'can_seek' => 'CanSeek',
        'is_paused' => 'IsPaused',
        'is_muted' => 'IsMuted',
        'volume_level' => 'VolumeLevel',
        'audio_stream_index' => 'AudioStreamIndex',
        'subtitle_stream_index' => 'SubtitleStreamIndex',
        'media_source_id' => 'MediaSourceId',
        'play_method' => 'PlayMethod',
        'repeat_mode' => 'RepeatMode',
        'live_stream_id' => 'LiveStreamId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'position_ticks' => 'setPositionTicks',
        'can_seek' => 'setCanSeek',
        'is_paused' => 'setIsPaused',
        'is_muted' => 'setIsMuted',
        'volume_level' => 'setVolumeLevel',
        'audio_stream_index' => 'setAudioStreamIndex',
        'subtitle_stream_index' => 'setSubtitleStreamIndex',
        'media_source_id' => 'setMediaSourceId',
        'play_method' => 'setPlayMethod',
        'repeat_mode' => 'setRepeatMode',
        'live_stream_id' => 'setLiveStreamId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'position_ticks' => 'getPositionTicks',
        'can_seek' => 'getCanSeek',
        'is_paused' => 'getIsPaused',
        'is_muted' => 'getIsMuted',
        'volume_level' => 'getVolumeLevel',
        'audio_stream_index' => 'getAudioStreamIndex',
        'subtitle_stream_index' => 'getSubtitleStreamIndex',
        'media_source_id' => 'getMediaSourceId',
        'play_method' => 'getPlayMethod',
        'repeat_mode' => 'getRepeatMode',
        'live_stream_id' => 'getLiveStreamId'
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
        $this->setIfExists('position_ticks', $data ?? [], null);
        $this->setIfExists('can_seek', $data ?? [], null);
        $this->setIfExists('is_paused', $data ?? [], null);
        $this->setIfExists('is_muted', $data ?? [], null);
        $this->setIfExists('volume_level', $data ?? [], null);
        $this->setIfExists('audio_stream_index', $data ?? [], null);
        $this->setIfExists('subtitle_stream_index', $data ?? [], null);
        $this->setIfExists('media_source_id', $data ?? [], null);
        $this->setIfExists('play_method', $data ?? [], null);
        $this->setIfExists('repeat_mode', $data ?? [], null);
        $this->setIfExists('live_stream_id', $data ?? [], null);
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
     * Gets position_ticks
     *
     * @return int|null
     */
    public function getPositionTicks()
    {
        return $this->container['position_ticks'];
    }

    /**
     * Sets position_ticks
     *
     * @param int|null $position_ticks Gets or sets the now playing position ticks.
     *
     * @return self
     */
    public function setPositionTicks($position_ticks)
    {
        if (is_null($position_ticks)) {
            array_push($this->openAPINullablesSetToNull, 'position_ticks');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('position_ticks', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['position_ticks'] = $position_ticks;

        return $this;
    }

    /**
     * Gets can_seek
     *
     * @return bool|null
     */
    public function getCanSeek()
    {
        return $this->container['can_seek'];
    }

    /**
     * Sets can_seek
     *
     * @param bool|null $can_seek Gets or sets a value indicating whether this instance can seek.
     *
     * @return self
     */
    public function setCanSeek($can_seek)
    {
        if (is_null($can_seek)) {
            throw new \InvalidArgumentException('non-nullable can_seek cannot be null');
        }
        $this->container['can_seek'] = $can_seek;

        return $this;
    }

    /**
     * Gets is_paused
     *
     * @return bool|null
     */
    public function getIsPaused()
    {
        return $this->container['is_paused'];
    }

    /**
     * Sets is_paused
     *
     * @param bool|null $is_paused Gets or sets a value indicating whether this instance is paused.
     *
     * @return self
     */
    public function setIsPaused($is_paused)
    {
        if (is_null($is_paused)) {
            throw new \InvalidArgumentException('non-nullable is_paused cannot be null');
        }
        $this->container['is_paused'] = $is_paused;

        return $this;
    }

    /**
     * Gets is_muted
     *
     * @return bool|null
     */
    public function getIsMuted()
    {
        return $this->container['is_muted'];
    }

    /**
     * Sets is_muted
     *
     * @param bool|null $is_muted Gets or sets a value indicating whether this instance is muted.
     *
     * @return self
     */
    public function setIsMuted($is_muted)
    {
        if (is_null($is_muted)) {
            throw new \InvalidArgumentException('non-nullable is_muted cannot be null');
        }
        $this->container['is_muted'] = $is_muted;

        return $this;
    }

    /**
     * Gets volume_level
     *
     * @return int|null
     */
    public function getVolumeLevel()
    {
        return $this->container['volume_level'];
    }

    /**
     * Sets volume_level
     *
     * @param int|null $volume_level Gets or sets the volume level.
     *
     * @return self
     */
    public function setVolumeLevel($volume_level)
    {
        if (is_null($volume_level)) {
            array_push($this->openAPINullablesSetToNull, 'volume_level');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('volume_level', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['volume_level'] = $volume_level;

        return $this;
    }

    /**
     * Gets audio_stream_index
     *
     * @return int|null
     */
    public function getAudioStreamIndex()
    {
        return $this->container['audio_stream_index'];
    }

    /**
     * Sets audio_stream_index
     *
     * @param int|null $audio_stream_index Gets or sets the index of the now playing audio stream.
     *
     * @return self
     */
    public function setAudioStreamIndex($audio_stream_index)
    {
        if (is_null($audio_stream_index)) {
            array_push($this->openAPINullablesSetToNull, 'audio_stream_index');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('audio_stream_index', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['audio_stream_index'] = $audio_stream_index;

        return $this;
    }

    /**
     * Gets subtitle_stream_index
     *
     * @return int|null
     */
    public function getSubtitleStreamIndex()
    {
        return $this->container['subtitle_stream_index'];
    }

    /**
     * Sets subtitle_stream_index
     *
     * @param int|null $subtitle_stream_index Gets or sets the index of the now playing subtitle stream.
     *
     * @return self
     */
    public function setSubtitleStreamIndex($subtitle_stream_index)
    {
        if (is_null($subtitle_stream_index)) {
            array_push($this->openAPINullablesSetToNull, 'subtitle_stream_index');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('subtitle_stream_index', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['subtitle_stream_index'] = $subtitle_stream_index;

        return $this;
    }

    /**
     * Gets media_source_id
     *
     * @return string|null
     */
    public function getMediaSourceId()
    {
        return $this->container['media_source_id'];
    }

    /**
     * Sets media_source_id
     *
     * @param string|null $media_source_id Gets or sets the now playing media version identifier.
     *
     * @return self
     */
    public function setMediaSourceId($media_source_id)
    {
        if (is_null($media_source_id)) {
            array_push($this->openAPINullablesSetToNull, 'media_source_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('media_source_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['media_source_id'] = $media_source_id;

        return $this;
    }

    /**
     * Gets play_method
     *
     * @return \OpenAPI\Client\Model\PlayMethod|null
     */
    public function getPlayMethod()
    {
        return $this->container['play_method'];
    }

    /**
     * Sets play_method
     *
     * @param \OpenAPI\Client\Model\PlayMethod|null $play_method play_method
     *
     * @return self
     */
    public function setPlayMethod($play_method)
    {
        if (is_null($play_method)) {
            array_push($this->openAPINullablesSetToNull, 'play_method');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('play_method', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['play_method'] = $play_method;

        return $this;
    }

    /**
     * Gets repeat_mode
     *
     * @return \OpenAPI\Client\Model\RepeatMode|null
     */
    public function getRepeatMode()
    {
        return $this->container['repeat_mode'];
    }

    /**
     * Sets repeat_mode
     *
     * @param \OpenAPI\Client\Model\RepeatMode|null $repeat_mode repeat_mode
     *
     * @return self
     */
    public function setRepeatMode($repeat_mode)
    {
        if (is_null($repeat_mode)) {
            throw new \InvalidArgumentException('non-nullable repeat_mode cannot be null');
        }
        $this->container['repeat_mode'] = $repeat_mode;

        return $this;
    }

    /**
     * Gets live_stream_id
     *
     * @return string|null
     */
    public function getLiveStreamId()
    {
        return $this->container['live_stream_id'];
    }

    /**
     * Sets live_stream_id
     *
     * @param string|null $live_stream_id Gets or sets the now playing live stream identifier.
     *
     * @return self
     */
    public function setLiveStreamId($live_stream_id)
    {
        if (is_null($live_stream_id)) {
            array_push($this->openAPINullablesSetToNull, 'live_stream_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('live_stream_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['live_stream_id'] = $live_stream_id;

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


