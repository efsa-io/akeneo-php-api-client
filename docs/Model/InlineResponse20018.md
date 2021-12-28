# # InlineResponse20018

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allowedExtensions** | **string[]** | Extensions allowed when the attribute type is &#x60;image&#x60; | [optional]
**code** | **string** | Attribute code |
**decimalsAllowed** | **bool** | Whether decimals are allowed when the attribute type is &#x60;number&#x60; | [optional] [default to false]
**isRequiredForCompleteness** | **bool** | Whether the attribute should be part of the record&#39;s completeness calculation | [optional] [default to false]
**isRichTextEditor** | **bool** | Whether the UI should display a rich text editor instead of a simple text area when the attribute type is &#x60;text&#x60; | [optional]
**isTextarea** | **bool** | Whether the UI should display a text area instead of a simple field when the attribute type is &#x60;text&#x60; | [optional] [default to false]
**labels** | [**\Efsa\AkeneoApi\Model\ApiRestV1AssetFamiliesAssetFamilyCodeAttributesLabels**](ApiRestV1AssetFamiliesAssetFamilyCodeAttributesLabels.md) |  | [optional]
**maxCharacters** | **int** | Maximum number of characters allowed for the value of the attribute when the attribute type is &#x60;text&#x60; | [optional]
**maxFileSize** | **string** | Max file size in MB when the attribute type is &#x60;image&#x60; | [optional]
**maxValue** | **string** | Maximum value allowed when the attribute type is &#x60;number&#x60; | [optional]
**minValue** | **string** | Minimum value allowed when the attribute type is &#x60;number&#x60; | [optional]
**referenceEntityCode** | **string** | Code of the linked reference entity when the attribute type is &#x60;reference_entity_single_link&#x60; or &#x60;reference_entity_multiple_links&#x60; | [optional]
**type** | **string** | Attribute type |
**validationRegexp** | **string** | Regexp expression used to validate the attribute value when the attribute type is &#x60;text&#x60; | [optional]
**validationRule** | **string** | Validation rule type used to validate the attribute value when the attribute type is &#x60;text&#x60; | [optional] [default to VALIDATION_RULE_NONE]
**valuePerChannel** | **bool** | Whether the attribute is scopable, i.e. can have one value by channel | [optional] [default to false]
**valuePerLocale** | **bool** | Whether the attribute is localizable, i.e. can have one value by locale | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
