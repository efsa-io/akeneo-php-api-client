# # InlineResponse200

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accessToken** | **string** | Authentication token that should be given in every authenticated request to the API | [optional]
**expiresIn** | **int** | Validity of the token given in seconds, 3600s &#x3D; 1h by default | [optional]
**refreshToken** | **string** | Use this token when your access token has expired. See &lt;a href&#x3D;\&quot;/documentation/authentication.html#refresh-an-expired-token\&quot;&gt;Refresh an expired token&lt;/a&gt; section for more details. | [optional]
**scope** | **string** | Unused, always equal to \&quot;null\&quot; | [optional]
**tokenType** | **string** | Token type, always equal to \&quot;bearer\&quot; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
