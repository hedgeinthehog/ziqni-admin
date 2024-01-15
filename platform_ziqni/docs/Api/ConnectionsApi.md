# OpenAPI\Client\ConnectionsApi

All URIs are relative to https://api.ziqni.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createConnections()**](ConnectionsApi.md#createConnections) | **POST** /connections |  |
| [**deleteConnections()**](ConnectionsApi.md#deleteConnections) | **DELETE** /connections |  |
| [**deleteConnectionsByQuery()**](ConnectionsApi.md#deleteConnectionsByQuery) | **POST** /connections/delete |  |
| [**describeConnectionObject()**](ConnectionsApi.md#describeConnectionObject) | **GET** /connections/_describe |  |
| [**getConnections()**](ConnectionsApi.md#getConnections) | **GET** /connections |  |
| [**getConnectionsByQuery()**](ConnectionsApi.md#getConnectionsByQuery) | **POST** /connections/query |  |
| [**updateConnections()**](ConnectionsApi.md#updateConnections) | **PUT** /connections |  |
| [**updateConnectionsState()**](ConnectionsApi.md#updateConnectionsState) | **POST** /connections/state | Update connection status |


## `createConnections()`

```php
createConnections($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



Create a new Consumer Connection in the Ziqni system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com\ziqni\admin\sdk\model\CreateConnectionRequest()); // \OpenAPI\Client\com\ziqni\admin\sdk\model\CreateConnectionRequest[] | Create a RabbitMq Consumer Connection in the Ziqni system

try {
    $result = $apiInstance->createConnections($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->createConnections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\CreateConnectionRequest[]**](../Model/CreateConnectionRequest.md)| Create a RabbitMq Consumer Connection in the Ziqni system | |

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

## `deleteConnections()`

```php
deleteConnections($id): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



Delete the Consumer Connection for a given identifier specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources

try {
    $result = $apiInstance->deleteConnections($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->deleteConnections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| The unique identifiers of the resources | [optional] |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteConnectionsByQuery()`

```php
deleteConnectionsByQuery($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



Delete a RabbitMQ Connection or a list of RabbitMQ Connections from Ziqni by unique Connection ID's or any other POST body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest(); // \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest | Delete a RabbitMQ Connection or a list of RabbitMQ Connections from Ziqni by unique Connection ID's or any other POST body parameters using the POST method

try {
    $result = $apiInstance->deleteConnectionsByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->deleteConnectionsByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest**](../Model/QueryRequest.md)| Delete a RabbitMQ Connection or a list of RabbitMQ Connections from Ziqni by unique Connection ID&#39;s or any other POST body parameters using the POST method | [optional] |

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

## `describeConnectionObject()`

```php
describeConnectionObject($connection_type): \OpenAPI\Client\com\ziqni\admin\sdk\model\ObjectParametersResponse
```



Get all the parameter for the connection based on the connection type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connection_type = new \OpenAPI\Client\com\ziqni\admin\sdk\model\ConnectionType(); // ConnectionType | The connection type, RabbitMQ, Kafka, or SQS

try {
    $result = $apiInstance->describeConnectionObject($connection_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->describeConnectionObject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **connection_type** | [**ConnectionType**](../Model/.md)| The connection type, RabbitMQ, Kafka, or SQS | |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\ObjectParametersResponse**](../Model/ObjectParametersResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConnections()`

```php
getConnections($id, $_limit, $_skip): \OpenAPI\Client\com\ziqni\admin\sdk\model\ConnectionResponse
```



Return a list of Consumer Connections

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources
$_limit = 56; // int | Limit the returned total records found
$_skip = 56; // int | Skip the returned records found and return the next batch of records

try {
    $result = $apiInstance->getConnections($id, $_limit, $_skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->getConnections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| The unique identifiers of the resources | [optional] |
| **_limit** | **int**| Limit the returned total records found | [optional] |
| **_skip** | **int**| Skip the returned records found and return the next batch of records | [optional] |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\ConnectionResponse**](../Model/ConnectionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConnectionsByQuery()`

```php
getConnectionsByQuery($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ConnectionResponse
```



Retrieve a RabbitMQ Connection or a list of RabbitMQ Connections from Ziqni by unique Connection ID's or any other Post body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest(); // \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest | Retrieve a RabbitMQ Connection or a list of RabbitMQ Connections from Ziqni by unique Connection ID's or any other Post body parameters using the POST method

try {
    $result = $apiInstance->getConnectionsByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->getConnectionsByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest**](../Model/QueryRequest.md)| Retrieve a RabbitMQ Connection or a list of RabbitMQ Connections from Ziqni by unique Connection ID&#39;s or any other Post body parameters using the POST method | [optional] |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\ConnectionResponse**](../Model/ConnectionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateConnections()`

```php
updateConnections($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



Update an existing Consumer Connection in the Ziqni system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateConnectionRequest()); // \OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateConnectionRequest[] | Update the RabbitMq Consumer Connection details in the Ziqni system

try {
    $result = $apiInstance->updateConnections($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->updateConnections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateConnectionRequest[]**](../Model/UpdateConnectionRequest.md)| Update the RabbitMq Consumer Connection details in the Ziqni system | |

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

## `updateConnectionsState()`

```php
updateConnectionsState($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```

Update connection status

Update the state of a Consumer using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateConnectionStateRequest()); // \OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateConnectionStateRequest[] | Update the state of a Consumer using the POST method

try {
    $result = $apiInstance->updateConnectionsState($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->updateConnectionsState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateConnectionStateRequest[]**](../Model/UpdateConnectionStateRequest.md)| Update the state of a Consumer using the POST method | [optional] |

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
