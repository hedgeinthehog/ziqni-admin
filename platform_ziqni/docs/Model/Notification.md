# # Notification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**space_name** | **string** | This is the space name which is linked to the account |
**created** | **\DateTime** | ISO8601 timestamp for when a Model was created. All records are stored in UTC time zone |
**custom_fields** | **array<string,mixed>** |  | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**message_type** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\MessageType**](MessageType.md) |  |
**subject** | **string** | The title of the message |
**body** | **string** | The context of the message |
**status** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\NotificationStatus**](NotificationStatus.md) |  |
**translations** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\Translation[]**](Translation.md) |  | [optional]
**scheduling** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\Scheduling**](Scheduling.md) |  |
**constraints** | **string[]** | Additional constraints |
**member_tags** | **string[]** |  | [optional]
**member_ids** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
