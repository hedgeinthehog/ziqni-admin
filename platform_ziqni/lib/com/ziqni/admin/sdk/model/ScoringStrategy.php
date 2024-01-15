<?php
/**
 * ScoringStrategy
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
 * ScoringStrategy Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ScoringStrategy implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScoringStrategy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'limit_updates_to' => 'int',
        'sum_best_xof' => 'int',
        'last_update_time_stamp' => 'int',
        'record_time_when_sum_reaches' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'limit_updates_to' => 'int32',
        'sum_best_xof' => 'int32',
        'last_update_time_stamp' => 'int64',
        'record_time_when_sum_reaches' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'limit_updates_to' => false,
		'sum_best_xof' => false,
		'last_update_time_stamp' => false,
		'record_time_when_sum_reaches' => false
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
        'limit_updates_to' => 'limitUpdatesTo',
        'sum_best_xof' => 'sumBestXOf',
        'last_update_time_stamp' => 'lastUpdateTimeStamp',
        'record_time_when_sum_reaches' => 'recordTimeWhenSumReaches'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'limit_updates_to' => 'setLimitUpdatesTo',
        'sum_best_xof' => 'setSumBestXof',
        'last_update_time_stamp' => 'setLastUpdateTimeStamp',
        'record_time_when_sum_reaches' => 'setRecordTimeWhenSumReaches'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'limit_updates_to' => 'getLimitUpdatesTo',
        'sum_best_xof' => 'getSumBestXof',
        'last_update_time_stamp' => 'getLastUpdateTimeStamp',
        'record_time_when_sum_reaches' => 'getRecordTimeWhenSumReaches'
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
        $this->setIfExists('limit_updates_to', $data ?? [], null);
        $this->setIfExists('sum_best_xof', $data ?? [], null);
        $this->setIfExists('last_update_time_stamp', $data ?? [], null);
        $this->setIfExists('record_time_when_sum_reaches', $data ?? [], null);
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

        if ($this->container['limit_updates_to'] === null) {
            $invalidProperties[] = "'limit_updates_to' can't be null";
        }
        if ($this->container['sum_best_xof'] === null) {
            $invalidProperties[] = "'sum_best_xof' can't be null";
        }
        if ($this->container['last_update_time_stamp'] === null) {
            $invalidProperties[] = "'last_update_time_stamp' can't be null";
        }
        if ($this->container['record_time_when_sum_reaches'] === null) {
            $invalidProperties[] = "'record_time_when_sum_reaches' can't be null";
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
     * Gets limit_updates_to
     *
     * @return int
     */
    public function getLimitUpdatesTo()
    {
        return $this->container['limit_updates_to'];
    }

    /**
     * Sets limit_updates_to
     *
     * @param int $limit_updates_to The scoring strategies types \"SumBest\" value
     *
     * @return self
     */
    public function setLimitUpdatesTo($limit_updates_to)
    {
        if (is_null($limit_updates_to)) {
            throw new \InvalidArgumentException('non-nullable limit_updates_to cannot be null');
        }
        $this->container['limit_updates_to'] = $limit_updates_to;

        return $this;
    }

    /**
     * Gets sum_best_xof
     *
     * @return int
     */
    public function getSumBestXof()
    {
        return $this->container['sum_best_xof'];
    }

    /**
     * Sets sum_best_xof
     *
     * @param int $sum_best_xof The scoring strategies types \"LimitedTo\" value
     *
     * @return self
     */
    public function setSumBestXof($sum_best_xof)
    {
        if (is_null($sum_best_xof)) {
            throw new \InvalidArgumentException('non-nullable sum_best_xof cannot be null');
        }
        $this->container['sum_best_xof'] = $sum_best_xof;

        return $this;
    }

    /**
     * Gets last_update_time_stamp
     *
     * @return int
     */
    public function getLastUpdateTimeStamp()
    {
        return $this->container['last_update_time_stamp'];
    }

    /**
     * Sets last_update_time_stamp
     *
     * @param int $last_update_time_stamp The scoring strategies types \"FirstTo\" value
     *
     * @return self
     */
    public function setLastUpdateTimeStamp($last_update_time_stamp)
    {
        if (is_null($last_update_time_stamp)) {
            throw new \InvalidArgumentException('non-nullable last_update_time_stamp cannot be null');
        }
        $this->container['last_update_time_stamp'] = $last_update_time_stamp;

        return $this;
    }

    /**
     * Gets record_time_when_sum_reaches
     *
     * @return float
     */
    public function getRecordTimeWhenSumReaches()
    {
        return $this->container['record_time_when_sum_reaches'];
    }

    /**
     * Sets record_time_when_sum_reaches
     *
     * @param float $record_time_when_sum_reaches The time a member gets to the target points value
     *
     * @return self
     */
    public function setRecordTimeWhenSumReaches($record_time_when_sum_reaches)
    {
        if (is_null($record_time_when_sum_reaches)) {
            throw new \InvalidArgumentException('non-nullable record_time_when_sum_reaches cannot be null');
        }
        $this->container['record_time_when_sum_reaches'] = $record_time_when_sum_reaches;

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

