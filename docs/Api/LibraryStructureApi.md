# OpenAPI\Client\LibraryStructureApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addMediaPath()**](LibraryStructureApi.md#addMediaPath) | **POST** /Library/VirtualFolders/Paths | Add a media path to a library. |
| [**addVirtualFolder()**](LibraryStructureApi.md#addVirtualFolder) | **POST** /Library/VirtualFolders | Adds a virtual folder. |
| [**getVirtualFolders()**](LibraryStructureApi.md#getVirtualFolders) | **GET** /Library/VirtualFolders | Gets all virtual folders. |
| [**removeMediaPath()**](LibraryStructureApi.md#removeMediaPath) | **DELETE** /Library/VirtualFolders/Paths | Remove a media path. |
| [**removeVirtualFolder()**](LibraryStructureApi.md#removeVirtualFolder) | **DELETE** /Library/VirtualFolders | Removes a virtual folder. |
| [**renameVirtualFolder()**](LibraryStructureApi.md#renameVirtualFolder) | **POST** /Library/VirtualFolders/Name | Renames a virtual folder. |
| [**updateLibraryOptions()**](LibraryStructureApi.md#updateLibraryOptions) | **POST** /Library/VirtualFolders/LibraryOptions | Update library options. |
| [**updateMediaPath()**](LibraryStructureApi.md#updateMediaPath) | **POST** /Library/VirtualFolders/Paths/Update | Updates a media path. |


## `addMediaPath()`

```php
addMediaPath($add_media_path_request, $refresh_library)
```

Add a media path to a library.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryStructureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_media_path_request = new \OpenAPI\Client\Model\AddMediaPathRequest(); // \OpenAPI\Client\Model\AddMediaPathRequest | The media path dto.
$refresh_library = false; // bool | Whether to refresh the library.

try {
    $apiInstance->addMediaPath($add_media_path_request, $refresh_library);
} catch (Exception $e) {
    echo 'Exception when calling LibraryStructureApi->addMediaPath: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **add_media_path_request** | [**\OpenAPI\Client\Model\AddMediaPathRequest**](../Model/AddMediaPathRequest.md)| The media path dto. | |
| **refresh_library** | **bool**| Whether to refresh the library. | [optional] [default to false] |

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

## `addVirtualFolder()`

```php
addVirtualFolder($name, $collection_type, $paths, $refresh_library, $add_virtual_folder_request)
```

Adds a virtual folder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryStructureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of the virtual folder.
$collection_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\CollectionTypeOptions(); // \OpenAPI\Client\Model\CollectionTypeOptions | The type of the collection.
$paths = array('paths_example'); // string[] | The paths of the virtual folder.
$refresh_library = false; // bool | Whether to refresh the library.
$add_virtual_folder_request = new \OpenAPI\Client\Model\AddVirtualFolderRequest(); // \OpenAPI\Client\Model\AddVirtualFolderRequest | The library options.

try {
    $apiInstance->addVirtualFolder($name, $collection_type, $paths, $refresh_library, $add_virtual_folder_request);
} catch (Exception $e) {
    echo 'Exception when calling LibraryStructureApi->addVirtualFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the virtual folder. | [optional] |
| **collection_type** | [**\OpenAPI\Client\Model\CollectionTypeOptions**](../Model/.md)| The type of the collection. | [optional] |
| **paths** | [**string[]**](../Model/string.md)| The paths of the virtual folder. | [optional] |
| **refresh_library** | **bool**| Whether to refresh the library. | [optional] [default to false] |
| **add_virtual_folder_request** | [**\OpenAPI\Client\Model\AddVirtualFolderRequest**](../Model/AddVirtualFolderRequest.md)| The library options. | [optional] |

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

## `getVirtualFolders()`

```php
getVirtualFolders(): \OpenAPI\Client\Model\VirtualFolderInfo[]
```

Gets all virtual folders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryStructureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getVirtualFolders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryStructureApi->getVirtualFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\VirtualFolderInfo[]**](../Model/VirtualFolderInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeMediaPath()`

```php
removeMediaPath($name, $path, $refresh_library)
```

Remove a media path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryStructureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of the library.
$path = 'path_example'; // string | The path to remove.
$refresh_library = false; // bool | Whether to refresh the library.

try {
    $apiInstance->removeMediaPath($name, $path, $refresh_library);
} catch (Exception $e) {
    echo 'Exception when calling LibraryStructureApi->removeMediaPath: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the library. | [optional] |
| **path** | **string**| The path to remove. | [optional] |
| **refresh_library** | **bool**| Whether to refresh the library. | [optional] [default to false] |

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

## `removeVirtualFolder()`

```php
removeVirtualFolder($name, $refresh_library)
```

Removes a virtual folder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryStructureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of the folder.
$refresh_library = false; // bool | Whether to refresh the library.

try {
    $apiInstance->removeVirtualFolder($name, $refresh_library);
} catch (Exception $e) {
    echo 'Exception when calling LibraryStructureApi->removeVirtualFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the folder. | [optional] |
| **refresh_library** | **bool**| Whether to refresh the library. | [optional] [default to false] |

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

## `renameVirtualFolder()`

```php
renameVirtualFolder($name, $new_name, $refresh_library)
```

Renames a virtual folder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryStructureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of the virtual folder.
$new_name = 'new_name_example'; // string | The new name.
$refresh_library = false; // bool | Whether to refresh the library.

try {
    $apiInstance->renameVirtualFolder($name, $new_name, $refresh_library);
} catch (Exception $e) {
    echo 'Exception when calling LibraryStructureApi->renameVirtualFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the virtual folder. | [optional] |
| **new_name** | **string**| The new name. | [optional] |
| **refresh_library** | **bool**| Whether to refresh the library. | [optional] [default to false] |

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

## `updateLibraryOptions()`

```php
updateLibraryOptions($update_library_options_request)
```

Update library options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryStructureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_library_options_request = new \OpenAPI\Client\Model\UpdateLibraryOptionsRequest(); // \OpenAPI\Client\Model\UpdateLibraryOptionsRequest | The library name and options.

try {
    $apiInstance->updateLibraryOptions($update_library_options_request);
} catch (Exception $e) {
    echo 'Exception when calling LibraryStructureApi->updateLibraryOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_library_options_request** | [**\OpenAPI\Client\Model\UpdateLibraryOptionsRequest**](../Model/UpdateLibraryOptionsRequest.md)| The library name and options. | [optional] |

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

## `updateMediaPath()`

```php
updateMediaPath($update_media_path_request)
```

Updates a media path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryStructureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_media_path_request = new \OpenAPI\Client\Model\UpdateMediaPathRequest(); // \OpenAPI\Client\Model\UpdateMediaPathRequest | The name of the library and path infos.

try {
    $apiInstance->updateMediaPath($update_media_path_request);
} catch (Exception $e) {
    echo 'Exception when calling LibraryStructureApi->updateMediaPath: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_media_path_request** | [**\OpenAPI\Client\Model\UpdateMediaPathRequest**](../Model/UpdateMediaPathRequest.md)| The name of the library and path infos. | |

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
