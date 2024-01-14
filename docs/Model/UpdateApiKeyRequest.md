# # UpdateApiKeyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**custom_fields** | **array<string,mixed>** | A list of id&#39;s used to add cutom fields | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**description** | **string** | The description of an Api key | [optional]
**white_list_ips** | **string[]** | the IP&#39;s that need to be whitelisted with the Api key | [optional]
**key** | **string** | An Api key hash | [optional] [readonly]
**role** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\Role**](Role.md) |  | [optional]
**add_constraints** | **string[]** | Additional constraints | [optional]
**remove_constraints** | **string[]** | Additional constraints | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
