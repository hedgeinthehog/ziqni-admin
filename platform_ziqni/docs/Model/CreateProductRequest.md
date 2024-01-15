# # CreateProductRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom_fields** | **array<string,mixed>** | A list of custom field entries | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**name** | **string** | The name of the product |
**description** | **string** | The description of the product for your reference | [optional]
**adjustment_factor** | **float** | The multiplier to apply to source values received for this product events |
**icon** | **string** | An Icon id that has been pre uploaded to the system to display for Product | [optional]
**product_ref_id** | **string** | The reference to this product in your system. The reference identifier can not be changed after the product has been created |
**product_type** | **string** | The type to this product in your system. | [optional]
**action_type_adjustment_factors** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\ActionTypeAdjustmentFactor[]**](ActionTypeAdjustmentFactor.md) |  | [optional]
**translations** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\Translation[]**](Translation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
