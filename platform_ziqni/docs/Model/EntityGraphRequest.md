# # EntityGraphRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ids** | **string[]** | The identifier of the node to create a connected graph for |
**constraints** | **string[]** | Specify the constraints that need to be applied to the filter. | [optional]
**traversal** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\EntityGraphTraversal**](EntityGraphTraversal.md) |  | [optional]
**language_key** | **string** | The language codes can be found in the settings/transalations section of the back office | [optional]
**includes** | **string[]** | What objects to include from the entity in this response. For achievement the following can be included; description, memberTagsFilter, scheduling, and termsAndConditions | [optional]
**entity_type** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\EntityType**](EntityType.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
