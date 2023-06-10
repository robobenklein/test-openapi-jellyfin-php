# OpenAPI\Client\UserLibraryApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteUserItemRating()**](UserLibraryApi.md#deleteUserItemRating) | **DELETE** /Users/{userId}/Items/{itemId}/Rating | Deletes a user&#39;s saved personal rating for an item. |
| [**getIntros()**](UserLibraryApi.md#getIntros) | **GET** /Users/{userId}/Items/{itemId}/Intros | Gets intros to play before the main media item plays. |
| [**getItem()**](UserLibraryApi.md#getItem) | **GET** /Users/{userId}/Items/{itemId} | Gets an item from a user&#39;s library. |
| [**getLatestMedia()**](UserLibraryApi.md#getLatestMedia) | **GET** /Users/{userId}/Items/Latest | Gets latest media. |
| [**getLocalTrailers()**](UserLibraryApi.md#getLocalTrailers) | **GET** /Users/{userId}/Items/{itemId}/LocalTrailers | Gets local trailers for an item. |
| [**getRootFolder()**](UserLibraryApi.md#getRootFolder) | **GET** /Users/{userId}/Items/Root | Gets the root folder from a user&#39;s library. |
| [**getSpecialFeatures()**](UserLibraryApi.md#getSpecialFeatures) | **GET** /Users/{userId}/Items/{itemId}/SpecialFeatures | Gets special features for an item. |
| [**markFavoriteItem()**](UserLibraryApi.md#markFavoriteItem) | **POST** /Users/{userId}/FavoriteItems/{itemId} | Marks an item as a favorite. |
| [**unmarkFavoriteItem()**](UserLibraryApi.md#unmarkFavoriteItem) | **DELETE** /Users/{userId}/FavoriteItems/{itemId} | Unmarks item as a favorite. |
| [**updateUserItemRating()**](UserLibraryApi.md#updateUserItemRating) | **POST** /Users/{userId}/Items/{itemId}/Rating | Updates a user&#39;s rating for an item. |


## `deleteUserItemRating()`

```php
deleteUserItemRating($user_id, $item_id): \OpenAPI\Client\Model\UserItemDataDto
```

Deletes a user's saved personal rating for an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserLibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User id.
$item_id = 'item_id_example'; // string | Item id.

try {
    $result = $apiInstance->deleteUserItemRating($user_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLibraryApi->deleteUserItemRating: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User id. | |
| **item_id** | **string**| Item id. | |

### Return type

[**\OpenAPI\Client\Model\UserItemDataDto**](../Model/UserItemDataDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIntros()`

```php
getIntros($user_id, $item_id): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets intros to play before the main media item plays.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserLibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User id.
$item_id = 'item_id_example'; // string | Item id.

try {
    $result = $apiInstance->getIntros($user_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLibraryApi->getIntros: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User id. | |
| **item_id** | **string**| Item id. | |

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

## `getItem()`

```php
getItem($user_id, $item_id): \OpenAPI\Client\Model\BaseItemDto
```

Gets an item from a user's library.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserLibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User id.
$item_id = 'item_id_example'; // string | Item id.

try {
    $result = $apiInstance->getItem($user_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLibraryApi->getItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User id. | |
| **item_id** | **string**| Item id. | |

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

## `getLatestMedia()`

```php
getLatestMedia($user_id, $parent_id, $fields, $include_item_types, $is_played, $enable_images, $image_type_limit, $enable_image_types, $enable_user_data, $limit, $group_items): \OpenAPI\Client\Model\BaseItemDto[]
```

Gets latest media.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserLibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User id.
$parent_id = 'parent_id_example'; // string | Specify this to localize the search to a specific item or folder. Omit to use the root.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output.
$include_item_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\BaseItemKind()); // \OpenAPI\Client\Model\BaseItemKind[] | Optional. If specified, results will be filtered based on item type. This allows multiple, comma delimited.
$is_played = True; // bool | Filter by items that are played, or not.
$enable_images = True; // bool | Optional. include image information in output.
$image_type_limit = 56; // int | Optional. the max number of images to return, per image type.
$enable_image_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType()); // \OpenAPI\Client\Model\ImageType[] | Optional. The image types to include in the output.
$enable_user_data = True; // bool | Optional. include user data.
$limit = 20; // int | Return item limit.
$group_items = true; // bool | Whether or not to group items into a parent container.

try {
    $result = $apiInstance->getLatestMedia($user_id, $parent_id, $fields, $include_item_types, $is_played, $enable_images, $image_type_limit, $enable_image_types, $enable_user_data, $limit, $group_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLibraryApi->getLatestMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User id. | |
| **parent_id** | **string**| Specify this to localize the search to a specific item or folder. Omit to use the root. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. | [optional] |
| **include_item_types** | [**\OpenAPI\Client\Model\BaseItemKind[]**](../Model/\OpenAPI\Client\Model\BaseItemKind.md)| Optional. If specified, results will be filtered based on item type. This allows multiple, comma delimited. | [optional] |
| **is_played** | **bool**| Filter by items that are played, or not. | [optional] |
| **enable_images** | **bool**| Optional. include image information in output. | [optional] |
| **image_type_limit** | **int**| Optional. the max number of images to return, per image type. | [optional] |
| **enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](../Model/\OpenAPI\Client\Model\ImageType.md)| Optional. The image types to include in the output. | [optional] |
| **enable_user_data** | **bool**| Optional. include user data. | [optional] |
| **limit** | **int**| Return item limit. | [optional] [default to 20] |
| **group_items** | **bool**| Whether or not to group items into a parent container. | [optional] [default to true] |

### Return type

[**\OpenAPI\Client\Model\BaseItemDto[]**](../Model/BaseItemDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLocalTrailers()`

```php
getLocalTrailers($user_id, $item_id): \OpenAPI\Client\Model\BaseItemDto[]
```

Gets local trailers for an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserLibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User id.
$item_id = 'item_id_example'; // string | Item id.

try {
    $result = $apiInstance->getLocalTrailers($user_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLibraryApi->getLocalTrailers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User id. | |
| **item_id** | **string**| Item id. | |

### Return type

[**\OpenAPI\Client\Model\BaseItemDto[]**](../Model/BaseItemDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRootFolder()`

```php
getRootFolder($user_id): \OpenAPI\Client\Model\BaseItemDto
```

Gets the root folder from a user's library.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserLibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User id.

try {
    $result = $apiInstance->getRootFolder($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLibraryApi->getRootFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User id. | |

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

## `getSpecialFeatures()`

```php
getSpecialFeatures($user_id, $item_id): \OpenAPI\Client\Model\BaseItemDto[]
```

Gets special features for an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserLibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User id.
$item_id = 'item_id_example'; // string | Item id.

try {
    $result = $apiInstance->getSpecialFeatures($user_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLibraryApi->getSpecialFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User id. | |
| **item_id** | **string**| Item id. | |

### Return type

[**\OpenAPI\Client\Model\BaseItemDto[]**](../Model/BaseItemDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markFavoriteItem()`

```php
markFavoriteItem($user_id, $item_id): \OpenAPI\Client\Model\UserItemDataDto
```

Marks an item as a favorite.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserLibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User id.
$item_id = 'item_id_example'; // string | Item id.

try {
    $result = $apiInstance->markFavoriteItem($user_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLibraryApi->markFavoriteItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User id. | |
| **item_id** | **string**| Item id. | |

### Return type

[**\OpenAPI\Client\Model\UserItemDataDto**](../Model/UserItemDataDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unmarkFavoriteItem()`

```php
unmarkFavoriteItem($user_id, $item_id): \OpenAPI\Client\Model\UserItemDataDto
```

Unmarks item as a favorite.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserLibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User id.
$item_id = 'item_id_example'; // string | Item id.

try {
    $result = $apiInstance->unmarkFavoriteItem($user_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLibraryApi->unmarkFavoriteItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User id. | |
| **item_id** | **string**| Item id. | |

### Return type

[**\OpenAPI\Client\Model\UserItemDataDto**](../Model/UserItemDataDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserItemRating()`

```php
updateUserItemRating($user_id, $item_id, $likes): \OpenAPI\Client\Model\UserItemDataDto
```

Updates a user's rating for an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\UserLibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User id.
$item_id = 'item_id_example'; // string | Item id.
$likes = True; // bool | Whether this M:Jellyfin.Api.Controllers.UserLibraryController.UpdateUserItemRating(System.Guid,System.Guid,System.Nullable{System.Boolean}) is likes.

try {
    $result = $apiInstance->updateUserItemRating($user_id, $item_id, $likes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserLibraryApi->updateUserItemRating: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User id. | |
| **item_id** | **string**| Item id. | |
| **likes** | **bool**| Whether this M:Jellyfin.Api.Controllers.UserLibraryController.UpdateUserItemRating(System.Guid,System.Guid,System.Nullable{System.Boolean}) is likes. | [optional] |

### Return type

[**\OpenAPI\Client\Model\UserItemDataDto**](../Model/UserItemDataDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
