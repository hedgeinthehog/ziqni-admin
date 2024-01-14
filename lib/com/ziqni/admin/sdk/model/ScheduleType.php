<?php
/**
 * ScheduleType
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
 * ScheduleType Class Doc Comment
 *
 * @category Class
 * @description The type of schedule
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ScheduleType
{
    /**
     * Possible values of this enum
     */
    public const ONCE = 'Once';

    public const REPEATEDLY = 'Repeatedly';

    public const DAILY = 'Daily';

    public const WEEKLY = 'Weekly';

    public const MONTHLY = 'Monthly';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ONCE,
            self::REPEATEDLY,
            self::DAILY,
            self::WEEKLY,
            self::MONTHLY
        ];
    }
}


