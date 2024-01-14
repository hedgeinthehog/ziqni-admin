# # Error

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**model_id** | **string** | The identifier of the record this error relates to (This value only gets set if the error could relate to more than one object) | [optional]
**error_code** | **int** | A unique system identifier that describes this specific error |
**message** | **string** | The error description |
**error_at** | **int** | The object number that returned the error | [optional]
**detail** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\ErrorDetail[]**](ErrorDetail.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
