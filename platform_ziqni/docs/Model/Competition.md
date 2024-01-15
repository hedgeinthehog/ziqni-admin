# # Competition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**space_name** | **string** | This is the space name which is linked to the account |
**created** | **\DateTime** | ISO8601 timestamp for when a Model was created. All records are stored in UTC time zone |
**custom_fields** | **array<string,mixed>** |  | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**competition_type** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\CompetitionType**](CompetitionType.md) |  |
**number_of_rounds** | **int** | Number of rounds to be played in a competition |
**number_of_group_stages** | **int** | Number of group stages | [optional]
**name** | **string** | A name or a name of a competition. Can be translated |
**description** | **string** | Description of the competition. Can be translated | [optional]
**terms_and_conditions** | **string** | Terms and conditions of a competition. Can be translated | [optional]
**max_number_of_entrants** | **int** | Maximum number of partiipants allowed in a competition | [optional]
**min_number_of_entrants** | **int** | Maximum number of partiipants allowed in a competition |
**entrant_member_type** | **string** |  | [optional]
**scheduled_start_date** | **\DateTime** | ISO8601 timestamp for when a Competition should start. All records are stored in UTC time zone |
**scheduled_end_date** | **\DateTime** | ISO8601 timestamp for when a Competition should end. All records are stored in UTC time zone |
**actual_start_date** | **\DateTime** | ISO8601 timestamp for when a Competition started. All records are stored in UTC time zone | [optional] [readonly]
**actual_end_date** | **\DateTime** | ISO8601 timestamp for when a Competition ended. All records are stored in UTC time zone | [optional] [readonly]
**status** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\CompetitionStatus**](CompetitionStatus.md) |  |
**status_code** | **int** | The code of the competition | [optional] [readonly]
**constraints** | **string[]** | Additional constraints |
**products** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\ProductReduced[]**](ProductReduced.md) |  |
**entrant_member_tags_filter** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\DependantOn**](DependantOn.md) |  | [optional]
**product_tags_filter** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\DependantOn**](DependantOn.md) |  | [optional]
**icon** | **string** | Link to the icon | [optional]
**banner** | **string** | Link to the banner | [optional]
**banner_low_resolution** | **string** | Link to the bannerLowResolution | [optional]
**banner_high_resolution** | **string** | Link to the bannerHighResolution | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
