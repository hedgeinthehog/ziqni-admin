# # Reward

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**space_name** | **string** | This is the space name which is linked to the account |
**created** | **\DateTime** | ISO8601 timestamp for when a Model was created. All records are stored in UTC time zone |
**custom_fields** | **array<string,mixed>** |  | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**entity_type** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\EntityType**](EntityType.md) |  | [optional]
**entity_id** | **string** | A unique identifier of an achievement or contest. Dependant on entityType | [optional]
**name** | **string** | The name of a reward | [optional]
**description** | **string** | The description of a Reward | [optional]
**reward_rank** | **string** | If used in the context of contest this will associate with the rank of the leaderboard |
**reward_value** | **float** | Numerical value of the reward that will be issued based on the reward type |
**reward_type** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\RewardTypeReduced**](RewardTypeReduced.md) |  |
**icon** | **string** | An Icon id that has been pre uploaded to the system to display for reward | [optional]
**issue_limit** | **int** | how many of thsese rewards are | [optional]
**delay** | **int** | Delay of issuing a reward in minutes | [optional]
**point_in_time** | **\DateTime** | ISO8601 timestamp for when a Reward is available until a specific point in time. All records are stored in UTC time zone | [optional]
**period** | **int** | Reward available for a period of time from issuing in minutes | [optional]
**constraints** | **string[]** | Additional constraints |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
