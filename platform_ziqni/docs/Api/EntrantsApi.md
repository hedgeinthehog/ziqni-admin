# OpenAPI\Client\EntrantsApi

All URIs are relative to https://api.ziqni.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**exportEntrantsByQuery()**](EntrantsApi.md#exportEntrantsByQuery) | **POST** /entrants/export | Get entrants by query |
| [**getEntrantsByQuery()**](EntrantsApi.md#getEntrantsByQuery) | **POST** /entrants/query | Get entrants by query |
| [**updateEntrants()**](EntrantsApi.md#updateEntrants) | **POST** /entrants |  |


## `exportEntrantsByQuery()`

```php
exportEntrantsByQuery($query_request): \OpenAPI\Client\com\ziqni\admin\sdk\model\EntrantCountResponse
```

Get entrants by query

Retrieve ConteEntrants from Ziqni database by unique Contests ID's or any other POST body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntrantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query_request = new \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest(); // \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest

try {
    $result = $apiInstance->exportEntrantsByQuery($query_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntrantsApi->exportEntrantsByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query_request** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest**](../Model/QueryRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\EntrantCountResponse**](../Model/EntrantCountResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEntrantsByQuery()`

```php
getEntrantsByQuery($query_request): \OpenAPI\Client\com\ziqni\admin\sdk\model\EntrantResponse
```

Get entrants by query

Retrieve ConteEntrants from Ziqni database by unique Contests ID's or any other POST body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntrantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query_request = new \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest(); // \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest

try {
    $result = $apiInstance->getEntrantsByQuery($query_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntrantsApi->getEntrantsByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query_request** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest**](../Model/QueryRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\EntrantResponse**](../Model/EntrantResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEntrants()`

```php
updateEntrants($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



Updates the status of the Entrants for a Competition id provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EntrantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateEntrantRequest(); // \OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateEntrantRequest | Updates the status of the Entrants

try {
    $result = $apiInstance->updateEntrants($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntrantsApi->updateEntrants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateEntrantRequest**](../Model/UpdateEntrantRequest.md)| Updates the status of the Entrants | [optional] |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
