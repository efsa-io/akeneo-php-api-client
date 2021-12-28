# Efsa\AkeneoApi\SystemApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSystemInformation()**](SystemApi.md#getSystemInformation) | **POST** /api/rest/v1/system-information | Get system information


## `getSystemInformation()`

```php
getSystemInformation(): \Efsa\AkeneoApi\Model\InlineResponse20020
```

Get system information

This endpoint allows you to get the version and the edition of the PIM. Example of what you can get <table class=\"description-table\"> <thead> <tr> <th align=\"center\">Environment</th> <th align=\"center\">Edition</th> <th align=\"center\">Version</th> </tr> </thead> <tbody> <tr> <td align=\"center\">SaaS EE</td> <td align=\"center\">Serenity</td> <td align=\"center\">20210531021241</td> </tr> <tr> <td align=\"center\">SaaS CE</td> <td align=\"center\">GE</td> <td align=\"center\">growth-v20210526040645</td> </tr> <tr> <td align=\"center\">PaaS or onPrem EE</td> <td align=\"center\">EE</td> <td align=\"center\">5.0.28</td> </tr> <tr> <td align=\"center\">PaaS or onPrem CE</td> <td align=\"center\">CE</td> <td align=\"center\">5.0.28</td> </tr> </tbody> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getSystemInformation();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->getSystemInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `edition`, `version`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
