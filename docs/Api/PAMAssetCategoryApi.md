# Efsa\AkeneoApi\PAMAssetCategoryApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAssetCategories()**](PAMAssetCategoryApi.md#getAssetCategories) | **GET** /api/rest/v1/asset-categories | Get list of PAM asset categories
[**getAssetCategoriesCode()**](PAMAssetCategoryApi.md#getAssetCategoriesCode) | **GET** /api/rest/v1/asset-categories/{code} | Get a PAM asset category
[**patchAssetCategories()**](PAMAssetCategoryApi.md#patchAssetCategories) | **PATCH** /api/rest/v1/asset-categories | Update/create several PAM asset categories
[**patchAssetCategoriesCode()**](PAMAssetCategoryApi.md#patchAssetCategoriesCode) | **PATCH** /api/rest/v1/asset-categories/{code} | Update/create a PAM asset category
[**postAssetCategories()**](PAMAssetCategoryApi.md#postAssetCategories) | **POST** /api/rest/v1/asset-categories | Create a new PAM asset category


## `getAssetCategories()`

```php
getAssetCategories($page, $limit, $withCount): \Efsa\AkeneoApi\Model\PAMAssetCategories
```

Get list of PAM asset categories

This endpoint allows you to get a list of PAM asset categories. PAM asset categories are paginated and sorted by `root/left`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\PAMAssetCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 1; // int | Number of the page to retrieve when using the `page` pagination method type. <strong>Should never be set manually</strong>, see <a href=\"/documentation/pagination.html#pagination\">Pagination</a> section
$limit = 10; // int | Number of results by page, see <a href=\"/documentation/pagination.html\">Pagination</a> section
$withCount = false; // bool | Return the count of products in the response. Be carefull with that, on a big catalog, it can decrease performance in a significative way

try {
    $result = $apiInstance->getAssetCategories($page, $limit, $withCount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PAMAssetCategoryApi->getAssetCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Number of the page to retrieve when using the &#x60;page&#x60; pagination method type. &lt;strong&gt;Should never be set manually&lt;/strong&gt;, see &lt;a href&#x3D;\&quot;/documentation/pagination.html#pagination\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to 1]
 **limit** | **int**| Number of results by page, see &lt;a href&#x3D;\&quot;/documentation/pagination.html\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to 10]
 **withCount** | **bool**| Return the count of products in the response. Be carefull with that, on a big catalog, it can decrease performance in a significative way | [optional] [default to false]

### Return type

[**\Efsa\AkeneoApi\Model\PAMAssetCategories**](../Model/PAMAssetCategories.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `_embedded`, `_links`, `current_page`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetCategoriesCode()`

```php
getAssetCategoriesCode($code): \Efsa\AkeneoApi\Model\InlineObject1
```

Get a PAM asset category

This endpoint allows you to get the information about a given PAM asset category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\PAMAssetCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource

try {
    $result = $apiInstance->getAssetCategoriesCode($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PAMAssetCategoryApi->getAssetCategoriesCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of the resource |

### Return type

[**\Efsa\AkeneoApi\Model\InlineObject1**](../Model/InlineObject1.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchAssetCategories()`

```php
patchAssetCategories($body): \Efsa\AkeneoApi\Model\InlineResponse2002
```

Update/create several PAM asset categories

This endpoint allows you to update several PAM asset categories at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\PAMAssetCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Efsa\AkeneoApi\Model\InlineObject2(); // \Efsa\AkeneoApi\Model\InlineObject2

try {
    $result = $apiInstance->patchAssetCategories($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PAMAssetCategoryApi->patchAssetCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject2**](../Model/InlineObject2.md)|  | [optional]

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

## `patchAssetCategoriesCode()`

```php
patchAssetCategoriesCode($code, $body)
```

Update/create a PAM asset category

This endpoint allows you to update a given PAM asset category. Know more about <a href=\"/documentation/update.html#update-behavior\">Update behavior</a>. Note that if no category exists for the given code, it creates it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\PAMAssetCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource
$body = new \Efsa\AkeneoApi\Model\InlineObject3(); // \Efsa\AkeneoApi\Model\InlineObject3

try {
    $apiInstance->patchAssetCategoriesCode($code, $body);
} catch (Exception $e) {
    echo 'Exception when calling PAMAssetCategoryApi->patchAssetCategoriesCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of the resource |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject3**](../Model/InlineObject3.md)|  |

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

## `postAssetCategories()`

```php
postAssetCategories($body)
```

Create a new PAM asset category

This endpoint allows you to create a new PAM asset category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\PAMAssetCategoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Efsa\AkeneoApi\Model\InlineObject1(); // \Efsa\AkeneoApi\Model\InlineObject1

try {
    $apiInstance->postAssetCategories($body);
} catch (Exception $e) {
    echo 'Exception when calling PAMAssetCategoryApi->postAssetCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject1**](../Model/InlineObject1.md)|  | [optional]

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
