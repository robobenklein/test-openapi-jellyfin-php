# OpenAPI\Client\LibraryApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteItem()**](LibraryApi.md#deleteItem) | **DELETE** /Items/{itemId} | Deletes an item from the library and filesystem. |
| [**deleteItems()**](LibraryApi.md#deleteItems) | **DELETE** /Items | Deletes items from the library and filesystem. |
| [**getAncestors()**](LibraryApi.md#getAncestors) | **GET** /Items/{itemId}/Ancestors | Gets all parents of an item. |
| [**getCriticReviews()**](LibraryApi.md#getCriticReviews) | **GET** /Items/{itemId}/CriticReviews | Gets critic review for an item. |
| [**getDownload()**](LibraryApi.md#getDownload) | **GET** /Items/{itemId}/Download | Downloads item media. |
| [**getFile()**](LibraryApi.md#getFile) | **GET** /Items/{itemId}/File | Get the original file of an item. |
| [**getItemCounts()**](LibraryApi.md#getItemCounts) | **GET** /Items/Counts | Get item counts. |
| [**getLibraryOptionsInfo()**](LibraryApi.md#getLibraryOptionsInfo) | **GET** /Libraries/AvailableOptions | Gets the library options info. |
| [**getMediaFolders()**](LibraryApi.md#getMediaFolders) | **GET** /Library/MediaFolders | Gets all user media folders. |
| [**getPhysicalPaths()**](LibraryApi.md#getPhysicalPaths) | **GET** /Library/PhysicalPaths | Gets a list of physical paths from virtual folders. |
| [**getSimilarAlbums()**](LibraryApi.md#getSimilarAlbums) | **GET** /Albums/{itemId}/Similar | Gets similar items. |
| [**getSimilarArtists()**](LibraryApi.md#getSimilarArtists) | **GET** /Artists/{itemId}/Similar | Gets similar items. |
| [**getSimilarItems()**](LibraryApi.md#getSimilarItems) | **GET** /Items/{itemId}/Similar | Gets similar items. |
| [**getSimilarMovies()**](LibraryApi.md#getSimilarMovies) | **GET** /Movies/{itemId}/Similar | Gets similar items. |
| [**getSimilarShows()**](LibraryApi.md#getSimilarShows) | **GET** /Shows/{itemId}/Similar | Gets similar items. |
| [**getSimilarTrailers()**](LibraryApi.md#getSimilarTrailers) | **GET** /Trailers/{itemId}/Similar | Gets similar items. |
| [**getThemeMedia()**](LibraryApi.md#getThemeMedia) | **GET** /Items/{itemId}/ThemeMedia | Get theme songs and videos for an item. |
| [**getThemeSongs()**](LibraryApi.md#getThemeSongs) | **GET** /Items/{itemId}/ThemeSongs | Get theme songs for an item. |
| [**getThemeVideos()**](LibraryApi.md#getThemeVideos) | **GET** /Items/{itemId}/ThemeVideos | Get theme videos for an item. |
| [**postAddedMovies()**](LibraryApi.md#postAddedMovies) | **POST** /Library/Movies/Added | Reports that new movies have been added by an external source. |
| [**postAddedSeries()**](LibraryApi.md#postAddedSeries) | **POST** /Library/Series/Added | Reports that new episodes of a series have been added by an external source. |
| [**postUpdatedMedia()**](LibraryApi.md#postUpdatedMedia) | **POST** /Library/Media/Updated | Reports that new movies have been added by an external source. |
| [**postUpdatedMovies()**](LibraryApi.md#postUpdatedMovies) | **POST** /Library/Movies/Updated | Reports that new movies have been added by an external source. |
| [**postUpdatedSeries()**](LibraryApi.md#postUpdatedSeries) | **POST** /Library/Series/Updated | Reports that new episodes of a series have been added by an external source. |
| [**refreshLibrary()**](LibraryApi.md#refreshLibrary) | **POST** /Library/Refresh | Starts a library scan. |


## `deleteItem()`

```php
deleteItem($item_id)
```

Deletes an item from the library and filesystem.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item id.

try {
    $apiInstance->deleteItem($item_id);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->deleteItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |

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

## `deleteItems()`

```php
deleteItems($ids)
```

Deletes items from the library and filesystem.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ids = array('ids_example'); // string[] | The item ids.

try {
    $apiInstance->deleteItems($ids);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->deleteItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**string[]**](../Model/string.md)| The item ids. | [optional] |

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

## `getAncestors()`

```php
getAncestors($item_id, $user_id): \OpenAPI\Client\Model\BaseItemDto[]
```

Gets all parents of an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item id.
$user_id = 'user_id_example'; // string | Optional. Filter by user id, and attach user data.

try {
    $result = $apiInstance->getAncestors($item_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->getAncestors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **user_id** | **string**| Optional. Filter by user id, and attach user data. | [optional] |

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

## `getCriticReviews()`

```php
getCriticReviews($item_id): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets critic review for an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string

try {
    $result = $apiInstance->getCriticReviews($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->getCriticReviews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**|  | |

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

## `getDownload()`

```php
getDownload($item_id): \SplFileObject
```

Downloads item media.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item id.

try {
    $result = $apiInstance->getDownload($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->getDownload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `video/*`, `audio/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFile()`

```php
getFile($item_id): \SplFileObject
```

Get the original file of an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item id.

try {
    $result = $apiInstance->getFile($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->getFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `video/*`, `audio/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemCounts()`

```php
getItemCounts($user_id, $is_favorite): \OpenAPI\Client\Model\ItemCounts
```

Get item counts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | Optional. Get counts from a specific user's library.
$is_favorite = True; // bool | Optional. Get counts of favorite items.

try {
    $result = $apiInstance->getItemCounts($user_id, $is_favorite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->getItemCounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| Optional. Get counts from a specific user&#39;s library. | [optional] |
| **is_favorite** | **bool**| Optional. Get counts of favorite items. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ItemCounts**](../Model/ItemCounts.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLibraryOptionsInfo()`

```php
getLibraryOptionsInfo($library_content_type, $is_new_library): \OpenAPI\Client\Model\LibraryOptionsResultDto
```

Gets the library options info.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$library_content_type = 'library_content_type_example'; // string | Library content type.
$is_new_library = false; // bool | Whether this is a new library.

try {
    $result = $apiInstance->getLibraryOptionsInfo($library_content_type, $is_new_library);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->getLibraryOptionsInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **library_content_type** | **string**| Library content type. | [optional] |
| **is_new_library** | **bool**| Whether this is a new library. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\LibraryOptionsResultDto**](../Model/LibraryOptionsResultDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMediaFolders()`

```php
getMediaFolders($is_hidden): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets all user media folders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$is_hidden = True; // bool | Optional. Filter by folders that are marked hidden, or not.

try {
    $result = $apiInstance->getMediaFolders($is_hidden);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->getMediaFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **is_hidden** | **bool**| Optional. Filter by folders that are marked hidden, or not. | [optional] |

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

## `getPhysicalPaths()`

```php
getPhysicalPaths(): string[]
```

Gets a list of physical paths from virtual folders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPhysicalPaths();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->getPhysicalPaths: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSimilarAlbums()`

```php
getSimilarAlbums($item_id, $exclude_artist_ids, $user_id, $limit, $fields): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets similar items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item id.
$exclude_artist_ids = array('exclude_artist_ids_example'); // string[] | Exclude artist ids.
$user_id = 'user_id_example'; // string | Optional. Filter by user id, and attach user data.
$limit = 56; // int | Optional. The maximum number of records to return.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output. This allows multiple, comma delimited. Options: Budget, Chapters, DateCreated, Genres, HomePageUrl, IndexOptions, MediaStreams, Overview, ParentId, Path, People, ProviderIds, PrimaryImageAspectRatio, Revenue, SortName, Studios, Taglines, TrailerUrls.

try {
    $result = $apiInstance->getSimilarAlbums($item_id, $exclude_artist_ids, $user_id, $limit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->getSimilarAlbums: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **exclude_artist_ids** | [**string[]**](../Model/string.md)| Exclude artist ids. | [optional] |
| **user_id** | **string**| Optional. Filter by user id, and attach user data. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. This allows multiple, comma delimited. Options: Budget, Chapters, DateCreated, Genres, HomePageUrl, IndexOptions, MediaStreams, Overview, ParentId, Path, People, ProviderIds, PrimaryImageAspectRatio, Revenue, SortName, Studios, Taglines, TrailerUrls. | [optional] |

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

## `getSimilarArtists()`

```php
getSimilarArtists($item_id, $exclude_artist_ids, $user_id, $limit, $fields): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets similar items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item id.
$exclude_artist_ids = array('exclude_artist_ids_example'); // string[] | Exclude artist ids.
$user_id = 'user_id_example'; // string | Optional. Filter by user id, and attach user data.
$limit = 56; // int | Optional. The maximum number of records to return.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output. This allows multiple, comma delimited. Options: Budget, Chapters, DateCreated, Genres, HomePageUrl, IndexOptions, MediaStreams, Overview, ParentId, Path, People, ProviderIds, PrimaryImageAspectRatio, Revenue, SortName, Studios, Taglines, TrailerUrls.

try {
    $result = $apiInstance->getSimilarArtists($item_id, $exclude_artist_ids, $user_id, $limit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->getSimilarArtists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **exclude_artist_ids** | [**string[]**](../Model/string.md)| Exclude artist ids. | [optional] |
| **user_id** | **string**| Optional. Filter by user id, and attach user data. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. This allows multiple, comma delimited. Options: Budget, Chapters, DateCreated, Genres, HomePageUrl, IndexOptions, MediaStreams, Overview, ParentId, Path, People, ProviderIds, PrimaryImageAspectRatio, Revenue, SortName, Studios, Taglines, TrailerUrls. | [optional] |

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

## `getSimilarItems()`

```php
getSimilarItems($item_id, $exclude_artist_ids, $user_id, $limit, $fields): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets similar items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item id.
$exclude_artist_ids = array('exclude_artist_ids_example'); // string[] | Exclude artist ids.
$user_id = 'user_id_example'; // string | Optional. Filter by user id, and attach user data.
$limit = 56; // int | Optional. The maximum number of records to return.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output. This allows multiple, comma delimited. Options: Budget, Chapters, DateCreated, Genres, HomePageUrl, IndexOptions, MediaStreams, Overview, ParentId, Path, People, ProviderIds, PrimaryImageAspectRatio, Revenue, SortName, Studios, Taglines, TrailerUrls.

try {
    $result = $apiInstance->getSimilarItems($item_id, $exclude_artist_ids, $user_id, $limit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->getSimilarItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **exclude_artist_ids** | [**string[]**](../Model/string.md)| Exclude artist ids. | [optional] |
| **user_id** | **string**| Optional. Filter by user id, and attach user data. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. This allows multiple, comma delimited. Options: Budget, Chapters, DateCreated, Genres, HomePageUrl, IndexOptions, MediaStreams, Overview, ParentId, Path, People, ProviderIds, PrimaryImageAspectRatio, Revenue, SortName, Studios, Taglines, TrailerUrls. | [optional] |

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

## `getSimilarMovies()`

```php
getSimilarMovies($item_id, $exclude_artist_ids, $user_id, $limit, $fields): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets similar items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item id.
$exclude_artist_ids = array('exclude_artist_ids_example'); // string[] | Exclude artist ids.
$user_id = 'user_id_example'; // string | Optional. Filter by user id, and attach user data.
$limit = 56; // int | Optional. The maximum number of records to return.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output. This allows multiple, comma delimited. Options: Budget, Chapters, DateCreated, Genres, HomePageUrl, IndexOptions, MediaStreams, Overview, ParentId, Path, People, ProviderIds, PrimaryImageAspectRatio, Revenue, SortName, Studios, Taglines, TrailerUrls.

try {
    $result = $apiInstance->getSimilarMovies($item_id, $exclude_artist_ids, $user_id, $limit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->getSimilarMovies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **exclude_artist_ids** | [**string[]**](../Model/string.md)| Exclude artist ids. | [optional] |
| **user_id** | **string**| Optional. Filter by user id, and attach user data. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. This allows multiple, comma delimited. Options: Budget, Chapters, DateCreated, Genres, HomePageUrl, IndexOptions, MediaStreams, Overview, ParentId, Path, People, ProviderIds, PrimaryImageAspectRatio, Revenue, SortName, Studios, Taglines, TrailerUrls. | [optional] |

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

## `getSimilarShows()`

```php
getSimilarShows($item_id, $exclude_artist_ids, $user_id, $limit, $fields): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets similar items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item id.
$exclude_artist_ids = array('exclude_artist_ids_example'); // string[] | Exclude artist ids.
$user_id = 'user_id_example'; // string | Optional. Filter by user id, and attach user data.
$limit = 56; // int | Optional. The maximum number of records to return.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output. This allows multiple, comma delimited. Options: Budget, Chapters, DateCreated, Genres, HomePageUrl, IndexOptions, MediaStreams, Overview, ParentId, Path, People, ProviderIds, PrimaryImageAspectRatio, Revenue, SortName, Studios, Taglines, TrailerUrls.

try {
    $result = $apiInstance->getSimilarShows($item_id, $exclude_artist_ids, $user_id, $limit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->getSimilarShows: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **exclude_artist_ids** | [**string[]**](../Model/string.md)| Exclude artist ids. | [optional] |
| **user_id** | **string**| Optional. Filter by user id, and attach user data. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. This allows multiple, comma delimited. Options: Budget, Chapters, DateCreated, Genres, HomePageUrl, IndexOptions, MediaStreams, Overview, ParentId, Path, People, ProviderIds, PrimaryImageAspectRatio, Revenue, SortName, Studios, Taglines, TrailerUrls. | [optional] |

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

## `getSimilarTrailers()`

```php
getSimilarTrailers($item_id, $exclude_artist_ids, $user_id, $limit, $fields): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets similar items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item id.
$exclude_artist_ids = array('exclude_artist_ids_example'); // string[] | Exclude artist ids.
$user_id = 'user_id_example'; // string | Optional. Filter by user id, and attach user data.
$limit = 56; // int | Optional. The maximum number of records to return.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output. This allows multiple, comma delimited. Options: Budget, Chapters, DateCreated, Genres, HomePageUrl, IndexOptions, MediaStreams, Overview, ParentId, Path, People, ProviderIds, PrimaryImageAspectRatio, Revenue, SortName, Studios, Taglines, TrailerUrls.

try {
    $result = $apiInstance->getSimilarTrailers($item_id, $exclude_artist_ids, $user_id, $limit, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->getSimilarTrailers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **exclude_artist_ids** | [**string[]**](../Model/string.md)| Exclude artist ids. | [optional] |
| **user_id** | **string**| Optional. Filter by user id, and attach user data. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. This allows multiple, comma delimited. Options: Budget, Chapters, DateCreated, Genres, HomePageUrl, IndexOptions, MediaStreams, Overview, ParentId, Path, People, ProviderIds, PrimaryImageAspectRatio, Revenue, SortName, Studios, Taglines, TrailerUrls. | [optional] |

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

## `getThemeMedia()`

```php
getThemeMedia($item_id, $user_id, $inherit_from_parent): \OpenAPI\Client\Model\AllThemeMediaResult
```

Get theme songs and videos for an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item id.
$user_id = 'user_id_example'; // string | Optional. Filter by user id, and attach user data.
$inherit_from_parent = false; // bool | Optional. Determines whether or not parent items should be searched for theme media.

try {
    $result = $apiInstance->getThemeMedia($item_id, $user_id, $inherit_from_parent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->getThemeMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **user_id** | **string**| Optional. Filter by user id, and attach user data. | [optional] |
| **inherit_from_parent** | **bool**| Optional. Determines whether or not parent items should be searched for theme media. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\AllThemeMediaResult**](../Model/AllThemeMediaResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getThemeSongs()`

```php
getThemeSongs($item_id, $user_id, $inherit_from_parent): \OpenAPI\Client\Model\ThemeMediaResult
```

Get theme songs for an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item id.
$user_id = 'user_id_example'; // string | Optional. Filter by user id, and attach user data.
$inherit_from_parent = false; // bool | Optional. Determines whether or not parent items should be searched for theme media.

try {
    $result = $apiInstance->getThemeSongs($item_id, $user_id, $inherit_from_parent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->getThemeSongs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **user_id** | **string**| Optional. Filter by user id, and attach user data. | [optional] |
| **inherit_from_parent** | **bool**| Optional. Determines whether or not parent items should be searched for theme media. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\ThemeMediaResult**](../Model/ThemeMediaResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getThemeVideos()`

```php
getThemeVideos($item_id, $user_id, $inherit_from_parent): \OpenAPI\Client\Model\ThemeMediaResult
```

Get theme videos for an item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 'item_id_example'; // string | The item id.
$user_id = 'user_id_example'; // string | Optional. Filter by user id, and attach user data.
$inherit_from_parent = false; // bool | Optional. Determines whether or not parent items should be searched for theme media.

try {
    $result = $apiInstance->getThemeVideos($item_id, $user_id, $inherit_from_parent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->getThemeVideos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The item id. | |
| **user_id** | **string**| Optional. Filter by user id, and attach user data. | [optional] |
| **inherit_from_parent** | **bool**| Optional. Determines whether or not parent items should be searched for theme media. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\ThemeMediaResult**](../Model/ThemeMediaResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAddedMovies()`

```php
postAddedMovies($tmdb_id, $imdb_id)
```

Reports that new movies have been added by an external source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tmdb_id = 'tmdb_id_example'; // string | The tmdbId.
$imdb_id = 'imdb_id_example'; // string | The imdbId.

try {
    $apiInstance->postAddedMovies($tmdb_id, $imdb_id);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->postAddedMovies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tmdb_id** | **string**| The tmdbId. | [optional] |
| **imdb_id** | **string**| The imdbId. | [optional] |

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

## `postAddedSeries()`

```php
postAddedSeries($tvdb_id)
```

Reports that new episodes of a series have been added by an external source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tvdb_id = 'tvdb_id_example'; // string | The tvdbId.

try {
    $apiInstance->postAddedSeries($tvdb_id);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->postAddedSeries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tvdb_id** | **string**| The tvdbId. | [optional] |

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

## `postUpdatedMedia()`

```php
postUpdatedMedia($post_updated_media_request)
```

Reports that new movies have been added by an external source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_updated_media_request = new \OpenAPI\Client\Model\PostUpdatedMediaRequest(); // \OpenAPI\Client\Model\PostUpdatedMediaRequest | The update paths.

try {
    $apiInstance->postUpdatedMedia($post_updated_media_request);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->postUpdatedMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_updated_media_request** | [**\OpenAPI\Client\Model\PostUpdatedMediaRequest**](../Model/PostUpdatedMediaRequest.md)| The update paths. | |

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

## `postUpdatedMovies()`

```php
postUpdatedMovies($tmdb_id, $imdb_id)
```

Reports that new movies have been added by an external source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tmdb_id = 'tmdb_id_example'; // string | The tmdbId.
$imdb_id = 'imdb_id_example'; // string | The imdbId.

try {
    $apiInstance->postUpdatedMovies($tmdb_id, $imdb_id);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->postUpdatedMovies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tmdb_id** | **string**| The tmdbId. | [optional] |
| **imdb_id** | **string**| The imdbId. | [optional] |

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

## `postUpdatedSeries()`

```php
postUpdatedSeries($tvdb_id)
```

Reports that new episodes of a series have been added by an external source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tvdb_id = 'tvdb_id_example'; // string | The tvdbId.

try {
    $apiInstance->postUpdatedSeries($tvdb_id);
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->postUpdatedSeries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tvdb_id** | **string**| The tvdbId. | [optional] |

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

## `refreshLibrary()`

```php
refreshLibrary()
```

Starts a library scan.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LibraryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->refreshLibrary();
} catch (Exception $e) {
    echo 'Exception when calling LibraryApi->refreshLibrary: ', $e->getMessage(), PHP_EOL;
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
