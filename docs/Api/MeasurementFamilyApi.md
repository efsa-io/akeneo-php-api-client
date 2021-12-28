# Efsa\AkeneoApi\MeasurementFamilyApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**measurementFamiliesGetList()**](MeasurementFamilyApi.md#measurementFamiliesGetList) | **GET** /api/rest/v1/measurement-families | Get list of measurement families
[**patchMeasurementFamilies()**](MeasurementFamilyApi.md#patchMeasurementFamilies) | **PATCH** /api/rest/v1/measurement-families | Update/create several measurement families


## `measurementFamiliesGetList()`

```php
measurementFamiliesGetList(): \Efsa\AkeneoApi\Model\InlineResponse20013
```

Get list of measurement families

This endpoint allows you to get a list of measurement families.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\MeasurementFamilyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->measurementFamiliesGetList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeasurementFamilyApi->measurementFamiliesGetList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchMeasurementFamilies()`

```php
patchMeasurementFamilies($body): \Efsa\AkeneoApi\Model\InlineResponse20014[]
```

Update/create several measurement families

This endpoint allows you to update and/or create several measurement families at once.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\MeasurementFamilyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \Efsa\AkeneoApi\Model\InlineResponse20013()); // \Efsa\AkeneoApi\Model\InlineResponse20013[]

try {
    $result = $apiInstance->patchMeasurementFamilies($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeasurementFamilyApi->patchMeasurementFamilies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Efsa\AkeneoApi\Model\InlineResponse20013[]**](../Model/InlineResponse20013.md)|  | [optional]

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse20014[]**](../Model/InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
