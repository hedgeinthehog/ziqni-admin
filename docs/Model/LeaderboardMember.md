# # LeaderboardMember

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the player |
**member_id** | **string** | Unique system identifier of a Member |
**member_ref_id** | **string** | The reference to this member in your system |
**rank_change_from** | **int** | Previous rank held, null if no changes are recorded | [optional]
**rank_change_type** | **int** | [-1] for rank-down, like 5 to 8. [0] for no change, [1] for rank-up like 9 to 3 | [optional]
**params** | **array<string,float>** | The user defined values used in the rules builder | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
