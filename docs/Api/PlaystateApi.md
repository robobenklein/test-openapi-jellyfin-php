# OpenAPI\Client\PlaystateApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**markPlayedItem()**](PlaystateApi.md#markPlayedItem) | **POST** /Users/{userId}/PlayedItems/{itemId} | Marks an item as played for user. |
| [**markUnplayedItem()**](PlaystateApi.md#markUnplayedItem) | **DELETE** /Users/{userId}/PlayedItems/{itemId} | Marks an item as unplayed for user. |
| [**onPlaybackProgress()**](PlaystateApi.md#onPlaybackProgress) | **POST** /Users/{userId}/PlayingItems/{itemId}/Progress | Reports a user&#39;s playback progress. |
| [**onPlaybackStart()**](PlaystateApi.md#onPlaybackStart) | **POST** /Users/{userId}/PlayingItems/{itemId} | Reports that a user has begun playing an item. |
| [**onPlaybackStopped()**](PlaystateApi.md#onPlaybackStopped) | **DELETE** /Users/{userId}/PlayingItems/{itemId} | Reports that a user has stopped playing an item. |
| [**pingPlaybackSession()**](PlaystateApi.md#pingPlaybackSession) | **POST** /Sessions/Playing/Ping | Pings a playback session. |
| [**reportPlaybackProgress()**](PlaystateApi.md#reportPlaybackProgress) | **POST** /Sessions/Playing/Progress | Reports playback progress within a session. |
| [**reportPlaybackStart()**](PlaystateApi.md#reportPlaybackStart) | **POST** /Sessions/Playing | Reports playback has started within a session. |
| [**reportPlaybackStopped()**](PlaystateApi.md#reportPlaybackStopped) | **POST** /Sessions/Playing/Stopped | Reports playback has stopped within a session. |


## `markPlayedItem()`

```php
markPlayedItem($user_id, $item_id, $date_played): \OpenAPI\Client\Model\UserItemDataDto
```

Marks an item as played for user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaystateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User id.
$item_id = 'item_id_example'; // string | Item id.
$date_played = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional. The date the item was played.

try {
    $result = $apiInstance->markPlayedItem($user_id, $item_id, $date_played);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaystateApi->markPlayedItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User id. | |
| **item_id** | **string**| Item id. | |
| **date_played** | **\DateTime**| Optional. The date the item was played. | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserItemDataDto**](../Model/UserItemDataDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markUnplayedItem()`

```php
markUnplayedItem($user_id, $item_id): \OpenAPI\Client\Model\UserItemDataDto
```

Marks an item as unplayed for user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaystateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User id.
$item_id = 'item_id_example'; // string | Item id.

try {
    $result = $apiInstance->markUnplayedItem($user_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaystateApi->markUnplayedItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User id. | |
| **item_id** | **string**| Item id. | |

### Return type

[**\OpenAPI\Client\Model\UserItemDataDto**](../Model/UserItemDataDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onPlaybackProgress()`

```php
onPlaybackProgress($user_id, $item_id, $media_source_id, $position_ticks, $audio_stream_index, $subtitle_stream_index, $volume_level, $play_method, $live_stream_id, $play_session_id, $repeat_mode, $is_paused, $is_muted)
```

Reports a user's playback progress.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaystateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User id.
$item_id = 'item_id_example'; // string | Item id.
$media_source_id = 'media_source_id_example'; // string | The id of the MediaSource.
$position_ticks = 56; // int | Optional. The current position, in ticks. 1 tick = 10000 ms.
$audio_stream_index = 56; // int | The audio stream index.
$subtitle_stream_index = 56; // int | The subtitle stream index.
$volume_level = 56; // int | Scale of 0-100.
$play_method = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PlayMethod(); // \OpenAPI\Client\Model\PlayMethod | The play method.
$live_stream_id = 'live_stream_id_example'; // string | The live stream id.
$play_session_id = 'play_session_id_example'; // string | The play session id.
$repeat_mode = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\RepeatMode(); // \OpenAPI\Client\Model\RepeatMode | The repeat mode.
$is_paused = false; // bool | Indicates if the player is paused.
$is_muted = false; // bool | Indicates if the player is muted.

try {
    $apiInstance->onPlaybackProgress($user_id, $item_id, $media_source_id, $position_ticks, $audio_stream_index, $subtitle_stream_index, $volume_level, $play_method, $live_stream_id, $play_session_id, $repeat_mode, $is_paused, $is_muted);
} catch (Exception $e) {
    echo 'Exception when calling PlaystateApi->onPlaybackProgress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User id. | |
| **item_id** | **string**| Item id. | |
| **media_source_id** | **string**| The id of the MediaSource. | [optional] |
| **position_ticks** | **int**| Optional. The current position, in ticks. 1 tick &#x3D; 10000 ms. | [optional] |
| **audio_stream_index** | **int**| The audio stream index. | [optional] |
| **subtitle_stream_index** | **int**| The subtitle stream index. | [optional] |
| **volume_level** | **int**| Scale of 0-100. | [optional] |
| **play_method** | [**\OpenAPI\Client\Model\PlayMethod**](../Model/.md)| The play method. | [optional] |
| **live_stream_id** | **string**| The live stream id. | [optional] |
| **play_session_id** | **string**| The play session id. | [optional] |
| **repeat_mode** | [**\OpenAPI\Client\Model\RepeatMode**](../Model/.md)| The repeat mode. | [optional] |
| **is_paused** | **bool**| Indicates if the player is paused. | [optional] [default to false] |
| **is_muted** | **bool**| Indicates if the player is muted. | [optional] [default to false] |

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

## `onPlaybackStart()`

```php
onPlaybackStart($user_id, $item_id, $media_source_id, $audio_stream_index, $subtitle_stream_index, $play_method, $live_stream_id, $play_session_id, $can_seek)
```

Reports that a user has begun playing an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaystateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User id.
$item_id = 'item_id_example'; // string | Item id.
$media_source_id = 'media_source_id_example'; // string | The id of the MediaSource.
$audio_stream_index = 56; // int | The audio stream index.
$subtitle_stream_index = 56; // int | The subtitle stream index.
$play_method = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PlayMethod(); // \OpenAPI\Client\Model\PlayMethod | The play method.
$live_stream_id = 'live_stream_id_example'; // string | The live stream id.
$play_session_id = 'play_session_id_example'; // string | The play session id.
$can_seek = false; // bool | Indicates if the client can seek.

try {
    $apiInstance->onPlaybackStart($user_id, $item_id, $media_source_id, $audio_stream_index, $subtitle_stream_index, $play_method, $live_stream_id, $play_session_id, $can_seek);
} catch (Exception $e) {
    echo 'Exception when calling PlaystateApi->onPlaybackStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User id. | |
| **item_id** | **string**| Item id. | |
| **media_source_id** | **string**| The id of the MediaSource. | [optional] |
| **audio_stream_index** | **int**| The audio stream index. | [optional] |
| **subtitle_stream_index** | **int**| The subtitle stream index. | [optional] |
| **play_method** | [**\OpenAPI\Client\Model\PlayMethod**](../Model/.md)| The play method. | [optional] |
| **live_stream_id** | **string**| The live stream id. | [optional] |
| **play_session_id** | **string**| The play session id. | [optional] |
| **can_seek** | **bool**| Indicates if the client can seek. | [optional] [default to false] |

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

## `onPlaybackStopped()`

```php
onPlaybackStopped($user_id, $item_id, $media_source_id, $next_media_type, $position_ticks, $live_stream_id, $play_session_id)
```

Reports that a user has stopped playing an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaystateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User id.
$item_id = 'item_id_example'; // string | Item id.
$media_source_id = 'media_source_id_example'; // string | The id of the MediaSource.
$next_media_type = 'next_media_type_example'; // string | The next media type that will play.
$position_ticks = 56; // int | Optional. The position, in ticks, where playback stopped. 1 tick = 10000 ms.
$live_stream_id = 'live_stream_id_example'; // string | The live stream id.
$play_session_id = 'play_session_id_example'; // string | The play session id.

try {
    $apiInstance->onPlaybackStopped($user_id, $item_id, $media_source_id, $next_media_type, $position_ticks, $live_stream_id, $play_session_id);
} catch (Exception $e) {
    echo 'Exception when calling PlaystateApi->onPlaybackStopped: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User id. | |
| **item_id** | **string**| Item id. | |
| **media_source_id** | **string**| The id of the MediaSource. | [optional] |
| **next_media_type** | **string**| The next media type that will play. | [optional] |
| **position_ticks** | **int**| Optional. The position, in ticks, where playback stopped. 1 tick &#x3D; 10000 ms. | [optional] |
| **live_stream_id** | **string**| The live stream id. | [optional] |
| **play_session_id** | **string**| The play session id. | [optional] |

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

## `pingPlaybackSession()`

```php
pingPlaybackSession($play_session_id)
```

Pings a playback session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaystateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$play_session_id = 'play_session_id_example'; // string | Playback session id.

try {
    $apiInstance->pingPlaybackSession($play_session_id);
} catch (Exception $e) {
    echo 'Exception when calling PlaystateApi->pingPlaybackSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **play_session_id** | **string**| Playback session id. | |

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

## `reportPlaybackProgress()`

```php
reportPlaybackProgress($report_playback_progress_request)
```

Reports playback progress within a session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaystateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_playback_progress_request = new \OpenAPI\Client\Model\ReportPlaybackProgressRequest(); // \OpenAPI\Client\Model\ReportPlaybackProgressRequest | The playback progress info.

try {
    $apiInstance->reportPlaybackProgress($report_playback_progress_request);
} catch (Exception $e) {
    echo 'Exception when calling PlaystateApi->reportPlaybackProgress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_playback_progress_request** | [**\OpenAPI\Client\Model\ReportPlaybackProgressRequest**](../Model/ReportPlaybackProgressRequest.md)| The playback progress info. | [optional] |

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

## `reportPlaybackStart()`

```php
reportPlaybackStart($report_playback_start_request)
```

Reports playback has started within a session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaystateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_playback_start_request = new \OpenAPI\Client\Model\ReportPlaybackStartRequest(); // \OpenAPI\Client\Model\ReportPlaybackStartRequest | The playback start info.

try {
    $apiInstance->reportPlaybackStart($report_playback_start_request);
} catch (Exception $e) {
    echo 'Exception when calling PlaystateApi->reportPlaybackStart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_playback_start_request** | [**\OpenAPI\Client\Model\ReportPlaybackStartRequest**](../Model/ReportPlaybackStartRequest.md)| The playback start info. | [optional] |

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

## `reportPlaybackStopped()`

```php
reportPlaybackStopped($report_playback_stopped_request)
```

Reports playback has stopped within a session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaystateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_playback_stopped_request = new \OpenAPI\Client\Model\ReportPlaybackStoppedRequest(); // \OpenAPI\Client\Model\ReportPlaybackStoppedRequest | The playback stop info.

try {
    $apiInstance->reportPlaybackStopped($report_playback_stopped_request);
} catch (Exception $e) {
    echo 'Exception when calling PlaystateApi->reportPlaybackStopped: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_playback_stopped_request** | [**\OpenAPI\Client\Model\ReportPlaybackStoppedRequest**](../Model/ReportPlaybackStoppedRequest.md)| The playback stop info. | [optional] |

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
