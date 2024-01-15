# # RuleOperandLookupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | **string** | The object context to search within |
**search_text** | **string** | The text to search, at least 3 characters are required. | [optional]
**id** | **string[]** | The identifier to retrieve, if this is set search text will be ignored | [optional]
**skip** | **int** | How many response objects will be skipped for preview. Deafault is zero [0] | [optional]
**limit** | **int** | How many response objects will be returned. Deafult is zero [0] and the maximum is fifty [50] | [optional]
**constraints** | **string[]** | Additional constraints | [optional]
**operand** | **string** | The operand like \&quot;product.tags\&quot; or \&quot;member.tags\&quot; or \&quot;event.product\&quot; |
**sort_by** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\QuerySortBy[]**](QuerySortBy.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
