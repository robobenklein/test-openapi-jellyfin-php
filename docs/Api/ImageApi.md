# OpenAPI\Client\ImageApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCustomSplashscreen()**](ImageApi.md#deleteCustomSplashscreen) | **DELETE** /Branding/Splashscreen | Delete a custom splashscreen. |
| [**deleteItemImage()**](ImageApi.md#deleteItemImage) | **DELETE** /Items/{itemId}/Images/{imageType} | Delete an item&#39;s image. |
| [**deleteItemImageByIndex()**](ImageApi.md#deleteItemImageByIndex) | **DELETE** /Items/{itemId}/Images/{imageType}/{imageIndex} | Delete an item&#39;s image. |
| [**deleteUserImage()**](ImageApi.md#deleteUserImage) | **DELETE** /Users/{userId}/Images/{imageType} | Delete the user&#39;s image. |
| [**deleteUserImageByIndex()**](ImageApi.md#deleteUserImageByIndex) | **DELETE** /Users/{userId}/Images/{imageType}/{index} | Delete the user&#39;s image. |
| [**getArtistImage()**](ImageApi.md#getArtistImage) | **GET** /Artists/{name}/Images/{imageType}/{imageIndex} | Get artist image by name. |
| [**getGenreImage()**](ImageApi.md#getGenreImage) | **GET** /Genres/{name}/Images/{imageType} | Get genre image by name. |
| [**getGenreImageByIndex()**](ImageApi.md#getGenreImageByIndex) | **GET** /Genres/{name}/Images/{imageType}/{imageIndex} | Get genre image by name. |
| [**getItemImage()**](ImageApi.md#getItemImage) | **GET** /Items/{itemId}/Images/{imageType} | Gets the item&#39;s image. |
| [**getItemImage2()**](ImageApi.md#getItemImage2) | **GET** /Items/{itemId}/Images/{imageType}/{imageIndex}/{tag}/{format}/{maxWidth}/{maxHeight}/{percentPlayed}/{unplayedCount} | Gets the item&#39;s image. |
| [**getItemImageByIndex()**](ImageApi.md#getItemImageByIndex) | **GET** /Items/{itemId}/Images/{imageType}/{imageIndex} | Gets the item&#39;s image. |
| [**getItemImageInfos()**](ImageApi.md#getItemImageInfos) | **GET** /Items/{itemId}/Images | Get item image infos. |
| [**getMusicGenreImage()**](ImageApi.md#getMusicGenreImage) | **GET** /MusicGenres/{name}/Images/{imageType} | Get music genre image by name. |
| [**getMusicGenreImageByIndex()**](ImageApi.md#getMusicGenreImageByIndex) | **GET** /MusicGenres/{name}/Images/{imageType}/{imageIndex} | Get music genre image by name. |
| [**getPersonImage()**](ImageApi.md#getPersonImage) | **GET** /Persons/{name}/Images/{imageType} | Get person image by name. |
| [**getPersonImageByIndex()**](ImageApi.md#getPersonImageByIndex) | **GET** /Persons/{name}/Images/{imageType}/{imageIndex} | Get person image by name. |
| [**getSplashscreen()**](ImageApi.md#getSplashscreen) | **GET** /Branding/Splashscreen | Generates or gets the splashscreen. |
| [**getStudioImage()**](ImageApi.md#getStudioImage) | **GET** /Studios/{name}/Images/{imageType} | Get studio image by name. |
| [**getStudioImageByIndex()**](ImageApi.md#getStudioImageByIndex) | **GET** /Studios/{name}/Images/{imageType}/{imageIndex} | Get studio image by name. |
| [**getUserImage()**](ImageApi.md#getUserImage) | **GET** /Users/{userId}/Images/{imageType} | Get user profile image. |
| [**getUserImageByIndex()**](ImageApi.md#getUserImageByIndex) | **GET** /Users/{userId}/Images/{imageType}/{imageIndex} | Get user profile image. |
| [**headArtistImage()**](ImageApi.md#headArtistImage) | **HEAD** /Artists/{name}/Images/{imageType}/{imageIndex} | Get artist image by name. |
| [**headGenreImage()**](ImageApi.md#headGenreImage) | **HEAD** /Genres/{name}/Images/{imageType} | Get genre image by name. |
| [**headGenreImageByIndex()**](ImageApi.md#headGenreImageByIndex) | **HEAD** /Genres/{name}/Images/{imageType}/{imageIndex} | Get genre image by name. |
| [**headItemImage()**](ImageApi.md#headItemImage) | **HEAD** /Items/{itemId}/Images/{imageType} | Gets the item&#39;s image. |
| [**headItemImage2()**](ImageApi.md#headItemImage2) | **HEAD** /Items/{itemId}/Images/{imageType}/{imageIndex}/{tag}/{format}/{maxWidth}/{maxHeight}/{percentPlayed}/{unplayedCount} | Gets the item&#39;s image. |
| [**headItemImageByIndex()**](ImageApi.md#headItemImageByIndex) | **HEAD** /Items/{itemId}/Images/{imageType}/{imageIndex} | Gets the item&#39;s image. |
| [**headMusicGenreImage()**](ImageApi.md#headMusicGenreImage) | **HEAD** /MusicGenres/{name}/Images/{imageType} | Get music genre image by name. |
| [**headMusicGenreImageByIndex()**](ImageApi.md#headMusicGenreImageByIndex) | **HEAD** /MusicGenres/{name}/Images/{imageType}/{imageIndex} | Get music genre image by name. |
| [**headPersonImage()**](ImageApi.md#headPersonImage) | **HEAD** /Persons/{name}/Images/{imageType} | Get person image by name. |
| [**headPersonImageByIndex()**](ImageApi.md#headPersonImageByIndex) | **HEAD** /Persons/{name}/Images/{imageType}/{imageIndex} | Get person image by name. |
| [**headStudioImage()**](ImageApi.md#headStudioImage) | **HEAD** /Studios/{name}/Images/{imageType} | Get studio image by name. |
| [**headStudioImageByIndex()**](ImageApi.md#headStudioImageByIndex) | **HEAD** /Studios/{name}/Images/{imageType}/{imageIndex} | Get studio image by name. |
| [**headUserImage()**](ImageApi.md#headUserImage) | **HEAD** /Users/{userId}/Images/{imageType} | Get user profile image. |
| [**headUserImageByIndex()**](ImageApi.md#headUserImageByIndex) | **HEAD** /Users/{userId}/Images/{imageType}/{imageIndex} | Get user profile image. |
| [**postUserImage()**](ImageApi.md#postUserImage) | **POST** /Users/{userId}/Images/{imageType} | Sets the user image. |
| [**postUserImageByIndex()**](ImageApi.md#postUserImageByIndex) | **POST** /Users/{userId}/Images/{imageType}/{index} | Sets the user image. |
| [**setItemImage()**](ImageApi.md#setItemImage) | **POST** /Items/{itemId}/Images/{imageType} | Set item image. |
| [**setItemImageByIndex()**](ImageApi.md#setItemImageByIndex) | **POST** /Items/{itemId}/Images/{imageType}/{imageIndex} | Set item image. |
| [**updateItemImageIndex()**](ImageApi.md#updateItemImageIndex) | **POST** /Items/{itemId}/Images/{imageType}/{imageIndex}/Index | Updates the index for an item image. |
| [**uploadCustomSplashscreen()**](ImageApi.md#uploadCustomSplashscreen) | **POST** /Branding/Splashscreen | Uploads a custom splashscreen.  The body is expected to the image contents base64 encoded. |


## `deleteCustomSplashscreen()`

```php
deleteCustomSplashscreen()
```

Delete a custom splashscreen.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteCustomSplashscreen();
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->deleteCustomSplashscreen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `deleteItemImage()`

```php
deleteItemImage($item_id, $image_type, $image_index)
```

Delete an item's image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | Item id.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$image_index = 56; // int | The image index.

try {
    $apiInstance->deleteItemImage($item_id, $image_type, $image_index);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->deleteItemImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| Item id. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **image_index** | **int**| The image index. | [optional] |

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

## `deleteItemImageByIndex()`

```php
deleteItemImageByIndex($item_id, $image_type, $image_index)
```

Delete an item's image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | Item id.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$image_index = 56; // int | The image index.

try {
    $apiInstance->deleteItemImageByIndex($item_id, $image_type, $image_index);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->deleteItemImageByIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| Item id. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **image_index** | **int**| The image index. | |

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

## `deleteUserImage()`

```php
deleteUserImage($user_id, $image_type, $index)
```

Delete the user's image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User Id.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | (Unused) Image type.
$index = 56; // int | (Unused) Image index.

try {
    $apiInstance->deleteUserImage($user_id, $image_type, $index);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->deleteUserImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User Id. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| (Unused) Image type. | |
| **index** | **int**| (Unused) Image index. | [optional] |

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

## `deleteUserImageByIndex()`

```php
deleteUserImageByIndex($user_id, $image_type, $index)
```

Delete the user's image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User Id.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | (Unused) Image type.
$index = 56; // int | (Unused) Image index.

try {
    $apiInstance->deleteUserImageByIndex($user_id, $image_type, $index);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->deleteUserImageByIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User Id. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| (Unused) Image type. | |
| **index** | **int**| (Unused) Image index. | |

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

## `getArtistImage()`

```php
getArtistImage($name, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer): \SplFileObject
```

Get artist image by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Artist name.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$image_index = 56; // int | Image index.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.

try {
    $result = $apiInstance->getArtistImage($name, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->getArtistImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Artist name. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **image_index** | **int**| Image index. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGenreImage()`

```php
getGenreImage($name, $image_type, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer, $image_index): \SplFileObject
```

Get genre image by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Genre name.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.
$image_index = 56; // int | Image index.

try {
    $result = $apiInstance->getGenreImage($name, $image_type, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer, $image_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->getGenreImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Genre name. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |
| **image_index** | **int**| Image index. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGenreImageByIndex()`

```php
getGenreImageByIndex($name, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer): \SplFileObject
```

Get genre image by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Genre name.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$image_index = 56; // int | Image index.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.

try {
    $result = $apiInstance->getGenreImageByIndex($name, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->getGenreImageByIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Genre name. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **image_index** | **int**| Image index. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemImage()`

```php
getItemImage($item_id, $image_type, $max_width, $max_height, $width, $height, $quality, $fill_width, $fill_height, $tag, $crop_whitespace, $format, $add_played_indicator, $percent_played, $unplayed_count, $blur, $background_color, $foreground_layer, $image_index): \SplFileObject
```

Gets the item's image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string | Item id.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Optional. The MediaBrowser.Model.Drawing.ImageFormat of the returned image.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.
$image_index = 56; // int | Image index.

try {
    $result = $apiInstance->getItemImage($item_id, $image_type, $max_width, $max_height, $width, $height, $quality, $fill_width, $fill_height, $tag, $crop_whitespace, $format, $add_played_indicator, $percent_played, $unplayed_count, $blur, $background_color, $foreground_layer, $image_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->getItemImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| Item id. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Optional. The MediaBrowser.Model.Drawing.ImageFormat of the returned image. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |
| **image_index** | **int**| Image index. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemImage2()`

```php
getItemImage2($item_id, $image_type, $max_width, $max_height, $tag, $format, $percent_played, $unplayed_count, $image_index, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer): \SplFileObject
```

Gets the item's image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string | Item id.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$image_index = 56; // int | Image index.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.

try {
    $result = $apiInstance->getItemImage2($item_id, $image_type, $max_width, $max_height, $tag, $format, $percent_played, $unplayed_count, $image_index, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->getItemImage2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| Item id. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **max_width** | **int**| The maximum image width to return. | |
| **max_height** | **int**| The maximum image height to return. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | |
| **image_index** | **int**| Image index. | |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemImageByIndex()`

```php
getItemImageByIndex($item_id, $image_type, $image_index, $max_width, $max_height, $width, $height, $quality, $fill_width, $fill_height, $tag, $crop_whitespace, $format, $add_played_indicator, $percent_played, $unplayed_count, $blur, $background_color, $foreground_layer): \SplFileObject
```

Gets the item's image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string | Item id.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$image_index = 56; // int | Image index.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Optional. The MediaBrowser.Model.Drawing.ImageFormat of the returned image.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.

try {
    $result = $apiInstance->getItemImageByIndex($item_id, $image_type, $image_index, $max_width, $max_height, $width, $height, $quality, $fill_width, $fill_height, $tag, $crop_whitespace, $format, $add_played_indicator, $percent_played, $unplayed_count, $blur, $background_color, $foreground_layer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->getItemImageByIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| Item id. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **image_index** | **int**| Image index. | |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Optional. The MediaBrowser.Model.Drawing.ImageFormat of the returned image. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemImageInfos()`

```php
getItemImageInfos($item_id): \OpenAPI\Client\Model\ImageInfo[]
```

Get item image infos.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | Item id.

try {
    $result = $apiInstance->getItemImageInfos($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->getItemImageInfos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| Item id. | |

### Return type

[**\OpenAPI\Client\Model\ImageInfo[]**](../Model/ImageInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMusicGenreImage()`

```php
getMusicGenreImage($name, $image_type, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer, $image_index): \SplFileObject
```

Get music genre image by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Music genre name.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.
$image_index = 56; // int | Image index.

try {
    $result = $apiInstance->getMusicGenreImage($name, $image_type, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer, $image_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->getMusicGenreImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Music genre name. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |
| **image_index** | **int**| Image index. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMusicGenreImageByIndex()`

```php
getMusicGenreImageByIndex($name, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer): \SplFileObject
```

Get music genre image by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Music genre name.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$image_index = 56; // int | Image index.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.

try {
    $result = $apiInstance->getMusicGenreImageByIndex($name, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->getMusicGenreImageByIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Music genre name. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **image_index** | **int**| Image index. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonImage()`

```php
getPersonImage($name, $image_type, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer, $image_index): \SplFileObject
```

Get person image by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Person name.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.
$image_index = 56; // int | Image index.

try {
    $result = $apiInstance->getPersonImage($name, $image_type, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer, $image_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->getPersonImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Person name. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |
| **image_index** | **int**| Image index. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPersonImageByIndex()`

```php
getPersonImageByIndex($name, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer): \SplFileObject
```

Get person image by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Person name.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$image_index = 56; // int | Image index.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.

try {
    $result = $apiInstance->getPersonImageByIndex($name, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->getPersonImageByIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Person name. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **image_index** | **int**| Image index. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSplashscreen()`

```php
getSplashscreen($tag, $format, $max_width, $max_height, $width, $height, $fill_width, $fill_height, $blur, $background_color, $foreground_layer, $quality): \SplFileObject
```

Generates or gets the splashscreen.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag = 'tag_example'; // string | Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$blur = 56; // int | Blur image.
$background_color = 'background_color_example'; // string | Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Apply a foreground layer on top of the image.
$quality = 90; // int | Quality setting, from 0-100.

try {
    $result = $apiInstance->getSplashscreen($tag, $format, $max_width, $max_height, $width, $height, $fill_width, $fill_height, $blur, $background_color, $foreground_layer, $quality);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->getSplashscreen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tag** | **string**| Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **blur** | **int**| Blur image. | [optional] |
| **background_color** | **string**| Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Apply a foreground layer on top of the image. | [optional] |
| **quality** | **int**| Quality setting, from 0-100. | [optional] [default to 90] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudioImage()`

```php
getStudioImage($name, $image_type, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer, $image_index): \SplFileObject
```

Get studio image by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Studio name.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.
$image_index = 56; // int | Image index.

try {
    $result = $apiInstance->getStudioImage($name, $image_type, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer, $image_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->getStudioImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Studio name. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |
| **image_index** | **int**| Image index. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStudioImageByIndex()`

```php
getStudioImageByIndex($name, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer): \SplFileObject
```

Get studio image by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Studio name.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$image_index = 56; // int | Image index.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.

try {
    $result = $apiInstance->getStudioImageByIndex($name, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->getStudioImageByIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Studio name. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **image_index** | **int**| Image index. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserImage()`

```php
getUserImage($user_id, $image_type, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer, $image_index): \SplFileObject
```

Get user profile image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string | User id.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.
$image_index = 56; // int | Image index.

try {
    $result = $apiInstance->getUserImage($user_id, $image_type, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer, $image_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->getUserImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User id. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |
| **image_index** | **int**| Image index. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserImageByIndex()`

```php
getUserImageByIndex($user_id, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer): \SplFileObject
```

Get user profile image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string | User id.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$image_index = 56; // int | Image index.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.

try {
    $result = $apiInstance->getUserImageByIndex($user_id, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->getUserImageByIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User id. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **image_index** | **int**| Image index. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `headArtistImage()`

```php
headArtistImage($name, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer): \SplFileObject
```

Get artist image by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Artist name.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$image_index = 56; // int | Image index.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.

try {
    $result = $apiInstance->headArtistImage($name, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->headArtistImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Artist name. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **image_index** | **int**| Image index. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `headGenreImage()`

```php
headGenreImage($name, $image_type, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer, $image_index): \SplFileObject
```

Get genre image by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Genre name.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.
$image_index = 56; // int | Image index.

try {
    $result = $apiInstance->headGenreImage($name, $image_type, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer, $image_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->headGenreImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Genre name. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |
| **image_index** | **int**| Image index. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `headGenreImageByIndex()`

```php
headGenreImageByIndex($name, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer): \SplFileObject
```

Get genre image by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Genre name.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$image_index = 56; // int | Image index.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.

try {
    $result = $apiInstance->headGenreImageByIndex($name, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->headGenreImageByIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Genre name. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **image_index** | **int**| Image index. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `headItemImage()`

```php
headItemImage($item_id, $image_type, $max_width, $max_height, $width, $height, $quality, $fill_width, $fill_height, $tag, $crop_whitespace, $format, $add_played_indicator, $percent_played, $unplayed_count, $blur, $background_color, $foreground_layer, $image_index): \SplFileObject
```

Gets the item's image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string | Item id.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Optional. The MediaBrowser.Model.Drawing.ImageFormat of the returned image.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.
$image_index = 56; // int | Image index.

try {
    $result = $apiInstance->headItemImage($item_id, $image_type, $max_width, $max_height, $width, $height, $quality, $fill_width, $fill_height, $tag, $crop_whitespace, $format, $add_played_indicator, $percent_played, $unplayed_count, $blur, $background_color, $foreground_layer, $image_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->headItemImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| Item id. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Optional. The MediaBrowser.Model.Drawing.ImageFormat of the returned image. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |
| **image_index** | **int**| Image index. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `headItemImage2()`

```php
headItemImage2($item_id, $image_type, $max_width, $max_height, $tag, $format, $percent_played, $unplayed_count, $image_index, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer): \SplFileObject
```

Gets the item's image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string | Item id.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$image_index = 56; // int | Image index.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.

try {
    $result = $apiInstance->headItemImage2($item_id, $image_type, $max_width, $max_height, $tag, $format, $percent_played, $unplayed_count, $image_index, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->headItemImage2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| Item id. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **max_width** | **int**| The maximum image width to return. | |
| **max_height** | **int**| The maximum image height to return. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | |
| **image_index** | **int**| Image index. | |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `headItemImageByIndex()`

```php
headItemImageByIndex($item_id, $image_type, $image_index, $max_width, $max_height, $width, $height, $quality, $fill_width, $fill_height, $tag, $crop_whitespace, $format, $add_played_indicator, $percent_played, $unplayed_count, $blur, $background_color, $foreground_layer): \SplFileObject
```

Gets the item's image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string | Item id.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$image_index = 56; // int | Image index.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Optional. The MediaBrowser.Model.Drawing.ImageFormat of the returned image.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.

try {
    $result = $apiInstance->headItemImageByIndex($item_id, $image_type, $image_index, $max_width, $max_height, $width, $height, $quality, $fill_width, $fill_height, $tag, $crop_whitespace, $format, $add_played_indicator, $percent_played, $unplayed_count, $blur, $background_color, $foreground_layer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->headItemImageByIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| Item id. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **image_index** | **int**| Image index. | |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Optional. The MediaBrowser.Model.Drawing.ImageFormat of the returned image. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `headMusicGenreImage()`

```php
headMusicGenreImage($name, $image_type, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer, $image_index): \SplFileObject
```

Get music genre image by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Music genre name.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.
$image_index = 56; // int | Image index.

try {
    $result = $apiInstance->headMusicGenreImage($name, $image_type, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer, $image_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->headMusicGenreImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Music genre name. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |
| **image_index** | **int**| Image index. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `headMusicGenreImageByIndex()`

```php
headMusicGenreImageByIndex($name, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer): \SplFileObject
```

Get music genre image by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Music genre name.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$image_index = 56; // int | Image index.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.

try {
    $result = $apiInstance->headMusicGenreImageByIndex($name, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->headMusicGenreImageByIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Music genre name. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **image_index** | **int**| Image index. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `headPersonImage()`

```php
headPersonImage($name, $image_type, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer, $image_index): \SplFileObject
```

Get person image by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Person name.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.
$image_index = 56; // int | Image index.

try {
    $result = $apiInstance->headPersonImage($name, $image_type, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer, $image_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->headPersonImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Person name. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |
| **image_index** | **int**| Image index. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `headPersonImageByIndex()`

```php
headPersonImageByIndex($name, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer): \SplFileObject
```

Get person image by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Person name.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$image_index = 56; // int | Image index.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.

try {
    $result = $apiInstance->headPersonImageByIndex($name, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->headPersonImageByIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Person name. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **image_index** | **int**| Image index. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `headStudioImage()`

```php
headStudioImage($name, $image_type, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer, $image_index): \SplFileObject
```

Get studio image by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Studio name.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.
$image_index = 56; // int | Image index.

try {
    $result = $apiInstance->headStudioImage($name, $image_type, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer, $image_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->headStudioImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Studio name. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |
| **image_index** | **int**| Image index. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `headStudioImageByIndex()`

```php
headStudioImageByIndex($name, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer): \SplFileObject
```

Get studio image by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Studio name.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$image_index = 56; // int | Image index.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.

try {
    $result = $apiInstance->headStudioImageByIndex($name, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->headStudioImageByIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Studio name. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **image_index** | **int**| Image index. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `headUserImage()`

```php
headUserImage($user_id, $image_type, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer, $image_index): \SplFileObject
```

Get user profile image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string | User id.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.
$image_index = 56; // int | Image index.

try {
    $result = $apiInstance->headUserImage($user_id, $image_type, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer, $image_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->headUserImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User id. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |
| **image_index** | **int**| Image index. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `headUserImageByIndex()`

```php
headUserImageByIndex($user_id, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer): \SplFileObject
```

Get user profile image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = 'user_id_example'; // string | User id.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$image_index = 56; // int | Image index.
$tag = 'tag_example'; // string | Optional. Supply the cache tag from the item object to receive strong caching headers.
$format = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageFormat(); // \OpenAPI\Client\Model\ImageFormat | Determines the output format of the image - original,gif,jpg,png.
$max_width = 56; // int | The maximum image width to return.
$max_height = 56; // int | The maximum image height to return.
$percent_played = 3.4; // float | Optional. Percent to render for the percent played overlay.
$unplayed_count = 56; // int | Optional. Unplayed count overlay to render.
$width = 56; // int | The fixed image width to return.
$height = 56; // int | The fixed image height to return.
$quality = 56; // int | Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases.
$fill_width = 56; // int | Width of box to fill.
$fill_height = 56; // int | Height of box to fill.
$crop_whitespace = True; // bool | Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art.
$add_played_indicator = True; // bool | Optional. Add a played indicator.
$blur = 56; // int | Optional. Blur image.
$background_color = 'background_color_example'; // string | Optional. Apply a background color for transparent images.
$foreground_layer = 'foreground_layer_example'; // string | Optional. Apply a foreground layer on top of the image.

try {
    $result = $apiInstance->headUserImageByIndex($user_id, $image_type, $image_index, $tag, $format, $max_width, $max_height, $percent_played, $unplayed_count, $width, $height, $quality, $fill_width, $fill_height, $crop_whitespace, $add_played_indicator, $blur, $background_color, $foreground_layer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->headUserImageByIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User id. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **image_index** | **int**| Image index. | |
| **tag** | **string**| Optional. Supply the cache tag from the item object to receive strong caching headers. | [optional] |
| **format** | [**\OpenAPI\Client\Model\ImageFormat**](../Model/.md)| Determines the output format of the image - original,gif,jpg,png. | [optional] |
| **max_width** | **int**| The maximum image width to return. | [optional] |
| **max_height** | **int**| The maximum image height to return. | [optional] |
| **percent_played** | **float**| Optional. Percent to render for the percent played overlay. | [optional] |
| **unplayed_count** | **int**| Optional. Unplayed count overlay to render. | [optional] |
| **width** | **int**| The fixed image width to return. | [optional] |
| **height** | **int**| The fixed image height to return. | [optional] |
| **quality** | **int**| Optional. Quality setting, from 0-100. Defaults to 90 and should suffice in most cases. | [optional] |
| **fill_width** | **int**| Width of box to fill. | [optional] |
| **fill_height** | **int**| Height of box to fill. | [optional] |
| **crop_whitespace** | **bool**| Optional. Specify if whitespace should be cropped out of the image. True/False. If unspecified, whitespace will be cropped from logos and clear art. | [optional] |
| **add_played_indicator** | **bool**| Optional. Add a played indicator. | [optional] |
| **blur** | **int**| Optional. Blur image. | [optional] |
| **background_color** | **string**| Optional. Apply a background color for transparent images. | [optional] |
| **foreground_layer** | **string**| Optional. Apply a foreground layer on top of the image. | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUserImage()`

```php
postUserImage($user_id, $image_type, $index, $body)
```

Sets the user image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User Id.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | (Unused) Image type.
$index = 56; // int | (Unused) Image index.
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->postUserImage($user_id, $image_type, $index, $body);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->postUserImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User Id. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| (Unused) Image type. | |
| **index** | **int**| (Unused) Image index. | [optional] |
| **body** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `image/*`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUserImageByIndex()`

```php
postUserImageByIndex($user_id, $image_type, $index, $body)
```

Sets the user image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | User Id.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | (Unused) Image type.
$index = 56; // int | (Unused) Image index.
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->postUserImageByIndex($user_id, $image_type, $index, $body);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->postUserImageByIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| User Id. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| (Unused) Image type. | |
| **index** | **int**| (Unused) Image index. | |
| **body** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `image/*`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setItemImage()`

```php
setItemImage($item_id, $image_type, $body)
```

Set item image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | Item id.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->setItemImage($item_id, $image_type, $body);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->setItemImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| Item id. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **body** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `image/*`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setItemImageByIndex()`

```php
setItemImageByIndex($item_id, $image_type, $image_index, $body)
```

Set item image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | Item id.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$image_index = 56; // int | (Unused) Image index.
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->setItemImageByIndex($item_id, $image_type, $image_index, $body);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->setItemImageByIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| Item id. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **image_index** | **int**| (Unused) Image index. | |
| **body** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `image/*`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateItemImageIndex()`

```php
updateItemImageIndex($item_id, $image_type, $image_index, $new_index)
```

Updates the index for an item image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | Item id.
$image_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType(); // \OpenAPI\Client\Model\ImageType | Image type.
$image_index = 56; // int | Old image index.
$new_index = 56; // int | New image index.

try {
    $apiInstance->updateItemImageIndex($item_id, $image_type, $image_index, $new_index);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->updateItemImageIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| Item id. | |
| **image_type** | [**\OpenAPI\Client\Model\ImageType**](../Model/.md)| Image type. | |
| **image_index** | **int**| Old image index. | |
| **new_index** | **int**| New image index. | |

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

## `uploadCustomSplashscreen()`

```php
uploadCustomSplashscreen($body)
```

Uploads a custom splashscreen.  The body is expected to the image contents base64 encoded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ImageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->uploadCustomSplashscreen($body);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->uploadCustomSplashscreen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `image/*`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
