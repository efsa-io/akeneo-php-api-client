# Efsa\AkeneoApi\AssetMediaFileApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAssetMediaFilesCode()**](AssetMediaFileApi.md#getAssetMediaFilesCode) | **GET** /api/rest/v1/asset-media-files/{code} | Download the media file associated to an asset
[**postAssetMediaFiles()**](AssetMediaFileApi.md#postAssetMediaFiles) | **POST** /api/rest/v1/asset-media-files | Create a new media file for an asset


## `getAssetMediaFilesCode()`

```php
getAssetMediaFilesCode($code)
```

Download the media file associated to an asset

This endpoint allows you to download a given media file that is associated with an asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AssetMediaFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource

try {
    $apiInstance->getAssetMediaFilesCode($code);
} catch (Exception $e) {
    echo 'Exception when calling AssetMediaFileApi->getAssetMediaFilesCode: ', $e->getMessage(), PHP_EOL;
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

## `postAssetMediaFiles()`

```php
postAssetMediaFiles($contentType, $body)
```

Create a new media file for an asset

This endpoint allows you to create a new media file and associate it to a media file attribute value of an asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AssetMediaFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = 'contentType_example'; // string | Equal to 'multipart/form-data', no other value allowed
$body = new \Efsa\AkeneoApi\Model\InlineObject8(); // \Efsa\AkeneoApi\Model\InlineObject8

try {
    $apiInstance->postAssetMediaFiles($contentType, $body);
} catch (Exception $e) {
    echo 'Exception when calling AssetMediaFileApi->postAssetMediaFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**| Equal to &#39;multipart/form-data&#39;, no other value allowed |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject8**](../Model/InlineObject8.md)|  | [optional]

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
