# OpenAPI\Client\ComputeEngineApi

All URIs are relative to https://api.ziqni.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createComputeEngines()**](ComputeEngineApi.md#createComputeEngines) | **POST** /compute-engines |  |
| [**deleteComputeEnginesById()**](ComputeEngineApi.md#deleteComputeEnginesById) | **DELETE** /compute-engines/{id} |  |
| [**deleteComputeEnginesByQuery()**](ComputeEngineApi.md#deleteComputeEnginesByQuery) | **POST** /compute-engines/delete |  |
| [**getComputeEngines()**](ComputeEngineApi.md#getComputeEngines) | **GET** /compute-engines |  |
| [**getComputeEnginesById()**](ComputeEngineApi.md#getComputeEnginesById) | **GET** /compute-engines/{id} |  |
| [**getComputeEnginesByQuery()**](ComputeEngineApi.md#getComputeEnginesByQuery) | **POST** /compute-engines/query |  |
| [**updateComputeEngines()**](ComputeEngineApi.md#updateComputeEngines) | **PUT** /compute-engines |  |


## `createComputeEngines()`

```php
createComputeEngines($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



Create a new Compute Engine in the Ziqni system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ComputeEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com\ziqni\admin\sdk\model\CreateComputeEngineRequest(); // \OpenAPI\Client\com\ziqni\admin\sdk\model\CreateComputeEngineRequest | Create a Compute Engine in the Ziqni system

try {
    $result = $apiInstance->createComputeEngines($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComputeEngineApi->createComputeEngines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\CreateComputeEngineRequest**](../Model/CreateComputeEngineRequest.md)| Create a Compute Engine in the Ziqni system | |

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

## `deleteComputeEnginesById()`

```php
deleteComputeEnginesById($id): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



Delete the Compute Engine for a given identifier specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ComputeEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the resource

try {
    $result = $apiInstance->deleteComputeEnginesById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComputeEngineApi->deleteComputeEnginesById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Unique identifier of the resource | |

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

## `deleteComputeEnginesByQuery()`

```php
deleteComputeEnginesByQuery($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



Delete an Compute Engine or a list of Compute Engines from Ziqni by query

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ComputeEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest(); // \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest | Delete an  Compute Engine or a list of Compute Engines from Ziqni by unique Compute Engine ID's or any other POST body parameters using the POST method

try {
    $result = $apiInstance->deleteComputeEnginesByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComputeEngineApi->deleteComputeEnginesByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest**](../Model/QueryRequest.md)| Delete an  Compute Engine or a list of Compute Engines from Ziqni by unique Compute Engine ID&#39;s or any other POST body parameters using the POST method | [optional] |

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

## `getComputeEngines()`

```php
getComputeEngines($id, $_limit, $_skip): \OpenAPI\Client\com\ziqni\admin\sdk\model\ComputeEngineResponse
```



Returns a list of Compute Engines. This assumes that api keys have first been created via a POST request or web console

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ComputeEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources
$_limit = 56; // int | Limit the returned total records found
$_skip = 56; // int | Skip the returned records found and return the next batch of records

try {
    $result = $apiInstance->getComputeEngines($id, $_limit, $_skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComputeEngineApi->getComputeEngines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| The unique identifiers of the resources | [optional] |
| **_limit** | **int**| Limit the returned total records found | [optional] |
| **_skip** | **int**| Skip the returned records found and return the next batch of records | [optional] |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\ComputeEngineResponse**](../Model/ComputeEngineResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getComputeEnginesById()`

```php
getComputeEnginesById($id): \OpenAPI\Client\com\ziqni\admin\sdk\model\ComputeEngineResponse
```



Returns an Compute Engine by identifier provided. This assumes that compute engines have first been created via a POST request or web console

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ComputeEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the resource

try {
    $result = $apiInstance->getComputeEnginesById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComputeEngineApi->getComputeEnginesById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Unique identifier of the resource | |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\ComputeEngineResponse**](../Model/ComputeEngineResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getComputeEnginesByQuery()`

```php
getComputeEnginesByQuery($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ComputeEngineResponse
```



Retrieve an Compute Engine or a list of Compute Engines by query

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ComputeEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest(); // \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest | Retrieve an  Compute Engine or a list of Compute Engines from Ziqni by unique Copute Engine ID's or any other POST body parameters using the POST method

try {
    $result = $apiInstance->getComputeEnginesByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComputeEngineApi->getComputeEnginesByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest**](../Model/QueryRequest.md)| Retrieve an  Compute Engine or a list of Compute Engines from Ziqni by unique Copute Engine ID&#39;s or any other POST body parameters using the POST method | [optional] |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\ComputeEngineResponse**](../Model/ComputeEngineResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateComputeEngines()`

```php
updateComputeEngines($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



Update an existing Compute Engine in the Ziqni system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ComputeEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateComputeEngineRequest(); // \OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateComputeEngineRequest | Update an Compute Engine in the Ziqni system. * Any Put body Parameters that are excluded in the Request body field will be considered as empty and updated with an empty field

try {
    $result = $apiInstance->updateComputeEngines($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ComputeEngineApi->updateComputeEngines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateComputeEngineRequest**](../Model/UpdateComputeEngineRequest.md)| Update an Compute Engine in the Ziqni system. * Any Put body Parameters that are excluded in the Request body field will be considered as empty and updated with an empty field | |

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
