# Efsa\AkeneoApi\ReferenceEntityMediaFileApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReferenceEntityMediaFilesCode()**](ReferenceEntityMediaFileApi.md#getReferenceEntityMediaFilesCode) | **GET** /api/rest/v1/reference-entities-media-files/{code} | Download the media file associated to a reference entity or a record
[**postReferenceEntityMediaFiles()**](ReferenceEntityMediaFileApi.md#postReferenceEntityMediaFiles) | **POST** /api/rest/v1/reference-entities-media-files | Create a new media file for a reference entity or a record


## `getReferenceEntityMediaFilesCode()`

```php
getReferenceEntityMediaFilesCode($code)
```

Download the media file associated to a reference entity or a record

This endpoint allows you to download a given media file that is associated with a reference entity or a record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ReferenceEntityMediaFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource

try {
    $apiInstance->getReferenceEntityMediaFilesCode($code);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceEntityMediaFileApi->getReferenceEntityMediaFilesCode: ', $e->getMessage(), PHP_EOL;
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

## `postReferenceEntityMediaFiles()`

```php
postReferenceEntityMediaFiles($contentType, $body)
```

Create a new media file for a reference entity or a record

This endpoint allows you to create a new media file and associate it to the image of a reference entity, or to the main image or to an attribute value of a record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ReferenceEntityMediaFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = 'contentType_example'; // string | Equal to 'multipart/form-data', no other value allowed
$body = new \Efsa\AkeneoApi\Model\InlineObject46(); // \Efsa\AkeneoApi\Model\InlineObject46

try {
    $apiInstance->postReferenceEntityMediaFiles($contentType, $body);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceEntityMediaFileApi->postReferenceEntityMediaFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**| Equal to &#39;multipart/form-data&#39;, no other value allowed |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject46**](../Model/InlineObject46.md)|  | [optional]

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
