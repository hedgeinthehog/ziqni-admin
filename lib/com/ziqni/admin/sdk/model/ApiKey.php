<?php
/**
 * ApiKey
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ZIQNI Admin API
 *
 * Ziqni Application Services are used to manage and configure spaces.
 *
 * The version of the OpenAPI document: 3.0.11
 * Contact: support@ziqni.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\com.ziqni.admin.sdk.model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ApiKey Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApiKey implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApiKey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'space_name' => 'string',
        'created' => '\DateTime',
        'custom_fields' => 'array<string,mixed>',
        'tags' => 'string[]',
        'metadata' => 'array<string,string>',
        'description' => 'string',
        'white_list_ips' => 'string[]',
        'key' => 'string',
        'role' => '\OpenAPI\Client\com.ziqni.admin.sdk.model\Role',
        'constraints' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'space_name' => null,
        'created' => 'date-time',
        'custom_fields' => null,
        'tags' => null,
        'metadata' => null,
        'description' => null,
        'white_list_ips' => null,
        'key' => null,
        'role' => null,
        'constraints' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'space_name' => false,
		'created' => false,
		'custom_fields' => false,
		'tags' => false,
		'metadata' => false,
		'description' => false,
		'white_list_ips' => false,
		'key' => false,
		'role' => false,
		'constraints' => false
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
        'id' => 'id',
        'space_name' => 'spaceName',
        'created' => 'created',
        'custom_fields' => 'customFields',
        'tags' => 'tags',
        'metadata' => 'metadata',
        'description' => 'description',
        'white_list_ips' => 'whiteListIPs',
        'key' => 'key',
        'role' => 'role',
        'constraints' => 'constraints'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'space_name' => 'setSpaceName',
        'created' => 'setCreated',
        'custom_fields' => 'setCustomFields',
        'tags' => 'setTags',
        'metadata' => 'setMetadata',
        'description' => 'setDescription',
        'white_list_ips' => 'setWhiteListIps',
        'key' => 'setKey',
        'role' => 'setRole',
        'constraints' => 'setConstraints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'space_name' => 'getSpaceName',
        'created' => 'getCreated',
        'custom_fields' => 'getCustomFields',
        'tags' => 'getTags',
        'metadata' => 'getMetadata',
        'description' => 'getDescription',
        'white_list_ips' => 'getWhiteListIps',
        'key' => 'getKey',
        'role' => 'getRole',
        'constraints' => 'getConstraints'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('space_name', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('custom_fields', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('white_list_ips', $data ?? [], null);
        $this->setIfExists('key', $data ?? [], null);
        $this->setIfExists('role', $data ?? [], null);
        $this->setIfExists('constraints', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['space_name'] === null) {
            $invalidProperties[] = "'space_name' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
        if ($this->container['constraints'] === null) {
            $invalidProperties[] = "'constraints' can't be null";
        }
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id A unique system generated identifier
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
     * Gets space_name
     *
     * @return string
     */
    public function getSpaceName()
    {
        return $this->container['space_name'];
    }

    /**
     * Sets space_name
     *
     * @param string $space_name This is the space name which is linked to the account
     *
     * @return self
     */
    public function setSpaceName($space_name)
    {
        if (is_null($space_name)) {
            throw new \InvalidArgumentException('non-nullable space_name cannot be null');
        }
        $this->container['space_name'] = $space_name;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created ISO8601 timestamp for when a Model was created. All records are stored in UTC time zone
     *
     * @return self
     */
    public function setCreated($created)
    {
        if (is_null($created)) {
            throw new \InvalidArgumentException('non-nullable created cannot be null');
        }
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return array<string,mixed>|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param array<string,mixed>|null $custom_fields custom_fields
     *
     * @return self
     */
    public function setCustomFields($custom_fields)
    {
        if (is_null($custom_fields)) {
            throw new \InvalidArgumentException('non-nullable custom_fields cannot be null');
        }
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags A list of id's used to tag models
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,string>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,string>|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The description of an Api key
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets white_list_ips
     *
     * @return string[]|null
     */
    public function getWhiteListIps()
    {
        return $this->container['white_list_ips'];
    }

    /**
     * Sets white_list_ips
     *
     * @param string[]|null $white_list_ips the IP's that need to be whitelisted with the Api key
     *
     * @return self
     */
    public function setWhiteListIps($white_list_ips)
    {
        if (is_null($white_list_ips)) {
            throw new \InvalidArgumentException('non-nullable white_list_ips cannot be null');
        }
        $this->container['white_list_ips'] = $white_list_ips;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key An Api key hash
     *
     * @return self
     */
    public function setKey($key)
    {
        if (is_null($key)) {
            throw new \InvalidArgumentException('non-nullable key cannot be null');
        }
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets role
     *
     * @return \OpenAPI\Client\com.ziqni.admin.sdk.model\Role
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param \OpenAPI\Client\com.ziqni.admin.sdk.model\Role $role role
     *
     * @return self
     */
    public function setRole($role)
    {
        if (is_null($role)) {
            throw new \InvalidArgumentException('non-nullable role cannot be null');
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets constraints
     *
     * @return string[]
     */
    public function getConstraints()
    {
        return $this->container['constraints'];
    }

    /**
     * Sets constraints
     *
     * @param string[] $constraints Additional constraints
     *
     * @return self
     */
    public function setConstraints($constraints)
    {
        if (is_null($constraints)) {
            throw new \InvalidArgumentException('non-nullable constraints cannot be null');
        }
        $this->container['constraints'] = $constraints;

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


