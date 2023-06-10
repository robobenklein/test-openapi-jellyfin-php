# OpenAPI\Client\SearchApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**get()**](SearchApi.md#get) | **GET** /Search/Hints | Gets the search hint result. |


## `get()`

```php
get($search_term, $start_index, $limit, $user_id, $include_item_types, $exclude_item_types, $media_types, $parent_id, $is_movie, $is_series, $is_news, $is_kids, $is_sports, $include_people, $include_media, $include_genres, $include_studios, $include_artists): \OpenAPI\Client\Model\SearchHintResult
```

Gets the search hint result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_term = 'search_term_example'; // string | The search term to filter on.
$start_index = 56; // int | Optional. The record index to start at. All items with a lower index will be dropped from the results.
$limit = 56; // int | Optional. The maximum number of records to return.
$user_id = 'user_id_example'; // string | Optional. Supply a user id to search within a user's library or omit to search all.
$include_item_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\BaseItemKind()); // \OpenAPI\Client\Model\BaseItemKind[] | If specified, only results with the specified item types are returned. This allows multiple, comma delimeted.
$exclude_item_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\BaseItemKind()); // \OpenAPI\Client\Model\BaseItemKind[] | If specified, results with these item types are filtered out. This allows multiple, comma delimeted.
$media_types = array('media_types_example'); // string[] | If specified, only results with the specified media types are returned. This allows multiple, comma delimeted.
$parent_id = 'parent_id_example'; // string | If specified, only children of the parent are returned.
$is_movie = True; // bool | Optional filter for movies.
$is_series = True; // bool | Optional filter for series.
$is_news = True; // bool | Optional filter for news.
$is_kids = True; // bool | Optional filter for kids.
$is_sports = True; // bool | Optional filter for sports.
$include_people = true; // bool | Optional filter whether to include people.
$include_media = true; // bool | Optional filter whether to include media.
$include_genres = true; // bool | Optional filter whether to include genres.
$include_studios = true; // bool | Optional filter whether to include studios.
$include_artists = true; // bool | Optional filter whether to include artists.

try {
    $result = $apiInstance->get($search_term, $start_index, $limit, $user_id, $include_item_types, $exclude_item_types, $media_types, $parent_id, $is_movie, $is_series, $is_news, $is_kids, $is_sports, $include_people, $include_media, $include_genres, $include_studios, $include_artists);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search_term** | **string**| The search term to filter on. | |
| **start_index** | **int**| Optional. The record index to start at. All items with a lower index will be dropped from the results. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **user_id** | **string**| Optional. Supply a user id to search within a user&#39;s library or omit to search all. | [optional] |
| **include_item_types** | [**\OpenAPI\Client\Model\BaseItemKind[]**](../Model/\OpenAPI\Client\Model\BaseItemKind.md)| If specified, only results with the specified item types are returned. This allows multiple, comma delimeted. | [optional] |
| **exclude_item_types** | [**\OpenAPI\Client\Model\BaseItemKind[]**](../Model/\OpenAPI\Client\Model\BaseItemKind.md)| If specified, results with these item types are filtered out. This allows multiple, comma delimeted. | [optional] |
| **media_types** | [**string[]**](../Model/string.md)| If specified, only results with the specified media types are returned. This allows multiple, comma delimeted. | [optional] |
| **parent_id** | **string**| If specified, only children of the parent are returned. | [optional] |
| **is_movie** | **bool**| Optional filter for movies. | [optional] |
| **is_series** | **bool**| Optional filter for series. | [optional] |
| **is_news** | **bool**| Optional filter for news. | [optional] |
| **is_kids** | **bool**| Optional filter for kids. | [optional] |
| **is_sports** | **bool**| Optional filter for sports. | [optional] |
| **include_people** | **bool**| Optional filter whether to include people. | [optional] [default to true] |
| **include_media** | **bool**| Optional filter whether to include media. | [optional] [default to true] |
| **include_genres** | **bool**| Optional filter whether to include genres. | [optional] [default to true] |
| **include_studios** | **bool**| Optional filter whether to include studios. | [optional] [default to true] |
| **include_artists** | **bool**| Optional filter whether to include artists. | [optional] [default to true] |

### Return type

[**\OpenAPI\Client\Model\SearchHintResult**](../Model/SearchHintResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
