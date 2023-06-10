# OpenAPI\Client\PluginsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**disablePlugin()**](PluginsApi.md#disablePlugin) | **POST** /Plugins/{pluginId}/{version}/Disable | Disable a plugin. |
| [**enablePlugin()**](PluginsApi.md#enablePlugin) | **POST** /Plugins/{pluginId}/{version}/Enable | Enables a disabled plugin. |
| [**getPluginConfiguration()**](PluginsApi.md#getPluginConfiguration) | **GET** /Plugins/{pluginId}/Configuration | Gets plugin configuration. |
| [**getPluginImage()**](PluginsApi.md#getPluginImage) | **GET** /Plugins/{pluginId}/{version}/Image | Gets a plugin&#39;s image. |
| [**getPluginManifest()**](PluginsApi.md#getPluginManifest) | **POST** /Plugins/{pluginId}/Manifest | Gets a plugin&#39;s manifest. |
| [**getPlugins()**](PluginsApi.md#getPlugins) | **GET** /Plugins | Gets a list of currently installed plugins. |
| [**uninstallPlugin()**](PluginsApi.md#uninstallPlugin) | **DELETE** /Plugins/{pluginId} | Uninstalls a plugin. |
| [**uninstallPluginByVersion()**](PluginsApi.md#uninstallPluginByVersion) | **DELETE** /Plugins/{pluginId}/{version} | Uninstalls a plugin by version. |
| [**updatePluginConfiguration()**](PluginsApi.md#updatePluginConfiguration) | **POST** /Plugins/{pluginId}/Configuration | Updates plugin configuration. |


## `disablePlugin()`

```php
disablePlugin($plugin_id, $version)
```

Disable a plugin.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_id = 'plugin_id_example'; // string | Plugin id.
$version = 'version_example'; // string | Plugin version.

try {
    $apiInstance->disablePlugin($plugin_id, $version);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->disablePlugin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plugin_id** | **string**| Plugin id. | |
| **version** | **string**| Plugin version. | |

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

## `enablePlugin()`

```php
enablePlugin($plugin_id, $version)
```

Enables a disabled plugin.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_id = 'plugin_id_example'; // string | Plugin id.
$version = 'version_example'; // string | Plugin version.

try {
    $apiInstance->enablePlugin($plugin_id, $version);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->enablePlugin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plugin_id** | **string**| Plugin id. | |
| **version** | **string**| Plugin version. | |

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

## `getPluginConfiguration()`

```php
getPluginConfiguration($plugin_id): object
```

Gets plugin configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_id = 'plugin_id_example'; // string | Plugin id.

try {
    $result = $apiInstance->getPluginConfiguration($plugin_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->getPluginConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plugin_id** | **string**| Plugin id. | |

### Return type

**object**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPluginImage()`

```php
getPluginImage($plugin_id, $version): \SplFileObject
```

Gets a plugin's image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_id = 'plugin_id_example'; // string | Plugin id.
$version = 'version_example'; // string | Plugin version.

try {
    $result = $apiInstance->getPluginImage($plugin_id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->getPluginImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plugin_id** | **string**| Plugin id. | |
| **version** | **string**| Plugin version. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPluginManifest()`

```php
getPluginManifest($plugin_id)
```

Gets a plugin's manifest.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_id = 'plugin_id_example'; // string | Plugin id.

try {
    $apiInstance->getPluginManifest($plugin_id);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->getPluginManifest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plugin_id** | **string**| Plugin id. | |

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

## `getPlugins()`

```php
getPlugins(): \OpenAPI\Client\Model\PluginInfo[]
```

Gets a list of currently installed plugins.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPlugins();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->getPlugins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\PluginInfo[]**](../Model/PluginInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uninstallPlugin()`

```php
uninstallPlugin($plugin_id)
```

Uninstalls a plugin.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_id = 'plugin_id_example'; // string | Plugin id.

try {
    $apiInstance->uninstallPlugin($plugin_id);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->uninstallPlugin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plugin_id** | **string**| Plugin id. | |

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

## `uninstallPluginByVersion()`

```php
uninstallPluginByVersion($plugin_id, $version)
```

Uninstalls a plugin by version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_id = 'plugin_id_example'; // string | Plugin id.
$version = 'version_example'; // string | Plugin version.

try {
    $apiInstance->uninstallPluginByVersion($plugin_id, $version);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->uninstallPluginByVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plugin_id** | **string**| Plugin id. | |
| **version** | **string**| Plugin version. | |

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

## `updatePluginConfiguration()`

```php
updatePluginConfiguration($plugin_id)
```

Updates plugin configuration.

Accepts plugin configuration as JSON body.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PluginsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plugin_id = 'plugin_id_example'; // string | Plugin id.

try {
    $apiInstance->updatePluginConfiguration($plugin_id);
} catch (Exception $e) {
    echo 'Exception when calling PluginsApi->updatePluginConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plugin_id** | **string**| Plugin id. | |

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
