# # Connection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**space_name** | **string** | This is the space name which is linked to the account |
**created** | **\DateTime** | ISO8601 timestamp for when a Model was created. All records are stored in UTC time zone |
**custom_fields** | **array<string,mixed>** |  | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**name** | **string** | The name of the consumer |
**description** | **string** | The description of the consumer | [optional]
**last_known_status** | **string** | Last known status of the connection |
**last_known_status_code** | **int** | Status code correspoding to the last known status |
**constraints** | **string[]** | Additional constraints |
**transformer_id** | **string** | The transformer to use, if empty the default system transformer will be used |
**connection_type** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\ConnectionType**](ConnectionType.md) |  | [optional]
**secret** | **string** | Consumer secret used for authentication |
**user** | **string** | Consumer username for authentication |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
