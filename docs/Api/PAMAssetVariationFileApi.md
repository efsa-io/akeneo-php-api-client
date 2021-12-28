# Efsa\AkeneoApi\PAMAssetVariationFileApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getVariationFilesChannelCodeLocaleCode()**](PAMAssetVariationFileApi.md#getVariationFilesChannelCodeLocaleCode) | **GET** /api/rest/v1/assets/{asset_code}/variation-files/{channel_code}/{locale_code} | Get a variation file
[**getVariationFilesChannelCodeLocaleCodeDownload()**](PAMAssetVariationFileApi.md#getVariationFilesChannelCodeLocaleCodeDownload) | **GET** /api/rest/v1/assets/{asset_code}/variation-files/{channel_code}/{locale_code}/download | Download a variation file
[**postVariationFilesChannelCodeLocaleCode()**](PAMAssetVariationFileApi.md#postVariationFilesChannelCodeLocaleCode) | **POST** /api/rest/v1/assets/{asset_code}/variation-files/{channel_code}/{locale_code} | Upload a new variation file


## `getVariationFilesChannelCodeLocaleCode()`

```php
getVariationFilesChannelCodeLocaleCode($assetCode, $channelCode, $localeCode): \Efsa\AkeneoApi\Model\InlineResponse2009
```

Get a variation file

This endpoint allows you to get the information about a variation file of a given PAM asset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\PAMAssetVariationFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assetCode = 'assetCode_example'; // string | Code of the asset
$channelCode = 'channelCode_example'; // string | Code of the channel
$localeCode = 'localeCode_example'; // string | Code of the locale if the asset is localizable or equal to `no-locale` if the asset is not localizable

try {
    $result = $apiInstance->getVariationFilesChannelCodeLocaleCode($assetCode, $channelCode, $localeCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PAMAssetVariationFileApi->getVariationFilesChannelCodeLocaleCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assetCode** | **string**| Code of the asset |
 **channelCode** | **string**| Code of the channel |
 **localeCode** | **string**| Code of the locale if the asset is localizable or equal to &#x60;no-locale&#x60; if the asset is not localizable |

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVariationFilesChannelCodeLocaleCodeDownload()`

```php
getVariationFilesChannelCodeLocaleCodeDownload($assetCode, $channelCode, $localeCode)
```

Download a variation file

This endpoint allows you to download a given variation file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\PAMAssetVariationFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assetCode = 'assetCode_example'; // string | Code of the asset
$channelCode = 'channelCode_example'; // string | Code of the channel
$localeCode = 'localeCode_example'; // string | Code of the locale if the asset is localizable or equal to `no-locale` if the asset is not localizable

try {
    $apiInstance->getVariationFilesChannelCodeLocaleCodeDownload($assetCode, $channelCode, $localeCode);
} catch (Exception $e) {
    echo 'Exception when calling PAMAssetVariationFileApi->getVariationFilesChannelCodeLocaleCodeDownload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assetCode** | **string**| Code of the asset |
 **channelCode** | **string**| Code of the channel |
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

## `postVariationFilesChannelCodeLocaleCode()`

```php
postVariationFilesChannelCodeLocaleCode($assetCode, $channelCode, $localeCode, $contentType, $body)
```

Upload a new variation file

This endpoint allows you to upload a new variation file for a given PAM asset, channel and locale.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\PAMAssetVariationFileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assetCode = 'assetCode_example'; // string | Code of the asset
$channelCode = 'channelCode_example'; // string | Code of the channel
$localeCode = 'localeCode_example'; // string | Code of the locale if the asset is localizable or equal to `no-locale` if the asset is not localizable
$contentType = 'contentType_example'; // string | Equal to 'multipart/form-data', no other value allowed
$body = new \Efsa\AkeneoApi\Model\InlineObject13(); // \Efsa\AkeneoApi\Model\InlineObject13

try {
    $apiInstance->postVariationFilesChannelCodeLocaleCode($assetCode, $channelCode, $localeCode, $contentType, $body);
} catch (Exception $e) {
    echo 'Exception when calling PAMAssetVariationFileApi->postVariationFilesChannelCodeLocaleCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assetCode** | **string**| Code of the asset |
 **channelCode** | **string**| Code of the channel |
 **localeCode** | **string**| Code of the locale if the asset is localizable or equal to &#x60;no-locale&#x60; if the asset is not localizable |
 **contentType** | **string**| Equal to &#39;multipart/form-data&#39;, no other value allowed |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject13**](../Model/InlineObject13.md)|  | [optional]

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
