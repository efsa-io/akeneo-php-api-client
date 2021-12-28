# # InlineResponse20016

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**associations** | [**\Efsa\AkeneoApi\Model\InlineResponse20016Associations**](InlineResponse20016Associations.md) |  | [optional]
**categories** | **string[]** | Codes of the categories in which the published product is classified | [optional]
**created** | **string** | Date of creation | [optional]
**enabled** | **bool** | Whether the published product is enable | [optional] [default to true]
**family** | **string** | Family code from which the published product inherits its attributes and attributes requirements | [optional] [default to 'null']
**groups** | **string[]** | Codes of the groups to which the published product belong | [optional]
**identifier** | **string** | Published product identifier, i.e. the value of the only &#x60;pim_catalog_identifier&#x60; attribute |
**quantifiedAssociations** | **object** | Warning: associations with quantities are not compatible with the published products. The response will always be empty. | [optional]
**updated** | **string** | Date of the last update | [optional]
**values** | [**\Efsa\AkeneoApi\Model\InlineResponse20016Values**](InlineResponse20016Values.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
