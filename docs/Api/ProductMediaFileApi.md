# Efsa\AkeneoApi\ProductMediaFileApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMediaFiles()**](ProductMediaFileApi.md#getMediaFiles) | **GET** /api/rest/v1/media-files | Get a list of product media files
[**getMediaFilesCode()**](ProductMediaFileApi.md#getMediaFilesCode) | **GET** /api/rest/v1/media-files/{code} | Get a product media file
[**getMediaFilesCodeDownload()**](ProductMediaFileApi.md#getMediaFilesCodeDownload) | **GET** /api/rest/v1/media-files/{code}/download | Download a product media file
[**postMediaFiles()**](ProductMediaFileApi.md#postMediaFiles) | **POST** /api/rest/v1/media-files | Create a new product media file


## `getMediaFiles()`

```php
getMediaFiles($page, $limit, $withCount): \Efsa\AkeneoApi\Model\MediaFiles
```

Get a list of product media files

This endpoint allows you to get a list of media files that are used as attribute values in products or product models.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ProductMediaFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | Number of the page to retrieve when using the `page` pagination method type. <strong>Should never be set manually</strong>, see <a href=\"/documentation/pagination.html#pagination\">Pagination</a> section
$limit = 10; // int | Number of results by page, see <a href=\"/documentation/pagination.html\">Pagination</a> section
$withCount = false; // bool | Return the count of products in the response. Be carefull with that, on a big catalog, it can decrease performance in a significative way

try {
    $result = $apiInstance->getMediaFiles($page, $limit, $withCount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductMediaFileApi->getMediaFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Number of the page to retrieve when using the &#x60;page&#x60; pagination method type. &lt;strong&gt;Should never be set manually&lt;/strong&gt;, see &lt;a href&#x3D;\&quot;/documentation/pagination.html#pagination\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to 1]
 **limit** | **int**| Number of results by page, see &lt;a href&#x3D;\&quot;/documentation/pagination.html\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to 10]
 **withCount** | **bool**| Return the count of products in the response. Be carefull with that, on a big catalog, it can decrease performance in a significative way | [optional] [default to false]

### Return type

[**\Efsa\AkeneoApi\Model\MediaFiles**](../Model/MediaFiles.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `_embedded`, `_links`, `current_page`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMediaFilesCode()`

```php
getMediaFilesCode($code): \Efsa\AkeneoApi\Model\InlineResponse20015
```

Get a product media file

This endpoint allows you to get the information about a given media file that is used as an attribute value of a product or a product model.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ProductMediaFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource

try {
    $result = $apiInstance->getMediaFilesCode($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductMediaFileApi->getMediaFilesCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of the resource |

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMediaFilesCodeDownload()`

```php
getMediaFilesCodeDownload($code)
```

Download a product media file

This endpoint allows you to download a given media file that is used as an attribute value of a product or a product model.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ProductMediaFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource

try {
    $apiInstance->getMediaFilesCodeDownload($code);
} catch (Exception $e) {
    echo 'Exception when calling ProductMediaFileApi->getMediaFilesCodeDownload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of the resource |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postMediaFiles()`

```php
postMediaFiles($contentType, $body)
```

Create a new product media file

This endpoint allows you to create a new media file and associate it to an attribute value of a given product or product model.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ProductMediaFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = 'contentType_example'; // string | Equal to 'multipart/form-data', no other value allowed
$body = new \Efsa\AkeneoApi\Model\InlineObject39(); // \Efsa\AkeneoApi\Model\InlineObject39

try {
    $apiInstance->postMediaFiles($contentType, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProductMediaFileApi->postMediaFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**| Equal to &#39;multipart/form-data&#39;, no other value allowed |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject39**](../Model/InlineObject39.md)|  | [optional]

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
