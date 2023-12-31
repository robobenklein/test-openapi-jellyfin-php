# # DlnaOptions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enable_play_to** | **bool** | Gets or sets a value indicating whether gets or sets a value to indicate the status of the dlna playTo subsystem. | [optional]
**enable_server** | **bool** | Gets or sets a value indicating whether gets or sets a value to indicate the status of the dlna server subsystem. | [optional]
**enable_debug_log** | **bool** | Gets or sets a value indicating whether detailed dlna server logs are sent to the console/log.  If the setting \&quot;Emby.Dlna\&quot;: \&quot;Debug\&quot; msut be set in logging.default.json for this property to work. | [optional]
**enable_play_to_tracing** | **bool** | Gets or sets a value indicating whether whether detailed playTo debug logs are sent to the console/log.  If the setting \&quot;Emby.Dlna.PlayTo\&quot;: \&quot;Debug\&quot; msut be set in logging.default.json for this property to work. | [optional]
**client_discovery_interval_seconds** | **int** | Gets or sets the ssdp client discovery interval time (in seconds).  This is the time after which the server will send a ssdp search request. | [optional]
**alive_message_interval_seconds** | **int** | Gets or sets the frequency at which ssdp alive notifications are transmitted. | [optional]
**blast_alive_message_interval_seconds** | **int** | Gets or sets the frequency at which ssdp alive notifications are transmitted. MIGRATING - TO BE REMOVED ONCE WEB HAS BEEN ALTERED. | [optional]
**default_user_id** | **string** | Gets or sets the default user account that the dlna server uses. | [optional]
**auto_create_play_to_profiles** | **bool** | Gets or sets a value indicating whether playTo device profiles should be created. | [optional]
**blast_alive_messages** | **bool** | Gets or sets a value indicating whether to blast alive messages. | [optional]
**send_only_matched_host** | **bool** | gets or sets a value indicating whether to send only matched host. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
