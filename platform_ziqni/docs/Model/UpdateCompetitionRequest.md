# # UpdateCompetitionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**custom_fields** | **array<string,mixed>** | A list of id&#39;s used to add cutom fields | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**competition_type** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\CompetitionType**](CompetitionType.md) |  | [optional]
**number_of_rounds** | **int** | Number of rounds to be played in a competition | [optional]
**number_of_group_stages** | **int** | Number of group stages | [optional]
**name** | **string** | A name or a name of a competition. Can be translated | [optional]
**description** | **string** | Description of the competition. Can be translated | [optional]
**terms_and_conditions** | **string** | Terms and conditions of a competition. Can be translated | [optional]
**entrant_member_type** | **string** |  | [optional]
**max_number_of_entrants** | **int** | Maximum number of partiipants allowed in a competition | [optional]
**min_number_of_entrants** | **int** | Maximum number of partiipants allowed in a competition | [optional]
**scheduled_start_date** | **\DateTime** | ISO8601 timestamp for when a Competition should start. All records are stored in UTC time zone | [optional]
**scheduled_end_date** | **\DateTime** | ISO8601 timestamp for when a Competition should end. All records are stored in UTC time zone | [optional]
**constraints** | **string[]** | Additional constraints | [optional]
**add_constraints** | **string[]** | Additional constraints | [optional]
**remove_constraints** | **string[]** | Additional constraints | [optional]
**product_ids** | **string[]** |  | [optional]
**create_contests** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\CreateContestForCompetitionRequest**](CreateContestForCompetitionRequest.md) |  | [optional]
**update_contests** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateContestRequest**](UpdateContestRequest.md) |  | [optional]
**entrant_member_tags_filter** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\DependantOn**](DependantOn.md) |  | [optional]
**product_tags_filter** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\DependantOn**](DependantOn.md) |  | [optional]
**icon** | **string** | Link to the icon | [optional]
**banner** | **string** | Link to the banner | [optional]
**banner_low_resolution** | **string** | Link to the bannerLowResolution | [optional]
**banner_high_resolution** | **string** | Link to the bannerHighResolution | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
