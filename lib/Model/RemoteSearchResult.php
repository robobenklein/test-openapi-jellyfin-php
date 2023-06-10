<?php
/**
 * RemoteSearchResult
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
 * RemoteSearchResult Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RemoteSearchResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RemoteSearchResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'provider_ids' => 'array<string,string>',
        'production_year' => 'int',
        'index_number' => 'int',
        'index_number_end' => 'int',
        'parent_index_number' => 'int',
        'premiere_date' => '\DateTime',
        'image_url' => 'string',
        'search_provider_name' => 'string',
        'overview' => 'string',
        'album_artist' => '\OpenAPI\Client\Model\RemoteSearchResult',
        'artists' => '\OpenAPI\Client\Model\RemoteSearchResult[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'provider_ids' => null,
        'production_year' => 'int32',
        'index_number' => 'int32',
        'index_number_end' => 'int32',
        'parent_index_number' => 'int32',
        'premiere_date' => 'date-time',
        'image_url' => null,
        'search_provider_name' => null,
        'overview' => null,
        'album_artist' => null,
        'artists' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => true,
		'provider_ids' => true,
		'production_year' => true,
		'index_number' => true,
		'index_number_end' => true,
		'parent_index_number' => true,
		'premiere_date' => true,
		'image_url' => true,
		'search_provider_name' => true,
		'overview' => true,
		'album_artist' => true,
		'artists' => true
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
        'name' => 'Name',
        'provider_ids' => 'ProviderIds',
        'production_year' => 'ProductionYear',
        'index_number' => 'IndexNumber',
        'index_number_end' => 'IndexNumberEnd',
        'parent_index_number' => 'ParentIndexNumber',
        'premiere_date' => 'PremiereDate',
        'image_url' => 'ImageUrl',
        'search_provider_name' => 'SearchProviderName',
        'overview' => 'Overview',
        'album_artist' => 'AlbumArtist',
        'artists' => 'Artists'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'provider_ids' => 'setProviderIds',
        'production_year' => 'setProductionYear',
        'index_number' => 'setIndexNumber',
        'index_number_end' => 'setIndexNumberEnd',
        'parent_index_number' => 'setParentIndexNumber',
        'premiere_date' => 'setPremiereDate',
        'image_url' => 'setImageUrl',
        'search_provider_name' => 'setSearchProviderName',
        'overview' => 'setOverview',
        'album_artist' => 'setAlbumArtist',
        'artists' => 'setArtists'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'provider_ids' => 'getProviderIds',
        'production_year' => 'getProductionYear',
        'index_number' => 'getIndexNumber',
        'index_number_end' => 'getIndexNumberEnd',
        'parent_index_number' => 'getParentIndexNumber',
        'premiere_date' => 'getPremiereDate',
        'image_url' => 'getImageUrl',
        'search_provider_name' => 'getSearchProviderName',
        'overview' => 'getOverview',
        'album_artist' => 'getAlbumArtist',
        'artists' => 'getArtists'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('provider_ids', $data ?? [], null);
        $this->setIfExists('production_year', $data ?? [], null);
        $this->setIfExists('index_number', $data ?? [], null);
        $this->setIfExists('index_number_end', $data ?? [], null);
        $this->setIfExists('parent_index_number', $data ?? [], null);
        $this->setIfExists('premiere_date', $data ?? [], null);
        $this->setIfExists('image_url', $data ?? [], null);
        $this->setIfExists('search_provider_name', $data ?? [], null);
        $this->setIfExists('overview', $data ?? [], null);
        $this->setIfExists('album_artist', $data ?? [], null);
        $this->setIfExists('artists', $data ?? [], null);
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Gets or sets the name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets provider_ids
     *
     * @return array<string,string>|null
     */
    public function getProviderIds()
    {
        return $this->container['provider_ids'];
    }

    /**
     * Sets provider_ids
     *
     * @param array<string,string>|null $provider_ids Gets or sets the provider ids.
     *
     * @return self
     */
    public function setProviderIds($provider_ids)
    {
        if (is_null($provider_ids)) {
            array_push($this->openAPINullablesSetToNull, 'provider_ids');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('provider_ids', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['provider_ids'] = $provider_ids;

        return $this;
    }

    /**
     * Gets production_year
     *
     * @return int|null
     */
    public function getProductionYear()
    {
        return $this->container['production_year'];
    }

    /**
     * Sets production_year
     *
     * @param int|null $production_year Gets or sets the year.
     *
     * @return self
     */
    public function setProductionYear($production_year)
    {
        if (is_null($production_year)) {
            array_push($this->openAPINullablesSetToNull, 'production_year');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('production_year', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['production_year'] = $production_year;

        return $this;
    }

    /**
     * Gets index_number
     *
     * @return int|null
     */
    public function getIndexNumber()
    {
        return $this->container['index_number'];
    }

    /**
     * Sets index_number
     *
     * @param int|null $index_number index_number
     *
     * @return self
     */
    public function setIndexNumber($index_number)
    {
        if (is_null($index_number)) {
            array_push($this->openAPINullablesSetToNull, 'index_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('index_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['index_number'] = $index_number;

        return $this;
    }

    /**
     * Gets index_number_end
     *
     * @return int|null
     */
    public function getIndexNumberEnd()
    {
        return $this->container['index_number_end'];
    }

    /**
     * Sets index_number_end
     *
     * @param int|null $index_number_end index_number_end
     *
     * @return self
     */
    public function setIndexNumberEnd($index_number_end)
    {
        if (is_null($index_number_end)) {
            array_push($this->openAPINullablesSetToNull, 'index_number_end');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('index_number_end', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['index_number_end'] = $index_number_end;

        return $this;
    }

    /**
     * Gets parent_index_number
     *
     * @return int|null
     */
    public function getParentIndexNumber()
    {
        return $this->container['parent_index_number'];
    }

    /**
     * Sets parent_index_number
     *
     * @param int|null $parent_index_number parent_index_number
     *
     * @return self
     */
    public function setParentIndexNumber($parent_index_number)
    {
        if (is_null($parent_index_number)) {
            array_push($this->openAPINullablesSetToNull, 'parent_index_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('parent_index_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['parent_index_number'] = $parent_index_number;

        return $this;
    }

    /**
     * Gets premiere_date
     *
     * @return \DateTime|null
     */
    public function getPremiereDate()
    {
        return $this->container['premiere_date'];
    }

    /**
     * Sets premiere_date
     *
     * @param \DateTime|null $premiere_date premiere_date
     *
     * @return self
     */
    public function setPremiereDate($premiere_date)
    {
        if (is_null($premiere_date)) {
            array_push($this->openAPINullablesSetToNull, 'premiere_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('premiere_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['premiere_date'] = $premiere_date;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string|null $image_url image_url
     *
     * @return self
     */
    public function setImageUrl($image_url)
    {
        if (is_null($image_url)) {
            array_push($this->openAPINullablesSetToNull, 'image_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('image_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets search_provider_name
     *
     * @return string|null
     */
    public function getSearchProviderName()
    {
        return $this->container['search_provider_name'];
    }

    /**
     * Sets search_provider_name
     *
     * @param string|null $search_provider_name search_provider_name
     *
     * @return self
     */
    public function setSearchProviderName($search_provider_name)
    {
        if (is_null($search_provider_name)) {
            array_push($this->openAPINullablesSetToNull, 'search_provider_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('search_provider_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['search_provider_name'] = $search_provider_name;

        return $this;
    }

    /**
     * Gets overview
     *
     * @return string|null
     */
    public function getOverview()
    {
        return $this->container['overview'];
    }

    /**
     * Sets overview
     *
     * @param string|null $overview overview
     *
     * @return self
     */
    public function setOverview($overview)
    {
        if (is_null($overview)) {
            array_push($this->openAPINullablesSetToNull, 'overview');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('overview', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['overview'] = $overview;

        return $this;
    }

    /**
     * Gets album_artist
     *
     * @return \OpenAPI\Client\Model\RemoteSearchResult|null
     */
    public function getAlbumArtist()
    {
        return $this->container['album_artist'];
    }

    /**
     * Sets album_artist
     *
     * @param \OpenAPI\Client\Model\RemoteSearchResult|null $album_artist album_artist
     *
     * @return self
     */
    public function setAlbumArtist($album_artist)
    {
        if (is_null($album_artist)) {
            array_push($this->openAPINullablesSetToNull, 'album_artist');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('album_artist', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['album_artist'] = $album_artist;

        return $this;
    }

    /**
     * Gets artists
     *
     * @return \OpenAPI\Client\Model\RemoteSearchResult[]|null
     */
    public function getArtists()
    {
        return $this->container['artists'];
    }

    /**
     * Sets artists
     *
     * @param \OpenAPI\Client\Model\RemoteSearchResult[]|null $artists artists
     *
     * @return self
     */
    public function setArtists($artists)
    {
        if (is_null($artists)) {
            array_push($this->openAPINullablesSetToNull, 'artists');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('artists', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['artists'] = $artists;

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

