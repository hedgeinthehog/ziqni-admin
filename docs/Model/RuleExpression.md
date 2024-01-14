# # RuleExpression

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | condition or expression or routine |
**must_match_all** | **bool** | All expressions in the condition must either evaluate to TRUE or FALSE if set to TRUE | [optional]
**must_evaluate_to** | **bool** | All the expressions of this condition must either evaluate to TRUE or FALSE | [optional]
**scope** | **string** | The scope of the operand used in the expression | [optional]
**operand** | **string** | The operand for the rule. | [optional]
**operator** | **string** | [ *.* ] or [ .* ] or [ &#x3D;&#x3D; ] or [ &gt; ] or [ &gt;&#x3D; ] or [ &lt;&#x3D;]  or [ &lt; ] or [ &lt;&gt; ] | [optional]
**value** | **string** | The value associated with the expression | [optional]
**rules** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\RuleExpression[]**](RuleExpression.md) |  | [optional]
**then** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\RuleRoutine[]**](RuleRoutine.md) | The routine to run when all the conditions have evaluted to the required level | [optional]
**line_number** | **int** | The order the rules have to be executed in. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
