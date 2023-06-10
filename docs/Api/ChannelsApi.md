# OpenAPI\Client\ChannelsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllChannelFeatures()**](ChannelsApi.md#getAllChannelFeatures) | **GET** /Channels/Features | Get all channel features. |
| [**getChannelFeatures()**](ChannelsApi.md#getChannelFeatures) | **GET** /Channels/{channelId}/Features | Get channel features. |
| [**getChannelItems()**](ChannelsApi.md#getChannelItems) | **GET** /Channels/{channelId}/Items | Get channel items. |
| [**getChannels()**](ChannelsApi.md#getChannels) | **GET** /Channels | Gets available channels. |
| [**getLatestChannelItems()**](ChannelsApi.md#getLatestChannelItems) | **GET** /Channels/Items/Latest | Gets latest channel items. |


## `getAllChannelFeatures()`

```php
getAllChannelFeatures(): \OpenAPI\Client\Model\ChannelFeatures[]
```

Get all channel features.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllChannelFeatures();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getAllChannelFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ChannelFeatures[]**](../Model/ChannelFeatures.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannelFeatures()`

```php
getChannelFeatures($channel_id): \OpenAPI\Client\Model\ChannelFeatures
```

Get channel features.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | Channel id.

try {
    $result = $apiInstance->getChannelFeatures($channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannelFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**| Channel id. | |

### Return type

[**\OpenAPI\Client\Model\ChannelFeatures**](../Model/ChannelFeatures.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannelItems()`

```php
getChannelItems($channel_id, $folder_id, $user_id, $start_index, $limit, $sort_order, $filters, $sort_by, $fields): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Get channel items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | Channel Id.
$folder_id = 'folder_id_example'; // string | Optional. Folder Id.
$user_id = 'user_id_example'; // string | Optional. User Id.
$start_index = 56; // int | Optional. The record index to start at. All items with a lower index will be dropped from the results.
$limit = 56; // int | Optional. The maximum number of records to return.
$sort_order = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SortOrder()); // \OpenAPI\Client\Model\SortOrder[] | Optional. Sort Order - Ascending,Descending.
$filters = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFilter()); // \OpenAPI\Client\Model\ItemFilter[] | Optional. Specify additional filters to apply.
$sort_by = array('sort_by_example'); // string[] | Optional. Specify one or more sort orders, comma delimited. Options: Album, AlbumArtist, Artist, Budget, CommunityRating, CriticRating, DateCreated, DatePlayed, PlayCount, PremiereDate, ProductionYear, SortName, Random, Revenue, Runtime.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output.

try {
    $result = $apiInstance->getChannelItems($channel_id, $folder_id, $user_id, $start_index, $limit, $sort_order, $filters, $sort_by, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannelItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**| Channel Id. | |
| **folder_id** | **string**| Optional. Folder Id. | [optional] |
| **user_id** | **string**| Optional. User Id. | [optional] |
| **start_index** | **int**| Optional. The record index to start at. All items with a lower index will be dropped from the results. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\SortOrder[]**](../Model/\OpenAPI\Client\Model\SortOrder.md)| Optional. Sort Order - Ascending,Descending. | [optional] |
| **filters** | [**\OpenAPI\Client\Model\ItemFilter[]**](../Model/\OpenAPI\Client\Model\ItemFilter.md)| Optional. Specify additional filters to apply. | [optional] |
| **sort_by** | [**string[]**](../Model/string.md)| Optional. Specify one or more sort orders, comma delimited. Options: Album, AlbumArtist, Artist, Budget, CommunityRating, CriticRating, DateCreated, DatePlayed, PlayCount, PremiereDate, ProductionYear, SortName, Random, Revenue, Runtime. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. | [optional] |

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

## `getChannels()`

```php
getChannels($user_id, $start_index, $limit, $supports_latest_items, $supports_media_deletion, $is_favorite): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets available channels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User Id to filter by. Use System.Guid.Empty to not filter by user.
$start_index = 56; // int | Optional. The record index to start at. All items with a lower index will be dropped from the results.
$limit = 56; // int | Optional. The maximum number of records to return.
$supports_latest_items = True; // bool | Optional. Filter by channels that support getting latest items.
$supports_media_deletion = True; // bool | Optional. Filter by channels that support media deletion.
$is_favorite = True; // bool | Optional. Filter by channels that are favorite.

try {
    $result = $apiInstance->getChannels($user_id, $start_index, $limit, $supports_latest_items, $supports_media_deletion, $is_favorite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User Id to filter by. Use System.Guid.Empty to not filter by user. | [optional] |
| **start_index** | **int**| Optional. The record index to start at. All items with a lower index will be dropped from the results. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **supports_latest_items** | **bool**| Optional. Filter by channels that support getting latest items. | [optional] |
| **supports_media_deletion** | **bool**| Optional. Filter by channels that support media deletion. | [optional] |
| **is_favorite** | **bool**| Optional. Filter by channels that are favorite. | [optional] |

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

## `getLatestChannelItems()`

```php
getLatestChannelItems($user_id, $start_index, $limit, $filters, $fields, $channel_ids): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets latest channel items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ChannelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | Optional. User Id.
$start_index = 56; // int | Optional. The record index to start at. All items with a lower index will be dropped from the results.
$limit = 56; // int | Optional. The maximum number of records to return.
$filters = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFilter()); // \OpenAPI\Client\Model\ItemFilter[] | Optional. Specify additional filters to apply.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output.
$channel_ids = array('channel_ids_example'); // string[] | Optional. Specify one or more channel id's, comma delimited.

try {
    $result = $apiInstance->getLatestChannelItems($user_id, $start_index, $limit, $filters, $fields, $channel_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelsApi->getLatestChannelItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| Optional. User Id. | [optional] |
| **start_index** | **int**| Optional. The record index to start at. All items with a lower index will be dropped from the results. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **filters** | [**\OpenAPI\Client\Model\ItemFilter[]**](../Model/\OpenAPI\Client\Model\ItemFilter.md)| Optional. Specify additional filters to apply. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. | [optional] |
| **channel_ids** | [**string[]**](../Model/string.md)| Optional. Specify one or more channel id&#39;s, comma delimited. | [optional] |

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
