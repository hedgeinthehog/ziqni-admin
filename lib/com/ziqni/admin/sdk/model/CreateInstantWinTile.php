<?php
/**
 * CreateInstantWinTile
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
 * CreateInstantWinTile Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateInstantWinTile implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateInstantWinTile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'icon' => 'string',
        'text' => 'string',
        'contraints' => 'string[]',
        'reward' => '\OpenAPI\Client\com.ziqni.admin.sdk.model\CreateRewardRequest',
        'location' => '\OpenAPI\Client\com.ziqni.admin.sdk.model\GridLocation',
        'probability' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'icon' => null,
        'text' => null,
        'contraints' => null,
        'reward' => null,
        'location' => null,
        'probability' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'icon' => false,
		'text' => false,
		'contraints' => false,
		'reward' => false,
		'location' => false,
		'probability' => false
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
        'icon' => 'icon',
        'text' => 'text',
        'contraints' => 'contraints',
        'reward' => 'reward',
        'location' => 'location',
        'probability' => 'probability'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'icon' => 'setIcon',
        'text' => 'setText',
        'contraints' => 'setContraints',
        'reward' => 'setReward',
        'location' => 'setLocation',
        'probability' => 'setProbability'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'icon' => 'getIcon',
        'text' => 'getText',
        'contraints' => 'getContraints',
        'reward' => 'getReward',
        'location' => 'getLocation',
        'probability' => 'getProbability'
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
        $this->setIfExists('icon', $data ?? [], null);
        $this->setIfExists('text', $data ?? [], null);
        $this->setIfExists('contraints', $data ?? [], null);
        $this->setIfExists('reward', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('probability', $data ?? [], null);
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

        if ($this->container['icon'] === null) {
            $invalidProperties[] = "'icon' can't be null";
        }
        if ($this->container['probability'] === null) {
            $invalidProperties[] = "'probability' can't be null";
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
     * Gets icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string $icon The id to the image file
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
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text 
     *
     * @return self
     */
    public function setText($text)
    {
        if (is_null($text)) {
            throw new \InvalidArgumentException('non-nullable text cannot be null');
        }
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets contraints
     *
     * @return string[]|null
     */
    public function getContraints()
    {
        return $this->container['contraints'];
    }

    /**
     * Sets contraints
     *
     * @param string[]|null $contraints hasPrizes, glow
     *
     * @return self
     */
    public function setContraints($contraints)
    {
        if (is_null($contraints)) {
            throw new \InvalidArgumentException('non-nullable contraints cannot be null');
        }
        $this->container['contraints'] = $contraints;

        return $this;
    }

    /**
     * Gets reward
     *
     * @return \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateRewardRequest|null
     */
    public function getReward()
    {
        return $this->container['reward'];
    }

    /**
     * Sets reward
     *
     * @param \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateRewardRequest|null $reward reward
     *
     * @return self
     */
    public function setReward($reward)
    {
        if (is_null($reward)) {
            throw new \InvalidArgumentException('non-nullable reward cannot be null');
        }
        $this->container['reward'] = $reward;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \OpenAPI\Client\com.ziqni.admin.sdk.model\GridLocation|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \OpenAPI\Client\com.ziqni.admin.sdk.model\GridLocation|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets probability
     *
     * @return float
     */
    public function getProbability()
    {
        return $this->container['probability'];
    }

    /**
     * Sets probability
     *
     * @param float $probability 
     *
     * @return self
     */
    public function setProbability($probability)
    {
        if (is_null($probability)) {
            throw new \InvalidArgumentException('non-nullable probability cannot be null');
        }
        $this->container['probability'] = $probability;

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


