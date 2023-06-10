# OpenAPI\Client\PlaylistsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addToPlaylist()**](PlaylistsApi.md#addToPlaylist) | **POST** /Playlists/{playlistId}/Items | Adds items to a playlist. |
| [**createPlaylist()**](PlaylistsApi.md#createPlaylist) | **POST** /Playlists | Creates a new playlist. |
| [**getPlaylistItems()**](PlaylistsApi.md#getPlaylistItems) | **GET** /Playlists/{playlistId}/Items | Gets the original items of a playlist. |
| [**moveItem()**](PlaylistsApi.md#moveItem) | **POST** /Playlists/{playlistId}/Items/{itemId}/Move/{newIndex} | Moves a playlist item. |
| [**removeFromPlaylist()**](PlaylistsApi.md#removeFromPlaylist) | **DELETE** /Playlists/{playlistId}/Items | Removes items from a playlist. |


## `addToPlaylist()`

```php
addToPlaylist($playlist_id, $ids, $user_id)
```

Adds items to a playlist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaylistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_id = 'playlist_id_example'; // string | The playlist id.
$ids = array('ids_example'); // string[] | Item id, comma delimited.
$user_id = 'user_id_example'; // string | The userId.

try {
    $apiInstance->addToPlaylist($playlist_id, $ids, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->addToPlaylist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **playlist_id** | **string**| The playlist id. | |
| **ids** | [**string[]**](../Model/string.md)| Item id, comma delimited. | [optional] |
| **user_id** | **string**| The userId. | [optional] |

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

## `createPlaylist()`

```php
createPlaylist($name, $ids, $user_id, $media_type, $create_playlist_request): \OpenAPI\Client\Model\PlaylistCreationResult
```

Creates a new playlist.

For backwards compatibility parameters can be sent via Query or Body, with Query having higher precedence.  Query parameters are obsolete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaylistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The playlist name.
$ids = array('ids_example'); // string[] | The item ids.
$user_id = 'user_id_example'; // string | The user id.
$media_type = 'media_type_example'; // string | The media type.
$create_playlist_request = new \OpenAPI\Client\Model\CreatePlaylistRequest(); // \OpenAPI\Client\Model\CreatePlaylistRequest | The create playlist payload.

try {
    $result = $apiInstance->createPlaylist($name, $ids, $user_id, $media_type, $create_playlist_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->createPlaylist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The playlist name. | [optional] |
| **ids** | [**string[]**](../Model/string.md)| The item ids. | [optional] |
| **user_id** | **string**| The user id. | [optional] |
| **media_type** | **string**| The media type. | [optional] |
| **create_playlist_request** | [**\OpenAPI\Client\Model\CreatePlaylistRequest**](../Model/CreatePlaylistRequest.md)| The create playlist payload. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PlaylistCreationResult**](../Model/PlaylistCreationResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlaylistItems()`

```php
getPlaylistItems($playlist_id, $user_id, $start_index, $limit, $fields, $enable_images, $enable_user_data, $image_type_limit, $enable_image_types): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets the original items of a playlist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaylistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_id = 'playlist_id_example'; // string | The playlist id.
$user_id = 'user_id_example'; // string | User id.
$start_index = 56; // int | Optional. The record index to start at. All items with a lower index will be dropped from the results.
$limit = 56; // int | Optional. The maximum number of records to return.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output.
$enable_images = True; // bool | Optional. Include image information in output.
$enable_user_data = True; // bool | Optional. Include user data.
$image_type_limit = 56; // int | Optional. The max number of images to return, per image type.
$enable_image_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType()); // \OpenAPI\Client\Model\ImageType[] | Optional. The image types to include in the output.

try {
    $result = $apiInstance->getPlaylistItems($playlist_id, $user_id, $start_index, $limit, $fields, $enable_images, $enable_user_data, $image_type_limit, $enable_image_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->getPlaylistItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **playlist_id** | **string**| The playlist id. | |
| **user_id** | **string**| User id. | |
| **start_index** | **int**| Optional. The record index to start at. All items with a lower index will be dropped from the results. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. | [optional] |
| **enable_images** | **bool**| Optional. Include image information in output. | [optional] |
| **enable_user_data** | **bool**| Optional. Include user data. | [optional] |
| **image_type_limit** | **int**| Optional. The max number of images to return, per image type. | [optional] |
| **enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](../Model/\OpenAPI\Client\Model\ImageType.md)| Optional. The image types to include in the output. | [optional] |

### Return type

[**\OpenAPI\Client\Model\BaseItemDtoQueryResult**](../Model/BaseItemDtoQueryResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveItem()`

```php
moveItem($playlist_id, $item_id, $new_index)
```

Moves a playlist item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaylistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_id = 'playlist_id_example'; // string | The playlist id.
$item_id = 'item_id_example'; // string | The item id.
$new_index = 56; // int | The new index.

try {
    $apiInstance->moveItem($playlist_id, $item_id, $new_index);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->moveItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **playlist_id** | **string**| The playlist id. | |
| **item_id** | **string**| The item id. | |
| **new_index** | **int**| The new index. | |

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

## `removeFromPlaylist()`

```php
removeFromPlaylist($playlist_id, $entry_ids)
```

Removes items from a playlist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PlaylistsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$playlist_id = 'playlist_id_example'; // string | The playlist id.
$entry_ids = array('entry_ids_example'); // string[] | The item ids, comma delimited.

try {
    $apiInstance->removeFromPlaylist($playlist_id, $entry_ids);
} catch (Exception $e) {
    echo 'Exception when calling PlaylistsApi->removeFromPlaylist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **playlist_id** | **string**| The playlist id. | |
| **entry_ids** | [**string[]**](../Model/string.md)| The item ids, comma delimited. | [optional] |

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
