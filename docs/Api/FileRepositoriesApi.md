# OpenAPI\Client\FileRepositoriesApi

All URIs are relative to https://api.ziqni.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFileRepositories()**](FileRepositoriesApi.md#createFileRepositories) | **POST** /file-repositories |  |
| [**deleteFileRepositories()**](FileRepositoriesApi.md#deleteFileRepositories) | **DELETE** /file-repositories |  |
| [**deleteFileRepositoriesByQuery()**](FileRepositoriesApi.md#deleteFileRepositoriesByQuery) | **POST** /file-repositories/delete |  |
| [**getFileRepositories()**](FileRepositoriesApi.md#getFileRepositories) | **GET** /file-repositories |  |
| [**getFileRepositoriesByQuery()**](FileRepositoriesApi.md#getFileRepositoriesByQuery) | **POST** /file-repositories/query |  |
| [**updateFileRepositories()**](FileRepositoriesApi.md#updateFileRepositories) | **PUT** /file-repositories |  |


## `createFileRepositories()`

```php
createFileRepositories($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Create a new file object repository in your Ziqni space

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FileRepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateRepositoryRequest()); // \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateRepositoryRequest[] | Create a new file object repository in your Ziqni space

try {
    $result = $apiInstance->createFileRepositories($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileRepositoriesApi->createFileRepositories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\CreateRepositoryRequest[]**](../Model/CreateRepositoryRequest.md)| Create a new file object repository in your Ziqni space | |

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

## `deleteFileRepositories()`

```php
deleteFileRepositories($id, $permanent): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Delete the file repository for a given identifier specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FileRepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources
$permanent = True; // bool | Permanently delete the file object. Default is false

try {
    $result = $apiInstance->deleteFileRepositories($id, $permanent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileRepositoriesApi->deleteFileRepositories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| The unique identifiers of the resources | [optional] |
| **permanent** | **bool**| Permanently delete the file object. Default is false | [optional] |

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

## `deleteFileRepositoriesByQuery()`

```php
deleteFileRepositoriesByQuery($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Delete repositories nby query. Delete repositories by query and/or unique repository ID's or any other body parameters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FileRepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest | Delete repositories from a Ziqni space by unique repository ID's or any other POST body parameters using the POST method

try {
    $result = $apiInstance->deleteFileRepositoriesByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileRepositoriesApi->deleteFileRepositoriesByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest**](../Model/QueryRequest.md)| Delete repositories from a Ziqni space by unique repository ID&#39;s or any other POST body parameters using the POST method | [optional] |

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

## `getFileRepositories()`

```php
getFileRepositories($_limit, $_skip, $id): \OpenAPI\Client\com.ziqni.admin.sdk.model\RepositoryResponse
```



Returns a list of file object repositories. This assumes that repositories have first been uploaded via a POST request or web console

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FileRepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_limit = 56; // int | Limit the returned total records found
$_skip = 56; // int | Skip the returned records found and return the next batch of records
$id = array('id_example'); // string[] | The unique identifiers of the resources

try {
    $result = $apiInstance->getFileRepositories($_limit, $_skip, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileRepositoriesApi->getFileRepositories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_limit** | **int**| Limit the returned total records found | [optional] |
| **_skip** | **int**| Skip the returned records found and return the next batch of records | [optional] |
| **id** | [**string[]**](../Model/string.md)| The unique identifiers of the resources | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\RepositoryResponse**](../Model/RepositoryResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileRepositoriesByQuery()`

```php
getFileRepositoriesByQuery($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\RepositoryResponse
```



Find file object repositories by query

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FileRepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest | Retrieve file object repositories from Ziqni by unique repository ID's or any other POST body parameters using the POST method

try {
    $result = $apiInstance->getFileRepositoriesByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileRepositoriesApi->getFileRepositoriesByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest**](../Model/QueryRequest.md)| Retrieve file object repositories from Ziqni by unique repository ID&#39;s or any other POST body parameters using the POST method | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\RepositoryResponse**](../Model/RepositoryResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFileRepositories()`

```php
updateFileRepositories($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Update a file object repository in your Ziqni space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FileRepositoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateRepositoryRequest()); // \OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateRepositoryRequest[] | Update a file object repository in your Ziqni space.

try {
    $result = $apiInstance->updateFileRepositories($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileRepositoriesApi->updateFileRepositories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateRepositoryRequest[]**](../Model/UpdateRepositoryRequest.md)| Update a file object repository in your Ziqni space. | |

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
