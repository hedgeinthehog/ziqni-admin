# # CreateContestRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom_fields** | **array<string,mixed>** | A list of custom field entries | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**row** | **int** | The row number for displaying the Contest in a table | [optional]
**round** | **int** | To what round does the contest belong | [optional]
**entrants_from_contest** | **string[]** | A list of Ziqni contest identifiers to allow contests chaining. When a Progression competition is active and you have a 2 round competition the first round has to reference the second round then this parameter becomes mandatory instead of Optional. | [optional]
**name** | **string** | A name for the Contest. Can be translated |
**description** | **string** | A name for the Contest. Can be translated | [optional]
**terms_and_conditions** | **string** | A name for the Contest. Can be translated | [optional]
**round_type** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\RoundType**](RoundType.md) |  |
**max_number_of_entrants** | **int** | Maximum number of entrants for the contest | [optional]
**min_number_of_entrants** | **int** | Minimum number of entrants for the contest |
**rules** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\Rule[]**](Rule.md) |  | [optional]
**scheduled_start_date** | **\DateTime** | ISO8601 timestamp for when a Contest should start. All records are stored in UTC time zone |
**scheduled_end_date** | **\DateTime** | ISO8601 timestamp for when a Contest should end. All records are stored in UTC time zone |
**strategies** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\TournamentStrategies**](TournamentStrategies.md) |  |
**constraints** | **string[]** | Additional constraints |
**add_constraints** | **string[]** | Additional constraints | [optional]
**translations** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\Translation[]**](Translation.md) |  | [optional]
**rewards** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\CreateRewardRequest[]**](CreateRewardRequest.md) |  | [optional]
**icon** | **string** | Link to the icon | [optional]
**banner** | **string** | Link to the banner | [optional]
**banner_low_resolution** | **string** | Link to the bannerLowResolution | [optional]
**banner_high_resolution** | **string** | Link to the bannerHighResolution | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
