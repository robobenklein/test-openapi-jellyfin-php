<?php
/**
 * DlnaOptions
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
 * DlnaOptions Class Doc Comment
 *
 * @category Class
 * @description The DlnaOptions class contains the user definable parameters for the dlna subsystems.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DlnaOptions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DlnaOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enable_play_to' => 'bool',
        'enable_server' => 'bool',
        'enable_debug_log' => 'bool',
        'enable_play_to_tracing' => 'bool',
        'client_discovery_interval_seconds' => 'int',
        'alive_message_interval_seconds' => 'int',
        'blast_alive_message_interval_seconds' => 'int',
        'default_user_id' => 'string',
        'auto_create_play_to_profiles' => 'bool',
        'blast_alive_messages' => 'bool',
        'send_only_matched_host' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'enable_play_to' => null,
        'enable_server' => null,
        'enable_debug_log' => null,
        'enable_play_to_tracing' => null,
        'client_discovery_interval_seconds' => 'int32',
        'alive_message_interval_seconds' => 'int32',
        'blast_alive_message_interval_seconds' => 'int32',
        'default_user_id' => null,
        'auto_create_play_to_profiles' => null,
        'blast_alive_messages' => null,
        'send_only_matched_host' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'enable_play_to' => false,
		'enable_server' => false,
		'enable_debug_log' => false,
		'enable_play_to_tracing' => false,
		'client_discovery_interval_seconds' => false,
		'alive_message_interval_seconds' => false,
		'blast_alive_message_interval_seconds' => false,
		'default_user_id' => true,
		'auto_create_play_to_profiles' => false,
		'blast_alive_messages' => false,
		'send_only_matched_host' => false
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
        'enable_play_to' => 'EnablePlayTo',
        'enable_server' => 'EnableServer',
        'enable_debug_log' => 'EnableDebugLog',
        'enable_play_to_tracing' => 'EnablePlayToTracing',
        'client_discovery_interval_seconds' => 'ClientDiscoveryIntervalSeconds',
        'alive_message_interval_seconds' => 'AliveMessageIntervalSeconds',
        'blast_alive_message_interval_seconds' => 'BlastAliveMessageIntervalSeconds',
        'default_user_id' => 'DefaultUserId',
        'auto_create_play_to_profiles' => 'AutoCreatePlayToProfiles',
        'blast_alive_messages' => 'BlastAliveMessages',
        'send_only_matched_host' => 'SendOnlyMatchedHost'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enable_play_to' => 'setEnablePlayTo',
        'enable_server' => 'setEnableServer',
        'enable_debug_log' => 'setEnableDebugLog',
        'enable_play_to_tracing' => 'setEnablePlayToTracing',
        'client_discovery_interval_seconds' => 'setClientDiscoveryIntervalSeconds',
        'alive_message_interval_seconds' => 'setAliveMessageIntervalSeconds',
        'blast_alive_message_interval_seconds' => 'setBlastAliveMessageIntervalSeconds',
        'default_user_id' => 'setDefaultUserId',
        'auto_create_play_to_profiles' => 'setAutoCreatePlayToProfiles',
        'blast_alive_messages' => 'setBlastAliveMessages',
        'send_only_matched_host' => 'setSendOnlyMatchedHost'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enable_play_to' => 'getEnablePlayTo',
        'enable_server' => 'getEnableServer',
        'enable_debug_log' => 'getEnableDebugLog',
        'enable_play_to_tracing' => 'getEnablePlayToTracing',
        'client_discovery_interval_seconds' => 'getClientDiscoveryIntervalSeconds',
        'alive_message_interval_seconds' => 'getAliveMessageIntervalSeconds',
        'blast_alive_message_interval_seconds' => 'getBlastAliveMessageIntervalSeconds',
        'default_user_id' => 'getDefaultUserId',
        'auto_create_play_to_profiles' => 'getAutoCreatePlayToProfiles',
        'blast_alive_messages' => 'getBlastAliveMessages',
        'send_only_matched_host' => 'getSendOnlyMatchedHost'
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
        $this->setIfExists('enable_play_to', $data ?? [], null);
        $this->setIfExists('enable_server', $data ?? [], null);
        $this->setIfExists('enable_debug_log', $data ?? [], null);
        $this->setIfExists('enable_play_to_tracing', $data ?? [], null);
        $this->setIfExists('client_discovery_interval_seconds', $data ?? [], null);
        $this->setIfExists('alive_message_interval_seconds', $data ?? [], null);
        $this->setIfExists('blast_alive_message_interval_seconds', $data ?? [], null);
        $this->setIfExists('default_user_id', $data ?? [], null);
        $this->setIfExists('auto_create_play_to_profiles', $data ?? [], null);
        $this->setIfExists('blast_alive_messages', $data ?? [], null);
        $this->setIfExists('send_only_matched_host', $data ?? [], null);
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
     * Gets enable_play_to
     *
     * @return bool|null
     */
    public function getEnablePlayTo()
    {
        return $this->container['enable_play_to'];
    }

    /**
     * Sets enable_play_to
     *
     * @param bool|null $enable_play_to Gets or sets a value indicating whether gets or sets a value to indicate the status of the dlna playTo subsystem.
     *
     * @return self
     */
    public function setEnablePlayTo($enable_play_to)
    {
        if (is_null($enable_play_to)) {
            throw new \InvalidArgumentException('non-nullable enable_play_to cannot be null');
        }
        $this->container['enable_play_to'] = $enable_play_to;

        return $this;
    }

    /**
     * Gets enable_server
     *
     * @return bool|null
     */
    public function getEnableServer()
    {
        return $this->container['enable_server'];
    }

    /**
     * Sets enable_server
     *
     * @param bool|null $enable_server Gets or sets a value indicating whether gets or sets a value to indicate the status of the dlna server subsystem.
     *
     * @return self
     */
    public function setEnableServer($enable_server)
    {
        if (is_null($enable_server)) {
            throw new \InvalidArgumentException('non-nullable enable_server cannot be null');
        }
        $this->container['enable_server'] = $enable_server;

        return $this;
    }

    /**
     * Gets enable_debug_log
     *
     * @return bool|null
     */
    public function getEnableDebugLog()
    {
        return $this->container['enable_debug_log'];
    }

    /**
     * Sets enable_debug_log
     *
     * @param bool|null $enable_debug_log Gets or sets a value indicating whether detailed dlna server logs are sent to the console/log.  If the setting \"Emby.Dlna\": \"Debug\" msut be set in logging.default.json for this property to work.
     *
     * @return self
     */
    public function setEnableDebugLog($enable_debug_log)
    {
        if (is_null($enable_debug_log)) {
            throw new \InvalidArgumentException('non-nullable enable_debug_log cannot be null');
        }
        $this->container['enable_debug_log'] = $enable_debug_log;

        return $this;
    }

    /**
     * Gets enable_play_to_tracing
     *
     * @return bool|null
     */
    public function getEnablePlayToTracing()
    {
        return $this->container['enable_play_to_tracing'];
    }

    /**
     * Sets enable_play_to_tracing
     *
     * @param bool|null $enable_play_to_tracing Gets or sets a value indicating whether whether detailed playTo debug logs are sent to the console/log.  If the setting \"Emby.Dlna.PlayTo\": \"Debug\" msut be set in logging.default.json for this property to work.
     *
     * @return self
     */
    public function setEnablePlayToTracing($enable_play_to_tracing)
    {
        if (is_null($enable_play_to_tracing)) {
            throw new \InvalidArgumentException('non-nullable enable_play_to_tracing cannot be null');
        }
        $this->container['enable_play_to_tracing'] = $enable_play_to_tracing;

        return $this;
    }

    /**
     * Gets client_discovery_interval_seconds
     *
     * @return int|null
     */
    public function getClientDiscoveryIntervalSeconds()
    {
        return $this->container['client_discovery_interval_seconds'];
    }

    /**
     * Sets client_discovery_interval_seconds
     *
     * @param int|null $client_discovery_interval_seconds Gets or sets the ssdp client discovery interval time (in seconds).  This is the time after which the server will send a ssdp search request.
     *
     * @return self
     */
    public function setClientDiscoveryIntervalSeconds($client_discovery_interval_seconds)
    {
        if (is_null($client_discovery_interval_seconds)) {
            throw new \InvalidArgumentException('non-nullable client_discovery_interval_seconds cannot be null');
        }
        $this->container['client_discovery_interval_seconds'] = $client_discovery_interval_seconds;

        return $this;
    }

    /**
     * Gets alive_message_interval_seconds
     *
     * @return int|null
     */
    public function getAliveMessageIntervalSeconds()
    {
        return $this->container['alive_message_interval_seconds'];
    }

    /**
     * Sets alive_message_interval_seconds
     *
     * @param int|null $alive_message_interval_seconds Gets or sets the frequency at which ssdp alive notifications are transmitted.
     *
     * @return self
     */
    public function setAliveMessageIntervalSeconds($alive_message_interval_seconds)
    {
        if (is_null($alive_message_interval_seconds)) {
            throw new \InvalidArgumentException('non-nullable alive_message_interval_seconds cannot be null');
        }
        $this->container['alive_message_interval_seconds'] = $alive_message_interval_seconds;

        return $this;
    }

    /**
     * Gets blast_alive_message_interval_seconds
     *
     * @return int|null
     */
    public function getBlastAliveMessageIntervalSeconds()
    {
        return $this->container['blast_alive_message_interval_seconds'];
    }

    /**
     * Sets blast_alive_message_interval_seconds
     *
     * @param int|null $blast_alive_message_interval_seconds Gets or sets the frequency at which ssdp alive notifications are transmitted. MIGRATING - TO BE REMOVED ONCE WEB HAS BEEN ALTERED.
     *
     * @return self
     */
    public function setBlastAliveMessageIntervalSeconds($blast_alive_message_interval_seconds)
    {
        if (is_null($blast_alive_message_interval_seconds)) {
            throw new \InvalidArgumentException('non-nullable blast_alive_message_interval_seconds cannot be null');
        }
        $this->container['blast_alive_message_interval_seconds'] = $blast_alive_message_interval_seconds;

        return $this;
    }

    /**
     * Gets default_user_id
     *
     * @return string|null
     */
    public function getDefaultUserId()
    {
        return $this->container['default_user_id'];
    }

    /**
     * Sets default_user_id
     *
     * @param string|null $default_user_id Gets or sets the default user account that the dlna server uses.
     *
     * @return self
     */
    public function setDefaultUserId($default_user_id)
    {
        if (is_null($default_user_id)) {
            array_push($this->openAPINullablesSetToNull, 'default_user_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_user_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_user_id'] = $default_user_id;

        return $this;
    }

    /**
     * Gets auto_create_play_to_profiles
     *
     * @return bool|null
     */
    public function getAutoCreatePlayToProfiles()
    {
        return $this->container['auto_create_play_to_profiles'];
    }

    /**
     * Sets auto_create_play_to_profiles
     *
     * @param bool|null $auto_create_play_to_profiles Gets or sets a value indicating whether playTo device profiles should be created.
     *
     * @return self
     */
    public function setAutoCreatePlayToProfiles($auto_create_play_to_profiles)
    {
        if (is_null($auto_create_play_to_profiles)) {
            throw new \InvalidArgumentException('non-nullable auto_create_play_to_profiles cannot be null');
        }
        $this->container['auto_create_play_to_profiles'] = $auto_create_play_to_profiles;

        return $this;
    }

    /**
     * Gets blast_alive_messages
     *
     * @return bool|null
     */
    public function getBlastAliveMessages()
    {
        return $this->container['blast_alive_messages'];
    }

    /**
     * Sets blast_alive_messages
     *
     * @param bool|null $blast_alive_messages Gets or sets a value indicating whether to blast alive messages.
     *
     * @return self
     */
    public function setBlastAliveMessages($blast_alive_messages)
    {
        if (is_null($blast_alive_messages)) {
            throw new \InvalidArgumentException('non-nullable blast_alive_messages cannot be null');
        }
        $this->container['blast_alive_messages'] = $blast_alive_messages;

        return $this;
    }

    /**
     * Gets send_only_matched_host
     *
     * @return bool|null
     */
    public function getSendOnlyMatchedHost()
    {
        return $this->container['send_only_matched_host'];
    }

    /**
     * Sets send_only_matched_host
     *
     * @param bool|null $send_only_matched_host gets or sets a value indicating whether to send only matched host.
     *
     * @return self
     */
    public function setSendOnlyMatchedHost($send_only_matched_host)
    {
        if (is_null($send_only_matched_host)) {
            throw new \InvalidArgumentException('non-nullable send_only_matched_host cannot be null');
        }
        $this->container['send_only_matched_host'] = $send_only_matched_host;

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

