# OpenAPI\Client\SubtitleApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteSubtitle()**](SubtitleApi.md#deleteSubtitle) | **DELETE** /Videos/{itemId}/Subtitles/{index} | Deletes an external subtitle file. |
| [**downloadRemoteSubtitles()**](SubtitleApi.md#downloadRemoteSubtitles) | **POST** /Items/{itemId}/RemoteSearch/Subtitles/{subtitleId} | Downloads a remote subtitle. |
| [**getFallbackFont()**](SubtitleApi.md#getFallbackFont) | **GET** /FallbackFont/Fonts/{name} | Gets a fallback font file. |
| [**getFallbackFontList()**](SubtitleApi.md#getFallbackFontList) | **GET** /FallbackFont/Fonts | Gets a list of available fallback font files. |
| [**getRemoteSubtitles()**](SubtitleApi.md#getRemoteSubtitles) | **GET** /Providers/Subtitles/Subtitles/{id} | Gets the remote subtitles. |
| [**getSubtitle()**](SubtitleApi.md#getSubtitle) | **GET** /Videos/{routeItemId}/{routeMediaSourceId}/Subtitles/{routeIndex}/Stream.{routeFormat} | Gets subtitles in a specified format. |
| [**getSubtitlePlaylist()**](SubtitleApi.md#getSubtitlePlaylist) | **GET** /Videos/{itemId}/{mediaSourceId}/Subtitles/{index}/subtitles.m3u8 | Gets an HLS subtitle playlist. |
| [**getSubtitleWithTicks()**](SubtitleApi.md#getSubtitleWithTicks) | **GET** /Videos/{routeItemId}/{routeMediaSourceId}/Subtitles/{routeIndex}/{routeStartPositionTicks}/Stream.{routeFormat} | Gets subtitles in a specified format. |
| [**searchRemoteSubtitles()**](SubtitleApi.md#searchRemoteSubtitles) | **GET** /Items/{itemId}/RemoteSearch/Subtitles/{language} | Search remote subtitles. |
| [**uploadSubtitle()**](SubtitleApi.md#uploadSubtitle) | **POST** /Videos/{itemId}/Subtitles | Upload an external subtitle file. |


## `deleteSubtitle()`

```php
deleteSubtitle($item_id, $index)
```

Deletes an external subtitle file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SubtitleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item id.
$index = 56; // int | The index of the subtitle file.

try {
    $apiInstance->deleteSubtitle($item_id, $index);
} catch (Exception $e) {
    echo 'Exception when calling SubtitleApi->deleteSubtitle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **index** | **int**| The index of the subtitle file. | |

### Return type

void (empty response body)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadRemoteSubtitles()`

```php
downloadRemoteSubtitles($item_id, $subtitle_id)
```

Downloads a remote subtitle.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SubtitleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item id.
$subtitle_id = 'subtitle_id_example'; // string | The subtitle id.

try {
    $apiInstance->downloadRemoteSubtitles($item_id, $subtitle_id);
} catch (Exception $e) {
    echo 'Exception when calling SubtitleApi->downloadRemoteSubtitles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **subtitle_id** | **string**| The subtitle id. | |

### Return type

void (empty response body)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFallbackFont()`

```php
getFallbackFont($name): \SplFileObject
```

Gets a fallback font file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SubtitleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of the fallback font file to get.

try {
    $result = $apiInstance->getFallbackFont($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubtitleApi->getFallbackFont: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the fallback font file to get. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `font/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFallbackFontList()`

```php
getFallbackFontList(): \OpenAPI\Client\Model\FontFile[]
```

Gets a list of available fallback font files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SubtitleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getFallbackFontList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubtitleApi->getFallbackFontList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FontFile[]**](../Model/FontFile.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRemoteSubtitles()`

```php
getRemoteSubtitles($id): \SplFileObject
```

Gets the remote subtitles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SubtitleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The item id.

try {
    $result = $apiInstance->getRemoteSubtitles($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubtitleApi->getRemoteSubtitles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The item id. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubtitle()`

```php
getSubtitle($route_item_id, $route_media_source_id, $route_index, $route_format, $item_id, $media_source_id, $index, $format, $end_position_ticks, $copy_timestamps, $add_vtt_time_map, $start_position_ticks): \SplFileObject
```

Gets subtitles in a specified format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubtitleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$route_item_id = 'route_item_id_example'; // string | The (route) item id.
$route_media_source_id = 'route_media_source_id_example'; // string | The (route) media source id.
$route_index = 56; // int | The (route) subtitle stream index.
$route_format = 'route_format_example'; // string | The (route) format of the returned subtitle.
$item_id = 'item_id_example'; // string | The item id.
$media_source_id = 'media_source_id_example'; // string | The media source id.
$index = 56; // int | The subtitle stream index.
$format = 'format_example'; // string | The format of the returned subtitle.
$end_position_ticks = 56; // int | Optional. The end position of the subtitle in ticks.
$copy_timestamps = false; // bool | Optional. Whether to copy the timestamps.
$add_vtt_time_map = false; // bool | Optional. Whether to add a VTT time map.
$start_position_ticks = 0; // int | The start position of the subtitle in ticks.

try {
    $result = $apiInstance->getSubtitle($route_item_id, $route_media_source_id, $route_index, $route_format, $item_id, $media_source_id, $index, $format, $end_position_ticks, $copy_timestamps, $add_vtt_time_map, $start_position_ticks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubtitleApi->getSubtitle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **route_item_id** | **string**| The (route) item id. | |
| **route_media_source_id** | **string**| The (route) media source id. | |
| **route_index** | **int**| The (route) subtitle stream index. | |
| **route_format** | **string**| The (route) format of the returned subtitle. | |
| **item_id** | **string**| The item id. | [optional] |
| **media_source_id** | **string**| The media source id. | [optional] |
| **index** | **int**| The subtitle stream index. | [optional] |
| **format** | **string**| The format of the returned subtitle. | [optional] |
| **end_position_ticks** | **int**| Optional. The end position of the subtitle in ticks. | [optional] |
| **copy_timestamps** | **bool**| Optional. Whether to copy the timestamps. | [optional] [default to false] |
| **add_vtt_time_map** | **bool**| Optional. Whether to add a VTT time map. | [optional] [default to false] |
| **start_position_ticks** | **int**| The start position of the subtitle in ticks. | [optional] [default to 0] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubtitlePlaylist()`

```php
getSubtitlePlaylist($item_id, $index, $media_source_id, $segment_length): \SplFileObject
```

Gets an HLS subtitle playlist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SubtitleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item id.
$index = 56; // int | The subtitle stream index.
$media_source_id = 'media_source_id_example'; // string | The media source id.
$segment_length = 56; // int | The subtitle segment length.

try {
    $result = $apiInstance->getSubtitlePlaylist($item_id, $index, $media_source_id, $segment_length);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubtitleApi->getSubtitlePlaylist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **index** | **int**| The subtitle stream index. | |
| **media_source_id** | **string**| The media source id. | |
| **segment_length** | **int**| The subtitle segment length. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/x-mpegURL`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubtitleWithTicks()`

```php
getSubtitleWithTicks($route_item_id, $route_media_source_id, $route_index, $route_start_position_ticks, $route_format, $item_id, $media_source_id, $index, $start_position_ticks, $format, $end_position_ticks, $copy_timestamps, $add_vtt_time_map): \SplFileObject
```

Gets subtitles in a specified format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubtitleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$route_item_id = 'route_item_id_example'; // string | The (route) item id.
$route_media_source_id = 'route_media_source_id_example'; // string | The (route) media source id.
$route_index = 56; // int | The (route) subtitle stream index.
$route_start_position_ticks = 56; // int | The (route) start position of the subtitle in ticks.
$route_format = 'route_format_example'; // string | The (route) format of the returned subtitle.
$item_id = 'item_id_example'; // string | The item id.
$media_source_id = 'media_source_id_example'; // string | The media source id.
$index = 56; // int | The subtitle stream index.
$start_position_ticks = 56; // int | The start position of the subtitle in ticks.
$format = 'format_example'; // string | The format of the returned subtitle.
$end_position_ticks = 56; // int | Optional. The end position of the subtitle in ticks.
$copy_timestamps = false; // bool | Optional. Whether to copy the timestamps.
$add_vtt_time_map = false; // bool | Optional. Whether to add a VTT time map.

try {
    $result = $apiInstance->getSubtitleWithTicks($route_item_id, $route_media_source_id, $route_index, $route_start_position_ticks, $route_format, $item_id, $media_source_id, $index, $start_position_ticks, $format, $end_position_ticks, $copy_timestamps, $add_vtt_time_map);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubtitleApi->getSubtitleWithTicks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **route_item_id** | **string**| The (route) item id. | |
| **route_media_source_id** | **string**| The (route) media source id. | |
| **route_index** | **int**| The (route) subtitle stream index. | |
| **route_start_position_ticks** | **int**| The (route) start position of the subtitle in ticks. | |
| **route_format** | **string**| The (route) format of the returned subtitle. | |
| **item_id** | **string**| The item id. | [optional] |
| **media_source_id** | **string**| The media source id. | [optional] |
| **index** | **int**| The subtitle stream index. | [optional] |
| **start_position_ticks** | **int**| The start position of the subtitle in ticks. | [optional] |
| **format** | **string**| The format of the returned subtitle. | [optional] |
| **end_position_ticks** | **int**| Optional. The end position of the subtitle in ticks. | [optional] |
| **copy_timestamps** | **bool**| Optional. Whether to copy the timestamps. | [optional] [default to false] |
| **add_vtt_time_map** | **bool**| Optional. Whether to add a VTT time map. | [optional] [default to false] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchRemoteSubtitles()`

```php
searchRemoteSubtitles($item_id, $language, $is_perfect_match): \OpenAPI\Client\Model\RemoteSubtitleInfo[]
```

Search remote subtitles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SubtitleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item id.
$language = 'language_example'; // string | The language of the subtitles.
$is_perfect_match = True; // bool | Optional. Only show subtitles which are a perfect match.

try {
    $result = $apiInstance->searchRemoteSubtitles($item_id, $language, $is_perfect_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubtitleApi->searchRemoteSubtitles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **language** | **string**| The language of the subtitles. | |
| **is_perfect_match** | **bool**| Optional. Only show subtitles which are a perfect match. | [optional] |

### Return type

[**\OpenAPI\Client\Model\RemoteSubtitleInfo[]**](../Model/RemoteSubtitleInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadSubtitle()`

```php
uploadSubtitle($item_id, $upload_subtitle_request)
```

Upload an external subtitle file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SubtitleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item the subtitle belongs to.
$upload_subtitle_request = new \OpenAPI\Client\Model\UploadSubtitleRequest(); // \OpenAPI\Client\Model\UploadSubtitleRequest | The request body.

try {
    $apiInstance->uploadSubtitle($item_id, $upload_subtitle_request);
} catch (Exception $e) {
    echo 'Exception when calling SubtitleApi->uploadSubtitle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item the subtitle belongs to. | |
| **upload_subtitle_request** | [**\OpenAPI\Client\Model\UploadSubtitleRequest**](../Model/UploadSubtitleRequest.md)| The request body. | |

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
