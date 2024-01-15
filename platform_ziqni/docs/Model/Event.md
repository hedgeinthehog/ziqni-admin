# # Event

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**space_name** | **string** | This is the space name which is linked to the account |
**created** | **\DateTime** | ISO8601 timestamp for when a Model was created. All records are stored in UTC time zone |
**member_id** | **string** | Unique system identifier of a Member | [optional]
**member_ref_id** | **string** | The reference to this member in external system | [optional]
**action** | **string** | The identifier that describes the meaning of this event |
**batch_id** | **string** | The batch identifier is used to group related event stream data together. This could be as simple as a UUID or your internal reference to that distinct player session event | [optional]
**entity_id** | **string** | It is a reference to a models ID for any of the following objects - Product, Achievement, Reward, Award | [optional]
**event_ref_id** | **string** | It is a reference to a models ID for any of the following objects - Product, Achievement, Reward, Award | [optional]
**entity_ref_id** | **string** | It is a reference to a models ID for any of the following objects - Product, Achievement, Reward, Award | [optional]
**source_value** | **float** | The actual numerical value related to the event |
**points** | **float** | A value derived from the source value field. In the context of Product additionally an adjustment factor will be applied |
**transaction_timestamp** | **\DateTime** | ISO8601 timestamp for when this event happened. All records are stored in UTC time zone |
**metadata** | **array<string,mixed>** | Event metadata map. | [optional]
**custom_fields** | **array<string,mixed>** |  | [optional]
**tags** | **string[]** | A list of Strings of groups that the tag belongs to | [optional]
**relates_to** | **string[]** |  | [optional]
**relates_to_external** | **string[]** |  | [optional]
**unit_of_measure** | **string** | The unit of measure is used to determine the type of the source value. It is used to normalize points values for currency based calculations by normalizing the source value. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
