<?php
/**
 * UserItemDataDto
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
 * UserItemDataDto Class Doc Comment
 *
 * @category Class
 * @description Class UserItemDataDto.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserItemDataDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserItemDataDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'rating' => 'float',
        'played_percentage' => 'float',
        'unplayed_item_count' => 'int',
        'playback_position_ticks' => 'int',
        'play_count' => 'int',
        'is_favorite' => 'bool',
        'likes' => 'bool',
        'last_played_date' => '\DateTime',
        'played' => 'bool',
        'key' => 'string',
        'item_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'rating' => 'double',
        'played_percentage' => 'double',
        'unplayed_item_count' => 'int32',
        'playback_position_ticks' => 'int64',
        'play_count' => 'int32',
        'is_favorite' => null,
        'likes' => null,
        'last_played_date' => 'date-time',
        'played' => null,
        'key' => null,
        'item_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'rating' => true,
		'played_percentage' => true,
		'unplayed_item_count' => true,
		'playback_position_ticks' => false,
		'play_count' => false,
		'is_favorite' => false,
		'likes' => true,
		'last_played_date' => true,
		'played' => false,
		'key' => true,
		'item_id' => true
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
        'rating' => 'Rating',
        'played_percentage' => 'PlayedPercentage',
        'unplayed_item_count' => 'UnplayedItemCount',
        'playback_position_ticks' => 'PlaybackPositionTicks',
        'play_count' => 'PlayCount',
        'is_favorite' => 'IsFavorite',
        'likes' => 'Likes',
        'last_played_date' => 'LastPlayedDate',
        'played' => 'Played',
        'key' => 'Key',
        'item_id' => 'ItemId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rating' => 'setRating',
        'played_percentage' => 'setPlayedPercentage',
        'unplayed_item_count' => 'setUnplayedItemCount',
        'playback_position_ticks' => 'setPlaybackPositionTicks',
        'play_count' => 'setPlayCount',
        'is_favorite' => 'setIsFavorite',
        'likes' => 'setLikes',
        'last_played_date' => 'setLastPlayedDate',
        'played' => 'setPlayed',
        'key' => 'setKey',
        'item_id' => 'setItemId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rating' => 'getRating',
        'played_percentage' => 'getPlayedPercentage',
        'unplayed_item_count' => 'getUnplayedItemCount',
        'playback_position_ticks' => 'getPlaybackPositionTicks',
        'play_count' => 'getPlayCount',
        'is_favorite' => 'getIsFavorite',
        'likes' => 'getLikes',
        'last_played_date' => 'getLastPlayedDate',
        'played' => 'getPlayed',
        'key' => 'getKey',
        'item_id' => 'getItemId'
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
        $this->setIfExists('rating', $data ?? [], null);
        $this->setIfExists('played_percentage', $data ?? [], null);
        $this->setIfExists('unplayed_item_count', $data ?? [], null);
        $this->setIfExists('playback_position_ticks', $data ?? [], null);
        $this->setIfExists('play_count', $data ?? [], null);
        $this->setIfExists('is_favorite', $data ?? [], null);
        $this->setIfExists('likes', $data ?? [], null);
        $this->setIfExists('last_played_date', $data ?? [], null);
        $this->setIfExists('played', $data ?? [], null);
        $this->setIfExists('key', $data ?? [], null);
        $this->setIfExists('item_id', $data ?? [], null);
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
     * Gets rating
     *
     * @return float|null
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     *
     * @param float|null $rating Gets or sets the rating.
     *
     * @return self
     */
    public function setRating($rating)
    {
        if (is_null($rating)) {
            array_push($this->openAPINullablesSetToNull, 'rating');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rating', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets played_percentage
     *
     * @return float|null
     */
    public function getPlayedPercentage()
    {
        return $this->container['played_percentage'];
    }

    /**
     * Sets played_percentage
     *
     * @param float|null $played_percentage Gets or sets the played percentage.
     *
     * @return self
     */
    public function setPlayedPercentage($played_percentage)
    {
        if (is_null($played_percentage)) {
            array_push($this->openAPINullablesSetToNull, 'played_percentage');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('played_percentage', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['played_percentage'] = $played_percentage;

        return $this;
    }

    /**
     * Gets unplayed_item_count
     *
     * @return int|null
     */
    public function getUnplayedItemCount()
    {
        return $this->container['unplayed_item_count'];
    }

    /**
     * Sets unplayed_item_count
     *
     * @param int|null $unplayed_item_count Gets or sets the unplayed item count.
     *
     * @return self
     */
    public function setUnplayedItemCount($unplayed_item_count)
    {
        if (is_null($unplayed_item_count)) {
            array_push($this->openAPINullablesSetToNull, 'unplayed_item_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unplayed_item_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['unplayed_item_count'] = $unplayed_item_count;

        return $this;
    }

    /**
     * Gets playback_position_ticks
     *
     * @return int|null
     */
    public function getPlaybackPositionTicks()
    {
        return $this->container['playback_position_ticks'];
    }

    /**
     * Sets playback_position_ticks
     *
     * @param int|null $playback_position_ticks Gets or sets the playback position ticks.
     *
     * @return self
     */
    public function setPlaybackPositionTicks($playback_position_ticks)
    {
        if (is_null($playback_position_ticks)) {
            throw new \InvalidArgumentException('non-nullable playback_position_ticks cannot be null');
        }
        $this->container['playback_position_ticks'] = $playback_position_ticks;

        return $this;
    }

    /**
     * Gets play_count
     *
     * @return int|null
     */
    public function getPlayCount()
    {
        return $this->container['play_count'];
    }

    /**
     * Sets play_count
     *
     * @param int|null $play_count Gets or sets the play count.
     *
     * @return self
     */
    public function setPlayCount($play_count)
    {
        if (is_null($play_count)) {
            throw new \InvalidArgumentException('non-nullable play_count cannot be null');
        }
        $this->container['play_count'] = $play_count;

        return $this;
    }

    /**
     * Gets is_favorite
     *
     * @return bool|null
     */
    public function getIsFavorite()
    {
        return $this->container['is_favorite'];
    }

    /**
     * Sets is_favorite
     *
     * @param bool|null $is_favorite Gets or sets a value indicating whether this instance is favorite.
     *
     * @return self
     */
    public function setIsFavorite($is_favorite)
    {
        if (is_null($is_favorite)) {
            throw new \InvalidArgumentException('non-nullable is_favorite cannot be null');
        }
        $this->container['is_favorite'] = $is_favorite;

        return $this;
    }

    /**
     * Gets likes
     *
     * @return bool|null
     */
    public function getLikes()
    {
        return $this->container['likes'];
    }

    /**
     * Sets likes
     *
     * @param bool|null $likes Gets or sets a value indicating whether this MediaBrowser.Model.Dto.UserItemDataDto is likes.
     *
     * @return self
     */
    public function setLikes($likes)
    {
        if (is_null($likes)) {
            array_push($this->openAPINullablesSetToNull, 'likes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('likes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['likes'] = $likes;

        return $this;
    }

    /**
     * Gets last_played_date
     *
     * @return \DateTime|null
     */
    public function getLastPlayedDate()
    {
        return $this->container['last_played_date'];
    }

    /**
     * Sets last_played_date
     *
     * @param \DateTime|null $last_played_date Gets or sets the last played date.
     *
     * @return self
     */
    public function setLastPlayedDate($last_played_date)
    {
        if (is_null($last_played_date)) {
            array_push($this->openAPINullablesSetToNull, 'last_played_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_played_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_played_date'] = $last_played_date;

        return $this;
    }

    /**
     * Gets played
     *
     * @return bool|null
     */
    public function getPlayed()
    {
        return $this->container['played'];
    }

    /**
     * Sets played
     *
     * @param bool|null $played Gets or sets a value indicating whether this MediaBrowser.Model.Dto.UserItemDataDto is played.
     *
     * @return self
     */
    public function setPlayed($played)
    {
        if (is_null($played)) {
            throw new \InvalidArgumentException('non-nullable played cannot be null');
        }
        $this->container['played'] = $played;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string|null $key Gets or sets the key.
     *
     * @return self
     */
    public function setKey($key)
    {
        if (is_null($key)) {
            array_push($this->openAPINullablesSetToNull, 'key');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('key', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['key'] = $key;

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
            array_push($this->openAPINullablesSetToNull, 'item_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('item_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['item_id'] = $item_id;

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


