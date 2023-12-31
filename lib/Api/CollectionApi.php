<?php
/**
 * CollectionApi
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
 * CollectionApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CollectionApi
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
        'addToCollection' => [
            'application/json',
        ],
        'createCollection' => [
            'application/json',
        ],
        'removeFromCollection' => [
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
     * Operation addToCollection
     *
     * Adds items to a collection.
     *
     * @param  string $collection_id The collection id. (required)
     * @param  string[] $ids Item ids, comma delimited. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addToCollection'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function addToCollection($collection_id, $ids, string $contentType = self::contentTypes['addToCollection'][0])
    {
        $this->addToCollectionWithHttpInfo($collection_id, $ids, $contentType);
    }

    /**
     * Operation addToCollectionWithHttpInfo
     *
     * Adds items to a collection.
     *
     * @param  string $collection_id The collection id. (required)
     * @param  string[] $ids Item ids, comma delimited. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addToCollection'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function addToCollectionWithHttpInfo($collection_id, $ids, string $contentType = self::contentTypes['addToCollection'][0])
    {
        $request = $this->addToCollectionRequest($collection_id, $ids, $contentType);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation addToCollectionAsync
     *
     * Adds items to a collection.
     *
     * @param  string $collection_id The collection id. (required)
     * @param  string[] $ids Item ids, comma delimited. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addToCollection'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addToCollectionAsync($collection_id, $ids, string $contentType = self::contentTypes['addToCollection'][0])
    {
        return $this->addToCollectionAsyncWithHttpInfo($collection_id, $ids, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addToCollectionAsyncWithHttpInfo
     *
     * Adds items to a collection.
     *
     * @param  string $collection_id The collection id. (required)
     * @param  string[] $ids Item ids, comma delimited. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addToCollection'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addToCollectionAsyncWithHttpInfo($collection_id, $ids, string $contentType = self::contentTypes['addToCollection'][0])
    {
        $returnType = '';
        $request = $this->addToCollectionRequest($collection_id, $ids, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'addToCollection'
     *
     * @param  string $collection_id The collection id. (required)
     * @param  string[] $ids Item ids, comma delimited. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['addToCollection'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function addToCollectionRequest($collection_id, $ids, string $contentType = self::contentTypes['addToCollection'][0])
    {

        // verify the required parameter 'collection_id' is set
        if ($collection_id === null || (is_array($collection_id) && count($collection_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $collection_id when calling addToCollection'
            );
        }

        // verify the required parameter 'ids' is set
        if ($ids === null || (is_array($ids) && count($ids) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ids when calling addToCollection'
            );
        }


        $resourcePath = '/Collections/{collectionId}/Items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ids,
            'ids', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);


        // path params
        if ($collection_id !== null) {
            $resourcePath = str_replace(
                '{' . 'collectionId' . '}',
                ObjectSerializer::toPathValue($collection_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            [],
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
        $apiKey = $this->config->getApiKeyWithPrefix('X-Emby-Token');
        if ($apiKey !== null) {
            $headers['X-Emby-Token'] = $apiKey;
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation createCollection
     *
     * Creates a new collection.
     *
     * @param  string $name The name of the collection. (optional)
     * @param  string[] $ids Item Ids to add to the collection. (optional)
     * @param  string $parent_id Optional. Create the collection within a specific folder. (optional)
     * @param  bool $is_locked Whether or not to lock the new collection. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createCollection'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\CollectionCreationResult
     */
    public function createCollection($name = null, $ids = null, $parent_id = null, $is_locked = false, string $contentType = self::contentTypes['createCollection'][0])
    {
        list($response) = $this->createCollectionWithHttpInfo($name, $ids, $parent_id, $is_locked, $contentType);
        return $response;
    }

    /**
     * Operation createCollectionWithHttpInfo
     *
     * Creates a new collection.
     *
     * @param  string $name The name of the collection. (optional)
     * @param  string[] $ids Item Ids to add to the collection. (optional)
     * @param  string $parent_id Optional. Create the collection within a specific folder. (optional)
     * @param  bool $is_locked Whether or not to lock the new collection. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createCollection'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\CollectionCreationResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function createCollectionWithHttpInfo($name = null, $ids = null, $parent_id = null, $is_locked = false, string $contentType = self::contentTypes['createCollection'][0])
    {
        $request = $this->createCollectionRequest($name, $ids, $parent_id, $is_locked, $contentType);

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
                    if ('\OpenAPI\Client\Model\CollectionCreationResult' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\CollectionCreationResult' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\CollectionCreationResult', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\CollectionCreationResult';
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
                        '\OpenAPI\Client\Model\CollectionCreationResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createCollectionAsync
     *
     * Creates a new collection.
     *
     * @param  string $name The name of the collection. (optional)
     * @param  string[] $ids Item Ids to add to the collection. (optional)
     * @param  string $parent_id Optional. Create the collection within a specific folder. (optional)
     * @param  bool $is_locked Whether or not to lock the new collection. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createCollection'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createCollectionAsync($name = null, $ids = null, $parent_id = null, $is_locked = false, string $contentType = self::contentTypes['createCollection'][0])
    {
        return $this->createCollectionAsyncWithHttpInfo($name, $ids, $parent_id, $is_locked, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createCollectionAsyncWithHttpInfo
     *
     * Creates a new collection.
     *
     * @param  string $name The name of the collection. (optional)
     * @param  string[] $ids Item Ids to add to the collection. (optional)
     * @param  string $parent_id Optional. Create the collection within a specific folder. (optional)
     * @param  bool $is_locked Whether or not to lock the new collection. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createCollection'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createCollectionAsyncWithHttpInfo($name = null, $ids = null, $parent_id = null, $is_locked = false, string $contentType = self::contentTypes['createCollection'][0])
    {
        $returnType = '\OpenAPI\Client\Model\CollectionCreationResult';
        $request = $this->createCollectionRequest($name, $ids, $parent_id, $is_locked, $contentType);

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
     * Create request for operation 'createCollection'
     *
     * @param  string $name The name of the collection. (optional)
     * @param  string[] $ids Item Ids to add to the collection. (optional)
     * @param  string $parent_id Optional. Create the collection within a specific folder. (optional)
     * @param  bool $is_locked Whether or not to lock the new collection. (optional, default to false)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createCollection'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createCollectionRequest($name = null, $ids = null, $parent_id = null, $is_locked = false, string $contentType = self::contentTypes['createCollection'][0])
    {






        $resourcePath = '/Collections';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $name,
            'name', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ids,
            'ids', // param base name
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
            $is_locked,
            'isLocked', // param base name
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
        $apiKey = $this->config->getApiKeyWithPrefix('X-Emby-Token');
        if ($apiKey !== null) {
            $headers['X-Emby-Token'] = $apiKey;
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
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation removeFromCollection
     *
     * Removes items from a collection.
     *
     * @param  string $collection_id The collection id. (required)
     * @param  string[] $ids Item ids, comma delimited. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['removeFromCollection'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function removeFromCollection($collection_id, $ids, string $contentType = self::contentTypes['removeFromCollection'][0])
    {
        $this->removeFromCollectionWithHttpInfo($collection_id, $ids, $contentType);
    }

    /**
     * Operation removeFromCollectionWithHttpInfo
     *
     * Removes items from a collection.
     *
     * @param  string $collection_id The collection id. (required)
     * @param  string[] $ids Item ids, comma delimited. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['removeFromCollection'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function removeFromCollectionWithHttpInfo($collection_id, $ids, string $contentType = self::contentTypes['removeFromCollection'][0])
    {
        $request = $this->removeFromCollectionRequest($collection_id, $ids, $contentType);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation removeFromCollectionAsync
     *
     * Removes items from a collection.
     *
     * @param  string $collection_id The collection id. (required)
     * @param  string[] $ids Item ids, comma delimited. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['removeFromCollection'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeFromCollectionAsync($collection_id, $ids, string $contentType = self::contentTypes['removeFromCollection'][0])
    {
        return $this->removeFromCollectionAsyncWithHttpInfo($collection_id, $ids, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation removeFromCollectionAsyncWithHttpInfo
     *
     * Removes items from a collection.
     *
     * @param  string $collection_id The collection id. (required)
     * @param  string[] $ids Item ids, comma delimited. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['removeFromCollection'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function removeFromCollectionAsyncWithHttpInfo($collection_id, $ids, string $contentType = self::contentTypes['removeFromCollection'][0])
    {
        $returnType = '';
        $request = $this->removeFromCollectionRequest($collection_id, $ids, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'removeFromCollection'
     *
     * @param  string $collection_id The collection id. (required)
     * @param  string[] $ids Item ids, comma delimited. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['removeFromCollection'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function removeFromCollectionRequest($collection_id, $ids, string $contentType = self::contentTypes['removeFromCollection'][0])
    {

        // verify the required parameter 'collection_id' is set
        if ($collection_id === null || (is_array($collection_id) && count($collection_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $collection_id when calling removeFromCollection'
            );
        }

        // verify the required parameter 'ids' is set
        if ($ids === null || (is_array($ids) && count($ids) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ids when calling removeFromCollection'
            );
        }


        $resourcePath = '/Collections/{collectionId}/Items';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $ids,
            'ids', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);


        // path params
        if ($collection_id !== null) {
            $resourcePath = str_replace(
                '{' . 'collectionId' . '}',
                ObjectSerializer::toPathValue($collection_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            [],
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
        $apiKey = $this->config->getApiKeyWithPrefix('X-Emby-Token');
        if ($apiKey !== null) {
            $headers['X-Emby-Token'] = $apiKey;
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
            'DELETE',
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
