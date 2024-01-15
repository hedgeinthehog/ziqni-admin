# # ApiKey

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**space_name** | **string** | This is the space name which is linked to the account |
**created** | **\DateTime** | ISO8601 timestamp for when a Model was created. All records are stored in UTC time zone |
**custom_fields** | **array<string,mixed>** |  | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**description** | **string** | The description of an Api key | [optional]
**white_list_ips** | **string[]** | the IP&#39;s that need to be whitelisted with the Api key | [optional]
**key** | **string** | An Api key hash |
**role** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\Role**](Role.md) |  |
**constraints** | **string[]** | Additional constraints |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
