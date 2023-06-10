<?php
/**
 * DisplayPreferencesApi
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
 * DisplayPreferencesApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DisplayPreferencesApi
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
        'getDisplayPreferences' => [
            'application/json',
        ],
        'updateDisplayPreferences' => [
            'application/json',
            'text/json',
            'application/*+json',
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
     * Operation getDisplayPreferences
     *
     * Get Display Preferences.
     *
     * @param  string $display_preferences_id Display preferences id. (required)
     * @param  string $user_id User id. (required)
     * @param  string $client Client. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getDisplayPreferences'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\DisplayPreferencesDto
     */
    public function getDisplayPreferences($display_preferences_id, $user_id, $client, string $contentType = self::contentTypes['getDisplayPreferences'][0])
    {
        list($response) = $this->getDisplayPreferencesWithHttpInfo($display_preferences_id, $user_id, $client, $contentType);
        return $response;
    }

    /**
     * Operation getDisplayPreferencesWithHttpInfo
     *
     * Get Display Preferences.
     *
     * @param  string $display_preferences_id Display preferences id. (required)
     * @param  string $user_id User id. (required)
     * @param  string $client Client. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getDisplayPreferences'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\DisplayPreferencesDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDisplayPreferencesWithHttpInfo($display_preferences_id, $user_id, $client, string $contentType = self::contentTypes['getDisplayPreferences'][0])
    {
        $request = $this->getDisplayPreferencesRequest($display_preferences_id, $user_id, $client, $contentType);

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
                    if ('\OpenAPI\Client\Model\DisplayPreferencesDto' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\OpenAPI\Client\Model\DisplayPreferencesDto' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\DisplayPreferencesDto', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\DisplayPreferencesDto';
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
                        '\OpenAPI\Client\Model\DisplayPreferencesDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getDisplayPreferencesAsync
     *
     * Get Display Preferences.
     *
     * @param  string $display_preferences_id Display preferences id. (required)
     * @param  string $user_id User id. (required)
     * @param  string $client Client. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getDisplayPreferences'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDisplayPreferencesAsync($display_preferences_id, $user_id, $client, string $contentType = self::contentTypes['getDisplayPreferences'][0])
    {
        return $this->getDisplayPreferencesAsyncWithHttpInfo($display_preferences_id, $user_id, $client, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDisplayPreferencesAsyncWithHttpInfo
     *
     * Get Display Preferences.
     *
     * @param  string $display_preferences_id Display preferences id. (required)
     * @param  string $user_id User id. (required)
     * @param  string $client Client. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getDisplayPreferences'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDisplayPreferencesAsyncWithHttpInfo($display_preferences_id, $user_id, $client, string $contentType = self::contentTypes['getDisplayPreferences'][0])
    {
        $returnType = '\OpenAPI\Client\Model\DisplayPreferencesDto';
        $request = $this->getDisplayPreferencesRequest($display_preferences_id, $user_id, $client, $contentType);

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
     * Create request for operation 'getDisplayPreferences'
     *
     * @param  string $display_preferences_id Display preferences id. (required)
     * @param  string $user_id User id. (required)
     * @param  string $client Client. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getDisplayPreferences'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getDisplayPreferencesRequest($display_preferences_id, $user_id, $client, string $contentType = self::contentTypes['getDisplayPreferences'][0])
    {

        // verify the required parameter 'display_preferences_id' is set
        if ($display_preferences_id === null || (is_array($display_preferences_id) && count($display_preferences_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $display_preferences_id when calling getDisplayPreferences'
            );
        }

        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling getDisplayPreferences'
            );
        }

        // verify the required parameter 'client' is set
        if ($client === null || (is_array($client) && count($client) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client when calling getDisplayPreferences'
            );
        }


        $resourcePath = '/DisplayPreferences/{displayPreferencesId}';
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
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $client,
            'client', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);


        // path params
        if ($display_preferences_id !== null) {
            $resourcePath = str_replace(
                '{' . 'displayPreferencesId' . '}',
                ObjectSerializer::toPathValue($display_preferences_id),
                $resourcePath
            );
        }


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
     * Operation updateDisplayPreferences
     *
     * Update Display Preferences.
     *
     * @param  string $display_preferences_id Display preferences id. (required)
     * @param  string $user_id User Id. (required)
     * @param  string $client Client. (required)
     * @param  \OpenAPI\Client\Model\UpdateDisplayPreferencesRequest $update_display_preferences_request New Display Preferences object. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateDisplayPreferences'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function updateDisplayPreferences($display_preferences_id, $user_id, $client, $update_display_preferences_request, string $contentType = self::contentTypes['updateDisplayPreferences'][0])
    {
        $this->updateDisplayPreferencesWithHttpInfo($display_preferences_id, $user_id, $client, $update_display_preferences_request, $contentType);
    }

    /**
     * Operation updateDisplayPreferencesWithHttpInfo
     *
     * Update Display Preferences.
     *
     * @param  string $display_preferences_id Display preferences id. (required)
     * @param  string $user_id User Id. (required)
     * @param  string $client Client. (required)
     * @param  \OpenAPI\Client\Model\UpdateDisplayPreferencesRequest $update_display_preferences_request New Display Preferences object. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateDisplayPreferences'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateDisplayPreferencesWithHttpInfo($display_preferences_id, $user_id, $client, $update_display_preferences_request, string $contentType = self::contentTypes['updateDisplayPreferences'][0])
    {
        $request = $this->updateDisplayPreferencesRequest($display_preferences_id, $user_id, $client, $update_display_preferences_request, $contentType);

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
     * Operation updateDisplayPreferencesAsync
     *
     * Update Display Preferences.
     *
     * @param  string $display_preferences_id Display preferences id. (required)
     * @param  string $user_id User Id. (required)
     * @param  string $client Client. (required)
     * @param  \OpenAPI\Client\Model\UpdateDisplayPreferencesRequest $update_display_preferences_request New Display Preferences object. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateDisplayPreferences'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDisplayPreferencesAsync($display_preferences_id, $user_id, $client, $update_display_preferences_request, string $contentType = self::contentTypes['updateDisplayPreferences'][0])
    {
        return $this->updateDisplayPreferencesAsyncWithHttpInfo($display_preferences_id, $user_id, $client, $update_display_preferences_request, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateDisplayPreferencesAsyncWithHttpInfo
     *
     * Update Display Preferences.
     *
     * @param  string $display_preferences_id Display preferences id. (required)
     * @param  string $user_id User Id. (required)
     * @param  string $client Client. (required)
     * @param  \OpenAPI\Client\Model\UpdateDisplayPreferencesRequest $update_display_preferences_request New Display Preferences object. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateDisplayPreferences'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateDisplayPreferencesAsyncWithHttpInfo($display_preferences_id, $user_id, $client, $update_display_preferences_request, string $contentType = self::contentTypes['updateDisplayPreferences'][0])
    {
        $returnType = '';
        $request = $this->updateDisplayPreferencesRequest($display_preferences_id, $user_id, $client, $update_display_preferences_request, $contentType);

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
     * Create request for operation 'updateDisplayPreferences'
     *
     * @param  string $display_preferences_id Display preferences id. (required)
     * @param  string $user_id User Id. (required)
     * @param  string $client Client. (required)
     * @param  \OpenAPI\Client\Model\UpdateDisplayPreferencesRequest $update_display_preferences_request New Display Preferences object. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['updateDisplayPreferences'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateDisplayPreferencesRequest($display_preferences_id, $user_id, $client, $update_display_preferences_request, string $contentType = self::contentTypes['updateDisplayPreferences'][0])
    {

        // verify the required parameter 'display_preferences_id' is set
        if ($display_preferences_id === null || (is_array($display_preferences_id) && count($display_preferences_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $display_preferences_id when calling updateDisplayPreferences'
            );
        }

        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling updateDisplayPreferences'
            );
        }

        // verify the required parameter 'client' is set
        if ($client === null || (is_array($client) && count($client) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client when calling updateDisplayPreferences'
            );
        }

        // verify the required parameter 'update_display_preferences_request' is set
        if ($update_display_preferences_request === null || (is_array($update_display_preferences_request) && count($update_display_preferences_request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $update_display_preferences_request when calling updateDisplayPreferences'
            );
        }


        $resourcePath = '/DisplayPreferences/{displayPreferencesId}';
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
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $client,
            'client', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);


        // path params
        if ($display_preferences_id !== null) {
            $resourcePath = str_replace(
                '{' . 'displayPreferencesId' . '}',
                ObjectSerializer::toPathValue($display_preferences_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($update_display_preferences_request)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($update_display_preferences_request));
            } else {
                $httpBody = $update_display_preferences_request;
            }
        } elseif (count($formParams) > 0) {
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
            'POST',
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
