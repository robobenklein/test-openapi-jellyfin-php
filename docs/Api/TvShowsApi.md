# OpenAPI\Client\TvShowsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEpisodes()**](TvShowsApi.md#getEpisodes) | **GET** /Shows/{seriesId}/Episodes | Gets episodes for a tv season. |
| [**getNextUp()**](TvShowsApi.md#getNextUp) | **GET** /Shows/NextUp | Gets a list of next up episodes. |
| [**getSeasons()**](TvShowsApi.md#getSeasons) | **GET** /Shows/{seriesId}/Seasons | Gets seasons for a tv series. |
| [**getUpcomingEpisodes()**](TvShowsApi.md#getUpcomingEpisodes) | **GET** /Shows/Upcoming | Gets a list of upcoming episodes. |


## `getEpisodes()`

```php
getEpisodes($series_id, $user_id, $fields, $season, $season_id, $is_missing, $adjacent_to, $start_item_id, $start_index, $limit, $enable_images, $image_type_limit, $enable_image_types, $enable_user_data, $sort_by): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets episodes for a tv season.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TvShowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$series_id = 'series_id_example'; // string | The series id.
$user_id = 'user_id_example'; // string | The user id.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output. This allows multiple, comma delimited. Options: Budget, Chapters, DateCreated, Genres, HomePageUrl, IndexOptions, MediaStreams, Overview, ParentId, Path, People, ProviderIds, PrimaryImageAspectRatio, Revenue, SortName, Studios, Taglines, TrailerUrls.
$season = 56; // int | Optional filter by season number.
$season_id = 'season_id_example'; // string | Optional. Filter by season id.
$is_missing = True; // bool | Optional. Filter by items that are missing episodes or not.
$adjacent_to = 'adjacent_to_example'; // string | Optional. Return items that are siblings of a supplied item.
$start_item_id = 'start_item_id_example'; // string | Optional. Skip through the list until a given item is found.
$start_index = 56; // int | Optional. The record index to start at. All items with a lower index will be dropped from the results.
$limit = 56; // int | Optional. The maximum number of records to return.
$enable_images = True; // bool | Optional, include image information in output.
$image_type_limit = 56; // int | Optional, the max number of images to return, per image type.
$enable_image_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType()); // \OpenAPI\Client\Model\ImageType[] | Optional. The image types to include in the output.
$enable_user_data = True; // bool | Optional. Include user data.
$sort_by = 'sort_by_example'; // string | Optional. Specify one or more sort orders, comma delimited. Options: Album, AlbumArtist, Artist, Budget, CommunityRating, CriticRating, DateCreated, DatePlayed, PlayCount, PremiereDate, ProductionYear, SortName, Random, Revenue, Runtime.

try {
    $result = $apiInstance->getEpisodes($series_id, $user_id, $fields, $season, $season_id, $is_missing, $adjacent_to, $start_item_id, $start_index, $limit, $enable_images, $image_type_limit, $enable_image_types, $enable_user_data, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TvShowsApi->getEpisodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **series_id** | **string**| The series id. | |
| **user_id** | **string**| The user id. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. This allows multiple, comma delimited. Options: Budget, Chapters, DateCreated, Genres, HomePageUrl, IndexOptions, MediaStreams, Overview, ParentId, Path, People, ProviderIds, PrimaryImageAspectRatio, Revenue, SortName, Studios, Taglines, TrailerUrls. | [optional] |
| **season** | **int**| Optional filter by season number. | [optional] |
| **season_id** | **string**| Optional. Filter by season id. | [optional] |
| **is_missing** | **bool**| Optional. Filter by items that are missing episodes or not. | [optional] |
| **adjacent_to** | **string**| Optional. Return items that are siblings of a supplied item. | [optional] |
| **start_item_id** | **string**| Optional. Skip through the list until a given item is found. | [optional] |
| **start_index** | **int**| Optional. The record index to start at. All items with a lower index will be dropped from the results. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **enable_images** | **bool**| Optional, include image information in output. | [optional] |
| **image_type_limit** | **int**| Optional, the max number of images to return, per image type. | [optional] |
| **enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](../Model/\OpenAPI\Client\Model\ImageType.md)| Optional. The image types to include in the output. | [optional] |
| **enable_user_data** | **bool**| Optional. Include user data. | [optional] |
| **sort_by** | **string**| Optional. Specify one or more sort orders, comma delimited. Options: Album, AlbumArtist, Artist, Budget, CommunityRating, CriticRating, DateCreated, DatePlayed, PlayCount, PremiereDate, ProductionYear, SortName, Random, Revenue, Runtime. | [optional] |

### Return type

[**\OpenAPI\Client\Model\BaseItemDtoQueryResult**](../Model/BaseItemDtoQueryResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNextUp()`

```php
getNextUp($user_id, $start_index, $limit, $fields, $series_id, $parent_id, $enable_images, $image_type_limit, $enable_image_types, $enable_user_data, $next_up_date_cutoff, $enable_total_record_count, $disable_first_episode, $enable_rewatching): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets a list of next up episodes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TvShowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | The user id of the user to get the next up episodes for.
$start_index = 56; // int | Optional. The record index to start at. All items with a lower index will be dropped from the results.
$limit = 56; // int | Optional. The maximum number of records to return.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output.
$series_id = 'series_id_example'; // string | Optional. Filter by series id.
$parent_id = 'parent_id_example'; // string | Optional. Specify this to localize the search to a specific item or folder. Omit to use the root.
$enable_images = True; // bool | Optional. Include image information in output.
$image_type_limit = 56; // int | Optional. The max number of images to return, per image type.
$enable_image_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType()); // \OpenAPI\Client\Model\ImageType[] | Optional. The image types to include in the output.
$enable_user_data = True; // bool | Optional. Include user data.
$next_up_date_cutoff = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional. Starting date of shows to show in Next Up section.
$enable_total_record_count = true; // bool | Whether to enable the total records count. Defaults to true.
$disable_first_episode = false; // bool | Whether to disable sending the first episode in a series as next up.
$enable_rewatching = false; // bool | Whether to include watched episode in next up results.

try {
    $result = $apiInstance->getNextUp($user_id, $start_index, $limit, $fields, $series_id, $parent_id, $enable_images, $image_type_limit, $enable_image_types, $enable_user_data, $next_up_date_cutoff, $enable_total_record_count, $disable_first_episode, $enable_rewatching);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TvShowsApi->getNextUp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The user id of the user to get the next up episodes for. | [optional] |
| **start_index** | **int**| Optional. The record index to start at. All items with a lower index will be dropped from the results. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. | [optional] |
| **series_id** | **string**| Optional. Filter by series id. | [optional] |
| **parent_id** | **string**| Optional. Specify this to localize the search to a specific item or folder. Omit to use the root. | [optional] |
| **enable_images** | **bool**| Optional. Include image information in output. | [optional] |
| **image_type_limit** | **int**| Optional. The max number of images to return, per image type. | [optional] |
| **enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](../Model/\OpenAPI\Client\Model\ImageType.md)| Optional. The image types to include in the output. | [optional] |
| **enable_user_data** | **bool**| Optional. Include user data. | [optional] |
| **next_up_date_cutoff** | **\DateTime**| Optional. Starting date of shows to show in Next Up section. | [optional] |
| **enable_total_record_count** | **bool**| Whether to enable the total records count. Defaults to true. | [optional] [default to true] |
| **disable_first_episode** | **bool**| Whether to disable sending the first episode in a series as next up. | [optional] [default to false] |
| **enable_rewatching** | **bool**| Whether to include watched episode in next up results. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\BaseItemDtoQueryResult**](../Model/BaseItemDtoQueryResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSeasons()`

```php
getSeasons($series_id, $user_id, $fields, $is_special_season, $is_missing, $adjacent_to, $enable_images, $image_type_limit, $enable_image_types, $enable_user_data): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets seasons for a tv series.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TvShowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$series_id = 'series_id_example'; // string | The series id.
$user_id = 'user_id_example'; // string | The user id.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output. This allows multiple, comma delimited. Options: Budget, Chapters, DateCreated, Genres, HomePageUrl, IndexOptions, MediaStreams, Overview, ParentId, Path, People, ProviderIds, PrimaryImageAspectRatio, Revenue, SortName, Studios, Taglines, TrailerUrls.
$is_special_season = True; // bool | Optional. Filter by special season.
$is_missing = True; // bool | Optional. Filter by items that are missing episodes or not.
$adjacent_to = 'adjacent_to_example'; // string | Optional. Return items that are siblings of a supplied item.
$enable_images = True; // bool | Optional. Include image information in output.
$image_type_limit = 56; // int | Optional. The max number of images to return, per image type.
$enable_image_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType()); // \OpenAPI\Client\Model\ImageType[] | Optional. The image types to include in the output.
$enable_user_data = True; // bool | Optional. Include user data.

try {
    $result = $apiInstance->getSeasons($series_id, $user_id, $fields, $is_special_season, $is_missing, $adjacent_to, $enable_images, $image_type_limit, $enable_image_types, $enable_user_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TvShowsApi->getSeasons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **series_id** | **string**| The series id. | |
| **user_id** | **string**| The user id. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. This allows multiple, comma delimited. Options: Budget, Chapters, DateCreated, Genres, HomePageUrl, IndexOptions, MediaStreams, Overview, ParentId, Path, People, ProviderIds, PrimaryImageAspectRatio, Revenue, SortName, Studios, Taglines, TrailerUrls. | [optional] |
| **is_special_season** | **bool**| Optional. Filter by special season. | [optional] |
| **is_missing** | **bool**| Optional. Filter by items that are missing episodes or not. | [optional] |
| **adjacent_to** | **string**| Optional. Return items that are siblings of a supplied item. | [optional] |
| **enable_images** | **bool**| Optional. Include image information in output. | [optional] |
| **image_type_limit** | **int**| Optional. The max number of images to return, per image type. | [optional] |
| **enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](../Model/\OpenAPI\Client\Model\ImageType.md)| Optional. The image types to include in the output. | [optional] |
| **enable_user_data** | **bool**| Optional. Include user data. | [optional] |

### Return type

[**\OpenAPI\Client\Model\BaseItemDtoQueryResult**](../Model/BaseItemDtoQueryResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUpcomingEpisodes()`

```php
getUpcomingEpisodes($user_id, $start_index, $limit, $fields, $parent_id, $enable_images, $image_type_limit, $enable_image_types, $enable_user_data): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets a list of upcoming episodes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TvShowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | The user id of the user to get the upcoming episodes for.
$start_index = 56; // int | Optional. The record index to start at. All items with a lower index will be dropped from the results.
$limit = 56; // int | Optional. The maximum number of records to return.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output.
$parent_id = 'parent_id_example'; // string | Optional. Specify this to localize the search to a specific item or folder. Omit to use the root.
$enable_images = True; // bool | Optional. Include image information in output.
$image_type_limit = 56; // int | Optional. The max number of images to return, per image type.
$enable_image_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType()); // \OpenAPI\Client\Model\ImageType[] | Optional. The image types to include in the output.
$enable_user_data = True; // bool | Optional. Include user data.

try {
    $result = $apiInstance->getUpcomingEpisodes($user_id, $start_index, $limit, $fields, $parent_id, $enable_images, $image_type_limit, $enable_image_types, $enable_user_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TvShowsApi->getUpcomingEpisodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The user id of the user to get the upcoming episodes for. | [optional] |
| **start_index** | **int**| Optional. The record index to start at. All items with a lower index will be dropped from the results. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. | [optional] |
| **parent_id** | **string**| Optional. Specify this to localize the search to a specific item or folder. Omit to use the root. | [optional] |
| **enable_images** | **bool**| Optional. Include image information in output. | [optional] |
| **image_type_limit** | **int**| Optional. The max number of images to return, per image type. | [optional] |
| **enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](../Model/\OpenAPI\Client\Model\ImageType.md)| Optional. The image types to include in the output. | [optional] |
| **enable_user_data** | **bool**| Optional. Include user data. | [optional] |

### Return type

[**\OpenAPI\Client\Model\BaseItemDtoQueryResult**](../Model/BaseItemDtoQueryResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
