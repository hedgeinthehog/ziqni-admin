# # UpdateConnectionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom_fields** | **array<string,mixed>** | A list of id&#39;s used to add cutom fields | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**id** | **string** | A unique system generated identifier |
**name** | **string** | The name of the consumer | [optional]
**description** | **string** | The description of the consumer | [optional]
**constraints** | **string[]** | Additional constraints | [optional]
**transformer_id** | **string** | The transformer to use, if empty the default system transformer will be used | [optional]
**connection_type** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\ConnectionType**](ConnectionType.md) |  | [optional]
**secret** | **string** | Consumer secret used for authentication | [optional]
**user** | **string** | Consumer username for authentication | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
