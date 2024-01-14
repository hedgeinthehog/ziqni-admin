# OpenAPI\Client\MemberTokenApi

All URIs are relative to https://api.ziqni.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMemberToken()**](MemberTokenApi.md#createMemberToken) | **POST** /member-token |  |


## `createMemberToken()`

```php
createMemberToken($member_token_request): \OpenAPI\Client\com.ziqni.admin.sdk.model\TokenResponse
```



Get Jwt Token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MemberTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_token_request = new \OpenAPI\Client\com.ziqni.admin.sdk.model\MemberTokenRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\MemberTokenRequest

try {
    $result = $apiInstance->createMemberToken($member_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemberTokenApi->createMemberToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **member_token_request** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\MemberTokenRequest**](../Model/MemberTokenRequest.md)|  | |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\TokenResponse**](../Model/TokenResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
