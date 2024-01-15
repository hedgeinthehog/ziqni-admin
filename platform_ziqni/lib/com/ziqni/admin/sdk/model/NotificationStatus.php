<?php
/**
 * NotificationStatus
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
 * NotificationStatus Class Doc Comment
 *
 * @category Class
 * @description The status of the message
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NotificationStatus
{
    /**
     * Possible values of this enum
     */
    public const _NEW = 'New';

    public const READ = 'Read';

    public const COLLABORATION_REQUEST = 'CollaborationRequest';

    public const ACTIONED = 'Actioned';

    public const CLAIMED = 'Claimed';

    public const EXPIRED = 'Expired';

    public const CANCELED = 'Canceled';

    public const DEPRECATED = 'Deprecated';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_NEW,
            self::READ,
            self::COLLABORATION_REQUEST,
            self::ACTIONED,
            self::CLAIMED,
            self::EXPIRED,
            self::CANCELED,
            self::DEPRECATED
        ];
    }
}

