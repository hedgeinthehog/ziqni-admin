<?php
/**
 * RewardReduced
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

namespace OpenAPI\Client\com\ziqni\admin\sdk\model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * RewardReduced Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RewardReduced implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RewardReduced';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'space_name' => 'string',
        'created' => '\DateTime',
        'reward_rank' => 'string',
        'name' => 'string',
        'reward_value' => 'float',
        'reward_type' => 'string',
        'reward_type_id' => 'string'
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
        'reward_rank' => null,
        'name' => null,
        'reward_value' => 'double',
        'reward_type' => null,
        'reward_type_id' => null
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
		'reward_rank' => false,
		'name' => false,
		'reward_value' => false,
		'reward_type' => false,
		'reward_type_id' => false
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
        'reward_rank' => 'rewardRank',
        'name' => 'name',
        'reward_value' => 'rewardValue',
        'reward_type' => 'rewardType',
        'reward_type_id' => 'rewardTypeId'
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
        'reward_rank' => 'setRewardRank',
        'name' => 'setName',
        'reward_value' => 'setRewardValue',
        'reward_type' => 'setRewardType',
        'reward_type_id' => 'setRewardTypeId'
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
        'reward_rank' => 'getRewardRank',
        'name' => 'getName',
        'reward_value' => 'getRewardValue',
        'reward_type' => 'getRewardType',
        'reward_type_id' => 'getRewardTypeId'
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
        $this->setIfExists('reward_rank', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('reward_value', $data ?? [], null);
        $this->setIfExists('reward_type', $data ?? [], null);
        $this->setIfExists('reward_type_id', $data ?? [], null);
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
        if ($this->container['reward_rank'] === null) {
            $invalidProperties[] = "'reward_rank' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['reward_value'] === null) {
            $invalidProperties[] = "'reward_value' can't be null";
        }
        if ($this->container['reward_type'] === null) {
            $invalidProperties[] = "'reward_type' can't be null";
        }
        if ($this->container['reward_type_id'] === null) {
            $invalidProperties[] = "'reward_type_id' can't be null";
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
     * Gets reward_rank
     *
     * @return string
     */
    public function getRewardRank()
    {
        return $this->container['reward_rank'];
    }

    /**
     * Sets reward_rank
     *
     * @param string $reward_rank If used in the context of contest this will associate with the rank of the leaderboard
     *
     * @return self
     */
    public function setRewardRank($reward_rank)
    {
        if (is_null($reward_rank)) {
            throw new \InvalidArgumentException('non-nullable reward_rank cannot be null');
        }
        $this->container['reward_rank'] = $reward_rank;

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
     * @param string $name The name of a reward
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
     * Gets reward_value
     *
     * @return float
     */
    public function getRewardValue()
    {
        return $this->container['reward_value'];
    }

    /**
     * Sets reward_value
     *
     * @param float $reward_value Numerical value of the reward that will be issued based on the reward type
     *
     * @return self
     */
    public function setRewardValue($reward_value)
    {
        if (is_null($reward_value)) {
            throw new \InvalidArgumentException('non-nullable reward_value cannot be null');
        }
        $this->container['reward_value'] = $reward_value;

        return $this;
    }

    /**
     * Gets reward_type
     *
     * @return string
     */
    public function getRewardType()
    {
        return $this->container['reward_type'];
    }

    /**
     * Sets reward_type
     *
     * @param string $reward_type Reward Type key
     *
     * @return self
     */
    public function setRewardType($reward_type)
    {
        if (is_null($reward_type)) {
            throw new \InvalidArgumentException('non-nullable reward_type cannot be null');
        }
        $this->container['reward_type'] = $reward_type;

        return $this;
    }

    /**
     * Gets reward_type_id
     *
     * @return string
     */
    public function getRewardTypeId()
    {
        return $this->container['reward_type_id'];
    }

    /**
     * Sets reward_type_id
     *
     * @param string $reward_type_id A unique id of the Reward Type
     *
     * @return self
     */
    public function setRewardTypeId($reward_type_id)
    {
        if (is_null($reward_type_id)) {
            throw new \InvalidArgumentException('non-nullable reward_type_id cannot be null');
        }
        $this->container['reward_type_id'] = $reward_type_id;

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


