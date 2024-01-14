# # CustomField

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**space_name** | **string** | This is the space name which is linked to the account |
**created** | **\DateTime** | ISO8601 timestamp for when a Model was created. All records are stored in UTC time zone |
**name** | **string** | The name of a Custom field |
**key** | **string** | The key of a Custom field |
**description** | **string** | The description of a Custom field | [optional]
**field_type** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\FieldType**](FieldType.md) |  |
**applies_to** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\AppliesTo**](AppliesTo.md) |  |
**constraints** | **string[]** | For example \&quot;required\&quot; to indicate the field is required. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
