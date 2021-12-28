# Efsa\AkeneoApi\AttributeOptionApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAttributesAttributeCodeOptions()**](AttributeOptionApi.md#getAttributesAttributeCodeOptions) | **GET** /api/rest/v1/attributes/{attribute_code}/options | Get list of attribute options
[**getAttributesAttributeCodeOptionsCode()**](AttributeOptionApi.md#getAttributesAttributeCodeOptionsCode) | **GET** /api/rest/v1/attributes/{attribute_code}/options/{code} | Get an attribute option
[**patchAttributesAttributeCodeOptions()**](AttributeOptionApi.md#patchAttributesAttributeCodeOptions) | **PATCH** /api/rest/v1/attributes/{attribute_code}/options | Update/create several attribute options
[**patchAttributesAttributeCodeOptionsCode()**](AttributeOptionApi.md#patchAttributesAttributeCodeOptionsCode) | **PATCH** /api/rest/v1/attributes/{attribute_code}/options/{code} | Update/create an attribute option
[**postAttributesAttributeCodeOptions()**](AttributeOptionApi.md#postAttributesAttributeCodeOptions) | **POST** /api/rest/v1/attributes/{attribute_code}/options | Create a new attribute option


## `getAttributesAttributeCodeOptions()`

```php
getAttributesAttributeCodeOptions($attributeCode, $page, $limit, $withCount): \Efsa\AkeneoApi\Model\AttributeOptions
```

Get list of attribute options

This endpoint allows you to get a list of attribute options. Attribute options are paginated and sorted by code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AttributeOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attributeCode = 'attributeCode_example'; // string | Code of the attribute
$page = 1; // int | Number of the page to retrieve when using the `page` pagination method type. <strong>Should never be set manually</strong>, see <a href=\"/documentation/pagination.html#pagination\">Pagination</a> section
$limit = 10; // int | Number of results by page, see <a href=\"/documentation/pagination.html\">Pagination</a> section
$withCount = false; // bool | Return the count of products in the response. Be carefull with that, on a big catalog, it can decrease performance in a significative way

try {
    $result = $apiInstance->getAttributesAttributeCodeOptions($attributeCode, $page, $limit, $withCount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeOptionApi->getAttributesAttributeCodeOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeCode** | **string**| Code of the attribute |
 **page** | **int**| Number of the page to retrieve when using the &#x60;page&#x60; pagination method type. &lt;strong&gt;Should never be set manually&lt;/strong&gt;, see &lt;a href&#x3D;\&quot;/documentation/pagination.html#pagination\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to 1]
 **limit** | **int**| Number of results by page, see &lt;a href&#x3D;\&quot;/documentation/pagination.html\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to 10]
 **withCount** | **bool**| Return the count of products in the response. Be carefull with that, on a big catalog, it can decrease performance in a significative way | [optional] [default to false]

### Return type

[**\Efsa\AkeneoApi\Model\AttributeOptions**](../Model/AttributeOptions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `_embedded`, `_links`, `current_page`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttributesAttributeCodeOptionsCode()`

```php
getAttributesAttributeCodeOptionsCode($attributeCode, $code): \Efsa\AkeneoApi\Model\InlineObject23
```

Get an attribute option

This endpoint allows you to get the information about a given attribute option.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AttributeOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attributeCode = 'attributeCode_example'; // string | Code of the attribute
$code = 'code_example'; // string | Code of the resource

try {
    $result = $apiInstance->getAttributesAttributeCodeOptionsCode($attributeCode, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeOptionApi->getAttributesAttributeCodeOptionsCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeCode** | **string**| Code of the attribute |
 **code** | **string**| Code of the resource |

### Return type

[**\Efsa\AkeneoApi\Model\InlineObject23**](../Model/InlineObject23.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchAttributesAttributeCodeOptions()`

```php
patchAttributesAttributeCodeOptions($attributeCode, $body): \Efsa\AkeneoApi\Model\InlineResponse2002
```

Update/create several attribute options

This endpoint allows you to update several attribute options at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AttributeOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attributeCode = 'attributeCode_example'; // string | Code of the attribute
$body = new \Efsa\AkeneoApi\Model\InlineObject24(); // \Efsa\AkeneoApi\Model\InlineObject24

try {
    $result = $apiInstance->patchAttributesAttributeCodeOptions($attributeCode, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeOptionApi->patchAttributesAttributeCodeOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeCode** | **string**| Code of the attribute |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject24**](../Model/InlineObject24.md)|  | [optional]

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `x-example-1`, `x-example-2`, `x-example-3`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchAttributesAttributeCodeOptionsCode()`

```php
patchAttributesAttributeCodeOptionsCode($attributeCode, $code, $body)
```

Update/create an attribute option

This endpoint allows you to update a given attribute option. Know more about <a href=\"/documentation/update.html#update-behavior\">Update behavior</a>. Note that if no attribute option exists for the given code, it creates it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AttributeOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attributeCode = 'attributeCode_example'; // string | Code of the attribute
$code = 'code_example'; // string | Code of the resource
$body = new \Efsa\AkeneoApi\Model\InlineObject25(); // \Efsa\AkeneoApi\Model\InlineObject25

try {
    $apiInstance->patchAttributesAttributeCodeOptionsCode($attributeCode, $code, $body);
} catch (Exception $e) {
    echo 'Exception when calling AttributeOptionApi->patchAttributesAttributeCodeOptionsCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeCode** | **string**| Code of the attribute |
 **code** | **string**| Code of the resource |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject25**](../Model/InlineObject25.md)|  |

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

## `postAttributesAttributeCodeOptions()`

```php
postAttributesAttributeCodeOptions($attributeCode, $body)
```

Create a new attribute option

This endpoint allows you to create a new attribute option.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AttributeOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attributeCode = 'attributeCode_example'; // string | Code of the attribute
$body = new \Efsa\AkeneoApi\Model\InlineObject23(); // \Efsa\AkeneoApi\Model\InlineObject23

try {
    $apiInstance->postAttributesAttributeCodeOptions($attributeCode, $body);
} catch (Exception $e) {
    echo 'Exception when calling AttributeOptionApi->postAttributesAttributeCodeOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attributeCode** | **string**| Code of the attribute |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject23**](../Model/InlineObject23.md)|  | [optional]

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
