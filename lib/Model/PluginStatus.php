<?php
/**
 * PluginStatus
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Jellyfin API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 10.8.10
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PluginStatus Class Doc Comment
 *
 * @category Class
 * @description Plugin load status.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PluginStatus
{
    /**
     * Possible values of this enum
     */
    public const ACTIVE = 'Active';

    public const RESTART = 'Restart';

    public const DELETED = 'Deleted';

    public const SUPERCEDED = 'Superceded';

    public const MALFUNCTIONED = 'Malfunctioned';

    public const NOT_SUPPORTED = 'NotSupported';

    public const DISABLED = 'Disabled';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACTIVE,
            self::RESTART,
            self::DELETED,
            self::SUPERCEDED,
            self::MALFUNCTIONED,
            self::NOT_SUPPORTED,
            self::DISABLED
        ];
    }
}

