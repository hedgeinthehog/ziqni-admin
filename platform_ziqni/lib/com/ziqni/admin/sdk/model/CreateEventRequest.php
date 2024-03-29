<?php
/**
 * CreateEventRequest
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
 * CreateEventRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateEventRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateEventRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'member_ref_id' => 'string',
        'action' => 'string',
        'batch_id' => 'string',
        'entity_ref_id' => 'string',
        'source_value' => 'float',
        'transaction_timestamp' => '\DateTime',
        'tags' => 'string[]',
        'event_ref_id' => 'string',
        'member_id' => 'string',
        'custom_fields' => 'array<string,mixed>',
        'unit_of_measure' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'member_ref_id' => null,
        'action' => null,
        'batch_id' => null,
        'entity_ref_id' => null,
        'source_value' => 'double',
        'transaction_timestamp' => 'date-time',
        'tags' => null,
        'event_ref_id' => null,
        'member_id' => null,
        'custom_fields' => null,
        'unit_of_measure' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'member_ref_id' => false,
		'action' => false,
		'batch_id' => false,
		'entity_ref_id' => false,
		'source_value' => false,
		'transaction_timestamp' => false,
		'tags' => false,
		'event_ref_id' => false,
		'member_id' => false,
		'custom_fields' => false,
		'unit_of_measure' => false
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
        'member_ref_id' => 'memberRefId',
        'action' => 'action',
        'batch_id' => 'batchId',
        'entity_ref_id' => 'entityRefId',
        'source_value' => 'sourceValue',
        'transaction_timestamp' => 'transactionTimestamp',
        'tags' => 'tags',
        'event_ref_id' => 'eventRefId',
        'member_id' => 'memberId',
        'custom_fields' => 'customFields',
        'unit_of_measure' => 'unitOfMeasure'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'member_ref_id' => 'setMemberRefId',
        'action' => 'setAction',
        'batch_id' => 'setBatchId',
        'entity_ref_id' => 'setEntityRefId',
        'source_value' => 'setSourceValue',
        'transaction_timestamp' => 'setTransactionTimestamp',
        'tags' => 'setTags',
        'event_ref_id' => 'setEventRefId',
        'member_id' => 'setMemberId',
        'custom_fields' => 'setCustomFields',
        'unit_of_measure' => 'setUnitOfMeasure'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'member_ref_id' => 'getMemberRefId',
        'action' => 'getAction',
        'batch_id' => 'getBatchId',
        'entity_ref_id' => 'getEntityRefId',
        'source_value' => 'getSourceValue',
        'transaction_timestamp' => 'getTransactionTimestamp',
        'tags' => 'getTags',
        'event_ref_id' => 'getEventRefId',
        'member_id' => 'getMemberId',
        'custom_fields' => 'getCustomFields',
        'unit_of_measure' => 'getUnitOfMeasure'
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
        $this->setIfExists('member_ref_id', $data ?? [], null);
        $this->setIfExists('action', $data ?? [], null);
        $this->setIfExists('batch_id', $data ?? [], null);
        $this->setIfExists('entity_ref_id', $data ?? [], null);
        $this->setIfExists('source_value', $data ?? [], null);
        $this->setIfExists('transaction_timestamp', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('event_ref_id', $data ?? [], null);
        $this->setIfExists('member_id', $data ?? [], null);
        $this->setIfExists('custom_fields', $data ?? [], null);
        $this->setIfExists('unit_of_measure', $data ?? [], null);
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

        if ($this->container['member_ref_id'] === null) {
            $invalidProperties[] = "'member_ref_id' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['entity_ref_id'] === null) {
            $invalidProperties[] = "'entity_ref_id' can't be null";
        }
        if ($this->container['source_value'] === null) {
            $invalidProperties[] = "'source_value' can't be null";
        }
        if ($this->container['transaction_timestamp'] === null) {
            $invalidProperties[] = "'transaction_timestamp' can't be null";
        }
        if ($this->container['event_ref_id'] === null) {
            $invalidProperties[] = "'event_ref_id' can't be null";
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
     * @param string $member_ref_id The reference to this member in external system
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
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action The identifier that describes the meaning of this event
     *
     * @return self
     */
    public function setAction($action)
    {
        if (is_null($action)) {
            throw new \InvalidArgumentException('non-nullable action cannot be null');
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets batch_id
     *
     * @return string|null
     */
    public function getBatchId()
    {
        return $this->container['batch_id'];
    }

    /**
     * Sets batch_id
     *
     * @param string|null $batch_id The batch identifier is used to group related event stream data together. This could be as simple as a UUID or your internal reference to that distinct player session event
     *
     * @return self
     */
    public function setBatchId($batch_id)
    {
        if (is_null($batch_id)) {
            throw new \InvalidArgumentException('non-nullable batch_id cannot be null');
        }
        $this->container['batch_id'] = $batch_id;

        return $this;
    }

    /**
     * Gets entity_ref_id
     *
     * @return string
     */
    public function getEntityRefId()
    {
        return $this->container['entity_ref_id'];
    }

    /**
     * Sets entity_ref_id
     *
     * @param string $entity_ref_id It is a reference to a game/product ID from external system
     *
     * @return self
     */
    public function setEntityRefId($entity_ref_id)
    {
        if (is_null($entity_ref_id)) {
            throw new \InvalidArgumentException('non-nullable entity_ref_id cannot be null');
        }
        $this->container['entity_ref_id'] = $entity_ref_id;

        return $this;
    }

    /**
     * Gets source_value
     *
     * @return float
     */
    public function getSourceValue()
    {
        return $this->container['source_value'];
    }

    /**
     * Sets source_value
     *
     * @param float $source_value The actual numerical value related to the event
     *
     * @return self
     */
    public function setSourceValue($source_value)
    {
        if (is_null($source_value)) {
            throw new \InvalidArgumentException('non-nullable source_value cannot be null');
        }
        $this->container['source_value'] = $source_value;

        return $this;
    }

    /**
     * Gets transaction_timestamp
     *
     * @return \DateTime
     */
    public function getTransactionTimestamp()
    {
        return $this->container['transaction_timestamp'];
    }

    /**
     * Sets transaction_timestamp
     *
     * @param \DateTime $transaction_timestamp ISO8601 timestamp for when this event happened. All records are stored in UTC time zone
     *
     * @return self
     */
    public function setTransactionTimestamp($transaction_timestamp)
    {
        if (is_null($transaction_timestamp)) {
            throw new \InvalidArgumentException('non-nullable transaction_timestamp cannot be null');
        }
        $this->container['transaction_timestamp'] = $transaction_timestamp;

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
     * @param string[]|null $tags A list of Strings of groups that the tag belongs to
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
     * Gets event_ref_id
     *
     * @return string
     */
    public function getEventRefId()
    {
        return $this->container['event_ref_id'];
    }

    /**
     * Sets event_ref_id
     *
     * @param string $event_ref_id 
     *
     * @return self
     */
    public function setEventRefId($event_ref_id)
    {
        if (is_null($event_ref_id)) {
            throw new \InvalidArgumentException('non-nullable event_ref_id cannot be null');
        }
        $this->container['event_ref_id'] = $event_ref_id;

        return $this;
    }

    /**
     * Gets member_id
     *
     * @return string|null
     */
    public function getMemberId()
    {
        return $this->container['member_id'];
    }

    /**
     * Sets member_id
     *
     * @param string|null $member_id 
     *
     * @return self
     */
    public function setMemberId($member_id)
    {
        if (is_null($member_id)) {
            throw new \InvalidArgumentException('non-nullable member_id cannot be null');
        }
        $this->container['member_id'] = $member_id;

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
     * Gets unit_of_measure
     *
     * @return string|null
     */
    public function getUnitOfMeasure()
    {
        return $this->container['unit_of_measure'];
    }

    /**
     * Sets unit_of_measure
     *
     * @param string|null $unit_of_measure The unit of measure is used to determine the type of the source value. It is used to normalize points values for currency based calculations by normalizing the source value.
     *
     * @return self
     */
    public function setUnitOfMeasure($unit_of_measure)
    {
        if (is_null($unit_of_measure)) {
            throw new \InvalidArgumentException('non-nullable unit_of_measure cannot be null');
        }
        $this->container['unit_of_measure'] = $unit_of_measure;

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


