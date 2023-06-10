# OpenAPI\Client\GenresApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGenre()**](GenresApi.md#getGenre) | **GET** /Genres/{genreName} | Gets a genre, by name. |
| [**getGenres()**](GenresApi.md#getGenres) | **GET** /Genres | Gets all genres from a given item, folder, or the entire library. |


## `getGenre()`

```php
getGenre($genre_name, $user_id): \OpenAPI\Client\Model\BaseItemDto
```

Gets a genre, by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GenresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$genre_name = 'genre_name_example'; // string | The genre name.
$user_id = 'user_id_example'; // string | The user id.

try {
    $result = $apiInstance->getGenre($genre_name, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenresApi->getGenre: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **genre_name** | **string**| The genre name. | |
| **user_id** | **string**| The user id. | [optional] |

### Return type

[**\OpenAPI\Client\Model\BaseItemDto**](../Model/BaseItemDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGenres()`

```php
getGenres($start_index, $limit, $search_term, $parent_id, $fields, $exclude_item_types, $include_item_types, $is_favorite, $image_type_limit, $enable_image_types, $user_id, $name_starts_with_or_greater, $name_starts_with, $name_less_than, $sort_by, $sort_order, $enable_images, $enable_total_record_count): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets all genres from a given item, folder, or the entire library.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GenresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_index = 56; // int | Optional. The record index to start at. All items with a lower index will be dropped from the results.
$limit = 56; // int | Optional. The maximum number of records to return.
$search_term = 'search_term_example'; // string | The search term.
$parent_id = 'parent_id_example'; // string | Specify this to localize the search to a specific item or folder. Omit to use the root.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output.
$exclude_item_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\BaseItemKind()); // \OpenAPI\Client\Model\BaseItemKind[] | Optional. If specified, results will be filtered out based on item type. This allows multiple, comma delimited.
$include_item_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\BaseItemKind()); // \OpenAPI\Client\Model\BaseItemKind[] | Optional. If specified, results will be filtered in based on item type. This allows multiple, comma delimited.
$is_favorite = True; // bool | Optional filter by items that are marked as favorite, or not.
$image_type_limit = 56; // int | Optional, the max number of images to return, per image type.
$enable_image_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType()); // \OpenAPI\Client\Model\ImageType[] | Optional. The image types to include in the output.
$user_id = 'user_id_example'; // string | User id.
$name_starts_with_or_greater = 'name_starts_with_or_greater_example'; // string | Optional filter by items whose name is sorted equally or greater than a given input string.
$name_starts_with = 'name_starts_with_example'; // string | Optional filter by items whose name is sorted equally than a given input string.
$name_less_than = 'name_less_than_example'; // string | Optional filter by items whose name is equally or lesser than a given input string.
$sort_by = array('sort_by_example'); // string[] | Optional. Specify one or more sort orders, comma delimited.
$sort_order = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SortOrder()); // \OpenAPI\Client\Model\SortOrder[] | Sort Order - Ascending,Descending.
$enable_images = true; // bool | Optional, include image information in output.
$enable_total_record_count = true; // bool | Optional. Include total record count.

try {
    $result = $apiInstance->getGenres($start_index, $limit, $search_term, $parent_id, $fields, $exclude_item_types, $include_item_types, $is_favorite, $image_type_limit, $enable_image_types, $user_id, $name_starts_with_or_greater, $name_starts_with, $name_less_than, $sort_by, $sort_order, $enable_images, $enable_total_record_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenresApi->getGenres: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_index** | **int**| Optional. The record index to start at. All items with a lower index will be dropped from the results. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **search_term** | **string**| The search term. | [optional] |
| **parent_id** | **string**| Specify this to localize the search to a specific item or folder. Omit to use the root. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. | [optional] |
| **exclude_item_types** | [**\OpenAPI\Client\Model\BaseItemKind[]**](../Model/\OpenAPI\Client\Model\BaseItemKind.md)| Optional. If specified, results will be filtered out based on item type. This allows multiple, comma delimited. | [optional] |
| **include_item_types** | [**\OpenAPI\Client\Model\BaseItemKind[]**](../Model/\OpenAPI\Client\Model\BaseItemKind.md)| Optional. If specified, results will be filtered in based on item type. This allows multiple, comma delimited. | [optional] |
| **is_favorite** | **bool**| Optional filter by items that are marked as favorite, or not. | [optional] |
| **image_type_limit** | **int**| Optional, the max number of images to return, per image type. | [optional] |
| **enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](../Model/\OpenAPI\Client\Model\ImageType.md)| Optional. The image types to include in the output. | [optional] |
| **user_id** | **string**| User id. | [optional] |
| **name_starts_with_or_greater** | **string**| Optional filter by items whose name is sorted equally or greater than a given input string. | [optional] |
| **name_starts_with** | **string**| Optional filter by items whose name is sorted equally than a given input string. | [optional] |
| **name_less_than** | **string**| Optional filter by items whose name is equally or lesser than a given input string. | [optional] |
| **sort_by** | [**string[]**](../Model/string.md)| Optional. Specify one or more sort orders, comma delimited. | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\SortOrder[]**](../Model/\OpenAPI\Client\Model\SortOrder.md)| Sort Order - Ascending,Descending. | [optional] |
| **enable_images** | **bool**| Optional, include image information in output. | [optional] [default to true] |
| **enable_total_record_count** | **bool**| Optional. Include total record count. | [optional] [default to true] |

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
