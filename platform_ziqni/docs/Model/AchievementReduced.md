# # AchievementReduced

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**space_name** | **string** | This is the space name which is linked to the account |
**created** | **\DateTime** | ISO8601 timestamp for when a Model was created. All records are stored in UTC time zone |
**name** | **string** | A name for the Achievement. Can be translated |
**achievement_live_status** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\AchievementLiveStatus**](AchievementLiveStatus.md) |  |
**tags_id** | **string[]** | Categorisation of the achievements | [optional]
**dependant_on** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\Dependancy[]**](Dependancy.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
