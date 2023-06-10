# # SeriesTimerInfoDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Gets or sets the Id of the recording. | [optional]
**type** | **string** |  | [optional]
**server_id** | **string** | Gets or sets the server identifier. | [optional]
**external_id** | **string** | Gets or sets the external identifier. | [optional]
**channel_id** | **string** | Gets or sets the channel id of the recording. | [optional]
**external_channel_id** | **string** | Gets or sets the external channel identifier. | [optional]
**channel_name** | **string** | Gets or sets the channel name of the recording. | [optional]
**channel_primary_image_tag** | **string** |  | [optional]
**program_id** | **string** | Gets or sets the program identifier. | [optional]
**external_program_id** | **string** | Gets or sets the external program identifier. | [optional]
**name** | **string** | Gets or sets the name of the recording. | [optional]
**overview** | **string** | Gets or sets the description of the recording. | [optional]
**start_date** | **\DateTime** | Gets or sets the start date of the recording, in UTC. | [optional]
**end_date** | **\DateTime** | Gets or sets the end date of the recording, in UTC. | [optional]
**service_name** | **string** | Gets or sets the name of the service. | [optional]
**priority** | **int** | Gets or sets the priority. | [optional]
**pre_padding_seconds** | **int** | Gets or sets the pre padding seconds. | [optional]
**post_padding_seconds** | **int** | Gets or sets the post padding seconds. | [optional]
**is_pre_padding_required** | **bool** | Gets or sets a value indicating whether this instance is pre padding required. | [optional]
**parent_backdrop_item_id** | **string** | Gets or sets the Id of the Parent that has a backdrop if the item does not have one. | [optional]
**parent_backdrop_image_tags** | **string[]** | Gets or sets the parent backdrop image tags. | [optional]
**is_post_padding_required** | **bool** | Gets or sets a value indicating whether this instance is post padding required. | [optional]
**keep_until** | [**\OpenAPI\Client\Model\KeepUntil**](KeepUntil.md) |  | [optional]
**record_any_time** | **bool** | Gets or sets a value indicating whether [record any time]. | [optional]
**skip_episodes_in_library** | **bool** |  | [optional]
**record_any_channel** | **bool** | Gets or sets a value indicating whether [record any channel]. | [optional]
**keep_up_to** | **int** |  | [optional]
**record_new_only** | **bool** | Gets or sets a value indicating whether [record new only]. | [optional]
**days** | [**\OpenAPI\Client\Model\DayOfWeek[]**](DayOfWeek.md) | Gets or sets the days. | [optional]
**day_pattern** | [**\OpenAPI\Client\Model\DayPattern**](DayPattern.md) |  | [optional]
**image_tags** | **array<string,string>** | Gets or sets the image tags. | [optional]
**parent_thumb_item_id** | **string** | Gets or sets the parent thumb item id. | [optional]
**parent_thumb_image_tag** | **string** | Gets or sets the parent thumb image tag. | [optional]
**parent_primary_image_item_id** | **string** | Gets or sets the parent primary image item identifier. | [optional]
**parent_primary_image_tag** | **string** | Gets or sets the parent primary image tag. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
