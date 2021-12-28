# Efsa\AkeneoApi\ReferenceEntityApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReferenceEntities()**](ReferenceEntityApi.md#getReferenceEntities) | **GET** /api/rest/v1/reference-entities | Get list of reference entities
[**getReferenceEntitiesCode()**](ReferenceEntityApi.md#getReferenceEntitiesCode) | **GET** /api/rest/v1/reference-entities/{code} | Get a reference entity
[**patchReferenceEntityCode()**](ReferenceEntityApi.md#patchReferenceEntityCode) | **PATCH** /api/rest/v1/reference-entities/{code} | Update/create a reference entity


## `getReferenceEntities()`

```php
getReferenceEntities($searchAfter): \Efsa\AkeneoApi\Model\ReferenceEntities
```

Get list of reference entities

This endpoint allows you to get a list of reference entities. Reference entities are paginated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ReferenceEntityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$searchAfter = 'cursor to the first page'; // string | Cursor when using the `search_after` pagination method type. <strong>Should never be set manually</strong>, see <a href=\"/documentation/pagination.html\">Pagination</a> section

try {
    $result = $apiInstance->getReferenceEntities($searchAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceEntityApi->getReferenceEntities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchAfter** | **string**| Cursor when using the &#x60;search_after&#x60; pagination method type. &lt;strong&gt;Should never be set manually&lt;/strong&gt;, see &lt;a href&#x3D;\&quot;/documentation/pagination.html\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to &#39;cursor to the first page&#39;]

### Return type

[**\Efsa\AkeneoApi\Model\ReferenceEntities**](../Model/ReferenceEntities.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `_embedded`, `_links`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReferenceEntitiesCode()`

```php
getReferenceEntitiesCode($code): \Efsa\AkeneoApi\Model\InlineResponse20017
```

Get a reference entity

This endpoint allows you to get the information about a given reference entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ReferenceEntityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource

try {
    $result = $apiInstance->getReferenceEntitiesCode($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceEntityApi->getReferenceEntitiesCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of the resource |

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchReferenceEntityCode()`

```php
patchReferenceEntityCode($code, $body)
```

Update/create a reference entity

This endpoint allows you to update a given reference entity. Note that if the reference entity does not already exist, it creates it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ReferenceEntityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource
$body = new \Efsa\AkeneoApi\Model\InlineObject47(); // \Efsa\AkeneoApi\Model\InlineObject47

try {
    $apiInstance->patchReferenceEntityCode($code, $body);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceEntityApi->patchReferenceEntityCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of the resource |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject47**](../Model/InlineObject47.md)|  |

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
