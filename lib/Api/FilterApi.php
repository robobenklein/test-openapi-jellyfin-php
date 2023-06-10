<?php
/**
 * FilterApi
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
 * FilterApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FilterApi
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
        'getQueryFilters' => [
            'application/json',
        ],
        'getQueryFiltersLegacy' => [
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
     * Operation getQueryFilters
     *
     * Gets query filters.
     *
     * @param  string $user_id Optional. User id. (optional)
     * @param  string $parent_id Optional. Specify this to localize the search to a specific item or folder. Omit to use the root. (optional)
     * @param  \OpenAPI\Client\Model\BaseItemKind[] $include_item_types Optional. If specified, results will be filtered based on item type. This allows multiple, comma delimited. (optional)
     * @param  bool $is_airing Optional. Is item airing. (optional)
     * @param  bool $is_movie Optional. Is item movie. (optional)
     * @param  bool $is_sports Optional. Is item sports. (optional)
     * @param  bool $is_kids Optional. Is item kids. (optional)
     * @param  bool $is_news Optional. Is item news. (optional)
     * @param  bool $is_series Optional. Is item series. (optional)
     * @param  bool $recursive Optional. Search recursive. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getQueryFilters'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\QueryFilters
     */
    public function getQueryFilters($user_id = null, $parent_id = null, $include_item_types = null, $is_airing = null, $is_movie = null, $is_sports = null, $is_kids = null, $is_news = null, $is_series = null, $recursive = null, string $contentType = self::contentTypes['getQueryFilters'][0])
    {
        list($response) = $this->getQueryFiltersWithHttpInfo($user_id, $parent_id, $include_item_types, $is_airing, $is_movie, $is_sports, $is_kids, $is_news, $is_series, $recursive, $contentType);
        return $response;
    }

    /**
     * Operation getQueryFiltersWithHttpInfo
     *
     * Gets query filters.
     *
     * @param  string $user_id Optional. User id. (optional)
     * @param  string $parent_id Optional. Specify this to localize the search to a specific item or folder. Omit to use the root. (optional)
     * @param  \OpenAPI\Client\Model\BaseItemKind[] $include_item_types Optional. If specified, results will be filtered based on item type. This allows multiple, comma delimited. (optional)
     * @param  bool $is_airing Optional. Is item airing. (optional)
     * @param  bool $is_movie Optional. Is item movie. (optional)
     * @param  bool $is_sports Optional. Is item sports. (optional)
     * @param  bool $is_kids Optional. Is item kids. (optional)
     * @param  bool $is_news Optional. Is item news. (optional)
     * @param  bool $is_series Optional. Is item series. (optional)
     * @param  bool $recursive Optional. Search recursive. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getQueryFilters'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\QueryFilters, HTTP status code, HTTP response headers (array of strings)
     */
    public function getQueryFiltersWithHttpInfo($user_id = null, $parent_id = null, $include_item_types = null, $is_airing = null, $is_movie = null, $is_sports = null, $is_kids = null, $is_news = null, $is_series = null, $recursive = null, string $contentType = self::contentTypes['getQueryFilters'][0])
    {
        $request = $this->getQueryFiltersRequest($user_id, $parent_id, $include_item_types, $is_airing, $is_movie, $is_sports, $is_kids, $is_news, $is_series, $recursive, $contentType);

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
                    if ('\OpenAPI\Client\Model\QueryFilters' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\QueryFilters' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\QueryFilters', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\QueryFilters';
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
                        '\OpenAPI\Client\Model\QueryFilters',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getQueryFiltersAsync
     *
     * Gets query filters.
     *
     * @param  string $user_id Optional. User id. (optional)
     * @param  string $parent_id Optional. Specify this to localize the search to a specific item or folder. Omit to use the root. (optional)
     * @param  \OpenAPI\Client\Model\BaseItemKind[] $include_item_types Optional. If specified, results will be filtered based on item type. This allows multiple, comma delimited. (optional)
     * @param  bool $is_airing Optional. Is item airing. (optional)
     * @param  bool $is_movie Optional. Is item movie. (optional)
     * @param  bool $is_sports Optional. Is item sports. (optional)
     * @param  bool $is_kids Optional. Is item kids. (optional)
     * @param  bool $is_news Optional. Is item news. (optional)
     * @param  bool $is_series Optional. Is item series. (optional)
     * @param  bool $recursive Optional. Search recursive. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getQueryFilters'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getQueryFiltersAsync($user_id = null, $parent_id = null, $include_item_types = null, $is_airing = null, $is_movie = null, $is_sports = null, $is_kids = null, $is_news = null, $is_series = null, $recursive = null, string $contentType = self::contentTypes['getQueryFilters'][0])
    {
        return $this->getQueryFiltersAsyncWithHttpInfo($user_id, $parent_id, $include_item_types, $is_airing, $is_movie, $is_sports, $is_kids, $is_news, $is_series, $recursive, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getQueryFiltersAsyncWithHttpInfo
     *
     * Gets query filters.
     *
     * @param  string $user_id Optional. User id. (optional)
     * @param  string $parent_id Optional. Specify this to localize the search to a specific item or folder. Omit to use the root. (optional)
     * @param  \OpenAPI\Client\Model\BaseItemKind[] $include_item_types Optional. If specified, results will be filtered based on item type. This allows multiple, comma delimited. (optional)
     * @param  bool $is_airing Optional. Is item airing. (optional)
     * @param  bool $is_movie Optional. Is item movie. (optional)
     * @param  bool $is_sports Optional. Is item sports. (optional)
     * @param  bool $is_kids Optional. Is item kids. (optional)
     * @param  bool $is_news Optional. Is item news. (optional)
     * @param  bool $is_series Optional. Is item series. (optional)
     * @param  bool $recursive Optional. Search recursive. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getQueryFilters'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getQueryFiltersAsyncWithHttpInfo($user_id = null, $parent_id = null, $include_item_types = null, $is_airing = null, $is_movie = null, $is_sports = null, $is_kids = null, $is_news = null, $is_series = null, $recursive = null, string $contentType = self::contentTypes['getQueryFilters'][0])
    {
        $returnType = '\OpenAPI\Client\Model\QueryFilters';
        $request = $this->getQueryFiltersRequest($user_id, $parent_id, $include_item_types, $is_airing, $is_movie, $is_sports, $is_kids, $is_news, $is_series, $recursive, $contentType);

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
     * Create request for operation 'getQueryFilters'
     *
     * @param  string $user_id Optional. User id. (optional)
     * @param  string $parent_id Optional. Specify this to localize the search to a specific item or folder. Omit to use the root. (optional)
     * @param  \OpenAPI\Client\Model\BaseItemKind[] $include_item_types Optional. If specified, results will be filtered based on item type. This allows multiple, comma delimited. (optional)
     * @param  bool $is_airing Optional. Is item airing. (optional)
     * @param  bool $is_movie Optional. Is item movie. (optional)
     * @param  bool $is_sports Optional. Is item sports. (optional)
     * @param  bool $is_kids Optional. Is item kids. (optional)
     * @param  bool $is_news Optional. Is item news. (optional)
     * @param  bool $is_series Optional. Is item series. (optional)
     * @param  bool $recursive Optional. Search recursive. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getQueryFilters'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getQueryFiltersRequest($user_id = null, $parent_id = null, $include_item_types = null, $is_airing = null, $is_movie = null, $is_sports = null, $is_kids = null, $is_news = null, $is_series = null, $recursive = null, string $contentType = self::contentTypes['getQueryFilters'][0])
    {












        $resourcePath = '/Items/Filters2';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
            $parent_id,
            'parentId', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
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
            $is_airing,
            'isAiring', // param base name
            'boolean', // openApiType
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
            $is_sports,
            'isSports', // param base name
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
            $is_news,
            'isNews', // param base name
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
            $recursive,
            'recursive', // param base name
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
     * Operation getQueryFiltersLegacy
     *
     * Gets legacy query filters.
     *
     * @param  string $user_id Optional. User id. (optional)
     * @param  string $parent_id Optional. Parent id. (optional)
     * @param  \OpenAPI\Client\Model\BaseItemKind[] $include_item_types Optional. If specified, results will be filtered based on item type. This allows multiple, comma delimited. (optional)
     * @param  string[] $media_types Optional. Filter by MediaType. Allows multiple, comma delimited. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getQueryFiltersLegacy'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\QueryFiltersLegacy
     */
    public function getQueryFiltersLegacy($user_id = null, $parent_id = null, $include_item_types = null, $media_types = null, string $contentType = self::contentTypes['getQueryFiltersLegacy'][0])
    {
        list($response) = $this->getQueryFiltersLegacyWithHttpInfo($user_id, $parent_id, $include_item_types, $media_types, $contentType);
        return $response;
    }

    /**
     * Operation getQueryFiltersLegacyWithHttpInfo
     *
     * Gets legacy query filters.
     *
     * @param  string $user_id Optional. User id. (optional)
     * @param  string $parent_id Optional. Parent id. (optional)
     * @param  \OpenAPI\Client\Model\BaseItemKind[] $include_item_types Optional. If specified, results will be filtered based on item type. This allows multiple, comma delimited. (optional)
     * @param  string[] $media_types Optional. Filter by MediaType. Allows multiple, comma delimited. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getQueryFiltersLegacy'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\QueryFiltersLegacy, HTTP status code, HTTP response headers (array of strings)
     */
    public function getQueryFiltersLegacyWithHttpInfo($user_id = null, $parent_id = null, $include_item_types = null, $media_types = null, string $contentType = self::contentTypes['getQueryFiltersLegacy'][0])
    {
        $request = $this->getQueryFiltersLegacyRequest($user_id, $parent_id, $include_item_types, $media_types, $contentType);

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
                    if ('\OpenAPI\Client\Model\QueryFiltersLegacy' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\QueryFiltersLegacy' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\QueryFiltersLegacy', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\QueryFiltersLegacy';
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
                        '\OpenAPI\Client\Model\QueryFiltersLegacy',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getQueryFiltersLegacyAsync
     *
     * Gets legacy query filters.
     *
     * @param  string $user_id Optional. User id. (optional)
     * @param  string $parent_id Optional. Parent id. (optional)
     * @param  \OpenAPI\Client\Model\BaseItemKind[] $include_item_types Optional. If specified, results will be filtered based on item type. This allows multiple, comma delimited. (optional)
     * @param  string[] $media_types Optional. Filter by MediaType. Allows multiple, comma delimited. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getQueryFiltersLegacy'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getQueryFiltersLegacyAsync($user_id = null, $parent_id = null, $include_item_types = null, $media_types = null, string $contentType = self::contentTypes['getQueryFiltersLegacy'][0])
    {
        return $this->getQueryFiltersLegacyAsyncWithHttpInfo($user_id, $parent_id, $include_item_types, $media_types, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getQueryFiltersLegacyAsyncWithHttpInfo
     *
     * Gets legacy query filters.
     *
     * @param  string $user_id Optional. User id. (optional)
     * @param  string $parent_id Optional. Parent id. (optional)
     * @param  \OpenAPI\Client\Model\BaseItemKind[] $include_item_types Optional. If specified, results will be filtered based on item type. This allows multiple, comma delimited. (optional)
     * @param  string[] $media_types Optional. Filter by MediaType. Allows multiple, comma delimited. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getQueryFiltersLegacy'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getQueryFiltersLegacyAsyncWithHttpInfo($user_id = null, $parent_id = null, $include_item_types = null, $media_types = null, string $contentType = self::contentTypes['getQueryFiltersLegacy'][0])
    {
        $returnType = '\OpenAPI\Client\Model\QueryFiltersLegacy';
        $request = $this->getQueryFiltersLegacyRequest($user_id, $parent_id, $include_item_types, $media_types, $contentType);

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
     * Create request for operation 'getQueryFiltersLegacy'
     *
     * @param  string $user_id Optional. User id. (optional)
     * @param  string $parent_id Optional. Parent id. (optional)
     * @param  \OpenAPI\Client\Model\BaseItemKind[] $include_item_types Optional. If specified, results will be filtered based on item type. This allows multiple, comma delimited. (optional)
     * @param  string[] $media_types Optional. Filter by MediaType. Allows multiple, comma delimited. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getQueryFiltersLegacy'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getQueryFiltersLegacyRequest($user_id = null, $parent_id = null, $include_item_types = null, $media_types = null, string $contentType = self::contentTypes['getQueryFiltersLegacy'][0])
    {






        $resourcePath = '/Items/Filters';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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
            $parent_id,
            'parentId', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
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
            $media_types,
            'mediaTypes', // param base name
            'array', // openApiType
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