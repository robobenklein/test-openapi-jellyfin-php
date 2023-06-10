<?php
/**
 * UpdateUserRequest
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
 * UpdateUserRequest Class Doc Comment
 *
 * @category Class
 * @description Class UserDto.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateUserRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateUser_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'server_id' => 'string',
        'server_name' => 'string',
        'id' => 'string',
        'primary_image_tag' => 'string',
        'has_password' => 'bool',
        'has_configured_password' => 'bool',
        'has_configured_easy_password' => 'bool',
        'enable_auto_login' => 'bool',
        'last_login_date' => '\DateTime',
        'last_activity_date' => '\DateTime',
        'configuration' => '\OpenAPI\Client\Model\UserDtoConfiguration',
        'policy' => '\OpenAPI\Client\Model\UserDtoPolicy',
        'primary_image_aspect_ratio' => 'float'
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
        'server_id' => null,
        'server_name' => null,
        'id' => 'uuid',
        'primary_image_tag' => null,
        'has_password' => null,
        'has_configured_password' => null,
        'has_configured_easy_password' => null,
        'enable_auto_login' => null,
        'last_login_date' => 'date-time',
        'last_activity_date' => 'date-time',
        'configuration' => null,
        'policy' => null,
        'primary_image_aspect_ratio' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => true,
		'server_id' => true,
		'server_name' => true,
		'id' => false,
		'primary_image_tag' => true,
		'has_password' => false,
		'has_configured_password' => false,
		'has_configured_easy_password' => false,
		'enable_auto_login' => true,
		'last_login_date' => true,
		'last_activity_date' => true,
		'configuration' => true,
		'policy' => true,
		'primary_image_aspect_ratio' => true
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
        'server_id' => 'ServerId',
        'server_name' => 'ServerName',
        'id' => 'Id',
        'primary_image_tag' => 'PrimaryImageTag',
        'has_password' => 'HasPassword',
        'has_configured_password' => 'HasConfiguredPassword',
        'has_configured_easy_password' => 'HasConfiguredEasyPassword',
        'enable_auto_login' => 'EnableAutoLogin',
        'last_login_date' => 'LastLoginDate',
        'last_activity_date' => 'LastActivityDate',
        'configuration' => 'Configuration',
        'policy' => 'Policy',
        'primary_image_aspect_ratio' => 'PrimaryImageAspectRatio'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'server_id' => 'setServerId',
        'server_name' => 'setServerName',
        'id' => 'setId',
        'primary_image_tag' => 'setPrimaryImageTag',
        'has_password' => 'setHasPassword',
        'has_configured_password' => 'setHasConfiguredPassword',
        'has_configured_easy_password' => 'setHasConfiguredEasyPassword',
        'enable_auto_login' => 'setEnableAutoLogin',
        'last_login_date' => 'setLastLoginDate',
        'last_activity_date' => 'setLastActivityDate',
        'configuration' => 'setConfiguration',
        'policy' => 'setPolicy',
        'primary_image_aspect_ratio' => 'setPrimaryImageAspectRatio'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'server_id' => 'getServerId',
        'server_name' => 'getServerName',
        'id' => 'getId',
        'primary_image_tag' => 'getPrimaryImageTag',
        'has_password' => 'getHasPassword',
        'has_configured_password' => 'getHasConfiguredPassword',
        'has_configured_easy_password' => 'getHasConfiguredEasyPassword',
        'enable_auto_login' => 'getEnableAutoLogin',
        'last_login_date' => 'getLastLoginDate',
        'last_activity_date' => 'getLastActivityDate',
        'configuration' => 'getConfiguration',
        'policy' => 'getPolicy',
        'primary_image_aspect_ratio' => 'getPrimaryImageAspectRatio'
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
        $this->setIfExists('server_id', $data ?? [], null);
        $this->setIfExists('server_name', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('primary_image_tag', $data ?? [], null);
        $this->setIfExists('has_password', $data ?? [], null);
        $this->setIfExists('has_configured_password', $data ?? [], null);
        $this->setIfExists('has_configured_easy_password', $data ?? [], null);
        $this->setIfExists('enable_auto_login', $data ?? [], null);
        $this->setIfExists('last_login_date', $data ?? [], null);
        $this->setIfExists('last_activity_date', $data ?? [], null);
        $this->setIfExists('configuration', $data ?? [], null);
        $this->setIfExists('policy', $data ?? [], null);
        $this->setIfExists('primary_image_aspect_ratio', $data ?? [], null);
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
     * Gets server_id
     *
     * @return string|null
     */
    public function getServerId()
    {
        return $this->container['server_id'];
    }

    /**
     * Sets server_id
     *
     * @param string|null $server_id Gets or sets the server identifier.
     *
     * @return self
     */
    public function setServerId($server_id)
    {
        if (is_null($server_id)) {
            array_push($this->openAPINullablesSetToNull, 'server_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('server_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['server_id'] = $server_id;

        return $this;
    }

    /**
     * Gets server_name
     *
     * @return string|null
     */
    public function getServerName()
    {
        return $this->container['server_name'];
    }

    /**
     * Sets server_name
     *
     * @param string|null $server_name Gets or sets the name of the server.  This is not used by the server and is for client-side usage only.
     *
     * @return self
     */
    public function setServerName($server_name)
    {
        if (is_null($server_name)) {
            array_push($this->openAPINullablesSetToNull, 'server_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('server_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['server_name'] = $server_name;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Gets or sets the id.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets primary_image_tag
     *
     * @return string|null
     */
    public function getPrimaryImageTag()
    {
        return $this->container['primary_image_tag'];
    }

    /**
     * Sets primary_image_tag
     *
     * @param string|null $primary_image_tag Gets or sets the primary image tag.
     *
     * @return self
     */
    public function setPrimaryImageTag($primary_image_tag)
    {
        if (is_null($primary_image_tag)) {
            array_push($this->openAPINullablesSetToNull, 'primary_image_tag');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('primary_image_tag', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['primary_image_tag'] = $primary_image_tag;

        return $this;
    }

    /**
     * Gets has_password
     *
     * @return bool|null
     */
    public function getHasPassword()
    {
        return $this->container['has_password'];
    }

    /**
     * Sets has_password
     *
     * @param bool|null $has_password Gets or sets a value indicating whether this instance has password.
     *
     * @return self
     */
    public function setHasPassword($has_password)
    {
        if (is_null($has_password)) {
            throw new \InvalidArgumentException('non-nullable has_password cannot be null');
        }
        $this->container['has_password'] = $has_password;

        return $this;
    }

    /**
     * Gets has_configured_password
     *
     * @return bool|null
     */
    public function getHasConfiguredPassword()
    {
        return $this->container['has_configured_password'];
    }

    /**
     * Sets has_configured_password
     *
     * @param bool|null $has_configured_password Gets or sets a value indicating whether this instance has configured password.
     *
     * @return self
     */
    public function setHasConfiguredPassword($has_configured_password)
    {
        if (is_null($has_configured_password)) {
            throw new \InvalidArgumentException('non-nullable has_configured_password cannot be null');
        }
        $this->container['has_configured_password'] = $has_configured_password;

        return $this;
    }

    /**
     * Gets has_configured_easy_password
     *
     * @return bool|null
     */
    public function getHasConfiguredEasyPassword()
    {
        return $this->container['has_configured_easy_password'];
    }

    /**
     * Sets has_configured_easy_password
     *
     * @param bool|null $has_configured_easy_password Gets or sets a value indicating whether this instance has configured easy password.
     *
     * @return self
     */
    public function setHasConfiguredEasyPassword($has_configured_easy_password)
    {
        if (is_null($has_configured_easy_password)) {
            throw new \InvalidArgumentException('non-nullable has_configured_easy_password cannot be null');
        }
        $this->container['has_configured_easy_password'] = $has_configured_easy_password;

        return $this;
    }

    /**
     * Gets enable_auto_login
     *
     * @return bool|null
     */
    public function getEnableAutoLogin()
    {
        return $this->container['enable_auto_login'];
    }

    /**
     * Sets enable_auto_login
     *
     * @param bool|null $enable_auto_login Gets or sets whether async login is enabled or not.
     *
     * @return self
     */
    public function setEnableAutoLogin($enable_auto_login)
    {
        if (is_null($enable_auto_login)) {
            array_push($this->openAPINullablesSetToNull, 'enable_auto_login');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enable_auto_login', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['enable_auto_login'] = $enable_auto_login;

        return $this;
    }

    /**
     * Gets last_login_date
     *
     * @return \DateTime|null
     */
    public function getLastLoginDate()
    {
        return $this->container['last_login_date'];
    }

    /**
     * Sets last_login_date
     *
     * @param \DateTime|null $last_login_date Gets or sets the last login date.
     *
     * @return self
     */
    public function setLastLoginDate($last_login_date)
    {
        if (is_null($last_login_date)) {
            array_push($this->openAPINullablesSetToNull, 'last_login_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_login_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_login_date'] = $last_login_date;

        return $this;
    }

    /**
     * Gets last_activity_date
     *
     * @return \DateTime|null
     */
    public function getLastActivityDate()
    {
        return $this->container['last_activity_date'];
    }

    /**
     * Sets last_activity_date
     *
     * @param \DateTime|null $last_activity_date Gets or sets the last activity date.
     *
     * @return self
     */
    public function setLastActivityDate($last_activity_date)
    {
        if (is_null($last_activity_date)) {
            array_push($this->openAPINullablesSetToNull, 'last_activity_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_activity_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_activity_date'] = $last_activity_date;

        return $this;
    }

    /**
     * Gets configuration
     *
     * @return \OpenAPI\Client\Model\UserDtoConfiguration|null
     */
    public function getConfiguration()
    {
        return $this->container['configuration'];
    }

    /**
     * Sets configuration
     *
     * @param \OpenAPI\Client\Model\UserDtoConfiguration|null $configuration configuration
     *
     * @return self
     */
    public function setConfiguration($configuration)
    {
        if (is_null($configuration)) {
            array_push($this->openAPINullablesSetToNull, 'configuration');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('configuration', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['configuration'] = $configuration;

        return $this;
    }

    /**
     * Gets policy
     *
     * @return \OpenAPI\Client\Model\UserDtoPolicy|null
     */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
     * Sets policy
     *
     * @param \OpenAPI\Client\Model\UserDtoPolicy|null $policy policy
     *
     * @return self
     */
    public function setPolicy($policy)
    {
        if (is_null($policy)) {
            array_push($this->openAPINullablesSetToNull, 'policy');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('policy', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['policy'] = $policy;

        return $this;
    }

    /**
     * Gets primary_image_aspect_ratio
     *
     * @return float|null
     */
    public function getPrimaryImageAspectRatio()
    {
        return $this->container['primary_image_aspect_ratio'];
    }

    /**
     * Sets primary_image_aspect_ratio
     *
     * @param float|null $primary_image_aspect_ratio Gets or sets the primary image aspect ratio.
     *
     * @return self
     */
    public function setPrimaryImageAspectRatio($primary_image_aspect_ratio)
    {
        if (is_null($primary_image_aspect_ratio)) {
            array_push($this->openAPINullablesSetToNull, 'primary_image_aspect_ratio');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('primary_image_aspect_ratio', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['primary_image_aspect_ratio'] = $primary_image_aspect_ratio;

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


