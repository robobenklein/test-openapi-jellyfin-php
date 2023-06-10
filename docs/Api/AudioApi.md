# OpenAPI\Client\AudioApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAudioStream()**](AudioApi.md#getAudioStream) | **GET** /Audio/{itemId}/stream | Gets an audio stream. |
| [**getAudioStreamByContainer()**](AudioApi.md#getAudioStreamByContainer) | **GET** /Audio/{itemId}/stream.{container} | Gets an audio stream. |
| [**headAudioStream()**](AudioApi.md#headAudioStream) | **HEAD** /Audio/{itemId}/stream | Gets an audio stream. |
| [**headAudioStreamByContainer()**](AudioApi.md#headAudioStreamByContainer) | **HEAD** /Audio/{itemId}/stream.{container} | Gets an audio stream. |


## `getAudioStream()`

```php
getAudioStream($item_id, $container, $static, $params, $tag, $device_profile_id, $play_session_id, $segment_container, $segment_length, $min_segments, $media_source_id, $device_id, $audio_codec, $enable_auto_stream_copy, $allow_video_stream_copy, $allow_audio_stream_copy, $break_on_non_key_frames, $audio_sample_rate, $max_audio_bit_depth, $audio_bit_rate, $audio_channels, $max_audio_channels, $profile, $level, $framerate, $max_framerate, $copy_timestamps, $start_time_ticks, $width, $height, $video_bit_rate, $subtitle_stream_index, $subtitle_method, $max_ref_frames, $max_video_bit_depth, $require_avc, $de_interlace, $require_non_anamorphic, $transcoding_max_audio_channels, $cpu_core_limit, $live_stream_id, $enable_mpegts_m2_ts_mode, $video_codec, $subtitle_codec, $transcode_reasons, $audio_stream_index, $video_stream_index, $context, $stream_options): \SplFileObject
```

Gets an audio stream.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string | The item id.
$container = 'container_example'; // string | The audio container.
$static = True; // bool | Optional. If true, the original file will be streamed statically without any encoding. Use either no url extension or the original file extension. true/false.
$params = 'params_example'; // string | The streaming parameters.
$tag = 'tag_example'; // string | The tag.
$device_profile_id = 'device_profile_id_example'; // string | Optional. The dlna device profile id to utilize.
$play_session_id = 'play_session_id_example'; // string | The play session id.
$segment_container = 'segment_container_example'; // string | The segment container.
$segment_length = 56; // int | The segment length.
$min_segments = 56; // int | The minimum number of segments.
$media_source_id = 'media_source_id_example'; // string | The media version id, if playing an alternate version.
$device_id = 'device_id_example'; // string | The device id of the client requesting. Used to stop encoding processes when needed.
$audio_codec = 'audio_codec_example'; // string | Optional. Specify a audio codec to encode to, e.g. mp3. If omitted the server will auto-select using the url's extension. Options: aac, mp3, vorbis, wma.
$enable_auto_stream_copy = True; // bool | Whether or not to allow automatic stream copy if requested values match the original source. Defaults to true.
$allow_video_stream_copy = True; // bool | Whether or not to allow copying of the video stream url.
$allow_audio_stream_copy = True; // bool | Whether or not to allow copying of the audio stream url.
$break_on_non_key_frames = True; // bool | Optional. Whether to break on non key frames.
$audio_sample_rate = 56; // int | Optional. Specify a specific audio sample rate, e.g. 44100.
$max_audio_bit_depth = 56; // int | Optional. The maximum audio bit depth.
$audio_bit_rate = 56; // int | Optional. Specify an audio bitrate to encode to, e.g. 128000. If omitted this will be left to encoder defaults.
$audio_channels = 56; // int | Optional. Specify a specific number of audio channels to encode to, e.g. 2.
$max_audio_channels = 56; // int | Optional. Specify a maximum number of audio channels to encode to, e.g. 2.
$profile = 'profile_example'; // string | Optional. Specify a specific an encoder profile (varies by encoder), e.g. main, baseline, high.
$level = 'level_example'; // string | Optional. Specify a level for the encoder profile (varies by encoder), e.g. 3, 3.1.
$framerate = 3.4; // float | Optional. A specific video framerate to encode to, e.g. 23.976. Generally this should be omitted unless the device has specific requirements.
$max_framerate = 3.4; // float | Optional. A specific maximum video framerate to encode to, e.g. 23.976. Generally this should be omitted unless the device has specific requirements.
$copy_timestamps = True; // bool | Whether or not to copy timestamps when transcoding with an offset. Defaults to false.
$start_time_ticks = 56; // int | Optional. Specify a starting offset, in ticks. 1 tick = 10000 ms.
$width = 56; // int | Optional. The fixed horizontal resolution of the encoded video.
$height = 56; // int | Optional. The fixed vertical resolution of the encoded video.
$video_bit_rate = 56; // int | Optional. Specify a video bitrate to encode to, e.g. 500000. If omitted this will be left to encoder defaults.
$subtitle_stream_index = 56; // int | Optional. The index of the subtitle stream to use. If omitted no subtitles will be used.
$subtitle_method = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SubtitleDeliveryMethod(); // \OpenAPI\Client\Model\SubtitleDeliveryMethod | Optional. Specify the subtitle delivery method.
$max_ref_frames = 56; // int | Optional.
$max_video_bit_depth = 56; // int | Optional. The maximum video bit depth.
$require_avc = True; // bool | Optional. Whether to require avc.
$de_interlace = True; // bool | Optional. Whether to deinterlace the video.
$require_non_anamorphic = True; // bool | Optional. Whether to require a non anamorphic stream.
$transcoding_max_audio_channels = 56; // int | Optional. The maximum number of audio channels to transcode.
$cpu_core_limit = 56; // int | Optional. The limit of how many cpu cores to use.
$live_stream_id = 'live_stream_id_example'; // string | The live stream id.
$enable_mpegts_m2_ts_mode = True; // bool | Optional. Whether to enable the MpegtsM2Ts mode.
$video_codec = 'video_codec_example'; // string | Optional. Specify a video codec to encode to, e.g. h264. If omitted the server will auto-select using the url's extension. Options: h265, h264, mpeg4, theora, vp8, vp9, vpx (deprecated), wmv.
$subtitle_codec = 'subtitle_codec_example'; // string | Optional. Specify a subtitle codec to encode to.
$transcode_reasons = 'transcode_reasons_example'; // string | Optional. The transcoding reason.
$audio_stream_index = 56; // int | Optional. The index of the audio stream to use. If omitted the first audio stream will be used.
$video_stream_index = 56; // int | Optional. The index of the video stream to use. If omitted the first video stream will be used.
$context = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EncodingContext(); // \OpenAPI\Client\Model\EncodingContext | Optional. The MediaBrowser.Model.Dlna.EncodingContext.
$stream_options = array('key' => 'stream_options_example'); // array<string,string> | Optional. The streaming options.

try {
    $result = $apiInstance->getAudioStream($item_id, $container, $static, $params, $tag, $device_profile_id, $play_session_id, $segment_container, $segment_length, $min_segments, $media_source_id, $device_id, $audio_codec, $enable_auto_stream_copy, $allow_video_stream_copy, $allow_audio_stream_copy, $break_on_non_key_frames, $audio_sample_rate, $max_audio_bit_depth, $audio_bit_rate, $audio_channels, $max_audio_channels, $profile, $level, $framerate, $max_framerate, $copy_timestamps, $start_time_ticks, $width, $height, $video_bit_rate, $subtitle_stream_index, $subtitle_method, $max_ref_frames, $max_video_bit_depth, $require_avc, $de_interlace, $require_non_anamorphic, $transcoding_max_audio_channels, $cpu_core_limit, $live_stream_id, $enable_mpegts_m2_ts_mode, $video_codec, $subtitle_codec, $transcode_reasons, $audio_stream_index, $video_stream_index, $context, $stream_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudioApi->getAudioStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **container** | **string**| The audio container. | [optional] |
| **static** | **bool**| Optional. If true, the original file will be streamed statically without any encoding. Use either no url extension or the original file extension. true/false. | [optional] |
| **params** | **string**| The streaming parameters. | [optional] |
| **tag** | **string**| The tag. | [optional] |
| **device_profile_id** | **string**| Optional. The dlna device profile id to utilize. | [optional] |
| **play_session_id** | **string**| The play session id. | [optional] |
| **segment_container** | **string**| The segment container. | [optional] |
| **segment_length** | **int**| The segment length. | [optional] |
| **min_segments** | **int**| The minimum number of segments. | [optional] |
| **media_source_id** | **string**| The media version id, if playing an alternate version. | [optional] |
| **device_id** | **string**| The device id of the client requesting. Used to stop encoding processes when needed. | [optional] |
| **audio_codec** | **string**| Optional. Specify a audio codec to encode to, e.g. mp3. If omitted the server will auto-select using the url&#39;s extension. Options: aac, mp3, vorbis, wma. | [optional] |
| **enable_auto_stream_copy** | **bool**| Whether or not to allow automatic stream copy if requested values match the original source. Defaults to true. | [optional] |
| **allow_video_stream_copy** | **bool**| Whether or not to allow copying of the video stream url. | [optional] |
| **allow_audio_stream_copy** | **bool**| Whether or not to allow copying of the audio stream url. | [optional] |
| **break_on_non_key_frames** | **bool**| Optional. Whether to break on non key frames. | [optional] |
| **audio_sample_rate** | **int**| Optional. Specify a specific audio sample rate, e.g. 44100. | [optional] |
| **max_audio_bit_depth** | **int**| Optional. The maximum audio bit depth. | [optional] |
| **audio_bit_rate** | **int**| Optional. Specify an audio bitrate to encode to, e.g. 128000. If omitted this will be left to encoder defaults. | [optional] |
| **audio_channels** | **int**| Optional. Specify a specific number of audio channels to encode to, e.g. 2. | [optional] |
| **max_audio_channels** | **int**| Optional. Specify a maximum number of audio channels to encode to, e.g. 2. | [optional] |
| **profile** | **string**| Optional. Specify a specific an encoder profile (varies by encoder), e.g. main, baseline, high. | [optional] |
| **level** | **string**| Optional. Specify a level for the encoder profile (varies by encoder), e.g. 3, 3.1. | [optional] |
| **framerate** | **float**| Optional. A specific video framerate to encode to, e.g. 23.976. Generally this should be omitted unless the device has specific requirements. | [optional] |
| **max_framerate** | **float**| Optional. A specific maximum video framerate to encode to, e.g. 23.976. Generally this should be omitted unless the device has specific requirements. | [optional] |
| **copy_timestamps** | **bool**| Whether or not to copy timestamps when transcoding with an offset. Defaults to false. | [optional] |
| **start_time_ticks** | **int**| Optional. Specify a starting offset, in ticks. 1 tick &#x3D; 10000 ms. | [optional] |
| **width** | **int**| Optional. The fixed horizontal resolution of the encoded video. | [optional] |
| **height** | **int**| Optional. The fixed vertical resolution of the encoded video. | [optional] |
| **video_bit_rate** | **int**| Optional. Specify a video bitrate to encode to, e.g. 500000. If omitted this will be left to encoder defaults. | [optional] |
| **subtitle_stream_index** | **int**| Optional. The index of the subtitle stream to use. If omitted no subtitles will be used. | [optional] |
| **subtitle_method** | [**\OpenAPI\Client\Model\SubtitleDeliveryMethod**](../Model/.md)| Optional. Specify the subtitle delivery method. | [optional] |
| **max_ref_frames** | **int**| Optional. | [optional] |
| **max_video_bit_depth** | **int**| Optional. The maximum video bit depth. | [optional] |
| **require_avc** | **bool**| Optional. Whether to require avc. | [optional] |
| **de_interlace** | **bool**| Optional. Whether to deinterlace the video. | [optional] |
| **require_non_anamorphic** | **bool**| Optional. Whether to require a non anamorphic stream. | [optional] |
| **transcoding_max_audio_channels** | **int**| Optional. The maximum number of audio channels to transcode. | [optional] |
| **cpu_core_limit** | **int**| Optional. The limit of how many cpu cores to use. | [optional] |
| **live_stream_id** | **string**| The live stream id. | [optional] |
| **enable_mpegts_m2_ts_mode** | **bool**| Optional. Whether to enable the MpegtsM2Ts mode. | [optional] |
| **video_codec** | **string**| Optional. Specify a video codec to encode to, e.g. h264. If omitted the server will auto-select using the url&#39;s extension. Options: h265, h264, mpeg4, theora, vp8, vp9, vpx (deprecated), wmv. | [optional] |
| **subtitle_codec** | **string**| Optional. Specify a subtitle codec to encode to. | [optional] |
| **transcode_reasons** | **string**| Optional. The transcoding reason. | [optional] |
| **audio_stream_index** | **int**| Optional. The index of the audio stream to use. If omitted the first audio stream will be used. | [optional] |
| **video_stream_index** | **int**| Optional. The index of the video stream to use. If omitted the first video stream will be used. | [optional] |
| **context** | [**\OpenAPI\Client\Model\EncodingContext**](../Model/.md)| Optional. The MediaBrowser.Model.Dlna.EncodingContext. | [optional] |
| **stream_options** | [**array<string,string>**](../Model/string.md)| Optional. The streaming options. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `audio/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAudioStreamByContainer()`

```php
getAudioStreamByContainer($item_id, $container, $static, $params, $tag, $device_profile_id, $play_session_id, $segment_container, $segment_length, $min_segments, $media_source_id, $device_id, $audio_codec, $enable_auto_stream_copy, $allow_video_stream_copy, $allow_audio_stream_copy, $break_on_non_key_frames, $audio_sample_rate, $max_audio_bit_depth, $audio_bit_rate, $audio_channels, $max_audio_channels, $profile, $level, $framerate, $max_framerate, $copy_timestamps, $start_time_ticks, $width, $height, $video_bit_rate, $subtitle_stream_index, $subtitle_method, $max_ref_frames, $max_video_bit_depth, $require_avc, $de_interlace, $require_non_anamorphic, $transcoding_max_audio_channels, $cpu_core_limit, $live_stream_id, $enable_mpegts_m2_ts_mode, $video_codec, $subtitle_codec, $transcode_reasons, $audio_stream_index, $video_stream_index, $context, $stream_options): \SplFileObject
```

Gets an audio stream.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string | The item id.
$container = 'container_example'; // string | The audio container.
$static = True; // bool | Optional. If true, the original file will be streamed statically without any encoding. Use either no url extension or the original file extension. true/false.
$params = 'params_example'; // string | The streaming parameters.
$tag = 'tag_example'; // string | The tag.
$device_profile_id = 'device_profile_id_example'; // string | Optional. The dlna device profile id to utilize.
$play_session_id = 'play_session_id_example'; // string | The play session id.
$segment_container = 'segment_container_example'; // string | The segment container.
$segment_length = 56; // int | The segment lenght.
$min_segments = 56; // int | The minimum number of segments.
$media_source_id = 'media_source_id_example'; // string | The media version id, if playing an alternate version.
$device_id = 'device_id_example'; // string | The device id of the client requesting. Used to stop encoding processes when needed.
$audio_codec = 'audio_codec_example'; // string | Optional. Specify a audio codec to encode to, e.g. mp3. If omitted the server will auto-select using the url's extension. Options: aac, mp3, vorbis, wma.
$enable_auto_stream_copy = True; // bool | Whether or not to allow automatic stream copy if requested values match the original source. Defaults to true.
$allow_video_stream_copy = True; // bool | Whether or not to allow copying of the video stream url.
$allow_audio_stream_copy = True; // bool | Whether or not to allow copying of the audio stream url.
$break_on_non_key_frames = True; // bool | Optional. Whether to break on non key frames.
$audio_sample_rate = 56; // int | Optional. Specify a specific audio sample rate, e.g. 44100.
$max_audio_bit_depth = 56; // int | Optional. The maximum audio bit depth.
$audio_bit_rate = 56; // int | Optional. Specify an audio bitrate to encode to, e.g. 128000. If omitted this will be left to encoder defaults.
$audio_channels = 56; // int | Optional. Specify a specific number of audio channels to encode to, e.g. 2.
$max_audio_channels = 56; // int | Optional. Specify a maximum number of audio channels to encode to, e.g. 2.
$profile = 'profile_example'; // string | Optional. Specify a specific an encoder profile (varies by encoder), e.g. main, baseline, high.
$level = 'level_example'; // string | Optional. Specify a level for the encoder profile (varies by encoder), e.g. 3, 3.1.
$framerate = 3.4; // float | Optional. A specific video framerate to encode to, e.g. 23.976. Generally this should be omitted unless the device has specific requirements.
$max_framerate = 3.4; // float | Optional. A specific maximum video framerate to encode to, e.g. 23.976. Generally this should be omitted unless the device has specific requirements.
$copy_timestamps = True; // bool | Whether or not to copy timestamps when transcoding with an offset. Defaults to false.
$start_time_ticks = 56; // int | Optional. Specify a starting offset, in ticks. 1 tick = 10000 ms.
$width = 56; // int | Optional. The fixed horizontal resolution of the encoded video.
$height = 56; // int | Optional. The fixed vertical resolution of the encoded video.
$video_bit_rate = 56; // int | Optional. Specify a video bitrate to encode to, e.g. 500000. If omitted this will be left to encoder defaults.
$subtitle_stream_index = 56; // int | Optional. The index of the subtitle stream to use. If omitted no subtitles will be used.
$subtitle_method = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SubtitleDeliveryMethod(); // \OpenAPI\Client\Model\SubtitleDeliveryMethod | Optional. Specify the subtitle delivery method.
$max_ref_frames = 56; // int | Optional.
$max_video_bit_depth = 56; // int | Optional. The maximum video bit depth.
$require_avc = True; // bool | Optional. Whether to require avc.
$de_interlace = True; // bool | Optional. Whether to deinterlace the video.
$require_non_anamorphic = True; // bool | Optional. Whether to require a non anamporphic stream.
$transcoding_max_audio_channels = 56; // int | Optional. The maximum number of audio channels to transcode.
$cpu_core_limit = 56; // int | Optional. The limit of how many cpu cores to use.
$live_stream_id = 'live_stream_id_example'; // string | The live stream id.
$enable_mpegts_m2_ts_mode = True; // bool | Optional. Whether to enable the MpegtsM2Ts mode.
$video_codec = 'video_codec_example'; // string | Optional. Specify a video codec to encode to, e.g. h264. If omitted the server will auto-select using the url's extension. Options: h265, h264, mpeg4, theora, vp8, vp9, vpx (deprecated), wmv.
$subtitle_codec = 'subtitle_codec_example'; // string | Optional. Specify a subtitle codec to encode to.
$transcode_reasons = 'transcode_reasons_example'; // string | Optional. The transcoding reason.
$audio_stream_index = 56; // int | Optional. The index of the audio stream to use. If omitted the first audio stream will be used.
$video_stream_index = 56; // int | Optional. The index of the video stream to use. If omitted the first video stream will be used.
$context = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EncodingContext(); // \OpenAPI\Client\Model\EncodingContext | Optional. The MediaBrowser.Model.Dlna.EncodingContext.
$stream_options = array('key' => 'stream_options_example'); // array<string,string> | Optional. The streaming options.

try {
    $result = $apiInstance->getAudioStreamByContainer($item_id, $container, $static, $params, $tag, $device_profile_id, $play_session_id, $segment_container, $segment_length, $min_segments, $media_source_id, $device_id, $audio_codec, $enable_auto_stream_copy, $allow_video_stream_copy, $allow_audio_stream_copy, $break_on_non_key_frames, $audio_sample_rate, $max_audio_bit_depth, $audio_bit_rate, $audio_channels, $max_audio_channels, $profile, $level, $framerate, $max_framerate, $copy_timestamps, $start_time_ticks, $width, $height, $video_bit_rate, $subtitle_stream_index, $subtitle_method, $max_ref_frames, $max_video_bit_depth, $require_avc, $de_interlace, $require_non_anamorphic, $transcoding_max_audio_channels, $cpu_core_limit, $live_stream_id, $enable_mpegts_m2_ts_mode, $video_codec, $subtitle_codec, $transcode_reasons, $audio_stream_index, $video_stream_index, $context, $stream_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudioApi->getAudioStreamByContainer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **container** | **string**| The audio container. | |
| **static** | **bool**| Optional. If true, the original file will be streamed statically without any encoding. Use either no url extension or the original file extension. true/false. | [optional] |
| **params** | **string**| The streaming parameters. | [optional] |
| **tag** | **string**| The tag. | [optional] |
| **device_profile_id** | **string**| Optional. The dlna device profile id to utilize. | [optional] |
| **play_session_id** | **string**| The play session id. | [optional] |
| **segment_container** | **string**| The segment container. | [optional] |
| **segment_length** | **int**| The segment lenght. | [optional] |
| **min_segments** | **int**| The minimum number of segments. | [optional] |
| **media_source_id** | **string**| The media version id, if playing an alternate version. | [optional] |
| **device_id** | **string**| The device id of the client requesting. Used to stop encoding processes when needed. | [optional] |
| **audio_codec** | **string**| Optional. Specify a audio codec to encode to, e.g. mp3. If omitted the server will auto-select using the url&#39;s extension. Options: aac, mp3, vorbis, wma. | [optional] |
| **enable_auto_stream_copy** | **bool**| Whether or not to allow automatic stream copy if requested values match the original source. Defaults to true. | [optional] |
| **allow_video_stream_copy** | **bool**| Whether or not to allow copying of the video stream url. | [optional] |
| **allow_audio_stream_copy** | **bool**| Whether or not to allow copying of the audio stream url. | [optional] |
| **break_on_non_key_frames** | **bool**| Optional. Whether to break on non key frames. | [optional] |
| **audio_sample_rate** | **int**| Optional. Specify a specific audio sample rate, e.g. 44100. | [optional] |
| **max_audio_bit_depth** | **int**| Optional. The maximum audio bit depth. | [optional] |
| **audio_bit_rate** | **int**| Optional. Specify an audio bitrate to encode to, e.g. 128000. If omitted this will be left to encoder defaults. | [optional] |
| **audio_channels** | **int**| Optional. Specify a specific number of audio channels to encode to, e.g. 2. | [optional] |
| **max_audio_channels** | **int**| Optional. Specify a maximum number of audio channels to encode to, e.g. 2. | [optional] |
| **profile** | **string**| Optional. Specify a specific an encoder profile (varies by encoder), e.g. main, baseline, high. | [optional] |
| **level** | **string**| Optional. Specify a level for the encoder profile (varies by encoder), e.g. 3, 3.1. | [optional] |
| **framerate** | **float**| Optional. A specific video framerate to encode to, e.g. 23.976. Generally this should be omitted unless the device has specific requirements. | [optional] |
| **max_framerate** | **float**| Optional. A specific maximum video framerate to encode to, e.g. 23.976. Generally this should be omitted unless the device has specific requirements. | [optional] |
| **copy_timestamps** | **bool**| Whether or not to copy timestamps when transcoding with an offset. Defaults to false. | [optional] |
| **start_time_ticks** | **int**| Optional. Specify a starting offset, in ticks. 1 tick &#x3D; 10000 ms. | [optional] |
| **width** | **int**| Optional. The fixed horizontal resolution of the encoded video. | [optional] |
| **height** | **int**| Optional. The fixed vertical resolution of the encoded video. | [optional] |
| **video_bit_rate** | **int**| Optional. Specify a video bitrate to encode to, e.g. 500000. If omitted this will be left to encoder defaults. | [optional] |
| **subtitle_stream_index** | **int**| Optional. The index of the subtitle stream to use. If omitted no subtitles will be used. | [optional] |
| **subtitle_method** | [**\OpenAPI\Client\Model\SubtitleDeliveryMethod**](../Model/.md)| Optional. Specify the subtitle delivery method. | [optional] |
| **max_ref_frames** | **int**| Optional. | [optional] |
| **max_video_bit_depth** | **int**| Optional. The maximum video bit depth. | [optional] |
| **require_avc** | **bool**| Optional. Whether to require avc. | [optional] |
| **de_interlace** | **bool**| Optional. Whether to deinterlace the video. | [optional] |
| **require_non_anamorphic** | **bool**| Optional. Whether to require a non anamporphic stream. | [optional] |
| **transcoding_max_audio_channels** | **int**| Optional. The maximum number of audio channels to transcode. | [optional] |
| **cpu_core_limit** | **int**| Optional. The limit of how many cpu cores to use. | [optional] |
| **live_stream_id** | **string**| The live stream id. | [optional] |
| **enable_mpegts_m2_ts_mode** | **bool**| Optional. Whether to enable the MpegtsM2Ts mode. | [optional] |
| **video_codec** | **string**| Optional. Specify a video codec to encode to, e.g. h264. If omitted the server will auto-select using the url&#39;s extension. Options: h265, h264, mpeg4, theora, vp8, vp9, vpx (deprecated), wmv. | [optional] |
| **subtitle_codec** | **string**| Optional. Specify a subtitle codec to encode to. | [optional] |
| **transcode_reasons** | **string**| Optional. The transcoding reason. | [optional] |
| **audio_stream_index** | **int**| Optional. The index of the audio stream to use. If omitted the first audio stream will be used. | [optional] |
| **video_stream_index** | **int**| Optional. The index of the video stream to use. If omitted the first video stream will be used. | [optional] |
| **context** | [**\OpenAPI\Client\Model\EncodingContext**](../Model/.md)| Optional. The MediaBrowser.Model.Dlna.EncodingContext. | [optional] |
| **stream_options** | [**array<string,string>**](../Model/string.md)| Optional. The streaming options. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `audio/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `headAudioStream()`

```php
headAudioStream($item_id, $container, $static, $params, $tag, $device_profile_id, $play_session_id, $segment_container, $segment_length, $min_segments, $media_source_id, $device_id, $audio_codec, $enable_auto_stream_copy, $allow_video_stream_copy, $allow_audio_stream_copy, $break_on_non_key_frames, $audio_sample_rate, $max_audio_bit_depth, $audio_bit_rate, $audio_channels, $max_audio_channels, $profile, $level, $framerate, $max_framerate, $copy_timestamps, $start_time_ticks, $width, $height, $video_bit_rate, $subtitle_stream_index, $subtitle_method, $max_ref_frames, $max_video_bit_depth, $require_avc, $de_interlace, $require_non_anamorphic, $transcoding_max_audio_channels, $cpu_core_limit, $live_stream_id, $enable_mpegts_m2_ts_mode, $video_codec, $subtitle_codec, $transcode_reasons, $audio_stream_index, $video_stream_index, $context, $stream_options): \SplFileObject
```

Gets an audio stream.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string | The item id.
$container = 'container_example'; // string | The audio container.
$static = True; // bool | Optional. If true, the original file will be streamed statically without any encoding. Use either no url extension or the original file extension. true/false.
$params = 'params_example'; // string | The streaming parameters.
$tag = 'tag_example'; // string | The tag.
$device_profile_id = 'device_profile_id_example'; // string | Optional. The dlna device profile id to utilize.
$play_session_id = 'play_session_id_example'; // string | The play session id.
$segment_container = 'segment_container_example'; // string | The segment container.
$segment_length = 56; // int | The segment length.
$min_segments = 56; // int | The minimum number of segments.
$media_source_id = 'media_source_id_example'; // string | The media version id, if playing an alternate version.
$device_id = 'device_id_example'; // string | The device id of the client requesting. Used to stop encoding processes when needed.
$audio_codec = 'audio_codec_example'; // string | Optional. Specify a audio codec to encode to, e.g. mp3. If omitted the server will auto-select using the url's extension. Options: aac, mp3, vorbis, wma.
$enable_auto_stream_copy = True; // bool | Whether or not to allow automatic stream copy if requested values match the original source. Defaults to true.
$allow_video_stream_copy = True; // bool | Whether or not to allow copying of the video stream url.
$allow_audio_stream_copy = True; // bool | Whether or not to allow copying of the audio stream url.
$break_on_non_key_frames = True; // bool | Optional. Whether to break on non key frames.
$audio_sample_rate = 56; // int | Optional. Specify a specific audio sample rate, e.g. 44100.
$max_audio_bit_depth = 56; // int | Optional. The maximum audio bit depth.
$audio_bit_rate = 56; // int | Optional. Specify an audio bitrate to encode to, e.g. 128000. If omitted this will be left to encoder defaults.
$audio_channels = 56; // int | Optional. Specify a specific number of audio channels to encode to, e.g. 2.
$max_audio_channels = 56; // int | Optional. Specify a maximum number of audio channels to encode to, e.g. 2.
$profile = 'profile_example'; // string | Optional. Specify a specific an encoder profile (varies by encoder), e.g. main, baseline, high.
$level = 'level_example'; // string | Optional. Specify a level for the encoder profile (varies by encoder), e.g. 3, 3.1.
$framerate = 3.4; // float | Optional. A specific video framerate to encode to, e.g. 23.976. Generally this should be omitted unless the device has specific requirements.
$max_framerate = 3.4; // float | Optional. A specific maximum video framerate to encode to, e.g. 23.976. Generally this should be omitted unless the device has specific requirements.
$copy_timestamps = True; // bool | Whether or not to copy timestamps when transcoding with an offset. Defaults to false.
$start_time_ticks = 56; // int | Optional. Specify a starting offset, in ticks. 1 tick = 10000 ms.
$width = 56; // int | Optional. The fixed horizontal resolution of the encoded video.
$height = 56; // int | Optional. The fixed vertical resolution of the encoded video.
$video_bit_rate = 56; // int | Optional. Specify a video bitrate to encode to, e.g. 500000. If omitted this will be left to encoder defaults.
$subtitle_stream_index = 56; // int | Optional. The index of the subtitle stream to use. If omitted no subtitles will be used.
$subtitle_method = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SubtitleDeliveryMethod(); // \OpenAPI\Client\Model\SubtitleDeliveryMethod | Optional. Specify the subtitle delivery method.
$max_ref_frames = 56; // int | Optional.
$max_video_bit_depth = 56; // int | Optional. The maximum video bit depth.
$require_avc = True; // bool | Optional. Whether to require avc.
$de_interlace = True; // bool | Optional. Whether to deinterlace the video.
$require_non_anamorphic = True; // bool | Optional. Whether to require a non anamorphic stream.
$transcoding_max_audio_channels = 56; // int | Optional. The maximum number of audio channels to transcode.
$cpu_core_limit = 56; // int | Optional. The limit of how many cpu cores to use.
$live_stream_id = 'live_stream_id_example'; // string | The live stream id.
$enable_mpegts_m2_ts_mode = True; // bool | Optional. Whether to enable the MpegtsM2Ts mode.
$video_codec = 'video_codec_example'; // string | Optional. Specify a video codec to encode to, e.g. h264. If omitted the server will auto-select using the url's extension. Options: h265, h264, mpeg4, theora, vp8, vp9, vpx (deprecated), wmv.
$subtitle_codec = 'subtitle_codec_example'; // string | Optional. Specify a subtitle codec to encode to.
$transcode_reasons = 'transcode_reasons_example'; // string | Optional. The transcoding reason.
$audio_stream_index = 56; // int | Optional. The index of the audio stream to use. If omitted the first audio stream will be used.
$video_stream_index = 56; // int | Optional. The index of the video stream to use. If omitted the first video stream will be used.
$context = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EncodingContext(); // \OpenAPI\Client\Model\EncodingContext | Optional. The MediaBrowser.Model.Dlna.EncodingContext.
$stream_options = array('key' => 'stream_options_example'); // array<string,string> | Optional. The streaming options.

try {
    $result = $apiInstance->headAudioStream($item_id, $container, $static, $params, $tag, $device_profile_id, $play_session_id, $segment_container, $segment_length, $min_segments, $media_source_id, $device_id, $audio_codec, $enable_auto_stream_copy, $allow_video_stream_copy, $allow_audio_stream_copy, $break_on_non_key_frames, $audio_sample_rate, $max_audio_bit_depth, $audio_bit_rate, $audio_channels, $max_audio_channels, $profile, $level, $framerate, $max_framerate, $copy_timestamps, $start_time_ticks, $width, $height, $video_bit_rate, $subtitle_stream_index, $subtitle_method, $max_ref_frames, $max_video_bit_depth, $require_avc, $de_interlace, $require_non_anamorphic, $transcoding_max_audio_channels, $cpu_core_limit, $live_stream_id, $enable_mpegts_m2_ts_mode, $video_codec, $subtitle_codec, $transcode_reasons, $audio_stream_index, $video_stream_index, $context, $stream_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudioApi->headAudioStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **container** | **string**| The audio container. | [optional] |
| **static** | **bool**| Optional. If true, the original file will be streamed statically without any encoding. Use either no url extension or the original file extension. true/false. | [optional] |
| **params** | **string**| The streaming parameters. | [optional] |
| **tag** | **string**| The tag. | [optional] |
| **device_profile_id** | **string**| Optional. The dlna device profile id to utilize. | [optional] |
| **play_session_id** | **string**| The play session id. | [optional] |
| **segment_container** | **string**| The segment container. | [optional] |
| **segment_length** | **int**| The segment length. | [optional] |
| **min_segments** | **int**| The minimum number of segments. | [optional] |
| **media_source_id** | **string**| The media version id, if playing an alternate version. | [optional] |
| **device_id** | **string**| The device id of the client requesting. Used to stop encoding processes when needed. | [optional] |
| **audio_codec** | **string**| Optional. Specify a audio codec to encode to, e.g. mp3. If omitted the server will auto-select using the url&#39;s extension. Options: aac, mp3, vorbis, wma. | [optional] |
| **enable_auto_stream_copy** | **bool**| Whether or not to allow automatic stream copy if requested values match the original source. Defaults to true. | [optional] |
| **allow_video_stream_copy** | **bool**| Whether or not to allow copying of the video stream url. | [optional] |
| **allow_audio_stream_copy** | **bool**| Whether or not to allow copying of the audio stream url. | [optional] |
| **break_on_non_key_frames** | **bool**| Optional. Whether to break on non key frames. | [optional] |
| **audio_sample_rate** | **int**| Optional. Specify a specific audio sample rate, e.g. 44100. | [optional] |
| **max_audio_bit_depth** | **int**| Optional. The maximum audio bit depth. | [optional] |
| **audio_bit_rate** | **int**| Optional. Specify an audio bitrate to encode to, e.g. 128000. If omitted this will be left to encoder defaults. | [optional] |
| **audio_channels** | **int**| Optional. Specify a specific number of audio channels to encode to, e.g. 2. | [optional] |
| **max_audio_channels** | **int**| Optional. Specify a maximum number of audio channels to encode to, e.g. 2. | [optional] |
| **profile** | **string**| Optional. Specify a specific an encoder profile (varies by encoder), e.g. main, baseline, high. | [optional] |
| **level** | **string**| Optional. Specify a level for the encoder profile (varies by encoder), e.g. 3, 3.1. | [optional] |
| **framerate** | **float**| Optional. A specific video framerate to encode to, e.g. 23.976. Generally this should be omitted unless the device has specific requirements. | [optional] |
| **max_framerate** | **float**| Optional. A specific maximum video framerate to encode to, e.g. 23.976. Generally this should be omitted unless the device has specific requirements. | [optional] |
| **copy_timestamps** | **bool**| Whether or not to copy timestamps when transcoding with an offset. Defaults to false. | [optional] |
| **start_time_ticks** | **int**| Optional. Specify a starting offset, in ticks. 1 tick &#x3D; 10000 ms. | [optional] |
| **width** | **int**| Optional. The fixed horizontal resolution of the encoded video. | [optional] |
| **height** | **int**| Optional. The fixed vertical resolution of the encoded video. | [optional] |
| **video_bit_rate** | **int**| Optional. Specify a video bitrate to encode to, e.g. 500000. If omitted this will be left to encoder defaults. | [optional] |
| **subtitle_stream_index** | **int**| Optional. The index of the subtitle stream to use. If omitted no subtitles will be used. | [optional] |
| **subtitle_method** | [**\OpenAPI\Client\Model\SubtitleDeliveryMethod**](../Model/.md)| Optional. Specify the subtitle delivery method. | [optional] |
| **max_ref_frames** | **int**| Optional. | [optional] |
| **max_video_bit_depth** | **int**| Optional. The maximum video bit depth. | [optional] |
| **require_avc** | **bool**| Optional. Whether to require avc. | [optional] |
| **de_interlace** | **bool**| Optional. Whether to deinterlace the video. | [optional] |
| **require_non_anamorphic** | **bool**| Optional. Whether to require a non anamorphic stream. | [optional] |
| **transcoding_max_audio_channels** | **int**| Optional. The maximum number of audio channels to transcode. | [optional] |
| **cpu_core_limit** | **int**| Optional. The limit of how many cpu cores to use. | [optional] |
| **live_stream_id** | **string**| The live stream id. | [optional] |
| **enable_mpegts_m2_ts_mode** | **bool**| Optional. Whether to enable the MpegtsM2Ts mode. | [optional] |
| **video_codec** | **string**| Optional. Specify a video codec to encode to, e.g. h264. If omitted the server will auto-select using the url&#39;s extension. Options: h265, h264, mpeg4, theora, vp8, vp9, vpx (deprecated), wmv. | [optional] |
| **subtitle_codec** | **string**| Optional. Specify a subtitle codec to encode to. | [optional] |
| **transcode_reasons** | **string**| Optional. The transcoding reason. | [optional] |
| **audio_stream_index** | **int**| Optional. The index of the audio stream to use. If omitted the first audio stream will be used. | [optional] |
| **video_stream_index** | **int**| Optional. The index of the video stream to use. If omitted the first video stream will be used. | [optional] |
| **context** | [**\OpenAPI\Client\Model\EncodingContext**](../Model/.md)| Optional. The MediaBrowser.Model.Dlna.EncodingContext. | [optional] |
| **stream_options** | [**array<string,string>**](../Model/string.md)| Optional. The streaming options. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `audio/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `headAudioStreamByContainer()`

```php
headAudioStreamByContainer($item_id, $container, $static, $params, $tag, $device_profile_id, $play_session_id, $segment_container, $segment_length, $min_segments, $media_source_id, $device_id, $audio_codec, $enable_auto_stream_copy, $allow_video_stream_copy, $allow_audio_stream_copy, $break_on_non_key_frames, $audio_sample_rate, $max_audio_bit_depth, $audio_bit_rate, $audio_channels, $max_audio_channels, $profile, $level, $framerate, $max_framerate, $copy_timestamps, $start_time_ticks, $width, $height, $video_bit_rate, $subtitle_stream_index, $subtitle_method, $max_ref_frames, $max_video_bit_depth, $require_avc, $de_interlace, $require_non_anamorphic, $transcoding_max_audio_channels, $cpu_core_limit, $live_stream_id, $enable_mpegts_m2_ts_mode, $video_codec, $subtitle_codec, $transcode_reasons, $audio_stream_index, $video_stream_index, $context, $stream_options): \SplFileObject
```

Gets an audio stream.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AudioApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string | The item id.
$container = 'container_example'; // string | The audio container.
$static = True; // bool | Optional. If true, the original file will be streamed statically without any encoding. Use either no url extension or the original file extension. true/false.
$params = 'params_example'; // string | The streaming parameters.
$tag = 'tag_example'; // string | The tag.
$device_profile_id = 'device_profile_id_example'; // string | Optional. The dlna device profile id to utilize.
$play_session_id = 'play_session_id_example'; // string | The play session id.
$segment_container = 'segment_container_example'; // string | The segment container.
$segment_length = 56; // int | The segment lenght.
$min_segments = 56; // int | The minimum number of segments.
$media_source_id = 'media_source_id_example'; // string | The media version id, if playing an alternate version.
$device_id = 'device_id_example'; // string | The device id of the client requesting. Used to stop encoding processes when needed.
$audio_codec = 'audio_codec_example'; // string | Optional. Specify a audio codec to encode to, e.g. mp3. If omitted the server will auto-select using the url's extension. Options: aac, mp3, vorbis, wma.
$enable_auto_stream_copy = True; // bool | Whether or not to allow automatic stream copy if requested values match the original source. Defaults to true.
$allow_video_stream_copy = True; // bool | Whether or not to allow copying of the video stream url.
$allow_audio_stream_copy = True; // bool | Whether or not to allow copying of the audio stream url.
$break_on_non_key_frames = True; // bool | Optional. Whether to break on non key frames.
$audio_sample_rate = 56; // int | Optional. Specify a specific audio sample rate, e.g. 44100.
$max_audio_bit_depth = 56; // int | Optional. The maximum audio bit depth.
$audio_bit_rate = 56; // int | Optional. Specify an audio bitrate to encode to, e.g. 128000. If omitted this will be left to encoder defaults.
$audio_channels = 56; // int | Optional. Specify a specific number of audio channels to encode to, e.g. 2.
$max_audio_channels = 56; // int | Optional. Specify a maximum number of audio channels to encode to, e.g. 2.
$profile = 'profile_example'; // string | Optional. Specify a specific an encoder profile (varies by encoder), e.g. main, baseline, high.
$level = 'level_example'; // string | Optional. Specify a level for the encoder profile (varies by encoder), e.g. 3, 3.1.
$framerate = 3.4; // float | Optional. A specific video framerate to encode to, e.g. 23.976. Generally this should be omitted unless the device has specific requirements.
$max_framerate = 3.4; // float | Optional. A specific maximum video framerate to encode to, e.g. 23.976. Generally this should be omitted unless the device has specific requirements.
$copy_timestamps = True; // bool | Whether or not to copy timestamps when transcoding with an offset. Defaults to false.
$start_time_ticks = 56; // int | Optional. Specify a starting offset, in ticks. 1 tick = 10000 ms.
$width = 56; // int | Optional. The fixed horizontal resolution of the encoded video.
$height = 56; // int | Optional. The fixed vertical resolution of the encoded video.
$video_bit_rate = 56; // int | Optional. Specify a video bitrate to encode to, e.g. 500000. If omitted this will be left to encoder defaults.
$subtitle_stream_index = 56; // int | Optional. The index of the subtitle stream to use. If omitted no subtitles will be used.
$subtitle_method = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SubtitleDeliveryMethod(); // \OpenAPI\Client\Model\SubtitleDeliveryMethod | Optional. Specify the subtitle delivery method.
$max_ref_frames = 56; // int | Optional.
$max_video_bit_depth = 56; // int | Optional. The maximum video bit depth.
$require_avc = True; // bool | Optional. Whether to require avc.
$de_interlace = True; // bool | Optional. Whether to deinterlace the video.
$require_non_anamorphic = True; // bool | Optional. Whether to require a non anamporphic stream.
$transcoding_max_audio_channels = 56; // int | Optional. The maximum number of audio channels to transcode.
$cpu_core_limit = 56; // int | Optional. The limit of how many cpu cores to use.
$live_stream_id = 'live_stream_id_example'; // string | The live stream id.
$enable_mpegts_m2_ts_mode = True; // bool | Optional. Whether to enable the MpegtsM2Ts mode.
$video_codec = 'video_codec_example'; // string | Optional. Specify a video codec to encode to, e.g. h264. If omitted the server will auto-select using the url's extension. Options: h265, h264, mpeg4, theora, vp8, vp9, vpx (deprecated), wmv.
$subtitle_codec = 'subtitle_codec_example'; // string | Optional. Specify a subtitle codec to encode to.
$transcode_reasons = 'transcode_reasons_example'; // string | Optional. The transcoding reason.
$audio_stream_index = 56; // int | Optional. The index of the audio stream to use. If omitted the first audio stream will be used.
$video_stream_index = 56; // int | Optional. The index of the video stream to use. If omitted the first video stream will be used.
$context = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\EncodingContext(); // \OpenAPI\Client\Model\EncodingContext | Optional. The MediaBrowser.Model.Dlna.EncodingContext.
$stream_options = array('key' => 'stream_options_example'); // array<string,string> | Optional. The streaming options.

try {
    $result = $apiInstance->headAudioStreamByContainer($item_id, $container, $static, $params, $tag, $device_profile_id, $play_session_id, $segment_container, $segment_length, $min_segments, $media_source_id, $device_id, $audio_codec, $enable_auto_stream_copy, $allow_video_stream_copy, $allow_audio_stream_copy, $break_on_non_key_frames, $audio_sample_rate, $max_audio_bit_depth, $audio_bit_rate, $audio_channels, $max_audio_channels, $profile, $level, $framerate, $max_framerate, $copy_timestamps, $start_time_ticks, $width, $height, $video_bit_rate, $subtitle_stream_index, $subtitle_method, $max_ref_frames, $max_video_bit_depth, $require_avc, $de_interlace, $require_non_anamorphic, $transcoding_max_audio_channels, $cpu_core_limit, $live_stream_id, $enable_mpegts_m2_ts_mode, $video_codec, $subtitle_codec, $transcode_reasons, $audio_stream_index, $video_stream_index, $context, $stream_options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AudioApi->headAudioStreamByContainer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **container** | **string**| The audio container. | |
| **static** | **bool**| Optional. If true, the original file will be streamed statically without any encoding. Use either no url extension or the original file extension. true/false. | [optional] |
| **params** | **string**| The streaming parameters. | [optional] |
| **tag** | **string**| The tag. | [optional] |
| **device_profile_id** | **string**| Optional. The dlna device profile id to utilize. | [optional] |
| **play_session_id** | **string**| The play session id. | [optional] |
| **segment_container** | **string**| The segment container. | [optional] |
| **segment_length** | **int**| The segment lenght. | [optional] |
| **min_segments** | **int**| The minimum number of segments. | [optional] |
| **media_source_id** | **string**| The media version id, if playing an alternate version. | [optional] |
| **device_id** | **string**| The device id of the client requesting. Used to stop encoding processes when needed. | [optional] |
| **audio_codec** | **string**| Optional. Specify a audio codec to encode to, e.g. mp3. If omitted the server will auto-select using the url&#39;s extension. Options: aac, mp3, vorbis, wma. | [optional] |
| **enable_auto_stream_copy** | **bool**| Whether or not to allow automatic stream copy if requested values match the original source. Defaults to true. | [optional] |
| **allow_video_stream_copy** | **bool**| Whether or not to allow copying of the video stream url. | [optional] |
| **allow_audio_stream_copy** | **bool**| Whether or not to allow copying of the audio stream url. | [optional] |
| **break_on_non_key_frames** | **bool**| Optional. Whether to break on non key frames. | [optional] |
| **audio_sample_rate** | **int**| Optional. Specify a specific audio sample rate, e.g. 44100. | [optional] |
| **max_audio_bit_depth** | **int**| Optional. The maximum audio bit depth. | [optional] |
| **audio_bit_rate** | **int**| Optional. Specify an audio bitrate to encode to, e.g. 128000. If omitted this will be left to encoder defaults. | [optional] |
| **audio_channels** | **int**| Optional. Specify a specific number of audio channels to encode to, e.g. 2. | [optional] |
| **max_audio_channels** | **int**| Optional. Specify a maximum number of audio channels to encode to, e.g. 2. | [optional] |
| **profile** | **string**| Optional. Specify a specific an encoder profile (varies by encoder), e.g. main, baseline, high. | [optional] |
| **level** | **string**| Optional. Specify a level for the encoder profile (varies by encoder), e.g. 3, 3.1. | [optional] |
| **framerate** | **float**| Optional. A specific video framerate to encode to, e.g. 23.976. Generally this should be omitted unless the device has specific requirements. | [optional] |
| **max_framerate** | **float**| Optional. A specific maximum video framerate to encode to, e.g. 23.976. Generally this should be omitted unless the device has specific requirements. | [optional] |
| **copy_timestamps** | **bool**| Whether or not to copy timestamps when transcoding with an offset. Defaults to false. | [optional] |
| **start_time_ticks** | **int**| Optional. Specify a starting offset, in ticks. 1 tick &#x3D; 10000 ms. | [optional] |
| **width** | **int**| Optional. The fixed horizontal resolution of the encoded video. | [optional] |
| **height** | **int**| Optional. The fixed vertical resolution of the encoded video. | [optional] |
| **video_bit_rate** | **int**| Optional. Specify a video bitrate to encode to, e.g. 500000. If omitted this will be left to encoder defaults. | [optional] |
| **subtitle_stream_index** | **int**| Optional. The index of the subtitle stream to use. If omitted no subtitles will be used. | [optional] |
| **subtitle_method** | [**\OpenAPI\Client\Model\SubtitleDeliveryMethod**](../Model/.md)| Optional. Specify the subtitle delivery method. | [optional] |
| **max_ref_frames** | **int**| Optional. | [optional] |
| **max_video_bit_depth** | **int**| Optional. The maximum video bit depth. | [optional] |
| **require_avc** | **bool**| Optional. Whether to require avc. | [optional] |
| **de_interlace** | **bool**| Optional. Whether to deinterlace the video. | [optional] |
| **require_non_anamorphic** | **bool**| Optional. Whether to require a non anamporphic stream. | [optional] |
| **transcoding_max_audio_channels** | **int**| Optional. The maximum number of audio channels to transcode. | [optional] |
| **cpu_core_limit** | **int**| Optional. The limit of how many cpu cores to use. | [optional] |
| **live_stream_id** | **string**| The live stream id. | [optional] |
| **enable_mpegts_m2_ts_mode** | **bool**| Optional. Whether to enable the MpegtsM2Ts mode. | [optional] |
| **video_codec** | **string**| Optional. Specify a video codec to encode to, e.g. h264. If omitted the server will auto-select using the url&#39;s extension. Options: h265, h264, mpeg4, theora, vp8, vp9, vpx (deprecated), wmv. | [optional] |
| **subtitle_codec** | **string**| Optional. Specify a subtitle codec to encode to. | [optional] |
| **transcode_reasons** | **string**| Optional. The transcoding reason. | [optional] |
| **audio_stream_index** | **int**| Optional. The index of the audio stream to use. If omitted the first audio stream will be used. | [optional] |
| **video_stream_index** | **int**| Optional. The index of the video stream to use. If omitted the first video stream will be used. | [optional] |
| **context** | [**\OpenAPI\Client\Model\EncodingContext**](../Model/.md)| Optional. The MediaBrowser.Model.Dlna.EncodingContext. | [optional] |
| **stream_options** | [**array<string,string>**](../Model/string.md)| Optional. The streaming options. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `audio/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
