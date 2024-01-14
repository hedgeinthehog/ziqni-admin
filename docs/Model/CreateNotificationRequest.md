# # CreateNotificationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom_fields** | **array<string,mixed>** | A list of custom field entries | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**message_type** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\MessageType**](MessageType.md) |  |
**subject** | **string** | The title of the message |
**body** | **string** | The context of the message |
**status** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\MessageStatus**](MessageStatus.md) |  |
**translations** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\Translation[]**](Translation.md) |  | [optional]
**scheduling** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\Scheduling**](Scheduling.md) |  |
**constraints** | **string[]** | Additional constraints |
**member_tags** | **string[]** |  | [optional]
**member_ids** | **string[]** |  | [optional]
**expire_after_date** | **\DateTime** | Specify the expiry as a date after creation of the record. If expireAfterDays is specified then expireAfterDate should not be specified. | [optional]
**expire_after_days** | **int** | Specify the expiry in number of days after creation of the record. If expireAfterDate is specified then expireAfterDays should not be specified. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
