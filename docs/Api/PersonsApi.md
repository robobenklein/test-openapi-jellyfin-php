# OpenAPI\Client\PersonsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPerson()**](PersonsApi.md#getPerson) | **GET** /Persons/{name} | Get person by name. |
| [**getPersons()**](PersonsApi.md#getPersons) | **GET** /Persons | Gets all persons. |


## `getPerson()`

```php
getPerson($name, $user_id): \OpenAPI\Client\Model\BaseItemDto
```

Get person by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Person name.
$user_id = 'user_id_example'; // string | Optional. Filter by user id, and attach user data.

try {
    $result = $apiInstance->getPerson($name, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->getPerson: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Person name. | |
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

## `getPersons()`

```php
getPersons($limit, $search_term, $fields, $filters, $is_favorite, $enable_user_data, $image_type_limit, $enable_image_types, $exclude_person_types, $person_types, $appears_in_item_id, $user_id, $enable_images): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets all persons.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Optional. The maximum number of records to return.
$search_term = 'search_term_example'; // string | The search term.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output.
$filters = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFilter()); // \OpenAPI\Client\Model\ItemFilter[] | Optional. Specify additional filters to apply.
$is_favorite = True; // bool | Optional filter by items that are marked as favorite, or not. userId is required.
$enable_user_data = True; // bool | Optional, include user data.
$image_type_limit = 56; // int | Optional, the max number of images to return, per image type.
$enable_image_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType()); // \OpenAPI\Client\Model\ImageType[] | Optional. The image types to include in the output.
$exclude_person_types = array('exclude_person_types_example'); // string[] | Optional. If specified results will be filtered to exclude those containing the specified PersonType. Allows multiple, comma-delimited.
$person_types = array('person_types_example'); // string[] | Optional. If specified results will be filtered to include only those containing the specified PersonType. Allows multiple, comma-delimited.
$appears_in_item_id = 'appears_in_item_id_example'; // string | Optional. If specified, person results will be filtered on items related to said persons.
$user_id = 'user_id_example'; // string | User id.
$enable_images = true; // bool | Optional, include image information in output.

try {
    $result = $apiInstance->getPersons($limit, $search_term, $fields, $filters, $is_favorite, $enable_user_data, $image_type_limit, $enable_image_types, $exclude_person_types, $person_types, $appears_in_item_id, $user_id, $enable_images);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonsApi->getPersons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **search_term** | **string**| The search term. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. | [optional] |
| **filters** | [**\OpenAPI\Client\Model\ItemFilter[]**](../Model/\OpenAPI\Client\Model\ItemFilter.md)| Optional. Specify additional filters to apply. | [optional] |
| **is_favorite** | **bool**| Optional filter by items that are marked as favorite, or not. userId is required. | [optional] |
| **enable_user_data** | **bool**| Optional, include user data. | [optional] |
| **image_type_limit** | **int**| Optional, the max number of images to return, per image type. | [optional] |
| **enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](../Model/\OpenAPI\Client\Model\ImageType.md)| Optional. The image types to include in the output. | [optional] |
| **exclude_person_types** | [**string[]**](../Model/string.md)| Optional. If specified results will be filtered to exclude those containing the specified PersonType. Allows multiple, comma-delimited. | [optional] |
| **person_types** | [**string[]**](../Model/string.md)| Optional. If specified results will be filtered to include only those containing the specified PersonType. Allows multiple, comma-delimited. | [optional] |
| **appears_in_item_id** | **string**| Optional. If specified, person results will be filtered on items related to said persons. | [optional] |
| **user_id** | **string**| User id. | [optional] |
| **enable_images** | **bool**| Optional, include image information in output. | [optional] [default to true] |

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
