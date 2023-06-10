# OpenAPI\Client\EnvironmentApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDefaultDirectoryBrowser()**](EnvironmentApi.md#getDefaultDirectoryBrowser) | **GET** /Environment/DefaultDirectoryBrowser | Get Default directory browser. |
| [**getDirectoryContents()**](EnvironmentApi.md#getDirectoryContents) | **GET** /Environment/DirectoryContents | Gets the contents of a given directory in the file system. |
| [**getDrives()**](EnvironmentApi.md#getDrives) | **GET** /Environment/Drives | Gets available drives from the server&#39;s file system. |
| [**getNetworkShares()**](EnvironmentApi.md#getNetworkShares) | **GET** /Environment/NetworkShares | Gets network paths. |
| [**getParentPath()**](EnvironmentApi.md#getParentPath) | **GET** /Environment/ParentPath | Gets the parent path of a given path. |
| [**validatePath()**](EnvironmentApi.md#validatePath) | **POST** /Environment/ValidatePath | Validates path. |


## `getDefaultDirectoryBrowser()`

```php
getDefaultDirectoryBrowser(): \OpenAPI\Client\Model\DefaultDirectoryBrowserInfoDto
```

Get Default directory browser.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDefaultDirectoryBrowser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getDefaultDirectoryBrowser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\DefaultDirectoryBrowserInfoDto**](../Model/DefaultDirectoryBrowserInfoDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDirectoryContents()`

```php
getDirectoryContents($path, $include_files, $include_directories): \OpenAPI\Client\Model\FileSystemEntryInfo[]
```

Gets the contents of a given directory in the file system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string | The path.
$include_files = false; // bool | An optional filter to include or exclude files from the results. true/false.
$include_directories = false; // bool | An optional filter to include or exclude folders from the results. true/false.

try {
    $result = $apiInstance->getDirectoryContents($path, $include_files, $include_directories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getDirectoryContents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| The path. | |
| **include_files** | **bool**| An optional filter to include or exclude files from the results. true/false. | [optional] [default to false] |
| **include_directories** | **bool**| An optional filter to include or exclude folders from the results. true/false. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\FileSystemEntryInfo[]**](../Model/FileSystemEntryInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDrives()`

```php
getDrives(): \OpenAPI\Client\Model\FileSystemEntryInfo[]
```

Gets available drives from the server's file system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDrives();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getDrives: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FileSystemEntryInfo[]**](../Model/FileSystemEntryInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNetworkShares()`

```php
getNetworkShares(): \OpenAPI\Client\Model\FileSystemEntryInfo[]
```

Gets network paths.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getNetworkShares();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getNetworkShares: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FileSystemEntryInfo[]**](../Model/FileSystemEntryInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getParentPath()`

```php
getParentPath($path): string
```

Gets the parent path of a given path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string | The path.

try {
    $result = $apiInstance->getParentPath($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->getParentPath: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| The path. | |

### Return type

**string**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validatePath()`

```php
validatePath($validate_path_request)
```

Validates path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EnvironmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validate_path_request = new \OpenAPI\Client\Model\ValidatePathRequest(); // \OpenAPI\Client\Model\ValidatePathRequest | Validate request object.

try {
    $apiInstance->validatePath($validate_path_request);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentApi->validatePath: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validate_path_request** | [**\OpenAPI\Client\Model\ValidatePathRequest**](../Model/ValidatePathRequest.md)| Validate request object. | |

### Return type

void (empty response body)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
