# OpenAPI\Client\LiveTvApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addListingProvider()**](LiveTvApi.md#addListingProvider) | **POST** /LiveTv/ListingProviders | Adds a listings provider. |
| [**addTunerHost()**](LiveTvApi.md#addTunerHost) | **POST** /LiveTv/TunerHosts | Adds a tuner host. |
| [**cancelSeriesTimer()**](LiveTvApi.md#cancelSeriesTimer) | **DELETE** /LiveTv/SeriesTimers/{timerId} | Cancels a live tv series timer. |
| [**cancelTimer()**](LiveTvApi.md#cancelTimer) | **DELETE** /LiveTv/Timers/{timerId} | Cancels a live tv timer. |
| [**createSeriesTimer()**](LiveTvApi.md#createSeriesTimer) | **POST** /LiveTv/SeriesTimers | Creates a live tv series timer. |
| [**createTimer()**](LiveTvApi.md#createTimer) | **POST** /LiveTv/Timers | Creates a live tv timer. |
| [**deleteListingProvider()**](LiveTvApi.md#deleteListingProvider) | **DELETE** /LiveTv/ListingProviders | Delete listing provider. |
| [**deleteRecording()**](LiveTvApi.md#deleteRecording) | **DELETE** /LiveTv/Recordings/{recordingId} | Deletes a live tv recording. |
| [**deleteTunerHost()**](LiveTvApi.md#deleteTunerHost) | **DELETE** /LiveTv/TunerHosts | Deletes a tuner host. |
| [**discoverTuners()**](LiveTvApi.md#discoverTuners) | **GET** /LiveTv/Tuners/Discover | Discover tuners. |
| [**discvoverTuners()**](LiveTvApi.md#discvoverTuners) | **GET** /LiveTv/Tuners/Discvover | Discover tuners. |
| [**getChannel()**](LiveTvApi.md#getChannel) | **GET** /LiveTv/Channels/{channelId} | Gets a live tv channel. |
| [**getChannelMappingOptions()**](LiveTvApi.md#getChannelMappingOptions) | **GET** /LiveTv/ChannelMappingOptions | Get channel mapping options. |
| [**getDefaultListingProvider()**](LiveTvApi.md#getDefaultListingProvider) | **GET** /LiveTv/ListingProviders/Default | Gets default listings provider info. |
| [**getDefaultTimer()**](LiveTvApi.md#getDefaultTimer) | **GET** /LiveTv/Timers/Defaults | Gets the default values for a new timer. |
| [**getGuideInfo()**](LiveTvApi.md#getGuideInfo) | **GET** /LiveTv/GuideInfo | Get guid info. |
| [**getLineups()**](LiveTvApi.md#getLineups) | **GET** /LiveTv/ListingProviders/Lineups | Gets available lineups. |
| [**getLiveRecordingFile()**](LiveTvApi.md#getLiveRecordingFile) | **GET** /LiveTv/LiveRecordings/{recordingId}/stream | Gets a live tv recording stream. |
| [**getLiveStreamFile()**](LiveTvApi.md#getLiveStreamFile) | **GET** /LiveTv/LiveStreamFiles/{streamId}/stream.{container} | Gets a live tv channel stream. |
| [**getLiveTvChannels()**](LiveTvApi.md#getLiveTvChannels) | **GET** /LiveTv/Channels | Gets available live tv channels. |
| [**getLiveTvInfo()**](LiveTvApi.md#getLiveTvInfo) | **GET** /LiveTv/Info | Gets available live tv services. |
| [**getLiveTvPrograms()**](LiveTvApi.md#getLiveTvPrograms) | **GET** /LiveTv/Programs | Gets available live tv epgs. |
| [**getProgram()**](LiveTvApi.md#getProgram) | **GET** /LiveTv/Programs/{programId} | Gets a live tv program. |
| [**getPrograms()**](LiveTvApi.md#getPrograms) | **POST** /LiveTv/Programs | Gets available live tv epgs. |
| [**getRecommendedPrograms()**](LiveTvApi.md#getRecommendedPrograms) | **GET** /LiveTv/Programs/Recommended | Gets recommended live tv epgs. |
| [**getRecording()**](LiveTvApi.md#getRecording) | **GET** /LiveTv/Recordings/{recordingId} | Gets a live tv recording. |
| [**getRecordingFolders()**](LiveTvApi.md#getRecordingFolders) | **GET** /LiveTv/Recordings/Folders | Gets recording folders. |
| [**getRecordingGroup()**](LiveTvApi.md#getRecordingGroup) | **GET** /LiveTv/Recordings/Groups/{groupId} | Get recording group. |
| [**getRecordingGroups()**](LiveTvApi.md#getRecordingGroups) | **GET** /LiveTv/Recordings/Groups | Gets live tv recording groups. |
| [**getRecordings()**](LiveTvApi.md#getRecordings) | **GET** /LiveTv/Recordings | Gets live tv recordings. |
| [**getRecordingsSeries()**](LiveTvApi.md#getRecordingsSeries) | **GET** /LiveTv/Recordings/Series | Gets live tv recording series. |
| [**getSchedulesDirectCountries()**](LiveTvApi.md#getSchedulesDirectCountries) | **GET** /LiveTv/ListingProviders/SchedulesDirect/Countries | Gets available countries. |
| [**getSeriesTimer()**](LiveTvApi.md#getSeriesTimer) | **GET** /LiveTv/SeriesTimers/{timerId} | Gets a live tv series timer. |
| [**getSeriesTimers()**](LiveTvApi.md#getSeriesTimers) | **GET** /LiveTv/SeriesTimers | Gets live tv series timers. |
| [**getTimer()**](LiveTvApi.md#getTimer) | **GET** /LiveTv/Timers/{timerId} | Gets a timer. |
| [**getTimers()**](LiveTvApi.md#getTimers) | **GET** /LiveTv/Timers | Gets the live tv timers. |
| [**getTunerHostTypes()**](LiveTvApi.md#getTunerHostTypes) | **GET** /LiveTv/TunerHosts/Types | Get tuner host types. |
| [**resetTuner()**](LiveTvApi.md#resetTuner) | **POST** /LiveTv/Tuners/{tunerId}/Reset | Resets a tv tuner. |
| [**setChannelMapping()**](LiveTvApi.md#setChannelMapping) | **POST** /LiveTv/ChannelMappings | Set channel mappings. |
| [**updateSeriesTimer()**](LiveTvApi.md#updateSeriesTimer) | **POST** /LiveTv/SeriesTimers/{timerId} | Updates a live tv series timer. |
| [**updateTimer()**](LiveTvApi.md#updateTimer) | **POST** /LiveTv/Timers/{timerId} | Updates a live tv timer. |


## `addListingProvider()`

```php
addListingProvider($pw, $validate_listings, $validate_login, $add_listing_provider_request): \OpenAPI\Client\Model\ListingsProviderInfo
```

Adds a listings provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pw = 'pw_example'; // string | Password.
$validate_listings = false; // bool | Validate listings.
$validate_login = false; // bool | Validate login.
$add_listing_provider_request = new \OpenAPI\Client\Model\AddListingProviderRequest(); // \OpenAPI\Client\Model\AddListingProviderRequest | New listings info.

try {
    $result = $apiInstance->addListingProvider($pw, $validate_listings, $validate_login, $add_listing_provider_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->addListingProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pw** | **string**| Password. | [optional] |
| **validate_listings** | **bool**| Validate listings. | [optional] [default to false] |
| **validate_login** | **bool**| Validate login. | [optional] [default to false] |
| **add_listing_provider_request** | [**\OpenAPI\Client\Model\AddListingProviderRequest**](../Model/AddListingProviderRequest.md)| New listings info. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListingsProviderInfo**](../Model/ListingsProviderInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addTunerHost()`

```php
addTunerHost($add_tuner_host_request): \OpenAPI\Client\Model\TunerHostInfo
```

Adds a tuner host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_tuner_host_request = new \OpenAPI\Client\Model\AddTunerHostRequest(); // \OpenAPI\Client\Model\AddTunerHostRequest | New tuner host.

try {
    $result = $apiInstance->addTunerHost($add_tuner_host_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->addTunerHost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **add_tuner_host_request** | [**\OpenAPI\Client\Model\AddTunerHostRequest**](../Model/AddTunerHostRequest.md)| New tuner host. | [optional] |

### Return type

[**\OpenAPI\Client\Model\TunerHostInfo**](../Model/TunerHostInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelSeriesTimer()`

```php
cancelSeriesTimer($timer_id)
```

Cancels a live tv series timer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$timer_id = 'timer_id_example'; // string | Timer id.

try {
    $apiInstance->cancelSeriesTimer($timer_id);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->cancelSeriesTimer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **timer_id** | **string**| Timer id. | |

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

## `cancelTimer()`

```php
cancelTimer($timer_id)
```

Cancels a live tv timer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$timer_id = 'timer_id_example'; // string | Timer id.

try {
    $apiInstance->cancelTimer($timer_id);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->cancelTimer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **timer_id** | **string**| Timer id. | |

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

## `createSeriesTimer()`

```php
createSeriesTimer($create_series_timer_request)
```

Creates a live tv series timer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_series_timer_request = new \OpenAPI\Client\Model\CreateSeriesTimerRequest(); // \OpenAPI\Client\Model\CreateSeriesTimerRequest | New series timer info.

try {
    $apiInstance->createSeriesTimer($create_series_timer_request);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->createSeriesTimer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_series_timer_request** | [**\OpenAPI\Client\Model\CreateSeriesTimerRequest**](../Model/CreateSeriesTimerRequest.md)| New series timer info. | [optional] |

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

## `createTimer()`

```php
createTimer($create_timer_request)
```

Creates a live tv timer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_timer_request = new \OpenAPI\Client\Model\CreateTimerRequest(); // \OpenAPI\Client\Model\CreateTimerRequest | New timer info.

try {
    $apiInstance->createTimer($create_timer_request);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->createTimer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_timer_request** | [**\OpenAPI\Client\Model\CreateTimerRequest**](../Model/CreateTimerRequest.md)| New timer info. | [optional] |

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

## `deleteListingProvider()`

```php
deleteListingProvider($id)
```

Delete listing provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Listing provider id.

try {
    $apiInstance->deleteListingProvider($id);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->deleteListingProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Listing provider id. | [optional] |

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

## `deleteRecording()`

```php
deleteRecording($recording_id)
```

Deletes a live tv recording.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recording_id = 'recording_id_example'; // string | Recording id.

try {
    $apiInstance->deleteRecording($recording_id);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->deleteRecording: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recording_id** | **string**| Recording id. | |

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

## `deleteTunerHost()`

```php
deleteTunerHost($id)
```

Deletes a tuner host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Tuner host id.

try {
    $apiInstance->deleteTunerHost($id);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->deleteTunerHost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Tuner host id. | [optional] |

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

## `discoverTuners()`

```php
discoverTuners($new_devices_only): \OpenAPI\Client\Model\TunerHostInfo[]
```

Discover tuners.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_devices_only = false; // bool | Only discover new tuners.

try {
    $result = $apiInstance->discoverTuners($new_devices_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->discoverTuners: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_devices_only** | **bool**| Only discover new tuners. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\TunerHostInfo[]**](../Model/TunerHostInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `discvoverTuners()`

```php
discvoverTuners($new_devices_only): \OpenAPI\Client\Model\TunerHostInfo[]
```

Discover tuners.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_devices_only = false; // bool | Only discover new tuners.

try {
    $result = $apiInstance->discvoverTuners($new_devices_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->discvoverTuners: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **new_devices_only** | **bool**| Only discover new tuners. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\TunerHostInfo[]**](../Model/TunerHostInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannel()`

```php
getChannel($channel_id, $user_id): \OpenAPI\Client\Model\BaseItemDto
```

Gets a live tv channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | Channel id.
$user_id = 'user_id_example'; // string | Optional. Attach user data.

try {
    $result = $apiInstance->getChannel($channel_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**| Channel id. | |
| **user_id** | **string**| Optional. Attach user data. | [optional] |

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

## `getChannelMappingOptions()`

```php
getChannelMappingOptions($provider_id): \OpenAPI\Client\Model\ChannelMappingOptionsDto
```

Get channel mapping options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider_id = 'provider_id_example'; // string | Provider id.

try {
    $result = $apiInstance->getChannelMappingOptions($provider_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getChannelMappingOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider_id** | **string**| Provider id. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ChannelMappingOptionsDto**](../Model/ChannelMappingOptionsDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDefaultListingProvider()`

```php
getDefaultListingProvider(): \OpenAPI\Client\Model\ListingsProviderInfo
```

Gets default listings provider info.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDefaultListingProvider();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getDefaultListingProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ListingsProviderInfo**](../Model/ListingsProviderInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDefaultTimer()`

```php
getDefaultTimer($program_id): \OpenAPI\Client\Model\SeriesTimerInfoDto
```

Gets the default values for a new timer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$program_id = 'program_id_example'; // string | Optional. To attach default values based on a program.

try {
    $result = $apiInstance->getDefaultTimer($program_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getDefaultTimer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **program_id** | **string**| Optional. To attach default values based on a program. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SeriesTimerInfoDto**](../Model/SeriesTimerInfoDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getGuideInfo()`

```php
getGuideInfo(): \OpenAPI\Client\Model\GuideInfo
```

Get guid info.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGuideInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getGuideInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GuideInfo**](../Model/GuideInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLineups()`

```php
getLineups($id, $type, $location, $country): \OpenAPI\Client\Model\NameIdPair[]
```

Gets available lineups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Provider id.
$type = 'type_example'; // string | Provider type.
$location = 'location_example'; // string | Location.
$country = 'country_example'; // string | Country.

try {
    $result = $apiInstance->getLineups($id, $type, $location, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getLineups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Provider id. | [optional] |
| **type** | **string**| Provider type. | [optional] |
| **location** | **string**| Location. | [optional] |
| **country** | **string**| Country. | [optional] |

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

## `getLiveRecordingFile()`

```php
getLiveRecordingFile($recording_id): \SplFileObject
```

Gets a live tv recording stream.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recording_id = 'recording_id_example'; // string | Recording id.

try {
    $result = $apiInstance->getLiveRecordingFile($recording_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getLiveRecordingFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recording_id** | **string**| Recording id. | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `video/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLiveStreamFile()`

```php
getLiveStreamFile($stream_id, $container): \SplFileObject
```

Gets a live tv channel stream.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$stream_id = 'stream_id_example'; // string | Stream id.
$container = 'container_example'; // string | Container type.

try {
    $result = $apiInstance->getLiveStreamFile($stream_id, $container);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getLiveStreamFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stream_id** | **string**| Stream id. | |
| **container** | **string**| Container type. | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `video/*`, `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLiveTvChannels()`

```php
getLiveTvChannels($type, $user_id, $start_index, $is_movie, $is_series, $is_news, $is_kids, $is_sports, $limit, $is_favorite, $is_liked, $is_disliked, $enable_images, $image_type_limit, $enable_image_types, $fields, $enable_user_data, $sort_by, $sort_order, $enable_favorite_sorting, $add_current_program): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets available live tv channels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ChannelType(); // \OpenAPI\Client\Model\ChannelType | Optional. Filter by channel type.
$user_id = 'user_id_example'; // string | Optional. Filter by user and attach user data.
$start_index = 56; // int | Optional. The record index to start at. All items with a lower index will be dropped from the results.
$is_movie = True; // bool | Optional. Filter for movies.
$is_series = True; // bool | Optional. Filter for series.
$is_news = True; // bool | Optional. Filter for news.
$is_kids = True; // bool | Optional. Filter for kids.
$is_sports = True; // bool | Optional. Filter for sports.
$limit = 56; // int | Optional. The maximum number of records to return.
$is_favorite = True; // bool | Optional. Filter by channels that are favorites, or not.
$is_liked = True; // bool | Optional. Filter by channels that are liked, or not.
$is_disliked = True; // bool | Optional. Filter by channels that are disliked, or not.
$enable_images = True; // bool | Optional. Include image information in output.
$image_type_limit = 56; // int | Optional. The max number of images to return, per image type.
$enable_image_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType()); // \OpenAPI\Client\Model\ImageType[] | \"Optional. The image types to include in the output.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output.
$enable_user_data = True; // bool | Optional. Include user data.
$sort_by = array('sort_by_example'); // string[] | Optional. Key to sort by.
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SortOrder(); // \OpenAPI\Client\Model\SortOrder | Optional. Sort order.
$enable_favorite_sorting = false; // bool | Optional. Incorporate favorite and like status into channel sorting.
$add_current_program = true; // bool | Optional. Adds current program info to each channel.

try {
    $result = $apiInstance->getLiveTvChannels($type, $user_id, $start_index, $is_movie, $is_series, $is_news, $is_kids, $is_sports, $limit, $is_favorite, $is_liked, $is_disliked, $enable_images, $image_type_limit, $enable_image_types, $fields, $enable_user_data, $sort_by, $sort_order, $enable_favorite_sorting, $add_current_program);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getLiveTvChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**\OpenAPI\Client\Model\ChannelType**](../Model/.md)| Optional. Filter by channel type. | [optional] |
| **user_id** | **string**| Optional. Filter by user and attach user data. | [optional] |
| **start_index** | **int**| Optional. The record index to start at. All items with a lower index will be dropped from the results. | [optional] |
| **is_movie** | **bool**| Optional. Filter for movies. | [optional] |
| **is_series** | **bool**| Optional. Filter for series. | [optional] |
| **is_news** | **bool**| Optional. Filter for news. | [optional] |
| **is_kids** | **bool**| Optional. Filter for kids. | [optional] |
| **is_sports** | **bool**| Optional. Filter for sports. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **is_favorite** | **bool**| Optional. Filter by channels that are favorites, or not. | [optional] |
| **is_liked** | **bool**| Optional. Filter by channels that are liked, or not. | [optional] |
| **is_disliked** | **bool**| Optional. Filter by channels that are disliked, or not. | [optional] |
| **enable_images** | **bool**| Optional. Include image information in output. | [optional] |
| **image_type_limit** | **int**| Optional. The max number of images to return, per image type. | [optional] |
| **enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](../Model/\OpenAPI\Client\Model\ImageType.md)| \&quot;Optional. The image types to include in the output. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. | [optional] |
| **enable_user_data** | **bool**| Optional. Include user data. | [optional] |
| **sort_by** | [**string[]**](../Model/string.md)| Optional. Key to sort by. | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\SortOrder**](../Model/.md)| Optional. Sort order. | [optional] |
| **enable_favorite_sorting** | **bool**| Optional. Incorporate favorite and like status into channel sorting. | [optional] [default to false] |
| **add_current_program** | **bool**| Optional. Adds current program info to each channel. | [optional] [default to true] |

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

## `getLiveTvInfo()`

```php
getLiveTvInfo(): \OpenAPI\Client\Model\LiveTvInfo
```

Gets available live tv services.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLiveTvInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getLiveTvInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\LiveTvInfo**](../Model/LiveTvInfo.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLiveTvPrograms()`

```php
getLiveTvPrograms($channel_ids, $user_id, $min_start_date, $has_aired, $is_airing, $max_start_date, $min_end_date, $max_end_date, $is_movie, $is_series, $is_news, $is_kids, $is_sports, $start_index, $limit, $sort_by, $sort_order, $genres, $genre_ids, $enable_images, $image_type_limit, $enable_image_types, $enable_user_data, $series_timer_id, $library_series_id, $fields, $enable_total_record_count): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets available live tv epgs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_ids = array('channel_ids_example'); // string[] | The channels to return guide information for.
$user_id = 'user_id_example'; // string | Optional. Filter by user id.
$min_start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional. The minimum premiere start date.
$has_aired = True; // bool | Optional. Filter by programs that have completed airing, or not.
$is_airing = True; // bool | Optional. Filter by programs that are currently airing, or not.
$max_start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional. The maximum premiere start date.
$min_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional. The minimum premiere end date.
$max_end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional. The maximum premiere end date.
$is_movie = True; // bool | Optional. Filter for movies.
$is_series = True; // bool | Optional. Filter for series.
$is_news = True; // bool | Optional. Filter for news.
$is_kids = True; // bool | Optional. Filter for kids.
$is_sports = True; // bool | Optional. Filter for sports.
$start_index = 56; // int | Optional. The record index to start at. All items with a lower index will be dropped from the results.
$limit = 56; // int | Optional. The maximum number of records to return.
$sort_by = array('sort_by_example'); // string[] | Optional. Specify one or more sort orders, comma delimited. Options: Name, StartDate.
$sort_order = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SortOrder()); // \OpenAPI\Client\Model\SortOrder[] | Sort Order - Ascending,Descending.
$genres = array('genres_example'); // string[] | The genres to return guide information for.
$genre_ids = array('genre_ids_example'); // string[] | The genre ids to return guide information for.
$enable_images = True; // bool | Optional. Include image information in output.
$image_type_limit = 56; // int | Optional. The max number of images to return, per image type.
$enable_image_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType()); // \OpenAPI\Client\Model\ImageType[] | Optional. The image types to include in the output.
$enable_user_data = True; // bool | Optional. Include user data.
$series_timer_id = 'series_timer_id_example'; // string | Optional. Filter by series timer id.
$library_series_id = 'library_series_id_example'; // string | Optional. Filter by library series id.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output.
$enable_total_record_count = true; // bool | Retrieve total record count.

try {
    $result = $apiInstance->getLiveTvPrograms($channel_ids, $user_id, $min_start_date, $has_aired, $is_airing, $max_start_date, $min_end_date, $max_end_date, $is_movie, $is_series, $is_news, $is_kids, $is_sports, $start_index, $limit, $sort_by, $sort_order, $genres, $genre_ids, $enable_images, $image_type_limit, $enable_image_types, $enable_user_data, $series_timer_id, $library_series_id, $fields, $enable_total_record_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getLiveTvPrograms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_ids** | [**string[]**](../Model/string.md)| The channels to return guide information for. | [optional] |
| **user_id** | **string**| Optional. Filter by user id. | [optional] |
| **min_start_date** | **\DateTime**| Optional. The minimum premiere start date. | [optional] |
| **has_aired** | **bool**| Optional. Filter by programs that have completed airing, or not. | [optional] |
| **is_airing** | **bool**| Optional. Filter by programs that are currently airing, or not. | [optional] |
| **max_start_date** | **\DateTime**| Optional. The maximum premiere start date. | [optional] |
| **min_end_date** | **\DateTime**| Optional. The minimum premiere end date. | [optional] |
| **max_end_date** | **\DateTime**| Optional. The maximum premiere end date. | [optional] |
| **is_movie** | **bool**| Optional. Filter for movies. | [optional] |
| **is_series** | **bool**| Optional. Filter for series. | [optional] |
| **is_news** | **bool**| Optional. Filter for news. | [optional] |
| **is_kids** | **bool**| Optional. Filter for kids. | [optional] |
| **is_sports** | **bool**| Optional. Filter for sports. | [optional] |
| **start_index** | **int**| Optional. The record index to start at. All items with a lower index will be dropped from the results. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **sort_by** | [**string[]**](../Model/string.md)| Optional. Specify one or more sort orders, comma delimited. Options: Name, StartDate. | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\SortOrder[]**](../Model/\OpenAPI\Client\Model\SortOrder.md)| Sort Order - Ascending,Descending. | [optional] |
| **genres** | [**string[]**](../Model/string.md)| The genres to return guide information for. | [optional] |
| **genre_ids** | [**string[]**](../Model/string.md)| The genre ids to return guide information for. | [optional] |
| **enable_images** | **bool**| Optional. Include image information in output. | [optional] |
| **image_type_limit** | **int**| Optional. The max number of images to return, per image type. | [optional] |
| **enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](../Model/\OpenAPI\Client\Model\ImageType.md)| Optional. The image types to include in the output. | [optional] |
| **enable_user_data** | **bool**| Optional. Include user data. | [optional] |
| **series_timer_id** | **string**| Optional. Filter by series timer id. | [optional] |
| **library_series_id** | **string**| Optional. Filter by library series id. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. | [optional] |
| **enable_total_record_count** | **bool**| Retrieve total record count. | [optional] [default to true] |

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

## `getProgram()`

```php
getProgram($program_id, $user_id): \OpenAPI\Client\Model\BaseItemDto
```

Gets a live tv program.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$program_id = 'program_id_example'; // string | Program id.
$user_id = 'user_id_example'; // string | Optional. Attach user data.

try {
    $result = $apiInstance->getProgram($program_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getProgram: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **program_id** | **string**| Program id. | |
| **user_id** | **string**| Optional. Attach user data. | [optional] |

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

## `getPrograms()`

```php
getPrograms($get_programs_request): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets available live tv epgs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_programs_request = new \OpenAPI\Client\Model\GetProgramsRequest(); // \OpenAPI\Client\Model\GetProgramsRequest | Request body.

try {
    $result = $apiInstance->getPrograms($get_programs_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getPrograms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_programs_request** | [**\OpenAPI\Client\Model\GetProgramsRequest**](../Model/GetProgramsRequest.md)| Request body. | [optional] |

### Return type

[**\OpenAPI\Client\Model\BaseItemDtoQueryResult**](../Model/BaseItemDtoQueryResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRecommendedPrograms()`

```php
getRecommendedPrograms($user_id, $limit, $is_airing, $has_aired, $is_series, $is_movie, $is_news, $is_kids, $is_sports, $enable_images, $image_type_limit, $enable_image_types, $genre_ids, $fields, $enable_user_data, $enable_total_record_count): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets recommended live tv epgs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | Optional. filter by user id.
$limit = 56; // int | Optional. The maximum number of records to return.
$is_airing = True; // bool | Optional. Filter by programs that are currently airing, or not.
$has_aired = True; // bool | Optional. Filter by programs that have completed airing, or not.
$is_series = True; // bool | Optional. Filter for series.
$is_movie = True; // bool | Optional. Filter for movies.
$is_news = True; // bool | Optional. Filter for news.
$is_kids = True; // bool | Optional. Filter for kids.
$is_sports = True; // bool | Optional. Filter for sports.
$enable_images = True; // bool | Optional. Include image information in output.
$image_type_limit = 56; // int | Optional. The max number of images to return, per image type.
$enable_image_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType()); // \OpenAPI\Client\Model\ImageType[] | Optional. The image types to include in the output.
$genre_ids = array('genre_ids_example'); // string[] | The genres to return guide information for.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output.
$enable_user_data = True; // bool | Optional. include user data.
$enable_total_record_count = true; // bool | Retrieve total record count.

try {
    $result = $apiInstance->getRecommendedPrograms($user_id, $limit, $is_airing, $has_aired, $is_series, $is_movie, $is_news, $is_kids, $is_sports, $enable_images, $image_type_limit, $enable_image_types, $genre_ids, $fields, $enable_user_data, $enable_total_record_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getRecommendedPrograms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| Optional. filter by user id. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **is_airing** | **bool**| Optional. Filter by programs that are currently airing, or not. | [optional] |
| **has_aired** | **bool**| Optional. Filter by programs that have completed airing, or not. | [optional] |
| **is_series** | **bool**| Optional. Filter for series. | [optional] |
| **is_movie** | **bool**| Optional. Filter for movies. | [optional] |
| **is_news** | **bool**| Optional. Filter for news. | [optional] |
| **is_kids** | **bool**| Optional. Filter for kids. | [optional] |
| **is_sports** | **bool**| Optional. Filter for sports. | [optional] |
| **enable_images** | **bool**| Optional. Include image information in output. | [optional] |
| **image_type_limit** | **int**| Optional. The max number of images to return, per image type. | [optional] |
| **enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](../Model/\OpenAPI\Client\Model\ImageType.md)| Optional. The image types to include in the output. | [optional] |
| **genre_ids** | [**string[]**](../Model/string.md)| The genres to return guide information for. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. | [optional] |
| **enable_user_data** | **bool**| Optional. include user data. | [optional] |
| **enable_total_record_count** | **bool**| Retrieve total record count. | [optional] [default to true] |

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

## `getRecording()`

```php
getRecording($recording_id, $user_id): \OpenAPI\Client\Model\BaseItemDto
```

Gets a live tv recording.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recording_id = 'recording_id_example'; // string | Recording id.
$user_id = 'user_id_example'; // string | Optional. Attach user data.

try {
    $result = $apiInstance->getRecording($recording_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getRecording: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recording_id** | **string**| Recording id. | |
| **user_id** | **string**| Optional. Attach user data. | [optional] |

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

## `getRecordingFolders()`

```php
getRecordingFolders($user_id): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets recording folders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | Optional. Filter by user and attach user data.

try {
    $result = $apiInstance->getRecordingFolders($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getRecordingFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| Optional. Filter by user and attach user data. | [optional] |

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

## `getRecordingGroup()`

```php
getRecordingGroup($group_id)
```

Get recording group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string | Group id.

try {
    $apiInstance->getRecordingGroup($group_id);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getRecordingGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**| Group id. | |

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

## `getRecordingGroups()`

```php
getRecordingGroups($user_id): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets live tv recording groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string | Optional. Filter by user and attach user data.

try {
    $result = $apiInstance->getRecordingGroups($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getRecordingGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**| Optional. Filter by user and attach user data. | [optional] |

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

## `getRecordings()`

```php
getRecordings($channel_id, $user_id, $start_index, $limit, $status, $is_in_progress, $series_timer_id, $enable_images, $image_type_limit, $enable_image_types, $fields, $enable_user_data, $is_movie, $is_series, $is_kids, $is_sports, $is_news, $is_library_item, $enable_total_record_count): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets live tv recordings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | Optional. Filter by channel id.
$user_id = 'user_id_example'; // string | Optional. Filter by user and attach user data.
$start_index = 56; // int | Optional. The record index to start at. All items with a lower index will be dropped from the results.
$limit = 56; // int | Optional. The maximum number of records to return.
$status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\RecordingStatus(); // \OpenAPI\Client\Model\RecordingStatus | Optional. Filter by recording status.
$is_in_progress = True; // bool | Optional. Filter by recordings that are in progress, or not.
$series_timer_id = 'series_timer_id_example'; // string | Optional. Filter by recordings belonging to a series timer.
$enable_images = True; // bool | Optional. Include image information in output.
$image_type_limit = 56; // int | Optional. The max number of images to return, per image type.
$enable_image_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType()); // \OpenAPI\Client\Model\ImageType[] | Optional. The image types to include in the output.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output.
$enable_user_data = True; // bool | Optional. Include user data.
$is_movie = True; // bool | Optional. Filter for movies.
$is_series = True; // bool | Optional. Filter for series.
$is_kids = True; // bool | Optional. Filter for kids.
$is_sports = True; // bool | Optional. Filter for sports.
$is_news = True; // bool | Optional. Filter for news.
$is_library_item = True; // bool | Optional. Filter for is library item.
$enable_total_record_count = true; // bool | Optional. Return total record count.

try {
    $result = $apiInstance->getRecordings($channel_id, $user_id, $start_index, $limit, $status, $is_in_progress, $series_timer_id, $enable_images, $image_type_limit, $enable_image_types, $fields, $enable_user_data, $is_movie, $is_series, $is_kids, $is_sports, $is_news, $is_library_item, $enable_total_record_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getRecordings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**| Optional. Filter by channel id. | [optional] |
| **user_id** | **string**| Optional. Filter by user and attach user data. | [optional] |
| **start_index** | **int**| Optional. The record index to start at. All items with a lower index will be dropped from the results. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **status** | [**\OpenAPI\Client\Model\RecordingStatus**](../Model/.md)| Optional. Filter by recording status. | [optional] |
| **is_in_progress** | **bool**| Optional. Filter by recordings that are in progress, or not. | [optional] |
| **series_timer_id** | **string**| Optional. Filter by recordings belonging to a series timer. | [optional] |
| **enable_images** | **bool**| Optional. Include image information in output. | [optional] |
| **image_type_limit** | **int**| Optional. The max number of images to return, per image type. | [optional] |
| **enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](../Model/\OpenAPI\Client\Model\ImageType.md)| Optional. The image types to include in the output. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. | [optional] |
| **enable_user_data** | **bool**| Optional. Include user data. | [optional] |
| **is_movie** | **bool**| Optional. Filter for movies. | [optional] |
| **is_series** | **bool**| Optional. Filter for series. | [optional] |
| **is_kids** | **bool**| Optional. Filter for kids. | [optional] |
| **is_sports** | **bool**| Optional. Filter for sports. | [optional] |
| **is_news** | **bool**| Optional. Filter for news. | [optional] |
| **is_library_item** | **bool**| Optional. Filter for is library item. | [optional] |
| **enable_total_record_count** | **bool**| Optional. Return total record count. | [optional] [default to true] |

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

## `getRecordingsSeries()`

```php
getRecordingsSeries($channel_id, $user_id, $group_id, $start_index, $limit, $status, $is_in_progress, $series_timer_id, $enable_images, $image_type_limit, $enable_image_types, $fields, $enable_user_data, $enable_total_record_count): \OpenAPI\Client\Model\BaseItemDtoQueryResult
```

Gets live tv recording series.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | Optional. Filter by channel id.
$user_id = 'user_id_example'; // string | Optional. Filter by user and attach user data.
$group_id = 'group_id_example'; // string | Optional. Filter by recording group.
$start_index = 56; // int | Optional. The record index to start at. All items with a lower index will be dropped from the results.
$limit = 56; // int | Optional. The maximum number of records to return.
$status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\RecordingStatus(); // \OpenAPI\Client\Model\RecordingStatus | Optional. Filter by recording status.
$is_in_progress = True; // bool | Optional. Filter by recordings that are in progress, or not.
$series_timer_id = 'series_timer_id_example'; // string | Optional. Filter by recordings belonging to a series timer.
$enable_images = True; // bool | Optional. Include image information in output.
$image_type_limit = 56; // int | Optional. The max number of images to return, per image type.
$enable_image_types = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ImageType()); // \OpenAPI\Client\Model\ImageType[] | Optional. The image types to include in the output.
$fields = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ItemFields()); // \OpenAPI\Client\Model\ItemFields[] | Optional. Specify additional fields of information to return in the output.
$enable_user_data = True; // bool | Optional. Include user data.
$enable_total_record_count = true; // bool | Optional. Return total record count.

try {
    $result = $apiInstance->getRecordingsSeries($channel_id, $user_id, $group_id, $start_index, $limit, $status, $is_in_progress, $series_timer_id, $enable_images, $image_type_limit, $enable_image_types, $fields, $enable_user_data, $enable_total_record_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getRecordingsSeries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**| Optional. Filter by channel id. | [optional] |
| **user_id** | **string**| Optional. Filter by user and attach user data. | [optional] |
| **group_id** | **string**| Optional. Filter by recording group. | [optional] |
| **start_index** | **int**| Optional. The record index to start at. All items with a lower index will be dropped from the results. | [optional] |
| **limit** | **int**| Optional. The maximum number of records to return. | [optional] |
| **status** | [**\OpenAPI\Client\Model\RecordingStatus**](../Model/.md)| Optional. Filter by recording status. | [optional] |
| **is_in_progress** | **bool**| Optional. Filter by recordings that are in progress, or not. | [optional] |
| **series_timer_id** | **string**| Optional. Filter by recordings belonging to a series timer. | [optional] |
| **enable_images** | **bool**| Optional. Include image information in output. | [optional] |
| **image_type_limit** | **int**| Optional. The max number of images to return, per image type. | [optional] |
| **enable_image_types** | [**\OpenAPI\Client\Model\ImageType[]**](../Model/\OpenAPI\Client\Model\ImageType.md)| Optional. The image types to include in the output. | [optional] |
| **fields** | [**\OpenAPI\Client\Model\ItemFields[]**](../Model/\OpenAPI\Client\Model\ItemFields.md)| Optional. Specify additional fields of information to return in the output. | [optional] |
| **enable_user_data** | **bool**| Optional. Include user data. | [optional] |
| **enable_total_record_count** | **bool**| Optional. Return total record count. | [optional] [default to true] |

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

## `getSchedulesDirectCountries()`

```php
getSchedulesDirectCountries(): \SplFileObject
```

Gets available countries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSchedulesDirectCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getSchedulesDirectCountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**\SplFileObject**

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSeriesTimer()`

```php
getSeriesTimer($timer_id): \OpenAPI\Client\Model\SeriesTimerInfoDto
```

Gets a live tv series timer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$timer_id = 'timer_id_example'; // string | Timer id.

try {
    $result = $apiInstance->getSeriesTimer($timer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getSeriesTimer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **timer_id** | **string**| Timer id. | |

### Return type

[**\OpenAPI\Client\Model\SeriesTimerInfoDto**](../Model/SeriesTimerInfoDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSeriesTimers()`

```php
getSeriesTimers($sort_by, $sort_order): \OpenAPI\Client\Model\SeriesTimerInfoDtoQueryResult
```

Gets live tv series timers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort_by = 'sort_by_example'; // string | Optional. Sort by SortName or Priority.
$sort_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SortOrder(); // \OpenAPI\Client\Model\SortOrder | Optional. Sort in Ascending or Descending order.

try {
    $result = $apiInstance->getSeriesTimers($sort_by, $sort_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getSeriesTimers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sort_by** | **string**| Optional. Sort by SortName or Priority. | [optional] |
| **sort_order** | [**\OpenAPI\Client\Model\SortOrder**](../Model/.md)| Optional. Sort in Ascending or Descending order. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SeriesTimerInfoDtoQueryResult**](../Model/SeriesTimerInfoDtoQueryResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTimer()`

```php
getTimer($timer_id): \OpenAPI\Client\Model\TimerInfoDto
```

Gets a timer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$timer_id = 'timer_id_example'; // string | Timer id.

try {
    $result = $apiInstance->getTimer($timer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getTimer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **timer_id** | **string**| Timer id. | |

### Return type

[**\OpenAPI\Client\Model\TimerInfoDto**](../Model/TimerInfoDto.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTimers()`

```php
getTimers($channel_id, $series_timer_id, $is_active, $is_scheduled): \OpenAPI\Client\Model\TimerInfoDtoQueryResult
```

Gets the live tv timers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channel_id = 'channel_id_example'; // string | Optional. Filter by channel id.
$series_timer_id = 'series_timer_id_example'; // string | Optional. Filter by timers belonging to a series timer.
$is_active = True; // bool | Optional. Filter by timers that are active.
$is_scheduled = True; // bool | Optional. Filter by timers that are scheduled.

try {
    $result = $apiInstance->getTimers($channel_id, $series_timer_id, $is_active, $is_scheduled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getTimers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channel_id** | **string**| Optional. Filter by channel id. | [optional] |
| **series_timer_id** | **string**| Optional. Filter by timers belonging to a series timer. | [optional] |
| **is_active** | **bool**| Optional. Filter by timers that are active. | [optional] |
| **is_scheduled** | **bool**| Optional. Filter by timers that are scheduled. | [optional] |

### Return type

[**\OpenAPI\Client\Model\TimerInfoDtoQueryResult**](../Model/TimerInfoDtoQueryResult.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTunerHostTypes()`

```php
getTunerHostTypes(): \OpenAPI\Client\Model\NameIdPair[]
```

Get tuner host types.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTunerHostTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->getTunerHostTypes: ', $e->getMessage(), PHP_EOL;
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

## `resetTuner()`

```php
resetTuner($tuner_id)
```

Resets a tv tuner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tuner_id = 'tuner_id_example'; // string | Tuner id.

try {
    $apiInstance->resetTuner($tuner_id);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->resetTuner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tuner_id** | **string**| Tuner id. | |

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

## `setChannelMapping()`

```php
setChannelMapping($set_channel_mapping_request): \OpenAPI\Client\Model\TunerChannelMapping
```

Set channel mappings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$set_channel_mapping_request = new \OpenAPI\Client\Model\SetChannelMappingRequest(); // \OpenAPI\Client\Model\SetChannelMappingRequest | The set channel mapping dto.

try {
    $result = $apiInstance->setChannelMapping($set_channel_mapping_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->setChannelMapping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **set_channel_mapping_request** | [**\OpenAPI\Client\Model\SetChannelMappingRequest**](../Model/SetChannelMappingRequest.md)| The set channel mapping dto. | |

### Return type

[**\OpenAPI\Client\Model\TunerChannelMapping**](../Model/TunerChannelMapping.md)

### Authorization

[CustomAuthentication](../../README.md#CustomAuthentication)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/*+json`
- **Accept**: `application/json`, `application/json; profile="CamelCase"`, `application/json; profile="PascalCase"`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSeriesTimer()`

```php
updateSeriesTimer($timer_id, $create_series_timer_request)
```

Updates a live tv series timer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$timer_id = 'timer_id_example'; // string | Timer id.
$create_series_timer_request = new \OpenAPI\Client\Model\CreateSeriesTimerRequest(); // \OpenAPI\Client\Model\CreateSeriesTimerRequest | New series timer info.

try {
    $apiInstance->updateSeriesTimer($timer_id, $create_series_timer_request);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->updateSeriesTimer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **timer_id** | **string**| Timer id. | |
| **create_series_timer_request** | [**\OpenAPI\Client\Model\CreateSeriesTimerRequest**](../Model/CreateSeriesTimerRequest.md)| New series timer info. | [optional] |

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

## `updateTimer()`

```php
updateTimer($timer_id, $create_timer_request)
```

Updates a live tv timer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: CustomAuthentication
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Emby-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Emby-Token', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LiveTvApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$timer_id = 'timer_id_example'; // string | Timer id.
$create_timer_request = new \OpenAPI\Client\Model\CreateTimerRequest(); // \OpenAPI\Client\Model\CreateTimerRequest | New timer info.

try {
    $apiInstance->updateTimer($timer_id, $create_timer_request);
} catch (Exception $e) {
    echo 'Exception when calling LiveTvApi->updateTimer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **timer_id** | **string**| Timer id. | |
| **create_timer_request** | [**\OpenAPI\Client\Model\CreateTimerRequest**](../Model/CreateTimerRequest.md)| New timer info. | [optional] |

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
