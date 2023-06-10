# OpenAPI\Client\PackageApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelPackageInstallation()**](PackageApi.md#cancelPackageInstallation) | **DELETE** /Packages/Installing/{packageId} | Cancels a package installation. |
| [**getPackageInfo()**](PackageApi.md#getPackageInfo) | **GET** /Packages/{name} | Gets a package by name or assembly GUID. |
| [**getPackages()**](PackageApi.md#getPackages) | **GET** /Packages | Gets available packages. |
| [**getRepositories()**](PackageApi.md#getRepositories) | **GET** /Repositories | Gets all package repositories. |
| [**installPackage()**](PackageApi.md#installPackage) | **POST** /Packages/Installed/{name} | Installs a package. |
| [**setRepositories()**](PackageApi.md#setRepositories) | **POST** /Repositories | Sets the enabled and existing package repositories. |


## `cancelPackageInstallation()`

```php
cancelPackageInstallation($package_id)
```

Cancels a package installation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PackageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package_id = 'package_id_example'; // string | Installation Id.

try {
    $apiInstance->cancelPackageInstallation($package_id);
} catch (Exception $e) {
    echo 'Exception when calling PackageApi->cancelPackageInstallation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **package_id** | **string**| Installation Id. | |

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

## `getPackageInfo()`

```php
getPackageInfo($name, $assembly_guid): \OpenAPI\Client\Model\PackageInfo
```

Gets a package by name or assembly GUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PackageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The name of the package.
$assembly_guid = 'assembly_guid_example'; // string | The GUID of the associated assembly.

try {
    $result = $apiInstance->getPackageInfo($name, $assembly_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackageApi->getPackageInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the package. | |
| **assembly_guid** | **string**| The GUID of the associated assembly. | [optional] |

### Return type

[**\OpenAPI\Client\Model\PackageInfo**](../Model/PackageInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPackages()`

```php
getPackages(): \OpenAPI\Client\Model\PackageInfo[]
```

Gets available packages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PackageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPackages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackageApi->getPackages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\PackageInfo[]**](../Model/PackageInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRepositories()`

```php
getRepositories(): \OpenAPI\Client\Model\RepositoryInfo[]
```

Gets all package repositories.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PackageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRepositories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackageApi->getRepositories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\RepositoryInfo[]**](../Model/RepositoryInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `installPackage()`

```php
installPackage($name, $assembly_guid, $version, $repository_url)
```

Installs a package.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PackageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Package name.
$assembly_guid = 'assembly_guid_example'; // string | GUID of the associated assembly.
$version = 'version_example'; // string | Optional version. Defaults to latest version.
$repository_url = 'repository_url_example'; // string | Optional. Specify the repository to install from.

try {
    $apiInstance->installPackage($name, $assembly_guid, $version, $repository_url);
} catch (Exception $e) {
    echo 'Exception when calling PackageApi->installPackage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Package name. | |
| **assembly_guid** | **string**| GUID of the associated assembly. | [optional] |
| **version** | **string**| Optional version. Defaults to latest version. | [optional] |
| **repository_url** | **string**| Optional. Specify the repository to install from. | [optional] |

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

## `setRepositories()`

```php
setRepositories($repository_info)
```

Sets the enabled and existing package repositories.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PackageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$repository_info = array(new \OpenAPI\Client\Model\RepositoryInfo()); // \OpenAPI\Client\Model\RepositoryInfo[] | The list of package repositories.

try {
    $apiInstance->setRepositories($repository_info);
} catch (Exception $e) {
    echo 'Exception when calling PackageApi->setRepositories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **repository_info** | [**\OpenAPI\Client\Model\RepositoryInfo[]**](../Model/RepositoryInfo.md)| The list of package repositories. | |

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
