# Efsa\AkeneoApi\ProductApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProductsCode()**](ProductApi.md#deleteProductsCode) | **DELETE** /api/rest/v1/products/{code} | Delete a product
[**getDraftCode()**](ProductApi.md#getDraftCode) | **GET** /api/rest/v1/products/{code}/draft | Get a draft
[**getProducts()**](ProductApi.md#getProducts) | **GET** /api/rest/v1/products | Get list of products
[**getProductsCode()**](ProductApi.md#getProductsCode) | **GET** /api/rest/v1/products/{code} | Get a product
[**patchProducts()**](ProductApi.md#patchProducts) | **PATCH** /api/rest/v1/products | Update/create several products
[**patchProductsCode()**](ProductApi.md#patchProductsCode) | **PATCH** /api/rest/v1/products/{code} | Update/create a product
[**postProducts()**](ProductApi.md#postProducts) | **POST** /api/rest/v1/products | Create a new product
[**postProposal()**](ProductApi.md#postProposal) | **POST** /api/rest/v1/products/{code}/proposal | Submit a draft for approval


## `deleteProductsCode()`

```php
deleteProductsCode($code)
```

Delete a product

This endpoint allows you to delete a given product. In the Enterprise Edition, since the 2.0, permissions based on your user groups are applied to the product you try to delete.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource

try {
    $apiInstance->deleteProductsCode($code);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->deleteProductsCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of the resource |

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

## `getDraftCode()`

```php
getDraftCode($code): \Efsa\AkeneoApi\Model\InlineObject45
```

Get a draft

This endpoint allows you to get the information about a given draft.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource

try {
    $result = $apiInstance->getDraftCode($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getDraftCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of the resource |

### Return type

[**\Efsa\AkeneoApi\Model\InlineObject45**](../Model/InlineObject45.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProducts()`

```php
getProducts($search, $scope, $locales, $attributes, $paginationType, $page, $searchAfter, $limit, $withCount, $withAttributeOptions, $withQualityScores, $withCompletenesses): \Efsa\AkeneoApi\Model\Products
```

Get list of products

This endpoint allows you to get a list of products. Products are paginated and they can be filtered. In the Enterprise Edition, since the 2.0, permissions based on your user groups are applied to the set of products you request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = 'search_example'; // string | Filter products, for more details see the <a href=\"/documentation/filter.html\">Filters</a> section
$scope = 'scope_example'; // string | Filter product values to return scopable attributes for the given channel as well as the non localizable/non scopable attributes, for more details see the <a href=\"/documentation/filter.html#via-channel\">Filter product values via channel</a> section
$locales = 'locales_example'; // string | Filter product values to return localizable attributes for the given locales as well as the non localizable/non scopable attributes, for more details see the <a href=\"/documentation/filter.html#via-locale\">Filter product values via locale</a> section
$attributes = 'attributes_example'; // string | Filter product values to only return those concerning the given attributes, for more details see the <a href=\"/documentation/filter.html#filter-product-values\">Filter on product values</a> section
$paginationType = 'page'; // string | Pagination method type, see <a href=\"/documentation/pagination.html\">Pagination</a> section
$page = 1; // int | Number of the page to retrieve when using the `page` pagination method type. <strong>Should never be set manually</strong>, see <a href=\"/documentation/pagination.html#pagination\">Pagination</a> section
$searchAfter = 'cursor to the first page'; // string | Cursor when using the `search_after` pagination method type. <strong>Should never be set manually</strong>, see <a href=\"/documentation/pagination.html\">Pagination</a> section
$limit = 10; // int | Number of results by page, see <a href=\"/documentation/pagination.html\">Pagination</a> section
$withCount = false; // bool | Return the count of products in the response. Be carefull with that, on a big catalog, it can decrease performance in a significative way
$withAttributeOptions = false; // bool | Return labels of attribute options in the response. (Only available since the 5.0 version)
$withQualityScores = false; // bool | Return product quality scores in the response. (Only available since the 5.0 version)
$withCompletenesses = false; // bool | Return product completenesses in the response. (Only available on SaaS platforms)

try {
    $result = $apiInstance->getProducts($search, $scope, $locales, $attributes, $paginationType, $page, $searchAfter, $limit, $withCount, $withAttributeOptions, $withQualityScores, $withCompletenesses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Filter products, for more details see the &lt;a href&#x3D;\&quot;/documentation/filter.html\&quot;&gt;Filters&lt;/a&gt; section | [optional]
 **scope** | **string**| Filter product values to return scopable attributes for the given channel as well as the non localizable/non scopable attributes, for more details see the &lt;a href&#x3D;\&quot;/documentation/filter.html#via-channel\&quot;&gt;Filter product values via channel&lt;/a&gt; section | [optional]
 **locales** | **string**| Filter product values to return localizable attributes for the given locales as well as the non localizable/non scopable attributes, for more details see the &lt;a href&#x3D;\&quot;/documentation/filter.html#via-locale\&quot;&gt;Filter product values via locale&lt;/a&gt; section | [optional]
 **attributes** | **string**| Filter product values to only return those concerning the given attributes, for more details see the &lt;a href&#x3D;\&quot;/documentation/filter.html#filter-product-values\&quot;&gt;Filter on product values&lt;/a&gt; section | [optional]
 **paginationType** | **string**| Pagination method type, see &lt;a href&#x3D;\&quot;/documentation/pagination.html\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to &#39;page&#39;]
 **page** | **int**| Number of the page to retrieve when using the &#x60;page&#x60; pagination method type. &lt;strong&gt;Should never be set manually&lt;/strong&gt;, see &lt;a href&#x3D;\&quot;/documentation/pagination.html#pagination\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to 1]
 **searchAfter** | **string**| Cursor when using the &#x60;search_after&#x60; pagination method type. &lt;strong&gt;Should never be set manually&lt;/strong&gt;, see &lt;a href&#x3D;\&quot;/documentation/pagination.html\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to &#39;cursor to the first page&#39;]
 **limit** | **int**| Number of results by page, see &lt;a href&#x3D;\&quot;/documentation/pagination.html\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to 10]
 **withCount** | **bool**| Return the count of products in the response. Be carefull with that, on a big catalog, it can decrease performance in a significative way | [optional] [default to false]
 **withAttributeOptions** | **bool**| Return labels of attribute options in the response. (Only available since the 5.0 version) | [optional] [default to false]
 **withQualityScores** | **bool**| Return product quality scores in the response. (Only available since the 5.0 version) | [optional] [default to false]
 **withCompletenesses** | **bool**| Return product completenesses in the response. (Only available on SaaS platforms) | [optional] [default to false]

### Return type

[**\Efsa\AkeneoApi\Model\Products**](../Model/Products.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `_embedded`, `_links`, `current_page`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProductsCode()`

```php
getProductsCode($code, $withAttributeOptions, $withQualityScores, $withCompletenesses): \Efsa\AkeneoApi\Model\InlineObject43
```

Get a product

This endpoint allows you to get the information about a given product. In the Entreprise Edition, since the v2.0, permissions based on your user groups are applied to the product you request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource
$withAttributeOptions = false; // bool | Return labels of attribute options in the response. (Only available since the 5.0 version)
$withQualityScores = false; // bool | Return product quality scores in the response. (Only available since the 5.0 version)
$withCompletenesses = false; // bool | Return product completenesses in the response. (Only available on SaaS platforms)

try {
    $result = $apiInstance->getProductsCode($code, $withAttributeOptions, $withQualityScores, $withCompletenesses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProductsCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of the resource |
 **withAttributeOptions** | **bool**| Return labels of attribute options in the response. (Only available since the 5.0 version) | [optional] [default to false]
 **withQualityScores** | **bool**| Return product quality scores in the response. (Only available since the 5.0 version) | [optional] [default to false]
 **withCompletenesses** | **bool**| Return product completenesses in the response. (Only available on SaaS platforms) | [optional] [default to false]

### Return type

[**\Efsa\AkeneoApi\Model\InlineObject43**](../Model/InlineObject43.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchProducts()`

```php
patchProducts($body): \Efsa\AkeneoApi\Model\InlineResponse2002
```

Update/create several products

This endpoint allows you to update and/or create several products at once. Learn more about <a href=\"/documentation/update.html#update-behavior\">Update behavior</a>. Note that if no product exists for the given identifier, it creates it. In the Enterprise Edition, since the v2.0, permissions based on your user groups are applied to the products you try to update. It may result in the creation of drafts if you only have edit rights through the product's categories.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Efsa\AkeneoApi\Model\InlineObject44(); // \Efsa\AkeneoApi\Model\InlineObject44

try {
    $result = $apiInstance->patchProducts($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->patchProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject44**](../Model/InlineObject44.md)|  | [optional]

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

## `patchProductsCode()`

```php
patchProductsCode($code, $body)
```

Update/create a product

This endpoint allows you to update a given product. Learn more about <a href=\"/documentation/update.html#update-behavior\">Update behavior</a>. Note that if no product exists for the given identifier, it creates it. In the Entreprise Edition, since the v2.0, permissions based on your user groups are applied to the product you try to update. It may result in the creation of a draft if you only have edit rights through the product's categories.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource
$body = new \Efsa\AkeneoApi\Model\InlineObject45(); // \Efsa\AkeneoApi\Model\InlineObject45

try {
    $apiInstance->patchProductsCode($code, $body);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->patchProductsCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of the resource |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject45**](../Model/InlineObject45.md)|  |

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

## `postProducts()`

```php
postProducts($body)
```

Create a new product

This endpoint allows you to create a new product. In the Enterprise Edition, since the v2.0, permissions based on your user groups are applied to the product you try to create.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Efsa\AkeneoApi\Model\InlineObject43(); // \Efsa\AkeneoApi\Model\InlineObject43

try {
    $apiInstance->postProducts($body);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->postProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject43**](../Model/InlineObject43.md)|  | [optional]

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

## `postProposal()`

```php
postProposal($code)
```

Submit a draft for approval

This endpoint allows you to submit a draft for approval.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource

try {
    $apiInstance->postProposal($code);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->postProposal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of the resource |

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
