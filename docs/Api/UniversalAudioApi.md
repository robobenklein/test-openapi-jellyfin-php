# OpenAPI\Client\UniversalAudioApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUniversalAudioStream()**](UniversalAudioApi.md#getUniversalAudioStream) | **GET** /Audio/{itemId}/universal | Gets an audio stream. |
| [**headUniversalAudioStream()**](UniversalAudioApi.md#headUniversalAudioStream) | **HEAD** /Audio/{itemId}/universal | Gets an audio stream. |


## `getUniversalAudioStream()`

```php
getUniversalAudioStream($item_id, $container, $media_source_id, $device_id, $user_id, $audio_codec, $max_audio_channels, $transcoding_audio_channels, $max_streaming_bitrate, $audio_bit_rate, $start_time_ticks, $transcoding_container, $transcoding_protocol, $max_audio_sample_rate, $max_audio_bit_depth, $enable_remote_media, $break_on_non_key_frames, $enable_redirection): \SplFileObject
```

Gets an audio stream.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UniversalAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item id.
$container = array('container_example'); // string[] | Optional. The audio container.
$media_source_id = 'media_source_id_example'; // string | The media version id, if playing an alternate version.
$device_id = 'device_id_example'; // string | The device id of the client requesting. Used to stop encoding processes when needed.
$user_id = 'user_id_example'; // string | Optional. The user id.
$audio_codec = 'audio_codec_example'; // string | Optional. The audio codec to transcode to.
$max_audio_channels = 56; // int | Optional. The maximum number of audio channels.
$transcoding_audio_channels = 56; // int | Optional. The number of how many audio channels to transcode to.
$max_streaming_bitrate = 56; // int | Optional. The maximum streaming bitrate.
$audio_bit_rate = 56; // int | Optional. Specify an audio bitrate to encode to, e.g. 128000. If omitted this will be left to encoder defaults.
$start_time_ticks = 56; // int | Optional. Specify a starting offset, in ticks. 1 tick = 10000 ms.
$transcoding_container = 'transcoding_container_example'; // string | Optional. The container to transcode to.
$transcoding_protocol = 'transcoding_protocol_example'; // string | Optional. The transcoding protocol.
$max_audio_sample_rate = 56; // int | Optional. The maximum audio sample rate.
$max_audio_bit_depth = 56; // int | Optional. The maximum audio bit depth.
$enable_remote_media = True; // bool | Optional. Whether to enable remote media.
$break_on_non_key_frames = false; // bool | Optional. Whether to break on non key frames.
$enable_redirection = true; // bool | Whether to enable redirection. Defaults to true.

try {
    $result = $apiInstance->getUniversalAudioStream($item_id, $container, $media_source_id, $device_id, $user_id, $audio_codec, $max_audio_channels, $transcoding_audio_channels, $max_streaming_bitrate, $audio_bit_rate, $start_time_ticks, $transcoding_container, $transcoding_protocol, $max_audio_sample_rate, $max_audio_bit_depth, $enable_remote_media, $break_on_non_key_frames, $enable_redirection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniversalAudioApi->getUniversalAudioStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **container** | [**string[]**](../Model/string.md)| Optional. The audio container. | [optional] |
| **media_source_id** | **string**| The media version id, if playing an alternate version. | [optional] |
| **device_id** | **string**| The device id of the client requesting. Used to stop encoding processes when needed. | [optional] |
| **user_id** | **string**| Optional. The user id. | [optional] |
| **audio_codec** | **string**| Optional. The audio codec to transcode to. | [optional] |
| **max_audio_channels** | **int**| Optional. The maximum number of audio channels. | [optional] |
| **transcoding_audio_channels** | **int**| Optional. The number of how many audio channels to transcode to. | [optional] |
| **max_streaming_bitrate** | **int**| Optional. The maximum streaming bitrate. | [optional] |
| **audio_bit_rate** | **int**| Optional. Specify an audio bitrate to encode to, e.g. 128000. If omitted this will be left to encoder defaults. | [optional] |
| **start_time_ticks** | **int**| Optional. Specify a starting offset, in ticks. 1 tick &#x3D; 10000 ms. | [optional] |
| **transcoding_container** | **string**| Optional. The container to transcode to. | [optional] |
| **transcoding_protocol** | **string**| Optional. The transcoding protocol. | [optional] |
| **max_audio_sample_rate** | **int**| Optional. The maximum audio sample rate. | [optional] |
| **max_audio_bit_depth** | **int**| Optional. The maximum audio bit depth. | [optional] |
| **enable_remote_media** | **bool**| Optional. Whether to enable remote media. | [optional] |
| **break_on_non_key_frames** | **bool**| Optional. Whether to break on non key frames. | [optional] [default to false] |
| **enable_redirection** | **bool**| Whether to enable redirection. Defaults to true. | [optional] [default to true] |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `audio/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `headUniversalAudioStream()`

```php
headUniversalAudioStream($item_id, $container, $media_source_id, $device_id, $user_id, $audio_codec, $max_audio_channels, $transcoding_audio_channels, $max_streaming_bitrate, $audio_bit_rate, $start_time_ticks, $transcoding_container, $transcoding_protocol, $max_audio_sample_rate, $max_audio_bit_depth, $enable_remote_media, $break_on_non_key_frames, $enable_redirection): \SplFileObject
```

Gets an audio stream.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UniversalAudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item id.
$container = array('container_example'); // string[] | Optional. The audio container.
$media_source_id = 'media_source_id_example'; // string | The media version id, if playing an alternate version.
$device_id = 'device_id_example'; // string | The device id of the client requesting. Used to stop encoding processes when needed.
$user_id = 'user_id_example'; // string | Optional. The user id.
$audio_codec = 'audio_codec_example'; // string | Optional. The audio codec to transcode to.
$max_audio_channels = 56; // int | Optional. The maximum number of audio channels.
$transcoding_audio_channels = 56; // int | Optional. The number of how many audio channels to transcode to.
$max_streaming_bitrate = 56; // int | Optional. The maximum streaming bitrate.
$audio_bit_rate = 56; // int | Optional. Specify an audio bitrate to encode to, e.g. 128000. If omitted this will be left to encoder defaults.
$start_time_ticks = 56; // int | Optional. Specify a starting offset, in ticks. 1 tick = 10000 ms.
$transcoding_container = 'transcoding_container_example'; // string | Optional. The container to transcode to.
$transcoding_protocol = 'transcoding_protocol_example'; // string | Optional. The transcoding protocol.
$max_audio_sample_rate = 56; // int | Optional. The maximum audio sample rate.
$max_audio_bit_depth = 56; // int | Optional. The maximum audio bit depth.
$enable_remote_media = True; // bool | Optional. Whether to enable remote media.
$break_on_non_key_frames = false; // bool | Optional. Whether to break on non key frames.
$enable_redirection = true; // bool | Whether to enable redirection. Defaults to true.

try {
    $result = $apiInstance->headUniversalAudioStream($item_id, $container, $media_source_id, $device_id, $user_id, $audio_codec, $max_audio_channels, $transcoding_audio_channels, $max_streaming_bitrate, $audio_bit_rate, $start_time_ticks, $transcoding_container, $transcoding_protocol, $max_audio_sample_rate, $max_audio_bit_depth, $enable_remote_media, $break_on_non_key_frames, $enable_redirection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UniversalAudioApi->headUniversalAudioStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **container** | [**string[]**](../Model/string.md)| Optional. The audio container. | [optional] |
| **media_source_id** | **string**| The media version id, if playing an alternate version. | [optional] |
| **device_id** | **string**| The device id of the client requesting. Used to stop encoding processes when needed. | [optional] |
| **user_id** | **string**| Optional. The user id. | [optional] |
| **audio_codec** | **string**| Optional. The audio codec to transcode to. | [optional] |
| **max_audio_channels** | **int**| Optional. The maximum number of audio channels. | [optional] |
| **transcoding_audio_channels** | **int**| Optional. The number of how many audio channels to transcode to. | [optional] |
| **max_streaming_bitrate** | **int**| Optional. The maximum streaming bitrate. | [optional] |
| **audio_bit_rate** | **int**| Optional. Specify an audio bitrate to encode to, e.g. 128000. If omitted this will be left to encoder defaults. | [optional] |
| **start_time_ticks** | **int**| Optional. Specify a starting offset, in ticks. 1 tick &#x3D; 10000 ms. | [optional] |
| **transcoding_container** | **string**| Optional. The container to transcode to. | [optional] |
| **transcoding_protocol** | **string**| Optional. The transcoding protocol. | [optional] |
| **max_audio_sample_rate** | **int**| Optional. The maximum audio sample rate. | [optional] |
| **max_audio_bit_depth** | **int**| Optional. The maximum audio bit depth. | [optional] |
| **enable_remote_media** | **bool**| Optional. Whether to enable remote media. | [optional] |
| **break_on_non_key_frames** | **bool**| Optional. Whether to break on non key frames. | [optional] [default to false] |
| **enable_redirection** | **bool**| Whether to enable redirection. Defaults to true. | [optional] [default to true] |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `audio/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
