# Efsa\AkeneoApi\ReferenceEntityRecordApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReferenceEntityRecords()**](ReferenceEntityRecordApi.md#getReferenceEntityRecords) | **GET** /api/rest/v1/reference-entities/{reference_entity_code}/records | Get the list of the records of a reference entity
[**getReferenceEntityRecordsCode()**](ReferenceEntityRecordApi.md#getReferenceEntityRecordsCode) | **GET** /api/rest/v1/reference-entities/{reference_entity_code}/records/{code} | Get a record of a given reference entity
[**patchReferenceEntityRecords()**](ReferenceEntityRecordApi.md#patchReferenceEntityRecords) | **PATCH** /api/rest/v1/reference-entities/{reference_entity_code}/records | Update/create several reference entity records
[**patchReferenceEntityRecordsCode()**](ReferenceEntityRecordApi.md#patchReferenceEntityRecordsCode) | **PATCH** /api/rest/v1/reference-entities/{reference_entity_code}/records/{code} | Update/create a record of a given reference entity


## `getReferenceEntityRecords()`

```php
getReferenceEntityRecords($referenceEntityCode, $search, $channel, $locales, $searchAfter): \Efsa\AkeneoApi\Model\ReferenceEntityRecord
```

Get the list of the records of a reference entity

This endpoint allows you to get a list of records of a given reference entity. Records are paginated and can be filtered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ReferenceEntityRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$referenceEntityCode = 'referenceEntityCode_example'; // string | Code of the reference entity
$search = 'search_example'; // string | Filter records of the reference entity, for more details see the <a href=\"/documentation/filter.html#filter-reference-entity-records\">Filters</a> section
$channel = 'channel_example'; // string | Filter attribute values to return scopable attributes for the given channel as well as the non localizable/non scopable attributes, for more details see the <a href=\"/documentation/filter.html#filter-attribute-values-by-channel\">Filter attribute values by channel</a> section
$locales = 'locales_example'; // string | Filter attribute values to return localizable attributes for the given locales as well as the non localizable/non scopable attributes, for more details see the <a href=/documentation/filter.html#filter-attribute-values-by-locale\">Filter attribute values by locale</a> section
$searchAfter = 'cursor to the first page'; // string | Cursor when using the `search_after` pagination method type. <strong>Should never be set manually</strong>, see <a href=\"/documentation/pagination.html\">Pagination</a> section

try {
    $result = $apiInstance->getReferenceEntityRecords($referenceEntityCode, $search, $channel, $locales, $searchAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceEntityRecordApi->getReferenceEntityRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **referenceEntityCode** | **string**| Code of the reference entity |
 **search** | **string**| Filter records of the reference entity, for more details see the &lt;a href&#x3D;\&quot;/documentation/filter.html#filter-reference-entity-records\&quot;&gt;Filters&lt;/a&gt; section | [optional]
 **channel** | **string**| Filter attribute values to return scopable attributes for the given channel as well as the non localizable/non scopable attributes, for more details see the &lt;a href&#x3D;\&quot;/documentation/filter.html#filter-attribute-values-by-channel\&quot;&gt;Filter attribute values by channel&lt;/a&gt; section | [optional]
 **locales** | **string**| Filter attribute values to return localizable attributes for the given locales as well as the non localizable/non scopable attributes, for more details see the &lt;a href&#x3D;/documentation/filter.html#filter-attribute-values-by-locale\&quot;&gt;Filter attribute values by locale&lt;/a&gt; section | [optional]
 **searchAfter** | **string**| Cursor when using the &#x60;search_after&#x60; pagination method type. &lt;strong&gt;Should never be set manually&lt;/strong&gt;, see &lt;a href&#x3D;\&quot;/documentation/pagination.html\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to &#39;cursor to the first page&#39;]

### Return type

[**\Efsa\AkeneoApi\Model\ReferenceEntityRecord**](../Model/ReferenceEntityRecord.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `_embedded`, `_links`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReferenceEntityRecordsCode()`

```php
getReferenceEntityRecordsCode($referenceEntityCode, $code): \Efsa\AkeneoApi\Model\InlineObject1
```

Get a record of a given reference entity

This endpoint allows you to get the information about a given record for a given reference entity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ReferenceEntityRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$referenceEntityCode = 'referenceEntityCode_example'; // string | Code of the reference entity
$code = 'code_example'; // string | Code of the resource

try {
    $result = $apiInstance->getReferenceEntityRecordsCode($referenceEntityCode, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceEntityRecordApi->getReferenceEntityRecordsCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **referenceEntityCode** | **string**| Code of the reference entity |
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

## `patchReferenceEntityRecords()`

```php
patchReferenceEntityRecords($referenceEntityCode, $body): \Efsa\AkeneoApi\Model\InlineResponse2003[]
```

Update/create several reference entity records

This endpoint allows you to update and/or create several records of one given reference entity at once. Learn more about <a href=\"/documentation/update.html#patch-reference-entity-record-values\">Update behavior</a>. Note that if the record does not already exist for the given reference entity, it creates it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ReferenceEntityRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$referenceEntityCode = 'referenceEntityCode_example'; // string | Code of the reference entity
$body = array(new \Efsa\AkeneoApi\Model\InlineObject1()); // \Efsa\AkeneoApi\Model\InlineObject1[]

try {
    $result = $apiInstance->patchReferenceEntityRecords($referenceEntityCode, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceEntityRecordApi->patchReferenceEntityRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **referenceEntityCode** | **string**| Code of the reference entity |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject1[]**](../Model/InlineObject1.md)|  |

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse2003[]**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchReferenceEntityRecordsCode()`

```php
patchReferenceEntityRecordsCode($referenceEntityCode, $code, $body)
```

Update/create a record of a given reference entity

This endpoint allows you to update a given record of a given renference entity. Learn more about <a href=\"/documentation/update.html#patch-reference-entity-record-values\">Update behavior</a>. Note that if the record does not already exist for the given reference entity, it creates it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\ReferenceEntityRecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$referenceEntityCode = 'referenceEntityCode_example'; // string | Code of the reference entity
$code = 'code_example'; // string | Code of the resource
$body = new \Efsa\AkeneoApi\Model\InlineObject50(); // \Efsa\AkeneoApi\Model\InlineObject50

try {
    $apiInstance->patchReferenceEntityRecordsCode($referenceEntityCode, $code, $body);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceEntityRecordApi->patchReferenceEntityRecordsCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **referenceEntityCode** | **string**| Code of the reference entity |
 **code** | **string**| Code of the resource |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject50**](../Model/InlineObject50.md)|  |

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
