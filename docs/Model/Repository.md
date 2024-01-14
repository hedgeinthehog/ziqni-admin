# # Repository

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**space_name** | **string** | This is the space name which is linked to the account |
**created** | **\DateTime** | ISO8601 timestamp for when a Model was created. All records are stored in UTC time zone |
**custom_fields** | **array<string,mixed>** |  | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**name** | **string** | The name of the repository. This cannot contain spaces or specil characters. |
**description** | **string** | The description of the promotion page | [optional]
**constraints** | **string[]** | Additional constraints |
**hosting_options** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\HostingOptions**](HostingOptions.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
