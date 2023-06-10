# OpenAPI\Client\ItemRefreshApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**refreshItem()**](ItemRefreshApi.md#refreshItem) | **POST** /Items/{itemId}/Refresh | Refreshes metadata for an item. |


## `refreshItem()`

```php
refreshItem($item_id, $metadata_refresh_mode, $image_refresh_mode, $replace_all_metadata, $replace_all_images)
```

Refreshes metadata for an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemRefreshApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | Item id.
$metadata_refresh_mode = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\MetadataRefreshMode(); // \OpenAPI\Client\Model\MetadataRefreshMode | (Optional) Specifies the metadata refresh mode.
$image_refresh_mode = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\MetadataRefreshMode(); // \OpenAPI\Client\Model\MetadataRefreshMode | (Optional) Specifies the image refresh mode.
$replace_all_metadata = false; // bool | (Optional) Determines if metadata should be replaced. Only applicable if mode is FullRefresh.
$replace_all_images = false; // bool | (Optional) Determines if images should be replaced. Only applicable if mode is FullRefresh.

try {
    $apiInstance->refreshItem($item_id, $metadata_refresh_mode, $image_refresh_mode, $replace_all_metadata, $replace_all_images);
} catch (Exception $e) {
    echo 'Exception when calling ItemRefreshApi->refreshItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| Item id. | |
| **metadata_refresh_mode** | [**\OpenAPI\Client\Model\MetadataRefreshMode**](../Model/.md)| (Optional) Specifies the metadata refresh mode. | [optional] |
| **image_refresh_mode** | [**\OpenAPI\Client\Model\MetadataRefreshMode**](../Model/.md)| (Optional) Specifies the image refresh mode. | [optional] |
| **replace_all_metadata** | **bool**| (Optional) Determines if metadata should be replaced. Only applicable if mode is FullRefresh. | [optional] [default to false] |
| **replace_all_images** | **bool**| (Optional) Determines if images should be replaced. Only applicable if mode is FullRefresh. | [optional] [default to false] |

### Return type

void (empty response body)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
