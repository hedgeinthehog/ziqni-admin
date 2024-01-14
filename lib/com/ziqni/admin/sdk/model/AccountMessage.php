<?php
/**
 * AccountMessage
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
 * AccountMessage Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountMessage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountMessage';

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
        'expiry' => '\DateTime',
        'event_ref_type' => '\OpenAPI\Client\com.ziqni.admin.sdk.model\EventRefType',
        'event_ref_id' => 'string',
        'message_type' => '\OpenAPI\Client\com.ziqni.admin.sdk.model\MessageType',
        'subject' => 'string',
        'body' => 'string',
        'status' => '\OpenAPI\Client\com.ziqni.admin.sdk.model\MessageStatus',
        'user_id' => 'string',
        'links' => '\OpenAPI\Client\com.ziqni.admin.sdk.model\MessageLink[]'
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
        'expiry' => 'date-time',
        'event_ref_type' => null,
        'event_ref_id' => null,
        'message_type' => null,
        'subject' => null,
        'body' => null,
        'status' => null,
        'user_id' => null,
        'links' => null
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
		'expiry' => false,
		'event_ref_type' => false,
		'event_ref_id' => false,
		'message_type' => false,
		'subject' => false,
		'body' => false,
		'status' => false,
		'user_id' => false,
		'links' => false
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
        'expiry' => 'expiry',
        'event_ref_type' => 'eventRefType',
        'event_ref_id' => 'eventRefId',
        'message_type' => 'messageType',
        'subject' => 'subject',
        'body' => 'body',
        'status' => 'status',
        'user_id' => 'userId',
        'links' => 'links'
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
        'expiry' => 'setExpiry',
        'event_ref_type' => 'setEventRefType',
        'event_ref_id' => 'setEventRefId',
        'message_type' => 'setMessageType',
        'subject' => 'setSubject',
        'body' => 'setBody',
        'status' => 'setStatus',
        'user_id' => 'setUserId',
        'links' => 'setLinks'
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
        'expiry' => 'getExpiry',
        'event_ref_type' => 'getEventRefType',
        'event_ref_id' => 'getEventRefId',
        'message_type' => 'getMessageType',
        'subject' => 'getSubject',
        'body' => 'getBody',
        'status' => 'getStatus',
        'user_id' => 'getUserId',
        'links' => 'getLinks'
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
        $this->setIfExists('expiry', $data ?? [], null);
        $this->setIfExists('event_ref_type', $data ?? [], null);
        $this->setIfExists('event_ref_id', $data ?? [], null);
        $this->setIfExists('message_type', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('body', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('links', $data ?? [], null);
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
        if ($this->container['event_ref_type'] === null) {
            $invalidProperties[] = "'event_ref_type' can't be null";
        }
        if ($this->container['event_ref_id'] === null) {
            $invalidProperties[] = "'event_ref_id' can't be null";
        }
        if ($this->container['message_type'] === null) {
            $invalidProperties[] = "'message_type' can't be null";
        }
        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
        if ($this->container['body'] === null) {
            $invalidProperties[] = "'body' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
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
     * Gets expiry
     *
     * @return \DateTime|null
     */
    public function getExpiry()
    {
        return $this->container['expiry'];
    }

    /**
     * Sets expiry
     *
     * @param \DateTime|null $expiry The time that the message will disappear after. ISO8601 timestamp
     *
     * @return self
     */
    public function setExpiry($expiry)
    {
        if (is_null($expiry)) {
            throw new \InvalidArgumentException('non-nullable expiry cannot be null');
        }
        $this->container['expiry'] = $expiry;

        return $this;
    }

    /**
     * Gets event_ref_type
     *
     * @return \OpenAPI\Client\com.ziqni.admin.sdk.model\EventRefType
     */
    public function getEventRefType()
    {
        return $this->container['event_ref_type'];
    }

    /**
     * Sets event_ref_type
     *
     * @param \OpenAPI\Client\com.ziqni.admin.sdk.model\EventRefType $event_ref_type event_ref_type
     *
     * @return self
     */
    public function setEventRefType($event_ref_type)
    {
        if (is_null($event_ref_type)) {
            throw new \InvalidArgumentException('non-nullable event_ref_type cannot be null');
        }
        $this->container['event_ref_type'] = $event_ref_type;

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
     * @param string $event_ref_id The reference ID of the event object
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
     * Gets message_type
     *
     * @return \OpenAPI\Client\com.ziqni.admin.sdk.model\MessageType
     */
    public function getMessageType()
    {
        return $this->container['message_type'];
    }

    /**
     * Sets message_type
     *
     * @param \OpenAPI\Client\com.ziqni.admin.sdk.model\MessageType $message_type message_type
     *
     * @return self
     */
    public function setMessageType($message_type)
    {
        if (is_null($message_type)) {
            throw new \InvalidArgumentException('non-nullable message_type cannot be null');
        }
        $this->container['message_type'] = $message_type;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject The title of the message
     *
     * @return self
     */
    public function setSubject($subject)
    {
        if (is_null($subject)) {
            throw new \InvalidArgumentException('non-nullable subject cannot be null');
        }
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body The context of the message
     *
     * @return self
     */
    public function setBody($body)
    {
        if (is_null($body)) {
            throw new \InvalidArgumentException('non-nullable body cannot be null');
        }
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\com.ziqni.admin.sdk.model\MessageStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\com.ziqni.admin.sdk.model\MessageStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        if (is_null($user_id)) {
            throw new \InvalidArgumentException('non-nullable user_id cannot be null');
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \OpenAPI\Client\com.ziqni.admin.sdk.model\MessageLink[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \OpenAPI\Client\com.ziqni.admin.sdk.model\MessageLink[] $links 
     *
     * @return self
     */
    public function setLinks($links)
    {
        if (is_null($links)) {
            throw new \InvalidArgumentException('non-nullable links cannot be null');
        }
        $this->container['links'] = $links;

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


