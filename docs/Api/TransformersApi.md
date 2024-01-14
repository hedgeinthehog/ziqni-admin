# OpenAPI\Client\TransformersApi

All URIs are relative to https://api.ziqni.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTransformers()**](TransformersApi.md#createTransformers) | **POST** /transformers |  |
| [**deleteTransformers()**](TransformersApi.md#deleteTransformers) | **DELETE** /transformers |  |
| [**deleteTransformersByQuery()**](TransformersApi.md#deleteTransformersByQuery) | **POST** /transformers/delete |  |
| [**getTransformers()**](TransformersApi.md#getTransformers) | **GET** /transformers |  |
| [**getTransformersByQuery()**](TransformersApi.md#getTransformersByQuery) | **POST** /transformers/query |  |
| [**updateTransformers()**](TransformersApi.md#updateTransformers) | **PUT** /transformers |  |


## `createTransformers()`

```php
createTransformers($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Create a new Transformer in the Ziqni system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TransformersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateTransformerRequest()); // \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateTransformerRequest[] | Create a Transformer in the Ziqni system

try {
    $result = $apiInstance->createTransformers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformersApi->createTransformers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\CreateTransformerRequest[]**](../Model/CreateTransformerRequest.md)| Create a Transformer in the Ziqni system | |

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

## `deleteTransformers()`

```php
deleteTransformers($id): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Delete the Transformers for a given identifier specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TransformersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources

try {
    $result = $apiInstance->deleteTransformers($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformersApi->deleteTransformers: ', $e->getMessage(), PHP_EOL;
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

## `deleteTransformersByQuery()`

```php
deleteTransformersByQuery($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Delete a Transformer or a list of Transformers from Ziqni by unique Transformer ID's or any other POST body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TransformersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest | Delete a Transformer or a list of Transformers from Ziqni by unique Transformer ID's or any other POST body parameters using the POST method

try {
    $result = $apiInstance->deleteTransformersByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformersApi->deleteTransformersByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest**](../Model/QueryRequest.md)| Delete a Transformer or a list of Transformers from Ziqni by unique Transformer ID&#39;s or any other POST body parameters using the POST method | [optional] |

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

## `getTransformers()`

```php
getTransformers($id, $_limit, $_skip): \OpenAPI\Client\com.ziqni.admin.sdk.model\TransformerResponse
```



Returns a list of Transformers. This assumes that transformers have first been uploaded via a POST request or web console

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TransformersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources
$_limit = 56; // int | Limit the returned total records found
$_skip = 56; // int | Skip the returned records found and return the next batch of records

try {
    $result = $apiInstance->getTransformers($id, $_limit, $_skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformersApi->getTransformers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| The unique identifiers of the resources | [optional] |
| **_limit** | **int**| Limit the returned total records found | [optional] |
| **_skip** | **int**| Skip the returned records found and return the next batch of records | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\TransformerResponse**](../Model/TransformerResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransformersByQuery()`

```php
getTransformersByQuery($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\TransformerResponse
```



Retrieve a Transformer or a list of Transformers from Ziqni by unique Transformer ID's or any other POST body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TransformersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest | Retrieve a Transformer or a list of Transformers from Ziqni by unique Transformer ID's or any other Post body parameters using the POST method

try {
    $result = $apiInstance->getTransformersByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformersApi->getTransformersByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest**](../Model/QueryRequest.md)| Retrieve a Transformer or a list of Transformers from Ziqni by unique Transformer ID&#39;s or any other Post body parameters using the POST method | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\TransformerResponse**](../Model/TransformerResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTransformers()`

```php
updateTransformers($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Update an existing Transformer in the Ziqni system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TransformersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateTransformerRequest()); // \OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateTransformerRequest[] | Update Transformer details in the Ziqni system

try {
    $result = $apiInstance->updateTransformers($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransformersApi->updateTransformers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateTransformerRequest[]**](../Model/UpdateTransformerRequest.md)| Update Transformer details in the Ziqni system | |

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
