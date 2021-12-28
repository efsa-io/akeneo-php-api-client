# # AssetFamilyList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\Efsa\AkeneoApi\Model\AssetFamilyItemListLinks**](AssetFamilyItemListLinks.md) |  | [optional]
**attributeAsMainMedia** | **string** | Attribute code that is used as the main media of the asset family. | [optional] [default to 'First media file or media link attribute that was created']
**code** | **string** | Asset family code |
**labels** | [**\Efsa\AkeneoApi\Model\InlineResponse2006Labels**](InlineResponse2006Labels.md) |  | [optional]
**namingConvention** | [**\Efsa\AkeneoApi\Model\InlineResponse2006NamingConvention**](InlineResponse2006NamingConvention.md) |  | [optional]
**productLinkRules** | [**\Efsa\AkeneoApi\Model\InlineResponse2006ProductLinkRules[]**](InlineResponse2006ProductLinkRules.md) | The rules that will be run after the asset creation, in order to automatically link the assets of this family to a set of products. To understand the format of this property, see &lt;a href&#x3D;&#39;/concepts/asset-manager.html#focus-on-the-product-link-rule&#39;&gt;here&lt;/a&gt;. | [optional]
**transformations** | [**\Efsa\AkeneoApi\Model\InlineResponse2006Transformations[]**](InlineResponse2006Transformations.md) | The transformations to perform on source files in order to generate new files into your asset attributes (only available since v4.0). To understand the format of this property, see &lt;a href&#x3D;&#39;/concepts/asset-manager.html#focus-on-the-transformations&#39;&gt;here&lt;/a&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
