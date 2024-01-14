<?php
/**
 * FactDefault
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
 * FactDefault Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FactDefault implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FactDefault';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'operators' => 'string[]',
        'constant_type' => 'string',
        'constant_example' => 'string',
        'default_vale' => 'string',
        'macros' => '\OpenAPI\Client\com.ziqni.admin.sdk.model\Macro[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'operators' => null,
        'constant_type' => null,
        'constant_example' => null,
        'default_vale' => null,
        'macros' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'operators' => false,
		'constant_type' => false,
		'constant_example' => false,
		'default_vale' => false,
		'macros' => false
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
        'operators' => 'operators',
        'constant_type' => 'constantType',
        'constant_example' => 'constantExample',
        'default_vale' => 'defaultVale',
        'macros' => 'macros'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'operators' => 'setOperators',
        'constant_type' => 'setConstantType',
        'constant_example' => 'setConstantExample',
        'default_vale' => 'setDefaultVale',
        'macros' => 'setMacros'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'operators' => 'getOperators',
        'constant_type' => 'getConstantType',
        'constant_example' => 'getConstantExample',
        'default_vale' => 'getDefaultVale',
        'macros' => 'getMacros'
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
        $this->setIfExists('operators', $data ?? [], null);
        $this->setIfExists('constant_type', $data ?? [], null);
        $this->setIfExists('constant_example', $data ?? [], null);
        $this->setIfExists('default_vale', $data ?? [], null);
        $this->setIfExists('macros', $data ?? [], null);
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

        if ($this->container['operators'] === null) {
            $invalidProperties[] = "'operators' can't be null";
        }
        if ($this->container['constant_type'] === null) {
            $invalidProperties[] = "'constant_type' can't be null";
        }
        if ($this->container['constant_example'] === null) {
            $invalidProperties[] = "'constant_example' can't be null";
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
     * Gets operators
     *
     * @return string[]
     */
    public function getOperators()
    {
        return $this->container['operators'];
    }

    /**
     * Sets operators
     *
     * @param string[] $operators The operators supported by the fact
     *
     * @return self
     */
    public function setOperators($operators)
    {
        if (is_null($operators)) {
            throw new \InvalidArgumentException('non-nullable operators cannot be null');
        }
        $this->container['operators'] = $operators;

        return $this;
    }

    /**
     * Gets constant_type
     *
     * @return string
     */
    public function getConstantType()
    {
        return $this->container['constant_type'];
    }

    /**
     * Sets constant_type
     *
     * @param string $constant_type The data type of the constant
     *
     * @return self
     */
    public function setConstantType($constant_type)
    {
        if (is_null($constant_type)) {
            throw new \InvalidArgumentException('non-nullable constant_type cannot be null');
        }
        $this->container['constant_type'] = $constant_type;

        return $this;
    }

    /**
     * Gets constant_example
     *
     * @return string
     */
    public function getConstantExample()
    {
        return $this->container['constant_example'];
    }

    /**
     * Sets constant_example
     *
     * @param string $constant_example Example of the constant
     *
     * @return self
     */
    public function setConstantExample($constant_example)
    {
        if (is_null($constant_example)) {
            throw new \InvalidArgumentException('non-nullable constant_example cannot be null');
        }
        $this->container['constant_example'] = $constant_example;

        return $this;
    }

    /**
     * Gets default_vale
     *
     * @return string|null
     */
    public function getDefaultVale()
    {
        return $this->container['default_vale'];
    }

    /**
     * Sets default_vale
     *
     * @param string|null $default_vale The default value of the constant for the fact
     *
     * @return self
     */
    public function setDefaultVale($default_vale)
    {
        if (is_null($default_vale)) {
            throw new \InvalidArgumentException('non-nullable default_vale cannot be null');
        }
        $this->container['default_vale'] = $default_vale;

        return $this;
    }

    /**
     * Gets macros
     *
     * @return \OpenAPI\Client\com.ziqni.admin.sdk.model\Macro[]|null
     */
    public function getMacros()
    {
        return $this->container['macros'];
    }

    /**
     * Sets macros
     *
     * @param \OpenAPI\Client\com.ziqni.admin.sdk.model\Macro[]|null $macros macros
     *
     * @return self
     */
    public function setMacros($macros)
    {
        if (is_null($macros)) {
            throw new \InvalidArgumentException('non-nullable macros cannot be null');
        }
        $this->container['macros'] = $macros;

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

