# OpenAPI\Client\ImageByNameApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGeneralImage()**](ImageByNameApi.md#getGeneralImage) | **GET** /Images/General/{name}/{type} | Get General Image. |
| [**getGeneralImages()**](ImageByNameApi.md#getGeneralImages) | **GET** /Images/General | Get all general images. |
| [**getMediaInfoImage()**](ImageByNameApi.md#getMediaInfoImage) | **GET** /Images/MediaInfo/{theme}/{name} | Get media info image. |
| [**getMediaInfoImages()**](ImageByNameApi.md#getMediaInfoImages) | **GET** /Images/MediaInfo | Get all media info images. |
| [**getRatingImage()**](ImageByNameApi.md#getRatingImage) | **GET** /Images/Ratings/{theme}/{name} | Get rating image. |
| [**getRatingImages()**](ImageByNameApi.md#getRatingImages) | **GET** /Images/Ratings | Get all general images. |


## `getGeneralImage()`

```php
getGeneralImage($name, $type): \SplFileObject
```

Get General Image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageByNameApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | The name of the image.
$type = 'type_example'; // string | Image Type (primary, backdrop, logo, etc).

try {
    $result = $apiInstance->getGeneralImage($name, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageByNameApi->getGeneralImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The name of the image. | |
| **type** | **string**| Image Type (primary, backdrop, logo, etc). | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/octet-stream`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGeneralImages()`

```php
getGeneralImages(): \OpenAPI\Client\Model\ImageByNameInfo[]
```

Get all general images.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ImageByNameApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGeneralImages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageByNameApi->getGeneralImages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ImageByNameInfo[]**](../Model/ImageByNameInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMediaInfoImage()`

```php
getMediaInfoImage($theme, $name): \SplFileObject
```

Get media info image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageByNameApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$theme = 'theme_example'; // string | The theme to get the image from.
$name = 'name_example'; // string | The name of the image.

try {
    $result = $apiInstance->getMediaInfoImage($theme, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageByNameApi->getMediaInfoImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **theme** | **string**| The theme to get the image from. | |
| **name** | **string**| The name of the image. | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/octet-stream`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMediaInfoImages()`

```php
getMediaInfoImages(): \OpenAPI\Client\Model\ImageByNameInfo[]
```

Get all media info images.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ImageByNameApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMediaInfoImages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageByNameApi->getMediaInfoImages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ImageByNameInfo[]**](../Model/ImageByNameInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRatingImage()`

```php
getRatingImage($theme, $name): \SplFileObject
```

Get rating image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageByNameApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$theme = 'theme_example'; // string | The theme to get the image from.
$name = 'name_example'; // string | The name of the image.

try {
    $result = $apiInstance->getRatingImage($theme, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageByNameApi->getRatingImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **theme** | **string**| The theme to get the image from. | |
| **name** | **string**| The name of the image. | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/octet-stream`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRatingImages()`

```php
getRatingImages(): \OpenAPI\Client\Model\ImageByNameInfo[]
```

Get all general images.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ImageByNameApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRatingImages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageByNameApi->getRatingImages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ImageByNameInfo[]**](../Model/ImageByNameInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
