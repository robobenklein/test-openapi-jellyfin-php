# OpenAPI\Client\QuickConnectApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authorize()**](QuickConnectApi.md#authorize) | **POST** /QuickConnect/Authorize | Authorizes a pending quick connect request. |
| [**connect()**](QuickConnectApi.md#connect) | **GET** /QuickConnect/Connect | Attempts to retrieve authentication information. |
| [**getEnabled()**](QuickConnectApi.md#getEnabled) | **GET** /QuickConnect/Enabled | Gets the current quick connect state. |
| [**initiate()**](QuickConnectApi.md#initiate) | **GET** /QuickConnect/Initiate | Initiate a new quick connect request. |


## `authorize()`

```php
authorize($code): bool
```

Authorizes a pending quick connect request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\QuickConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Quick connect code to authorize.

try {
    $result = $apiInstance->authorize($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickConnectApi->authorize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Quick connect code to authorize. | |

### Return type

**bool**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `connect()`

```php
connect($secret): \OpenAPI\Client\Model\QuickConnectResult
```

Attempts to retrieve authentication information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuickConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$secret = 'secret_example'; // string | Secret previously returned from the Initiate endpoint.

try {
    $result = $apiInstance->connect($secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickConnectApi->connect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **secret** | **string**| Secret previously returned from the Initiate endpoint. | |

### Return type

[**\OpenAPI\Client\Model\QuickConnectResult**](../Model/QuickConnectResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnabled()`

```php
getEnabled(): bool
```

Gets the current quick connect state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuickConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getEnabled();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickConnectApi->getEnabled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `initiate()`

```php
initiate(): \OpenAPI\Client\Model\QuickConnectResult
```

Initiate a new quick connect request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\QuickConnectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->initiate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuickConnectApi->initiate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\QuickConnectResult**](../Model/QuickConnectResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
