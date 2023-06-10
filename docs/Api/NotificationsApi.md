# OpenAPI\Client\NotificationsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAdminNotification()**](NotificationsApi.md#createAdminNotification) | **POST** /Notifications/Admin | Sends a notification to all admins. |
| [**getNotificationServices()**](NotificationsApi.md#getNotificationServices) | **GET** /Notifications/Services | Gets notification services. |
| [**getNotificationTypes()**](NotificationsApi.md#getNotificationTypes) | **GET** /Notifications/Types | Gets notification types. |
| [**getNotifications()**](NotificationsApi.md#getNotifications) | **GET** /Notifications/{userId} | Gets a user&#39;s notifications. |
| [**getNotificationsSummary()**](NotificationsApi.md#getNotificationsSummary) | **GET** /Notifications/{userId}/Summary | Gets a user&#39;s notification summary. |
| [**setRead()**](NotificationsApi.md#setRead) | **POST** /Notifications/{userId}/Read | Sets notifications as read. |
| [**setUnread()**](NotificationsApi.md#setUnread) | **POST** /Notifications/{userId}/Unread | Sets notifications as unread. |


## `createAdminNotification()`

```php
createAdminNotification($create_admin_notification_request)
```

Sends a notification to all admins.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_admin_notification_request = new \OpenAPI\Client\Model\CreateAdminNotificationRequest(); // \OpenAPI\Client\Model\CreateAdminNotificationRequest | The notification request.

try {
    $apiInstance->createAdminNotification($create_admin_notification_request);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->createAdminNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_admin_notification_request** | [**\OpenAPI\Client\Model\CreateAdminNotificationRequest**](../Model/CreateAdminNotificationRequest.md)| The notification request. | |

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

## `getNotificationServices()`

```php
getNotificationServices(): \OpenAPI\Client\Model\NameIdPair[]
```

Gets notification services.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getNotificationServices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getNotificationServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\NameIdPair[]**](../Model/NameIdPair.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNotificationTypes()`

```php
getNotificationTypes(): \OpenAPI\Client\Model\NotificationTypeInfo[]
```

Gets notification types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getNotificationTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getNotificationTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\NotificationTypeInfo[]**](../Model/NotificationTypeInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNotifications()`

```php
getNotifications($user_id): \OpenAPI\Client\Model\NotificationResultDto
```

Gets a user's notifications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->getNotifications($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\NotificationResultDto**](../Model/NotificationResultDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getNotificationsSummary()`

```php
getNotificationsSummary($user_id): \OpenAPI\Client\Model\NotificationsSummaryDto
```

Gets a user's notification summary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->getNotificationsSummary($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getNotificationsSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\NotificationsSummaryDto**](../Model/NotificationsSummaryDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setRead()`

```php
setRead($user_id)
```

Sets notifications as read.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string

try {
    $apiInstance->setRead($user_id);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->setRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setUnread()`

```php
setUnread($user_id)
```

Sets notifications as unread.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string

try {
    $apiInstance->setUnread($user_id);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->setUnread: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
