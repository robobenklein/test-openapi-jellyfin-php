# OpenAPI\Client\VideoAttachmentsApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAttachment()**](VideoAttachmentsApi.md#getAttachment) | **GET** /Videos/{videoId}/{mediaSourceId}/Attachments/{index} | Get video attachment. |


## `getAttachment()`

```php
getAttachment($video_id, $media_source_id, $index): \SplFileObject
```

Get video attachment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VideoAttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$video_id = 'video_id_example'; // string | Video ID.
$media_source_id = 'media_source_id_example'; // string | Media Source ID.
$index = 56; // int | Attachment Index.

try {
    $result = $apiInstance->getAttachment($video_id, $media_source_id, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoAttachmentsApi->getAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **video_id** | **string**| Video ID. | |
| **media_source_id** | **string**| Media Source ID. | |
| **index** | **int**| Attachment Index. | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
