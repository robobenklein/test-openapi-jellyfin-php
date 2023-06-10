# OpenAPI\Client\ConfigurationApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getConfiguration()**](ConfigurationApi.md#getConfiguration) | **GET** /System/Configuration | Gets application configuration. |
| [**getDefaultMetadataOptions()**](ConfigurationApi.md#getDefaultMetadataOptions) | **GET** /System/Configuration/MetadataOptions/Default | Gets a default MetadataOptions object. |
| [**getNamedConfiguration()**](ConfigurationApi.md#getNamedConfiguration) | **GET** /System/Configuration/{key} | Gets a named configuration. |
| [**updateConfiguration()**](ConfigurationApi.md#updateConfiguration) | **POST** /System/Configuration | Updates application configuration. |
| [**updateMediaEncoderPath()**](ConfigurationApi.md#updateMediaEncoderPath) | **POST** /System/MediaEncoder/Path | Updates the path to the media encoder. |
| [**updateNamedConfiguration()**](ConfigurationApi.md#updateNamedConfiguration) | **POST** /System/Configuration/{key} | Updates named configuration. |


## `getConfiguration()`

```php
getConfiguration(): \OpenAPI\Client\Model\ServerConfiguration
```

Gets application configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getConfiguration();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ServerConfiguration**](../Model/ServerConfiguration.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDefaultMetadataOptions()`

```php
getDefaultMetadataOptions(): \OpenAPI\Client\Model\MetadataOptions
```

Gets a default MetadataOptions object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDefaultMetadataOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getDefaultMetadataOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\MetadataOptions**](../Model/MetadataOptions.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNamedConfiguration()`

```php
getNamedConfiguration($key): \SplFileObject
```

Gets a named configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | Configuration key.

try {
    $result = $apiInstance->getNamedConfiguration($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->getNamedConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| Configuration key. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateConfiguration()`

```php
updateConfiguration($update_configuration_request)
```

Updates application configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_configuration_request = new \OpenAPI\Client\Model\UpdateConfigurationRequest(); // \OpenAPI\Client\Model\UpdateConfigurationRequest | Configuration.

try {
    $apiInstance->updateConfiguration($update_configuration_request);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->updateConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_configuration_request** | [**\OpenAPI\Client\Model\UpdateConfigurationRequest**](../Model/UpdateConfigurationRequest.md)| Configuration. | |

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

## `updateMediaEncoderPath()`

```php
updateMediaEncoderPath($update_media_encoder_path_request)
```

Updates the path to the media encoder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_media_encoder_path_request = new \OpenAPI\Client\Model\UpdateMediaEncoderPathRequest(); // \OpenAPI\Client\Model\UpdateMediaEncoderPathRequest | Media encoder path form body.

try {
    $apiInstance->updateMediaEncoderPath($update_media_encoder_path_request);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->updateMediaEncoderPath: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_media_encoder_path_request** | [**\OpenAPI\Client\Model\UpdateMediaEncoderPathRequest**](../Model/UpdateMediaEncoderPathRequest.md)| Media encoder path form body. | |

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

## `updateNamedConfiguration()`

```php
updateNamedConfiguration($key, $body)
```

Updates named configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string | Configuration key.
$body = NULL; // mixed | Configuration.

try {
    $apiInstance->updateNamedConfiguration($key, $body);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurationApi->updateNamedConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **string**| Configuration key. | |
| **body** | **mixed**| Configuration. | |

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
