# OpenAPI\Client\InstantMixApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getInstantMixFromAlbum()**](InstantMixApi.md#getInstantMixFromAlbum) | **GET** /Albums/{id}/InstantMix | Creates an instant playlist based on a given album. |
| [**getInstantMixFromArtists()**](InstantMixApi.md#getInstantMixFromArtists) | **GET** /Artists/{id}/InstantMix | Creates an instant playlist based on a given artist. |
| [**getInstantMixFromArtists2()**](InstantMixApi.md#getInstantMixFromArtists2) | **GET** /Artists/InstantMix | Creates an instant playlist based on a given artist. |
| [**getInstantMixFromItem()**](InstantMixApi.md#getInstantMixFromItem) | **GET** /Items/{id}/InstantMix | Creates an instant playlist based on a given item. |
| [**getInstantMixFromMusicGenreById()**](InstantMixApi.md#getInstantMixFromMusicGenreById) | **GET** /MusicGenres/InstantMix | Creates an instant playlist based on a given genre. |
| [**getInstantMixFromMusicGenreByName()**](InstantMixApi.md#getInstantMixFromMusicGenreByName) | **GET** /MusicGenres/{name}/InstantMix | Creates an instant playlist based on a given genre. |
| [**getInstantMixFromPlaylist()**](InstantMixApi.md#getInstantMixFromPlaylist) | **GET** /Playlists/{id}/InstantMix | Creates an instant playlist based on a given playlist. |
| [**getInstantMixFromSong()**](InstantMixApi.md#getInstantMixFromSong) | **GET** /Songs/{id}/InstantMix | Creates an instant playlist based on a given song. |


## `getInstantMixFromAlbum()`

```php
getInstantMixFromAlbum($id, $user_id, $limit, $fields, $enable_images, $enable_user_data, $image_type_limit, $enable_image_types): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Creates an instant playlist based on a given album.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InstantMixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The item id.
$user_id = 'user_id_example'; // string | Optional. Filter by user id, and attach user data.
$limit = 56; // int | Optional. The maximum number of records to return.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output.
$enable_images = True; // bool | Optional. Include image information in output.
$enable_user_data = True; // bool | Optional. Include user data.
$image_type_limit = 56; // int | Optional. The max number of images to return, per image type.
$enable_image_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType()); // \OpenAPI\Client\Model\ImageType[] | Optional. The image types to include in the output.

try {
    $result = $apiInstance->getInstantMixFromAlbum($id, $user_id, $limit, $fields, $enable_images, $enable_user_data, $image_type_limit, $enable_image_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstantMixApi->getInstantMixFromAlbum: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The item id. | |
| **user_id** | **string**| Optional. Filter by user id, and attach user data. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. | [optional] |
| **enable_images** | **bool**| Optional. Include image information in output. | [optional] |
| **enable_user_data** | **bool**| Optional. Include user data. | [optional] |
| **image_type_limit** | **int**| Optional. The max number of images to return, per image type. | [optional] |
| **enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](../Model/\OpenAPI\Client\Model\ImageType.md)| Optional. The image types to include in the output. | [optional] |

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

## `getInstantMixFromArtists()`

```php
getInstantMixFromArtists($id, $user_id, $limit, $fields, $enable_images, $enable_user_data, $image_type_limit, $enable_image_types): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Creates an instant playlist based on a given artist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InstantMixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The item id.
$user_id = 'user_id_example'; // string | Optional. Filter by user id, and attach user data.
$limit = 56; // int | Optional. The maximum number of records to return.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output.
$enable_images = True; // bool | Optional. Include image information in output.
$enable_user_data = True; // bool | Optional. Include user data.
$image_type_limit = 56; // int | Optional. The max number of images to return, per image type.
$enable_image_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType()); // \OpenAPI\Client\Model\ImageType[] | Optional. The image types to include in the output.

try {
    $result = $apiInstance->getInstantMixFromArtists($id, $user_id, $limit, $fields, $enable_images, $enable_user_data, $image_type_limit, $enable_image_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstantMixApi->getInstantMixFromArtists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The item id. | |
| **user_id** | **string**| Optional. Filter by user id, and attach user data. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. | [optional] |
| **enable_images** | **bool**| Optional. Include image information in output. | [optional] |
| **enable_user_data** | **bool**| Optional. Include user data. | [optional] |
| **image_type_limit** | **int**| Optional. The max number of images to return, per image type. | [optional] |
| **enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](../Model/\OpenAPI\Client\Model\ImageType.md)| Optional. The image types to include in the output. | [optional] |

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

## `getInstantMixFromArtists2()`

```php
getInstantMixFromArtists2($id, $user_id, $limit, $fields, $enable_images, $enable_user_data, $image_type_limit, $enable_image_types): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Creates an instant playlist based on a given artist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InstantMixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The item id.
$user_id = 'user_id_example'; // string | Optional. Filter by user id, and attach user data.
$limit = 56; // int | Optional. The maximum number of records to return.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output.
$enable_images = True; // bool | Optional. Include image information in output.
$enable_user_data = True; // bool | Optional. Include user data.
$image_type_limit = 56; // int | Optional. The max number of images to return, per image type.
$enable_image_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType()); // \OpenAPI\Client\Model\ImageType[] | Optional. The image types to include in the output.

try {
    $result = $apiInstance->getInstantMixFromArtists2($id, $user_id, $limit, $fields, $enable_images, $enable_user_data, $image_type_limit, $enable_image_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstantMixApi->getInstantMixFromArtists2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The item id. | |
| **user_id** | **string**| Optional. Filter by user id, and attach user data. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. | [optional] |
| **enable_images** | **bool**| Optional. Include image information in output. | [optional] |
| **enable_user_data** | **bool**| Optional. Include user data. | [optional] |
| **image_type_limit** | **int**| Optional. The max number of images to return, per image type. | [optional] |
| **enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](../Model/\OpenAPI\Client\Model\ImageType.md)| Optional. The image types to include in the output. | [optional] |

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

## `getInstantMixFromItem()`

```php
getInstantMixFromItem($id, $user_id, $limit, $fields, $enable_images, $enable_user_data, $image_type_limit, $enable_image_types): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Creates an instant playlist based on a given item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InstantMixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The item id.
$user_id = 'user_id_example'; // string | Optional. Filter by user id, and attach user data.
$limit = 56; // int | Optional. The maximum number of records to return.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output.
$enable_images = True; // bool | Optional. Include image information in output.
$enable_user_data = True; // bool | Optional. Include user data.
$image_type_limit = 56; // int | Optional. The max number of images to return, per image type.
$enable_image_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType()); // \OpenAPI\Client\Model\ImageType[] | Optional. The image types to include in the output.

try {
    $result = $apiInstance->getInstantMixFromItem($id, $user_id, $limit, $fields, $enable_images, $enable_user_data, $image_type_limit, $enable_image_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstantMixApi->getInstantMixFromItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The item id. | |
| **user_id** | **string**| Optional. Filter by user id, and attach user data. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. | [optional] |
| **enable_images** | **bool**| Optional. Include image information in output. | [optional] |
| **enable_user_data** | **bool**| Optional. Include user data. | [optional] |
| **image_type_limit** | **int**| Optional. The max number of images to return, per image type. | [optional] |
| **enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](../Model/\OpenAPI\Client\Model\ImageType.md)| Optional. The image types to include in the output. | [optional] |

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

## `getInstantMixFromMusicGenreById()`

```php
getInstantMixFromMusicGenreById($id, $user_id, $limit, $fields, $enable_images, $enable_user_data, $image_type_limit, $enable_image_types): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Creates an instant playlist based on a given genre.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InstantMixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The item id.
$user_id = 'user_id_example'; // string | Optional. Filter by user id, and attach user data.
$limit = 56; // int | Optional. The maximum number of records to return.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output.
$enable_images = True; // bool | Optional. Include image information in output.
$enable_user_data = True; // bool | Optional. Include user data.
$image_type_limit = 56; // int | Optional. The max number of images to return, per image type.
$enable_image_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType()); // \OpenAPI\Client\Model\ImageType[] | Optional. The image types to include in the output.

try {
    $result = $apiInstance->getInstantMixFromMusicGenreById($id, $user_id, $limit, $fields, $enable_images, $enable_user_data, $image_type_limit, $enable_image_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstantMixApi->getInstantMixFromMusicGenreById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The item id. | |
| **user_id** | **string**| Optional. Filter by user id, and attach user data. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. | [optional] |
| **enable_images** | **bool**| Optional. Include image information in output. | [optional] |
| **enable_user_data** | **bool**| Optional. Include user data. | [optional] |
| **image_type_limit** | **int**| Optional. The max number of images to return, per image type. | [optional] |
| **enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](../Model/\OpenAPI\Client\Model\ImageType.md)| Optional. The image types to include in the output. | [optional] |

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

## `getInstantMixFromMusicGenreByName()`

```php
getInstantMixFromMusicGenreByName($name, $user_id, $limit, $fields, $enable_images, $enable_user_data, $image_type_limit, $enable_image_types): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Creates an instant playlist based on a given genre.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InstantMixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | The genre name.
$user_id = 'user_id_example'; // string | Optional. Filter by user id, and attach user data.
$limit = 56; // int | Optional. The maximum number of records to return.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output.
$enable_images = True; // bool | Optional. Include image information in output.
$enable_user_data = True; // bool | Optional. Include user data.
$image_type_limit = 56; // int | Optional. The max number of images to return, per image type.
$enable_image_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType()); // \OpenAPI\Client\Model\ImageType[] | Optional. The image types to include in the output.

try {
    $result = $apiInstance->getInstantMixFromMusicGenreByName($name, $user_id, $limit, $fields, $enable_images, $enable_user_data, $image_type_limit, $enable_image_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstantMixApi->getInstantMixFromMusicGenreByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| The genre name. | |
| **user_id** | **string**| Optional. Filter by user id, and attach user data. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. | [optional] |
| **enable_images** | **bool**| Optional. Include image information in output. | [optional] |
| **enable_user_data** | **bool**| Optional. Include user data. | [optional] |
| **image_type_limit** | **int**| Optional. The max number of images to return, per image type. | [optional] |
| **enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](../Model/\OpenAPI\Client\Model\ImageType.md)| Optional. The image types to include in the output. | [optional] |

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

## `getInstantMixFromPlaylist()`

```php
getInstantMixFromPlaylist($id, $user_id, $limit, $fields, $enable_images, $enable_user_data, $image_type_limit, $enable_image_types): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Creates an instant playlist based on a given playlist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InstantMixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The item id.
$user_id = 'user_id_example'; // string | Optional. Filter by user id, and attach user data.
$limit = 56; // int | Optional. The maximum number of records to return.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output.
$enable_images = True; // bool | Optional. Include image information in output.
$enable_user_data = True; // bool | Optional. Include user data.
$image_type_limit = 56; // int | Optional. The max number of images to return, per image type.
$enable_image_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType()); // \OpenAPI\Client\Model\ImageType[] | Optional. The image types to include in the output.

try {
    $result = $apiInstance->getInstantMixFromPlaylist($id, $user_id, $limit, $fields, $enable_images, $enable_user_data, $image_type_limit, $enable_image_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstantMixApi->getInstantMixFromPlaylist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The item id. | |
| **user_id** | **string**| Optional. Filter by user id, and attach user data. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. | [optional] |
| **enable_images** | **bool**| Optional. Include image information in output. | [optional] |
| **enable_user_data** | **bool**| Optional. Include user data. | [optional] |
| **image_type_limit** | **int**| Optional. The max number of images to return, per image type. | [optional] |
| **enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](../Model/\OpenAPI\Client\Model\ImageType.md)| Optional. The image types to include in the output. | [optional] |

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

## `getInstantMixFromSong()`

```php
getInstantMixFromSong($id, $user_id, $limit, $fields, $enable_images, $enable_user_data, $image_type_limit, $enable_image_types): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Creates an instant playlist based on a given song.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InstantMixApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The item id.
$user_id = 'user_id_example'; // string | Optional. Filter by user id, and attach user data.
$limit = 56; // int | Optional. The maximum number of records to return.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output.
$enable_images = True; // bool | Optional. Include image information in output.
$enable_user_data = True; // bool | Optional. Include user data.
$image_type_limit = 56; // int | Optional. The max number of images to return, per image type.
$enable_image_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType()); // \OpenAPI\Client\Model\ImageType[] | Optional. The image types to include in the output.

try {
    $result = $apiInstance->getInstantMixFromSong($id, $user_id, $limit, $fields, $enable_images, $enable_user_data, $image_type_limit, $enable_image_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstantMixApi->getInstantMixFromSong: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The item id. | |
| **user_id** | **string**| Optional. Filter by user id, and attach user data. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. | [optional] |
| **enable_images** | **bool**| Optional. Include image information in output. | [optional] |
| **enable_user_data** | **bool**| Optional. Include user data. | [optional] |
| **image_type_limit** | **int**| Optional. The max number of images to return, per image type. | [optional] |
| **enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](../Model/\OpenAPI\Client\Model\ImageType.md)| Optional. The image types to include in the output. | [optional] |

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
