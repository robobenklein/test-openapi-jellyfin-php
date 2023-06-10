<?php
/**
 * ItemFields
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
 * ItemFields Class Doc Comment
 *
 * @category Class
 * @description Used to control the data that gets attached to DtoBaseItems.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ItemFields
{
    /**
     * Possible values of this enum
     */
    public const AIR_TIME = 'AirTime';

    public const CAN_DELETE = 'CanDelete';

    public const CAN_DOWNLOAD = 'CanDownload';

    public const CHANNEL_INFO = 'ChannelInfo';

    public const CHAPTERS = 'Chapters';

    public const CHILD_COUNT = 'ChildCount';

    public const CUMULATIVE_RUN_TIME_TICKS = 'CumulativeRunTimeTicks';

    public const CUSTOM_RATING = 'CustomRating';

    public const DATE_CREATED = 'DateCreated';

    public const DATE_LAST_MEDIA_ADDED = 'DateLastMediaAdded';

    public const DISPLAY_PREFERENCES_ID = 'DisplayPreferencesId';

    public const ETAG = 'Etag';

    public const EXTERNAL_URLS = 'ExternalUrls';

    public const GENRES = 'Genres';

    public const HOME_PAGE_URL = 'HomePageUrl';

    public const ITEM_COUNTS = 'ItemCounts';

    public const MEDIA_SOURCE_COUNT = 'MediaSourceCount';

    public const MEDIA_SOURCES = 'MediaSources';

    public const ORIGINAL_TITLE = 'OriginalTitle';

    public const OVERVIEW = 'Overview';

    public const PARENT_ID = 'ParentId';

    public const PATH = 'Path';

    public const PEOPLE = 'People';

    public const PLAY_ACCESS = 'PlayAccess';

    public const PRODUCTION_LOCATIONS = 'ProductionLocations';

    public const PROVIDER_IDS = 'ProviderIds';

    public const PRIMARY_IMAGE_ASPECT_RATIO = 'PrimaryImageAspectRatio';

    public const RECURSIVE_ITEM_COUNT = 'RecursiveItemCount';

    public const SETTINGS = 'Settings';

    public const SCREENSHOT_IMAGE_TAGS = 'ScreenshotImageTags';

    public const SERIES_PRIMARY_IMAGE = 'SeriesPrimaryImage';

    public const SERIES_STUDIO = 'SeriesStudio';

    public const SORT_NAME = 'SortName';

    public const SPECIAL_EPISODE_NUMBERS = 'SpecialEpisodeNumbers';

    public const STUDIOS = 'Studios';

    public const BASIC_SYNC_INFO = 'BasicSyncInfo';

    public const SYNC_INFO = 'SyncInfo';

    public const TAGLINES = 'Taglines';

    public const TAGS = 'Tags';

    public const REMOTE_TRAILERS = 'RemoteTrailers';

    public const MEDIA_STREAMS = 'MediaStreams';

    public const SEASON_USER_DATA = 'SeasonUserData';

    public const SERVICE_NAME = 'ServiceName';

    public const THEME_SONG_IDS = 'ThemeSongIds';

    public const THEME_VIDEO_IDS = 'ThemeVideoIds';

    public const EXTERNAL_ETAG = 'ExternalEtag';

    public const PRESENTATION_UNIQUE_KEY = 'PresentationUniqueKey';

    public const INHERITED_PARENTAL_RATING_VALUE = 'InheritedParentalRatingValue';

    public const EXTERNAL_SERIES_ID = 'ExternalSeriesId';

    public const SERIES_PRESENTATION_UNIQUE_KEY = 'SeriesPresentationUniqueKey';

    public const DATE_LAST_REFRESHED = 'DateLastRefreshed';

    public const DATE_LAST_SAVED = 'DateLastSaved';

    public const REFRESH_STATE = 'RefreshState';

    public const CHANNEL_IMAGE = 'ChannelImage';

    public const ENABLE_MEDIA_SOURCE_DISPLAY = 'EnableMediaSourceDisplay';

    public const WIDTH = 'Width';

    public const HEIGHT = 'Height';

    public const EXTRA_IDS = 'ExtraIds';

    public const LOCAL_TRAILER_COUNT = 'LocalTrailerCount';

    public const IS_HD = 'IsHD';

    public const SPECIAL_FEATURE_COUNT = 'SpecialFeatureCount';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AIR_TIME,
            self::CAN_DELETE,
            self::CAN_DOWNLOAD,
            self::CHANNEL_INFO,
            self::CHAPTERS,
            self::CHILD_COUNT,
            self::CUMULATIVE_RUN_TIME_TICKS,
            self::CUSTOM_RATING,
            self::DATE_CREATED,
            self::DATE_LAST_MEDIA_ADDED,
            self::DISPLAY_PREFERENCES_ID,
            self::ETAG,
            self::EXTERNAL_URLS,
            self::GENRES,
            self::HOME_PAGE_URL,
            self::ITEM_COUNTS,
            self::MEDIA_SOURCE_COUNT,
            self::MEDIA_SOURCES,
            self::ORIGINAL_TITLE,
            self::OVERVIEW,
            self::PARENT_ID,
            self::PATH,
            self::PEOPLE,
            self::PLAY_ACCESS,
            self::PRODUCTION_LOCATIONS,
            self::PROVIDER_IDS,
            self::PRIMARY_IMAGE_ASPECT_RATIO,
            self::RECURSIVE_ITEM_COUNT,
            self::SETTINGS,
            self::SCREENSHOT_IMAGE_TAGS,
            self::SERIES_PRIMARY_IMAGE,
            self::SERIES_STUDIO,
            self::SORT_NAME,
            self::SPECIAL_EPISODE_NUMBERS,
            self::STUDIOS,
            self::BASIC_SYNC_INFO,
            self::SYNC_INFO,
            self::TAGLINES,
            self::TAGS,
            self::REMOTE_TRAILERS,
            self::MEDIA_STREAMS,
            self::SEASON_USER_DATA,
            self::SERVICE_NAME,
            self::THEME_SONG_IDS,
            self::THEME_VIDEO_IDS,
            self::EXTERNAL_ETAG,
            self::PRESENTATION_UNIQUE_KEY,
            self::INHERITED_PARENTAL_RATING_VALUE,
            self::EXTERNAL_SERIES_ID,
            self::SERIES_PRESENTATION_UNIQUE_KEY,
            self::DATE_LAST_REFRESHED,
            self::DATE_LAST_SAVED,
            self::REFRESH_STATE,
            self::CHANNEL_IMAGE,
            self::ENABLE_MEDIA_SOURCE_DISPLAY,
            self::WIDTH,
            self::HEIGHT,
            self::EXTRA_IDS,
            self::LOCAL_TRAILER_COUNT,
            self::IS_HD,
            self::SPECIAL_FEATURE_COUNT
        ];
    }
}


