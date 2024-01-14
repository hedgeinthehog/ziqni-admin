# # NotificationMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entity_id** | **string** |  | [optional]
**entity_type** | **string[]** |  |
**changed_at** | **\DateTime** |  | [optional]
**changed_by** | **string** |  | [optional]
**type_off_change** | **int** |  | [optional]
**display_name** | **string** |  | [optional]
**account_id** | **string** |  | [optional]
**sequence_number** | **int** |  | [optional]
**entity_ref_id** | **string** |  | [optional]
**entity_parent_id** | **string** |  | [optional]
**metadata** | **object** |  | [optional]
**previous_state** | **int** |  | [optional]
**current_state** | **int** |  | [optional]
**subscription_id** | **string** |  |
**constraints** | **string[]** | Constraints of this subscription like gauranteedDelivery | [optional]
**topic** | **string** | /user/queue/callbacks | [optional]
**meta** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\MetaBasic**](MetaBasic.md) |  | [optional]
**data** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\EntityChangeSubscription[]**](EntityChangeSubscription.md) |  | [optional]
**errors** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\Error[]**](Error.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
