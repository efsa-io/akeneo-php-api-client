# # ProductList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\Efsa\AkeneoApi\Model\AssetFamilyItemListLinks**](AssetFamilyItemListLinks.md) |  | [optional]
**associations** | [**\Efsa\AkeneoApi\Model\ApiRestV1ProductsAssociations**](ApiRestV1ProductsAssociations.md) |  | [optional]
**categories** | **string[]** | Codes of the categories in which the product is classified | [optional]
**completenesses** | **object** | Product completenesses for each channel/locale combination (only available on SaaS platforms, and when the \&quot;with_completenesses\&quot; query parameter is set to \&quot;true\&quot;) | [optional]
**created** | **string** | Date of creation | [optional]
**enabled** | **bool** | Whether the product is enabled | [optional] [default to true]
**family** | **string** | Family code from which the product inherits its attributes and attributes requirements | [optional] [default to 'null only in the case of a non variant product']
**groups** | **string[]** | Codes of the groups to which the product belong | [optional]
**identifier** | **string** | Product identifier, i.e. the value of the only &#x60;pim_catalog_identifier&#x60; attribute |
**metadata** | [**\Efsa\AkeneoApi\Model\ApiRestV1ProductsMetadata**](ApiRestV1ProductsMetadata.md) |  | [optional]
**parent** | **string** | Code of the parent product model when the product is a variant (only available since the 2.0). This parent can be modified since the 2.3. | [optional] [default to 'null']
**qualityScores** | **object** | Product quality scores for each channel/locale combination (only available since the 5.0 and when the \&quot;with_quality_scores\&quot; query parameter is set to \&quot;true\&quot;) | [optional]
**quantifiedAssociations** | [**\Efsa\AkeneoApi\Model\ApiRestV1ProductsQuantifiedAssociations**](ApiRestV1ProductsQuantifiedAssociations.md) |  | [optional]
**updated** | **string** | Date of the last update | [optional]
**values** | [**\Efsa\AkeneoApi\Model\ApiRestV1ProductsValues**](ApiRestV1ProductsValues.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
