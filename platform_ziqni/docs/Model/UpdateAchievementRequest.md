# # UpdateAchievementRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**custom_fields** | **array<string,mixed>** | A list of id&#39;s used to add cutom fields | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**name** | **string** | A name for the Achievement. Can be translated | [optional]
**description** | **string** | A name for the Achievement. Can be translated | [optional]
**terms_and_conditions** | **string** | Terms and conditions of an achievement. Can be translated | [optional]
**icon** | **string** | An Icon id that has been pre uploaded to the system to display for Achievement | [optional]
**banner** | **string** | A banner id that has been pre uploaded to the system to display for Achievement | [optional]
**banner_low_resolution** | **string** | A bannerLowResolution id that has been pre uploaded to the system to display for Achievement | [optional]
**banner_high_resolution** | **string** | A bannerHighResolution id that has been pre uploaded to the system to display for Achievement | [optional]
**scheduling** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\Scheduling**](Scheduling.md) |  | [optional]
**achievement_live_status** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\AchievementLiveStatus**](AchievementLiveStatus.md) |  | [optional]
**max_number_of_issues** | **int** | Maximum number of issued achievements | [optional]
**constraints** | **string[]** | Additional constraints | [optional]
**achievement_dependencies** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\DependantOn**](DependantOn.md) |  | [optional]
**member_tags_filter** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\DependantOn**](DependantOn.md) |  | [optional]
**product_ids** | **string[]** |  | [optional]
**product_tags_filter** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\DependantOn**](DependantOn.md) |  | [optional]
**add_constraints** | **string[]** |  | [optional]
**remove_constraints** | **string[]** |  | [optional]
**strategies** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\AchievementStrategies**](AchievementStrategies.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
