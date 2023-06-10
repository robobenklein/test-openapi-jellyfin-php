# OpenAPI\Client\UserApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authenticateUser()**](UserApi.md#authenticateUser) | **POST** /Users/{userId}/Authenticate | Authenticates a user. |
| [**authenticateUserByName()**](UserApi.md#authenticateUserByName) | **POST** /Users/AuthenticateByName | Authenticates a user by name. |
| [**authenticateWithQuickConnect()**](UserApi.md#authenticateWithQuickConnect) | **POST** /Users/AuthenticateWithQuickConnect | Authenticates a user with quick connect. |
| [**createUserByName()**](UserApi.md#createUserByName) | **POST** /Users/New | Creates a user. |
| [**deleteUser()**](UserApi.md#deleteUser) | **DELETE** /Users/{userId} | Deletes a user. |
| [**forgotPassword()**](UserApi.md#forgotPassword) | **POST** /Users/ForgotPassword | Initiates the forgot password process for a local user. |
| [**forgotPasswordPin()**](UserApi.md#forgotPasswordPin) | **POST** /Users/ForgotPassword/Pin | Redeems a forgot password pin. |
| [**getCurrentUser()**](UserApi.md#getCurrentUser) | **GET** /Users/Me | Gets the user based on auth token. |
| [**getPublicUsers()**](UserApi.md#getPublicUsers) | **GET** /Users/Public | Gets a list of publicly visible users for display on a login screen. |
| [**getUserById()**](UserApi.md#getUserById) | **GET** /Users/{userId} | Gets a user by Id. |
| [**getUsers()**](UserApi.md#getUsers) | **GET** /Users | Gets a list of users. |
| [**updateUser()**](UserApi.md#updateUser) | **POST** /Users/{userId} | Updates a user. |
| [**updateUserConfiguration()**](UserApi.md#updateUserConfiguration) | **POST** /Users/{userId}/Configuration | Updates a user configuration. |
| [**updateUserEasyPassword()**](UserApi.md#updateUserEasyPassword) | **POST** /Users/{userId}/EasyPassword | Updates a user&#39;s easy password. |
| [**updateUserPassword()**](UserApi.md#updateUserPassword) | **POST** /Users/{userId}/Password | Updates a user&#39;s password. |
| [**updateUserPolicy()**](UserApi.md#updateUserPolicy) | **POST** /Users/{userId}/Policy | Updates a user policy. |


## `authenticateUser()`

```php
authenticateUser($user_id, $pw, $password): \OpenAPI\Client\Model\AuthenticationResult
```

Authenticates a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string | The user id.
$pw = 'pw_example'; // string | The password as plain text.
$password = 'password_example'; // string | The password sha1-hash.

try {
    $result = $apiInstance->authenticateUser($user_id, $pw, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->authenticateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The user id. | |
| **pw** | **string**| The password as plain text. | |
| **password** | **string**| The password sha1-hash. | [optional] |

### Return type

[**\OpenAPI\Client\Model\AuthenticationResult**](../Model/AuthenticationResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authenticateUserByName()`

```php
authenticateUserByName($authenticate_user_by_name_request): \OpenAPI\Client\Model\AuthenticationResult
```

Authenticates a user by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authenticate_user_by_name_request = new \OpenAPI\Client\Model\AuthenticateUserByNameRequest(); // \OpenAPI\Client\Model\AuthenticateUserByNameRequest | The M:Jellyfin.Api.Controllers.UserController.AuthenticateUserByName(Jellyfin.Api.Models.UserDtos.AuthenticateUserByName) request.

try {
    $result = $apiInstance->authenticateUserByName($authenticate_user_by_name_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->authenticateUserByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authenticate_user_by_name_request** | [**\OpenAPI\Client\Model\AuthenticateUserByNameRequest**](../Model/AuthenticateUserByNameRequest.md)| The M:Jellyfin.Api.Controllers.UserController.AuthenticateUserByName(Jellyfin.Api.Models.UserDtos.AuthenticateUserByName) request. | |

### Return type

[**\OpenAPI\Client\Model\AuthenticationResult**](../Model/AuthenticationResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authenticateWithQuickConnect()`

```php
authenticateWithQuickConnect($authenticate_with_quick_connect_request): \OpenAPI\Client\Model\AuthenticationResult
```

Authenticates a user with quick connect.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authenticate_with_quick_connect_request = new \OpenAPI\Client\Model\AuthenticateWithQuickConnectRequest(); // \OpenAPI\Client\Model\AuthenticateWithQuickConnectRequest | The Jellyfin.Api.Models.UserDtos.QuickConnectDto request.

try {
    $result = $apiInstance->authenticateWithQuickConnect($authenticate_with_quick_connect_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->authenticateWithQuickConnect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authenticate_with_quick_connect_request** | [**\OpenAPI\Client\Model\AuthenticateWithQuickConnectRequest**](../Model/AuthenticateWithQuickConnectRequest.md)| The Jellyfin.Api.Models.UserDtos.QuickConnectDto request. | |

### Return type

[**\OpenAPI\Client\Model\AuthenticationResult**](../Model/AuthenticationResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUserByName()`

```php
createUserByName($create_user_by_name_request): \OpenAPI\Client\Model\UserDto
```

Creates a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_user_by_name_request = new \OpenAPI\Client\Model\CreateUserByNameRequest(); // \OpenAPI\Client\Model\CreateUserByNameRequest | The create user by name request body.

try {
    $result = $apiInstance->createUserByName($create_user_by_name_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->createUserByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_user_by_name_request** | [**\OpenAPI\Client\Model\CreateUserByNameRequest**](../Model/CreateUserByNameRequest.md)| The create user by name request body. | |

### Return type

[**\OpenAPI\Client\Model\UserDto**](../Model/UserDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUser()`

```php
deleteUser($user_id)
```

Deletes a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | The user id.

try {
    $apiInstance->deleteUser($user_id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The user id. | |

### Return type

void (empty response body)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forgotPassword()`

```php
forgotPassword($forgot_password_request): \OpenAPI\Client\Model\ForgotPasswordResult
```

Initiates the forgot password process for a local user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$forgot_password_request = new \OpenAPI\Client\Model\ForgotPasswordRequest(); // \OpenAPI\Client\Model\ForgotPasswordRequest | The forgot password request containing the entered username.

try {
    $result = $apiInstance->forgotPassword($forgot_password_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->forgotPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **forgot_password_request** | [**\OpenAPI\Client\Model\ForgotPasswordRequest**](../Model/ForgotPasswordRequest.md)| The forgot password request containing the entered username. | |

### Return type

[**\OpenAPI\Client\Model\ForgotPasswordResult**](../Model/ForgotPasswordResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forgotPasswordPin()`

```php
forgotPasswordPin($forgot_password_pin_request): \OpenAPI\Client\Model\PinRedeemResult
```

Redeems a forgot password pin.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$forgot_password_pin_request = new \OpenAPI\Client\Model\ForgotPasswordPinRequest(); // \OpenAPI\Client\Model\ForgotPasswordPinRequest | The forgot password pin request containing the entered pin.

try {
    $result = $apiInstance->forgotPasswordPin($forgot_password_pin_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->forgotPasswordPin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **forgot_password_pin_request** | [**\OpenAPI\Client\Model\ForgotPasswordPinRequest**](../Model/ForgotPasswordPinRequest.md)| The forgot password pin request containing the entered pin. | |

### Return type

[**\OpenAPI\Client\Model\PinRedeemResult**](../Model/PinRedeemResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrentUser()`

```php
getCurrentUser(): \OpenAPI\Client\Model\UserDto
```

Gets the user based on auth token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCurrentUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getCurrentUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\UserDto**](../Model/UserDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPublicUsers()`

```php
getPublicUsers(): \OpenAPI\Client\Model\UserDto[]
```

Gets a list of publicly visible users for display on a login screen.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getPublicUsers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getPublicUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\UserDto[]**](../Model/UserDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserById()`

```php
getUserById($user_id): \OpenAPI\Client\Model\UserDto
```

Gets a user by Id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | The user id.

try {
    $result = $apiInstance->getUserById($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The user id. | |

### Return type

[**\OpenAPI\Client\Model\UserDto**](../Model/UserDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsers()`

```php
getUsers($is_hidden, $is_disabled): \OpenAPI\Client\Model\UserDto[]
```

Gets a list of users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$is_hidden = True; // bool | Optional filter by IsHidden=true or false.
$is_disabled = True; // bool | Optional filter by IsDisabled=true or false.

try {
    $result = $apiInstance->getUsers($is_hidden, $is_disabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_hidden** | **bool**| Optional filter by IsHidden&#x3D;true or false. | [optional] |
| **is_disabled** | **bool**| Optional filter by IsDisabled&#x3D;true or false. | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserDto[]**](../Model/UserDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUser()`

```php
updateUser($user_id, $update_user_request)
```

Updates a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | The user id.
$update_user_request = new \OpenAPI\Client\Model\UpdateUserRequest(); // \OpenAPI\Client\Model\UpdateUserRequest | The updated user model.

try {
    $apiInstance->updateUser($user_id, $update_user_request);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The user id. | |
| **update_user_request** | [**\OpenAPI\Client\Model\UpdateUserRequest**](../Model/UpdateUserRequest.md)| The updated user model. | |

### Return type

void (empty response body)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserConfiguration()`

```php
updateUserConfiguration($user_id, $update_user_configuration_request)
```

Updates a user configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | The user id.
$update_user_configuration_request = new \OpenAPI\Client\Model\UpdateUserConfigurationRequest(); // \OpenAPI\Client\Model\UpdateUserConfigurationRequest | The new user configuration.

try {
    $apiInstance->updateUserConfiguration($user_id, $update_user_configuration_request);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUserConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The user id. | |
| **update_user_configuration_request** | [**\OpenAPI\Client\Model\UpdateUserConfigurationRequest**](../Model/UpdateUserConfigurationRequest.md)| The new user configuration. | |

### Return type

void (empty response body)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserEasyPassword()`

```php
updateUserEasyPassword($user_id, $update_user_easy_password_request)
```

Updates a user's easy password.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | The user id.
$update_user_easy_password_request = new \OpenAPI\Client\Model\UpdateUserEasyPasswordRequest(); // \OpenAPI\Client\Model\UpdateUserEasyPasswordRequest | The M:Jellyfin.Api.Controllers.UserController.UpdateUserEasyPassword(System.Guid,Jellyfin.Api.Models.UserDtos.UpdateUserEasyPassword) request.

try {
    $apiInstance->updateUserEasyPassword($user_id, $update_user_easy_password_request);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUserEasyPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The user id. | |
| **update_user_easy_password_request** | [**\OpenAPI\Client\Model\UpdateUserEasyPasswordRequest**](../Model/UpdateUserEasyPasswordRequest.md)| The M:Jellyfin.Api.Controllers.UserController.UpdateUserEasyPassword(System.Guid,Jellyfin.Api.Models.UserDtos.UpdateUserEasyPassword) request. | |

### Return type

void (empty response body)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserPassword()`

```php
updateUserPassword($user_id, $update_user_password_request)
```

Updates a user's password.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | The user id.
$update_user_password_request = new \OpenAPI\Client\Model\UpdateUserPasswordRequest(); // \OpenAPI\Client\Model\UpdateUserPasswordRequest | The M:Jellyfin.Api.Controllers.UserController.UpdateUserPassword(System.Guid,Jellyfin.Api.Models.UserDtos.UpdateUserPassword) request.

try {
    $apiInstance->updateUserPassword($user_id, $update_user_password_request);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUserPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The user id. | |
| **update_user_password_request** | [**\OpenAPI\Client\Model\UpdateUserPasswordRequest**](../Model/UpdateUserPasswordRequest.md)| The M:Jellyfin.Api.Controllers.UserController.UpdateUserPassword(System.Guid,Jellyfin.Api.Models.UserDtos.UpdateUserPassword) request. | |

### Return type

void (empty response body)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserPolicy()`

```php
updateUserPolicy($user_id, $update_user_policy_request)
```

Updates a user policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | The user id.
$update_user_policy_request = new \OpenAPI\Client\Model\UpdateUserPolicyRequest(); // \OpenAPI\Client\Model\UpdateUserPolicyRequest | The new user policy.

try {
    $apiInstance->updateUserPolicy($user_id, $update_user_policy_request);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUserPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| The user id. | |
| **update_user_policy_request** | [**\OpenAPI\Client\Model\UpdateUserPolicyRequest**](../Model/UpdateUserPolicyRequest.md)| The new user policy. | |

### Return type

void (empty response body)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
