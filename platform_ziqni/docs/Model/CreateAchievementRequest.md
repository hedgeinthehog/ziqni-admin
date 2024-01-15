# # CreateAchievementRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom_fields** | **array<string,mixed>** | A list of custom field entries | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**name** | **string** | A name for the Achievement. Can be translated |
**description** | **string** | A name for the Achievement. Can be translated | [optional]
**terms_and_conditions** | **string** | Terms and conditions of an achievement. Can be translated | [optional]
**icon** | **string** | An Icon id that has been pre uploaded to the system to display for Achievement | [optional]
**banner** | **string** | A banner id that has been pre uploaded to the system to display for Achievement | [optional]
**banner_low_resolution** | **string** | A bannerLowResolution id that has been pre uploaded to the system to display for Achievement | [optional]
**banner_high_resolution** | **string** | A bannerHighResolution id that has been pre uploaded to the system to display for Achievement | [optional]
**rules** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\Rule[]**](Rule.md) |  | [optional]
**scheduling** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\Scheduling**](Scheduling.md) |  |
**max_number_of_issues** | **int** | Maximum number of issued achievements | [optional]
**translations** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\Translation[]**](Translation.md) |  | [optional]
**rewards** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\CreateRewardRequest[]**](CreateRewardRequest.md) |  | [optional]
**constraints** | **string[]** | Additional constraints |
**achievement_dependencies** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\DependantOn**](DependantOn.md) |  | [optional]
**member_tags_filter** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\DependantOn**](DependantOn.md) |  | [optional]
**product_ids** | **string[]** |  | [optional]
**product_tags_filter** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\DependantOn**](DependantOn.md) |  | [optional]
**add_constraints** | **string[]** |  | [optional]
**strategies** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\AchievementStrategies**](AchievementStrategies.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
