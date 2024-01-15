# # MemberTokenRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_key** | **string** | The API key to use to generate this token. |
**is_reference_id** | **bool** | Default is FALSE, if set to TRUE then the meberId will be assumed to be client provided reference id, if set to false then the memberId will be assumed to be a ZIQNI generated identifier. | [optional]
**origins** | **string[]** | Allowed origins for the generated token. Leave empty to permit all origins, Alternative provide up to 3 allowed origin URIs like https://my-space.api.ziqni.app | [optional]
**member** | **string** | The identifier used to find the member information. if this value is set to \&quot;__PUBLIC__\&quot; and isReferenceId is set to \&quot;FALSE\&quot; then a genral use, non-member specific token will be issued |
**expires** | **int** | The number of minutes this token will be valid for. If left blank the token will only be valid for 30 minutes | [optional]
**resource** | **string** | This will be ziqni-gapi or similar |
**disabled_services** | **string[]** | A list of services to be disabled for this web token | [optional]
**language_key** | **string** | The language code to use if none is provided in the member api requests | [optional]
**currency_key** | **string** | The language key to use if none is provided in the member api requests | [optional]
**time_zone_offset** | **int** | The time zone to use when returning date and time values | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
