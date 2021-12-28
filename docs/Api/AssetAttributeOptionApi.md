# Efsa\AkeneoApi\AssetAttributeOptionApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAssetAttributesAttributeCodeOptionsCode()**](AssetAttributeOptionApi.md#getAssetAttributesAttributeCodeOptionsCode) | **GET** /api/rest/v1/asset-families/{asset_family_code}/attributes/{attribute_code}/options/{code} | Get an attribute option for a given attribute of a given asset family
[**getAssetFamilyAttributesAttributeCodeOptions()**](AssetAttributeOptionApi.md#getAssetFamilyAttributesAttributeCodeOptions) | **GET** /api/rest/v1/asset-families/{asset_family_code}/attributes/{attribute_code}/options | Get a list of attribute options of a given attribute for a given asset family
[**patchAssetAttributesAttributeCodeOptionsCode()**](AssetAttributeOptionApi.md#patchAssetAttributesAttributeCodeOptionsCode) | **PATCH** /api/rest/v1/asset-families/{asset_family_code}/attributes/{attribute_code}/options/{code} | Update/create an asset attribute option for a given asset family


## `getAssetAttributesAttributeCodeOptionsCode()`

```php
getAssetAttributesAttributeCodeOptionsCode($assetFamilyCode, $attributeCode, $code): \Efsa\AkeneoApi\Model\InlineResponse2005
```

Get an attribute option for a given attribute of a given asset family

This endpoint allows you to get the information about a given asset attribute option.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AssetAttributeOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assetFamilyCode = 'assetFamilyCode_example'; // string | Code of the asset family
$attributeCode = 'attributeCode_example'; // string | Code of the attribute
$code = 'code_example'; // string | Code of the resource

try {
    $result = $apiInstance->getAssetAttributesAttributeCodeOptionsCode($assetFamilyCode, $attributeCode, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetAttributeOptionApi->getAssetAttributesAttributeCodeOptionsCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assetFamilyCode** | **string**| Code of the asset family |
 **attributeCode** | **string**| Code of the attribute |
 **code** | **string**| Code of the resource |

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetFamilyAttributesAttributeCodeOptions()`

```php
getAssetFamilyAttributesAttributeCodeOptions($assetFamilyCode, $attributeCode): \Efsa\AkeneoApi\Model\InlineResponse2005[]
```

Get a list of attribute options of a given attribute for a given asset family

This endpoint allows you to get a list of attribute options for a given asset family.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AssetAttributeOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assetFamilyCode = 'assetFamilyCode_example'; // string | Code of the asset family
$attributeCode = 'attributeCode_example'; // string | Code of the attribute

try {
    $result = $apiInstance->getAssetFamilyAttributesAttributeCodeOptions($assetFamilyCode, $attributeCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetAttributeOptionApi->getAssetFamilyAttributesAttributeCodeOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assetFamilyCode** | **string**| Code of the asset family |
 **attributeCode** | **string**| Code of the attribute |

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse2005[]**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchAssetAttributesAttributeCodeOptionsCode()`

```php
patchAssetAttributesAttributeCodeOptionsCode($assetFamilyCode, $attributeCode, $code, $body)
```

Update/create an asset attribute option for a given asset family

This endpoint allows you to update a given option for a given attribute and a given asset family. Learn more about the <a href=\"/documentation/update.html#update-behavior\">Update behavior</a>. Note that if the option does not already exist for the given attribute of the given asset family, it creates it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AssetAttributeOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assetFamilyCode = 'assetFamilyCode_example'; // string | Code of the asset family
$attributeCode = 'attributeCode_example'; // string | Code of the attribute
$code = 'code_example'; // string | Code of the resource
$body = new \Efsa\AkeneoApi\Model\InlineObject5(); // \Efsa\AkeneoApi\Model\InlineObject5

try {
    $apiInstance->patchAssetAttributesAttributeCodeOptionsCode($assetFamilyCode, $attributeCode, $code, $body);
} catch (Exception $e) {
    echo 'Exception when calling AssetAttributeOptionApi->patchAssetAttributesAttributeCodeOptionsCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assetFamilyCode** | **string**| Code of the asset family |
 **attributeCode** | **string**| Code of the attribute |
 **code** | **string**| Code of the resource |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject5**](../Model/InlineObject5.md)|  |

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
