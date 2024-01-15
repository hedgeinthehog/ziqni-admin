# # Webhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**space_name** | **string** | This is the space name which is linked to the account |
**created** | **\DateTime** | ISO8601 timestamp for when a Model was created. All records are stored in UTC time zone |
**custom_fields** | **array<string,mixed>** |  | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**post_to_url** | **string** | A URL to post the webhook to |
**triggers** | **string[]** | A list of event triggers |
**description** | **string** | The description of a Webhook | [optional]
**name** | **string** | The name of a Webhook |
**headers** | **array<string,string>** |  | [optional]
**status** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\ConnectionState**](ConnectionState.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
