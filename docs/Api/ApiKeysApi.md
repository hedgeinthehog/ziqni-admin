# OpenAPI\Client\ApiKeysApi

All URIs are relative to https://api.ziqni.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createApiKeys()**](ApiKeysApi.md#createApiKeys) | **POST** /api-keys | Delete api keys |
| [**deleteApiKeys()**](ApiKeysApi.md#deleteApiKeys) | **DELETE** /api-keys | Delete api keys |
| [**deleteApiKeysById()**](ApiKeysApi.md#deleteApiKeysById) | **DELETE** /api-keys/{id} | Delete api keys by id |
| [**deleteApiKeysByQuery()**](ApiKeysApi.md#deleteApiKeysByQuery) | **POST** /api-keys/delete | Delete api keys by query |
| [**getApiKeys()**](ApiKeysApi.md#getApiKeys) | **GET** /api-keys | Get api keys |
| [**getApiKeysById()**](ApiKeysApi.md#getApiKeysById) | **GET** /api-keys/{id} | Get api keys by id |
| [**getApiKeysByQuery()**](ApiKeysApi.md#getApiKeysByQuery) | **POST** /api-keys/query | Get api keys by query |
| [**updateApiKeys()**](ApiKeysApi.md#updateApiKeys) | **PUT** /api-keys | Update api keys |


## `createApiKeys()`

```php
createApiKeys($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```

Delete api keys

Create a new Api key in the Ziqni system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateApiKeyRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateApiKeyRequest | Create an Api key in the Ziqni system

try {
    $result = $apiInstance->createApiKeys($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->createApiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\CreateApiKeyRequest**](../Model/CreateApiKeyRequest.md)| Create an Api key in the Ziqni system | |

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

## `deleteApiKeys()`

```php
deleteApiKeys($id): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```

Delete api keys

Delete Api keys for a given identifier specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources

try {
    $result = $apiInstance->deleteApiKeys($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->deleteApiKeys: ', $e->getMessage(), PHP_EOL;
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

## `deleteApiKeysById()`

```php
deleteApiKeysById($id): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```

Delete api keys by id

Delete the Api key for a given identifier specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the resource

try {
    $result = $apiInstance->deleteApiKeysById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->deleteApiKeysById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Unique identifier of the resource | |

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

## `deleteApiKeysByQuery()`

```php
deleteApiKeysByQuery($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```

Delete api keys by query

Delete an Api key or a list of Api keys from Ziqni by query

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest | Delete an Api key or a list of Api keys from Ziqni by unique Api key ID's or any other POST body parameters using the POST method

try {
    $result = $apiInstance->deleteApiKeysByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->deleteApiKeysByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest**](../Model/QueryRequest.md)| Delete an Api key or a list of Api keys from Ziqni by unique Api key ID&#39;s or any other POST body parameters using the POST method | [optional] |

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

## `getApiKeys()`

```php
getApiKeys($id, $_limit, $_skip): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiKeyResponse
```

Get api keys

Returns a list of Api keys. This assumes that api keys have first been created via a POST request or web console

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources
$_limit = 56; // int | Limit the returned total records found
$_skip = 56; // int | Skip the returned records found and return the next batch of records

try {
    $result = $apiInstance->getApiKeys($id, $_limit, $_skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->getApiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| The unique identifiers of the resources | [optional] |
| **_limit** | **int**| Limit the returned total records found | [optional] |
| **_skip** | **int**| Skip the returned records found and return the next batch of records | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\ApiKeyResponse**](../Model/ApiKeyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiKeysById()`

```php
getApiKeysById($id): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiKeyResponse
```

Get api keys by id

Returns an Api key by identifier provided. This assumes that api keys have first been created via a POST request or web console

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the resource

try {
    $result = $apiInstance->getApiKeysById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->getApiKeysById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Unique identifier of the resource | |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\ApiKeyResponse**](../Model/ApiKeyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApiKeysByQuery()`

```php
getApiKeysByQuery($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiKeyResponse
```

Get api keys by query

Retrieve an Api key or a list of Api keys by query

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest | Retrieve an Api key or a list of Api keys from Ziqni by unique Api key ID's or any other POST body parameters using the POST method

try {
    $result = $apiInstance->getApiKeysByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->getApiKeysByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest**](../Model/QueryRequest.md)| Retrieve an Api key or a list of Api keys from Ziqni by unique Api key ID&#39;s or any other POST body parameters using the POST method | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\ApiKeyResponse**](../Model/ApiKeyResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApiKeys()`

```php
updateApiKeys($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```

Update api keys

Update an existing Api key in the Ziqni system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ApiKeysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateApiKeyRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateApiKeyRequest | Update an Api key in the Ziqni system. * Any Put body Parameters that are excluded in the Request body field will be considered as empty and updated with an empty field

try {
    $result = $apiInstance->updateApiKeys($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeysApi->updateApiKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateApiKeyRequest**](../Model/UpdateApiKeyRequest.md)| Update an Api key in the Ziqni system. * Any Put body Parameters that are excluded in the Request body field will be considered as empty and updated with an empty field | |

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
