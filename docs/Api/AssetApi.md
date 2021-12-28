# Efsa\AkeneoApi\AssetApi

All URIs are relative to http://demo.akeneo.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAssetsCode()**](AssetApi.md#deleteAssetsCode) | **DELETE** /api/rest/v1/asset-families/{asset_family_code}/assets/{code} | Delete an asset
[**getAssets()**](AssetApi.md#getAssets) | **GET** /api/rest/v1/asset-families/{asset_family_code}/assets | Get the list of the assets of a given asset family
[**getAssetsCode()**](AssetApi.md#getAssetsCode) | **GET** /api/rest/v1/asset-families/{asset_family_code}/assets/{code} | Get an asset of a given asset family
[**patchAssetCode()**](AssetApi.md#patchAssetCode) | **PATCH** /api/rest/v1/asset-families/{asset_family_code}/assets/{code} | Update/create an asset
[**patchAssets()**](AssetApi.md#patchAssets) | **PATCH** /api/rest/v1/asset-families/{asset_family_code}/assets | Update/create several assets


## `deleteAssetsCode()`

```php
deleteAssetsCode($assetFamilyCode, $code)
```

Delete an asset

This endpoint allows you to delete a given asset. This endpoint is case sensitive on the asset family code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assetFamilyCode = 'assetFamilyCode_example'; // string | Code of the asset family
$code = 'code_example'; // string | Code of the resource

try {
    $apiInstance->deleteAssetsCode($assetFamilyCode, $code);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->deleteAssetsCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assetFamilyCode** | **string**| Code of the asset family |
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

## `getAssets()`

```php
getAssets($assetFamilyCode, $search, $channel, $locales, $searchAfter): \Efsa\AkeneoApi\Model\Asset
```

Get the list of the assets of a given asset family

This endpoint allows you to get a list of assets of a given asset family. Assets are paginated. This endpoint is case sensitive on the asset family code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assetFamilyCode = 'assetFamilyCode_example'; // string | Code of the asset family
$search = 'search_example'; // string | Filter assets, for more details see the <a href=\"/documentation/filter.html#filter-assets\">Asset filters</a> section
$channel = 'channel_example'; // string | Filter asset values to return scopable asset attributes for the given channel as well as the non localizable/non scopable asset attributes, for more details see the <a href=\"/documentation/filter.html#asset-values-by-channel\">Filter asset values by channel</a> section
$locales = 'locales_example'; // string | Filter asset values to return localizable attributes for the given locales as well as the non localizable/non scopable asset attributes, for more details see the <a href=\"/documentation/filter.html#asset-values-by-locale\">Filter asset values by locale</a> section
$searchAfter = 'cursor to the first page'; // string | Cursor when using the `search_after` pagination method type. <strong>Should never be set manually</strong>, see <a href=\"/documentation/pagination.html\">Pagination</a> section

try {
    $result = $apiInstance->getAssets($assetFamilyCode, $search, $channel, $locales, $searchAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->getAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assetFamilyCode** | **string**| Code of the asset family |
 **search** | **string**| Filter assets, for more details see the &lt;a href&#x3D;\&quot;/documentation/filter.html#filter-assets\&quot;&gt;Asset filters&lt;/a&gt; section | [optional]
 **channel** | **string**| Filter asset values to return scopable asset attributes for the given channel as well as the non localizable/non scopable asset attributes, for more details see the &lt;a href&#x3D;\&quot;/documentation/filter.html#asset-values-by-channel\&quot;&gt;Filter asset values by channel&lt;/a&gt; section | [optional]
 **locales** | **string**| Filter asset values to return localizable attributes for the given locales as well as the non localizable/non scopable asset attributes, for more details see the &lt;a href&#x3D;\&quot;/documentation/filter.html#asset-values-by-locale\&quot;&gt;Filter asset values by locale&lt;/a&gt; section | [optional]
 **searchAfter** | **string**| Cursor when using the &#x60;search_after&#x60; pagination method type. &lt;strong&gt;Should never be set manually&lt;/strong&gt;, see &lt;a href&#x3D;\&quot;/documentation/pagination.html\&quot;&gt;Pagination&lt;/a&gt; section | [optional] [default to &#39;cursor to the first page&#39;]

### Return type

[**\Efsa\AkeneoApi\Model\Asset**](../Model/Asset.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `_embedded`, `_links`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAssetsCode()`

```php
getAssetsCode($assetFamilyCode, $code): \Efsa\AkeneoApi\Model\InlineObject
```

Get an asset of a given asset family

This endpoint allows you to get the information about a given asset for a given asset family. This endpoint is case sensitive on the asset family code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assetFamilyCode = 'assetFamilyCode_example'; // string | Code of the asset family
$code = 'code_example'; // string | Code of the resource

try {
    $result = $apiInstance->getAssetsCode($assetFamilyCode, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->getAssetsCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assetFamilyCode** | **string**| Code of the asset family |
 **code** | **string**| Code of the resource |

### Return type

[**\Efsa\AkeneoApi\Model\InlineObject**](../Model/InlineObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `code`, `message`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchAssetCode()`

```php
patchAssetCode($assetFamilyCode, $code, $body)
```

Update/create an asset

This endpoint allows you to update a given asset of a given asset family. Learn more about the <a href=\"/documentation/update.html#patch-asset-attribute-values\">Update behavior</a>. Note that if the asset does not already exist for the given asset family, it creates it. This endpoint is case sensitive on the asset family code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assetFamilyCode = 'assetFamilyCode_example'; // string | Code of the asset family
$code = 'code_example'; // string | Code of the resource
$body = new \Efsa\AkeneoApi\Model\InlineObject4(); // \Efsa\AkeneoApi\Model\InlineObject4

try {
    $apiInstance->patchAssetCode($assetFamilyCode, $code, $body);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->patchAssetCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assetFamilyCode** | **string**| Code of the asset family |
 **code** | **string**| Code of the resource |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject4**](../Model/InlineObject4.md)|  |

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

## `patchAssets()`

```php
patchAssets($assetFamilyCode, $body): \Efsa\AkeneoApi\Model\InlineResponse2003[]
```

Update/create several assets

This endpoint allows you to update and/or create several assets of one given asset family at once. Learn more about the <a href=\"/documentation/update.html#patch-asset-attribute-values\">Update behavior</a>. Note that if the asset does not already exist for the given asset family, it creates it. This endpoint is case sensitive on the asset family code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Efsa\AkeneoApi\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assetFamilyCode = 'assetFamilyCode_example'; // string | Code of the asset family
$body = array(new \Efsa\AkeneoApi\Model\InlineObject()); // \Efsa\AkeneoApi\Model\InlineObject[]

try {
    $result = $apiInstance->patchAssets($assetFamilyCode, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->patchAssets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assetFamilyCode** | **string**| Code of the asset family |
 **body** | [**\Efsa\AkeneoApi\Model\InlineObject[]**](../Model/InlineObject.md)|  |

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
