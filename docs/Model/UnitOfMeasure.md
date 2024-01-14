# # UnitOfMeasure

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**space_name** | **string** | This is the space name which is linked to the account |
**created** | **\DateTime** | ISO8601 timestamp for when a Model was created. All records are stored in UTC time zone |
**custom_fields** | **array<string,mixed>** |  | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**name** | **string** | The name of a unit of measure |
**key** | **string** | The reference to the unit of measure in your system |
**description** | **string** | The description of a unit of measure | [optional]
**iso_code** | **string** | An alphabetical or numerical code to identify a unit of measure | [optional]
**symbol** | **string** | The symbol of a unit of measure | [optional]
**multiplier** | **float** | Is used to multiply the value from the standardised one that is being used |
**unit_of_measure_type** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\UnitOfMeasureType**](UnitOfMeasureType.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
