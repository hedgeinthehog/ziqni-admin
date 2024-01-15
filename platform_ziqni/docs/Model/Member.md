# # Member

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**space_name** | **string** | This is the space name which is linked to the account |
**created** | **\DateTime** | ISO8601 timestamp for when a Model was created. All records are stored in UTC time zone |
**custom_fields** | **array<string,mixed>** |  | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**name** | **string** | The name of the member that is used on leader boards and public displays |
**member_ref_id** | **string** | The reference to this member in your system |
**member_type** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\MemberType**](MemberType.md) |  |
**icon** | **string** | An Icon id that has been pre uploaded to the system to display for Member | [optional]
**team_members** | **string[]** | A social group like Guilds | [optional]
**constraints** | **string[]** | Additional constraints | [optional]
**time_zone_offset** | **string** | The timezone offset from UTC to use for this member | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
