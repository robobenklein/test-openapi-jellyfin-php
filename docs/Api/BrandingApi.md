# OpenAPI\Client\BrandingApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBrandingCss()**](BrandingApi.md#getBrandingCss) | **GET** /Branding/Css | Gets branding css. |
| [**getBrandingCss2()**](BrandingApi.md#getBrandingCss2) | **GET** /Branding/Css.css | Gets branding css. |
| [**getBrandingOptions()**](BrandingApi.md#getBrandingOptions) | **GET** /Branding/Configuration | Gets branding configuration. |


## `getBrandingCss()`

```php
getBrandingCss(): string
```

Gets branding css.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BrandingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getBrandingCss();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingApi->getBrandingCss: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/css`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBrandingCss2()`

```php
getBrandingCss2(): string
```

Gets branding css.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BrandingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getBrandingCss2();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingApi->getBrandingCss2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/css`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBrandingOptions()`

```php
getBrandingOptions(): \OpenAPI\Client\Model\BrandingOptions
```

Gets branding configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BrandingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getBrandingOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingApi->getBrandingOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\BrandingOptions**](../Model/BrandingOptions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
