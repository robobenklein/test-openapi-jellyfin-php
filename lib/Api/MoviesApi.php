<?php
/**
 * MoviesApi
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
 * MoviesApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MoviesApi
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
        'getMovieRecommendations' => [
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
     * Operation getMovieRecommendations
     *
     * Gets movie recommendations.
     *
     * @param  string $user_id Optional. Filter by user id, and attach user data. (optional)
     * @param  string $parent_id Specify this to localize the search to a specific item or folder. Omit to use the root. (optional)
     * @param  \OpenAPI\Client\Model\ItemFields[] $fields Optional. The fields to return. (optional)
     * @param  int $category_limit The max number of categories to return. (optional, default to 5)
     * @param  int $item_limit The max number of items to return per category. (optional, default to 8)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getMovieRecommendations'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\RecommendationDto[]
     */
    public function getMovieRecommendations($user_id = null, $parent_id = null, $fields = null, $category_limit = 5, $item_limit = 8, string $contentType = self::contentTypes['getMovieRecommendations'][0])
    {
        list($response) = $this->getMovieRecommendationsWithHttpInfo($user_id, $parent_id, $fields, $category_limit, $item_limit, $contentType);
        return $response;
    }

    /**
     * Operation getMovieRecommendationsWithHttpInfo
     *
     * Gets movie recommendations.
     *
     * @param  string $user_id Optional. Filter by user id, and attach user data. (optional)
     * @param  string $parent_id Specify this to localize the search to a specific item or folder. Omit to use the root. (optional)
     * @param  \OpenAPI\Client\Model\ItemFields[] $fields Optional. The fields to return. (optional)
     * @param  int $category_limit The max number of categories to return. (optional, default to 5)
     * @param  int $item_limit The max number of items to return per category. (optional, default to 8)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getMovieRecommendations'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\RecommendationDto[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getMovieRecommendationsWithHttpInfo($user_id = null, $parent_id = null, $fields = null, $category_limit = 5, $item_limit = 8, string $contentType = self::contentTypes['getMovieRecommendations'][0])
    {
        $request = $this->getMovieRecommendationsRequest($user_id, $parent_id, $fields, $category_limit, $item_limit, $contentType);

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
                    if ('\OpenAPI\Client\Model\RecommendationDto[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\RecommendationDto[]' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\RecommendationDto[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\RecommendationDto[]';
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
                        '\OpenAPI\Client\Model\RecommendationDto[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getMovieRecommendationsAsync
     *
     * Gets movie recommendations.
     *
     * @param  string $user_id Optional. Filter by user id, and attach user data. (optional)
     * @param  string $parent_id Specify this to localize the search to a specific item or folder. Omit to use the root. (optional)
     * @param  \OpenAPI\Client\Model\ItemFields[] $fields Optional. The fields to return. (optional)
     * @param  int $category_limit The max number of categories to return. (optional, default to 5)
     * @param  int $item_limit The max number of items to return per category. (optional, default to 8)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getMovieRecommendations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMovieRecommendationsAsync($user_id = null, $parent_id = null, $fields = null, $category_limit = 5, $item_limit = 8, string $contentType = self::contentTypes['getMovieRecommendations'][0])
    {
        return $this->getMovieRecommendationsAsyncWithHttpInfo($user_id, $parent_id, $fields, $category_limit, $item_limit, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMovieRecommendationsAsyncWithHttpInfo
     *
     * Gets movie recommendations.
     *
     * @param  string $user_id Optional. Filter by user id, and attach user data. (optional)
     * @param  string $parent_id Specify this to localize the search to a specific item or folder. Omit to use the root. (optional)
     * @param  \OpenAPI\Client\Model\ItemFields[] $fields Optional. The fields to return. (optional)
     * @param  int $category_limit The max number of categories to return. (optional, default to 5)
     * @param  int $item_limit The max number of items to return per category. (optional, default to 8)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getMovieRecommendations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMovieRecommendationsAsyncWithHttpInfo($user_id = null, $parent_id = null, $fields = null, $category_limit = 5, $item_limit = 8, string $contentType = self::contentTypes['getMovieRecommendations'][0])
    {
        $returnType = '\OpenAPI\Client\Model\RecommendationDto[]';
        $request = $this->getMovieRecommendationsRequest($user_id, $parent_id, $fields, $category_limit, $item_limit, $contentType);

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
     * Create request for operation 'getMovieRecommendations'
     *
     * @param  string $user_id Optional. Filter by user id, and attach user data. (optional)
     * @param  string $parent_id Specify this to localize the search to a specific item or folder. Omit to use the root. (optional)
     * @param  \OpenAPI\Client\Model\ItemFields[] $fields Optional. The fields to return. (optional)
     * @param  int $category_limit The max number of categories to return. (optional, default to 5)
     * @param  int $item_limit The max number of items to return per category. (optional, default to 8)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getMovieRecommendations'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getMovieRecommendationsRequest($user_id = null, $parent_id = null, $fields = null, $category_limit = 5, $item_limit = 8, string $contentType = self::contentTypes['getMovieRecommendations'][0])
    {







        $resourcePath = '/Movies/Recommendations';
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
            $fields,
            'fields', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $category_limit,
            'categoryLimit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $item_limit,
            'itemLimit', // param base name
            'integer', // openApiType
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
