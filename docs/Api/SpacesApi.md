# OpenAPI\Client\SpacesApi

All URIs are relative to https://api.ziqni.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSpace()**](SpacesApi.md#createSpace) | **POST** /spaces |  |
| [**deleteSpaces()**](SpacesApi.md#deleteSpaces) | **DELETE** /spaces/{spaceName} | NOT AVAILABLE IN CURRENT RELEASE |
| [**getSpaceInfromation()**](SpacesApi.md#getSpaceInfromation) | **GET** /spaces |  |
| [**getSpacesByName()**](SpacesApi.md#getSpacesByName) | **GET** /spaces/{spaceName} |  |
| [**updateSpace()**](SpacesApi.md#updateSpace) | **PUT** /spaces |  |


## `createSpace()`

```php
createSpace($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Create a new Space for the user in the Ziqni

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateSpaceRequest()); // \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateSpaceRequest[]

try {
    $result = $apiInstance->createSpace($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->createSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\CreateSpaceRequest[]**](../Model/CreateSpaceRequest.md)|  | |

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

## `deleteSpaces()`

```php
deleteSpaces($space_name): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```

NOT AVAILABLE IN CURRENT RELEASE

Delete the Space for the given Space Name provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$space_name = 'space_name_example'; // string | This is the space name which will be deleted

try {
    $result = $apiInstance->deleteSpaces($space_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->deleteSpaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **space_name** | **string**| This is the space name which will be deleted | |

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

## `getSpaceInfromation()`

```php
getSpaceInfromation($_limit, $_skip): \OpenAPI\Client\com.ziqni.admin.sdk.model\SpaceResponse
```



Returns a list of Spaces for the current session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_limit = 56; // int | Limit the returned total records found
$_skip = 56; // int | Skip the returned records found and return the next batch of records

try {
    $result = $apiInstance->getSpaceInfromation($_limit, $_skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->getSpaceInfromation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **_limit** | **int**| Limit the returned total records found | [optional] |
| **_skip** | **int**| Skip the returned records found and return the next batch of records | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\SpaceResponse**](../Model/SpaceResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSpacesByName()`

```php
getSpacesByName($space_name, $_limit, $_skip): \OpenAPI\Client\com.ziqni.admin.sdk.model\SpaceResponse
```



Return a list of sub-spaces for the given Space Name provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$space_name = 'space_name_example'; // string | This is the space name which is linked to the account
$_limit = 56; // int | Limit the returned total records found
$_skip = 56; // int | Skip the returned records found and return the next batch of records

try {
    $result = $apiInstance->getSpacesByName($space_name, $_limit, $_skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->getSpacesByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **space_name** | **string**| This is the space name which is linked to the account | |
| **_limit** | **int**| Limit the returned total records found | [optional] |
| **_skip** | **int**| Skip the returned records found and return the next batch of records | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\SpaceResponse**](../Model/SpaceResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSpace()`

```php
updateSpace($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Update a  Space for the user in the Ziqni

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SpacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateSpaceRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateSpaceRequest | Create a Space for the user in the Ziqni

try {
    $result = $apiInstance->updateSpace($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpacesApi->updateSpace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateSpaceRequest**](../Model/UpdateSpaceRequest.md)| Create a Space for the user in the Ziqni | |

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
