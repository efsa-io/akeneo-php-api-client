# Efsa\AkeneoApi\ReferenceEntityAttributeOptionApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReferenceEntityAttributesAttributeCodeOptions()**](ReferenceEntityAttributeOptionApi.md#getReferenceEntityAttributesAttributeCodeOptions) | **GET** /api/rest/v1/reference-entities/{reference_entity_code}/attributes/{attribute_code}/options | Get a list of attribute options of a given attribute for a given reference entity
[**getReferenceEntityAttributesAttributeCodeOptionsCode()**](ReferenceEntityAttributeOptionApi.md#getReferenceEntityAttributesAttributeCodeOptionsCode) | **GET** /api/rest/v1/reference-entities/{reference_entity_code}/attributes/{attribute_code}/options/{code} | Get an attribute option for a given attribute of a given reference entity
[**patchReferenceEntityAttributesAttributeCodeOptionsCode()**](ReferenceEntityAttributeOptionApi.md#patchReferenceEntityAttributesAttributeCodeOptionsCode) | **PATCH** /api/rest/v1/reference-entities/{reference_entity_code}/attributes/{attribute_code}/options/{code} | Update/create a reference entity attribute option


## `getReferenceEntityAttributesAttributeCodeOptions()`

```php
getReferenceEntityAttributesAttributeCodeOptions($referenceEntityCode, $attributeCode): \Efsa\AkeneoApi\Model\InlineResponse20019[]
```

Get a list of attribute options of a given attribute for a given reference entity

This endpoint allows you to get a list of attribute options for a given reference entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ReferenceEntityAttributeOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$referenceEntityCode = 'referenceEntityCode_example'; // string | Code of the reference entity
$attributeCode = 'attributeCode_example'; // string | Code of the attribute

try {
    $result = $apiInstance->getReferenceEntityAttributesAttributeCodeOptions($referenceEntityCode, $attributeCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceEntityAttributeOptionApi->getReferenceEntityAttributesAttributeCodeOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **referenceEntityCode** | **string**| Code of the reference entity |
 **attributeCode** | **string**| Code of the attribute |

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse20019[]**](../Model/InlineResponse20019.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReferenceEntityAttributesAttributeCodeOptionsCode()`

```php
getReferenceEntityAttributesAttributeCodeOptionsCode($referenceEntityCode, $attributeCode, $code): \Efsa\AkeneoApi\Model\InlineResponse20019
```

Get an attribute option for a given attribute of a given reference entity

This endpoint allows you to get the information about a given attribute option.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ReferenceEntityAttributeOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$referenceEntityCode = 'referenceEntityCode_example'; // string | Code of the reference entity
$attributeCode = 'attributeCode_example'; // string | Code of the attribute
$code = 'code_example'; // string | Code of the resource

try {
    $result = $apiInstance->getReferenceEntityAttributesAttributeCodeOptionsCode($referenceEntityCode, $attributeCode, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceEntityAttributeOptionApi->getReferenceEntityAttributesAttributeCodeOptionsCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **referenceEntityCode** | **string**| Code of the reference entity |
 **attributeCode** | **string**| Code of the attribute |
 **code** | **string**| Code of the resource |

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchReferenceEntityAttributesAttributeCodeOptionsCode()`

```php
patchReferenceEntityAttributesAttributeCodeOptionsCode($referenceEntityCode, $attributeCode, $code, $body)
```

Update/create a reference entity attribute option

This endpoint allows you to update a given option for a given attribute and a given reference entity. Learn more about <a href=\"/documentation/update.html#patch-reference-entity-record-values\">Update behavior</a>. Note that if the option does not already exist for the given attribute of the given reference entity, it creates it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ReferenceEntityAttributeOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$referenceEntityCode = 'referenceEntityCode_example'; // string | Code of the reference entity
$attributeCode = 'attributeCode_example'; // string | Code of the attribute
$code = 'code_example'; // string | Code of the resource
$body = new \Efsa\AkeneoApi\Model\InlineObject48(); // \Efsa\AkeneoApi\Model\InlineObject48

try {
    $apiInstance->patchReferenceEntityAttributesAttributeCodeOptionsCode($referenceEntityCode, $attributeCode, $code, $body);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceEntityAttributeOptionApi->patchReferenceEntityAttributesAttributeCodeOptionsCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **referenceEntityCode** | **string**| Code of the reference entity |
 **attributeCode** | **string**| Code of the attribute |
 **code** | **string**| Code of the resource |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject48**](../Model/InlineObject48.md)|  |

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
