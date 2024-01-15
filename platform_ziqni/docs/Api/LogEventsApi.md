# OpenAPI\Client\LogEventsApi

All URIs are relative to https://api.ziqni.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLogEventsByQuery()**](LogEventsApi.md#getLogEventsByQuery) | **POST** /log-events/query |  |


## `getLogEventsByQuery()`

```php
getLogEventsByQuery($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\LogEventResponse
```



Retrieve Log Events from Ziqni database by unique Log Events ID's or any other POST body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\LogEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest(); // \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest | Retrieve Log Events from Ziqni database by unique Log Events ID's or any other Post body parameters using the POST method

try {
    $result = $apiInstance->getLogEventsByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LogEventsApi->getLogEventsByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest**](../Model/QueryRequest.md)| Retrieve Log Events from Ziqni database by unique Log Events ID&#39;s or any other Post body parameters using the POST method | [optional] |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\LogEventResponse**](../Model/LogEventResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
