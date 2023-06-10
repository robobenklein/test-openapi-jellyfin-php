# OpenAPI\Client\DisplayPreferencesApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDisplayPreferences()**](DisplayPreferencesApi.md#getDisplayPreferences) | **GET** /DisplayPreferences/{displayPreferencesId} | Get Display Preferences. |
| [**updateDisplayPreferences()**](DisplayPreferencesApi.md#updateDisplayPreferences) | **POST** /DisplayPreferences/{displayPreferencesId} | Update Display Preferences. |


## `getDisplayPreferences()`

```php
getDisplayPreferences($display_preferences_id, $user_id, $client): \OpenAPI\Client\Model\DisplayPreferencesDto
```

Get Display Preferences.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DisplayPreferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$display_preferences_id = 'display_preferences_id_example'; // string | Display preferences id.
$user_id = 'user_id_example'; // string | User id.
$client = 'client_example'; // string | Client.

try {
    $result = $apiInstance->getDisplayPreferences($display_preferences_id, $user_id, $client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisplayPreferencesApi->getDisplayPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **display_preferences_id** | **string**| Display preferences id. | |
| **user_id** | **string**| User id. | |
| **client** | **string**| Client. | |

### Return type

[**\OpenAPI\Client\Model\DisplayPreferencesDto**](../Model/DisplayPreferencesDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDisplayPreferences()`

```php
updateDisplayPreferences($display_preferences_id, $user_id, $client, $update_display_preferences_request)
```

Update Display Preferences.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DisplayPreferencesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$display_preferences_id = 'display_preferences_id_example'; // string | Display preferences id.
$user_id = 'user_id_example'; // string | User Id.
$client = 'client_example'; // string | Client.
$update_display_preferences_request = new \OpenAPI\Client\Model\UpdateDisplayPreferencesRequest(); // \OpenAPI\Client\Model\UpdateDisplayPreferencesRequest | New Display Preferences object.

try {
    $apiInstance->updateDisplayPreferences($display_preferences_id, $user_id, $client, $update_display_preferences_request);
} catch (Exception $e) {
    echo 'Exception when calling DisplayPreferencesApi->updateDisplayPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **display_preferences_id** | **string**| Display preferences id. | |
| **user_id** | **string**| User Id. | |
| **client** | **string**| Client. | |
| **update_display_preferences_request** | [**\OpenAPI\Client\Model\UpdateDisplayPreferencesRequest**](../Model/UpdateDisplayPreferencesRequest.md)| New Display Preferences object. | |

### Return type

void (empty response body)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
