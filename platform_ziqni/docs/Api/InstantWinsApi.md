# OpenAPI\Client\InstantWinsApi

All URIs are relative to https://api.ziqni.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createInstantWins()**](InstantWinsApi.md#createInstantWins) | **POST** /instant-wins | Create instant wins |
| [**deleteInstantWins()**](InstantWinsApi.md#deleteInstantWins) | **DELETE** /instant-wins | Delete instant wins |
| [**deleteInstantWinsByQuery()**](InstantWinsApi.md#deleteInstantWinsByQuery) | **POST** /instant-wins/delete | Delete instant-wins by query |
| [**getInstantWins()**](InstantWinsApi.md#getInstantWins) | **GET** /instant-wins | Get instant wins |
| [**getInstantWinsByQuery()**](InstantWinsApi.md#getInstantWinsByQuery) | **POST** /instant-wins/query | Get instant wins by query |
| [**updateInstantWins()**](InstantWinsApi.md#updateInstantWins) | **PUT** /instant-wins | Update instant wins |


## `createInstantWins()`

```php
createInstantWins($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```

Create instant wins

Create new Instant win in the Ziqni database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InstantWinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com\ziqni\admin\sdk\model\CreateInstantWinRequest()); // \OpenAPI\Client\com\ziqni\admin\sdk\model\CreateInstantWinRequest[] | Create Instant wins in the Ziqni database. An array can contain a maximum of 10,000 instant wins in one request

try {
    $result = $apiInstance->createInstantWins($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstantWinsApi->createInstantWins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\CreateInstantWinRequest[]**](../Model/CreateInstantWinRequest.md)| Create Instant wins in the Ziqni database. An array can contain a maximum of 10,000 instant wins in one request | |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `file/csv`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInstantWins()`

```php
deleteInstantWins($id): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```

Delete instant wins

Delete Instant win for a given identifier specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InstantWinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources

try {
    $result = $apiInstance->deleteInstantWins($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstantWinsApi->deleteInstantWins: ', $e->getMessage(), PHP_EOL;
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

## `deleteInstantWinsByQuery()`

```php
deleteInstantWinsByQuery($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```

Delete instant-wins by query

Delete Instant wins from Ziqni database by unique Instant win ID's or any other POST body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InstantWinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = {"must":[{"queryField":"some text","queryValues":["some text","some text"]},{"queryField":"some text","queryValues":["some text","some text"]}],"mustNot":[{"queryField":"some text","queryValues":["some text","some text"]},{"queryField":"some text","queryValues":["some text","some text"]}],"should":[{"queryField":"some text","queryValues":["some text","some text"]},{"queryField":"some text","queryValues":["some text","some text"]}],"gte":[{"queryField":"some text","queryValue":"some text"},{"queryField":"some text","queryValue":"some text"}],"gt":[{"queryField":"some text","queryValue":"some text"},{"queryField":"some text","queryValue":"some text"}],"lte":[{"queryField":"some text","queryValue":"some text"},{"queryField":"some text","queryValue":"some text"}],"lt":[{"queryField":"some text","queryValue":"some text"},{"queryField":"some text","queryValue":"some text"}],"range":[{"queryField":"some text","gt":"some text","lt":"some text","constraints":["some text","some text"]},{"queryField":"some text","gt":"some text","lt":"some text","constraints":["some text","some text"]}],"sortBy":[{"queryField":"some text","order":"Desc"},{"queryField":"some text","order":"Desc"}],"multiFields":[{"queryFields":["some text","some text"],"queryValue":"some text"},{"queryFields":["some text","some text"],"queryValue":"some text"}],"includeFields":["some text","some text"],"hasValue":["some text","some text"],"hasNoValue":["some text","some text"],"shouldMatch":87,"skip":97,"limit":5,"constraints":["some text","some text"]}; // \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest | Delete Instant Wins from Ziqni database by unique Instant win ID's or any other POST body parameters using the POST method

try {
    $result = $apiInstance->deleteInstantWinsByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstantWinsApi->deleteInstantWinsByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest**](../Model/QueryRequest.md)| Delete Instant Wins from Ziqni database by unique Instant win ID&#39;s or any other POST body parameters using the POST method | [optional] |

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

## `getInstantWins()`

```php
getInstantWins($id, $_limit, $_skip): \OpenAPI\Client\com\ziqni\admin\sdk\model\InstantWinResponse
```

Get instant wins

Returns a list of Instant wins. This assumes that instant wins have first been uploaded via a POST request or web console

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InstantWinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources
$_limit = 56; // int | Limit the returned total records found
$_skip = 56; // int | Skip the returned records found and return the next batch of records

try {
    $result = $apiInstance->getInstantWins($id, $_limit, $_skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstantWinsApi->getInstantWins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| The unique identifiers of the resources | [optional] |
| **_limit** | **int**| Limit the returned total records found | [optional] |
| **_skip** | **int**| Skip the returned records found and return the next batch of records | [optional] |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\InstantWinResponse**](../Model/InstantWinResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInstantWinsByQuery()`

```php
getInstantWinsByQuery($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\InstantWinResponse
```

Get instant wins by query

Retrieve Instant wins from Ziqni database by unique Instant win ID's or any other POST body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InstantWinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = {"must":[{"queryField":"some text","queryValues":["some text","some text"]},{"queryField":"some text","queryValues":["some text","some text"]}],"mustNot":[{"queryField":"some text","queryValues":["some text","some text"]},{"queryField":"some text","queryValues":["some text","some text"]}],"should":[{"queryField":"some text","queryValues":["some text","some text"]},{"queryField":"some text","queryValues":["some text","some text"]}],"gte":[{"queryField":"some text","queryValue":"some text"},{"queryField":"some text","queryValue":"some text"}],"gt":[{"queryField":"some text","queryValue":"some text"},{"queryField":"some text","queryValue":"some text"}],"lte":[{"queryField":"some text","queryValue":"some text"},{"queryField":"some text","queryValue":"some text"}],"lt":[{"queryField":"some text","queryValue":"some text"},{"queryField":"some text","queryValue":"some text"}],"range":[{"queryField":"some text","gt":"some text","lt":"some text","constraints":["some text","some text"]},{"queryField":"some text","gt":"some text","lt":"some text","constraints":["some text","some text"]}],"sortBy":[{"queryField":"some text","order":"Asc"},{"queryField":"some text","order":"Desc"}],"multiFields":[{"queryFields":["some text","some text"],"queryValue":"some text"},{"queryFields":["some text","some text"],"queryValue":"some text"}],"includeFields":["some text","some text"],"hasValue":["some text","some text"],"hasNoValue":["some text","some text"],"shouldMatch":76,"skip":85,"limit":86,"constraints":["some text","some text"]}; // \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest | Retrieve Instant wins from Ziqni database by unique Instant win ID's or any other POST body parameters using the POST method

try {
    $result = $apiInstance->getInstantWinsByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstantWinsApi->getInstantWinsByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest**](../Model/QueryRequest.md)| Retrieve Instant wins from Ziqni database by unique Instant win ID&#39;s or any other POST body parameters using the POST method | [optional] |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\InstantWinResponse**](../Model/InstantWinResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInstantWins()`

```php
updateInstantWins($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```

Update instant wins

Update existing Instant wins in the Ziqni database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InstantWinsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateInstantWinRequest()); // \OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateInstantWinRequest[] | Update a Instant win or multiple Instant wins in the Ziqni database.

try {
    $result = $apiInstance->updateInstantWins($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstantWinsApi->updateInstantWins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateInstantWinRequest[]**](../Model/UpdateInstantWinRequest.md)| Update a Instant win or multiple Instant wins in the Ziqni database. | |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `file/csv`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
