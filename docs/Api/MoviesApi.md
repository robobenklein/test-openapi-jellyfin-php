# OpenAPI\Client\MoviesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMovieRecommendations()**](MoviesApi.md#getMovieRecommendations) | **GET** /Movies/Recommendations | Gets movie recommendations. |


## `getMovieRecommendations()`

```php
getMovieRecommendations($user_id, $parent_id, $fields, $category_limit, $item_limit): \OpenAPI\Client\Model\RecommendationDto[]
```

Gets movie recommendations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\MoviesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | Optional. Filter by user id, and attach user data.
$parent_id = 'parent_id_example'; // string | Specify this to localize the search to a specific item or folder. Omit to use the root.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. The fields to return.
$category_limit = 5; // int | The max number of categories to return.
$item_limit = 8; // int | The max number of items to return per category.

try {
    $result = $apiInstance->getMovieRecommendations($user_id, $parent_id, $fields, $category_limit, $item_limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MoviesApi->getMovieRecommendations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| Optional. Filter by user id, and attach user data. | [optional] |
| **parent_id** | **string**| Specify this to localize the search to a specific item or folder. Omit to use the root. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. The fields to return. | [optional] |
| **category_limit** | **int**| The max number of categories to return. | [optional] [default to 5] |
| **item_limit** | **int**| The max number of items to return per category. | [optional] [default to 8] |

### Return type

[**\OpenAPI\Client\Model\RecommendationDto[]**](../Model/RecommendationDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
