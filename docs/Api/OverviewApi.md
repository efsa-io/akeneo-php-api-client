# Efsa\AkeneoApi\OverviewApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEndpoints()**](OverviewApi.md#getEndpoints) | **GET** /api/rest/v1 | Get list of all endpoints


## `getEndpoints()`

```php
getEndpoints(): \Efsa\AkeneoApi\Model\InlineResponse2001
```

Get list of all endpoints

This endpoint allows you to get the list of all the available endpoints. No need to be authenticated to use this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\OverviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getEndpoints();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OverviewApi->getEndpoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `authentication`, `host`, `routes`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
