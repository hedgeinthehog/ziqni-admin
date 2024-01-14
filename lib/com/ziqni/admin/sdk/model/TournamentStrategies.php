<?php
/**
 * TournamentStrategies
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
 * TournamentStrategies Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TournamentStrategies implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TournamentStrategies';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'strategy_type' => '\OpenAPI\Client\com.ziqni.admin.sdk.model\StrategyType',
        'ranking_strategy' => '\OpenAPI\Client\com.ziqni.admin.sdk.model\RankingStrategy',
        'scoring_strategy' => '\OpenAPI\Client\com.ziqni.admin.sdk.model\ScoringStrategy'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'strategy_type' => null,
        'ranking_strategy' => null,
        'scoring_strategy' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'strategy_type' => false,
		'ranking_strategy' => false,
		'scoring_strategy' => false
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
        'strategy_type' => 'strategyType',
        'ranking_strategy' => 'rankingStrategy',
        'scoring_strategy' => 'scoringStrategy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'strategy_type' => 'setStrategyType',
        'ranking_strategy' => 'setRankingStrategy',
        'scoring_strategy' => 'setScoringStrategy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'strategy_type' => 'getStrategyType',
        'ranking_strategy' => 'getRankingStrategy',
        'scoring_strategy' => 'getScoringStrategy'
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
        $this->setIfExists('strategy_type', $data ?? [], null);
        $this->setIfExists('ranking_strategy', $data ?? [], null);
        $this->setIfExists('scoring_strategy', $data ?? [], null);
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

        if ($this->container['strategy_type'] === null) {
            $invalidProperties[] = "'strategy_type' can't be null";
        }
        if ($this->container['ranking_strategy'] === null) {
            $invalidProperties[] = "'ranking_strategy' can't be null";
        }
        if ($this->container['scoring_strategy'] === null) {
            $invalidProperties[] = "'scoring_strategy' can't be null";
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
     * Gets strategy_type
     *
     * @return \OpenAPI\Client\com.ziqni.admin.sdk.model\StrategyType
     */
    public function getStrategyType()
    {
        return $this->container['strategy_type'];
    }

    /**
     * Sets strategy_type
     *
     * @param \OpenAPI\Client\com.ziqni.admin.sdk.model\StrategyType $strategy_type strategy_type
     *
     * @return self
     */
    public function setStrategyType($strategy_type)
    {
        if (is_null($strategy_type)) {
            throw new \InvalidArgumentException('non-nullable strategy_type cannot be null');
        }
        $this->container['strategy_type'] = $strategy_type;

        return $this;
    }

    /**
     * Gets ranking_strategy
     *
     * @return \OpenAPI\Client\com.ziqni.admin.sdk.model\RankingStrategy
     */
    public function getRankingStrategy()
    {
        return $this->container['ranking_strategy'];
    }

    /**
     * Sets ranking_strategy
     *
     * @param \OpenAPI\Client\com.ziqni.admin.sdk.model\RankingStrategy $ranking_strategy ranking_strategy
     *
     * @return self
     */
    public function setRankingStrategy($ranking_strategy)
    {
        if (is_null($ranking_strategy)) {
            throw new \InvalidArgumentException('non-nullable ranking_strategy cannot be null');
        }
        $this->container['ranking_strategy'] = $ranking_strategy;

        return $this;
    }

    /**
     * Gets scoring_strategy
     *
     * @return \OpenAPI\Client\com.ziqni.admin.sdk.model\ScoringStrategy
     */
    public function getScoringStrategy()
    {
        return $this->container['scoring_strategy'];
    }

    /**
     * Sets scoring_strategy
     *
     * @param \OpenAPI\Client\com.ziqni.admin.sdk.model\ScoringStrategy $scoring_strategy scoring_strategy
     *
     * @return self
     */
    public function setScoringStrategy($scoring_strategy)
    {
        if (is_null($scoring_strategy)) {
            throw new \InvalidArgumentException('non-nullable scoring_strategy cannot be null');
        }
        $this->container['scoring_strategy'] = $scoring_strategy;

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


