<?php
/**
 * PlaybackInfoDto
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
 * PlaybackInfoDto Class Doc Comment
 *
 * @category Class
 * @description Plabyback info dto.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PlaybackInfoDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PlaybackInfoDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user_id' => 'string',
        'max_streaming_bitrate' => 'int',
        'start_time_ticks' => 'int',
        'audio_stream_index' => 'int',
        'subtitle_stream_index' => 'int',
        'max_audio_channels' => 'int',
        'media_source_id' => 'string',
        'live_stream_id' => 'string',
        'device_profile' => '\OpenAPI\Client\Model\ClientCapabilitiesDtoDeviceProfile',
        'enable_direct_play' => 'bool',
        'enable_direct_stream' => 'bool',
        'enable_transcoding' => 'bool',
        'allow_video_stream_copy' => 'bool',
        'allow_audio_stream_copy' => 'bool',
        'auto_open_live_stream' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'user_id' => 'uuid',
        'max_streaming_bitrate' => 'int32',
        'start_time_ticks' => 'int64',
        'audio_stream_index' => 'int32',
        'subtitle_stream_index' => 'int32',
        'max_audio_channels' => 'int32',
        'media_source_id' => null,
        'live_stream_id' => null,
        'device_profile' => null,
        'enable_direct_play' => null,
        'enable_direct_stream' => null,
        'enable_transcoding' => null,
        'allow_video_stream_copy' => null,
        'allow_audio_stream_copy' => null,
        'auto_open_live_stream' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'user_id' => true,
		'max_streaming_bitrate' => true,
		'start_time_ticks' => true,
		'audio_stream_index' => true,
		'subtitle_stream_index' => true,
		'max_audio_channels' => true,
		'media_source_id' => true,
		'live_stream_id' => true,
		'device_profile' => true,
		'enable_direct_play' => true,
		'enable_direct_stream' => true,
		'enable_transcoding' => true,
		'allow_video_stream_copy' => true,
		'allow_audio_stream_copy' => true,
		'auto_open_live_stream' => true
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
        'user_id' => 'UserId',
        'max_streaming_bitrate' => 'MaxStreamingBitrate',
        'start_time_ticks' => 'StartTimeTicks',
        'audio_stream_index' => 'AudioStreamIndex',
        'subtitle_stream_index' => 'SubtitleStreamIndex',
        'max_audio_channels' => 'MaxAudioChannels',
        'media_source_id' => 'MediaSourceId',
        'live_stream_id' => 'LiveStreamId',
        'device_profile' => 'DeviceProfile',
        'enable_direct_play' => 'EnableDirectPlay',
        'enable_direct_stream' => 'EnableDirectStream',
        'enable_transcoding' => 'EnableTranscoding',
        'allow_video_stream_copy' => 'AllowVideoStreamCopy',
        'allow_audio_stream_copy' => 'AllowAudioStreamCopy',
        'auto_open_live_stream' => 'AutoOpenLiveStream'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'max_streaming_bitrate' => 'setMaxStreamingBitrate',
        'start_time_ticks' => 'setStartTimeTicks',
        'audio_stream_index' => 'setAudioStreamIndex',
        'subtitle_stream_index' => 'setSubtitleStreamIndex',
        'max_audio_channels' => 'setMaxAudioChannels',
        'media_source_id' => 'setMediaSourceId',
        'live_stream_id' => 'setLiveStreamId',
        'device_profile' => 'setDeviceProfile',
        'enable_direct_play' => 'setEnableDirectPlay',
        'enable_direct_stream' => 'setEnableDirectStream',
        'enable_transcoding' => 'setEnableTranscoding',
        'allow_video_stream_copy' => 'setAllowVideoStreamCopy',
        'allow_audio_stream_copy' => 'setAllowAudioStreamCopy',
        'auto_open_live_stream' => 'setAutoOpenLiveStream'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'max_streaming_bitrate' => 'getMaxStreamingBitrate',
        'start_time_ticks' => 'getStartTimeTicks',
        'audio_stream_index' => 'getAudioStreamIndex',
        'subtitle_stream_index' => 'getSubtitleStreamIndex',
        'max_audio_channels' => 'getMaxAudioChannels',
        'media_source_id' => 'getMediaSourceId',
        'live_stream_id' => 'getLiveStreamId',
        'device_profile' => 'getDeviceProfile',
        'enable_direct_play' => 'getEnableDirectPlay',
        'enable_direct_stream' => 'getEnableDirectStream',
        'enable_transcoding' => 'getEnableTranscoding',
        'allow_video_stream_copy' => 'getAllowVideoStreamCopy',
        'allow_audio_stream_copy' => 'getAllowAudioStreamCopy',
        'auto_open_live_stream' => 'getAutoOpenLiveStream'
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
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('max_streaming_bitrate', $data ?? [], null);
        $this->setIfExists('start_time_ticks', $data ?? [], null);
        $this->setIfExists('audio_stream_index', $data ?? [], null);
        $this->setIfExists('subtitle_stream_index', $data ?? [], null);
        $this->setIfExists('max_audio_channels', $data ?? [], null);
        $this->setIfExists('media_source_id', $data ?? [], null);
        $this->setIfExists('live_stream_id', $data ?? [], null);
        $this->setIfExists('device_profile', $data ?? [], null);
        $this->setIfExists('enable_direct_play', $data ?? [], null);
        $this->setIfExists('enable_direct_stream', $data ?? [], null);
        $this->setIfExists('enable_transcoding', $data ?? [], null);
        $this->setIfExists('allow_video_stream_copy', $data ?? [], null);
        $this->setIfExists('allow_audio_stream_copy', $data ?? [], null);
        $this->setIfExists('auto_open_live_stream', $data ?? [], null);
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
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id Gets or sets the playback userId.
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        if (is_null($user_id)) {
            array_push($this->openAPINullablesSetToNull, 'user_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets max_streaming_bitrate
     *
     * @return int|null
     */
    public function getMaxStreamingBitrate()
    {
        return $this->container['max_streaming_bitrate'];
    }

    /**
     * Sets max_streaming_bitrate
     *
     * @param int|null $max_streaming_bitrate Gets or sets the max streaming bitrate.
     *
     * @return self
     */
    public function setMaxStreamingBitrate($max_streaming_bitrate)
    {
        if (is_null($max_streaming_bitrate)) {
            array_push($this->openAPINullablesSetToNull, 'max_streaming_bitrate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_streaming_bitrate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_streaming_bitrate'] = $max_streaming_bitrate;

        return $this;
    }

    /**
     * Gets start_time_ticks
     *
     * @return int|null
     */
    public function getStartTimeTicks()
    {
        return $this->container['start_time_ticks'];
    }

    /**
     * Sets start_time_ticks
     *
     * @param int|null $start_time_ticks Gets or sets the start time in ticks.
     *
     * @return self
     */
    public function setStartTimeTicks($start_time_ticks)
    {
        if (is_null($start_time_ticks)) {
            array_push($this->openAPINullablesSetToNull, 'start_time_ticks');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('start_time_ticks', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['start_time_ticks'] = $start_time_ticks;

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
     * @param int|null $audio_stream_index Gets or sets the audio stream index.
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
     * @param int|null $subtitle_stream_index Gets or sets the subtitle stream index.
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
     * Gets max_audio_channels
     *
     * @return int|null
     */
    public function getMaxAudioChannels()
    {
        return $this->container['max_audio_channels'];
    }

    /**
     * Sets max_audio_channels
     *
     * @param int|null $max_audio_channels Gets or sets the max audio channels.
     *
     * @return self
     */
    public function setMaxAudioChannels($max_audio_channels)
    {
        if (is_null($max_audio_channels)) {
            array_push($this->openAPINullablesSetToNull, 'max_audio_channels');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_audio_channels', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_audio_channels'] = $max_audio_channels;

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
     * @param string|null $media_source_id Gets or sets the media source id.
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
     * @param string|null $live_stream_id Gets or sets the live stream id.
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
     * Gets device_profile
     *
     * @return \OpenAPI\Client\Model\ClientCapabilitiesDtoDeviceProfile|null
     */
    public function getDeviceProfile()
    {
        return $this->container['device_profile'];
    }

    /**
     * Sets device_profile
     *
     * @param \OpenAPI\Client\Model\ClientCapabilitiesDtoDeviceProfile|null $device_profile device_profile
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
     * Gets enable_direct_play
     *
     * @return bool|null
     */
    public function getEnableDirectPlay()
    {
        return $this->container['enable_direct_play'];
    }

    /**
     * Sets enable_direct_play
     *
     * @param bool|null $enable_direct_play Gets or sets a value indicating whether to enable direct play.
     *
     * @return self
     */
    public function setEnableDirectPlay($enable_direct_play)
    {
        if (is_null($enable_direct_play)) {
            array_push($this->openAPINullablesSetToNull, 'enable_direct_play');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enable_direct_play', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['enable_direct_play'] = $enable_direct_play;

        return $this;
    }

    /**
     * Gets enable_direct_stream
     *
     * @return bool|null
     */
    public function getEnableDirectStream()
    {
        return $this->container['enable_direct_stream'];
    }

    /**
     * Sets enable_direct_stream
     *
     * @param bool|null $enable_direct_stream Gets or sets a value indicating whether to enable direct stream.
     *
     * @return self
     */
    public function setEnableDirectStream($enable_direct_stream)
    {
        if (is_null($enable_direct_stream)) {
            array_push($this->openAPINullablesSetToNull, 'enable_direct_stream');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enable_direct_stream', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['enable_direct_stream'] = $enable_direct_stream;

        return $this;
    }

    /**
     * Gets enable_transcoding
     *
     * @return bool|null
     */
    public function getEnableTranscoding()
    {
        return $this->container['enable_transcoding'];
    }

    /**
     * Sets enable_transcoding
     *
     * @param bool|null $enable_transcoding Gets or sets a value indicating whether to enable transcoding.
     *
     * @return self
     */
    public function setEnableTranscoding($enable_transcoding)
    {
        if (is_null($enable_transcoding)) {
            array_push($this->openAPINullablesSetToNull, 'enable_transcoding');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enable_transcoding', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['enable_transcoding'] = $enable_transcoding;

        return $this;
    }

    /**
     * Gets allow_video_stream_copy
     *
     * @return bool|null
     */
    public function getAllowVideoStreamCopy()
    {
        return $this->container['allow_video_stream_copy'];
    }

    /**
     * Sets allow_video_stream_copy
     *
     * @param bool|null $allow_video_stream_copy Gets or sets a value indicating whether to enable video stream copy.
     *
     * @return self
     */
    public function setAllowVideoStreamCopy($allow_video_stream_copy)
    {
        if (is_null($allow_video_stream_copy)) {
            array_push($this->openAPINullablesSetToNull, 'allow_video_stream_copy');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('allow_video_stream_copy', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['allow_video_stream_copy'] = $allow_video_stream_copy;

        return $this;
    }

    /**
     * Gets allow_audio_stream_copy
     *
     * @return bool|null
     */
    public function getAllowAudioStreamCopy()
    {
        return $this->container['allow_audio_stream_copy'];
    }

    /**
     * Sets allow_audio_stream_copy
     *
     * @param bool|null $allow_audio_stream_copy Gets or sets a value indicating whether to allow audio stream copy.
     *
     * @return self
     */
    public function setAllowAudioStreamCopy($allow_audio_stream_copy)
    {
        if (is_null($allow_audio_stream_copy)) {
            array_push($this->openAPINullablesSetToNull, 'allow_audio_stream_copy');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('allow_audio_stream_copy', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['allow_audio_stream_copy'] = $allow_audio_stream_copy;

        return $this;
    }

    /**
     * Gets auto_open_live_stream
     *
     * @return bool|null
     */
    public function getAutoOpenLiveStream()
    {
        return $this->container['auto_open_live_stream'];
    }

    /**
     * Sets auto_open_live_stream
     *
     * @param bool|null $auto_open_live_stream Gets or sets a value indicating whether to auto open the live stream.
     *
     * @return self
     */
    public function setAutoOpenLiveStream($auto_open_live_stream)
    {
        if (is_null($auto_open_live_stream)) {
            array_push($this->openAPINullablesSetToNull, 'auto_open_live_stream');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('auto_open_live_stream', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['auto_open_live_stream'] = $auto_open_live_stream;

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

