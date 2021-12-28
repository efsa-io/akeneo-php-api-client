# Efsa\AkeneoApi\AssetAttributeApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAssetFamiliesCodeAttributes()**](AssetAttributeApi.md#getAssetFamiliesCodeAttributes) | **GET** /api/rest/v1/asset-families/{asset_family_code}/attributes | Get the list of attributes of a given asset family
[**getAssetFamilyAttributesCode()**](AssetAttributeApi.md#getAssetFamilyAttributesCode) | **GET** /api/rest/v1/asset-families/{asset_family_code}/attributes/{code} | Get an attribute of a given asset family
[**patchAssetFamilyAttributesCode()**](AssetAttributeApi.md#patchAssetFamilyAttributesCode) | **PATCH** /api/rest/v1/asset-families/{asset_family_code}/attributes/{code} | Update/create an attribute of a given asset family


## `getAssetFamiliesCodeAttributes()`

```php
getAssetFamiliesCodeAttributes($assetFamilyCode): \Efsa\AkeneoApi\Model\InlineResponse2004[]
```

Get the list of attributes of a given asset family

This endpoint allows you to get the list of attributes of a given asset family.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AssetAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assetFamilyCode = 'assetFamilyCode_example'; // string | Code of the asset family

try {
    $result = $apiInstance->getAssetFamiliesCodeAttributes($assetFamilyCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetAttributeApi->getAssetFamiliesCodeAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assetFamilyCode** | **string**| Code of the asset family |

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse2004[]**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetFamilyAttributesCode()`

```php
getAssetFamilyAttributesCode($assetFamilyCode, $code): \Efsa\AkeneoApi\Model\InlineResponse2004
```

Get an attribute of a given asset family

This endpoint allows you to get the information about a given attribute for a given asset family.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AssetAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assetFamilyCode = 'assetFamilyCode_example'; // string | Code of the asset family
$code = 'code_example'; // string | Code of the resource

try {
    $result = $apiInstance->getAssetFamilyAttributesCode($assetFamilyCode, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetAttributeApi->getAssetFamilyAttributesCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assetFamilyCode** | **string**| Code of the asset family |
 **code** | **string**| Code of the resource |

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchAssetFamilyAttributesCode()`

```php
patchAssetFamilyAttributesCode($assetFamilyCode, $code, $body)
```

Update/create an attribute of a given asset family

This endpoint allows you to update a given attribute for a given asset family. Note that if the attribute does not already exist for the given asset family, it creates it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AssetAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assetFamilyCode = 'assetFamilyCode_example'; // string | Code of the asset family
$code = 'code_example'; // string | Code of the resource
$body = new \Efsa\AkeneoApi\Model\InlineObject6(); // \Efsa\AkeneoApi\Model\InlineObject6

try {
    $apiInstance->patchAssetFamilyAttributesCode($assetFamilyCode, $code, $body);
} catch (Exception $e) {
    echo 'Exception when calling AssetAttributeApi->patchAssetFamilyAttributesCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assetFamilyCode** | **string**| Code of the asset family |
 **code** | **string**| Code of the resource |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject6**](../Model/InlineObject6.md)|  |

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
