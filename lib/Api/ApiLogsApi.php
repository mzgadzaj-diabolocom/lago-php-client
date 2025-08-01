<?php
/**
 * ApiLogsApi
 * PHP version 8.1
 *
 * @category Class
 * @package  Lago\LagoPhpClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lago API documentation
 *
 * Lago API allows your application to push customer information and metrics (events) from your application to the billing application.
 *
 * The version of the OpenAPI document: 1.31.0
 * Contact: tech@getlago.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.14.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Lago\LagoPhpClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Lago\LagoPhpClient\ApiException;
use Lago\LagoPhpClient\Configuration;
use Lago\LagoPhpClient\FormDataProcessor;
use Lago\LagoPhpClient\HeaderSelector;
use Lago\LagoPhpClient\ObjectSerializer;

/**
 * ApiLogsApi Class Doc Comment
 *
 * @category Class
 * @package  Lago\LagoPhpClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApiLogsApi
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
        'findAllApiLogs' => [
            'application/json',
        ],
        'findApiLog' => [
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
        ?ClientInterface $client = null,
        ?Configuration $config = null,
        ?HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
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
     * Operation findAllApiLogs
     *
     * List all api logs
     *
     * @param  int|null $page Page number. (optional)
     * @param  int|null $per_page Number of records per page. (optional)
     * @param  \DateTime|null $from_date Filter api logs from a specific date. (optional)
     * @param  \DateTime|null $to_date Filter api logs up to a specific date. (optional)
     * @param  string[]|null $http_methods Filter results by HTTP methods (optional)
     * @param  \Lago\LagoPhpClient\Model\FindAllApiLogsHttpStatusesParameterInner[]|null $http_statuses Filter results by HTTP status or by generic request status (optional)
     * @param  string|null $api_version Filter results by API version (optional)
     * @param  string|null $request_paths Filter results by the path of the request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findAllApiLogs'] to see the possible values for this operation
     *
     * @throws \Lago\LagoPhpClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Lago\LagoPhpClient\Model\ApiLogsPaginated|\Lago\LagoPhpClient\Model\ApiErrorUnauthorized
     */
    public function findAllApiLogs($page = null, $per_page = null, $from_date = null, $to_date = null, $http_methods = null, $http_statuses = null, $api_version = null, $request_paths = null, string $contentType = self::contentTypes['findAllApiLogs'][0])
    {
        list($response) = $this->findAllApiLogsWithHttpInfo($page, $per_page, $from_date, $to_date, $http_methods, $http_statuses, $api_version, $request_paths, $contentType);
        return $response;
    }

    /**
     * Operation findAllApiLogsWithHttpInfo
     *
     * List all api logs
     *
     * @param  int|null $page Page number. (optional)
     * @param  int|null $per_page Number of records per page. (optional)
     * @param  \DateTime|null $from_date Filter api logs from a specific date. (optional)
     * @param  \DateTime|null $to_date Filter api logs up to a specific date. (optional)
     * @param  string[]|null $http_methods Filter results by HTTP methods (optional)
     * @param  \Lago\LagoPhpClient\Model\FindAllApiLogsHttpStatusesParameterInner[]|null $http_statuses Filter results by HTTP status or by generic request status (optional)
     * @param  string|null $api_version Filter results by API version (optional)
     * @param  string|null $request_paths Filter results by the path of the request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findAllApiLogs'] to see the possible values for this operation
     *
     * @throws \Lago\LagoPhpClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Lago\LagoPhpClient\Model\ApiLogsPaginated|\Lago\LagoPhpClient\Model\ApiErrorUnauthorized, HTTP status code, HTTP response headers (array of strings)
     */
    public function findAllApiLogsWithHttpInfo($page = null, $per_page = null, $from_date = null, $to_date = null, $http_methods = null, $http_statuses = null, $api_version = null, $request_paths = null, string $contentType = self::contentTypes['findAllApiLogs'][0])
    {
        $request = $this->findAllApiLogsRequest($page, $per_page, $from_date, $to_date, $http_methods, $http_statuses, $api_version, $request_paths, $contentType);

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


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\Lago\LagoPhpClient\Model\ApiLogsPaginated',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\Lago\LagoPhpClient\Model\ApiErrorUnauthorized',
                        $request,
                        $response,
                    );
            }

            

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

            return $this->handleResponseWithDataType(
                '\Lago\LagoPhpClient\Model\ApiLogsPaginated',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Lago\LagoPhpClient\Model\ApiLogsPaginated',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Lago\LagoPhpClient\Model\ApiErrorUnauthorized',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation findAllApiLogsAsync
     *
     * List all api logs
     *
     * @param  int|null $page Page number. (optional)
     * @param  int|null $per_page Number of records per page. (optional)
     * @param  \DateTime|null $from_date Filter api logs from a specific date. (optional)
     * @param  \DateTime|null $to_date Filter api logs up to a specific date. (optional)
     * @param  string[]|null $http_methods Filter results by HTTP methods (optional)
     * @param  \Lago\LagoPhpClient\Model\FindAllApiLogsHttpStatusesParameterInner[]|null $http_statuses Filter results by HTTP status or by generic request status (optional)
     * @param  string|null $api_version Filter results by API version (optional)
     * @param  string|null $request_paths Filter results by the path of the request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findAllApiLogs'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findAllApiLogsAsync($page = null, $per_page = null, $from_date = null, $to_date = null, $http_methods = null, $http_statuses = null, $api_version = null, $request_paths = null, string $contentType = self::contentTypes['findAllApiLogs'][0])
    {
        return $this->findAllApiLogsAsyncWithHttpInfo($page, $per_page, $from_date, $to_date, $http_methods, $http_statuses, $api_version, $request_paths, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation findAllApiLogsAsyncWithHttpInfo
     *
     * List all api logs
     *
     * @param  int|null $page Page number. (optional)
     * @param  int|null $per_page Number of records per page. (optional)
     * @param  \DateTime|null $from_date Filter api logs from a specific date. (optional)
     * @param  \DateTime|null $to_date Filter api logs up to a specific date. (optional)
     * @param  string[]|null $http_methods Filter results by HTTP methods (optional)
     * @param  \Lago\LagoPhpClient\Model\FindAllApiLogsHttpStatusesParameterInner[]|null $http_statuses Filter results by HTTP status or by generic request status (optional)
     * @param  string|null $api_version Filter results by API version (optional)
     * @param  string|null $request_paths Filter results by the path of the request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findAllApiLogs'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findAllApiLogsAsyncWithHttpInfo($page = null, $per_page = null, $from_date = null, $to_date = null, $http_methods = null, $http_statuses = null, $api_version = null, $request_paths = null, string $contentType = self::contentTypes['findAllApiLogs'][0])
    {
        $returnType = '\Lago\LagoPhpClient\Model\ApiLogsPaginated';
        $request = $this->findAllApiLogsRequest($page, $per_page, $from_date, $to_date, $http_methods, $http_statuses, $api_version, $request_paths, $contentType);

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
     * Create request for operation 'findAllApiLogs'
     *
     * @param  int|null $page Page number. (optional)
     * @param  int|null $per_page Number of records per page. (optional)
     * @param  \DateTime|null $from_date Filter api logs from a specific date. (optional)
     * @param  \DateTime|null $to_date Filter api logs up to a specific date. (optional)
     * @param  string[]|null $http_methods Filter results by HTTP methods (optional)
     * @param  \Lago\LagoPhpClient\Model\FindAllApiLogsHttpStatusesParameterInner[]|null $http_statuses Filter results by HTTP status or by generic request status (optional)
     * @param  string|null $api_version Filter results by API version (optional)
     * @param  string|null $request_paths Filter results by the path of the request (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findAllApiLogs'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function findAllApiLogsRequest($page = null, $per_page = null, $from_date = null, $to_date = null, $http_methods = null, $http_statuses = null, $api_version = null, $request_paths = null, string $contentType = self::contentTypes['findAllApiLogs'][0])
    {










        $resourcePath = '/api_logs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $per_page,
            'per_page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $from_date,
            'from_date', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $to_date,
            'to_date', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $http_methods,
            'http_methods[]', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $http_statuses,
            'http_statuses[]', // param base name
            'array', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $api_version,
            'api_version', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $request_paths,
            'request_paths', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
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

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
     * Operation findApiLog
     *
     * Retrieve an api log
     *
     * @param  string $request_id The Request Id of the existing api log. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findApiLog'] to see the possible values for this operation
     *
     * @throws \Lago\LagoPhpClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Lago\LagoPhpClient\Model\ApiLog|\Lago\LagoPhpClient\Model\ApiErrorUnauthorized|\Lago\LagoPhpClient\Model\ApiErrorNotFound
     */
    public function findApiLog($request_id, string $contentType = self::contentTypes['findApiLog'][0])
    {
        list($response) = $this->findApiLogWithHttpInfo($request_id, $contentType);
        return $response;
    }

    /**
     * Operation findApiLogWithHttpInfo
     *
     * Retrieve an api log
     *
     * @param  string $request_id The Request Id of the existing api log. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findApiLog'] to see the possible values for this operation
     *
     * @throws \Lago\LagoPhpClient\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Lago\LagoPhpClient\Model\ApiLog|\Lago\LagoPhpClient\Model\ApiErrorUnauthorized|\Lago\LagoPhpClient\Model\ApiErrorNotFound, HTTP status code, HTTP response headers (array of strings)
     */
    public function findApiLogWithHttpInfo($request_id, string $contentType = self::contentTypes['findApiLog'][0])
    {
        $request = $this->findApiLogRequest($request_id, $contentType);

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


            switch($statusCode) {
                case 200:
                    return $this->handleResponseWithDataType(
                        '\Lago\LagoPhpClient\Model\ApiLog',
                        $request,
                        $response,
                    );
                case 401:
                    return $this->handleResponseWithDataType(
                        '\Lago\LagoPhpClient\Model\ApiErrorUnauthorized',
                        $request,
                        $response,
                    );
                case 404:
                    return $this->handleResponseWithDataType(
                        '\Lago\LagoPhpClient\Model\ApiErrorNotFound',
                        $request,
                        $response,
                    );
            }

            

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

            return $this->handleResponseWithDataType(
                '\Lago\LagoPhpClient\Model\ApiLog',
                $request,
                $response,
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Lago\LagoPhpClient\Model\ApiLog',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Lago\LagoPhpClient\Model\ApiErrorUnauthorized',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Lago\LagoPhpClient\Model\ApiErrorNotFound',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    throw $e;
            }
        

            throw $e;
        }
    }

    /**
     * Operation findApiLogAsync
     *
     * Retrieve an api log
     *
     * @param  string $request_id The Request Id of the existing api log. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findApiLog'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findApiLogAsync($request_id, string $contentType = self::contentTypes['findApiLog'][0])
    {
        return $this->findApiLogAsyncWithHttpInfo($request_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation findApiLogAsyncWithHttpInfo
     *
     * Retrieve an api log
     *
     * @param  string $request_id The Request Id of the existing api log. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findApiLog'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findApiLogAsyncWithHttpInfo($request_id, string $contentType = self::contentTypes['findApiLog'][0])
    {
        $returnType = '\Lago\LagoPhpClient\Model\ApiLog';
        $request = $this->findApiLogRequest($request_id, $contentType);

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
     * Create request for operation 'findApiLog'
     *
     * @param  string $request_id The Request Id of the existing api log. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['findApiLog'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function findApiLogRequest($request_id, string $contentType = self::contentTypes['findApiLog'][0])
    {

        // verify the required parameter 'request_id' is set
        if ($request_id === null || (is_array($request_id) && count($request_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request_id when calling findApiLog'
            );
        }


        $resourcePath = '/api_logs/{request_id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($request_id !== null) {
            $resourcePath = str_replace(
                '{' . 'request_id' . '}',
                ObjectSerializer::toPathValue($request_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
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

        // this endpoint requires Bearer authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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

    private function handleResponseWithDataType(
        string $dataType,
        RequestInterface $request,
        ResponseInterface $response
    ): array {
        if ($dataType === '\SplFileObject') {
            $content = $response->getBody(); //stream goes to serializer
        } else {
            $content = (string) $response->getBody();
            if ($dataType !== 'string') {
                try {
                    $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                } catch (\JsonException $exception) {
                    throw new ApiException(
                        sprintf(
                            'Error JSON decoding server response (%s)',
                            $request->getUri()
                        ),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                        $content
                    );
                }
            }
        }

        return [
            ObjectSerializer::deserialize($content, $dataType, []),
            $response->getStatusCode(),
            $response->getHeaders()
        ];
    }

    private function responseWithinRangeCode(
        string $rangeCode,
        int $statusCode
    ): bool {
        $left = (int) ($rangeCode[0].'00');
        $right = (int) ($rangeCode[0].'99');

        return $statusCode >= $left && $statusCode <= $right;
    }
}
