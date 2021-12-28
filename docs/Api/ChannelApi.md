# Efsa\AkeneoApi\ChannelApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**channelsPatch()**](ChannelApi.md#channelsPatch) | **PATCH** /api/rest/v1/channels/{code} | Update/create a channel
[**channelsPost()**](ChannelApi.md#channelsPost) | **POST** /api/rest/v1/channels | Create a new channel
[**getChannels()**](ChannelApi.md#getChannels) | **GET** /api/rest/v1/channels | Get a list of channels
[**getChannelsCode()**](ChannelApi.md#getChannelsCode) | **GET** /api/rest/v1/channels/{code} | Get a channel
[**severalChannelsPatch()**](ChannelApi.md#severalChannelsPatch) | **PATCH** /api/rest/v1/channels | Update/create several channels


## `channelsPatch()`

```php
channelsPatch($code, $body)
```

Update/create a channel

This endpoint allows you to update a given channel. Know more about <a href=\"/documentation/update.html#update-behavior\">Update behavior</a>. Note that if no channel exists for the given code, it creates it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource
$body = new \Efsa\AkeneoApi\Model\InlineObject32(); // \Efsa\AkeneoApi\Model\InlineObject32

try {
    $apiInstance->channelsPatch($code, $body);
} catch (Exception $e) {
    echo 'Exception when calling ChannelApi->channelsPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of the resource |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject32**](../Model/InlineObject32.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`, `_links`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelsPost()`

```php
channelsPost($body)
```

Create a new channel

This endpoint allows you to create a new channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Efsa\AkeneoApi\Model\InlineObject30(); // \Efsa\AkeneoApi\Model\InlineObject30

try {
    $apiInstance->channelsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling ChannelApi->channelsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject30**](../Model/InlineObject30.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`, `_links`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannels()`

```php
getChannels($page, $limit, $withCount): \Efsa\AkeneoApi\Model\Channels
```

Get a list of channels

This endpoint allows you to get a list of channels. Channels are paginated and sorted by code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | Number of the page to retrieve when using the `page` pagination method type. <strong>Should never be set manually</strong>, see <a href=\"/documentation/pagination.html#pagination\">Pagination</a> section
$limit = 10; // int | Number of results by page, see <a href=\"/documentation/pagination.html\">Pagination</a> section
$withCount = false; // bool | Return the count of products in the response. Be carefull with that, on a big catalog, it can decrease performance in a significative way

try {
    $result = $apiInstance->getChannels($page, $limit, $withCount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelApi->getChannels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Number of the page to retrieve when using the &#x60;page&#x60; pagination method type. &lt;strong&gt;Should never be set manually&lt;/strong&gt;, see &lt;a href&#x3D;\&quot;/documentation/pagination.html#pagination\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to 1]
 **limit** | **int**| Number of results by page, see &lt;a href&#x3D;\&quot;/documentation/pagination.html\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to 10]
 **withCount** | **bool**| Return the count of products in the response. Be carefull with that, on a big catalog, it can decrease performance in a significative way | [optional] [default to false]

### Return type

[**\Efsa\AkeneoApi\Model\Channels**](../Model/Channels.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `_embedded`, `_links`, `current_page`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChannelsCode()`

```php
getChannelsCode($code): \Efsa\AkeneoApi\Model\InlineObject30
```

Get a channel

This endpoint allows you to get the information about a given channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource

try {
    $result = $apiInstance->getChannelsCode($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelApi->getChannelsCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of the resource |

### Return type

[**\Efsa\AkeneoApi\Model\InlineObject30**](../Model/InlineObject30.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `severalChannelsPatch()`

```php
severalChannelsPatch($body): \Efsa\AkeneoApi\Model\InlineResponse2002
```

Update/create several channels

This endpoint allows you to update and/or create several channels at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Efsa\AkeneoApi\Model\InlineObject31(); // \Efsa\AkeneoApi\Model\InlineObject31

try {
    $result = $apiInstance->severalChannelsPatch($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelApi->severalChannelsPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject31**](../Model/InlineObject31.md)|  | [optional]

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `x-example-1`, `x-example-2`, `x-example-3`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
