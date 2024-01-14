<?php
/**
 * CreateMemberRequest
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
 * CreateMemberRequest Class Doc Comment
 *
 * @category Class
 * @description This is a request for Member creation
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateMemberRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateMemberRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'custom_fields' => 'array<string,mixed>',
        'tags' => 'string[]',
        'metadata' => 'array<string,string>',
        'name' => 'string',
        'member_ref_id' => 'string',
        'member_type' => '\OpenAPI\Client\com.ziqni.admin.sdk.model\MemberType',
        'icon' => 'string',
        'team_members' => 'string[]',
        'add_constraints' => 'string[]',
        'time_zone_offset' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'custom_fields' => null,
        'tags' => null,
        'metadata' => null,
        'name' => null,
        'member_ref_id' => null,
        'member_type' => null,
        'icon' => null,
        'team_members' => null,
        'add_constraints' => null,
        'time_zone_offset' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'custom_fields' => false,
		'tags' => false,
		'metadata' => false,
		'name' => false,
		'member_ref_id' => false,
		'member_type' => false,
		'icon' => false,
		'team_members' => false,
		'add_constraints' => false,
		'time_zone_offset' => false
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
        'custom_fields' => 'customFields',
        'tags' => 'tags',
        'metadata' => 'metadata',
        'name' => 'name',
        'member_ref_id' => 'memberRefId',
        'member_type' => 'memberType',
        'icon' => 'icon',
        'team_members' => 'teamMembers',
        'add_constraints' => 'addConstraints',
        'time_zone_offset' => 'timeZoneOffset'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'custom_fields' => 'setCustomFields',
        'tags' => 'setTags',
        'metadata' => 'setMetadata',
        'name' => 'setName',
        'member_ref_id' => 'setMemberRefId',
        'member_type' => 'setMemberType',
        'icon' => 'setIcon',
        'team_members' => 'setTeamMembers',
        'add_constraints' => 'setAddConstraints',
        'time_zone_offset' => 'setTimeZoneOffset'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'custom_fields' => 'getCustomFields',
        'tags' => 'getTags',
        'metadata' => 'getMetadata',
        'name' => 'getName',
        'member_ref_id' => 'getMemberRefId',
        'member_type' => 'getMemberType',
        'icon' => 'getIcon',
        'team_members' => 'getTeamMembers',
        'add_constraints' => 'getAddConstraints',
        'time_zone_offset' => 'getTimeZoneOffset'
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
        $this->setIfExists('custom_fields', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('member_ref_id', $data ?? [], null);
        $this->setIfExists('member_type', $data ?? [], null);
        $this->setIfExists('icon', $data ?? [], null);
        $this->setIfExists('team_members', $data ?? [], null);
        $this->setIfExists('add_constraints', $data ?? [], null);
        $this->setIfExists('time_zone_offset', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['member_ref_id'] === null) {
            $invalidProperties[] = "'member_ref_id' can't be null";
        }
        if ($this->container['member_type'] === null) {
            $invalidProperties[] = "'member_type' can't be null";
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
     * @param array<string,mixed>|null $custom_fields A list of custom field entries
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the member that is used on leader boards and public displays
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets member_ref_id
     *
     * @return string
     */
    public function getMemberRefId()
    {
        return $this->container['member_ref_id'];
    }

    /**
     * Sets member_ref_id
     *
     * @param string $member_ref_id The reference to this member in your system
     *
     * @return self
     */
    public function setMemberRefId($member_ref_id)
    {
        if (is_null($member_ref_id)) {
            throw new \InvalidArgumentException('non-nullable member_ref_id cannot be null');
        }
        $this->container['member_ref_id'] = $member_ref_id;

        return $this;
    }

    /**
     * Gets member_type
     *
     * @return \OpenAPI\Client\com.ziqni.admin.sdk.model\MemberType
     */
    public function getMemberType()
    {
        return $this->container['member_type'];
    }

    /**
     * Sets member_type
     *
     * @param \OpenAPI\Client\com.ziqni.admin.sdk.model\MemberType $member_type member_type
     *
     * @return self
     */
    public function setMemberType($member_type)
    {
        if (is_null($member_type)) {
            throw new \InvalidArgumentException('non-nullable member_type cannot be null');
        }
        $this->container['member_type'] = $member_type;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string|null
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string|null $icon An Icon id that has been pre uploaded to the system to display for Member
     *
     * @return self
     */
    public function setIcon($icon)
    {
        if (is_null($icon)) {
            throw new \InvalidArgumentException('non-nullable icon cannot be null');
        }
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets team_members
     *
     * @return string[]|null
     */
    public function getTeamMembers()
    {
        return $this->container['team_members'];
    }

    /**
     * Sets team_members
     *
     * @param string[]|null $team_members A social group like Guilds
     *
     * @return self
     */
    public function setTeamMembers($team_members)
    {
        if (is_null($team_members)) {
            throw new \InvalidArgumentException('non-nullable team_members cannot be null');
        }
        $this->container['team_members'] = $team_members;

        return $this;
    }

    /**
     * Gets add_constraints
     *
     * @return string[]|null
     */
    public function getAddConstraints()
    {
        return $this->container['add_constraints'];
    }

    /**
     * Sets add_constraints
     *
     * @param string[]|null $add_constraints Additional constraints
     *
     * @return self
     */
    public function setAddConstraints($add_constraints)
    {
        if (is_null($add_constraints)) {
            throw new \InvalidArgumentException('non-nullable add_constraints cannot be null');
        }
        $this->container['add_constraints'] = $add_constraints;

        return $this;
    }

    /**
     * Gets time_zone_offset
     *
     * @return string|null
     */
    public function getTimeZoneOffset()
    {
        return $this->container['time_zone_offset'];
    }

    /**
     * Sets time_zone_offset
     *
     * @param string|null $time_zone_offset To what time zone teh emmber belongs to
     *
     * @return self
     */
    public function setTimeZoneOffset($time_zone_offset)
    {
        if (is_null($time_zone_offset)) {
            throw new \InvalidArgumentException('non-nullable time_zone_offset cannot be null');
        }
        $this->container['time_zone_offset'] = $time_zone_offset;

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


