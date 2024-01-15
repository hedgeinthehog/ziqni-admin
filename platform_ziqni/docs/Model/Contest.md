# # Contest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**space_name** | **string** | This is the space name which is linked to the account |
**created** | **\DateTime** | ISO8601 timestamp for when a Model was created. All records are stored in UTC time zone |
**custom_fields** | **array<string,mixed>** |  | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**competition_id** | **string** | A unique identifier of a Competition |
**row** | **int** | The row number for displaying the Contest in a table |
**name** | **string** | A name for the Contest. Can be translated |
**description** | **string** | Description of the contest | [optional]
**terms_and_conditions** | **string** | Terms and conditions for participating in the Contest. Can be translated | [optional]
**round** | **int** | To what round does the contest belong |
**round_type** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\RoundType**](RoundType.md) |  |
**entrants_from_contest** | **string[]** | A list of Ziqni contest identifiers to allow contests chaining. When a Progression competition is active and you have a 2 round competition the first round has to reference the second round then this parameter becomes mandatory instead of Optional. |
**max_number_of_entrants** | **int** | Maximum number of entrants for the contest | [optional]
**min_number_of_entrants** | **int** | Minimum number of entrants for the contest |
**scheduled_start_date** | **\DateTime** | ISO8601 timestamp for when a Contest should start. All records are stored in UTC time zone |
**scheduled_end_date** | **\DateTime** | ISO8601 timestamp for when a Contest should end. All records are stored in UTC time zone |
**actual_start_date** | **\DateTime** | ISO8601 timestamp for when a Competition started. All records are stored in UTC time zone | [optional] [readonly]
**actual_end_date** | **\DateTime** | ISO8601 timestamp for when a Competition ended. All records are stored in UTC time zone | [optional] [readonly]
**strategies** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\TournamentStrategies**](TournamentStrategies.md) |  | [optional]
**status** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\ContestStatus**](ContestStatus.md) |  |
**status_code** | **int** | The code of the contest | [readonly]
**constraints** | **string[]** | Additional constraints |
**icon** | **string** | Link to the icon | [optional]
**banner** | **string** | Link to the banner | [optional]
**banner_low_resolution** | **string** | Link to the bannerLowResolution | [optional]
**banner_high_resolution** | **string** | Link to the bannerHighResolution | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
