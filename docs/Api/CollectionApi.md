# OpenAPI\Client\CollectionApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addToCollection()**](CollectionApi.md#addToCollection) | **POST** /Collections/{collectionId}/Items | Adds items to a collection. |
| [**createCollection()**](CollectionApi.md#createCollection) | **POST** /Collections | Creates a new collection. |
| [**removeFromCollection()**](CollectionApi.md#removeFromCollection) | **DELETE** /Collections/{collectionId}/Items | Removes items from a collection. |


## `addToCollection()`

```php
addToCollection($collection_id, $ids)
```

Adds items to a collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection_id = 'collection_id_example'; // string | The collection id.
$ids = array('ids_example'); // string[] | Item ids, comma delimited.

try {
    $apiInstance->addToCollection($collection_id, $ids);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->addToCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| The collection id. | |
| **ids** | [**string[]**](../Model/string.md)| Item ids, comma delimited. | |

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

## `createCollection()`

```php
createCollection($name, $ids, $parent_id, $is_locked): \OpenAPI\Client\Model\CollectionCreationResult
```

Creates a new collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of the collection.
$ids = array('ids_example'); // string[] | Item Ids to add to the collection.
$parent_id = 'parent_id_example'; // string | Optional. Create the collection within a specific folder.
$is_locked = false; // bool | Whether or not to lock the new collection.

try {
    $result = $apiInstance->createCollection($name, $ids, $parent_id, $is_locked);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->createCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the collection. | [optional] |
| **ids** | [**string[]**](../Model/string.md)| Item Ids to add to the collection. | [optional] |
| **parent_id** | **string**| Optional. Create the collection within a specific folder. | [optional] |
| **is_locked** | **bool**| Whether or not to lock the new collection. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\CollectionCreationResult**](../Model/CollectionCreationResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeFromCollection()`

```php
removeFromCollection($collection_id, $ids)
```

Removes items from a collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CollectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$collection_id = 'collection_id_example'; // string | The collection id.
$ids = array('ids_example'); // string[] | Item ids, comma delimited.

try {
    $apiInstance->removeFromCollection($collection_id, $ids);
} catch (Exception $e) {
    echo 'Exception when calling CollectionApi->removeFromCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collection_id** | **string**| The collection id. | |
| **ids** | [**string[]**](../Model/string.md)| Item ids, comma delimited. | |

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
