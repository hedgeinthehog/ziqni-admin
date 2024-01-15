# # UpdateMemberRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**custom_fields** | **array<string,mixed>** | A list of id&#39;s used to add cutom fields | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**name** | **string** | The name of the member that is used on leader boards and public displays | [optional]
**member_type** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\MemberType**](MemberType.md) |  | [optional]
**team_members** | **string[]** | A social group like Guilds | [optional]
**icon** | **string** | An Icon id that has been pre uploaded to the system to display for Member | [optional]
**add_constraints** | **string[]** | Additional constraints | [optional]
**remove_constraints** | **string[]** | Additional constraints | [optional]
**time_zone_offset** | **string** | To what time zone teh emmber belongs to | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
