# # InlineObject41

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**associations** | [**\Efsa\AkeneoApi\Model\ApiRestV1ProductModelsAssociations**](ApiRestV1ProductModelsAssociations.md) |  | [optional]
**categories** | **string[]** | Codes of the categories in which the product model is categorized | [optional]
**code** | **string** | Product model code |
**created** | **string** | Date of creation | [optional]
**family** | **string** | Family code  from which the product inherits its attributes and attributes requirements (since the 3.2) | [optional]
**familyVariant** | **string** | Family variant code from which the product model inherits its attributes and variant attributes |
**metadata** | [**\Efsa\AkeneoApi\Model\ApiRestV1ProductModelsMetadata**](ApiRestV1ProductModelsMetadata.md) |  | [optional]
**parent** | **string** | Code of the parent product model. This parent can be modified since the 2.3. | [optional] [default to 'null']
**quantifiedAssociations** | [**\Efsa\AkeneoApi\Model\ApiRestV1ProductModelsQuantifiedAssociations**](ApiRestV1ProductModelsQuantifiedAssociations.md) |  | [optional]
**updated** | **string** | Date of the last update | [optional]
**values** | [**\Efsa\AkeneoApi\Model\ApiRestV1ProductModelsValues**](ApiRestV1ProductModelsValues.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
