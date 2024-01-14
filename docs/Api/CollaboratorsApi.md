# OpenAPI\Client\CollaboratorsApi

All URIs are relative to https://api.ziqni.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCollaborators()**](CollaboratorsApi.md#createCollaborators) | **POST** /collaborators |  |
| [**deleteCollaborators()**](CollaboratorsApi.md#deleteCollaborators) | **DELETE** /collaborators |  |
| [**getAvailableRolesForCollaborators()**](CollaboratorsApi.md#getAvailableRolesForCollaborators) | **GET** /collaborators/available-roles |  |
| [**getCollaborators()**](CollaboratorsApi.md#getCollaborators) | **GET** /collaborators |  |
| [**updateCollaborators()**](CollaboratorsApi.md#updateCollaborators) | **PUT** /collaborators |  |


## `createCollaborators()`

```php
createCollaborators($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Create a new Collaborator in the Ziqni

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CollaboratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateCollaboratorRequest()); // \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateCollaboratorRequest[] | Create a Collaborator in the Ziqni system

try {
    $result = $apiInstance->createCollaborators($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorsApi->createCollaborators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\CreateCollaboratorRequest[]**](../Model/CreateCollaboratorRequest.md)| Create a Collaborator in the Ziqni system | |

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

## `deleteCollaborators()`

```php
deleteCollaborators($emails): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Returns a list of Collaborators. This assumes that Users have first been uploaded via a POST request or web console

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CollaboratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$emails = array('emails_example'); // string[] | The list of user emails to search by

try {
    $result = $apiInstance->deleteCollaborators($emails);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorsApi->deleteCollaborators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **emails** | [**string[]**](../Model/string.md)| The list of user emails to search by | [optional] |

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

## `getAvailableRolesForCollaborators()`

```php
getAvailableRolesForCollaborators(): \OpenAPI\Client\com.ziqni.admin.sdk.model\CollaboratorRolesResponse
```



Returns a list of Collaborators. This assumes that Users have first been uploaded via a POST request or web console

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CollaboratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAvailableRolesForCollaborators();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorsApi->getAvailableRolesForCollaborators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\CollaboratorRolesResponse**](../Model/CollaboratorRolesResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCollaborators()`

```php
getCollaborators($emails, $_limit, $_skip): \OpenAPI\Client\com.ziqni.admin.sdk.model\CollaboratorResponse
```



Returns a list of Collaborators. This assumes that Users have first been uploaded via a POST request or web console

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CollaboratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$emails = array('emails_example'); // string[] | The list of user emails to search by
$_limit = 56; // int | Limit the returned total records found
$_skip = 56; // int | Skip the returned records found and return the next batch of records

try {
    $result = $apiInstance->getCollaborators($emails, $_limit, $_skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorsApi->getCollaborators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **emails** | [**string[]**](../Model/string.md)| The list of user emails to search by | [optional] |
| **_limit** | **int**| Limit the returned total records found | [optional] |
| **_skip** | **int**| Skip the returned records found and return the next batch of records | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\CollaboratorResponse**](../Model/CollaboratorResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCollaborators()`

```php
updateCollaborators($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Update an existing Collaborator in the Ziqni system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CollaboratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateCollaboratorRequest()); // \OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateCollaboratorRequest[] | Update a Collaborator in the Ziqni system. * Any Put body Parameters that are excluded in the Request body field will be considered as empty and updated with an empty field

try {
    $result = $apiInstance->updateCollaborators($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorsApi->updateCollaborators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateCollaboratorRequest[]**](../Model/UpdateCollaboratorRequest.md)| Update a Collaborator in the Ziqni system. * Any Put body Parameters that are excluded in the Request body field will be considered as empty and updated with an empty field | |

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
