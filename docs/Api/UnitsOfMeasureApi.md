# OpenAPI\Client\UnitsOfMeasureApi

All URIs are relative to https://api.ziqni.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createUnitsOfMeasure()**](UnitsOfMeasureApi.md#createUnitsOfMeasure) | **POST** /units-of-measure |  |
| [**deleteUnitsOfMeasure()**](UnitsOfMeasureApi.md#deleteUnitsOfMeasure) | **DELETE** /units-of-measure |  |
| [**deleteUnitsOfMeasureByQuery()**](UnitsOfMeasureApi.md#deleteUnitsOfMeasureByQuery) | **POST** /units-of-measure/delete | Delete units of measure by query |
| [**getUnitsOfMeasure()**](UnitsOfMeasureApi.md#getUnitsOfMeasure) | **GET** /units-of-measure |  |
| [**getUnitsOfMeasureByQuery()**](UnitsOfMeasureApi.md#getUnitsOfMeasureByQuery) | **POST** /units-of-measure/query |  |
| [**updateUnitsOfMeasure()**](UnitsOfMeasureApi.md#updateUnitsOfMeasure) | **PUT** /units-of-measure |  |


## `createUnitsOfMeasure()`

```php
createUnitsOfMeasure($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Create a new Unit of measure in the Ziqni database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UnitsOfMeasureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateUnitOfMeasureRequest()); // \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateUnitOfMeasureRequest[] | Create a Unit of measure in the Ziqni database

try {
    $result = $apiInstance->createUnitsOfMeasure($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsOfMeasureApi->createUnitsOfMeasure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\CreateUnitOfMeasureRequest[]**](../Model/CreateUnitOfMeasureRequest.md)| Create a Unit of measure in the Ziqni database | |

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

## `deleteUnitsOfMeasure()`

```php
deleteUnitsOfMeasure($id): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Delete the Unit of measured for a given identifier specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UnitsOfMeasureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources

try {
    $result = $apiInstance->deleteUnitsOfMeasure($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsOfMeasureApi->deleteUnitsOfMeasure: ', $e->getMessage(), PHP_EOL;
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

## `deleteUnitsOfMeasureByQuery()`

```php
deleteUnitsOfMeasureByQuery($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```

Delete units of measure by query

Delete Units of measure from Ziqni database by unique Unit of measure ID's or any other POST body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UnitsOfMeasureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest | Delete Units of measure from Ziqni database by unique Unit of measure ID's or any other POST body parameters using the POST method

try {
    $result = $apiInstance->deleteUnitsOfMeasureByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsOfMeasureApi->deleteUnitsOfMeasureByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest**](../Model/QueryRequest.md)| Delete Units of measure from Ziqni database by unique Unit of measure ID&#39;s or any other POST body parameters using the POST method | [optional] |

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

## `getUnitsOfMeasure()`

```php
getUnitsOfMeasure($id, $_limit, $_skip): \OpenAPI\Client\com.ziqni.admin.sdk.model\UnitOfMeasureResponse
```



Returns a list of Units of measure. This assumes that units of measure have first been uploaded via a POST request or web console

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UnitsOfMeasureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources
$_limit = 56; // int | Limit the returned total records found
$_skip = 56; // int | Skip the returned records found and return the next batch of records

try {
    $result = $apiInstance->getUnitsOfMeasure($id, $_limit, $_skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsOfMeasureApi->getUnitsOfMeasure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| The unique identifiers of the resources | [optional] |
| **_limit** | **int**| Limit the returned total records found | [optional] |
| **_skip** | **int**| Skip the returned records found and return the next batch of records | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\UnitOfMeasureResponse**](../Model/UnitOfMeasureResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUnitsOfMeasureByQuery()`

```php
getUnitsOfMeasureByQuery($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\UnitOfMeasureResponse
```



Retrieve Units of measure from Ziqni database by unique Unit of measure ID's or any other POST body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UnitsOfMeasureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest | Retrieve Units of measure from Ziqni database by unique Unit of measure ID's or any other POST body parameters using the POST method

try {
    $result = $apiInstance->getUnitsOfMeasureByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsOfMeasureApi->getUnitsOfMeasureByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest**](../Model/QueryRequest.md)| Retrieve Units of measure from Ziqni database by unique Unit of measure ID&#39;s or any other POST body parameters using the POST method | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\UnitOfMeasureResponse**](../Model/UnitOfMeasureResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUnitsOfMeasure()`

```php
updateUnitsOfMeasure($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Update an existing Unit of measure in the Ziqni database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UnitsOfMeasureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateUnitOfMeasureRequest()); // \OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateUnitOfMeasureRequest[] | Update a Unit of measure in the Ziqni database.

try {
    $result = $apiInstance->updateUnitsOfMeasure($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitsOfMeasureApi->updateUnitsOfMeasure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateUnitOfMeasureRequest[]**](../Model/UpdateUnitOfMeasureRequest.md)| Update a Unit of measure in the Ziqni database. | |

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
