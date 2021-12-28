# Efsa\AkeneoApi\AssetFamilyApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAssetFamilies()**](AssetFamilyApi.md#getAssetFamilies) | **GET** /api/rest/v1/asset-families | Get list of asset families
[**getAssetFamilyCode()**](AssetFamilyApi.md#getAssetFamilyCode) | **GET** /api/rest/v1/asset-families/{code} | Get an asset family
[**patchAssetFamilyCode()**](AssetFamilyApi.md#patchAssetFamilyCode) | **PATCH** /api/rest/v1/asset-families/{code} | Update/create an asset family


## `getAssetFamilies()`

```php
getAssetFamilies($searchAfter): \Efsa\AkeneoApi\Model\AssetFamilies
```

Get list of asset families

This endpoint allows you to get a list of asset families. Asset families are paginated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AssetFamilyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$searchAfter = 'cursor to the first page'; // string | Cursor when using the `search_after` pagination method type. <strong>Should never be set manually</strong>, see <a href=\"/documentation/pagination.html\">Pagination</a> section

try {
    $result = $apiInstance->getAssetFamilies($searchAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetFamilyApi->getAssetFamilies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchAfter** | **string**| Cursor when using the &#x60;search_after&#x60; pagination method type. &lt;strong&gt;Should never be set manually&lt;/strong&gt;, see &lt;a href&#x3D;\&quot;/documentation/pagination.html\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to &#39;cursor to the first page&#39;]

### Return type

[**\Efsa\AkeneoApi\Model\AssetFamilies**](../Model/AssetFamilies.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `_embedded`, `_links`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetFamilyCode()`

```php
getAssetFamilyCode($code): \Efsa\AkeneoApi\Model\InlineResponse2006
```

Get an asset family

This endpoint allows you to get the information about a given asset family.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AssetFamilyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource

try {
    $result = $apiInstance->getAssetFamilyCode($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetFamilyApi->getAssetFamilyCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of the resource |

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchAssetFamilyCode()`

```php
patchAssetFamilyCode($code, $body)
```

Update/create an asset family

This endpoint allows you to update a given asset family. Note that if the asset family does not already exist, it creates it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AssetFamilyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource
$body = new \Efsa\AkeneoApi\Model\InlineObject7(); // \Efsa\AkeneoApi\Model\InlineObject7

try {
    $apiInstance->patchAssetFamilyCode($code, $body);
} catch (Exception $e) {
    echo 'Exception when calling AssetFamilyApi->patchAssetFamilyCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of the resource |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject7**](../Model/InlineObject7.md)|  |

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
