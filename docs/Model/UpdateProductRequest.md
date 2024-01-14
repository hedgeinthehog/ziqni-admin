# # UpdateProductRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**custom_fields** | **array<string,mixed>** | A list of id&#39;s used to add cutom fields | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**name** | **string** | The name of the product | [optional]
**description** | **string** | The description of the product for your reference | [optional]
**icon** | **string** | An Icon id that has been pre uploaded to the system to display for Product | [optional]
**adjustment_factor** | **float** | The multiplier to apply to source values received for this product events | [optional]
**action_type_adjustment_factors** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\ActionTypeAdjustmentFactor[]**](ActionTypeAdjustmentFactor.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
