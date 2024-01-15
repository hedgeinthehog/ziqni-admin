# # Achievement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**space_name** | **string** | This is the space name which is linked to the account |
**created** | **\DateTime** | ISO8601 timestamp for when a Model was created. All records are stored in UTC time zone |
**custom_fields** | **array<string,mixed>** |  | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**name** | **string** | A name for the Achievement. Can be translated |
**description** | **string** | A name for the Achievement. Can be translated | [optional]
**terms_and_conditions** | **string** | Terms and conditions of an achievement. Can be translated | [optional]
**icon** | **string** | An Icon id that has been pre uploaded to the system to display for Achievement |
**banner** | **string** | A banner id that has been pre uploaded to the system to display for Achievement | [optional]
**banner_low_resolution** | **string** | A bannerLowResolution id that has been pre uploaded to the system to display for Achievement | [optional]
**banner_high_resolution** | **string** | A bannerHighResolution id that has been pre uploaded to the system to display for Achievement | [optional]
**scheduling** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\Scheduling**](Scheduling.md) |  | [optional]
**max_number_of_issues** | **int** | Maximum number of issued achievements | [optional]
**status** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\AchievementStatus**](AchievementStatus.md) |  | [optional]
**status_code** | **int** | The code of the contest | [optional] [readonly]
**constraints** | **string[]** | Additional constraints, if set means true |
**achievement_dependencies** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\DependantOn**](DependantOn.md) |  | [optional]
**member_tags_filter** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\DependantOn**](DependantOn.md) |  | [optional]
**products** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\ProductReduced[]**](ProductReduced.md) |  | [optional]
**product_tags_filter** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\DependantOn**](DependantOn.md) |  | [optional]
**strategies** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\AchievementStrategies**](AchievementStrategies.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
