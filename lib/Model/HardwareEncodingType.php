<?php
/**
 * HardwareEncodingType
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
 * HardwareEncodingType Class Doc Comment
 *
 * @category Class
 * @description Enum HardwareEncodingType.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class HardwareEncodingType
{
    /**
     * Possible values of this enum
     */
    public const AMF = 'AMF';

    public const QSV = 'QSV';

    public const NVENC = 'NVENC';

    public const V4_L2_M2_M = 'V4L2M2M';

    public const VAAPI = 'VAAPI';

    public const VIDEO_TOOL_BOX = 'VideoToolBox';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AMF,
            self::QSV,
            self::NVENC,
            self::V4_L2_M2_M,
            self::VAAPI,
            self::VIDEO_TOOL_BOX
        ];
    }
}


