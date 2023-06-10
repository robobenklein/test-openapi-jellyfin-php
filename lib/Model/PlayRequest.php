<?php
/**
 * PlayRequest
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
 * PlayRequest Class Doc Comment
 *
 * @category Class
 * @description Class PlayRequest.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PlayRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PlayRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'item_ids' => 'string[]',
        'start_position_ticks' => 'int',
        'play_command' => '\OpenAPI\Client\Model\PlayCommand',
        'controlling_user_id' => 'string',
        'subtitle_stream_index' => 'int',
        'audio_stream_index' => 'int',
        'media_source_id' => 'string',
        'start_index' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'item_ids' => 'uuid',
        'start_position_ticks' => 'int64',
        'play_command' => null,
        'controlling_user_id' => 'uuid',
        'subtitle_stream_index' => 'int32',
        'audio_stream_index' => 'int32',
        'media_source_id' => null,
        'start_index' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'item_ids' => true,
		'start_position_ticks' => true,
		'play_command' => false,
		'controlling_user_id' => false,
		'subtitle_stream_index' => true,
		'audio_stream_index' => true,
		'media_source_id' => true,
		'start_index' => true
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
        'item_ids' => 'ItemIds',
        'start_position_ticks' => 'StartPositionTicks',
        'play_command' => 'PlayCommand',
        'controlling_user_id' => 'ControllingUserId',
        'subtitle_stream_index' => 'SubtitleStreamIndex',
        'audio_stream_index' => 'AudioStreamIndex',
        'media_source_id' => 'MediaSourceId',
        'start_index' => 'StartIndex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_ids' => 'setItemIds',
        'start_position_ticks' => 'setStartPositionTicks',
        'play_command' => 'setPlayCommand',
        'controlling_user_id' => 'setControllingUserId',
        'subtitle_stream_index' => 'setSubtitleStreamIndex',
        'audio_stream_index' => 'setAudioStreamIndex',
        'media_source_id' => 'setMediaSourceId',
        'start_index' => 'setStartIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_ids' => 'getItemIds',
        'start_position_ticks' => 'getStartPositionTicks',
        'play_command' => 'getPlayCommand',
        'controlling_user_id' => 'getControllingUserId',
        'subtitle_stream_index' => 'getSubtitleStreamIndex',
        'audio_stream_index' => 'getAudioStreamIndex',
        'media_source_id' => 'getMediaSourceId',
        'start_index' => 'getStartIndex'
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
        $this->setIfExists('item_ids', $data ?? [], null);
        $this->setIfExists('start_position_ticks', $data ?? [], null);
        $this->setIfExists('play_command', $data ?? [], null);
        $this->setIfExists('controlling_user_id', $data ?? [], null);
        $this->setIfExists('subtitle_stream_index', $data ?? [], null);
        $this->setIfExists('audio_stream_index', $data ?? [], null);
        $this->setIfExists('media_source_id', $data ?? [], null);
        $this->setIfExists('start_index', $data ?? [], null);
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
     * Gets item_ids
     *
     * @return string[]|null
     */
    public function getItemIds()
    {
        return $this->container['item_ids'];
    }

    /**
     * Sets item_ids
     *
     * @param string[]|null $item_ids Gets or sets the item ids.
     *
     * @return self
     */
    public function setItemIds($item_ids)
    {
        if (is_null($item_ids)) {
            array_push($this->openAPINullablesSetToNull, 'item_ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('item_ids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['item_ids'] = $item_ids;

        return $this;
    }

    /**
     * Gets start_position_ticks
     *
     * @return int|null
     */
    public function getStartPositionTicks()
    {
        return $this->container['start_position_ticks'];
    }

    /**
     * Sets start_position_ticks
     *
     * @param int|null $start_position_ticks Gets or sets the start position ticks that the first item should be played at.
     *
     * @return self
     */
    public function setStartPositionTicks($start_position_ticks)
    {
        if (is_null($start_position_ticks)) {
            array_push($this->openAPINullablesSetToNull, 'start_position_ticks');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('start_position_ticks', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['start_position_ticks'] = $start_position_ticks;

        return $this;
    }

    /**
     * Gets play_command
     *
     * @return \OpenAPI\Client\Model\PlayCommand|null
     */
    public function getPlayCommand()
    {
        return $this->container['play_command'];
    }

    /**
     * Sets play_command
     *
     * @param \OpenAPI\Client\Model\PlayCommand|null $play_command play_command
     *
     * @return self
     */
    public function setPlayCommand($play_command)
    {
        if (is_null($play_command)) {
            throw new \InvalidArgumentException('non-nullable play_command cannot be null');
        }
        $this->container['play_command'] = $play_command;

        return $this;
    }

    /**
     * Gets controlling_user_id
     *
     * @return string|null
     */
    public function getControllingUserId()
    {
        return $this->container['controlling_user_id'];
    }

    /**
     * Sets controlling_user_id
     *
     * @param string|null $controlling_user_id Gets or sets the controlling user identifier.
     *
     * @return self
     */
    public function setControllingUserId($controlling_user_id)
    {
        if (is_null($controlling_user_id)) {
            throw new \InvalidArgumentException('non-nullable controlling_user_id cannot be null');
        }
        $this->container['controlling_user_id'] = $controlling_user_id;

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
     * @param int|null $subtitle_stream_index subtitle_stream_index
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
     * @param int|null $audio_stream_index audio_stream_index
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
     * @param string|null $media_source_id media_source_id
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
     * Gets start_index
     *
     * @return int|null
     */
    public function getStartIndex()
    {
        return $this->container['start_index'];
    }

    /**
     * Sets start_index
     *
     * @param int|null $start_index start_index
     *
     * @return self
     */
    public function setStartIndex($start_index)
    {
        if (is_null($start_index)) {
            array_push($this->openAPINullablesSetToNull, 'start_index');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('start_index', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['start_index'] = $start_index;

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

