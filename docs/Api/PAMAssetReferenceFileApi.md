# Efsa\AkeneoApi\PAMAssetReferenceFileApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReferenceFilesChannelCodeLocaleCodeDownload()**](PAMAssetReferenceFileApi.md#getReferenceFilesChannelCodeLocaleCodeDownload) | **GET** /api/rest/v1/assets/{asset_code}/reference-files/{locale_code}/download | Download a reference file
[**getReferenceFilesLocaleCode()**](PAMAssetReferenceFileApi.md#getReferenceFilesLocaleCode) | **GET** /api/rest/v1/assets/{asset_code}/reference-files/{locale_code} | Get a reference file
[**postReferenceFilesLocaleCode()**](PAMAssetReferenceFileApi.md#postReferenceFilesLocaleCode) | **POST** /api/rest/v1/assets/{asset_code}/reference-files/{locale_code} | Upload a new reference file


## `getReferenceFilesChannelCodeLocaleCodeDownload()`

```php
getReferenceFilesChannelCodeLocaleCodeDownload($assetCode, $localeCode)
```

Download a reference file

This endpoint allows you to download a given reference file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\PAMAssetReferenceFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assetCode = 'assetCode_example'; // string | Code of the asset
$localeCode = 'localeCode_example'; // string | Code of the locale if the asset is localizable or equal to `no-locale` if the asset is not localizable

try {
    $apiInstance->getReferenceFilesChannelCodeLocaleCodeDownload($assetCode, $localeCode);
} catch (Exception $e) {
    echo 'Exception when calling PAMAssetReferenceFileApi->getReferenceFilesChannelCodeLocaleCodeDownload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assetCode** | **string**| Code of the asset |
 **localeCode** | **string**| Code of the locale if the asset is localizable or equal to &#x60;no-locale&#x60; if the asset is not localizable |

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

## `getReferenceFilesLocaleCode()`

```php
getReferenceFilesLocaleCode($assetCode, $localeCode): \Efsa\AkeneoApi\Model\InlineResponse2008
```

Get a reference file

This endpoint allows you to get the information about a reference file of a given PAM asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\PAMAssetReferenceFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assetCode = 'assetCode_example'; // string | Code of the asset
$localeCode = 'localeCode_example'; // string | Code of the locale if the asset is localizable or equal to `no-locale` if the asset is not localizable

try {
    $result = $apiInstance->getReferenceFilesLocaleCode($assetCode, $localeCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PAMAssetReferenceFileApi->getReferenceFilesLocaleCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assetCode** | **string**| Code of the asset |
 **localeCode** | **string**| Code of the locale if the asset is localizable or equal to &#x60;no-locale&#x60; if the asset is not localizable |

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postReferenceFilesLocaleCode()`

```php
postReferenceFilesLocaleCode($assetCode, $localeCode, $contentType, $body): \Efsa\AkeneoApi\Model\InlineResponse201
```

Upload a new reference file

This endpoint allows you to upload a new reference file for a given PAM asset and locale. It will also automatically generate all the variation files corresponding to this reference file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\PAMAssetReferenceFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assetCode = 'assetCode_example'; // string | Code of the asset
$localeCode = 'localeCode_example'; // string | Code of the locale if the asset is localizable or equal to `no-locale` if the asset is not localizable
$contentType = 'contentType_example'; // string | Equal to 'multipart/form-data', no other value allowed
$body = new \Efsa\AkeneoApi\Model\InlineObject12(); // \Efsa\AkeneoApi\Model\InlineObject12

try {
    $result = $apiInstance->postReferenceFilesLocaleCode($assetCode, $localeCode, $contentType, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PAMAssetReferenceFileApi->postReferenceFilesLocaleCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assetCode** | **string**| Code of the asset |
 **localeCode** | **string**| Code of the locale if the asset is localizable or equal to &#x60;no-locale&#x60; if the asset is not localizable |
 **contentType** | **string**| Equal to &#39;multipart/form-data&#39;, no other value allowed |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject12**](../Model/InlineObject12.md)|  | [optional]

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`, `_links`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
