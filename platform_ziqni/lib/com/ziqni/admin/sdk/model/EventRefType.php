<?php
/**
 * EventRefType
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
use \OpenAPI\Client\ObjectSerializer;

/**
 * EventRefType Class Doc Comment
 *
 * @category Class
 * @description Defines an even type attached to the message
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EventRefType
{
    /**
     * Possible values of this enum
     */
    public const COMPETITION = 'Competition';

    public const CONTEST = 'Contest';

    public const ACHIEVEMENT = 'Achievement';

    public const USER = 'User';

    public const MEMBER_MESSAGE = 'MemberMessage';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::COMPETITION,
            self::CONTEST,
            self::ACHIEVEMENT,
            self::USER,
            self::MEMBER_MESSAGE
        ];
    }
}


