# # CreateEventRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**member_ref_id** | **string** | The reference to this member in external system |
**action** | **string** | The identifier that describes the meaning of this event |
**batch_id** | **string** | The batch identifier is used to group related event stream data together. This could be as simple as a UUID or your internal reference to that distinct player session event | [optional]
**entity_ref_id** | **string** | It is a reference to a game/product ID from external system |
**source_value** | **float** | The actual numerical value related to the event |
**transaction_timestamp** | **\DateTime** | ISO8601 timestamp for when this event happened. All records are stored in UTC time zone |
**tags** | **string[]** | A list of Strings of groups that the tag belongs to | [optional]
**event_ref_id** | **string** |  |
**member_id** | **string** |  | [optional]
**custom_fields** | **array<string,mixed>** | A list of custom field entries | [optional]
**unit_of_measure** | **string** | The unit of measure is used to determine the type of the source value. It is used to normalize points values for currency based calculations by normalizing the source value. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
