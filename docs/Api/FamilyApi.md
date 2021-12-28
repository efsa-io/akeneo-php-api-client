# Efsa\AkeneoApi\FamilyApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getFamilies()**](FamilyApi.md#getFamilies) | **GET** /api/rest/v1/families | Get list of families
[**getFamiliesCode()**](FamilyApi.md#getFamiliesCode) | **GET** /api/rest/v1/families/{code} | Get a family
[**patchFamilies()**](FamilyApi.md#patchFamilies) | **PATCH** /api/rest/v1/families | Update/create several families
[**patchFamiliesCode()**](FamilyApi.md#patchFamiliesCode) | **PATCH** /api/rest/v1/families/{code} | Update/create a family
[**postFamilies()**](FamilyApi.md#postFamilies) | **POST** /api/rest/v1/families | Create a new family
[**postFamiliesFamilyCodeVariants()**](FamilyApi.md#postFamiliesFamilyCodeVariants) | **POST** /api/rest/v1/families/{family_code}/variants | Create a new family variant


## `getFamilies()`

```php
getFamilies($search, $page, $limit, $withCount): \Efsa\AkeneoApi\Model\Families
```

Get list of families

This endpoint allows you to get a list of families. Families are paginated and sorted by code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\FamilyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = 'search_example'; // string | Filter families, for more details see the <a href=\"/documentation/filter.html#filter-families\">Filters</a> section.
$page = 1; // int | Number of the page to retrieve when using the `page` pagination method type. <strong>Should never be set manually</strong>, see <a href=\"/documentation/pagination.html#pagination\">Pagination</a> section
$limit = 10; // int | Number of results by page, see <a href=\"/documentation/pagination.html\">Pagination</a> section
$withCount = false; // bool | Return the count of products in the response. Be carefull with that, on a big catalog, it can decrease performance in a significative way

try {
    $result = $apiInstance->getFamilies($search, $page, $limit, $withCount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FamilyApi->getFamilies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Filter families, for more details see the &lt;a href&#x3D;\&quot;/documentation/filter.html#filter-families\&quot;&gt;Filters&lt;/a&gt; section. | [optional]
 **page** | **int**| Number of the page to retrieve when using the &#x60;page&#x60; pagination method type. &lt;strong&gt;Should never be set manually&lt;/strong&gt;, see &lt;a href&#x3D;\&quot;/documentation/pagination.html#pagination\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to 1]
 **limit** | **int**| Number of results by page, see &lt;a href&#x3D;\&quot;/documentation/pagination.html\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to 10]
 **withCount** | **bool**| Return the count of products in the response. Be carefull with that, on a big catalog, it can decrease performance in a significative way | [optional] [default to false]

### Return type

[**\Efsa\AkeneoApi\Model\Families**](../Model/Families.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `_embedded`, `_links`, `current_page`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFamiliesCode()`

```php
getFamiliesCode($code): \Efsa\AkeneoApi\Model\InlineObject33
```

Get a family

This endpoint allows you to get the information about a given family.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\FamilyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource

try {
    $result = $apiInstance->getFamiliesCode($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FamilyApi->getFamiliesCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of the resource |

### Return type

[**\Efsa\AkeneoApi\Model\InlineObject33**](../Model/InlineObject33.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchFamilies()`

```php
patchFamilies($body): \Efsa\AkeneoApi\Model\InlineResponse2002
```

Update/create several families

This endpoint allows you to update and/or create several families at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\FamilyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Efsa\AkeneoApi\Model\InlineObject34(); // \Efsa\AkeneoApi\Model\InlineObject34

try {
    $result = $apiInstance->patchFamilies($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FamilyApi->patchFamilies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject34**](../Model/InlineObject34.md)|  | [optional]

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

## `patchFamiliesCode()`

```php
patchFamiliesCode($code, $body)
```

Update/create a family

This endpoint allows you to update a given family. Know more about <a href=\"/documentation/update.html#update-behavior\">Update behavior</a>. Note that if no family exists for the given code, it creates it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\FamilyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource
$body = new \Efsa\AkeneoApi\Model\InlineObject35(); // \Efsa\AkeneoApi\Model\InlineObject35

try {
    $apiInstance->patchFamiliesCode($code, $body);
} catch (Exception $e) {
    echo 'Exception when calling FamilyApi->patchFamiliesCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of the resource |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject35**](../Model/InlineObject35.md)|  |

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

## `postFamilies()`

```php
postFamilies($body)
```

Create a new family

This endpoint allows you to create a new family.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\FamilyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Efsa\AkeneoApi\Model\InlineObject33(); // \Efsa\AkeneoApi\Model\InlineObject33

try {
    $apiInstance->postFamilies($body);
} catch (Exception $e) {
    echo 'Exception when calling FamilyApi->postFamilies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject33**](../Model/InlineObject33.md)|  | [optional]

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

## `postFamiliesFamilyCodeVariants()`

```php
postFamiliesFamilyCodeVariants($familyCode, $body)
```

Create a new family variant

This endpoint allows you to create a family variant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\FamilyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$familyCode = 'familyCode_example'; // string | Code of the family
$body = new \Efsa\AkeneoApi\Model\InlineObject36(); // \Efsa\AkeneoApi\Model\InlineObject36

try {
    $apiInstance->postFamiliesFamilyCodeVariants($familyCode, $body);
} catch (Exception $e) {
    echo 'Exception when calling FamilyApi->postFamiliesFamilyCodeVariants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **familyCode** | **string**| Code of the family |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject36**](../Model/InlineObject36.md)|  | [optional]

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
