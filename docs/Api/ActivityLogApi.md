# OpenAPI\Client\ActivityLogApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLogEntries()**](ActivityLogApi.md#getLogEntries) | **GET** /System/ActivityLog/Entries | Gets activity log entries. |


## `getLogEntries()`

```php
getLogEntries($start_index, $limit, $min_date, $has_user_id): \OpenAPI\Client\Model\ActivityLogEntryQueryResult
```

Gets activity log entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ActivityLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_index = 56; // int | Optional. The record index to start at. All items with a lower index will be dropped from the results.
$limit = 56; // int | Optional. The maximum number of records to return.
$min_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional. The minimum date. Format = ISO.
$has_user_id = True; // bool | Optional. Filter log entries if it has user id, or not.

try {
    $result = $apiInstance->getLogEntries($start_index, $limit, $min_date, $has_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityLogApi->getLogEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_index** | **int**| Optional. The record index to start at. All items with a lower index will be dropped from the results. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **min_date** | **\DateTime**| Optional. The minimum date. Format &#x3D; ISO. | [optional] |
| **has_user_id** | **bool**| Optional. Filter log entries if it has user id, or not. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ActivityLogEntryQueryResult**](../Model/ActivityLogEntryQueryResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
