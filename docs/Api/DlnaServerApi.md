# OpenAPI\Client\DlnaServerApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getConnectionManager()**](DlnaServerApi.md#getConnectionManager) | **GET** /Dlna/{serverId}/ConnectionManager | Gets Dlna media receiver registrar xml. |
| [**getConnectionManager2()**](DlnaServerApi.md#getConnectionManager2) | **GET** /Dlna/{serverId}/ConnectionManager/ConnectionManager | Gets Dlna media receiver registrar xml. |
| [**getConnectionManager3()**](DlnaServerApi.md#getConnectionManager3) | **GET** /Dlna/{serverId}/ConnectionManager/ConnectionManager.xml | Gets Dlna media receiver registrar xml. |
| [**getContentDirectory()**](DlnaServerApi.md#getContentDirectory) | **GET** /Dlna/{serverId}/ContentDirectory | Gets Dlna content directory xml. |
| [**getContentDirectory2()**](DlnaServerApi.md#getContentDirectory2) | **GET** /Dlna/{serverId}/ContentDirectory/ContentDirectory | Gets Dlna content directory xml. |
| [**getContentDirectory3()**](DlnaServerApi.md#getContentDirectory3) | **GET** /Dlna/{serverId}/ContentDirectory/ContentDirectory.xml | Gets Dlna content directory xml. |
| [**getDescriptionXml()**](DlnaServerApi.md#getDescriptionXml) | **GET** /Dlna/{serverId}/description | Get Description Xml. |
| [**getDescriptionXml2()**](DlnaServerApi.md#getDescriptionXml2) | **GET** /Dlna/{serverId}/description.xml | Get Description Xml. |
| [**getIcon()**](DlnaServerApi.md#getIcon) | **GET** /Dlna/icons/{fileName} | Gets a server icon. |
| [**getIconId()**](DlnaServerApi.md#getIconId) | **GET** /Dlna/{serverId}/icons/{fileName} | Gets a server icon. |
| [**getMediaReceiverRegistrar()**](DlnaServerApi.md#getMediaReceiverRegistrar) | **GET** /Dlna/{serverId}/MediaReceiverRegistrar | Gets Dlna media receiver registrar xml. |
| [**getMediaReceiverRegistrar2()**](DlnaServerApi.md#getMediaReceiverRegistrar2) | **GET** /Dlna/{serverId}/MediaReceiverRegistrar/MediaReceiverRegistrar | Gets Dlna media receiver registrar xml. |
| [**getMediaReceiverRegistrar3()**](DlnaServerApi.md#getMediaReceiverRegistrar3) | **GET** /Dlna/{serverId}/MediaReceiverRegistrar/MediaReceiverRegistrar.xml | Gets Dlna media receiver registrar xml. |
| [**processConnectionManagerControlRequest()**](DlnaServerApi.md#processConnectionManagerControlRequest) | **POST** /Dlna/{serverId}/ConnectionManager/Control | Process a connection manager control request. |
| [**processContentDirectoryControlRequest()**](DlnaServerApi.md#processContentDirectoryControlRequest) | **POST** /Dlna/{serverId}/ContentDirectory/Control | Process a content directory control request. |
| [**processMediaReceiverRegistrarControlRequest()**](DlnaServerApi.md#processMediaReceiverRegistrarControlRequest) | **POST** /Dlna/{serverId}/MediaReceiverRegistrar/Control | Process a media receiver registrar control request. |


## `getConnectionManager()`

```php
getConnectionManager($server_id): \SplFileObject
```

Gets Dlna media receiver registrar xml.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DlnaServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | Server UUID.

try {
    $result = $apiInstance->getConnectionManager($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DlnaServerApi->getConnectionManager: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| Server UUID. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConnectionManager2()`

```php
getConnectionManager2($server_id): \SplFileObject
```

Gets Dlna media receiver registrar xml.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DlnaServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | Server UUID.

try {
    $result = $apiInstance->getConnectionManager2($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DlnaServerApi->getConnectionManager2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| Server UUID. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConnectionManager3()`

```php
getConnectionManager3($server_id): \SplFileObject
```

Gets Dlna media receiver registrar xml.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DlnaServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | Server UUID.

try {
    $result = $apiInstance->getConnectionManager3($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DlnaServerApi->getConnectionManager3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| Server UUID. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContentDirectory()`

```php
getContentDirectory($server_id): \SplFileObject
```

Gets Dlna content directory xml.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DlnaServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | Server UUID.

try {
    $result = $apiInstance->getContentDirectory($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DlnaServerApi->getContentDirectory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| Server UUID. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContentDirectory2()`

```php
getContentDirectory2($server_id): \SplFileObject
```

Gets Dlna content directory xml.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DlnaServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | Server UUID.

try {
    $result = $apiInstance->getContentDirectory2($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DlnaServerApi->getContentDirectory2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| Server UUID. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContentDirectory3()`

```php
getContentDirectory3($server_id): \SplFileObject
```

Gets Dlna content directory xml.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DlnaServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | Server UUID.

try {
    $result = $apiInstance->getContentDirectory3($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DlnaServerApi->getContentDirectory3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| Server UUID. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDescriptionXml()`

```php
getDescriptionXml($server_id): \SplFileObject
```

Get Description Xml.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DlnaServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | Server UUID.

try {
    $result = $apiInstance->getDescriptionXml($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DlnaServerApi->getDescriptionXml: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| Server UUID. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDescriptionXml2()`

```php
getDescriptionXml2($server_id): \SplFileObject
```

Get Description Xml.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DlnaServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | Server UUID.

try {
    $result = $apiInstance->getDescriptionXml2($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DlnaServerApi->getDescriptionXml2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| Server UUID. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIcon()`

```php
getIcon($file_name): \SplFileObject
```

Gets a server icon.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DlnaServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file_name = 'file_name_example'; // string | The icon filename.

try {
    $result = $apiInstance->getIcon($file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DlnaServerApi->getIcon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file_name** | **string**| The icon filename. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIconId()`

```php
getIconId($server_id, $file_name): \SplFileObject
```

Gets a server icon.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DlnaServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | Server UUID.
$file_name = 'file_name_example'; // string | The icon filename.

try {
    $result = $apiInstance->getIconId($server_id, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DlnaServerApi->getIconId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| Server UUID. | |
| **file_name** | **string**| The icon filename. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMediaReceiverRegistrar()`

```php
getMediaReceiverRegistrar($server_id): \SplFileObject
```

Gets Dlna media receiver registrar xml.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DlnaServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | Server UUID.

try {
    $result = $apiInstance->getMediaReceiverRegistrar($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DlnaServerApi->getMediaReceiverRegistrar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| Server UUID. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMediaReceiverRegistrar2()`

```php
getMediaReceiverRegistrar2($server_id): \SplFileObject
```

Gets Dlna media receiver registrar xml.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DlnaServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | Server UUID.

try {
    $result = $apiInstance->getMediaReceiverRegistrar2($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DlnaServerApi->getMediaReceiverRegistrar2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| Server UUID. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMediaReceiverRegistrar3()`

```php
getMediaReceiverRegistrar3($server_id): \SplFileObject
```

Gets Dlna media receiver registrar xml.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DlnaServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | Server UUID.

try {
    $result = $apiInstance->getMediaReceiverRegistrar3($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DlnaServerApi->getMediaReceiverRegistrar3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| Server UUID. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processConnectionManagerControlRequest()`

```php
processConnectionManagerControlRequest($server_id): \SplFileObject
```

Process a connection manager control request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DlnaServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | Server UUID.

try {
    $result = $apiInstance->processConnectionManagerControlRequest($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DlnaServerApi->processConnectionManagerControlRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| Server UUID. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processContentDirectoryControlRequest()`

```php
processContentDirectoryControlRequest($server_id): \SplFileObject
```

Process a content directory control request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DlnaServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | Server UUID.

try {
    $result = $apiInstance->processContentDirectoryControlRequest($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DlnaServerApi->processContentDirectoryControlRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| Server UUID. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `processMediaReceiverRegistrarControlRequest()`

```php
processMediaReceiverRegistrarControlRequest($server_id): \SplFileObject
```

Process a media receiver registrar control request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DlnaServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server_id = 'server_id_example'; // string | Server UUID.

try {
    $result = $apiInstance->processMediaReceiverRegistrarControlRequest($server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DlnaServerApi->processMediaReceiverRegistrarControlRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server_id** | **string**| Server UUID. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
