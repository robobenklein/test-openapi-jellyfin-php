# OpenAPI\Client\UserViewsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGroupingOptions()**](UserViewsApi.md#getGroupingOptions) | **GET** /Users/{userId}/GroupingOptions | Get user view grouping options. |
| [**getUserViews()**](UserViewsApi.md#getUserViews) | **GET** /Users/{userId}/Views | Get user views. |


## `getGroupingOptions()`

```php
getGroupingOptions($user_id): \OpenAPI\Client\Model\SpecialViewOptionDto[]
```

Get user view grouping options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User id.

try {
    $result = $apiInstance->getGroupingOptions($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserViewsApi->getGroupingOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User id. | |

### Return type

[**\OpenAPI\Client\Model\SpecialViewOptionDto[]**](../Model/SpecialViewOptionDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserViews()`

```php
getUserViews($user_id, $include_external_content, $preset_views, $include_hidden): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Get user views.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserViewsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User id.
$include_external_content = True; // bool | Whether or not to include external views such as channels or live tv.
$preset_views = array('preset_views_example'); // string[] | Preset views.
$include_hidden = false; // bool | Whether or not to include hidden content.

try {
    $result = $apiInstance->getUserViews($user_id, $include_external_content, $preset_views, $include_hidden);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserViewsApi->getUserViews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User id. | |
| **include_external_content** | **bool**| Whether or not to include external views such as channels or live tv. | [optional] |
| **preset_views** | [**string[]**](../Model/string.md)| Preset views. | [optional] |
| **include_hidden** | **bool**| Whether or not to include hidden content. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\BaseItemDtoQueryResult**](../Model/BaseItemDtoQueryResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
