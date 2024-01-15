# # UpdateContestRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**custom_fields** | **array<string,mixed>** | A list of id&#39;s used to add cutom fields | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**name** | **string** | A name for the Contest. Can be translated | [optional]
**description** | **string** | A name for the Contest. Can be translated | [optional]
**terms_and_conditions** | **string** | A name for the Contest. Can be translated | [optional]
**round_type** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\RoundType**](RoundType.md) |  | [optional]
**max_number_of_entrants** | **int** | Maximum number of entrants for the contest | [optional]
**min_number_of_entrants** | **int** | Minimum number of entrants for the contest | [optional]
**scheduled_start_date** | **\DateTime** | ISO8601 timestamp for when a Contest should start. All records are stored in UTC time zone | [optional]
**scheduled_end_date** | **\DateTime** | ISO8601 timestamp for when a Contest should end. All records are stored in UTC time zone | [optional]
**strategies** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\TournamentStrategies**](TournamentStrategies.md) |  | [optional]
**constraints** | **string[]** | Additional constraints | [optional]
**icon** | **string** | Link to the icon | [optional]
**banner** | **string** | Link to the banner | [optional]
**banner_low_resolution** | **string** | Link to the bannerLowResolution | [optional]
**banner_high_resolution** | **string** | Link to the bannerHighResolution | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
