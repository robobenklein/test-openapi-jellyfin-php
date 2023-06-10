# OpenAPI\Client\DashboardApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getConfigurationPages()**](DashboardApi.md#getConfigurationPages) | **GET** /web/ConfigurationPages | Gets the configuration pages. |
| [**getDashboardConfigurationPage()**](DashboardApi.md#getDashboardConfigurationPage) | **GET** /web/ConfigurationPage | Gets a dashboard configuration page. |


## `getConfigurationPages()`

```php
getConfigurationPages($enable_in_main_menu): \OpenAPI\Client\Model\ConfigurationPageInfo[]
```

Gets the configuration pages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enable_in_main_menu = True; // bool | Whether to enable in the main menu.

try {
    $result = $apiInstance->getConfigurationPages($enable_in_main_menu);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->getConfigurationPages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enable_in_main_menu** | **bool**| Whether to enable in the main menu. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ConfigurationPageInfo[]**](../Model/ConfigurationPageInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDashboardConfigurationPage()`

```php
getDashboardConfigurationPage($name): \SplFileObject
```

Gets a dashboard configuration page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DashboardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | The name of the page.

try {
    $result = $apiInstance->getDashboardConfigurationPage($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DashboardApi->getDashboardConfigurationPage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the page. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/html`, `application/x-javascript`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
