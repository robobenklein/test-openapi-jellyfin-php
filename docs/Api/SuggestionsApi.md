# OpenAPI\Client\SuggestionsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSuggestions()**](SuggestionsApi.md#getSuggestions) | **GET** /Users/{userId}/Suggestions | Gets suggestions. |


## `getSuggestions()`

```php
getSuggestions($user_id, $media_type, $type, $start_index, $limit, $enable_total_record_count): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets suggestions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SuggestionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | The user id.
$media_type = array('media_type_example'); // string[] | The media types.
$type = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\BaseItemKind()); // \OpenAPI\Client\Model\BaseItemKind[] | The type.
$start_index = 56; // int | Optional. The start index.
$limit = 56; // int | Optional. The limit.
$enable_total_record_count = false; // bool | Whether to enable the total record count.

try {
    $result = $apiInstance->getSuggestions($user_id, $media_type, $type, $start_index, $limit, $enable_total_record_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuggestionsApi->getSuggestions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The user id. | |
| **media_type** | [**string[]**](../Model/string.md)| The media types. | [optional] |
| **type** | [**\OpenAPI\Client\Model\BaseItemKind[]**](../Model/\OpenAPI\Client\Model\BaseItemKind.md)| The type. | [optional] |
| **start_index** | **int**| Optional. The start index. | [optional] |
| **limit** | **int**| Optional. The limit. | [optional] |
| **enable_total_record_count** | **bool**| Whether to enable the total record count. | [optional] [default to false] |

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
