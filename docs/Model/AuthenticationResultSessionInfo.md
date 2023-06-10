# # AuthenticationResultSessionInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**play_state** | [**\OpenAPI\Client\Model\PlayerStateInfo**](PlayerStateInfo.md) |  | [optional]
**additional_users** | [**\OpenAPI\Client\Model\SessionUserInfo[]**](SessionUserInfo.md) |  | [optional]
**capabilities** | [**\OpenAPI\Client\Model\ClientCapabilities**](ClientCapabilities.md) |  | [optional]
**remote_end_point** | **string** | Gets or sets the remote end point. | [optional]
**playable_media_types** | **string[]** | Gets the playable media types. | [optional] [readonly]
**id** | **string** | Gets or sets the id. | [optional]
**user_id** | **string** | Gets or sets the user id. | [optional]
**user_name** | **string** | Gets or sets the username. | [optional]
**client** | **string** | Gets or sets the type of the client. | [optional]
**last_activity_date** | **\DateTime** | Gets or sets the last activity date. | [optional]
**last_playback_check_in** | **\DateTime** | Gets or sets the last playback check in. | [optional]
**device_name** | **string** | Gets or sets the name of the device. | [optional]
**device_type** | **string** | Gets or sets the type of the device. | [optional]
**now_playing_item** | [**\OpenAPI\Client\Model\SessionInfoNowPlayingItem**](SessionInfoNowPlayingItem.md) |  | [optional]
**full_now_playing_item** | [**\OpenAPI\Client\Model\SessionInfoFullNowPlayingItem**](SessionInfoFullNowPlayingItem.md) |  | [optional]
**now_viewing_item** | [**\OpenAPI\Client\Model\SessionInfoNowViewingItem**](SessionInfoNowViewingItem.md) |  | [optional]
**device_id** | **string** | Gets or sets the device id. | [optional]
**application_version** | **string** | Gets or sets the application version. | [optional]
**transcoding_info** | [**\OpenAPI\Client\Model\TranscodingInfo**](TranscodingInfo.md) |  | [optional]
**is_active** | **bool** | Gets a value indicating whether this instance is active. | [optional] [readonly]
**supports_media_control** | **bool** |  | [optional] [readonly]
**supports_remote_control** | **bool** |  | [optional] [readonly]
**now_playing_queue** | [**\OpenAPI\Client\Model\QueueItem[]**](QueueItem.md) |  | [optional]
**now_playing_queue_full_items** | [**\OpenAPI\Client\Model\BaseItemDto[]**](BaseItemDto.md) |  | [optional]
**has_custom_device_name** | **bool** |  | [optional]
**playlist_item_id** | **string** |  | [optional]
**server_id** | **string** |  | [optional]
**user_primary_image_tag** | **string** |  | [optional]
**supported_commands** | [**\OpenAPI\Client\Model\GeneralCommandType[]**](GeneralCommandType.md) | Gets the supported commands. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
