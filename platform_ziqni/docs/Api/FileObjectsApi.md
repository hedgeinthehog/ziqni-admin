# OpenAPI\Client\FileObjectsApi

All URIs are relative to https://api.ziqni.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFileObjects()**](FileObjectsApi.md#createFileObjects) | **POST** /file-objects |  |
| [**deleteFileObjects()**](FileObjectsApi.md#deleteFileObjects) | **DELETE** /file-objects |  |
| [**deleteFileObjectsByQuery()**](FileObjectsApi.md#deleteFileObjectsByQuery) | **POST** /file-objects/delete |  |
| [**downloadFileObjects()**](FileObjectsApi.md#downloadFileObjects) | **GET** /file-objects/download |  |
| [**getFileObjects()**](FileObjectsApi.md#getFileObjects) | **GET** /file-objects |  |
| [**getFileObjectsByQuery()**](FileObjectsApi.md#getFileObjectsByQuery) | **POST** /file-objects/query |  |
| [**saveTemplates()**](FileObjectsApi.md#saveTemplates) | **POST** /file-objects/save-template |  |
| [**updateFileObjects()**](FileObjectsApi.md#updateFileObjects) | **PUT** /file-objects |  |
| [**uploadFileObjects()**](FileObjectsApi.md#uploadFileObjects) | **POST** /file-objects/upload |  |


## `createFileObjects()`

```php
createFileObjects($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FileObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com\ziqni\admin\sdk\model\CreateFileObjectRequest(); // \OpenAPI\Client\com\ziqni\admin\sdk\model\CreateFileObjectRequest | Create a new file object repository in your Ziqni space

try {
    $result = $apiInstance->createFileObjects($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileObjectsApi->createFileObjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\CreateFileObjectRequest**](../Model/CreateFileObjectRequest.md)| Create a new file object repository in your Ziqni space | |

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

## `deleteFileObjects()`

```php
deleteFileObjects($id, $permanent): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FileObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources
$permanent = True; // bool | Permanently delete the file object. Default is false

try {
    $result = $apiInstance->deleteFileObjects($id, $permanent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileObjectsApi->deleteFileObjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| The unique identifiers of the resources | [optional] |
| **permanent** | **bool**| Permanently delete the file object. Default is false | [optional] |

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

## `deleteFileObjectsByQuery()`

```php
deleteFileObjectsByQuery($id, $body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



Delete file objects by query

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FileObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources
$body = new \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest(); // \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest | Delete file objects inside a repository from Ziqni by unique file by unique object ID's or any other POST body parameters using the POST method

try {
    $result = $apiInstance->deleteFileObjectsByQuery($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileObjectsApi->deleteFileObjectsByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| The unique identifiers of the resources | [optional] |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest**](../Model/QueryRequest.md)| Delete file objects inside a repository from Ziqni by unique file by unique object ID&#39;s or any other POST body parameters using the POST method | [optional] |

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

## `downloadFileObjects()`

```php
downloadFileObjects($path): \SplFileObject
```



Download file objects from your Ziqni space

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FileObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string | The canonical path of the file to download

try {
    $result = $apiInstance->downloadFileObjects($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileObjectsApi->downloadFileObjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**| The canonical path of the file to download | [optional] |

### Return type

**\SplFileObject**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/xml`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileObjects()`

```php
getFileObjects($_limit, $_skip, $id, $download): \OpenAPI\Client\com\ziqni\admin\sdk\model\FileObjectsResponse
```



Returns a list of file objects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FileObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_limit = 56; // int | Limit the returned total records found
$_skip = 56; // int | Skip the returned records found and return the next batch of records
$id = array('id_example'); // string[] | The unique identifiers of the resources
$download = 'download_example'; // string | 

try {
    $result = $apiInstance->getFileObjects($_limit, $_skip, $id, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileObjectsApi->getFileObjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_limit** | **int**| Limit the returned total records found | [optional] |
| **_skip** | **int**| Skip the returned records found and return the next batch of records | [optional] |
| **id** | [**string[]**](../Model/string.md)| The unique identifiers of the resources | [optional] |
| **download** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\FileObjectsResponse**](../Model/FileObjectsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileObjectsByQuery()`

```php
getFileObjectsByQuery($id, $body): \OpenAPI\Client\com\ziqni\admin\sdk\model\FileObjectsResponse
```



Retrieve file objects by query

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FileObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources
$body = new \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest(); // \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest | Retrieve file objects inside a repository from Ziqni by unique file object ID's or any other POST body parameters using the POST method

try {
    $result = $apiInstance->getFileObjectsByQuery($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileObjectsApi->getFileObjectsByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| The unique identifiers of the resources | [optional] |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest**](../Model/QueryRequest.md)| Retrieve file objects inside a repository from Ziqni by unique file object ID&#39;s or any other POST body parameters using the POST method | [optional] |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\FileObjectsResponse**](../Model/FileObjectsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveTemplates()`

```php
saveTemplates($parent_folder_path, $repository_id, $template_to_save, $template_name, $tags): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



Create or update file objects and binaries in your Ziqni space

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FileObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_folder_path = 'parent_folder_path_example'; // string | The folder to save these file in.
$repository_id = 'repository_id_example'; // string | 
$template_to_save = 'template_to_save_example'; // string | 
$template_name = 'template_name_example'; // string | 
$tags = 'tags_example'; // string | 

try {
    $result = $apiInstance->saveTemplates($parent_folder_path, $repository_id, $template_to_save, $template_name, $tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileObjectsApi->saveTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parent_folder_path** | **string**| The folder to save these file in. | [optional] |
| **repository_id** | **string**|  | [optional] |
| **template_to_save** | **string**|  | [optional] |
| **template_name** | **string**|  | [optional] |
| **tags** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFileObjects()`

```php
updateFileObjects($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FileObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateFileObjectRequest()); // \OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateFileObjectRequest[] | Update a file object in your Ziqni space.

try {
    $result = $apiInstance->updateFileObjects($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileObjectsApi->updateFileObjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateFileObjectRequest[]**](../Model/UpdateFileObjectRequest.md)| Update a file object in your Ziqni space. | |

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

## `uploadFileObjects()`

```php
uploadFileObjects($parent_folder_path, $files, $repository_id, $tags): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



Create or update file objects and binaries in your Ziqni space

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FileObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$parent_folder_path = 'parent_folder_path_example'; // string | The folder to save these file in.
$files = array("/path/to/file.txt"); // \SplFileObject[] | The files to upload
$repository_id = 'repository_id_example'; // string | 
$tags = 'tags_example'; // string | 

try {
    $result = $apiInstance->uploadFileObjects($parent_folder_path, $files, $repository_id, $tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileObjectsApi->uploadFileObjects: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **parent_folder_path** | **string**| The folder to save these file in. | [optional] |
| **files** | **\SplFileObject[]**| The files to upload | [optional] |
| **repository_id** | **string**|  | [optional] |
| **tags** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
