# OpenAPI\Client\SessionApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addUserToSession()**](SessionApi.md#addUserToSession) | **POST** /Sessions/{sessionId}/User/{userId} | Adds an additional user to a session. |
| [**displayContent()**](SessionApi.md#displayContent) | **POST** /Sessions/{sessionId}/Viewing | Instructs a session to browse to an item or view. |
| [**getAuthProviders()**](SessionApi.md#getAuthProviders) | **GET** /Auth/Providers | Get all auth providers. |
| [**getPasswordResetProviders()**](SessionApi.md#getPasswordResetProviders) | **GET** /Auth/PasswordResetProviders | Get all password reset providers. |
| [**getSessions()**](SessionApi.md#getSessions) | **GET** /Sessions | Gets a list of sessions. |
| [**play()**](SessionApi.md#play) | **POST** /Sessions/{sessionId}/Playing | Instructs a session to play an item. |
| [**postCapabilities()**](SessionApi.md#postCapabilities) | **POST** /Sessions/Capabilities | Updates capabilities for a device. |
| [**postFullCapabilities()**](SessionApi.md#postFullCapabilities) | **POST** /Sessions/Capabilities/Full | Updates capabilities for a device. |
| [**removeUserFromSession()**](SessionApi.md#removeUserFromSession) | **DELETE** /Sessions/{sessionId}/User/{userId} | Removes an additional user from a session. |
| [**reportSessionEnded()**](SessionApi.md#reportSessionEnded) | **POST** /Sessions/Logout | Reports that a session has ended. |
| [**reportViewing()**](SessionApi.md#reportViewing) | **POST** /Sessions/Viewing | Reports that a session is viewing an item. |
| [**sendFullGeneralCommand()**](SessionApi.md#sendFullGeneralCommand) | **POST** /Sessions/{sessionId}/Command | Issues a full general command to a client. |
| [**sendGeneralCommand()**](SessionApi.md#sendGeneralCommand) | **POST** /Sessions/{sessionId}/Command/{command} | Issues a general command to a client. |
| [**sendMessageCommand()**](SessionApi.md#sendMessageCommand) | **POST** /Sessions/{sessionId}/Message | Issues a command to a client to display a message to the user. |
| [**sendPlaystateCommand()**](SessionApi.md#sendPlaystateCommand) | **POST** /Sessions/{sessionId}/Playing/{command} | Issues a playstate command to a client. |
| [**sendSystemCommand()**](SessionApi.md#sendSystemCommand) | **POST** /Sessions/{sessionId}/System/{command} | Issues a system command to a client. |


## `addUserToSession()`

```php
addUserToSession($session_id, $user_id)
```

Adds an additional user to a session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string | The session id.
$user_id = 'user_id_example'; // string | The user id.

try {
    $apiInstance->addUserToSession($session_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->addUserToSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**| The session id. | |
| **user_id** | **string**| The user id. | |

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

## `displayContent()`

```php
displayContent($session_id, $item_type, $item_id, $item_name)
```

Instructs a session to browse to an item or view.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string | The session Id.
$item_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\BaseItemKind(); // \OpenAPI\Client\Model\BaseItemKind | The type of item to browse to.
$item_id = 'item_id_example'; // string | The Id of the item.
$item_name = 'item_name_example'; // string | The name of the item.

try {
    $apiInstance->displayContent($session_id, $item_type, $item_id, $item_name);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->displayContent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**| The session Id. | |
| **item_type** | [**\OpenAPI\Client\Model\BaseItemKind**](../Model/.md)| The type of item to browse to. | |
| **item_id** | **string**| The Id of the item. | |
| **item_name** | **string**| The name of the item. | |

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

## `getAuthProviders()`

```php
getAuthProviders(): \OpenAPI\Client\Model\NameIdPair[]
```

Get all auth providers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAuthProviders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->getAuthProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\NameIdPair[]**](../Model/NameIdPair.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPasswordResetProviders()`

```php
getPasswordResetProviders(): \OpenAPI\Client\Model\NameIdPair[]
```

Get all password reset providers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPasswordResetProviders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->getPasswordResetProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\NameIdPair[]**](../Model/NameIdPair.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSessions()`

```php
getSessions($controllable_by_user_id, $device_id, $active_within_seconds): \OpenAPI\Client\Model\SessionInfo[]
```

Gets a list of sessions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$controllable_by_user_id = 'controllable_by_user_id_example'; // string | Filter by sessions that a given user is allowed to remote control.
$device_id = 'device_id_example'; // string | Filter by device Id.
$active_within_seconds = 56; // int | Optional. Filter by sessions that were active in the last n seconds.

try {
    $result = $apiInstance->getSessions($controllable_by_user_id, $device_id, $active_within_seconds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->getSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **controllable_by_user_id** | **string**| Filter by sessions that a given user is allowed to remote control. | [optional] |
| **device_id** | **string**| Filter by device Id. | [optional] |
| **active_within_seconds** | **int**| Optional. Filter by sessions that were active in the last n seconds. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SessionInfo[]**](../Model/SessionInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `play()`

```php
play($session_id, $play_command, $item_ids, $start_position_ticks, $media_source_id, $audio_stream_index, $subtitle_stream_index, $start_index)
```

Instructs a session to play an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string | The session id.
$play_command = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PlayCommand(); // \OpenAPI\Client\Model\PlayCommand | The type of play command to issue (PlayNow, PlayNext, PlayLast). Clients who have not yet implemented play next and play last may play now.
$item_ids = array('item_ids_example'); // string[] | The ids of the items to play, comma delimited.
$start_position_ticks = 56; // int | The starting position of the first item.
$media_source_id = 'media_source_id_example'; // string | Optional. The media source id.
$audio_stream_index = 56; // int | Optional. The index of the audio stream to play.
$subtitle_stream_index = 56; // int | Optional. The index of the subtitle stream to play.
$start_index = 56; // int | Optional. The start index.

try {
    $apiInstance->play($session_id, $play_command, $item_ids, $start_position_ticks, $media_source_id, $audio_stream_index, $subtitle_stream_index, $start_index);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->play: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**| The session id. | |
| **play_command** | [**\OpenAPI\Client\Model\PlayCommand**](../Model/.md)| The type of play command to issue (PlayNow, PlayNext, PlayLast). Clients who have not yet implemented play next and play last may play now. | |
| **item_ids** | [**string[]**](../Model/string.md)| The ids of the items to play, comma delimited. | |
| **start_position_ticks** | **int**| The starting position of the first item. | [optional] |
| **media_source_id** | **string**| Optional. The media source id. | [optional] |
| **audio_stream_index** | **int**| Optional. The index of the audio stream to play. | [optional] |
| **subtitle_stream_index** | **int**| Optional. The index of the subtitle stream to play. | [optional] |
| **start_index** | **int**| Optional. The start index. | [optional] |

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

## `postCapabilities()`

```php
postCapabilities($id, $playable_media_types, $supported_commands, $supports_media_control, $supports_sync, $supports_persistent_identifier)
```

Updates capabilities for a device.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The session id.
$playable_media_types = array('playable_media_types_example'); // string[] | A list of playable media types, comma delimited. Audio, Video, Book, Photo.
$supported_commands = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\GeneralCommandType()); // \OpenAPI\Client\Model\GeneralCommandType[] | A list of supported remote control commands, comma delimited.
$supports_media_control = false; // bool | Determines whether media can be played remotely..
$supports_sync = false; // bool | Determines whether sync is supported.
$supports_persistent_identifier = true; // bool | Determines whether the device supports a unique identifier.

try {
    $apiInstance->postCapabilities($id, $playable_media_types, $supported_commands, $supports_media_control, $supports_sync, $supports_persistent_identifier);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->postCapabilities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The session id. | [optional] |
| **playable_media_types** | [**string[]**](../Model/string.md)| A list of playable media types, comma delimited. Audio, Video, Book, Photo. | [optional] |
| **supported_commands** | [**\OpenAPI\Client\Model\GeneralCommandType[]**](../Model/\OpenAPI\Client\Model\GeneralCommandType.md)| A list of supported remote control commands, comma delimited. | [optional] |
| **supports_media_control** | **bool**| Determines whether media can be played remotely.. | [optional] [default to false] |
| **supports_sync** | **bool**| Determines whether sync is supported. | [optional] [default to false] |
| **supports_persistent_identifier** | **bool**| Determines whether the device supports a unique identifier. | [optional] [default to true] |

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

## `postFullCapabilities()`

```php
postFullCapabilities($post_full_capabilities_request, $id)
```

Updates capabilities for a device.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_full_capabilities_request = new \OpenAPI\Client\Model\PostFullCapabilitiesRequest(); // \OpenAPI\Client\Model\PostFullCapabilitiesRequest | The MediaBrowser.Model.Session.ClientCapabilities.
$id = 'id_example'; // string | The session id.

try {
    $apiInstance->postFullCapabilities($post_full_capabilities_request, $id);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->postFullCapabilities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_full_capabilities_request** | [**\OpenAPI\Client\Model\PostFullCapabilitiesRequest**](../Model/PostFullCapabilitiesRequest.md)| The MediaBrowser.Model.Session.ClientCapabilities. | |
| **id** | **string**| The session id. | [optional] |

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

## `removeUserFromSession()`

```php
removeUserFromSession($session_id, $user_id)
```

Removes an additional user from a session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string | The session id.
$user_id = 'user_id_example'; // string | The user id.

try {
    $apiInstance->removeUserFromSession($session_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->removeUserFromSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**| The session id. | |
| **user_id** | **string**| The user id. | |

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

## `reportSessionEnded()`

```php
reportSessionEnded()
```

Reports that a session has ended.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->reportSessionEnded();
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->reportSessionEnded: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `reportViewing()`

```php
reportViewing($item_id, $session_id)
```

Reports that a session is viewing an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item id.
$session_id = 'session_id_example'; // string | The session id.

try {
    $apiInstance->reportViewing($item_id, $session_id);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->reportViewing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **session_id** | **string**| The session id. | [optional] |

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

## `sendFullGeneralCommand()`

```php
sendFullGeneralCommand($session_id, $send_full_general_command_request)
```

Issues a full general command to a client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string | The session id.
$send_full_general_command_request = new \OpenAPI\Client\Model\SendFullGeneralCommandRequest(); // \OpenAPI\Client\Model\SendFullGeneralCommandRequest | The MediaBrowser.Model.Session.GeneralCommand.

try {
    $apiInstance->sendFullGeneralCommand($session_id, $send_full_general_command_request);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->sendFullGeneralCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**| The session id. | |
| **send_full_general_command_request** | [**\OpenAPI\Client\Model\SendFullGeneralCommandRequest**](../Model/SendFullGeneralCommandRequest.md)| The MediaBrowser.Model.Session.GeneralCommand. | |

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

## `sendGeneralCommand()`

```php
sendGeneralCommand($session_id, $command)
```

Issues a general command to a client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string | The session id.
$command = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\GeneralCommandType(); // \OpenAPI\Client\Model\GeneralCommandType | The command to send.

try {
    $apiInstance->sendGeneralCommand($session_id, $command);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->sendGeneralCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**| The session id. | |
| **command** | [**\OpenAPI\Client\Model\GeneralCommandType**](../Model/.md)| The command to send. | |

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

## `sendMessageCommand()`

```php
sendMessageCommand($session_id, $send_message_command_request)
```

Issues a command to a client to display a message to the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string | The session id.
$send_message_command_request = new \OpenAPI\Client\Model\SendMessageCommandRequest(); // \OpenAPI\Client\Model\SendMessageCommandRequest | The MediaBrowser.Model.Session.MessageCommand object containing Header, Message Text, and TimeoutMs.

try {
    $apiInstance->sendMessageCommand($session_id, $send_message_command_request);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->sendMessageCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**| The session id. | |
| **send_message_command_request** | [**\OpenAPI\Client\Model\SendMessageCommandRequest**](../Model/SendMessageCommandRequest.md)| The MediaBrowser.Model.Session.MessageCommand object containing Header, Message Text, and TimeoutMs. | |

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

## `sendPlaystateCommand()`

```php
sendPlaystateCommand($session_id, $command, $seek_position_ticks, $controlling_user_id)
```

Issues a playstate command to a client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string | The session id.
$command = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PlaystateCommand(); // \OpenAPI\Client\Model\PlaystateCommand | The MediaBrowser.Model.Session.PlaystateCommand.
$seek_position_ticks = 56; // int | The optional position ticks.
$controlling_user_id = 'controlling_user_id_example'; // string | The optional controlling user id.

try {
    $apiInstance->sendPlaystateCommand($session_id, $command, $seek_position_ticks, $controlling_user_id);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->sendPlaystateCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**| The session id. | |
| **command** | [**\OpenAPI\Client\Model\PlaystateCommand**](../Model/.md)| The MediaBrowser.Model.Session.PlaystateCommand. | |
| **seek_position_ticks** | **int**| The optional position ticks. | [optional] |
| **controlling_user_id** | **string**| The optional controlling user id. | [optional] |

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

## `sendSystemCommand()`

```php
sendSystemCommand($session_id, $command)
```

Issues a system command to a client.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string | The session id.
$command = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\GeneralCommandType(); // \OpenAPI\Client\Model\GeneralCommandType | The command to send.

try {
    $apiInstance->sendSystemCommand($session_id, $command);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->sendSystemCommand: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**| The session id. | |
| **command** | [**\OpenAPI\Client\Model\GeneralCommandType**](../Model/.md)| The command to send. | |

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
