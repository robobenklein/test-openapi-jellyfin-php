# OpenAPI\Client\MediaInfoApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**closeLiveStream()**](MediaInfoApi.md#closeLiveStream) | **POST** /LiveStreams/Close | Closes a media source. |
| [**getBitrateTestBytes()**](MediaInfoApi.md#getBitrateTestBytes) | **GET** /Playback/BitrateTest | Tests the network with a request with the size of the bitrate. |
| [**getPlaybackInfo()**](MediaInfoApi.md#getPlaybackInfo) | **GET** /Items/{itemId}/PlaybackInfo | Gets live playback media info for an item. |
| [**getPostedPlaybackInfo()**](MediaInfoApi.md#getPostedPlaybackInfo) | **POST** /Items/{itemId}/PlaybackInfo | Gets live playback media info for an item. |
| [**openLiveStream()**](MediaInfoApi.md#openLiveStream) | **POST** /LiveStreams/Open | Opens a media source. |


## `closeLiveStream()`

```php
closeLiveStream($live_stream_id)
```

Closes a media source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MediaInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$live_stream_id = 'live_stream_id_example'; // string | The livestream id.

try {
    $apiInstance->closeLiveStream($live_stream_id);
} catch (Exception $e) {
    echo 'Exception when calling MediaInfoApi->closeLiveStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **live_stream_id** | **string**| The livestream id. | |

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

## `getBitrateTestBytes()`

```php
getBitrateTestBytes($size): \SplFileObject
```

Tests the network with a request with the size of the bitrate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MediaInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$size = 102400; // int | The bitrate. Defaults to 102400.

try {
    $result = $apiInstance->getBitrateTestBytes($size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaInfoApi->getBitrateTestBytes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **size** | **int**| The bitrate. Defaults to 102400. | [optional] [default to 102400] |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlaybackInfo()`

```php
getPlaybackInfo($item_id, $user_id): \OpenAPI\Client\Model\PlaybackInfoResponse
```

Gets live playback media info for an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MediaInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item id.
$user_id = 'user_id_example'; // string | The user id.

try {
    $result = $apiInstance->getPlaybackInfo($item_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaInfoApi->getPlaybackInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **user_id** | **string**| The user id. | |

### Return type

[**\OpenAPI\Client\Model\PlaybackInfoResponse**](../Model/PlaybackInfoResponse.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPostedPlaybackInfo()`

```php
getPostedPlaybackInfo($item_id, $user_id, $max_streaming_bitrate, $start_time_ticks, $audio_stream_index, $subtitle_stream_index, $max_audio_channels, $media_source_id, $live_stream_id, $auto_open_live_stream, $enable_direct_play, $enable_direct_stream, $enable_transcoding, $allow_video_stream_copy, $allow_audio_stream_copy, $get_posted_playback_info_request): \OpenAPI\Client\Model\PlaybackInfoResponse
```

Gets live playback media info for an item.

For backwards compatibility parameters can be sent via Query or Body, with Query having higher precedence.  Query parameters are obsolete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MediaInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item id.
$user_id = 'user_id_example'; // string | The user id.
$max_streaming_bitrate = 56; // int | The maximum streaming bitrate.
$start_time_ticks = 56; // int | The start time in ticks.
$audio_stream_index = 56; // int | The audio stream index.
$subtitle_stream_index = 56; // int | The subtitle stream index.
$max_audio_channels = 56; // int | The maximum number of audio channels.
$media_source_id = 'media_source_id_example'; // string | The media source id.
$live_stream_id = 'live_stream_id_example'; // string | The livestream id.
$auto_open_live_stream = True; // bool | Whether to auto open the livestream.
$enable_direct_play = True; // bool | Whether to enable direct play. Default: true.
$enable_direct_stream = True; // bool | Whether to enable direct stream. Default: true.
$enable_transcoding = True; // bool | Whether to enable transcoding. Default: true.
$allow_video_stream_copy = True; // bool | Whether to allow to copy the video stream. Default: true.
$allow_audio_stream_copy = True; // bool | Whether to allow to copy the audio stream. Default: true.
$get_posted_playback_info_request = new \OpenAPI\Client\Model\GetPostedPlaybackInfoRequest(); // \OpenAPI\Client\Model\GetPostedPlaybackInfoRequest | The playback info.

try {
    $result = $apiInstance->getPostedPlaybackInfo($item_id, $user_id, $max_streaming_bitrate, $start_time_ticks, $audio_stream_index, $subtitle_stream_index, $max_audio_channels, $media_source_id, $live_stream_id, $auto_open_live_stream, $enable_direct_play, $enable_direct_stream, $enable_transcoding, $allow_video_stream_copy, $allow_audio_stream_copy, $get_posted_playback_info_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaInfoApi->getPostedPlaybackInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **user_id** | **string**| The user id. | [optional] |
| **max_streaming_bitrate** | **int**| The maximum streaming bitrate. | [optional] |
| **start_time_ticks** | **int**| The start time in ticks. | [optional] |
| **audio_stream_index** | **int**| The audio stream index. | [optional] |
| **subtitle_stream_index** | **int**| The subtitle stream index. | [optional] |
| **max_audio_channels** | **int**| The maximum number of audio channels. | [optional] |
| **media_source_id** | **string**| The media source id. | [optional] |
| **live_stream_id** | **string**| The livestream id. | [optional] |
| **auto_open_live_stream** | **bool**| Whether to auto open the livestream. | [optional] |
| **enable_direct_play** | **bool**| Whether to enable direct play. Default: true. | [optional] |
| **enable_direct_stream** | **bool**| Whether to enable direct stream. Default: true. | [optional] |
| **enable_transcoding** | **bool**| Whether to enable transcoding. Default: true. | [optional] |
| **allow_video_stream_copy** | **bool**| Whether to allow to copy the video stream. Default: true. | [optional] |
| **allow_audio_stream_copy** | **bool**| Whether to allow to copy the audio stream. Default: true. | [optional] |
| **get_posted_playback_info_request** | [**\OpenAPI\Client\Model\GetPostedPlaybackInfoRequest**](../Model/GetPostedPlaybackInfoRequest.md)| The playback info. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PlaybackInfoResponse**](../Model/PlaybackInfoResponse.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openLiveStream()`

```php
openLiveStream($open_token, $user_id, $play_session_id, $max_streaming_bitrate, $start_time_ticks, $audio_stream_index, $subtitle_stream_index, $max_audio_channels, $item_id, $enable_direct_play, $enable_direct_stream, $open_live_stream_request): \OpenAPI\Client\Model\LiveStreamResponse
```

Opens a media source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MediaInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$open_token = 'open_token_example'; // string | The open token.
$user_id = 'user_id_example'; // string | The user id.
$play_session_id = 'play_session_id_example'; // string | The play session id.
$max_streaming_bitrate = 56; // int | The maximum streaming bitrate.
$start_time_ticks = 56; // int | The start time in ticks.
$audio_stream_index = 56; // int | The audio stream index.
$subtitle_stream_index = 56; // int | The subtitle stream index.
$max_audio_channels = 56; // int | The maximum number of audio channels.
$item_id = 'item_id_example'; // string | The item id.
$enable_direct_play = True; // bool | Whether to enable direct play. Default: true.
$enable_direct_stream = True; // bool | Whether to enable direct stream. Default: true.
$open_live_stream_request = new \OpenAPI\Client\Model\OpenLiveStreamRequest(); // \OpenAPI\Client\Model\OpenLiveStreamRequest | The open live stream dto.

try {
    $result = $apiInstance->openLiveStream($open_token, $user_id, $play_session_id, $max_streaming_bitrate, $start_time_ticks, $audio_stream_index, $subtitle_stream_index, $max_audio_channels, $item_id, $enable_direct_play, $enable_direct_stream, $open_live_stream_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaInfoApi->openLiveStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **open_token** | **string**| The open token. | [optional] |
| **user_id** | **string**| The user id. | [optional] |
| **play_session_id** | **string**| The play session id. | [optional] |
| **max_streaming_bitrate** | **int**| The maximum streaming bitrate. | [optional] |
| **start_time_ticks** | **int**| The start time in ticks. | [optional] |
| **audio_stream_index** | **int**| The audio stream index. | [optional] |
| **subtitle_stream_index** | **int**| The subtitle stream index. | [optional] |
| **max_audio_channels** | **int**| The maximum number of audio channels. | [optional] |
| **item_id** | **string**| The item id. | [optional] |
| **enable_direct_play** | **bool**| Whether to enable direct play. Default: true. | [optional] |
| **enable_direct_stream** | **bool**| Whether to enable direct stream. Default: true. | [optional] |
| **open_live_stream_request** | [**\OpenAPI\Client\Model\OpenLiveStreamRequest**](../Model/OpenLiveStreamRequest.md)| The open live stream dto. | [optional] |

### Return type

[**\OpenAPI\Client\Model\LiveStreamResponse**](../Model/LiveStreamResponse.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
