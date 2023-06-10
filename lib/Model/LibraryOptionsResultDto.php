<?php
/**
 * LibraryOptionsResultDto
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
 * LibraryOptionsResultDto Class Doc Comment
 *
 * @category Class
 * @description Library options result dto.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LibraryOptionsResultDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LibraryOptionsResultDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'metadata_savers' => '\OpenAPI\Client\Model\LibraryOptionInfoDto[]',
        'metadata_readers' => '\OpenAPI\Client\Model\LibraryOptionInfoDto[]',
        'subtitle_fetchers' => '\OpenAPI\Client\Model\LibraryOptionInfoDto[]',
        'type_options' => '\OpenAPI\Client\Model\LibraryTypeOptionsDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'metadata_savers' => null,
        'metadata_readers' => null,
        'subtitle_fetchers' => null,
        'type_options' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'metadata_savers' => false,
		'metadata_readers' => false,
		'subtitle_fetchers' => false,
		'type_options' => false
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
        'metadata_savers' => 'MetadataSavers',
        'metadata_readers' => 'MetadataReaders',
        'subtitle_fetchers' => 'SubtitleFetchers',
        'type_options' => 'TypeOptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'metadata_savers' => 'setMetadataSavers',
        'metadata_readers' => 'setMetadataReaders',
        'subtitle_fetchers' => 'setSubtitleFetchers',
        'type_options' => 'setTypeOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'metadata_savers' => 'getMetadataSavers',
        'metadata_readers' => 'getMetadataReaders',
        'subtitle_fetchers' => 'getSubtitleFetchers',
        'type_options' => 'getTypeOptions'
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
        $this->setIfExists('metadata_savers', $data ?? [], null);
        $this->setIfExists('metadata_readers', $data ?? [], null);
        $this->setIfExists('subtitle_fetchers', $data ?? [], null);
        $this->setIfExists('type_options', $data ?? [], null);
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
     * Gets metadata_savers
     *
     * @return \OpenAPI\Client\Model\LibraryOptionInfoDto[]|null
     */
    public function getMetadataSavers()
    {
        return $this->container['metadata_savers'];
    }

    /**
     * Sets metadata_savers
     *
     * @param \OpenAPI\Client\Model\LibraryOptionInfoDto[]|null $metadata_savers Gets or sets the metadata savers.
     *
     * @return self
     */
    public function setMetadataSavers($metadata_savers)
    {
        if (is_null($metadata_savers)) {
            throw new \InvalidArgumentException('non-nullable metadata_savers cannot be null');
        }
        $this->container['metadata_savers'] = $metadata_savers;

        return $this;
    }

    /**
     * Gets metadata_readers
     *
     * @return \OpenAPI\Client\Model\LibraryOptionInfoDto[]|null
     */
    public function getMetadataReaders()
    {
        return $this->container['metadata_readers'];
    }

    /**
     * Sets metadata_readers
     *
     * @param \OpenAPI\Client\Model\LibraryOptionInfoDto[]|null $metadata_readers Gets or sets the metadata readers.
     *
     * @return self
     */
    public function setMetadataReaders($metadata_readers)
    {
        if (is_null($metadata_readers)) {
            throw new \InvalidArgumentException('non-nullable metadata_readers cannot be null');
        }
        $this->container['metadata_readers'] = $metadata_readers;

        return $this;
    }

    /**
     * Gets subtitle_fetchers
     *
     * @return \OpenAPI\Client\Model\LibraryOptionInfoDto[]|null
     */
    public function getSubtitleFetchers()
    {
        return $this->container['subtitle_fetchers'];
    }

    /**
     * Sets subtitle_fetchers
     *
     * @param \OpenAPI\Client\Model\LibraryOptionInfoDto[]|null $subtitle_fetchers Gets or sets the subtitle fetchers.
     *
     * @return self
     */
    public function setSubtitleFetchers($subtitle_fetchers)
    {
        if (is_null($subtitle_fetchers)) {
            throw new \InvalidArgumentException('non-nullable subtitle_fetchers cannot be null');
        }
        $this->container['subtitle_fetchers'] = $subtitle_fetchers;

        return $this;
    }

    /**
     * Gets type_options
     *
     * @return \OpenAPI\Client\Model\LibraryTypeOptionsDto[]|null
     */
    public function getTypeOptions()
    {
        return $this->container['type_options'];
    }

    /**
     * Sets type_options
     *
     * @param \OpenAPI\Client\Model\LibraryTypeOptionsDto[]|null $type_options Gets or sets the type options.
     *
     * @return self
     */
    public function setTypeOptions($type_options)
    {
        if (is_null($type_options)) {
            throw new \InvalidArgumentException('non-nullable type_options cannot be null');
        }
        $this->container['type_options'] = $type_options;

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


