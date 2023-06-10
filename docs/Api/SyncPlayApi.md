# OpenAPI\Client\SyncPlayApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**syncPlayBuffering()**](SyncPlayApi.md#syncPlayBuffering) | **POST** /SyncPlay/Buffering | Notify SyncPlay group that member is buffering. |
| [**syncPlayCreateGroup()**](SyncPlayApi.md#syncPlayCreateGroup) | **POST** /SyncPlay/New | Create a new SyncPlay group. |
| [**syncPlayGetGroups()**](SyncPlayApi.md#syncPlayGetGroups) | **GET** /SyncPlay/List | Gets all SyncPlay groups. |
| [**syncPlayJoinGroup()**](SyncPlayApi.md#syncPlayJoinGroup) | **POST** /SyncPlay/Join | Join an existing SyncPlay group. |
| [**syncPlayLeaveGroup()**](SyncPlayApi.md#syncPlayLeaveGroup) | **POST** /SyncPlay/Leave | Leave the joined SyncPlay group. |
| [**syncPlayMovePlaylistItem()**](SyncPlayApi.md#syncPlayMovePlaylistItem) | **POST** /SyncPlay/MovePlaylistItem | Request to move an item in the playlist in SyncPlay group. |
| [**syncPlayNextItem()**](SyncPlayApi.md#syncPlayNextItem) | **POST** /SyncPlay/NextItem | Request next item in SyncPlay group. |
| [**syncPlayPause()**](SyncPlayApi.md#syncPlayPause) | **POST** /SyncPlay/Pause | Request pause in SyncPlay group. |
| [**syncPlayPing()**](SyncPlayApi.md#syncPlayPing) | **POST** /SyncPlay/Ping | Update session ping. |
| [**syncPlayPreviousItem()**](SyncPlayApi.md#syncPlayPreviousItem) | **POST** /SyncPlay/PreviousItem | Request previous item in SyncPlay group. |
| [**syncPlayQueue()**](SyncPlayApi.md#syncPlayQueue) | **POST** /SyncPlay/Queue | Request to queue items to the playlist of a SyncPlay group. |
| [**syncPlayReady()**](SyncPlayApi.md#syncPlayReady) | **POST** /SyncPlay/Ready | Notify SyncPlay group that member is ready for playback. |
| [**syncPlayRemoveFromPlaylist()**](SyncPlayApi.md#syncPlayRemoveFromPlaylist) | **POST** /SyncPlay/RemoveFromPlaylist | Request to remove items from the playlist in SyncPlay group. |
| [**syncPlaySeek()**](SyncPlayApi.md#syncPlaySeek) | **POST** /SyncPlay/Seek | Request seek in SyncPlay group. |
| [**syncPlaySetIgnoreWait()**](SyncPlayApi.md#syncPlaySetIgnoreWait) | **POST** /SyncPlay/SetIgnoreWait | Request SyncPlay group to ignore member during group-wait. |
| [**syncPlaySetNewQueue()**](SyncPlayApi.md#syncPlaySetNewQueue) | **POST** /SyncPlay/SetNewQueue | Request to set new playlist in SyncPlay group. |
| [**syncPlaySetPlaylistItem()**](SyncPlayApi.md#syncPlaySetPlaylistItem) | **POST** /SyncPlay/SetPlaylistItem | Request to change playlist item in SyncPlay group. |
| [**syncPlaySetRepeatMode()**](SyncPlayApi.md#syncPlaySetRepeatMode) | **POST** /SyncPlay/SetRepeatMode | Request to set repeat mode in SyncPlay group. |
| [**syncPlaySetShuffleMode()**](SyncPlayApi.md#syncPlaySetShuffleMode) | **POST** /SyncPlay/SetShuffleMode | Request to set shuffle mode in SyncPlay group. |
| [**syncPlayStop()**](SyncPlayApi.md#syncPlayStop) | **POST** /SyncPlay/Stop | Request stop in SyncPlay group. |
| [**syncPlayUnpause()**](SyncPlayApi.md#syncPlayUnpause) | **POST** /SyncPlay/Unpause | Request unpause in SyncPlay group. |


## `syncPlayBuffering()`

```php
syncPlayBuffering($sync_play_buffering_request)
```

Notify SyncPlay group that member is buffering.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncPlayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_play_buffering_request = new \OpenAPI\Client\Model\SyncPlayBufferingRequest(); // \OpenAPI\Client\Model\SyncPlayBufferingRequest | The player status.

try {
    $apiInstance->syncPlayBuffering($sync_play_buffering_request);
} catch (Exception $e) {
    echo 'Exception when calling SyncPlayApi->syncPlayBuffering: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_play_buffering_request** | [**\OpenAPI\Client\Model\SyncPlayBufferingRequest**](../Model/SyncPlayBufferingRequest.md)| The player status. | |

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

## `syncPlayCreateGroup()`

```php
syncPlayCreateGroup($sync_play_create_group_request)
```

Create a new SyncPlay group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncPlayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_play_create_group_request = new \OpenAPI\Client\Model\SyncPlayCreateGroupRequest(); // \OpenAPI\Client\Model\SyncPlayCreateGroupRequest | The settings of the new group.

try {
    $apiInstance->syncPlayCreateGroup($sync_play_create_group_request);
} catch (Exception $e) {
    echo 'Exception when calling SyncPlayApi->syncPlayCreateGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_play_create_group_request** | [**\OpenAPI\Client\Model\SyncPlayCreateGroupRequest**](../Model/SyncPlayCreateGroupRequest.md)| The settings of the new group. | |

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

## `syncPlayGetGroups()`

```php
syncPlayGetGroups(): \OpenAPI\Client\Model\GroupInfoDto[]
```

Gets all SyncPlay groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncPlayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->syncPlayGetGroups();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncPlayApi->syncPlayGetGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GroupInfoDto[]**](../Model/GroupInfoDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `syncPlayJoinGroup()`

```php
syncPlayJoinGroup($sync_play_join_group_request)
```

Join an existing SyncPlay group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncPlayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_play_join_group_request = new \OpenAPI\Client\Model\SyncPlayJoinGroupRequest(); // \OpenAPI\Client\Model\SyncPlayJoinGroupRequest | The group to join.

try {
    $apiInstance->syncPlayJoinGroup($sync_play_join_group_request);
} catch (Exception $e) {
    echo 'Exception when calling SyncPlayApi->syncPlayJoinGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_play_join_group_request** | [**\OpenAPI\Client\Model\SyncPlayJoinGroupRequest**](../Model/SyncPlayJoinGroupRequest.md)| The group to join. | |

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

## `syncPlayLeaveGroup()`

```php
syncPlayLeaveGroup()
```

Leave the joined SyncPlay group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncPlayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->syncPlayLeaveGroup();
} catch (Exception $e) {
    echo 'Exception when calling SyncPlayApi->syncPlayLeaveGroup: ', $e->getMessage(), PHP_EOL;
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

## `syncPlayMovePlaylistItem()`

```php
syncPlayMovePlaylistItem($sync_play_move_playlist_item_request)
```

Request to move an item in the playlist in SyncPlay group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncPlayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_play_move_playlist_item_request = new \OpenAPI\Client\Model\SyncPlayMovePlaylistItemRequest(); // \OpenAPI\Client\Model\SyncPlayMovePlaylistItemRequest | The new position for the item.

try {
    $apiInstance->syncPlayMovePlaylistItem($sync_play_move_playlist_item_request);
} catch (Exception $e) {
    echo 'Exception when calling SyncPlayApi->syncPlayMovePlaylistItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_play_move_playlist_item_request** | [**\OpenAPI\Client\Model\SyncPlayMovePlaylistItemRequest**](../Model/SyncPlayMovePlaylistItemRequest.md)| The new position for the item. | |

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

## `syncPlayNextItem()`

```php
syncPlayNextItem($sync_play_next_item_request)
```

Request next item in SyncPlay group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncPlayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_play_next_item_request = new \OpenAPI\Client\Model\SyncPlayNextItemRequest(); // \OpenAPI\Client\Model\SyncPlayNextItemRequest | The current item information.

try {
    $apiInstance->syncPlayNextItem($sync_play_next_item_request);
} catch (Exception $e) {
    echo 'Exception when calling SyncPlayApi->syncPlayNextItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_play_next_item_request** | [**\OpenAPI\Client\Model\SyncPlayNextItemRequest**](../Model/SyncPlayNextItemRequest.md)| The current item information. | |

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

## `syncPlayPause()`

```php
syncPlayPause()
```

Request pause in SyncPlay group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncPlayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->syncPlayPause();
} catch (Exception $e) {
    echo 'Exception when calling SyncPlayApi->syncPlayPause: ', $e->getMessage(), PHP_EOL;
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

## `syncPlayPing()`

```php
syncPlayPing($sync_play_ping_request)
```

Update session ping.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncPlayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_play_ping_request = new \OpenAPI\Client\Model\SyncPlayPingRequest(); // \OpenAPI\Client\Model\SyncPlayPingRequest | The new ping.

try {
    $apiInstance->syncPlayPing($sync_play_ping_request);
} catch (Exception $e) {
    echo 'Exception when calling SyncPlayApi->syncPlayPing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_play_ping_request** | [**\OpenAPI\Client\Model\SyncPlayPingRequest**](../Model/SyncPlayPingRequest.md)| The new ping. | |

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

## `syncPlayPreviousItem()`

```php
syncPlayPreviousItem($sync_play_previous_item_request)
```

Request previous item in SyncPlay group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncPlayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_play_previous_item_request = new \OpenAPI\Client\Model\SyncPlayPreviousItemRequest(); // \OpenAPI\Client\Model\SyncPlayPreviousItemRequest | The current item information.

try {
    $apiInstance->syncPlayPreviousItem($sync_play_previous_item_request);
} catch (Exception $e) {
    echo 'Exception when calling SyncPlayApi->syncPlayPreviousItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_play_previous_item_request** | [**\OpenAPI\Client\Model\SyncPlayPreviousItemRequest**](../Model/SyncPlayPreviousItemRequest.md)| The current item information. | |

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

## `syncPlayQueue()`

```php
syncPlayQueue($sync_play_queue_request)
```

Request to queue items to the playlist of a SyncPlay group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncPlayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_play_queue_request = new \OpenAPI\Client\Model\SyncPlayQueueRequest(); // \OpenAPI\Client\Model\SyncPlayQueueRequest | The items to add.

try {
    $apiInstance->syncPlayQueue($sync_play_queue_request);
} catch (Exception $e) {
    echo 'Exception when calling SyncPlayApi->syncPlayQueue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_play_queue_request** | [**\OpenAPI\Client\Model\SyncPlayQueueRequest**](../Model/SyncPlayQueueRequest.md)| The items to add. | |

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

## `syncPlayReady()`

```php
syncPlayReady($sync_play_ready_request)
```

Notify SyncPlay group that member is ready for playback.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncPlayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_play_ready_request = new \OpenAPI\Client\Model\SyncPlayReadyRequest(); // \OpenAPI\Client\Model\SyncPlayReadyRequest | The player status.

try {
    $apiInstance->syncPlayReady($sync_play_ready_request);
} catch (Exception $e) {
    echo 'Exception when calling SyncPlayApi->syncPlayReady: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_play_ready_request** | [**\OpenAPI\Client\Model\SyncPlayReadyRequest**](../Model/SyncPlayReadyRequest.md)| The player status. | |

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

## `syncPlayRemoveFromPlaylist()`

```php
syncPlayRemoveFromPlaylist($sync_play_remove_from_playlist_request)
```

Request to remove items from the playlist in SyncPlay group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncPlayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_play_remove_from_playlist_request = new \OpenAPI\Client\Model\SyncPlayRemoveFromPlaylistRequest(); // \OpenAPI\Client\Model\SyncPlayRemoveFromPlaylistRequest | The items to remove.

try {
    $apiInstance->syncPlayRemoveFromPlaylist($sync_play_remove_from_playlist_request);
} catch (Exception $e) {
    echo 'Exception when calling SyncPlayApi->syncPlayRemoveFromPlaylist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_play_remove_from_playlist_request** | [**\OpenAPI\Client\Model\SyncPlayRemoveFromPlaylistRequest**](../Model/SyncPlayRemoveFromPlaylistRequest.md)| The items to remove. | |

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

## `syncPlaySeek()`

```php
syncPlaySeek($sync_play_seek_request)
```

Request seek in SyncPlay group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncPlayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_play_seek_request = new \OpenAPI\Client\Model\SyncPlaySeekRequest(); // \OpenAPI\Client\Model\SyncPlaySeekRequest | The new playback position.

try {
    $apiInstance->syncPlaySeek($sync_play_seek_request);
} catch (Exception $e) {
    echo 'Exception when calling SyncPlayApi->syncPlaySeek: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_play_seek_request** | [**\OpenAPI\Client\Model\SyncPlaySeekRequest**](../Model/SyncPlaySeekRequest.md)| The new playback position. | |

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

## `syncPlaySetIgnoreWait()`

```php
syncPlaySetIgnoreWait($sync_play_set_ignore_wait_request)
```

Request SyncPlay group to ignore member during group-wait.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncPlayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_play_set_ignore_wait_request = new \OpenAPI\Client\Model\SyncPlaySetIgnoreWaitRequest(); // \OpenAPI\Client\Model\SyncPlaySetIgnoreWaitRequest | The settings to set.

try {
    $apiInstance->syncPlaySetIgnoreWait($sync_play_set_ignore_wait_request);
} catch (Exception $e) {
    echo 'Exception when calling SyncPlayApi->syncPlaySetIgnoreWait: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_play_set_ignore_wait_request** | [**\OpenAPI\Client\Model\SyncPlaySetIgnoreWaitRequest**](../Model/SyncPlaySetIgnoreWaitRequest.md)| The settings to set. | |

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

## `syncPlaySetNewQueue()`

```php
syncPlaySetNewQueue($sync_play_set_new_queue_request)
```

Request to set new playlist in SyncPlay group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncPlayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_play_set_new_queue_request = new \OpenAPI\Client\Model\SyncPlaySetNewQueueRequest(); // \OpenAPI\Client\Model\SyncPlaySetNewQueueRequest | The new playlist to play in the group.

try {
    $apiInstance->syncPlaySetNewQueue($sync_play_set_new_queue_request);
} catch (Exception $e) {
    echo 'Exception when calling SyncPlayApi->syncPlaySetNewQueue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_play_set_new_queue_request** | [**\OpenAPI\Client\Model\SyncPlaySetNewQueueRequest**](../Model/SyncPlaySetNewQueueRequest.md)| The new playlist to play in the group. | |

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

## `syncPlaySetPlaylistItem()`

```php
syncPlaySetPlaylistItem($sync_play_set_playlist_item_request)
```

Request to change playlist item in SyncPlay group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncPlayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_play_set_playlist_item_request = new \OpenAPI\Client\Model\SyncPlaySetPlaylistItemRequest(); // \OpenAPI\Client\Model\SyncPlaySetPlaylistItemRequest | The new item to play.

try {
    $apiInstance->syncPlaySetPlaylistItem($sync_play_set_playlist_item_request);
} catch (Exception $e) {
    echo 'Exception when calling SyncPlayApi->syncPlaySetPlaylistItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_play_set_playlist_item_request** | [**\OpenAPI\Client\Model\SyncPlaySetPlaylistItemRequest**](../Model/SyncPlaySetPlaylistItemRequest.md)| The new item to play. | |

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

## `syncPlaySetRepeatMode()`

```php
syncPlaySetRepeatMode($sync_play_set_repeat_mode_request)
```

Request to set repeat mode in SyncPlay group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncPlayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_play_set_repeat_mode_request = new \OpenAPI\Client\Model\SyncPlaySetRepeatModeRequest(); // \OpenAPI\Client\Model\SyncPlaySetRepeatModeRequest | The new repeat mode.

try {
    $apiInstance->syncPlaySetRepeatMode($sync_play_set_repeat_mode_request);
} catch (Exception $e) {
    echo 'Exception when calling SyncPlayApi->syncPlaySetRepeatMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_play_set_repeat_mode_request** | [**\OpenAPI\Client\Model\SyncPlaySetRepeatModeRequest**](../Model/SyncPlaySetRepeatModeRequest.md)| The new repeat mode. | |

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

## `syncPlaySetShuffleMode()`

```php
syncPlaySetShuffleMode($sync_play_set_shuffle_mode_request)
```

Request to set shuffle mode in SyncPlay group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncPlayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sync_play_set_shuffle_mode_request = new \OpenAPI\Client\Model\SyncPlaySetShuffleModeRequest(); // \OpenAPI\Client\Model\SyncPlaySetShuffleModeRequest | The new shuffle mode.

try {
    $apiInstance->syncPlaySetShuffleMode($sync_play_set_shuffle_mode_request);
} catch (Exception $e) {
    echo 'Exception when calling SyncPlayApi->syncPlaySetShuffleMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_play_set_shuffle_mode_request** | [**\OpenAPI\Client\Model\SyncPlaySetShuffleModeRequest**](../Model/SyncPlaySetShuffleModeRequest.md)| The new shuffle mode. | |

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

## `syncPlayStop()`

```php
syncPlayStop()
```

Request stop in SyncPlay group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncPlayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->syncPlayStop();
} catch (Exception $e) {
    echo 'Exception when calling SyncPlayApi->syncPlayStop: ', $e->getMessage(), PHP_EOL;
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

## `syncPlayUnpause()`

```php
syncPlayUnpause()
```

Request unpause in SyncPlay group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncPlayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->syncPlayUnpause();
} catch (Exception $e) {
    echo 'Exception when calling SyncPlayApi->syncPlayUnpause: ', $e->getMessage(), PHP_EOL;
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
