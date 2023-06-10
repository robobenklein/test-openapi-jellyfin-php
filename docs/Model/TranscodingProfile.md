# # TranscodingProfile

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**container** | **string** |  | [optional]
**type** | [**\OpenAPI\Client\Model\DlnaProfileType**](DlnaProfileType.md) |  | [optional]
**video_codec** | **string** |  | [optional]
**audio_codec** | **string** |  | [optional]
**protocol** | **string** |  | [optional]
**estimate_content_length** | **bool** |  | [optional] [default to false]
**enable_mpegts_m2_ts_mode** | **bool** |  | [optional] [default to false]
**transcode_seek_info** | [**\OpenAPI\Client\Model\TranscodeSeekInfo**](TranscodeSeekInfo.md) |  | [optional]
**copy_timestamps** | **bool** |  | [optional] [default to false]
**context** | [**\OpenAPI\Client\Model\EncodingContext**](EncodingContext.md) |  | [optional]
**enable_subtitles_in_manifest** | **bool** |  | [optional] [default to false]
**max_audio_channels** | **string** |  | [optional]
**min_segments** | **int** |  | [optional] [default to 0]
**segment_length** | **int** |  | [optional] [default to 0]
**break_on_non_key_frames** | **bool** |  | [optional] [default to false]
**conditions** | [**\OpenAPI\Client\Model\ProfileCondition[]**](ProfileCondition.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
