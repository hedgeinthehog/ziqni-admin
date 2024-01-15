# # Award

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**space_name** | **string** | This is the space name which is linked to the account |
**created** | **\DateTime** | ISO8601 timestamp for when a Model was created. All records are stored in UTC time zone |
**member_id** | **string** | A unique identifier of a Member |
**reward_id** | **string** | A unique identifier of a Reward |
**reward_type** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\RewardTypeReduced**](RewardTypeReduced.md) |  |
**reward_rank** | **string** | If used in the context of contest this will associate with the rank of the leaderboard |
**reward_value** | **float** | Numerical value of the reward that will be issued based on the reward type |
**delay** | **int** | Delay of issuing a reward in minutes | [optional]
**entity_type** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\EntityType**](EntityType.md) |  |
**entity_id** | **string** | The Id of the contest or achievement related to this Award. Dependant on entityType |
**point_in_time** | **\DateTime** | ISO8601 timestamp for when an Award is available until a specific point in time. All records are stored in UTC time zone. * There can only be one time definition used for claim period either \&quot;pointInTime\&quot; or \&quot;period\&quot; | [optional]
**period** | **int** | Claimable duration in minutes, this value will set the controls until when the award is claimable. * There can only be one time definition used for claim period either \&quot;pointInTime\&quot; or \&quot;period\&quot; | [optional]
**tags** | **string[]** | A list of Strings of groups that the reward belongs to. | [optional]
**metadata** | **array<string,string>** |  | [optional]
**constraints** | **string[]** | Additional constraints, if the value is present it means the |
**claimed_timestamp** | **\DateTime** | ISO8601 timestamp for when an Award is claimed. All records are stored in UTC time zone. * | [optional]
**member_ref_id** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
