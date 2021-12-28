# Efsa\AkeneoApi\PublishedProductApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPublishedProducts()**](PublishedProductApi.md#getPublishedProducts) | **GET** /api/rest/v1/published-products | Get list of published products
[**getPublishedProductsCode()**](PublishedProductApi.md#getPublishedProductsCode) | **GET** /api/rest/v1/published-products/{code} | Get a published product


## `getPublishedProducts()`

```php
getPublishedProducts($search, $scope, $locales, $attributes, $paginationType, $page, $searchAfter, $limit, $withCount): \Efsa\AkeneoApi\Model\Products
```

Get list of published products

This endpoint allows you to get a list of published products. Published products are paginated and they can be filtered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\PublishedProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = 'search_example'; // string | Filter published products, for more details see the <a href=\"/documentation/filter.html\">Filters</a> section
$scope = 'scope_example'; // string | Filter published product values to return scopable attributes for the given channel as well as the non localizable/non scopable attributes, for more details see the <a href=\"/documentation/filter.html#filter-product-values\">Filter on published product values</a> section
$locales = 'locales_example'; // string | Filter published product values to return localizable attributes for the given locales as well as the non localizable/non scopable attributes, for more details see the <a href=\"/documentation/filter.html#filter-product-values\">Filter on published product values</a> section
$attributes = 'attributes_example'; // string | Filter published product values to only return those concerning the given attributes, for more details see the <a href=\"/documentation/filter.html#filter-product-values\">Filter on product values</a> section
$paginationType = 'page'; // string | Pagination method type, see <a href=\"/documentation/pagination.html\">Pagination</a> section
$page = 1; // int | Number of the page to retrieve when using the `page` pagination method type. <strong>Should never be set manually</strong>, see <a href=\"/documentation/pagination.html#pagination\">Pagination</a> section
$searchAfter = 'cursor to the first page'; // string | Cursor when using the `search_after` pagination method type. <strong>Should never be set manually</strong>, see <a href=\"/documentation/pagination.html\">Pagination</a> section
$limit = 10; // int | Number of results by page, see <a href=\"/documentation/pagination.html\">Pagination</a> section
$withCount = false; // bool | Return the count of products in the response. Be carefull with that, on a big catalog, it can decrease performance in a significative way

try {
    $result = $apiInstance->getPublishedProducts($search, $scope, $locales, $attributes, $paginationType, $page, $searchAfter, $limit, $withCount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishedProductApi->getPublishedProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Filter published products, for more details see the &lt;a href&#x3D;\&quot;/documentation/filter.html\&quot;&gt;Filters&lt;/a&gt; section | [optional]
 **scope** | **string**| Filter published product values to return scopable attributes for the given channel as well as the non localizable/non scopable attributes, for more details see the &lt;a href&#x3D;\&quot;/documentation/filter.html#filter-product-values\&quot;&gt;Filter on published product values&lt;/a&gt; section | [optional]
 **locales** | **string**| Filter published product values to return localizable attributes for the given locales as well as the non localizable/non scopable attributes, for more details see the &lt;a href&#x3D;\&quot;/documentation/filter.html#filter-product-values\&quot;&gt;Filter on published product values&lt;/a&gt; section | [optional]
 **attributes** | **string**| Filter published product values to only return those concerning the given attributes, for more details see the &lt;a href&#x3D;\&quot;/documentation/filter.html#filter-product-values\&quot;&gt;Filter on product values&lt;/a&gt; section | [optional]
 **paginationType** | **string**| Pagination method type, see &lt;a href&#x3D;\&quot;/documentation/pagination.html\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to &#39;page&#39;]
 **page** | **int**| Number of the page to retrieve when using the &#x60;page&#x60; pagination method type. &lt;strong&gt;Should never be set manually&lt;/strong&gt;, see &lt;a href&#x3D;\&quot;/documentation/pagination.html#pagination\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to 1]
 **searchAfter** | **string**| Cursor when using the &#x60;search_after&#x60; pagination method type. &lt;strong&gt;Should never be set manually&lt;/strong&gt;, see &lt;a href&#x3D;\&quot;/documentation/pagination.html\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to &#39;cursor to the first page&#39;]
 **limit** | **int**| Number of results by page, see &lt;a href&#x3D;\&quot;/documentation/pagination.html\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to 10]
 **withCount** | **bool**| Return the count of products in the response. Be carefull with that, on a big catalog, it can decrease performance in a significative way | [optional] [default to false]

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

## `getPublishedProductsCode()`

```php
getPublishedProductsCode($code): \Efsa\AkeneoApi\Model\InlineResponse20016
```

Get a published product

This endpoint allows you to get the information about a given published product.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\PublishedProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource

try {
    $result = $apiInstance->getPublishedProductsCode($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublishedProductApi->getPublishedProductsCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of the resource |

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
