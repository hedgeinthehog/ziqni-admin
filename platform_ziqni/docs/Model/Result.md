# # Result

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system identifier of an updated record |
**external_reference** | **string** | A reference id from external system | [optional]
**result** | **string** | The response of an action Possible values:   * created: Will be returned for a POST action to create entity   * updated: Will be returned for a PUT action to update entity   * deleted: Will be returned for a DELETE action on an entity |
**relations** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\Relation[]**](Relation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
