<?php
/**
 * PlaybackStopInfo
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
 * PlaybackStopInfo Class Doc Comment
 *
 * @category Class
 * @description Class PlaybackStopInfo.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PlaybackStopInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PlaybackStopInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'item' => '\OpenAPI\Client\Model\PlaybackProgressInfoItem',
        'item_id' => 'string',
        'session_id' => 'string',
        'media_source_id' => 'string',
        'position_ticks' => 'int',
        'live_stream_id' => 'string',
        'play_session_id' => 'string',
        'failed' => 'bool',
        'next_media_type' => 'string',
        'playlist_item_id' => 'string',
        'now_playing_queue' => '\OpenAPI\Client\Model\QueueItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'item' => null,
        'item_id' => 'uuid',
        'session_id' => null,
        'media_source_id' => null,
        'position_ticks' => 'int64',
        'live_stream_id' => null,
        'play_session_id' => null,
        'failed' => null,
        'next_media_type' => null,
        'playlist_item_id' => null,
        'now_playing_queue' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'item' => true,
		'item_id' => false,
		'session_id' => true,
		'media_source_id' => true,
		'position_ticks' => true,
		'live_stream_id' => true,
		'play_session_id' => true,
		'failed' => false,
		'next_media_type' => true,
		'playlist_item_id' => true,
		'now_playing_queue' => true
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
        'item' => 'Item',
        'item_id' => 'ItemId',
        'session_id' => 'SessionId',
        'media_source_id' => 'MediaSourceId',
        'position_ticks' => 'PositionTicks',
        'live_stream_id' => 'LiveStreamId',
        'play_session_id' => 'PlaySessionId',
        'failed' => 'Failed',
        'next_media_type' => 'NextMediaType',
        'playlist_item_id' => 'PlaylistItemId',
        'now_playing_queue' => 'NowPlayingQueue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item' => 'setItem',
        'item_id' => 'setItemId',
        'session_id' => 'setSessionId',
        'media_source_id' => 'setMediaSourceId',
        'position_ticks' => 'setPositionTicks',
        'live_stream_id' => 'setLiveStreamId',
        'play_session_id' => 'setPlaySessionId',
        'failed' => 'setFailed',
        'next_media_type' => 'setNextMediaType',
        'playlist_item_id' => 'setPlaylistItemId',
        'now_playing_queue' => 'setNowPlayingQueue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item' => 'getItem',
        'item_id' => 'getItemId',
        'session_id' => 'getSessionId',
        'media_source_id' => 'getMediaSourceId',
        'position_ticks' => 'getPositionTicks',
        'live_stream_id' => 'getLiveStreamId',
        'play_session_id' => 'getPlaySessionId',
        'failed' => 'getFailed',
        'next_media_type' => 'getNextMediaType',
        'playlist_item_id' => 'getPlaylistItemId',
        'now_playing_queue' => 'getNowPlayingQueue'
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
        $this->setIfExists('item', $data ?? [], null);
        $this->setIfExists('item_id', $data ?? [], null);
        $this->setIfExists('session_id', $data ?? [], null);
        $this->setIfExists('media_source_id', $data ?? [], null);
        $this->setIfExists('position_ticks', $data ?? [], null);
        $this->setIfExists('live_stream_id', $data ?? [], null);
        $this->setIfExists('play_session_id', $data ?? [], null);
        $this->setIfExists('failed', $data ?? [], null);
        $this->setIfExists('next_media_type', $data ?? [], null);
        $this->setIfExists('playlist_item_id', $data ?? [], null);
        $this->setIfExists('now_playing_queue', $data ?? [], null);
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
     * Gets item
     *
     * @return \OpenAPI\Client\Model\PlaybackProgressInfoItem|null
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \OpenAPI\Client\Model\PlaybackProgressInfoItem|null $item item
     *
     * @return self
     */
    public function setItem($item)
    {
        if (is_null($item)) {
            array_push($this->openAPINullablesSetToNull, 'item');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('item', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return string|null
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string|null $item_id Gets or sets the item identifier.
     *
     * @return self
     */
    public function setItemId($item_id)
    {
        if (is_null($item_id)) {
            throw new \InvalidArgumentException('non-nullable item_id cannot be null');
        }
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets session_id
     *
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     *
     * @param string|null $session_id Gets or sets the session id.
     *
     * @return self
     */
    public function setSessionId($session_id)
    {
        if (is_null($session_id)) {
            array_push($this->openAPINullablesSetToNull, 'session_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('session_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['session_id'] = $session_id;

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
     * @param string|null $media_source_id Gets or sets the media version identifier.
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
     * @param int|null $position_ticks Gets or sets the position ticks.
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
     * @param string|null $live_stream_id Gets or sets the live stream identifier.
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
     * Gets play_session_id
     *
     * @return string|null
     */
    public function getPlaySessionId()
    {
        return $this->container['play_session_id'];
    }

    /**
     * Sets play_session_id
     *
     * @param string|null $play_session_id Gets or sets the play session identifier.
     *
     * @return self
     */
    public function setPlaySessionId($play_session_id)
    {
        if (is_null($play_session_id)) {
            array_push($this->openAPINullablesSetToNull, 'play_session_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('play_session_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['play_session_id'] = $play_session_id;

        return $this;
    }

    /**
     * Gets failed
     *
     * @return bool|null
     */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
     * Sets failed
     *
     * @param bool|null $failed Gets or sets a value indicating whether this MediaBrowser.Model.Session.PlaybackStopInfo is failed.
     *
     * @return self
     */
    public function setFailed($failed)
    {
        if (is_null($failed)) {
            throw new \InvalidArgumentException('non-nullable failed cannot be null');
        }
        $this->container['failed'] = $failed;

        return $this;
    }

    /**
     * Gets next_media_type
     *
     * @return string|null
     */
    public function getNextMediaType()
    {
        return $this->container['next_media_type'];
    }

    /**
     * Sets next_media_type
     *
     * @param string|null $next_media_type next_media_type
     *
     * @return self
     */
    public function setNextMediaType($next_media_type)
    {
        if (is_null($next_media_type)) {
            array_push($this->openAPINullablesSetToNull, 'next_media_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('next_media_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['next_media_type'] = $next_media_type;

        return $this;
    }

    /**
     * Gets playlist_item_id
     *
     * @return string|null
     */
    public function getPlaylistItemId()
    {
        return $this->container['playlist_item_id'];
    }

    /**
     * Sets playlist_item_id
     *
     * @param string|null $playlist_item_id playlist_item_id
     *
     * @return self
     */
    public function setPlaylistItemId($playlist_item_id)
    {
        if (is_null($playlist_item_id)) {
            array_push($this->openAPINullablesSetToNull, 'playlist_item_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('playlist_item_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['playlist_item_id'] = $playlist_item_id;

        return $this;
    }

    /**
     * Gets now_playing_queue
     *
     * @return \OpenAPI\Client\Model\QueueItem[]|null
     */
    public function getNowPlayingQueue()
    {
        return $this->container['now_playing_queue'];
    }

    /**
     * Sets now_playing_queue
     *
     * @param \OpenAPI\Client\Model\QueueItem[]|null $now_playing_queue now_playing_queue
     *
     * @return self
     */
    public function setNowPlayingQueue($now_playing_queue)
    {
        if (is_null($now_playing_queue)) {
            array_push($this->openAPINullablesSetToNull, 'now_playing_queue');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('now_playing_queue', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['now_playing_queue'] = $now_playing_queue;

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


