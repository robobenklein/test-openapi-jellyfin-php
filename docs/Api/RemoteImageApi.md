# OpenAPI\Client\RemoteImageApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**downloadRemoteImage()**](RemoteImageApi.md#downloadRemoteImage) | **POST** /Items/{itemId}/RemoteImages/Download | Downloads a remote image for an item. |
| [**getRemoteImageProviders()**](RemoteImageApi.md#getRemoteImageProviders) | **GET** /Items/{itemId}/RemoteImages/Providers | Gets available remote image providers for an item. |
| [**getRemoteImages()**](RemoteImageApi.md#getRemoteImages) | **GET** /Items/{itemId}/RemoteImages | Gets available remote images for an item. |


## `downloadRemoteImage()`

```php
downloadRemoteImage($item_id, $type, $image_url)
```

Downloads a remote image for an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RemoteImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | Item Id.
$type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | The image type.
$image_url = 'image_url_example'; // string | The image url.

try {
    $apiInstance->downloadRemoteImage($item_id, $type, $image_url);
} catch (Exception $e) {
    echo 'Exception when calling RemoteImageApi->downloadRemoteImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| Item Id. | |
| **type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| The image type. | |
| **image_url** | **string**| The image url. | [optional] |

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

## `getRemoteImageProviders()`

```php
getRemoteImageProviders($item_id): \OpenAPI\Client\Model\ImageProviderInfo[]
```

Gets available remote image providers for an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RemoteImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | Item Id.

try {
    $result = $apiInstance->getRemoteImageProviders($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemoteImageApi->getRemoteImageProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| Item Id. | |

### Return type

[**\OpenAPI\Client\Model\ImageProviderInfo[]**](../Model/ImageProviderInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRemoteImages()`

```php
getRemoteImages($item_id, $type, $start_index, $limit, $provider_name, $include_all_languages): \OpenAPI\Client\Model\RemoteImageResult
```

Gets available remote images for an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RemoteImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | Item Id.
$type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | The image type.
$start_index = 56; // int | Optional. The record index to start at. All items with a lower index will be dropped from the results.
$limit = 56; // int | Optional. The maximum number of records to return.
$provider_name = 'provider_name_example'; // string | Optional. The image provider to use.
$include_all_languages = false; // bool | Optional. Include all languages.

try {
    $result = $apiInstance->getRemoteImages($item_id, $type, $start_index, $limit, $provider_name, $include_all_languages);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemoteImageApi->getRemoteImages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| Item Id. | |
| **type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| The image type. | [optional] |
| **start_index** | **int**| Optional. The record index to start at. All items with a lower index will be dropped from the results. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **provider_name** | **string**| Optional. The image provider to use. | [optional] |
| **include_all_languages** | **bool**| Optional. Include all languages. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\RemoteImageResult**](../Model/RemoteImageResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
