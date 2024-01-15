# OpenAPI\Client\GraphsApi

All URIs are relative to https://api.ziqni.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getGraph()**](GraphsApi.md#getGraph) | **POST** /graphs | Get achievements by member reference id |


## `getGraph()`

```php
getGraph($entity_graph_request): \OpenAPI\Client\com\ziqni\admin\sdk\model\EntityGraphResponse
```

Get achievements by member reference id

Returns a list of graphs based on the entity type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\GraphsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_graph_request = new \OpenAPI\Client\com\ziqni\admin\sdk\model\EntityGraphRequest(); // \OpenAPI\Client\com\ziqni\admin\sdk\model\EntityGraphRequest

try {
    $result = $apiInstance->getGraph($entity_graph_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraphsApi->getGraph: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_graph_request** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\EntityGraphRequest**](../Model/EntityGraphRequest.md)|  | |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\EntityGraphResponse**](../Model/EntityGraphResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
