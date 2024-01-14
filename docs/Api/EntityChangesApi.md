# OpenAPI\Client\EntityChangesApi

All URIs are relative to https://api.ziqni.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**manageEntityChangeSubscription()**](EntityChangesApi.md#manageEntityChangeSubscription) | **POST** /entity-changes |  |


## `manageEntityChangeSubscription()`

```php
manageEntityChangeSubscription($entity_change_subscription_request): \OpenAPI\Client\com.ziqni.admin.sdk.model\EntityChangeSubscriptionResponse
```



subscribes a client to receive out-of-band data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntityChangesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_change_subscription_request = new \OpenAPI\Client\com.ziqni.admin.sdk.model\EntityChangeSubscriptionRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\EntityChangeSubscriptionRequest

try {
    $result = $apiInstance->manageEntityChangeSubscription($entity_change_subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntityChangesApi->manageEntityChangeSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_change_subscription_request** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\EntityChangeSubscriptionRequest**](../Model/EntityChangeSubscriptionRequest.md)|  | |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\EntityChangeSubscriptionResponse**](../Model/EntityChangeSubscriptionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
