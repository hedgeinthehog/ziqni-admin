# OpenAPI\Client\ActionTypesApi

All URIs are relative to https://api.ziqni.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createActionTypes()**](ActionTypesApi.md#createActionTypes) | **POST** /action-types | Create action types |
| [**deleteActionTypes()**](ActionTypesApi.md#deleteActionTypes) | **DELETE** /action-types | Delete action types |
| [**deleteActionTypesByQuery()**](ActionTypesApi.md#deleteActionTypesByQuery) | **POST** /action-types/delete | Delete action types by query |
| [**getActionTypes()**](ActionTypesApi.md#getActionTypes) | **GET** /action-types | Get action types |
| [**getActionTypesByQuery()**](ActionTypesApi.md#getActionTypesByQuery) | **POST** /action-types/query | Get action types by query |
| [**updateActionTypes()**](ActionTypesApi.md#updateActionTypes) | **PUT** /action-types | Update action types |


## `createActionTypes()`

```php
createActionTypes($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```

Create action types

Create new Action types in the Ziqni database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ActionTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateActionTypeRequest()); // \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateActionTypeRequest[] | Create Action Types in the Ziqni database

try {
    $result = $apiInstance->createActionTypes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionTypesApi->createActionTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\CreateActionTypeRequest[]**](../Model/CreateActionTypeRequest.md)| Create Action Types in the Ziqni database | |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteActionTypes()`

```php
deleteActionTypes($id): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```

Delete action types

Delete Action types for a given identifier specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ActionTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources

try {
    $result = $apiInstance->deleteActionTypes($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionTypesApi->deleteActionTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| The unique identifiers of the resources | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteActionTypesByQuery()`

```php
deleteActionTypesByQuery($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```

Delete action types by query

Delete Action types from Ziqni database by unique Action types ID's or any other POST body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ActionTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest | Delete Action types from Ziqni database by unique Action types ID's or any other POST body parameters using the POST method

try {
    $result = $apiInstance->deleteActionTypesByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionTypesApi->deleteActionTypesByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest**](../Model/QueryRequest.md)| Delete Action types from Ziqni database by unique Action types ID&#39;s or any other POST body parameters using the POST method | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getActionTypes()`

```php
getActionTypes($id, $_limit, $_skip): \OpenAPI\Client\com.ziqni.admin.sdk.model\ActionTypeResponse
```

Get action types

Returns a list of Action Types. This assumes that action types have first been uploaded via a POST request or web console

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ActionTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources
$_limit = 56; // int | Limit the returned total records found
$_skip = 56; // int | Skip the returned records found and return the next batch of records

try {
    $result = $apiInstance->getActionTypes($id, $_limit, $_skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionTypesApi->getActionTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| The unique identifiers of the resources | [optional] |
| **_limit** | **int**| Limit the returned total records found | [optional] |
| **_skip** | **int**| Skip the returned records found and return the next batch of records | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\ActionTypeResponse**](../Model/ActionTypeResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getActionTypesByQuery()`

```php
getActionTypesByQuery($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ActionTypeResponse
```

Get action types by query

Retrieve Action types from Ziqni database by unique Action type ID's or any other POST body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ActionTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest | Retrieve Action types from Ziqni database by unique Action type ID's or any other POST body parameters using the POST method

try {
    $result = $apiInstance->getActionTypesByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionTypesApi->getActionTypesByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest**](../Model/QueryRequest.md)| Retrieve Action types from Ziqni database by unique Action type ID&#39;s or any other POST body parameters using the POST method | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\ActionTypeResponse**](../Model/ActionTypeResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateActionTypes()`

```php
updateActionTypes($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```

Update action types

Update existing Action types in the Ziqni database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ActionTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateActionTypeRequest()); // \OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateActionTypeRequest[] | Update Action types in the Ziqni database.

try {
    $result = $apiInstance->updateActionTypes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionTypesApi->updateActionTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateActionTypeRequest[]**](../Model/UpdateActionTypeRequest.md)| Update Action types in the Ziqni database. | |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
