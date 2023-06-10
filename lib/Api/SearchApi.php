<?php
/**
 * SearchApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Jellyfin API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 10.8.10
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * SearchApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SearchApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'get' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation get
     *
     * Gets the search hint result.
     *
     * @param  string $search_term The search term to filter on. (required)
     * @param  int $start_index Optional. The record index to start at. All items with a lower index will be dropped from the results. (optional)
     * @param  int $limit Optional. The maximum number of records to return. (optional)
     * @param  string $user_id Optional. Supply a user id to search within a user&#39;s library or omit to search all. (optional)
     * @param  \OpenAPI\Client\Model\BaseItemKind[] $include_item_types If specified, only results with the specified item types are returned. This allows multiple, comma delimeted. (optional)
     * @param  \OpenAPI\Client\Model\BaseItemKind[] $exclude_item_types If specified, results with these item types are filtered out. This allows multiple, comma delimeted. (optional)
     * @param  string[] $media_types If specified, only results with the specified media types are returned. This allows multiple, comma delimeted. (optional)
     * @param  string $parent_id If specified, only children of the parent are returned. (optional)
     * @param  bool $is_movie Optional filter for movies. (optional)
     * @param  bool $is_series Optional filter for series. (optional)
     * @param  bool $is_news Optional filter for news. (optional)
     * @param  bool $is_kids Optional filter for kids. (optional)
     * @param  bool $is_sports Optional filter for sports. (optional)
     * @param  bool $include_people Optional filter whether to include people. (optional, default to true)
     * @param  bool $include_media Optional filter whether to include media. (optional, default to true)
     * @param  bool $include_genres Optional filter whether to include genres. (optional, default to true)
     * @param  bool $include_studios Optional filter whether to include studios. (optional, default to true)
     * @param  bool $include_artists Optional filter whether to include artists. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['get'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\SearchHintResult
     */
    public function get($search_term, $start_index = null, $limit = null, $user_id = null, $include_item_types = null, $exclude_item_types = null, $media_types = null, $parent_id = null, $is_movie = null, $is_series = null, $is_news = null, $is_kids = null, $is_sports = null, $include_people = true, $include_media = true, $include_genres = true, $include_studios = true, $include_artists = true, string $contentType = self::contentTypes['get'][0])
    {
        list($response) = $this->getWithHttpInfo($search_term, $start_index, $limit, $user_id, $include_item_types, $exclude_item_types, $media_types, $parent_id, $is_movie, $is_series, $is_news, $is_kids, $is_sports, $include_people, $include_media, $include_genres, $include_studios, $include_artists, $contentType);
        return $response;
    }

    /**
     * Operation getWithHttpInfo
     *
     * Gets the search hint result.
     *
     * @param  string $search_term The search term to filter on. (required)
     * @param  int $start_index Optional. The record index to start at. All items with a lower index will be dropped from the results. (optional)
     * @param  int $limit Optional. The maximum number of records to return. (optional)
     * @param  string $user_id Optional. Supply a user id to search within a user&#39;s library or omit to search all. (optional)
     * @param  \OpenAPI\Client\Model\BaseItemKind[] $include_item_types If specified, only results with the specified item types are returned. This allows multiple, comma delimeted. (optional)
     * @param  \OpenAPI\Client\Model\BaseItemKind[] $exclude_item_types If specified, results with these item types are filtered out. This allows multiple, comma delimeted. (optional)
     * @param  string[] $media_types If specified, only results with the specified media types are returned. This allows multiple, comma delimeted. (optional)
     * @param  string $parent_id If specified, only children of the parent are returned. (optional)
     * @param  bool $is_movie Optional filter for movies. (optional)
     * @param  bool $is_series Optional filter for series. (optional)
     * @param  bool $is_news Optional filter for news. (optional)
     * @param  bool $is_kids Optional filter for kids. (optional)
     * @param  bool $is_sports Optional filter for sports. (optional)
     * @param  bool $include_people Optional filter whether to include people. (optional, default to true)
     * @param  bool $include_media Optional filter whether to include media. (optional, default to true)
     * @param  bool $include_genres Optional filter whether to include genres. (optional, default to true)
     * @param  bool $include_studios Optional filter whether to include studios. (optional, default to true)
     * @param  bool $include_artists Optional filter whether to include artists. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['get'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\SearchHintResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWithHttpInfo($search_term, $start_index = null, $limit = null, $user_id = null, $include_item_types = null, $exclude_item_types = null, $media_types = null, $parent_id = null, $is_movie = null, $is_series = null, $is_news = null, $is_kids = null, $is_sports = null, $include_people = true, $include_media = true, $include_genres = true, $include_studios = true, $include_artists = true, string $contentType = self::contentTypes['get'][0])
    {
        $request = $this->getRequest($search_term, $start_index, $limit, $user_id, $include_item_types, $exclude_item_types, $media_types, $parent_id, $is_movie, $is_series, $is_news, $is_kids, $is_sports, $include_people, $include_media, $include_genres, $include_studios, $include_artists, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\SearchHintResult' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\SearchHintResult' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\SearchHintResult', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\SearchHintResult';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\SearchHintResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getAsync
     *
     * Gets the search hint result.
     *
     * @param  string $search_term The search term to filter on. (required)
     * @param  int $start_index Optional. The record index to start at. All items with a lower index will be dropped from the results. (optional)
     * @param  int $limit Optional. The maximum number of records to return. (optional)
     * @param  string $user_id Optional. Supply a user id to search within a user&#39;s library or omit to search all. (optional)
     * @param  \OpenAPI\Client\Model\BaseItemKind[] $include_item_types If specified, only results with the specified item types are returned. This allows multiple, comma delimeted. (optional)
     * @param  \OpenAPI\Client\Model\BaseItemKind[] $exclude_item_types If specified, results with these item types are filtered out. This allows multiple, comma delimeted. (optional)
     * @param  string[] $media_types If specified, only results with the specified media types are returned. This allows multiple, comma delimeted. (optional)
     * @param  string $parent_id If specified, only children of the parent are returned. (optional)
     * @param  bool $is_movie Optional filter for movies. (optional)
     * @param  bool $is_series Optional filter for series. (optional)
     * @param  bool $is_news Optional filter for news. (optional)
     * @param  bool $is_kids Optional filter for kids. (optional)
     * @param  bool $is_sports Optional filter for sports. (optional)
     * @param  bool $include_people Optional filter whether to include people. (optional, default to true)
     * @param  bool $include_media Optional filter whether to include media. (optional, default to true)
     * @param  bool $include_genres Optional filter whether to include genres. (optional, default to true)
     * @param  bool $include_studios Optional filter whether to include studios. (optional, default to true)
     * @param  bool $include_artists Optional filter whether to include artists. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['get'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsync($search_term, $start_index = null, $limit = null, $user_id = null, $include_item_types = null, $exclude_item_types = null, $media_types = null, $parent_id = null, $is_movie = null, $is_series = null, $is_news = null, $is_kids = null, $is_sports = null, $include_people = true, $include_media = true, $include_genres = true, $include_studios = true, $include_artists = true, string $contentType = self::contentTypes['get'][0])
    {
        return $this->getAsyncWithHttpInfo($search_term, $start_index, $limit, $user_id, $include_item_types, $exclude_item_types, $media_types, $parent_id, $is_movie, $is_series, $is_news, $is_kids, $is_sports, $include_people, $include_media, $include_genres, $include_studios, $include_artists, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAsyncWithHttpInfo
     *
     * Gets the search hint result.
     *
     * @param  string $search_term The search term to filter on. (required)
     * @param  int $start_index Optional. The record index to start at. All items with a lower index will be dropped from the results. (optional)
     * @param  int $limit Optional. The maximum number of records to return. (optional)
     * @param  string $user_id Optional. Supply a user id to search within a user&#39;s library or omit to search all. (optional)
     * @param  \OpenAPI\Client\Model\BaseItemKind[] $include_item_types If specified, only results with the specified item types are returned. This allows multiple, comma delimeted. (optional)
     * @param  \OpenAPI\Client\Model\BaseItemKind[] $exclude_item_types If specified, results with these item types are filtered out. This allows multiple, comma delimeted. (optional)
     * @param  string[] $media_types If specified, only results with the specified media types are returned. This allows multiple, comma delimeted. (optional)
     * @param  string $parent_id If specified, only children of the parent are returned. (optional)
     * @param  bool $is_movie Optional filter for movies. (optional)
     * @param  bool $is_series Optional filter for series. (optional)
     * @param  bool $is_news Optional filter for news. (optional)
     * @param  bool $is_kids Optional filter for kids. (optional)
     * @param  bool $is_sports Optional filter for sports. (optional)
     * @param  bool $include_people Optional filter whether to include people. (optional, default to true)
     * @param  bool $include_media Optional filter whether to include media. (optional, default to true)
     * @param  bool $include_genres Optional filter whether to include genres. (optional, default to true)
     * @param  bool $include_studios Optional filter whether to include studios. (optional, default to true)
     * @param  bool $include_artists Optional filter whether to include artists. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['get'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAsyncWithHttpInfo($search_term, $start_index = null, $limit = null, $user_id = null, $include_item_types = null, $exclude_item_types = null, $media_types = null, $parent_id = null, $is_movie = null, $is_series = null, $is_news = null, $is_kids = null, $is_sports = null, $include_people = true, $include_media = true, $include_genres = true, $include_studios = true, $include_artists = true, string $contentType = self::contentTypes['get'][0])
    {
        $returnType = '\OpenAPI\Client\Model\SearchHintResult';
        $request = $this->getRequest($search_term, $start_index, $limit, $user_id, $include_item_types, $exclude_item_types, $media_types, $parent_id, $is_movie, $is_series, $is_news, $is_kids, $is_sports, $include_people, $include_media, $include_genres, $include_studios, $include_artists, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'get'
     *
     * @param  string $search_term The search term to filter on. (required)
     * @param  int $start_index Optional. The record index to start at. All items with a lower index will be dropped from the results. (optional)
     * @param  int $limit Optional. The maximum number of records to return. (optional)
     * @param  string $user_id Optional. Supply a user id to search within a user&#39;s library or omit to search all. (optional)
     * @param  \OpenAPI\Client\Model\BaseItemKind[] $include_item_types If specified, only results with the specified item types are returned. This allows multiple, comma delimeted. (optional)
     * @param  \OpenAPI\Client\Model\BaseItemKind[] $exclude_item_types If specified, results with these item types are filtered out. This allows multiple, comma delimeted. (optional)
     * @param  string[] $media_types If specified, only results with the specified media types are returned. This allows multiple, comma delimeted. (optional)
     * @param  string $parent_id If specified, only children of the parent are returned. (optional)
     * @param  bool $is_movie Optional filter for movies. (optional)
     * @param  bool $is_series Optional filter for series. (optional)
     * @param  bool $is_news Optional filter for news. (optional)
     * @param  bool $is_kids Optional filter for kids. (optional)
     * @param  bool $is_sports Optional filter for sports. (optional)
     * @param  bool $include_people Optional filter whether to include people. (optional, default to true)
     * @param  bool $include_media Optional filter whether to include media. (optional, default to true)
     * @param  bool $include_genres Optional filter whether to include genres. (optional, default to true)
     * @param  bool $include_studios Optional filter whether to include studios. (optional, default to true)
     * @param  bool $include_artists Optional filter whether to include artists. (optional, default to true)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['get'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getRequest($search_term, $start_index = null, $limit = null, $user_id = null, $include_item_types = null, $exclude_item_types = null, $media_types = null, $parent_id = null, $is_movie = null, $is_series = null, $is_news = null, $is_kids = null, $is_sports = null, $include_people = true, $include_media = true, $include_genres = true, $include_studios = true, $include_artists = true, string $contentType = self::contentTypes['get'][0])
    {

        // verify the required parameter 'search_term' is set
        if ($search_term === null || (is_array($search_term) && count($search_term) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $search_term when calling get'
            );
        }



















        $resourcePath = '/Search/Hints';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $start_index,
            'startIndex', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $user_id,
            'userId', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $search_term,
            'searchTerm', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include_item_types,
            'includeItemTypes', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $exclude_item_types,
            'excludeItemTypes', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $media_types,
            'mediaTypes', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $parent_id,
            'parentId', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $is_movie,
            'isMovie', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $is_series,
            'isSeries', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $is_news,
            'isNews', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $is_kids,
            'isKids', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $is_sports,
            'isSports', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include_people,
            'includePeople', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include_media,
            'includeMedia', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include_genres,
            'includeGenres', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include_studios,
            'includeStudios', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $include_artists,
            'includeArtists', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', 'application/json; profile="CamelCase"', 'application/json; profile="PascalCase"', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}