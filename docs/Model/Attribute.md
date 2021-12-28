# # Attribute

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allowedExtensions** | **string[]** | Extensions allowed when the attribute type is &#x60;pim_catalog_file&#x60; or &#x60;pim_catalog_image&#x60; | [optional]
**availableLocales** | **string[]** | To make the attribute locale specfic, specify here for which locales it is specific | [optional]
**code** | **string** | Attribute code |
**dateMax** | [**\DateTime**](\DateTime.md) | Maximum date allowed when the attribute type is &#x60;pim_catalog_date&#x60; | [optional]
**dateMin** | [**\DateTime**](\DateTime.md) | Minimum date allowed when the attribute type is &#x60;pim_catalog_date&#x60; | [optional]
**decimalsAllowed** | **bool** | Whether decimals are allowed when the attribute type is &#x60;pim_catalog_metric&#x60;, &#x60;pim_catalog_price&#x60; or &#x60;pim_catalog_number&#x60; | [optional]
**defaultMetricUnit** | **string** | Default metric unit when the attribute type is &#x60;pim_catalog_metric&#x60; | [optional]
**defaultValue** | **bool** | Default value for a Yes/No attribute, applied when creating a new product or product model (only available since the 5.0) | [optional]
**group** | **string** | Attribute group |
**groupLabels** | [**\Efsa\AkeneoApi\Model\ApiRestV1AttributesGroupLabels**](ApiRestV1AttributesGroupLabels.md) |  | [optional]
**labels** | [**\Efsa\AkeneoApi\Model\ApiRestV1AssetFamiliesAssetFamilyCodeAttributesLabels**](ApiRestV1AssetFamiliesAssetFamilyCodeAttributesLabels.md) |  | [optional]
**localizable** | **bool** | Whether the attribute is localizable, i.e. can have one value by locale | [optional] [default to false]
**maxCharacters** | **int** | Number maximum of characters allowed for the value of the attribute when the attribute type is &#x60;pim_catalog_text&#x60;, &#x60;pim_catalog_textarea&#x60; or &#x60;pim_catalog_identifier&#x60; | [optional]
**maxFileSize** | **string** | Max file size in MB when the attribute type is &#x60;pim_catalog_file&#x60; or &#x60;pim_catalog_image&#x60; | [optional]
**metricFamily** | **string** | Metric family when the attribute type is &#x60;pim_catalog_metric&#x60; | [optional]
**negativeAllowed** | **bool** | Whether negative values are allowed when the attribute type is &#x60;pim_catalog_metric&#x60; or &#x60;pim_catalog_number&#x60; | [optional]
**numberMax** | **string** | Maximum integer value allowed when the attribute type is &#x60;pim_catalog_metric&#x60;, &#x60;pim_catalog_price&#x60; or &#x60;pim_catalog_number&#x60; | [optional]
**numberMin** | **string** | Minimum integer value allowed when the attribute type is &#x60;pim_catalog_metric&#x60;, &#x60;pim_catalog_price&#x60; or &#x60;pim_catalog_number&#x60; | [optional]
**referenceDataName** | **string** | Reference entity code when the attribute type is &#x60;akeneo_reference_entity&#x60; or &#x60;akeneo_reference_entity_collection&#x60; OR Asset family code when the attribute type is &#x60;pim_catalog_asset_collection&#x60; | [optional]
**scopable** | **bool** | Whether the attribute is scopable, i.e. can have one value by channel | [optional] [default to false]
**sortOrder** | **int** | Order of the attribute in its group | [optional]
**type** | **string** | Attribute type |
**unique** | **bool** | Whether two values for the attribute cannot be the same | [optional]
**useableAsGridFilter** | **bool** | Whether the attribute can be used as a filter for the product grid in the PIM user interface | [optional]
**validationRegexp** | **string** | Regexp expression used to validate any attribute value when the attribute type is &#x60;pim_catalog_text&#x60; or &#x60;pim_catalog_identifier&#x60; | [optional]
**validationRule** | **string** | Validation rule type used to validate any attribute value when the attribute type is &#x60;pim_catalog_text&#x60; or &#x60;pim_catalog_identifier&#x60; | [optional]
**wysiwygEnabled** | **bool** | Whether the WYSIWYG interface is shown when the attribute type is &#x60;pim_catalog_textarea&#x60; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
