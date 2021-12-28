# Efsa\AkeneoApi\AttributeApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAttributes()**](AttributeApi.md#getAttributes) | **GET** /api/rest/v1/attributes | Get list of attributes
[**getAttributesCode()**](AttributeApi.md#getAttributesCode) | **GET** /api/rest/v1/attributes/{code} | Get an attribute
[**patchAttributes()**](AttributeApi.md#patchAttributes) | **PATCH** /api/rest/v1/attributes | Update/create several attributes
[**patchAttributesCode()**](AttributeApi.md#patchAttributesCode) | **PATCH** /api/rest/v1/attributes/{code} | Update/create an attribute
[**postAttributes()**](AttributeApi.md#postAttributes) | **POST** /api/rest/v1/attributes | Create a new attribute


## `getAttributes()`

```php
getAttributes($search, $page, $limit, $withCount): \Efsa\AkeneoApi\Model\Attributes
```

Get list of attributes

This endpoint allows you to get a list of attributes. Attributes are paginated and sorted by code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = 'search_example'; // string | Filter attributes, for more details see the <a href=\"/documentation/filter.html#filter-attributes\">Filters</a> section.
$page = 1; // int | Number of the page to retrieve when using the `page` pagination method type. <strong>Should never be set manually</strong>, see <a href=\"/documentation/pagination.html#pagination\">Pagination</a> section
$limit = 10; // int | Number of results by page, see <a href=\"/documentation/pagination.html\">Pagination</a> section
$withCount = false; // bool | Return the count of products in the response. Be carefull with that, on a big catalog, it can decrease performance in a significative way

try {
    $result = $apiInstance->getAttributes($search, $page, $limit, $withCount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->getAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Filter attributes, for more details see the &lt;a href&#x3D;\&quot;/documentation/filter.html#filter-attributes\&quot;&gt;Filters&lt;/a&gt; section. | [optional]
 **page** | **int**| Number of the page to retrieve when using the &#x60;page&#x60; pagination method type. &lt;strong&gt;Should never be set manually&lt;/strong&gt;, see &lt;a href&#x3D;\&quot;/documentation/pagination.html#pagination\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to 1]
 **limit** | **int**| Number of results by page, see &lt;a href&#x3D;\&quot;/documentation/pagination.html\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to 10]
 **withCount** | **bool**| Return the count of products in the response. Be carefull with that, on a big catalog, it can decrease performance in a significative way | [optional] [default to false]

### Return type

[**\Efsa\AkeneoApi\Model\Attributes**](../Model/Attributes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `_embedded`, `_links`, `current_page`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttributesCode()`

```php
getAttributesCode($code): \Efsa\AkeneoApi\Model\InlineObject21
```

Get an attribute

This endpoint allows you to get the information about a given attribute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource

try {
    $result = $apiInstance->getAttributesCode($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->getAttributesCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of the resource |

### Return type

[**\Efsa\AkeneoApi\Model\InlineObject21**](../Model/InlineObject21.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchAttributes()`

```php
patchAttributes($body): \Efsa\AkeneoApi\Model\InlineResponse2002
```

Update/create several attributes

This endpoint allows you to update and/or create several attributes at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Efsa\AkeneoApi\Model\InlineObject22(); // \Efsa\AkeneoApi\Model\InlineObject22

try {
    $result = $apiInstance->patchAttributes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->patchAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject22**](../Model/InlineObject22.md)|  | [optional]

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

## `patchAttributesCode()`

```php
patchAttributesCode($code, $body)
```

Update/create an attribute

This endpoint allows you to update a given attribute. Know more about <a href=\"/documentation/update.html#update-behavior\">Update behavior</a>. Note that if no attribute exists for the given code, it creates it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource
$body = new \Efsa\AkeneoApi\Model\InlineObject26(); // \Efsa\AkeneoApi\Model\InlineObject26

try {
    $apiInstance->patchAttributesCode($code, $body);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->patchAttributesCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of the resource |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject26**](../Model/InlineObject26.md)|  |

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

## `postAttributes()`

```php
postAttributes($body)
```

Create a new attribute

This endpoint allows you to create a new attribute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Efsa\AkeneoApi\Model\InlineObject21(); // \Efsa\AkeneoApi\Model\InlineObject21

try {
    $apiInstance->postAttributes($body);
} catch (Exception $e) {
    echo 'Exception when calling AttributeApi->postAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject21**](../Model/InlineObject21.md)|  | [optional]

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
