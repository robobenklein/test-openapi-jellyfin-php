# OpenAPI\Client\FilterApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getQueryFilters()**](FilterApi.md#getQueryFilters) | **GET** /Items/Filters2 | Gets query filters. |
| [**getQueryFiltersLegacy()**](FilterApi.md#getQueryFiltersLegacy) | **GET** /Items/Filters | Gets legacy query filters. |


## `getQueryFilters()`

```php
getQueryFilters($user_id, $parent_id, $include_item_types, $is_airing, $is_movie, $is_sports, $is_kids, $is_news, $is_series, $recursive): \OpenAPI\Client\Model\QueryFilters
```

Gets query filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | Optional. User id.
$parent_id = 'parent_id_example'; // string | Optional. Specify this to localize the search to a specific item or folder. Omit to use the root.
$include_item_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\BaseItemKind()); // \OpenAPI\Client\Model\BaseItemKind[] | Optional. If specified, results will be filtered based on item type. This allows multiple, comma delimited.
$is_airing = True; // bool | Optional. Is item airing.
$is_movie = True; // bool | Optional. Is item movie.
$is_sports = True; // bool | Optional. Is item sports.
$is_kids = True; // bool | Optional. Is item kids.
$is_news = True; // bool | Optional. Is item news.
$is_series = True; // bool | Optional. Is item series.
$recursive = True; // bool | Optional. Search recursive.

try {
    $result = $apiInstance->getQueryFilters($user_id, $parent_id, $include_item_types, $is_airing, $is_movie, $is_sports, $is_kids, $is_news, $is_series, $recursive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilterApi->getQueryFilters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| Optional. User id. | [optional] |
| **parent_id** | **string**| Optional. Specify this to localize the search to a specific item or folder. Omit to use the root. | [optional] |
| **include_item_types** | [**\OpenAPI\Client\Model\BaseItemKind[]**](../Model/\OpenAPI\Client\Model\BaseItemKind.md)| Optional. If specified, results will be filtered based on item type. This allows multiple, comma delimited. | [optional] |
| **is_airing** | **bool**| Optional. Is item airing. | [optional] |
| **is_movie** | **bool**| Optional. Is item movie. | [optional] |
| **is_sports** | **bool**| Optional. Is item sports. | [optional] |
| **is_kids** | **bool**| Optional. Is item kids. | [optional] |
| **is_news** | **bool**| Optional. Is item news. | [optional] |
| **is_series** | **bool**| Optional. Is item series. | [optional] |
| **recursive** | **bool**| Optional. Search recursive. | [optional] |

### Return type

[**\OpenAPI\Client\Model\QueryFilters**](../Model/QueryFilters.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQueryFiltersLegacy()`

```php
getQueryFiltersLegacy($user_id, $parent_id, $include_item_types, $media_types): \OpenAPI\Client\Model\QueryFiltersLegacy
```

Gets legacy query filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\FilterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | Optional. User id.
$parent_id = 'parent_id_example'; // string | Optional. Parent id.
$include_item_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\BaseItemKind()); // \OpenAPI\Client\Model\BaseItemKind[] | Optional. If specified, results will be filtered based on item type. This allows multiple, comma delimited.
$media_types = array('media_types_example'); // string[] | Optional. Filter by MediaType. Allows multiple, comma delimited.

try {
    $result = $apiInstance->getQueryFiltersLegacy($user_id, $parent_id, $include_item_types, $media_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilterApi->getQueryFiltersLegacy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| Optional. User id. | [optional] |
| **parent_id** | **string**| Optional. Parent id. | [optional] |
| **include_item_types** | [**\OpenAPI\Client\Model\BaseItemKind[]**](../Model/\OpenAPI\Client\Model\BaseItemKind.md)| Optional. If specified, results will be filtered based on item type. This allows multiple, comma delimited. | [optional] |
| **media_types** | [**string[]**](../Model/string.md)| Optional. Filter by MediaType. Allows multiple, comma delimited. | [optional] |

### Return type

[**\OpenAPI\Client\Model\QueryFiltersLegacy**](../Model/QueryFiltersLegacy.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
