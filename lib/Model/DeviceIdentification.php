<?php
/**
 * DeviceIdentification
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
 * DeviceIdentification Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DeviceIdentification implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeviceIdentification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'friendly_name' => 'string',
        'model_number' => 'string',
        'serial_number' => 'string',
        'model_name' => 'string',
        'model_description' => 'string',
        'model_url' => 'string',
        'manufacturer' => 'string',
        'manufacturer_url' => 'string',
        'headers' => '\OpenAPI\Client\Model\HttpHeaderInfo[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'friendly_name' => null,
        'model_number' => null,
        'serial_number' => null,
        'model_name' => null,
        'model_description' => null,
        'model_url' => null,
        'manufacturer' => null,
        'manufacturer_url' => null,
        'headers' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'friendly_name' => false,
		'model_number' => false,
		'serial_number' => false,
		'model_name' => false,
		'model_description' => false,
		'model_url' => false,
		'manufacturer' => false,
		'manufacturer_url' => false,
		'headers' => false
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
        'friendly_name' => 'FriendlyName',
        'model_number' => 'ModelNumber',
        'serial_number' => 'SerialNumber',
        'model_name' => 'ModelName',
        'model_description' => 'ModelDescription',
        'model_url' => 'ModelUrl',
        'manufacturer' => 'Manufacturer',
        'manufacturer_url' => 'ManufacturerUrl',
        'headers' => 'Headers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'friendly_name' => 'setFriendlyName',
        'model_number' => 'setModelNumber',
        'serial_number' => 'setSerialNumber',
        'model_name' => 'setModelName',
        'model_description' => 'setModelDescription',
        'model_url' => 'setModelUrl',
        'manufacturer' => 'setManufacturer',
        'manufacturer_url' => 'setManufacturerUrl',
        'headers' => 'setHeaders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'friendly_name' => 'getFriendlyName',
        'model_number' => 'getModelNumber',
        'serial_number' => 'getSerialNumber',
        'model_name' => 'getModelName',
        'model_description' => 'getModelDescription',
        'model_url' => 'getModelUrl',
        'manufacturer' => 'getManufacturer',
        'manufacturer_url' => 'getManufacturerUrl',
        'headers' => 'getHeaders'
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
        $this->setIfExists('friendly_name', $data ?? [], null);
        $this->setIfExists('model_number', $data ?? [], null);
        $this->setIfExists('serial_number', $data ?? [], null);
        $this->setIfExists('model_name', $data ?? [], null);
        $this->setIfExists('model_description', $data ?? [], null);
        $this->setIfExists('model_url', $data ?? [], null);
        $this->setIfExists('manufacturer', $data ?? [], null);
        $this->setIfExists('manufacturer_url', $data ?? [], null);
        $this->setIfExists('headers', $data ?? [], null);
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
     * Gets friendly_name
     *
     * @return string|null
     */
    public function getFriendlyName()
    {
        return $this->container['friendly_name'];
    }

    /**
     * Sets friendly_name
     *
     * @param string|null $friendly_name Gets or sets the name of the friendly.
     *
     * @return self
     */
    public function setFriendlyName($friendly_name)
    {
        if (is_null($friendly_name)) {
            throw new \InvalidArgumentException('non-nullable friendly_name cannot be null');
        }
        $this->container['friendly_name'] = $friendly_name;

        return $this;
    }

    /**
     * Gets model_number
     *
     * @return string|null
     */
    public function getModelNumber()
    {
        return $this->container['model_number'];
    }

    /**
     * Sets model_number
     *
     * @param string|null $model_number Gets or sets the model number.
     *
     * @return self
     */
    public function setModelNumber($model_number)
    {
        if (is_null($model_number)) {
            throw new \InvalidArgumentException('non-nullable model_number cannot be null');
        }
        $this->container['model_number'] = $model_number;

        return $this;
    }

    /**
     * Gets serial_number
     *
     * @return string|null
     */
    public function getSerialNumber()
    {
        return $this->container['serial_number'];
    }

    /**
     * Sets serial_number
     *
     * @param string|null $serial_number Gets or sets the serial number.
     *
     * @return self
     */
    public function setSerialNumber($serial_number)
    {
        if (is_null($serial_number)) {
            throw new \InvalidArgumentException('non-nullable serial_number cannot be null');
        }
        $this->container['serial_number'] = $serial_number;

        return $this;
    }

    /**
     * Gets model_name
     *
     * @return string|null
     */
    public function getModelName()
    {
        return $this->container['model_name'];
    }

    /**
     * Sets model_name
     *
     * @param string|null $model_name Gets or sets the name of the model.
     *
     * @return self
     */
    public function setModelName($model_name)
    {
        if (is_null($model_name)) {
            throw new \InvalidArgumentException('non-nullable model_name cannot be null');
        }
        $this->container['model_name'] = $model_name;

        return $this;
    }

    /**
     * Gets model_description
     *
     * @return string|null
     */
    public function getModelDescription()
    {
        return $this->container['model_description'];
    }

    /**
     * Sets model_description
     *
     * @param string|null $model_description Gets or sets the model description.
     *
     * @return self
     */
    public function setModelDescription($model_description)
    {
        if (is_null($model_description)) {
            throw new \InvalidArgumentException('non-nullable model_description cannot be null');
        }
        $this->container['model_description'] = $model_description;

        return $this;
    }

    /**
     * Gets model_url
     *
     * @return string|null
     */
    public function getModelUrl()
    {
        return $this->container['model_url'];
    }

    /**
     * Sets model_url
     *
     * @param string|null $model_url Gets or sets the model URL.
     *
     * @return self
     */
    public function setModelUrl($model_url)
    {
        if (is_null($model_url)) {
            throw new \InvalidArgumentException('non-nullable model_url cannot be null');
        }
        $this->container['model_url'] = $model_url;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return string|null
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string|null $manufacturer Gets or sets the manufacturer.
     *
     * @return self
     */
    public function setManufacturer($manufacturer)
    {
        if (is_null($manufacturer)) {
            throw new \InvalidArgumentException('non-nullable manufacturer cannot be null');
        }
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets manufacturer_url
     *
     * @return string|null
     */
    public function getManufacturerUrl()
    {
        return $this->container['manufacturer_url'];
    }

    /**
     * Sets manufacturer_url
     *
     * @param string|null $manufacturer_url Gets or sets the manufacturer URL.
     *
     * @return self
     */
    public function setManufacturerUrl($manufacturer_url)
    {
        if (is_null($manufacturer_url)) {
            throw new \InvalidArgumentException('non-nullable manufacturer_url cannot be null');
        }
        $this->container['manufacturer_url'] = $manufacturer_url;

        return $this;
    }

    /**
     * Gets headers
     *
     * @return \OpenAPI\Client\Model\HttpHeaderInfo[]|null
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param \OpenAPI\Client\Model\HttpHeaderInfo[]|null $headers Gets or sets the headers.
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        if (is_null($headers)) {
            throw new \InvalidArgumentException('non-nullable headers cannot be null');
        }
        $this->container['headers'] = $headers;

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


