<?php
/**
 * AuthApi
 * PHP version 5
 *
 * @category Class
 * @package  Rossity\PhpQuickbase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Quick Base API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Rossity\PhpQuickbase\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Rossity\PhpQuickbase\ApiException;
use Rossity\PhpQuickbase\Configuration;
use Rossity\PhpQuickbase\HeaderSelector;
use Rossity\PhpQuickbase\ObjectSerializer;

/**
 * AuthApi Class Doc Comment
 *
 * @category Class
 * @package  Rossity\PhpQuickbase
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AuthApi
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
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
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
     * Operation getTempTokenDBID
     *
     * Get a temporary token for a dbid
     *
     * @param  string $dbid The unique identifier of an app or table. (required)
     * @param  string $qBRealmHostname Your Quick Base domain, for example demo.quickbase.com (required)
     * @param  string $userAgent This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities. (optional)
     * @param  string $qBAppToken Your Quick Base app token (optional)
     *
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return map[string,object]
     */
    public function getTempTokenDBID($dbid, $qBRealmHostname, $userAgent = null, $qBAppToken = null)
    {
        list($response) = $this->getTempTokenDBIDWithHttpInfo($dbid, $qBRealmHostname, $userAgent, $qBAppToken);
        return $response;
    }

    /**
     * Operation getTempTokenDBIDWithHttpInfo
     *
     * Get a temporary token for a dbid
     *
     * @param  string $dbid The unique identifier of an app or table. (required)
     * @param  string $qBRealmHostname Your Quick Base domain, for example demo.quickbase.com (required)
     * @param  string $userAgent This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities. (optional)
     * @param  string $qBAppToken Your Quick Base app token (optional)
     *
     * @throws \Rossity\PhpQuickbase\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of map[string,object], HTTP status code, HTTP response headers (array of strings)
     */
    public function getTempTokenDBIDWithHttpInfo($dbid, $qBRealmHostname, $userAgent = null, $qBAppToken = null)
    {
        $request = $this->getTempTokenDBIDRequest($dbid, $qBRealmHostname, $userAgent, $qBAppToken);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
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
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('map[string,object]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'map[string,object]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'map[string,object]';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        'map[string,object]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTempTokenDBIDAsync
     *
     * Get a temporary token for a dbid
     *
     * @param  string $dbid The unique identifier of an app or table. (required)
     * @param  string $qBRealmHostname Your Quick Base domain, for example demo.quickbase.com (required)
     * @param  string $userAgent This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities. (optional)
     * @param  string $qBAppToken Your Quick Base app token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTempTokenDBIDAsync($dbid, $qBRealmHostname, $userAgent = null, $qBAppToken = null)
    {
        return $this->getTempTokenDBIDAsyncWithHttpInfo($dbid, $qBRealmHostname, $userAgent, $qBAppToken)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTempTokenDBIDAsyncWithHttpInfo
     *
     * Get a temporary token for a dbid
     *
     * @param  string $dbid The unique identifier of an app or table. (required)
     * @param  string $qBRealmHostname Your Quick Base domain, for example demo.quickbase.com (required)
     * @param  string $userAgent This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities. (optional)
     * @param  string $qBAppToken Your Quick Base app token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTempTokenDBIDAsyncWithHttpInfo($dbid, $qBRealmHostname, $userAgent = null, $qBAppToken = null)
    {
        $returnType = 'map[string,object]';
        $request = $this->getTempTokenDBIDRequest($dbid, $qBRealmHostname, $userAgent, $qBAppToken);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getTempTokenDBID'
     *
     * @param  string $dbid The unique identifier of an app or table. (required)
     * @param  string $qBRealmHostname Your Quick Base domain, for example demo.quickbase.com (required)
     * @param  string $userAgent This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities. (optional)
     * @param  string $qBAppToken Your Quick Base app token (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getTempTokenDBIDRequest($dbid, $qBRealmHostname, $userAgent = null, $qBAppToken = null)
    {
        // verify the required parameter 'dbid' is set
        if ($dbid === null || (is_array($dbid) && count($dbid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $dbid when calling getTempTokenDBID'
            );
        }
        // verify the required parameter 'qBRealmHostname' is set
        if ($qBRealmHostname === null || (is_array($qBRealmHostname) && count($qBRealmHostname) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $qBRealmHostname when calling getTempTokenDBID'
            );
        }

        $resourcePath = '/auth/temporary/{dbid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($qBRealmHostname !== null) {
            $headerParams['QB-Realm-Hostname'] = ObjectSerializer::toHeaderValue($qBRealmHostname);
        }
        // header params
        if ($userAgent !== null) {
            $headerParams['User-Agent'] = ObjectSerializer::toHeaderValue($userAgent);
        }
        // header params
        if ($qBAppToken !== null) {
            $headerParams['QB-App-Token'] = ObjectSerializer::toHeaderValue($qBAppToken);
        }

        // path params
        if ($dbid !== null) {
            $resourcePath = str_replace(
                '{' . 'dbid' . '}',
                ObjectSerializer::toPathValue($dbid),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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
