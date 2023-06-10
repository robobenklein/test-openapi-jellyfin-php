# OpenAPI\Client\DevicesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteDevice()**](DevicesApi.md#deleteDevice) | **DELETE** /Devices | Deletes a device. |
| [**getDeviceInfo()**](DevicesApi.md#getDeviceInfo) | **GET** /Devices/Info | Get info for a device. |
| [**getDeviceOptions()**](DevicesApi.md#getDeviceOptions) | **GET** /Devices/Options | Get options for a device. |
| [**getDevices()**](DevicesApi.md#getDevices) | **GET** /Devices | Get Devices. |
| [**updateDeviceOptions()**](DevicesApi.md#updateDeviceOptions) | **POST** /Devices/Options | Update device options. |


## `deleteDevice()`

```php
deleteDevice($id)
```

Deletes a device.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Device Id.

try {
    $apiInstance->deleteDevice($id);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->deleteDevice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Device Id. | |

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

## `getDeviceInfo()`

```php
getDeviceInfo($id): \OpenAPI\Client\Model\DeviceInfo
```

Get info for a device.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Device Id.

try {
    $result = $apiInstance->getDeviceInfo($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDeviceInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Device Id. | |

### Return type

[**\OpenAPI\Client\Model\DeviceInfo**](../Model/DeviceInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeviceOptions()`

```php
getDeviceOptions($id): \OpenAPI\Client\Model\DeviceOptions
```

Get options for a device.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Device Id.

try {
    $result = $apiInstance->getDeviceOptions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDeviceOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Device Id. | |

### Return type

[**\OpenAPI\Client\Model\DeviceOptions**](../Model/DeviceOptions.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDevices()`

```php
getDevices($supports_sync, $user_id): \OpenAPI\Client\Model\DeviceInfoQueryResult
```

Get Devices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supports_sync = True; // bool | Gets or sets a value indicating whether [supports synchronize].
$user_id = 'user_id_example'; // string | Gets or sets the user identifier.

try {
    $result = $apiInstance->getDevices($supports_sync, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->getDevices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **supports_sync** | **bool**| Gets or sets a value indicating whether [supports synchronize]. | [optional] |
| **user_id** | **string**| Gets or sets the user identifier. | [optional] |

### Return type

[**\OpenAPI\Client\Model\DeviceInfoQueryResult**](../Model/DeviceInfoQueryResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeviceOptions()`

```php
updateDeviceOptions($id, $update_device_options_request)
```

Update device options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Device Id.
$update_device_options_request = new \OpenAPI\Client\Model\UpdateDeviceOptionsRequest(); // \OpenAPI\Client\Model\UpdateDeviceOptionsRequest | Device Options.

try {
    $apiInstance->updateDeviceOptions($id, $update_device_options_request);
} catch (Exception $e) {
    echo 'Exception when calling DevicesApi->updateDeviceOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Device Id. | |
| **update_device_options_request** | [**\OpenAPI\Client\Model\UpdateDeviceOptionsRequest**](../Model/UpdateDeviceOptionsRequest.md)| Device Options. | |

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
