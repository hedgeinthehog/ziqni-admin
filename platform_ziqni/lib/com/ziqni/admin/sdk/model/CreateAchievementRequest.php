<?php
/**
 * CreateAchievementRequest
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
 * CreateAchievementRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateAchievementRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateAchievementRequest';

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
        'description' => 'string',
        'terms_and_conditions' => 'string',
        'icon' => 'string',
        'banner' => 'string',
        'banner_low_resolution' => 'string',
        'banner_high_resolution' => 'string',
        'rules' => '\OpenAPI\Client\com\ziqni\admin\sdk\model\Rule[]',
        'scheduling' => '\OpenAPI\Client\com\ziqni\admin\sdk\model\Scheduling',
        'max_number_of_issues' => 'int',
        'translations' => '\OpenAPI\Client\com\ziqni\admin\sdk\model\Translation[]',
        'rewards' => '\OpenAPI\Client\com\ziqni\admin\sdk\model\CreateRewardRequest[]',
        'constraints' => 'string[]',
        'achievement_dependencies' => '\OpenAPI\Client\com\ziqni\admin\sdk\model\DependantOn',
        'member_tags_filter' => '\OpenAPI\Client\com\ziqni\admin\sdk\model\DependantOn',
        'product_ids' => 'string[]',
        'product_tags_filter' => '\OpenAPI\Client\com\ziqni\admin\sdk\model\DependantOn',
        'add_constraints' => 'string[]',
        'strategies' => '\OpenAPI\Client\com\ziqni\admin\sdk\model\AchievementStrategies'
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
        'description' => null,
        'terms_and_conditions' => null,
        'icon' => null,
        'banner' => null,
        'banner_low_resolution' => null,
        'banner_high_resolution' => null,
        'rules' => null,
        'scheduling' => null,
        'max_number_of_issues' => 'int32',
        'translations' => null,
        'rewards' => null,
        'constraints' => null,
        'achievement_dependencies' => null,
        'member_tags_filter' => null,
        'product_ids' => null,
        'product_tags_filter' => null,
        'add_constraints' => null,
        'strategies' => null
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
		'description' => false,
		'terms_and_conditions' => false,
		'icon' => false,
		'banner' => false,
		'banner_low_resolution' => false,
		'banner_high_resolution' => false,
		'rules' => false,
		'scheduling' => false,
		'max_number_of_issues' => false,
		'translations' => false,
		'rewards' => false,
		'constraints' => false,
		'achievement_dependencies' => false,
		'member_tags_filter' => false,
		'product_ids' => false,
		'product_tags_filter' => false,
		'add_constraints' => false,
		'strategies' => false
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
        'description' => 'description',
        'terms_and_conditions' => 'termsAndConditions',
        'icon' => 'icon',
        'banner' => 'banner',
        'banner_low_resolution' => 'bannerLowResolution',
        'banner_high_resolution' => 'bannerHighResolution',
        'rules' => 'rules',
        'scheduling' => 'scheduling',
        'max_number_of_issues' => 'maxNumberOfIssues',
        'translations' => 'translations',
        'rewards' => 'rewards',
        'constraints' => 'constraints',
        'achievement_dependencies' => 'achievementDependencies',
        'member_tags_filter' => 'memberTagsFilter',
        'product_ids' => 'productIds',
        'product_tags_filter' => 'productTagsFilter',
        'add_constraints' => 'addConstraints',
        'strategies' => 'strategies'
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
        'description' => 'setDescription',
        'terms_and_conditions' => 'setTermsAndConditions',
        'icon' => 'setIcon',
        'banner' => 'setBanner',
        'banner_low_resolution' => 'setBannerLowResolution',
        'banner_high_resolution' => 'setBannerHighResolution',
        'rules' => 'setRules',
        'scheduling' => 'setScheduling',
        'max_number_of_issues' => 'setMaxNumberOfIssues',
        'translations' => 'setTranslations',
        'rewards' => 'setRewards',
        'constraints' => 'setConstraints',
        'achievement_dependencies' => 'setAchievementDependencies',
        'member_tags_filter' => 'setMemberTagsFilter',
        'product_ids' => 'setProductIds',
        'product_tags_filter' => 'setProductTagsFilter',
        'add_constraints' => 'setAddConstraints',
        'strategies' => 'setStrategies'
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
        'description' => 'getDescription',
        'terms_and_conditions' => 'getTermsAndConditions',
        'icon' => 'getIcon',
        'banner' => 'getBanner',
        'banner_low_resolution' => 'getBannerLowResolution',
        'banner_high_resolution' => 'getBannerHighResolution',
        'rules' => 'getRules',
        'scheduling' => 'getScheduling',
        'max_number_of_issues' => 'getMaxNumberOfIssues',
        'translations' => 'getTranslations',
        'rewards' => 'getRewards',
        'constraints' => 'getConstraints',
        'achievement_dependencies' => 'getAchievementDependencies',
        'member_tags_filter' => 'getMemberTagsFilter',
        'product_ids' => 'getProductIds',
        'product_tags_filter' => 'getProductTagsFilter',
        'add_constraints' => 'getAddConstraints',
        'strategies' => 'getStrategies'
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
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('terms_and_conditions', $data ?? [], null);
        $this->setIfExists('icon', $data ?? [], null);
        $this->setIfExists('banner', $data ?? [], null);
        $this->setIfExists('banner_low_resolution', $data ?? [], null);
        $this->setIfExists('banner_high_resolution', $data ?? [], null);
        $this->setIfExists('rules', $data ?? [], null);
        $this->setIfExists('scheduling', $data ?? [], null);
        $this->setIfExists('max_number_of_issues', $data ?? [], null);
        $this->setIfExists('translations', $data ?? [], null);
        $this->setIfExists('rewards', $data ?? [], null);
        $this->setIfExists('constraints', $data ?? [], null);
        $this->setIfExists('achievement_dependencies', $data ?? [], null);
        $this->setIfExists('member_tags_filter', $data ?? [], null);
        $this->setIfExists('product_ids', $data ?? [], null);
        $this->setIfExists('product_tags_filter', $data ?? [], null);
        $this->setIfExists('add_constraints', $data ?? [], null);
        $this->setIfExists('strategies', $data ?? [], null);
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
        if ($this->container['scheduling'] === null) {
            $invalidProperties[] = "'scheduling' can't be null";
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
     * @param string $name A name for the Achievement. Can be translated
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
     * @param string|null $description A name for the Achievement. Can be translated
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
     * Gets terms_and_conditions
     *
     * @return string|null
     */
    public function getTermsAndConditions()
    {
        return $this->container['terms_and_conditions'];
    }

    /**
     * Sets terms_and_conditions
     *
     * @param string|null $terms_and_conditions Terms and conditions of an achievement. Can be translated
     *
     * @return self
     */
    public function setTermsAndConditions($terms_and_conditions)
    {
        if (is_null($terms_and_conditions)) {
            throw new \InvalidArgumentException('non-nullable terms_and_conditions cannot be null');
        }
        $this->container['terms_and_conditions'] = $terms_and_conditions;

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
     * @param string|null $icon An Icon id that has been pre uploaded to the system to display for Achievement
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
     * Gets banner
     *
     * @return string|null
     */
    public function getBanner()
    {
        return $this->container['banner'];
    }

    /**
     * Sets banner
     *
     * @param string|null $banner A banner id that has been pre uploaded to the system to display for Achievement
     *
     * @return self
     */
    public function setBanner($banner)
    {
        if (is_null($banner)) {
            throw new \InvalidArgumentException('non-nullable banner cannot be null');
        }
        $this->container['banner'] = $banner;

        return $this;
    }

    /**
     * Gets banner_low_resolution
     *
     * @return string|null
     */
    public function getBannerLowResolution()
    {
        return $this->container['banner_low_resolution'];
    }

    /**
     * Sets banner_low_resolution
     *
     * @param string|null $banner_low_resolution A bannerLowResolution id that has been pre uploaded to the system to display for Achievement
     *
     * @return self
     */
    public function setBannerLowResolution($banner_low_resolution)
    {
        if (is_null($banner_low_resolution)) {
            throw new \InvalidArgumentException('non-nullable banner_low_resolution cannot be null');
        }
        $this->container['banner_low_resolution'] = $banner_low_resolution;

        return $this;
    }

    /**
     * Gets banner_high_resolution
     *
     * @return string|null
     */
    public function getBannerHighResolution()
    {
        return $this->container['banner_high_resolution'];
    }

    /**
     * Sets banner_high_resolution
     *
     * @param string|null $banner_high_resolution A bannerHighResolution id that has been pre uploaded to the system to display for Achievement
     *
     * @return self
     */
    public function setBannerHighResolution($banner_high_resolution)
    {
        if (is_null($banner_high_resolution)) {
            throw new \InvalidArgumentException('non-nullable banner_high_resolution cannot be null');
        }
        $this->container['banner_high_resolution'] = $banner_high_resolution;

        return $this;
    }

    /**
     * Gets rules
     *
     * @return \OpenAPI\Client\com\ziqni\admin\sdk\model\Rule[]|null
     */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
     * Sets rules
     *
     * @param \OpenAPI\Client\com\ziqni\admin\sdk\model\Rule[]|null $rules rules
     *
     * @return self
     */
    public function setRules($rules)
    {
        if (is_null($rules)) {
            throw new \InvalidArgumentException('non-nullable rules cannot be null');
        }
        $this->container['rules'] = $rules;

        return $this;
    }

    /**
     * Gets scheduling
     *
     * @return \OpenAPI\Client\com\ziqni\admin\sdk\model\Scheduling
     */
    public function getScheduling()
    {
        return $this->container['scheduling'];
    }

    /**
     * Sets scheduling
     *
     * @param \OpenAPI\Client\com\ziqni\admin\sdk\model\Scheduling $scheduling scheduling
     *
     * @return self
     */
    public function setScheduling($scheduling)
    {
        if (is_null($scheduling)) {
            throw new \InvalidArgumentException('non-nullable scheduling cannot be null');
        }
        $this->container['scheduling'] = $scheduling;

        return $this;
    }

    /**
     * Gets max_number_of_issues
     *
     * @return int|null
     */
    public function getMaxNumberOfIssues()
    {
        return $this->container['max_number_of_issues'];
    }

    /**
     * Sets max_number_of_issues
     *
     * @param int|null $max_number_of_issues Maximum number of issued achievements
     *
     * @return self
     */
    public function setMaxNumberOfIssues($max_number_of_issues)
    {
        if (is_null($max_number_of_issues)) {
            throw new \InvalidArgumentException('non-nullable max_number_of_issues cannot be null');
        }
        $this->container['max_number_of_issues'] = $max_number_of_issues;

        return $this;
    }

    /**
     * Gets translations
     *
     * @return \OpenAPI\Client\com\ziqni\admin\sdk\model\Translation[]|null
     */
    public function getTranslations()
    {
        return $this->container['translations'];
    }

    /**
     * Sets translations
     *
     * @param \OpenAPI\Client\com\ziqni\admin\sdk\model\Translation[]|null $translations translations
     *
     * @return self
     */
    public function setTranslations($translations)
    {
        if (is_null($translations)) {
            throw new \InvalidArgumentException('non-nullable translations cannot be null');
        }
        $this->container['translations'] = $translations;

        return $this;
    }

    /**
     * Gets rewards
     *
     * @return \OpenAPI\Client\com\ziqni\admin\sdk\model\CreateRewardRequest[]|null
     */
    public function getRewards()
    {
        return $this->container['rewards'];
    }

    /**
     * Sets rewards
     *
     * @param \OpenAPI\Client\com\ziqni\admin\sdk\model\CreateRewardRequest[]|null $rewards rewards
     *
     * @return self
     */
    public function setRewards($rewards)
    {
        if (is_null($rewards)) {
            throw new \InvalidArgumentException('non-nullable rewards cannot be null');
        }
        $this->container['rewards'] = $rewards;

        return $this;
    }

    /**
     * Gets constraints
     *
     * @return string[]
     * @deprecated
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
     * @deprecated
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
     * Gets achievement_dependencies
     *
     * @return \OpenAPI\Client\com\ziqni\admin\sdk\model\DependantOn|null
     */
    public function getAchievementDependencies()
    {
        return $this->container['achievement_dependencies'];
    }

    /**
     * Sets achievement_dependencies
     *
     * @param \OpenAPI\Client\com\ziqni\admin\sdk\model\DependantOn|null $achievement_dependencies achievement_dependencies
     *
     * @return self
     */
    public function setAchievementDependencies($achievement_dependencies)
    {
        if (is_null($achievement_dependencies)) {
            throw new \InvalidArgumentException('non-nullable achievement_dependencies cannot be null');
        }
        $this->container['achievement_dependencies'] = $achievement_dependencies;

        return $this;
    }

    /**
     * Gets member_tags_filter
     *
     * @return \OpenAPI\Client\com\ziqni\admin\sdk\model\DependantOn|null
     */
    public function getMemberTagsFilter()
    {
        return $this->container['member_tags_filter'];
    }

    /**
     * Sets member_tags_filter
     *
     * @param \OpenAPI\Client\com\ziqni\admin\sdk\model\DependantOn|null $member_tags_filter member_tags_filter
     *
     * @return self
     */
    public function setMemberTagsFilter($member_tags_filter)
    {
        if (is_null($member_tags_filter)) {
            throw new \InvalidArgumentException('non-nullable member_tags_filter cannot be null');
        }
        $this->container['member_tags_filter'] = $member_tags_filter;

        return $this;
    }

    /**
     * Gets product_ids
     *
     * @return string[]|null
     */
    public function getProductIds()
    {
        return $this->container['product_ids'];
    }

    /**
     * Sets product_ids
     *
     * @param string[]|null $product_ids 
     *
     * @return self
     */
    public function setProductIds($product_ids)
    {
        if (is_null($product_ids)) {
            throw new \InvalidArgumentException('non-nullable product_ids cannot be null');
        }
        $this->container['product_ids'] = $product_ids;

        return $this;
    }

    /**
     * Gets product_tags_filter
     *
     * @return \OpenAPI\Client\com\ziqni\admin\sdk\model\DependantOn|null
     */
    public function getProductTagsFilter()
    {
        return $this->container['product_tags_filter'];
    }

    /**
     * Sets product_tags_filter
     *
     * @param \OpenAPI\Client\com\ziqni\admin\sdk\model\DependantOn|null $product_tags_filter product_tags_filter
     *
     * @return self
     */
    public function setProductTagsFilter($product_tags_filter)
    {
        if (is_null($product_tags_filter)) {
            throw new \InvalidArgumentException('non-nullable product_tags_filter cannot be null');
        }
        $this->container['product_tags_filter'] = $product_tags_filter;

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
     * @param string[]|null $add_constraints 
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
     * Gets strategies
     *
     * @return \OpenAPI\Client\com\ziqni\admin\sdk\model\AchievementStrategies|null
     */
    public function getStrategies()
    {
        return $this->container['strategies'];
    }

    /**
     * Sets strategies
     *
     * @param \OpenAPI\Client\com\ziqni\admin\sdk\model\AchievementStrategies|null $strategies strategies
     *
     * @return self
     */
    public function setStrategies($strategies)
    {
        if (is_null($strategies)) {
            throw new \InvalidArgumentException('non-nullable strategies cannot be null');
        }
        $this->container['strategies'] = $strategies;

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

