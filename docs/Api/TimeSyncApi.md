# OpenAPI\Client\TimeSyncApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUtcTime()**](TimeSyncApi.md#getUtcTime) | **GET** /GetUtcTime | Gets the current UTC time. |


## `getUtcTime()`

```php
getUtcTime(): \OpenAPI\Client\Model\UtcTimeResponse
```

Gets the current UTC time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TimeSyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getUtcTime();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeSyncApi->getUtcTime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\UtcTimeResponse**](../Model/UtcTimeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
