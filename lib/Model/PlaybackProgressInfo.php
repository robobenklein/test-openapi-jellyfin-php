<?php
/**
 * PlaybackProgressInfo
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
 * PlaybackProgressInfo Class Doc Comment
 *
 * @category Class
 * @description Class PlaybackProgressInfo.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PlaybackProgressInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PlaybackProgressInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'can_seek' => 'bool',
        'item' => '\OpenAPI\Client\Model\PlaybackProgressInfoItem',
        'item_id' => 'string',
        'session_id' => 'string',
        'media_source_id' => 'string',
        'audio_stream_index' => 'int',
        'subtitle_stream_index' => 'int',
        'is_paused' => 'bool',
        'is_muted' => 'bool',
        'position_ticks' => 'int',
        'playback_start_time_ticks' => 'int',
        'volume_level' => 'int',
        'brightness' => 'int',
        'aspect_ratio' => 'string',
        'play_method' => '\OpenAPI\Client\Model\PlayMethod',
        'live_stream_id' => 'string',
        'play_session_id' => 'string',
        'repeat_mode' => '\OpenAPI\Client\Model\RepeatMode',
        'now_playing_queue' => '\OpenAPI\Client\Model\QueueItem[]',
        'playlist_item_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'can_seek' => null,
        'item' => null,
        'item_id' => 'uuid',
        'session_id' => null,
        'media_source_id' => null,
        'audio_stream_index' => 'int32',
        'subtitle_stream_index' => 'int32',
        'is_paused' => null,
        'is_muted' => null,
        'position_ticks' => 'int64',
        'playback_start_time_ticks' => 'int64',
        'volume_level' => 'int32',
        'brightness' => 'int32',
        'aspect_ratio' => null,
        'play_method' => null,
        'live_stream_id' => null,
        'play_session_id' => null,
        'repeat_mode' => null,
        'now_playing_queue' => null,
        'playlist_item_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'can_seek' => false,
		'item' => true,
		'item_id' => false,
		'session_id' => true,
		'media_source_id' => true,
		'audio_stream_index' => true,
		'subtitle_stream_index' => true,
		'is_paused' => false,
		'is_muted' => false,
		'position_ticks' => true,
		'playback_start_time_ticks' => true,
		'volume_level' => true,
		'brightness' => true,
		'aspect_ratio' => true,
		'play_method' => false,
		'live_stream_id' => true,
		'play_session_id' => true,
		'repeat_mode' => false,
		'now_playing_queue' => true,
		'playlist_item_id' => true
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
        'can_seek' => 'CanSeek',
        'item' => 'Item',
        'item_id' => 'ItemId',
        'session_id' => 'SessionId',
        'media_source_id' => 'MediaSourceId',
        'audio_stream_index' => 'AudioStreamIndex',
        'subtitle_stream_index' => 'SubtitleStreamIndex',
        'is_paused' => 'IsPaused',
        'is_muted' => 'IsMuted',
        'position_ticks' => 'PositionTicks',
        'playback_start_time_ticks' => 'PlaybackStartTimeTicks',
        'volume_level' => 'VolumeLevel',
        'brightness' => 'Brightness',
        'aspect_ratio' => 'AspectRatio',
        'play_method' => 'PlayMethod',
        'live_stream_id' => 'LiveStreamId',
        'play_session_id' => 'PlaySessionId',
        'repeat_mode' => 'RepeatMode',
        'now_playing_queue' => 'NowPlayingQueue',
        'playlist_item_id' => 'PlaylistItemId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can_seek' => 'setCanSeek',
        'item' => 'setItem',
        'item_id' => 'setItemId',
        'session_id' => 'setSessionId',
        'media_source_id' => 'setMediaSourceId',
        'audio_stream_index' => 'setAudioStreamIndex',
        'subtitle_stream_index' => 'setSubtitleStreamIndex',
        'is_paused' => 'setIsPaused',
        'is_muted' => 'setIsMuted',
        'position_ticks' => 'setPositionTicks',
        'playback_start_time_ticks' => 'setPlaybackStartTimeTicks',
        'volume_level' => 'setVolumeLevel',
        'brightness' => 'setBrightness',
        'aspect_ratio' => 'setAspectRatio',
        'play_method' => 'setPlayMethod',
        'live_stream_id' => 'setLiveStreamId',
        'play_session_id' => 'setPlaySessionId',
        'repeat_mode' => 'setRepeatMode',
        'now_playing_queue' => 'setNowPlayingQueue',
        'playlist_item_id' => 'setPlaylistItemId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can_seek' => 'getCanSeek',
        'item' => 'getItem',
        'item_id' => 'getItemId',
        'session_id' => 'getSessionId',
        'media_source_id' => 'getMediaSourceId',
        'audio_stream_index' => 'getAudioStreamIndex',
        'subtitle_stream_index' => 'getSubtitleStreamIndex',
        'is_paused' => 'getIsPaused',
        'is_muted' => 'getIsMuted',
        'position_ticks' => 'getPositionTicks',
        'playback_start_time_ticks' => 'getPlaybackStartTimeTicks',
        'volume_level' => 'getVolumeLevel',
        'brightness' => 'getBrightness',
        'aspect_ratio' => 'getAspectRatio',
        'play_method' => 'getPlayMethod',
        'live_stream_id' => 'getLiveStreamId',
        'play_session_id' => 'getPlaySessionId',
        'repeat_mode' => 'getRepeatMode',
        'now_playing_queue' => 'getNowPlayingQueue',
        'playlist_item_id' => 'getPlaylistItemId'
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
        $this->setIfExists('can_seek', $data ?? [], null);
        $this->setIfExists('item', $data ?? [], null);
        $this->setIfExists('item_id', $data ?? [], null);
        $this->setIfExists('session_id', $data ?? [], null);
        $this->setIfExists('media_source_id', $data ?? [], null);
        $this->setIfExists('audio_stream_index', $data ?? [], null);
        $this->setIfExists('subtitle_stream_index', $data ?? [], null);
        $this->setIfExists('is_paused', $data ?? [], null);
        $this->setIfExists('is_muted', $data ?? [], null);
        $this->setIfExists('position_ticks', $data ?? [], null);
        $this->setIfExists('playback_start_time_ticks', $data ?? [], null);
        $this->setIfExists('volume_level', $data ?? [], null);
        $this->setIfExists('brightness', $data ?? [], null);
        $this->setIfExists('aspect_ratio', $data ?? [], null);
        $this->setIfExists('play_method', $data ?? [], null);
        $this->setIfExists('live_stream_id', $data ?? [], null);
        $this->setIfExists('play_session_id', $data ?? [], null);
        $this->setIfExists('repeat_mode', $data ?? [], null);
        $this->setIfExists('now_playing_queue', $data ?? [], null);
        $this->setIfExists('playlist_item_id', $data ?? [], null);
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
     * @param int|null $audio_stream_index Gets or sets the index of the audio stream.
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
     * @param int|null $subtitle_stream_index Gets or sets the index of the subtitle stream.
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
     * Gets playback_start_time_ticks
     *
     * @return int|null
     */
    public function getPlaybackStartTimeTicks()
    {
        return $this->container['playback_start_time_ticks'];
    }

    /**
     * Sets playback_start_time_ticks
     *
     * @param int|null $playback_start_time_ticks playback_start_time_ticks
     *
     * @return self
     */
    public function setPlaybackStartTimeTicks($playback_start_time_ticks)
    {
        if (is_null($playback_start_time_ticks)) {
            array_push($this->openAPINullablesSetToNull, 'playback_start_time_ticks');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('playback_start_time_ticks', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['playback_start_time_ticks'] = $playback_start_time_ticks;

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
     * Gets brightness
     *
     * @return int|null
     */
    public function getBrightness()
    {
        return $this->container['brightness'];
    }

    /**
     * Sets brightness
     *
     * @param int|null $brightness brightness
     *
     * @return self
     */
    public function setBrightness($brightness)
    {
        if (is_null($brightness)) {
            array_push($this->openAPINullablesSetToNull, 'brightness');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('brightness', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['brightness'] = $brightness;

        return $this;
    }

    /**
     * Gets aspect_ratio
     *
     * @return string|null
     */
    public function getAspectRatio()
    {
        return $this->container['aspect_ratio'];
    }

    /**
     * Sets aspect_ratio
     *
     * @param string|null $aspect_ratio aspect_ratio
     *
     * @return self
     */
    public function setAspectRatio($aspect_ratio)
    {
        if (is_null($aspect_ratio)) {
            array_push($this->openAPINullablesSetToNull, 'aspect_ratio');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('aspect_ratio', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['aspect_ratio'] = $aspect_ratio;

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
            throw new \InvalidArgumentException('non-nullable play_method cannot be null');
        }
        $this->container['play_method'] = $play_method;

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


