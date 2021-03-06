<?php
/**
 * ReferenceEntityAttributeApi
 * PHP version 7.2
 *
 * @category Class
 * @package  Efsa\AkeneoApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Akeneo PIM REST API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Efsa\AkeneoApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Efsa\AkeneoApi\ApiException;
use Efsa\AkeneoApi\Configuration;
use Efsa\AkeneoApi\HeaderSelector;
use Efsa\AkeneoApi\ObjectSerializer;

/**
 * ReferenceEntityAttributeApi Class Doc Comment
 *
 * @category Class
 * @package  Efsa\AkeneoApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReferenceEntityAttributeApi
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
     * Operation getReferenceEntitiesCodeAttributes
     *
     * Get the list of attributes of a given reference entity
     *
     * @param  string $referenceEntityCode Code of the reference entity (required)
     *
     * @throws \Efsa\AkeneoApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Efsa\AkeneoApi\Model\InlineResponse20018[]|\Efsa\AkeneoApi\Model\InlineResponse400|\Efsa\AkeneoApi\Model\InlineResponse400
     */
    public function getReferenceEntitiesCodeAttributes($referenceEntityCode)
    {
        list($response) = $this->getReferenceEntitiesCodeAttributesWithHttpInfo($referenceEntityCode);
        return $response;
    }

    /**
     * Operation getReferenceEntitiesCodeAttributesWithHttpInfo
     *
     * Get the list of attributes of a given reference entity
     *
     * @param  string $referenceEntityCode Code of the reference entity (required)
     *
     * @throws \Efsa\AkeneoApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Efsa\AkeneoApi\Model\InlineResponse20018[]|\Efsa\AkeneoApi\Model\InlineResponse400|\Efsa\AkeneoApi\Model\InlineResponse400, HTTP status code, HTTP response headers (array of strings)
     */
    public function getReferenceEntitiesCodeAttributesWithHttpInfo($referenceEntityCode)
    {
        $request = $this->getReferenceEntitiesCodeAttributesRequest($referenceEntityCode);

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
                    if ('\Efsa\AkeneoApi\Model\InlineResponse20018[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Efsa\AkeneoApi\Model\InlineResponse20018[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Efsa\AkeneoApi\Model\InlineResponse400' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Efsa\AkeneoApi\Model\InlineResponse400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\Efsa\AkeneoApi\Model\InlineResponse400' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Efsa\AkeneoApi\Model\InlineResponse400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Efsa\AkeneoApi\Model\InlineResponse20018[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\Efsa\AkeneoApi\Model\InlineResponse20018[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Efsa\AkeneoApi\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Efsa\AkeneoApi\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getReferenceEntitiesCodeAttributesAsync
     *
     * Get the list of attributes of a given reference entity
     *
     * @param  string $referenceEntityCode Code of the reference entity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReferenceEntitiesCodeAttributesAsync($referenceEntityCode)
    {
        return $this->getReferenceEntitiesCodeAttributesAsyncWithHttpInfo($referenceEntityCode)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getReferenceEntitiesCodeAttributesAsyncWithHttpInfo
     *
     * Get the list of attributes of a given reference entity
     *
     * @param  string $referenceEntityCode Code of the reference entity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReferenceEntitiesCodeAttributesAsyncWithHttpInfo($referenceEntityCode)
    {
        $returnType = '\Efsa\AkeneoApi\Model\InlineResponse20018[]';
        $request = $this->getReferenceEntitiesCodeAttributesRequest($referenceEntityCode);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
     * Create request for operation 'getReferenceEntitiesCodeAttributes'
     *
     * @param  string $referenceEntityCode Code of the reference entity (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getReferenceEntitiesCodeAttributesRequest($referenceEntityCode)
    {
        // verify the required parameter 'referenceEntityCode' is set
        if ($referenceEntityCode === null || (is_array($referenceEntityCode) && count($referenceEntityCode) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $referenceEntityCode when calling getReferenceEntitiesCodeAttributes'
            );
        }

        $resourcePath = '/api/rest/v1/reference-entities/{reference_entity_code}/attributes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($referenceEntityCode !== null) {
            $resourcePath = str_replace(
                '{' . 'reference_entity_code' . '}',
                ObjectSerializer::toPathValue($referenceEntityCode),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'code', 'message']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'code', 'message'],
                []
            );
        }

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

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getReferenceEntityAttributesCode
     *
     * Get an attribute of a given reference entity
     *
     * @param  string $referenceEntityCode Code of the reference entity (required)
     * @param  string $code Code of the resource (required)
     *
     * @throws \Efsa\AkeneoApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Efsa\AkeneoApi\Model\InlineResponse20018|\Efsa\AkeneoApi\Model\InlineResponse400|\Efsa\AkeneoApi\Model\InlineResponse400|\Efsa\AkeneoApi\Model\InlineResponse400
     */
    public function getReferenceEntityAttributesCode($referenceEntityCode, $code)
    {
        list($response) = $this->getReferenceEntityAttributesCodeWithHttpInfo($referenceEntityCode, $code);
        return $response;
    }

    /**
     * Operation getReferenceEntityAttributesCodeWithHttpInfo
     *
     * Get an attribute of a given reference entity
     *
     * @param  string $referenceEntityCode Code of the reference entity (required)
     * @param  string $code Code of the resource (required)
     *
     * @throws \Efsa\AkeneoApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Efsa\AkeneoApi\Model\InlineResponse20018|\Efsa\AkeneoApi\Model\InlineResponse400|\Efsa\AkeneoApi\Model\InlineResponse400|\Efsa\AkeneoApi\Model\InlineResponse400, HTTP status code, HTTP response headers (array of strings)
     */
    public function getReferenceEntityAttributesCodeWithHttpInfo($referenceEntityCode, $code)
    {
        $request = $this->getReferenceEntityAttributesCodeRequest($referenceEntityCode, $code);

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
                    if ('\Efsa\AkeneoApi\Model\InlineResponse20018' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Efsa\AkeneoApi\Model\InlineResponse20018', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\Efsa\AkeneoApi\Model\InlineResponse400' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Efsa\AkeneoApi\Model\InlineResponse400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Efsa\AkeneoApi\Model\InlineResponse400' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Efsa\AkeneoApi\Model\InlineResponse400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 406:
                    if ('\Efsa\AkeneoApi\Model\InlineResponse400' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Efsa\AkeneoApi\Model\InlineResponse400', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Efsa\AkeneoApi\Model\InlineResponse20018';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\Efsa\AkeneoApi\Model\InlineResponse20018',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Efsa\AkeneoApi\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Efsa\AkeneoApi\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Efsa\AkeneoApi\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getReferenceEntityAttributesCodeAsync
     *
     * Get an attribute of a given reference entity
     *
     * @param  string $referenceEntityCode Code of the reference entity (required)
     * @param  string $code Code of the resource (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReferenceEntityAttributesCodeAsync($referenceEntityCode, $code)
    {
        return $this->getReferenceEntityAttributesCodeAsyncWithHttpInfo($referenceEntityCode, $code)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getReferenceEntityAttributesCodeAsyncWithHttpInfo
     *
     * Get an attribute of a given reference entity
     *
     * @param  string $referenceEntityCode Code of the reference entity (required)
     * @param  string $code Code of the resource (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReferenceEntityAttributesCodeAsyncWithHttpInfo($referenceEntityCode, $code)
    {
        $returnType = '\Efsa\AkeneoApi\Model\InlineResponse20018';
        $request = $this->getReferenceEntityAttributesCodeRequest($referenceEntityCode, $code);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
     * Create request for operation 'getReferenceEntityAttributesCode'
     *
     * @param  string $referenceEntityCode Code of the reference entity (required)
     * @param  string $code Code of the resource (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getReferenceEntityAttributesCodeRequest($referenceEntityCode, $code)
    {
        // verify the required parameter 'referenceEntityCode' is set
        if ($referenceEntityCode === null || (is_array($referenceEntityCode) && count($referenceEntityCode) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $referenceEntityCode when calling getReferenceEntityAttributesCode'
            );
        }
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code when calling getReferenceEntityAttributesCode'
            );
        }

        $resourcePath = '/api/rest/v1/reference-entities/{reference_entity_code}/attributes/{code}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($referenceEntityCode !== null) {
            $resourcePath = str_replace(
                '{' . 'reference_entity_code' . '}',
                ObjectSerializer::toPathValue($referenceEntityCode),
                $resourcePath
            );
        }
        // path params
        if ($code !== null) {
            $resourcePath = str_replace(
                '{' . 'code' . '}',
                ObjectSerializer::toPathValue($code),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'code', 'message']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'code', 'message'],
                []
            );
        }

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

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation patchReferenceEntityAttributesCode
     *
     * Update/create an attribute of a given reference entity
     *
     * @param  string $referenceEntityCode Code of the reference entity (required)
     * @param  string $code Code of the resource (required)
     * @param  \Efsa\AkeneoApi\Model\InlineObject49 $body body (required)
     *
     * @throws \Efsa\AkeneoApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function patchReferenceEntityAttributesCode($referenceEntityCode, $code, $body)
    {
        $this->patchReferenceEntityAttributesCodeWithHttpInfo($referenceEntityCode, $code, $body);
    }

    /**
     * Operation patchReferenceEntityAttributesCodeWithHttpInfo
     *
     * Update/create an attribute of a given reference entity
     *
     * @param  string $referenceEntityCode Code of the reference entity (required)
     * @param  string $code Code of the resource (required)
     * @param  \Efsa\AkeneoApi\Model\InlineObject49 $body (required)
     *
     * @throws \Efsa\AkeneoApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function patchReferenceEntityAttributesCodeWithHttpInfo($referenceEntityCode, $code, $body)
    {
        $request = $this->patchReferenceEntityAttributesCodeRequest($referenceEntityCode, $code, $body);

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
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Efsa\AkeneoApi\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Efsa\AkeneoApi\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Efsa\AkeneoApi\Model\InlineResponse400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation patchReferenceEntityAttributesCodeAsync
     *
     * Update/create an attribute of a given reference entity
     *
     * @param  string $referenceEntityCode Code of the reference entity (required)
     * @param  string $code Code of the resource (required)
     * @param  \Efsa\AkeneoApi\Model\InlineObject49 $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchReferenceEntityAttributesCodeAsync($referenceEntityCode, $code, $body)
    {
        return $this->patchReferenceEntityAttributesCodeAsyncWithHttpInfo($referenceEntityCode, $code, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation patchReferenceEntityAttributesCodeAsyncWithHttpInfo
     *
     * Update/create an attribute of a given reference entity
     *
     * @param  string $referenceEntityCode Code of the reference entity (required)
     * @param  string $code Code of the resource (required)
     * @param  \Efsa\AkeneoApi\Model\InlineObject49 $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function patchReferenceEntityAttributesCodeAsyncWithHttpInfo($referenceEntityCode, $code, $body)
    {
        $returnType = '';
        $request = $this->patchReferenceEntityAttributesCodeRequest($referenceEntityCode, $code, $body);

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
     * Create request for operation 'patchReferenceEntityAttributesCode'
     *
     * @param  string $referenceEntityCode Code of the reference entity (required)
     * @param  string $code Code of the resource (required)
     * @param  \Efsa\AkeneoApi\Model\InlineObject49 $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function patchReferenceEntityAttributesCodeRequest($referenceEntityCode, $code, $body)
    {
        // verify the required parameter 'referenceEntityCode' is set
        if ($referenceEntityCode === null || (is_array($referenceEntityCode) && count($referenceEntityCode) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $referenceEntityCode when calling patchReferenceEntityAttributesCode'
            );
        }
        // verify the required parameter 'code' is set
        if ($code === null || (is_array($code) && count($code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $code when calling patchReferenceEntityAttributesCode'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling patchReferenceEntityAttributesCode'
            );
        }

        $resourcePath = '/api/rest/v1/reference-entities/{reference_entity_code}/attributes/{code}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($referenceEntityCode !== null) {
            $resourcePath = str_replace(
                '{' . 'reference_entity_code' . '}',
                ObjectSerializer::toPathValue($referenceEntityCode),
                $resourcePath
            );
        }
        // path params
        if ($code !== null) {
            $resourcePath = str_replace(
                '{' . 'code' . '}',
                ObjectSerializer::toPathValue($code),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'code', 'message', '_links']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'code', 'message', '_links'],
                []
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
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

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
