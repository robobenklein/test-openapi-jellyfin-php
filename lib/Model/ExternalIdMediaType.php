<?php
/**
 * ExternalIdMediaType
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
 * ExternalIdMediaType Class Doc Comment
 *
 * @category Class
 * @description The specific media type of an MediaBrowser.Model.Providers.ExternalIdInfo.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExternalIdMediaType
{
    /**
     * Possible values of this enum
     */
    public const ALBUM = 'Album';

    public const ALBUM_ARTIST = 'AlbumArtist';

    public const ARTIST = 'Artist';

    public const BOX_SET = 'BoxSet';

    public const EPISODE = 'Episode';

    public const MOVIE = 'Movie';

    public const OTHER_ARTIST = 'OtherArtist';

    public const PERSON = 'Person';

    public const RELEASE_GROUP = 'ReleaseGroup';

    public const SEASON = 'Season';

    public const SERIES = 'Series';

    public const TRACK = 'Track';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALBUM,
            self::ALBUM_ARTIST,
            self::ARTIST,
            self::BOX_SET,
            self::EPISODE,
            self::MOVIE,
            self::OTHER_ARTIST,
            self::PERSON,
            self::RELEASE_GROUP,
            self::SEASON,
            self::SERIES,
            self::TRACK
        ];
    }
}


