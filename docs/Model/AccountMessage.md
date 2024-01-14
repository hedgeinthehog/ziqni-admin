# # AccountMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**space_name** | **string** | This is the space name which is linked to the account |
**created** | **\DateTime** | ISO8601 timestamp for when a Model was created. All records are stored in UTC time zone |
**custom_fields** | **array<string,mixed>** |  | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**expiry** | **\DateTime** | The time that the message will disappear after. ISO8601 timestamp | [optional]
**event_ref_type** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\EventRefType**](EventRefType.md) |  |
**event_ref_id** | **string** | The reference ID of the event object |
**message_type** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\MessageType**](MessageType.md) |  |
**subject** | **string** | The title of the message |
**body** | **string** | The context of the message |
**status** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\MessageStatus**](MessageStatus.md) |  |
**user_id** | **string** |  |
**links** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\MessageLink[]**](MessageLink.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
