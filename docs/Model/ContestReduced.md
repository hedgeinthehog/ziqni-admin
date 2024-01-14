# # ContestReduced

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**space_name** | **string** | This is the space name which is linked to the account |
**created** | **\DateTime** | ISO8601 timestamp for when a Model was created. All records are stored in UTC time zone |
**competition_id** | **string** | A unique identifier of a Competition |
**row** | **int** | The row number for displaying the Contest in a table |
**name** | **string** | A name for the Contest. Can be translated |
**round** | **int** | To what round does the contest belong |
**group_stage** | **int** | Is used for more complex Competitions e.g. multi round competitions where round 1 group stage matched round 2 |
**entrants_from_contest** | **string[]** | A list of Ziqni contest identifiers to allow contests chaining. When a Progression competition is active and you have a 2 round competition the first round has to reference the second round then this parameter becomes mandatory instead of Optional. |
**status** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\ContestStatus**](ContestStatus.md) |  |
**status_code** | **int** | The code of the contest | [readonly]
**scheduled_start_date** | **\DateTime** | ISO8601 timestamp for when a Contest should start. All records are stored in UTC time zone |
**scheduled_end_date** | **\DateTime** | ISO8601 timestamp for when a Contest should end. All records are stored in UTC time zone |
**actual_start_date** | **\DateTime** | ISO8601 timestamp for when a Contest started. All records are stored in UTC time zone | [optional] [readonly]
**actual_end_date** | **\DateTime** | ISO8601 timestamp for when a Contest ended. All records are stored in UTC time zone | [optional] [readonly]
**tags** | **string[]** | A list of id&#39;s used to tag | [optional]
**rewards** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\RewardReduced[]**](RewardReduced.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
