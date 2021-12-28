# Efsa\AkeneoApi\AuthenticationApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postToken()**](AuthenticationApi.md#postToken) | **POST** /api/oauth/v1/token | Get authentication token


## `postToken()`

```php
postToken($contentType, $authorization, $body): \Efsa\AkeneoApi\Model\InlineResponse200
```

Get authentication token

This endpoint allows you to get an authentication token. No need to be authenticated to use this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentType = 'contentType_example'; // string | Equal to 'application/json' or 'application/x-www-form-urlencoded', no other value allowed
$authorization = 'authorization_example'; // string | Equal to 'Basic xx', where 'xx' is the base 64 encoding of the client id and secret. Find out how to generate them in the <a href=\"/documentation/authentication.html#client-idsecret-generation\">Client ID/secret generation</a> section.
$body = new \Efsa\AkeneoApi\Model\InlineObject(); // \Efsa\AkeneoApi\Model\InlineObject

try {
    $result = $apiInstance->postToken($contentType, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->postToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentType** | **string**| Equal to &#39;application/json&#39; or &#39;application/x-www-form-urlencoded&#39;, no other value allowed |
 **authorization** | **string**| Equal to &#39;Basic xx&#39;, where &#39;xx&#39; is the base 64 encoding of the client id and secret. Find out how to generate them in the &lt;a href&#x3D;\&quot;/documentation/authentication.html#client-idsecret-generation\&quot;&gt;Client ID/secret generation&lt;/a&gt; section. |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject**](../Model/InlineObject.md)|  | [optional]

### Return type

[**\Efsa\AkeneoApi\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `access_token`, `expires_in`, `refresh_token`, `token_type`, `code`, `message`, `_links`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
