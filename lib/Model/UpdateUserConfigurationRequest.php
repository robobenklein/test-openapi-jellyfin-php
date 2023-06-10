<?php
/**
 * UpdateUserConfigurationRequest
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
 * UpdateUserConfigurationRequest Class Doc Comment
 *
 * @category Class
 * @description Class UserConfiguration.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateUserConfigurationRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateUserConfiguration_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'audio_language_preference' => 'string',
        'play_default_audio_track' => 'bool',
        'subtitle_language_preference' => 'string',
        'display_missing_episodes' => 'bool',
        'grouped_folders' => 'string[]',
        'subtitle_mode' => '\OpenAPI\Client\Model\SubtitlePlaybackMode',
        'display_collections_view' => 'bool',
        'enable_local_password' => 'bool',
        'ordered_views' => 'string[]',
        'latest_items_excludes' => 'string[]',
        'my_media_excludes' => 'string[]',
        'hide_played_in_latest' => 'bool',
        'remember_audio_selections' => 'bool',
        'remember_subtitle_selections' => 'bool',
        'enable_next_episode_auto_play' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'audio_language_preference' => null,
        'play_default_audio_track' => null,
        'subtitle_language_preference' => null,
        'display_missing_episodes' => null,
        'grouped_folders' => null,
        'subtitle_mode' => null,
        'display_collections_view' => null,
        'enable_local_password' => null,
        'ordered_views' => null,
        'latest_items_excludes' => null,
        'my_media_excludes' => null,
        'hide_played_in_latest' => null,
        'remember_audio_selections' => null,
        'remember_subtitle_selections' => null,
        'enable_next_episode_auto_play' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'audio_language_preference' => true,
		'play_default_audio_track' => false,
		'subtitle_language_preference' => true,
		'display_missing_episodes' => false,
		'grouped_folders' => false,
		'subtitle_mode' => false,
		'display_collections_view' => false,
		'enable_local_password' => false,
		'ordered_views' => false,
		'latest_items_excludes' => false,
		'my_media_excludes' => false,
		'hide_played_in_latest' => false,
		'remember_audio_selections' => false,
		'remember_subtitle_selections' => false,
		'enable_next_episode_auto_play' => false
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
        'audio_language_preference' => 'AudioLanguagePreference',
        'play_default_audio_track' => 'PlayDefaultAudioTrack',
        'subtitle_language_preference' => 'SubtitleLanguagePreference',
        'display_missing_episodes' => 'DisplayMissingEpisodes',
        'grouped_folders' => 'GroupedFolders',
        'subtitle_mode' => 'SubtitleMode',
        'display_collections_view' => 'DisplayCollectionsView',
        'enable_local_password' => 'EnableLocalPassword',
        'ordered_views' => 'OrderedViews',
        'latest_items_excludes' => 'LatestItemsExcludes',
        'my_media_excludes' => 'MyMediaExcludes',
        'hide_played_in_latest' => 'HidePlayedInLatest',
        'remember_audio_selections' => 'RememberAudioSelections',
        'remember_subtitle_selections' => 'RememberSubtitleSelections',
        'enable_next_episode_auto_play' => 'EnableNextEpisodeAutoPlay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audio_language_preference' => 'setAudioLanguagePreference',
        'play_default_audio_track' => 'setPlayDefaultAudioTrack',
        'subtitle_language_preference' => 'setSubtitleLanguagePreference',
        'display_missing_episodes' => 'setDisplayMissingEpisodes',
        'grouped_folders' => 'setGroupedFolders',
        'subtitle_mode' => 'setSubtitleMode',
        'display_collections_view' => 'setDisplayCollectionsView',
        'enable_local_password' => 'setEnableLocalPassword',
        'ordered_views' => 'setOrderedViews',
        'latest_items_excludes' => 'setLatestItemsExcludes',
        'my_media_excludes' => 'setMyMediaExcludes',
        'hide_played_in_latest' => 'setHidePlayedInLatest',
        'remember_audio_selections' => 'setRememberAudioSelections',
        'remember_subtitle_selections' => 'setRememberSubtitleSelections',
        'enable_next_episode_auto_play' => 'setEnableNextEpisodeAutoPlay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audio_language_preference' => 'getAudioLanguagePreference',
        'play_default_audio_track' => 'getPlayDefaultAudioTrack',
        'subtitle_language_preference' => 'getSubtitleLanguagePreference',
        'display_missing_episodes' => 'getDisplayMissingEpisodes',
        'grouped_folders' => 'getGroupedFolders',
        'subtitle_mode' => 'getSubtitleMode',
        'display_collections_view' => 'getDisplayCollectionsView',
        'enable_local_password' => 'getEnableLocalPassword',
        'ordered_views' => 'getOrderedViews',
        'latest_items_excludes' => 'getLatestItemsExcludes',
        'my_media_excludes' => 'getMyMediaExcludes',
        'hide_played_in_latest' => 'getHidePlayedInLatest',
        'remember_audio_selections' => 'getRememberAudioSelections',
        'remember_subtitle_selections' => 'getRememberSubtitleSelections',
        'enable_next_episode_auto_play' => 'getEnableNextEpisodeAutoPlay'
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
        $this->setIfExists('audio_language_preference', $data ?? [], null);
        $this->setIfExists('play_default_audio_track', $data ?? [], null);
        $this->setIfExists('subtitle_language_preference', $data ?? [], null);
        $this->setIfExists('display_missing_episodes', $data ?? [], null);
        $this->setIfExists('grouped_folders', $data ?? [], null);
        $this->setIfExists('subtitle_mode', $data ?? [], null);
        $this->setIfExists('display_collections_view', $data ?? [], null);
        $this->setIfExists('enable_local_password', $data ?? [], null);
        $this->setIfExists('ordered_views', $data ?? [], null);
        $this->setIfExists('latest_items_excludes', $data ?? [], null);
        $this->setIfExists('my_media_excludes', $data ?? [], null);
        $this->setIfExists('hide_played_in_latest', $data ?? [], null);
        $this->setIfExists('remember_audio_selections', $data ?? [], null);
        $this->setIfExists('remember_subtitle_selections', $data ?? [], null);
        $this->setIfExists('enable_next_episode_auto_play', $data ?? [], null);
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
     * Gets audio_language_preference
     *
     * @return string|null
     */
    public function getAudioLanguagePreference()
    {
        return $this->container['audio_language_preference'];
    }

    /**
     * Sets audio_language_preference
     *
     * @param string|null $audio_language_preference Gets or sets the audio language preference.
     *
     * @return self
     */
    public function setAudioLanguagePreference($audio_language_preference)
    {
        if (is_null($audio_language_preference)) {
            array_push($this->openAPINullablesSetToNull, 'audio_language_preference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('audio_language_preference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['audio_language_preference'] = $audio_language_preference;

        return $this;
    }

    /**
     * Gets play_default_audio_track
     *
     * @return bool|null
     */
    public function getPlayDefaultAudioTrack()
    {
        return $this->container['play_default_audio_track'];
    }

    /**
     * Sets play_default_audio_track
     *
     * @param bool|null $play_default_audio_track Gets or sets a value indicating whether [play default audio track].
     *
     * @return self
     */
    public function setPlayDefaultAudioTrack($play_default_audio_track)
    {
        if (is_null($play_default_audio_track)) {
            throw new \InvalidArgumentException('non-nullable play_default_audio_track cannot be null');
        }
        $this->container['play_default_audio_track'] = $play_default_audio_track;

        return $this;
    }

    /**
     * Gets subtitle_language_preference
     *
     * @return string|null
     */
    public function getSubtitleLanguagePreference()
    {
        return $this->container['subtitle_language_preference'];
    }

    /**
     * Sets subtitle_language_preference
     *
     * @param string|null $subtitle_language_preference Gets or sets the subtitle language preference.
     *
     * @return self
     */
    public function setSubtitleLanguagePreference($subtitle_language_preference)
    {
        if (is_null($subtitle_language_preference)) {
            array_push($this->openAPINullablesSetToNull, 'subtitle_language_preference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('subtitle_language_preference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['subtitle_language_preference'] = $subtitle_language_preference;

        return $this;
    }

    /**
     * Gets display_missing_episodes
     *
     * @return bool|null
     */
    public function getDisplayMissingEpisodes()
    {
        return $this->container['display_missing_episodes'];
    }

    /**
     * Sets display_missing_episodes
     *
     * @param bool|null $display_missing_episodes display_missing_episodes
     *
     * @return self
     */
    public function setDisplayMissingEpisodes($display_missing_episodes)
    {
        if (is_null($display_missing_episodes)) {
            throw new \InvalidArgumentException('non-nullable display_missing_episodes cannot be null');
        }
        $this->container['display_missing_episodes'] = $display_missing_episodes;

        return $this;
    }

    /**
     * Gets grouped_folders
     *
     * @return string[]|null
     */
    public function getGroupedFolders()
    {
        return $this->container['grouped_folders'];
    }

    /**
     * Sets grouped_folders
     *
     * @param string[]|null $grouped_folders grouped_folders
     *
     * @return self
     */
    public function setGroupedFolders($grouped_folders)
    {
        if (is_null($grouped_folders)) {
            throw new \InvalidArgumentException('non-nullable grouped_folders cannot be null');
        }
        $this->container['grouped_folders'] = $grouped_folders;

        return $this;
    }

    /**
     * Gets subtitle_mode
     *
     * @return \OpenAPI\Client\Model\SubtitlePlaybackMode|null
     */
    public function getSubtitleMode()
    {
        return $this->container['subtitle_mode'];
    }

    /**
     * Sets subtitle_mode
     *
     * @param \OpenAPI\Client\Model\SubtitlePlaybackMode|null $subtitle_mode subtitle_mode
     *
     * @return self
     */
    public function setSubtitleMode($subtitle_mode)
    {
        if (is_null($subtitle_mode)) {
            throw new \InvalidArgumentException('non-nullable subtitle_mode cannot be null');
        }
        $this->container['subtitle_mode'] = $subtitle_mode;

        return $this;
    }

    /**
     * Gets display_collections_view
     *
     * @return bool|null
     */
    public function getDisplayCollectionsView()
    {
        return $this->container['display_collections_view'];
    }

    /**
     * Sets display_collections_view
     *
     * @param bool|null $display_collections_view display_collections_view
     *
     * @return self
     */
    public function setDisplayCollectionsView($display_collections_view)
    {
        if (is_null($display_collections_view)) {
            throw new \InvalidArgumentException('non-nullable display_collections_view cannot be null');
        }
        $this->container['display_collections_view'] = $display_collections_view;

        return $this;
    }

    /**
     * Gets enable_local_password
     *
     * @return bool|null
     */
    public function getEnableLocalPassword()
    {
        return $this->container['enable_local_password'];
    }

    /**
     * Sets enable_local_password
     *
     * @param bool|null $enable_local_password enable_local_password
     *
     * @return self
     */
    public function setEnableLocalPassword($enable_local_password)
    {
        if (is_null($enable_local_password)) {
            throw new \InvalidArgumentException('non-nullable enable_local_password cannot be null');
        }
        $this->container['enable_local_password'] = $enable_local_password;

        return $this;
    }

    /**
     * Gets ordered_views
     *
     * @return string[]|null
     */
    public function getOrderedViews()
    {
        return $this->container['ordered_views'];
    }

    /**
     * Sets ordered_views
     *
     * @param string[]|null $ordered_views ordered_views
     *
     * @return self
     */
    public function setOrderedViews($ordered_views)
    {
        if (is_null($ordered_views)) {
            throw new \InvalidArgumentException('non-nullable ordered_views cannot be null');
        }
        $this->container['ordered_views'] = $ordered_views;

        return $this;
    }

    /**
     * Gets latest_items_excludes
     *
     * @return string[]|null
     */
    public function getLatestItemsExcludes()
    {
        return $this->container['latest_items_excludes'];
    }

    /**
     * Sets latest_items_excludes
     *
     * @param string[]|null $latest_items_excludes latest_items_excludes
     *
     * @return self
     */
    public function setLatestItemsExcludes($latest_items_excludes)
    {
        if (is_null($latest_items_excludes)) {
            throw new \InvalidArgumentException('non-nullable latest_items_excludes cannot be null');
        }
        $this->container['latest_items_excludes'] = $latest_items_excludes;

        return $this;
    }

    /**
     * Gets my_media_excludes
     *
     * @return string[]|null
     */
    public function getMyMediaExcludes()
    {
        return $this->container['my_media_excludes'];
    }

    /**
     * Sets my_media_excludes
     *
     * @param string[]|null $my_media_excludes my_media_excludes
     *
     * @return self
     */
    public function setMyMediaExcludes($my_media_excludes)
    {
        if (is_null($my_media_excludes)) {
            throw new \InvalidArgumentException('non-nullable my_media_excludes cannot be null');
        }
        $this->container['my_media_excludes'] = $my_media_excludes;

        return $this;
    }

    /**
     * Gets hide_played_in_latest
     *
     * @return bool|null
     */
    public function getHidePlayedInLatest()
    {
        return $this->container['hide_played_in_latest'];
    }

    /**
     * Sets hide_played_in_latest
     *
     * @param bool|null $hide_played_in_latest hide_played_in_latest
     *
     * @return self
     */
    public function setHidePlayedInLatest($hide_played_in_latest)
    {
        if (is_null($hide_played_in_latest)) {
            throw new \InvalidArgumentException('non-nullable hide_played_in_latest cannot be null');
        }
        $this->container['hide_played_in_latest'] = $hide_played_in_latest;

        return $this;
    }

    /**
     * Gets remember_audio_selections
     *
     * @return bool|null
     */
    public function getRememberAudioSelections()
    {
        return $this->container['remember_audio_selections'];
    }

    /**
     * Sets remember_audio_selections
     *
     * @param bool|null $remember_audio_selections remember_audio_selections
     *
     * @return self
     */
    public function setRememberAudioSelections($remember_audio_selections)
    {
        if (is_null($remember_audio_selections)) {
            throw new \InvalidArgumentException('non-nullable remember_audio_selections cannot be null');
        }
        $this->container['remember_audio_selections'] = $remember_audio_selections;

        return $this;
    }

    /**
     * Gets remember_subtitle_selections
     *
     * @return bool|null
     */
    public function getRememberSubtitleSelections()
    {
        return $this->container['remember_subtitle_selections'];
    }

    /**
     * Sets remember_subtitle_selections
     *
     * @param bool|null $remember_subtitle_selections remember_subtitle_selections
     *
     * @return self
     */
    public function setRememberSubtitleSelections($remember_subtitle_selections)
    {
        if (is_null($remember_subtitle_selections)) {
            throw new \InvalidArgumentException('non-nullable remember_subtitle_selections cannot be null');
        }
        $this->container['remember_subtitle_selections'] = $remember_subtitle_selections;

        return $this;
    }

    /**
     * Gets enable_next_episode_auto_play
     *
     * @return bool|null
     */
    public function getEnableNextEpisodeAutoPlay()
    {
        return $this->container['enable_next_episode_auto_play'];
    }

    /**
     * Sets enable_next_episode_auto_play
     *
     * @param bool|null $enable_next_episode_auto_play enable_next_episode_auto_play
     *
     * @return self
     */
    public function setEnableNextEpisodeAutoPlay($enable_next_episode_auto_play)
    {
        if (is_null($enable_next_episode_auto_play)) {
            throw new \InvalidArgumentException('non-nullable enable_next_episode_auto_play cannot be null');
        }
        $this->container['enable_next_episode_auto_play'] = $enable_next_episode_auto_play;

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


