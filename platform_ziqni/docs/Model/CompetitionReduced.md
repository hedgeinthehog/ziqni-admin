# # CompetitionReduced

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**space_name** | **string** | This is the space name which is linked to the account |
**created** | **\DateTime** | ISO8601 timestamp for when a Model was created. All records are stored in UTC time zone |
**competition_type** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\CompetitionType**](CompetitionType.md) |  |
**number_of_rounds** | **int** | Number of rounds to be played in a competition |
**name** | **string** | A name or a name of a competition. Can be translated |
**status** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\CompetitionStatus**](CompetitionStatus.md) |  |
**status_code** | **int** | The code of the competition | [readonly]
**dependant_on** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\Dependancy[]**](Dependancy.md) |  |
**entrant_member_type** | **string** |  | [optional]
**scheduled_start_date** | **\DateTime** | ISO8601 timestamp for when a Competition should start. All records are stored in UTC time zone |
**scheduled_end_date** | **\DateTime** | ISO8601 timestamp for when a Competition should end. All records are stored in UTC time zone |
**actual_start_date** | **\DateTime** | ISO8601 timestamp for when a Competition started. All records are stored in UTC time zone | [optional] [readonly]
**actual_end_date** | **\DateTime** | ISO8601 timestamp for when a Competition ended. All records are stored in UTC time zone | [optional] [readonly]
**tags** | **string[]** | A list of id&#39;s used to tag | [optional]
**constraints** | **string[]** | Additional constraints |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
