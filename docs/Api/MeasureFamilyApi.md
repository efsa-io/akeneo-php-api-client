# Efsa\AkeneoApi\MeasureFamilyApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**measureFamiliesGet()**](MeasureFamilyApi.md#measureFamiliesGet) | **GET** /api/rest/v1/measure-families/{code} | Get a measure family
[**measureFamiliesGetList()**](MeasureFamilyApi.md#measureFamiliesGetList) | **GET** /api/rest/v1/measure-families | Get list of measure familiy


## `measureFamiliesGet()`

```php
measureFamiliesGet($code): \Efsa\AkeneoApi\Model\InlineResponse20012
```

Get a measure family

This endpoint allows you to get the information about a given measure family.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\MeasureFamilyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code of the resource

try {
    $result = $apiInstance->measureFamiliesGet($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeasureFamilyApi->measureFamiliesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code of the resource |

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `measureFamiliesGetList()`

```php
measureFamiliesGetList(): \Efsa\AkeneoApi\Model\MeasureFamilies
```

Get list of measure familiy

This endpoint allows you to get a list of measure families. Measure families are paginated and sorted by code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\MeasureFamilyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->measureFamiliesGetList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeasureFamilyApi->measureFamiliesGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Efsa\AkeneoApi\Model\MeasureFamilies**](../Model/MeasureFamilies.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `_embedded`, `_links`, `current_page`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
