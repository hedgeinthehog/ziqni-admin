# # CreateMemberMessageRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom_fields** | **array<string,mixed>** | A list of custom field entries | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**event_ref_type** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\EventRefType**](EventRefType.md) |  |
**event_ref_id** | **string** | The reference ID of the event object | [optional]
**message_type** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\MessageType**](MessageType.md) |  |
**subject** | **string** | The title of the message |
**body** | **string** | The context of the message |
**status** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\MessageStatus**](MessageStatus.md) |  |
**expire_after_date** | **\DateTime** | Specify the expiry as a date after creation of the record. If expireAfterDays is specified then expireAfterDate should not be specified. | [optional]
**expire_after_days** | **int** | Specify the expiry in number of days after creation of the record. If expireAfterDate is specified then expireAfterDays should not be specified. | [optional]
**links** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\MessageLink[]**](MessageLink.md) |  |
**member_ids** | **string[]** |  | [optional]
**translations** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\Translation[]**](Translation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
