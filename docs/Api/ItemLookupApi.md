# OpenAPI\Client\ItemLookupApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applySearchCriteria()**](ItemLookupApi.md#applySearchCriteria) | **POST** /Items/RemoteSearch/Apply/{itemId} | Applies search criteria to an item and refreshes metadata. |
| [**getBookRemoteSearchResults()**](ItemLookupApi.md#getBookRemoteSearchResults) | **POST** /Items/RemoteSearch/Book | Get book remote search. |
| [**getBoxSetRemoteSearchResults()**](ItemLookupApi.md#getBoxSetRemoteSearchResults) | **POST** /Items/RemoteSearch/BoxSet | Get box set remote search. |
| [**getExternalIdInfos()**](ItemLookupApi.md#getExternalIdInfos) | **GET** /Items/{itemId}/ExternalIdInfos | Get the item&#39;s external id info. |
| [**getMovieRemoteSearchResults()**](ItemLookupApi.md#getMovieRemoteSearchResults) | **POST** /Items/RemoteSearch/Movie | Get movie remote search. |
| [**getMusicAlbumRemoteSearchResults()**](ItemLookupApi.md#getMusicAlbumRemoteSearchResults) | **POST** /Items/RemoteSearch/MusicAlbum | Get music album remote search. |
| [**getMusicArtistRemoteSearchResults()**](ItemLookupApi.md#getMusicArtistRemoteSearchResults) | **POST** /Items/RemoteSearch/MusicArtist | Get music artist remote search. |
| [**getMusicVideoRemoteSearchResults()**](ItemLookupApi.md#getMusicVideoRemoteSearchResults) | **POST** /Items/RemoteSearch/MusicVideo | Get music video remote search. |
| [**getPersonRemoteSearchResults()**](ItemLookupApi.md#getPersonRemoteSearchResults) | **POST** /Items/RemoteSearch/Person | Get person remote search. |
| [**getSeriesRemoteSearchResults()**](ItemLookupApi.md#getSeriesRemoteSearchResults) | **POST** /Items/RemoteSearch/Series | Get series remote search. |
| [**getTrailerRemoteSearchResults()**](ItemLookupApi.md#getTrailerRemoteSearchResults) | **POST** /Items/RemoteSearch/Trailer | Get trailer remote search. |


## `applySearchCriteria()`

```php
applySearchCriteria($item_id, $apply_search_criteria_request, $replace_all_images)
```

Applies search criteria to an item and refreshes metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemLookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | Item id.
$apply_search_criteria_request = new \OpenAPI\Client\Model\ApplySearchCriteriaRequest(); // \OpenAPI\Client\Model\ApplySearchCriteriaRequest | The remote search result.
$replace_all_images = true; // bool | Optional. Whether or not to replace all images. Default: True.

try {
    $apiInstance->applySearchCriteria($item_id, $apply_search_criteria_request, $replace_all_images);
} catch (Exception $e) {
    echo 'Exception when calling ItemLookupApi->applySearchCriteria: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| Item id. | |
| **apply_search_criteria_request** | [**\OpenAPI\Client\Model\ApplySearchCriteriaRequest**](../Model/ApplySearchCriteriaRequest.md)| The remote search result. | |
| **replace_all_images** | **bool**| Optional. Whether or not to replace all images. Default: True. | [optional] [default to true] |

### Return type

void (empty response body)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBookRemoteSearchResults()`

```php
getBookRemoteSearchResults($get_book_remote_search_results_request): \OpenAPI\Client\Model\RemoteSearchResult[]
```

Get book remote search.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemLookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_book_remote_search_results_request = new \OpenAPI\Client\Model\GetBookRemoteSearchResultsRequest(); // \OpenAPI\Client\Model\GetBookRemoteSearchResultsRequest | Remote search query.

try {
    $result = $apiInstance->getBookRemoteSearchResults($get_book_remote_search_results_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemLookupApi->getBookRemoteSearchResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_book_remote_search_results_request** | [**\OpenAPI\Client\Model\GetBookRemoteSearchResultsRequest**](../Model/GetBookRemoteSearchResultsRequest.md)| Remote search query. | |

### Return type

[**\OpenAPI\Client\Model\RemoteSearchResult[]**](../Model/RemoteSearchResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBoxSetRemoteSearchResults()`

```php
getBoxSetRemoteSearchResults($get_box_set_remote_search_results_request): \OpenAPI\Client\Model\RemoteSearchResult[]
```

Get box set remote search.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemLookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_box_set_remote_search_results_request = new \OpenAPI\Client\Model\GetBoxSetRemoteSearchResultsRequest(); // \OpenAPI\Client\Model\GetBoxSetRemoteSearchResultsRequest | Remote search query.

try {
    $result = $apiInstance->getBoxSetRemoteSearchResults($get_box_set_remote_search_results_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemLookupApi->getBoxSetRemoteSearchResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_box_set_remote_search_results_request** | [**\OpenAPI\Client\Model\GetBoxSetRemoteSearchResultsRequest**](../Model/GetBoxSetRemoteSearchResultsRequest.md)| Remote search query. | |

### Return type

[**\OpenAPI\Client\Model\RemoteSearchResult[]**](../Model/RemoteSearchResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExternalIdInfos()`

```php
getExternalIdInfos($item_id): \OpenAPI\Client\Model\ExternalIdInfo[]
```

Get the item's external id info.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemLookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | Item id.

try {
    $result = $apiInstance->getExternalIdInfos($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemLookupApi->getExternalIdInfos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| Item id. | |

### Return type

[**\OpenAPI\Client\Model\ExternalIdInfo[]**](../Model/ExternalIdInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMovieRemoteSearchResults()`

```php
getMovieRemoteSearchResults($get_movie_remote_search_results_request): \OpenAPI\Client\Model\RemoteSearchResult[]
```

Get movie remote search.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemLookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_movie_remote_search_results_request = new \OpenAPI\Client\Model\GetMovieRemoteSearchResultsRequest(); // \OpenAPI\Client\Model\GetMovieRemoteSearchResultsRequest | Remote search query.

try {
    $result = $apiInstance->getMovieRemoteSearchResults($get_movie_remote_search_results_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemLookupApi->getMovieRemoteSearchResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_movie_remote_search_results_request** | [**\OpenAPI\Client\Model\GetMovieRemoteSearchResultsRequest**](../Model/GetMovieRemoteSearchResultsRequest.md)| Remote search query. | |

### Return type

[**\OpenAPI\Client\Model\RemoteSearchResult[]**](../Model/RemoteSearchResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMusicAlbumRemoteSearchResults()`

```php
getMusicAlbumRemoteSearchResults($get_music_album_remote_search_results_request): \OpenAPI\Client\Model\RemoteSearchResult[]
```

Get music album remote search.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemLookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_music_album_remote_search_results_request = new \OpenAPI\Client\Model\GetMusicAlbumRemoteSearchResultsRequest(); // \OpenAPI\Client\Model\GetMusicAlbumRemoteSearchResultsRequest | Remote search query.

try {
    $result = $apiInstance->getMusicAlbumRemoteSearchResults($get_music_album_remote_search_results_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemLookupApi->getMusicAlbumRemoteSearchResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_music_album_remote_search_results_request** | [**\OpenAPI\Client\Model\GetMusicAlbumRemoteSearchResultsRequest**](../Model/GetMusicAlbumRemoteSearchResultsRequest.md)| Remote search query. | |

### Return type

[**\OpenAPI\Client\Model\RemoteSearchResult[]**](../Model/RemoteSearchResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMusicArtistRemoteSearchResults()`

```php
getMusicArtistRemoteSearchResults($get_music_artist_remote_search_results_request): \OpenAPI\Client\Model\RemoteSearchResult[]
```

Get music artist remote search.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemLookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_music_artist_remote_search_results_request = new \OpenAPI\Client\Model\GetMusicArtistRemoteSearchResultsRequest(); // \OpenAPI\Client\Model\GetMusicArtistRemoteSearchResultsRequest | Remote search query.

try {
    $result = $apiInstance->getMusicArtistRemoteSearchResults($get_music_artist_remote_search_results_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemLookupApi->getMusicArtistRemoteSearchResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_music_artist_remote_search_results_request** | [**\OpenAPI\Client\Model\GetMusicArtistRemoteSearchResultsRequest**](../Model/GetMusicArtistRemoteSearchResultsRequest.md)| Remote search query. | |

### Return type

[**\OpenAPI\Client\Model\RemoteSearchResult[]**](../Model/RemoteSearchResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMusicVideoRemoteSearchResults()`

```php
getMusicVideoRemoteSearchResults($get_music_video_remote_search_results_request): \OpenAPI\Client\Model\RemoteSearchResult[]
```

Get music video remote search.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemLookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_music_video_remote_search_results_request = new \OpenAPI\Client\Model\GetMusicVideoRemoteSearchResultsRequest(); // \OpenAPI\Client\Model\GetMusicVideoRemoteSearchResultsRequest | Remote search query.

try {
    $result = $apiInstance->getMusicVideoRemoteSearchResults($get_music_video_remote_search_results_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemLookupApi->getMusicVideoRemoteSearchResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_music_video_remote_search_results_request** | [**\OpenAPI\Client\Model\GetMusicVideoRemoteSearchResultsRequest**](../Model/GetMusicVideoRemoteSearchResultsRequest.md)| Remote search query. | |

### Return type

[**\OpenAPI\Client\Model\RemoteSearchResult[]**](../Model/RemoteSearchResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonRemoteSearchResults()`

```php
getPersonRemoteSearchResults($get_person_remote_search_results_request): \OpenAPI\Client\Model\RemoteSearchResult[]
```

Get person remote search.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemLookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_person_remote_search_results_request = new \OpenAPI\Client\Model\GetPersonRemoteSearchResultsRequest(); // \OpenAPI\Client\Model\GetPersonRemoteSearchResultsRequest | Remote search query.

try {
    $result = $apiInstance->getPersonRemoteSearchResults($get_person_remote_search_results_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemLookupApi->getPersonRemoteSearchResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_person_remote_search_results_request** | [**\OpenAPI\Client\Model\GetPersonRemoteSearchResultsRequest**](../Model/GetPersonRemoteSearchResultsRequest.md)| Remote search query. | |

### Return type

[**\OpenAPI\Client\Model\RemoteSearchResult[]**](../Model/RemoteSearchResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSeriesRemoteSearchResults()`

```php
getSeriesRemoteSearchResults($get_series_remote_search_results_request): \OpenAPI\Client\Model\RemoteSearchResult[]
```

Get series remote search.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemLookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_series_remote_search_results_request = new \OpenAPI\Client\Model\GetSeriesRemoteSearchResultsRequest(); // \OpenAPI\Client\Model\GetSeriesRemoteSearchResultsRequest | Remote search query.

try {
    $result = $apiInstance->getSeriesRemoteSearchResults($get_series_remote_search_results_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemLookupApi->getSeriesRemoteSearchResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_series_remote_search_results_request** | [**\OpenAPI\Client\Model\GetSeriesRemoteSearchResultsRequest**](../Model/GetSeriesRemoteSearchResultsRequest.md)| Remote search query. | |

### Return type

[**\OpenAPI\Client\Model\RemoteSearchResult[]**](../Model/RemoteSearchResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrailerRemoteSearchResults()`

```php
getTrailerRemoteSearchResults($get_trailer_remote_search_results_request): \OpenAPI\Client\Model\RemoteSearchResult[]
```

Get trailer remote search.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemLookupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_trailer_remote_search_results_request = new \OpenAPI\Client\Model\GetTrailerRemoteSearchResultsRequest(); // \OpenAPI\Client\Model\GetTrailerRemoteSearchResultsRequest | Remote search query.

try {
    $result = $apiInstance->getTrailerRemoteSearchResults($get_trailer_remote_search_results_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemLookupApi->getTrailerRemoteSearchResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_trailer_remote_search_results_request** | [**\OpenAPI\Client\Model\GetTrailerRemoteSearchResultsRequest**](../Model/GetTrailerRemoteSearchResultsRequest.md)| Remote search query. | |

### Return type

[**\OpenAPI\Client\Model\RemoteSearchResult[]**](../Model/RemoteSearchResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
