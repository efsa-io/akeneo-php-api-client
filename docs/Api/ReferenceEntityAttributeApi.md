# Efsa\AkeneoApi\ReferenceEntityAttributeApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReferenceEntitiesCodeAttributes()**](ReferenceEntityAttributeApi.md#getReferenceEntitiesCodeAttributes) | **GET** /api/rest/v1/reference-entities/{reference_entity_code}/attributes | Get the list of attributes of a given reference entity
[**getReferenceEntityAttributesCode()**](ReferenceEntityAttributeApi.md#getReferenceEntityAttributesCode) | **GET** /api/rest/v1/reference-entities/{reference_entity_code}/attributes/{code} | Get an attribute of a given reference entity
[**patchReferenceEntityAttributesCode()**](ReferenceEntityAttributeApi.md#patchReferenceEntityAttributesCode) | **PATCH** /api/rest/v1/reference-entities/{reference_entity_code}/attributes/{code} | Update/create an attribute of a given reference entity


## `getReferenceEntitiesCodeAttributes()`

```php
getReferenceEntitiesCodeAttributes($referenceEntityCode): \Efsa\AkeneoApi\Model\InlineResponse20018[]
```

Get the list of attributes of a given reference entity

This endpoint allows you to get the list of attributes of a given reference entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ReferenceEntityAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$referenceEntityCode = 'referenceEntityCode_example'; // string | Code of the reference entity

try {
    $result = $apiInstance->getReferenceEntitiesCodeAttributes($referenceEntityCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceEntityAttributeApi->getReferenceEntitiesCodeAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **referenceEntityCode** | **string**| Code of the reference entity |

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse20018[]**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReferenceEntityAttributesCode()`

```php
getReferenceEntityAttributesCode($referenceEntityCode, $code): \Efsa\AkeneoApi\Model\InlineResponse20018
```

Get an attribute of a given reference entity

This endpoint allows you to get the information about a given attribute for a given reference entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ReferenceEntityAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$referenceEntityCode = 'referenceEntityCode_example'; // string | Code of the reference entity
$code = 'code_example'; // string | Code of the resource

try {
    $result = $apiInstance->getReferenceEntityAttributesCode($referenceEntityCode, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceEntityAttributeApi->getReferenceEntityAttributesCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **referenceEntityCode** | **string**| Code of the reference entity |
 **code** | **string**| Code of the resource |

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchReferenceEntityAttributesCode()`

```php
patchReferenceEntityAttributesCode($referenceEntityCode, $code, $body)
```

Update/create an attribute of a given reference entity

This endpoint allows you to update a given attribute for a given renference entity. Note that if the attribute does not already exist for the given reference entity, it creates it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ReferenceEntityAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$referenceEntityCode = 'referenceEntityCode_example'; // string | Code of the reference entity
$code = 'code_example'; // string | Code of the resource
$body = new \Efsa\AkeneoApi\Model\InlineObject49(); // \Efsa\AkeneoApi\Model\InlineObject49

try {
    $apiInstance->patchReferenceEntityAttributesCode($referenceEntityCode, $code, $body);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceEntityAttributeApi->patchReferenceEntityAttributesCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **referenceEntityCode** | **string**| Code of the reference entity |
 **code** | **string**| Code of the resource |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject49**](../Model/InlineObject49.md)|  |

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
