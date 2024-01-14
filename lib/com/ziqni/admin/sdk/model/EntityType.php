<?php
/**
 * EntityType
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * EntityType Class Doc Comment
 *
 * @category Class
 * @description Entity the item is associated to.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EntityType
{
    /**
     * Possible values of this enum
     */
    public const MEMBER = 'Member';

    public const PRODUCT = 'Product';

    public const ACHIEVEMENT = 'Achievement';

    public const REPOSITORY = 'Repository';

    public const FILE_OBJECT = 'FileObject';

    public const LANGUAGE = 'Language';

    public const MEMBER_MESSAGE = 'MemberMessage';

    public const REWARD = 'Reward';

    public const MEMBER_AWARD = 'MemberAward';

    public const AWARD = 'Award';

    public const MESSAGE = 'Message';

    public const REWARD_TYPE = 'RewardType';

    public const ACTION_TYPE = 'ActionType';

    public const UNIT_OF_MEASURE = 'UnitOfMeasure';

    public const COMPETITION = 'Competition';

    public const CONTEST = 'Contest';

    public const SQS_CONNECTION = 'SqsConnection';

    public const KAFKA_CONNECTION = 'KafkaConnection';

    public const RABBIT_MQ_CONNECTION = 'RabbitMqConnection';

    public const EVENTS = 'Events';

    public const WEBHOOK = 'Webhook';

    public const ATTACHMENT = 'Attachment';

    public const RULE_SET = 'RuleSet';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MEMBER,
            self::PRODUCT,
            self::ACHIEVEMENT,
            self::REPOSITORY,
            self::FILE_OBJECT,
            self::LANGUAGE,
            self::MEMBER_MESSAGE,
            self::REWARD,
            self::MEMBER_AWARD,
            self::AWARD,
            self::MESSAGE,
            self::REWARD_TYPE,
            self::ACTION_TYPE,
            self::UNIT_OF_MEASURE,
            self::COMPETITION,
            self::CONTEST,
            self::SQS_CONNECTION,
            self::KAFKA_CONNECTION,
            self::RABBIT_MQ_CONNECTION,
            self::EVENTS,
            self::WEBHOOK,
            self::ATTACHMENT,
            self::RULE_SET
        ];
    }
}


