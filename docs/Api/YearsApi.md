# OpenAPI\Client\YearsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getYear()**](YearsApi.md#getYear) | **GET** /Years/{year} | Gets a year. |
| [**getYears()**](YearsApi.md#getYears) | **GET** /Years | Get years. |


## `getYear()`

```php
getYear($year, $user_id): \OpenAPI\Client\Model\BaseItemDto
```

Gets a year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\YearsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int | The year.
$user_id = 'user_id_example'; // string | Optional. Filter by user id, and attach user data.

try {
    $result = $apiInstance->getYear($year, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling YearsApi->getYear: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **year** | **int**| The year. | |
| **user_id** | **string**| Optional. Filter by user id, and attach user data. | [optional] |

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

## `getYears()`

```php
getYears($start_index, $limit, $sort_order, $parent_id, $fields, $exclude_item_types, $include_item_types, $media_types, $sort_by, $enable_user_data, $image_type_limit, $enable_image_types, $user_id, $recursive, $enable_images): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Get years.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\YearsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_index = 56; // int | Skips over a given number of items within the results. Use for paging.
$limit = 56; // int | Optional. The maximum number of records to return.
$sort_order = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SortOrder()); // \OpenAPI\Client\Model\SortOrder[] | Sort Order - Ascending,Descending.
$parent_id = 'parent_id_example'; // string | Specify this to localize the search to a specific item or folder. Omit to use the root.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output.
$exclude_item_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\BaseItemKind()); // \OpenAPI\Client\Model\BaseItemKind[] | Optional. If specified, results will be excluded based on item type. This allows multiple, comma delimited.
$include_item_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\BaseItemKind()); // \OpenAPI\Client\Model\BaseItemKind[] | Optional. If specified, results will be included based on item type. This allows multiple, comma delimited.
$media_types = array('media_types_example'); // string[] | Optional. Filter by MediaType. Allows multiple, comma delimited.
$sort_by = array('sort_by_example'); // string[] | Optional. Specify one or more sort orders, comma delimited. Options: Album, AlbumArtist, Artist, Budget, CommunityRating, CriticRating, DateCreated, DatePlayed, PlayCount, PremiereDate, ProductionYear, SortName, Random, Revenue, Runtime.
$enable_user_data = True; // bool | Optional. Include user data.
$image_type_limit = 56; // int | Optional. The max number of images to return, per image type.
$enable_image_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType()); // \OpenAPI\Client\Model\ImageType[] | Optional. The image types to include in the output.
$user_id = 'user_id_example'; // string | User Id.
$recursive = true; // bool | Search recursively.
$enable_images = true; // bool | Optional. Include image information in output.

try {
    $result = $apiInstance->getYears($start_index, $limit, $sort_order, $parent_id, $fields, $exclude_item_types, $include_item_types, $media_types, $sort_by, $enable_user_data, $image_type_limit, $enable_image_types, $user_id, $recursive, $enable_images);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling YearsApi->getYears: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_index** | **int**| Skips over a given number of items within the results. Use for paging. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\SortOrder[]**](../Model/\OpenAPI\Client\Model\SortOrder.md)| Sort Order - Ascending,Descending. | [optional] |
| **parent_id** | **string**| Specify this to localize the search to a specific item or folder. Omit to use the root. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. | [optional] |
| **exclude_item_types** | [**\OpenAPI\Client\Model\BaseItemKind[]**](../Model/\OpenAPI\Client\Model\BaseItemKind.md)| Optional. If specified, results will be excluded based on item type. This allows multiple, comma delimited. | [optional] |
| **include_item_types** | [**\OpenAPI\Client\Model\BaseItemKind[]**](../Model/\OpenAPI\Client\Model\BaseItemKind.md)| Optional. If specified, results will be included based on item type. This allows multiple, comma delimited. | [optional] |
| **media_types** | [**string[]**](../Model/string.md)| Optional. Filter by MediaType. Allows multiple, comma delimited. | [optional] |
| **sort_by** | [**string[]**](../Model/string.md)| Optional. Specify one or more sort orders, comma delimited. Options: Album, AlbumArtist, Artist, Budget, CommunityRating, CriticRating, DateCreated, DatePlayed, PlayCount, PremiereDate, ProductionYear, SortName, Random, Revenue, Runtime. | [optional] |
| **enable_user_data** | **bool**| Optional. Include user data. | [optional] |
| **image_type_limit** | **int**| Optional. The max number of images to return, per image type. | [optional] |
| **enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](../Model/\OpenAPI\Client\Model\ImageType.md)| Optional. The image types to include in the output. | [optional] |
| **user_id** | **string**| User Id. | [optional] |
| **recursive** | **bool**| Search recursively. | [optional] [default to true] |
| **enable_images** | **bool**| Optional. Include image information in output. | [optional] [default to true] |

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
