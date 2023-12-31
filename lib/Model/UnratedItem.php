<?php
/**
 * UnratedItem
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
 * UnratedItem Class Doc Comment
 *
 * @category Class
 * @description An enum representing an unrated item.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UnratedItem
{
    /**
     * Possible values of this enum
     */
    public const MOVIE = 'Movie';

    public const TRAILER = 'Trailer';

    public const SERIES = 'Series';

    public const MUSIC = 'Music';

    public const BOOK = 'Book';

    public const LIVE_TV_CHANNEL = 'LiveTvChannel';

    public const LIVE_TV_PROGRAM = 'LiveTvProgram';

    public const CHANNEL_CONTENT = 'ChannelContent';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MOVIE,
            self::TRAILER,
            self::SERIES,
            self::MUSIC,
            self::BOOK,
            self::LIVE_TV_CHANNEL,
            self::LIVE_TV_PROGRAM,
            self::CHANNEL_CONTENT,
            self::OTHER
        ];
    }
}


