<?php
/**
 * GetProgramsRequest
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
 * GetProgramsRequest Class Doc Comment
 *
 * @category Class
 * @description Get programs dto.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetProgramsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetPrograms_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'channel_ids' => 'string[]',
        'user_id' => 'string',
        'min_start_date' => '\DateTime',
        'has_aired' => 'bool',
        'is_airing' => 'bool',
        'max_start_date' => '\DateTime',
        'min_end_date' => '\DateTime',
        'max_end_date' => '\DateTime',
        'is_movie' => 'bool',
        'is_series' => 'bool',
        'is_news' => 'bool',
        'is_kids' => 'bool',
        'is_sports' => 'bool',
        'start_index' => 'int',
        'limit' => 'int',
        'sort_by' => 'string[]',
        'sort_order' => '\OpenAPI\Client\Model\SortOrder[]',
        'genres' => 'string[]',
        'genre_ids' => 'string[]',
        'enable_images' => 'bool',
        'enable_total_record_count' => 'bool',
        'image_type_limit' => 'int',
        'enable_image_types' => '\OpenAPI\Client\Model\ImageType[]',
        'enable_user_data' => 'bool',
        'series_timer_id' => 'string',
        'library_series_id' => 'string',
        'fields' => '\OpenAPI\Client\Model\ItemFields[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'channel_ids' => 'uuid',
        'user_id' => 'uuid',
        'min_start_date' => 'date-time',
        'has_aired' => null,
        'is_airing' => null,
        'max_start_date' => 'date-time',
        'min_end_date' => 'date-time',
        'max_end_date' => 'date-time',
        'is_movie' => null,
        'is_series' => null,
        'is_news' => null,
        'is_kids' => null,
        'is_sports' => null,
        'start_index' => 'int32',
        'limit' => 'int32',
        'sort_by' => null,
        'sort_order' => null,
        'genres' => null,
        'genre_ids' => 'uuid',
        'enable_images' => null,
        'enable_total_record_count' => null,
        'image_type_limit' => 'int32',
        'enable_image_types' => null,
        'enable_user_data' => null,
        'series_timer_id' => null,
        'library_series_id' => 'uuid',
        'fields' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'channel_ids' => false,
		'user_id' => false,
		'min_start_date' => true,
		'has_aired' => true,
		'is_airing' => true,
		'max_start_date' => true,
		'min_end_date' => true,
		'max_end_date' => true,
		'is_movie' => true,
		'is_series' => true,
		'is_news' => true,
		'is_kids' => true,
		'is_sports' => true,
		'start_index' => true,
		'limit' => true,
		'sort_by' => false,
		'sort_order' => false,
		'genres' => false,
		'genre_ids' => false,
		'enable_images' => true,
		'enable_total_record_count' => false,
		'image_type_limit' => true,
		'enable_image_types' => false,
		'enable_user_data' => true,
		'series_timer_id' => true,
		'library_series_id' => false,
		'fields' => false
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
        'channel_ids' => 'ChannelIds',
        'user_id' => 'UserId',
        'min_start_date' => 'MinStartDate',
        'has_aired' => 'HasAired',
        'is_airing' => 'IsAiring',
        'max_start_date' => 'MaxStartDate',
        'min_end_date' => 'MinEndDate',
        'max_end_date' => 'MaxEndDate',
        'is_movie' => 'IsMovie',
        'is_series' => 'IsSeries',
        'is_news' => 'IsNews',
        'is_kids' => 'IsKids',
        'is_sports' => 'IsSports',
        'start_index' => 'StartIndex',
        'limit' => 'Limit',
        'sort_by' => 'SortBy',
        'sort_order' => 'SortOrder',
        'genres' => 'Genres',
        'genre_ids' => 'GenreIds',
        'enable_images' => 'EnableImages',
        'enable_total_record_count' => 'EnableTotalRecordCount',
        'image_type_limit' => 'ImageTypeLimit',
        'enable_image_types' => 'EnableImageTypes',
        'enable_user_data' => 'EnableUserData',
        'series_timer_id' => 'SeriesTimerId',
        'library_series_id' => 'LibrarySeriesId',
        'fields' => 'Fields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channel_ids' => 'setChannelIds',
        'user_id' => 'setUserId',
        'min_start_date' => 'setMinStartDate',
        'has_aired' => 'setHasAired',
        'is_airing' => 'setIsAiring',
        'max_start_date' => 'setMaxStartDate',
        'min_end_date' => 'setMinEndDate',
        'max_end_date' => 'setMaxEndDate',
        'is_movie' => 'setIsMovie',
        'is_series' => 'setIsSeries',
        'is_news' => 'setIsNews',
        'is_kids' => 'setIsKids',
        'is_sports' => 'setIsSports',
        'start_index' => 'setStartIndex',
        'limit' => 'setLimit',
        'sort_by' => 'setSortBy',
        'sort_order' => 'setSortOrder',
        'genres' => 'setGenres',
        'genre_ids' => 'setGenreIds',
        'enable_images' => 'setEnableImages',
        'enable_total_record_count' => 'setEnableTotalRecordCount',
        'image_type_limit' => 'setImageTypeLimit',
        'enable_image_types' => 'setEnableImageTypes',
        'enable_user_data' => 'setEnableUserData',
        'series_timer_id' => 'setSeriesTimerId',
        'library_series_id' => 'setLibrarySeriesId',
        'fields' => 'setFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel_ids' => 'getChannelIds',
        'user_id' => 'getUserId',
        'min_start_date' => 'getMinStartDate',
        'has_aired' => 'getHasAired',
        'is_airing' => 'getIsAiring',
        'max_start_date' => 'getMaxStartDate',
        'min_end_date' => 'getMinEndDate',
        'max_end_date' => 'getMaxEndDate',
        'is_movie' => 'getIsMovie',
        'is_series' => 'getIsSeries',
        'is_news' => 'getIsNews',
        'is_kids' => 'getIsKids',
        'is_sports' => 'getIsSports',
        'start_index' => 'getStartIndex',
        'limit' => 'getLimit',
        'sort_by' => 'getSortBy',
        'sort_order' => 'getSortOrder',
        'genres' => 'getGenres',
        'genre_ids' => 'getGenreIds',
        'enable_images' => 'getEnableImages',
        'enable_total_record_count' => 'getEnableTotalRecordCount',
        'image_type_limit' => 'getImageTypeLimit',
        'enable_image_types' => 'getEnableImageTypes',
        'enable_user_data' => 'getEnableUserData',
        'series_timer_id' => 'getSeriesTimerId',
        'library_series_id' => 'getLibrarySeriesId',
        'fields' => 'getFields'
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
        $this->setIfExists('channel_ids', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('min_start_date', $data ?? [], null);
        $this->setIfExists('has_aired', $data ?? [], null);
        $this->setIfExists('is_airing', $data ?? [], null);
        $this->setIfExists('max_start_date', $data ?? [], null);
        $this->setIfExists('min_end_date', $data ?? [], null);
        $this->setIfExists('max_end_date', $data ?? [], null);
        $this->setIfExists('is_movie', $data ?? [], null);
        $this->setIfExists('is_series', $data ?? [], null);
        $this->setIfExists('is_news', $data ?? [], null);
        $this->setIfExists('is_kids', $data ?? [], null);
        $this->setIfExists('is_sports', $data ?? [], null);
        $this->setIfExists('start_index', $data ?? [], null);
        $this->setIfExists('limit', $data ?? [], null);
        $this->setIfExists('sort_by', $data ?? [], null);
        $this->setIfExists('sort_order', $data ?? [], null);
        $this->setIfExists('genres', $data ?? [], null);
        $this->setIfExists('genre_ids', $data ?? [], null);
        $this->setIfExists('enable_images', $data ?? [], null);
        $this->setIfExists('enable_total_record_count', $data ?? [], null);
        $this->setIfExists('image_type_limit', $data ?? [], null);
        $this->setIfExists('enable_image_types', $data ?? [], null);
        $this->setIfExists('enable_user_data', $data ?? [], null);
        $this->setIfExists('series_timer_id', $data ?? [], null);
        $this->setIfExists('library_series_id', $data ?? [], null);
        $this->setIfExists('fields', $data ?? [], null);
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
     * Gets channel_ids
     *
     * @return string[]|null
     */
    public function getChannelIds()
    {
        return $this->container['channel_ids'];
    }

    /**
     * Sets channel_ids
     *
     * @param string[]|null $channel_ids Gets or sets the channels to return guide information for.
     *
     * @return self
     */
    public function setChannelIds($channel_ids)
    {
        if (is_null($channel_ids)) {
            throw new \InvalidArgumentException('non-nullable channel_ids cannot be null');
        }
        $this->container['channel_ids'] = $channel_ids;

        return $this;
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
     * @param string|null $user_id Gets or sets optional. Filter by user id.
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        if (is_null($user_id)) {
            throw new \InvalidArgumentException('non-nullable user_id cannot be null');
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets min_start_date
     *
     * @return \DateTime|null
     */
    public function getMinStartDate()
    {
        return $this->container['min_start_date'];
    }

    /**
     * Sets min_start_date
     *
     * @param \DateTime|null $min_start_date Gets or sets the minimum premiere start date.  Optional.
     *
     * @return self
     */
    public function setMinStartDate($min_start_date)
    {
        if (is_null($min_start_date)) {
            array_push($this->openAPINullablesSetToNull, 'min_start_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('min_start_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['min_start_date'] = $min_start_date;

        return $this;
    }

    /**
     * Gets has_aired
     *
     * @return bool|null
     */
    public function getHasAired()
    {
        return $this->container['has_aired'];
    }

    /**
     * Sets has_aired
     *
     * @param bool|null $has_aired Gets or sets filter by programs that have completed airing, or not.  Optional.
     *
     * @return self
     */
    public function setHasAired($has_aired)
    {
        if (is_null($has_aired)) {
            array_push($this->openAPINullablesSetToNull, 'has_aired');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('has_aired', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['has_aired'] = $has_aired;

        return $this;
    }

    /**
     * Gets is_airing
     *
     * @return bool|null
     */
    public function getIsAiring()
    {
        return $this->container['is_airing'];
    }

    /**
     * Sets is_airing
     *
     * @param bool|null $is_airing Gets or sets filter by programs that are currently airing, or not.  Optional.
     *
     * @return self
     */
    public function setIsAiring($is_airing)
    {
        if (is_null($is_airing)) {
            array_push($this->openAPINullablesSetToNull, 'is_airing');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_airing', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_airing'] = $is_airing;

        return $this;
    }

    /**
     * Gets max_start_date
     *
     * @return \DateTime|null
     */
    public function getMaxStartDate()
    {
        return $this->container['max_start_date'];
    }

    /**
     * Sets max_start_date
     *
     * @param \DateTime|null $max_start_date Gets or sets the maximum premiere start date.  Optional.
     *
     * @return self
     */
    public function setMaxStartDate($max_start_date)
    {
        if (is_null($max_start_date)) {
            array_push($this->openAPINullablesSetToNull, 'max_start_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_start_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_start_date'] = $max_start_date;

        return $this;
    }

    /**
     * Gets min_end_date
     *
     * @return \DateTime|null
     */
    public function getMinEndDate()
    {
        return $this->container['min_end_date'];
    }

    /**
     * Sets min_end_date
     *
     * @param \DateTime|null $min_end_date Gets or sets the minimum premiere end date.  Optional.
     *
     * @return self
     */
    public function setMinEndDate($min_end_date)
    {
        if (is_null($min_end_date)) {
            array_push($this->openAPINullablesSetToNull, 'min_end_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('min_end_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['min_end_date'] = $min_end_date;

        return $this;
    }

    /**
     * Gets max_end_date
     *
     * @return \DateTime|null
     */
    public function getMaxEndDate()
    {
        return $this->container['max_end_date'];
    }

    /**
     * Sets max_end_date
     *
     * @param \DateTime|null $max_end_date Gets or sets the maximum premiere end date.  Optional.
     *
     * @return self
     */
    public function setMaxEndDate($max_end_date)
    {
        if (is_null($max_end_date)) {
            array_push($this->openAPINullablesSetToNull, 'max_end_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_end_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_end_date'] = $max_end_date;

        return $this;
    }

    /**
     * Gets is_movie
     *
     * @return bool|null
     */
    public function getIsMovie()
    {
        return $this->container['is_movie'];
    }

    /**
     * Sets is_movie
     *
     * @param bool|null $is_movie Gets or sets filter for movies.  Optional.
     *
     * @return self
     */
    public function setIsMovie($is_movie)
    {
        if (is_null($is_movie)) {
            array_push($this->openAPINullablesSetToNull, 'is_movie');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_movie', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_movie'] = $is_movie;

        return $this;
    }

    /**
     * Gets is_series
     *
     * @return bool|null
     */
    public function getIsSeries()
    {
        return $this->container['is_series'];
    }

    /**
     * Sets is_series
     *
     * @param bool|null $is_series Gets or sets filter for series.  Optional.
     *
     * @return self
     */
    public function setIsSeries($is_series)
    {
        if (is_null($is_series)) {
            array_push($this->openAPINullablesSetToNull, 'is_series');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_series', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_series'] = $is_series;

        return $this;
    }

    /**
     * Gets is_news
     *
     * @return bool|null
     */
    public function getIsNews()
    {
        return $this->container['is_news'];
    }

    /**
     * Sets is_news
     *
     * @param bool|null $is_news Gets or sets filter for news.  Optional.
     *
     * @return self
     */
    public function setIsNews($is_news)
    {
        if (is_null($is_news)) {
            array_push($this->openAPINullablesSetToNull, 'is_news');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_news', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_news'] = $is_news;

        return $this;
    }

    /**
     * Gets is_kids
     *
     * @return bool|null
     */
    public function getIsKids()
    {
        return $this->container['is_kids'];
    }

    /**
     * Sets is_kids
     *
     * @param bool|null $is_kids Gets or sets filter for kids.  Optional.
     *
     * @return self
     */
    public function setIsKids($is_kids)
    {
        if (is_null($is_kids)) {
            array_push($this->openAPINullablesSetToNull, 'is_kids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_kids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_kids'] = $is_kids;

        return $this;
    }

    /**
     * Gets is_sports
     *
     * @return bool|null
     */
    public function getIsSports()
    {
        return $this->container['is_sports'];
    }

    /**
     * Sets is_sports
     *
     * @param bool|null $is_sports Gets or sets filter for sports.  Optional.
     *
     * @return self
     */
    public function setIsSports($is_sports)
    {
        if (is_null($is_sports)) {
            array_push($this->openAPINullablesSetToNull, 'is_sports');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_sports', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_sports'] = $is_sports;

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
     * @param int|null $start_index Gets or sets the record index to start at. All items with a lower index will be dropped from the results.  Optional.
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
     * Gets limit
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit Gets or sets the maximum number of records to return.  Optional.
     *
     * @return self
     */
    public function setLimit($limit)
    {
        if (is_null($limit)) {
            array_push($this->openAPINullablesSetToNull, 'limit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('limit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets sort_by
     *
     * @return string[]|null
     */
    public function getSortBy()
    {
        return $this->container['sort_by'];
    }

    /**
     * Sets sort_by
     *
     * @param string[]|null $sort_by Gets or sets specify one or more sort orders, comma delimited. Options: Name, StartDate.  Optional.
     *
     * @return self
     */
    public function setSortBy($sort_by)
    {
        if (is_null($sort_by)) {
            throw new \InvalidArgumentException('non-nullable sort_by cannot be null');
        }
        $this->container['sort_by'] = $sort_by;

        return $this;
    }

    /**
     * Gets sort_order
     *
     * @return \OpenAPI\Client\Model\SortOrder[]|null
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     *
     * @param \OpenAPI\Client\Model\SortOrder[]|null $sort_order Gets or sets sort Order - Ascending,Descending.
     *
     * @return self
     */
    public function setSortOrder($sort_order)
    {
        if (is_null($sort_order)) {
            throw new \InvalidArgumentException('non-nullable sort_order cannot be null');
        }
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets genres
     *
     * @return string[]|null
     */
    public function getGenres()
    {
        return $this->container['genres'];
    }

    /**
     * Sets genres
     *
     * @param string[]|null $genres Gets or sets the genres to return guide information for.
     *
     * @return self
     */
    public function setGenres($genres)
    {
        if (is_null($genres)) {
            throw new \InvalidArgumentException('non-nullable genres cannot be null');
        }
        $this->container['genres'] = $genres;

        return $this;
    }

    /**
     * Gets genre_ids
     *
     * @return string[]|null
     */
    public function getGenreIds()
    {
        return $this->container['genre_ids'];
    }

    /**
     * Sets genre_ids
     *
     * @param string[]|null $genre_ids Gets or sets the genre ids to return guide information for.
     *
     * @return self
     */
    public function setGenreIds($genre_ids)
    {
        if (is_null($genre_ids)) {
            throw new \InvalidArgumentException('non-nullable genre_ids cannot be null');
        }
        $this->container['genre_ids'] = $genre_ids;

        return $this;
    }

    /**
     * Gets enable_images
     *
     * @return bool|null
     */
    public function getEnableImages()
    {
        return $this->container['enable_images'];
    }

    /**
     * Sets enable_images
     *
     * @param bool|null $enable_images Gets or sets include image information in output.  Optional.
     *
     * @return self
     */
    public function setEnableImages($enable_images)
    {
        if (is_null($enable_images)) {
            array_push($this->openAPINullablesSetToNull, 'enable_images');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enable_images', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['enable_images'] = $enable_images;

        return $this;
    }

    /**
     * Gets enable_total_record_count
     *
     * @return bool|null
     */
    public function getEnableTotalRecordCount()
    {
        return $this->container['enable_total_record_count'];
    }

    /**
     * Sets enable_total_record_count
     *
     * @param bool|null $enable_total_record_count Gets or sets a value indicating whether retrieve total record count.
     *
     * @return self
     */
    public function setEnableTotalRecordCount($enable_total_record_count)
    {
        if (is_null($enable_total_record_count)) {
            throw new \InvalidArgumentException('non-nullable enable_total_record_count cannot be null');
        }
        $this->container['enable_total_record_count'] = $enable_total_record_count;

        return $this;
    }

    /**
     * Gets image_type_limit
     *
     * @return int|null
     */
    public function getImageTypeLimit()
    {
        return $this->container['image_type_limit'];
    }

    /**
     * Sets image_type_limit
     *
     * @param int|null $image_type_limit Gets or sets the max number of images to return, per image type.  Optional.
     *
     * @return self
     */
    public function setImageTypeLimit($image_type_limit)
    {
        if (is_null($image_type_limit)) {
            array_push($this->openAPINullablesSetToNull, 'image_type_limit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('image_type_limit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['image_type_limit'] = $image_type_limit;

        return $this;
    }

    /**
     * Gets enable_image_types
     *
     * @return \OpenAPI\Client\Model\ImageType[]|null
     */
    public function getEnableImageTypes()
    {
        return $this->container['enable_image_types'];
    }

    /**
     * Sets enable_image_types
     *
     * @param \OpenAPI\Client\Model\ImageType[]|null $enable_image_types Gets or sets the image types to include in the output.  Optional.
     *
     * @return self
     */
    public function setEnableImageTypes($enable_image_types)
    {
        if (is_null($enable_image_types)) {
            throw new \InvalidArgumentException('non-nullable enable_image_types cannot be null');
        }
        $this->container['enable_image_types'] = $enable_image_types;

        return $this;
    }

    /**
     * Gets enable_user_data
     *
     * @return bool|null
     */
    public function getEnableUserData()
    {
        return $this->container['enable_user_data'];
    }

    /**
     * Sets enable_user_data
     *
     * @param bool|null $enable_user_data Gets or sets include user data.  Optional.
     *
     * @return self
     */
    public function setEnableUserData($enable_user_data)
    {
        if (is_null($enable_user_data)) {
            array_push($this->openAPINullablesSetToNull, 'enable_user_data');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enable_user_data', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['enable_user_data'] = $enable_user_data;

        return $this;
    }

    /**
     * Gets series_timer_id
     *
     * @return string|null
     */
    public function getSeriesTimerId()
    {
        return $this->container['series_timer_id'];
    }

    /**
     * Sets series_timer_id
     *
     * @param string|null $series_timer_id Gets or sets filter by series timer id.  Optional.
     *
     * @return self
     */
    public function setSeriesTimerId($series_timer_id)
    {
        if (is_null($series_timer_id)) {
            array_push($this->openAPINullablesSetToNull, 'series_timer_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('series_timer_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['series_timer_id'] = $series_timer_id;

        return $this;
    }

    /**
     * Gets library_series_id
     *
     * @return string|null
     */
    public function getLibrarySeriesId()
    {
        return $this->container['library_series_id'];
    }

    /**
     * Sets library_series_id
     *
     * @param string|null $library_series_id Gets or sets filter by library series id.  Optional.
     *
     * @return self
     */
    public function setLibrarySeriesId($library_series_id)
    {
        if (is_null($library_series_id)) {
            throw new \InvalidArgumentException('non-nullable library_series_id cannot be null');
        }
        $this->container['library_series_id'] = $library_series_id;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \OpenAPI\Client\Model\ItemFields[]|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \OpenAPI\Client\Model\ItemFields[]|null $fields Gets or sets specify additional fields of information to return in the output. This allows multiple, comma delimited. Options: Budget, Chapters, DateCreated, Genres, HomePageUrl, IndexOptions, MediaStreams, Overview, ParentId, Path, People, ProviderIds, PrimaryImageAspectRatio, Revenue, SortName, Studios, Taglines.  Optional.
     *
     * @return self
     */
    public function setFields($fields)
    {
        if (is_null($fields)) {
            throw new \InvalidArgumentException('non-nullable fields cannot be null');
        }
        $this->container['fields'] = $fields;

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


