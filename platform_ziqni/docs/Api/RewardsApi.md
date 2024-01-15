# OpenAPI\Client\RewardsApi

All URIs are relative to https://api.ziqni.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createRewards()**](RewardsApi.md#createRewards) | **POST** /rewards |  |
| [**deleteRewards()**](RewardsApi.md#deleteRewards) | **DELETE** /rewards |  |
| [**deleteRewardsByQuery()**](RewardsApi.md#deleteRewardsByQuery) | **POST** /rewards/delete |  |
| [**getRewards()**](RewardsApi.md#getRewards) | **GET** /rewards |  |
| [**getRewardsByQuery()**](RewardsApi.md#getRewardsByQuery) | **POST** /rewards/query |  |
| [**updateRewards()**](RewardsApi.md#updateRewards) | **PUT** /rewards |  |


## `createRewards()`

```php
createRewards($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



Create Rewards in the Ziqni database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com\ziqni\admin\sdk\model\CreateEntityRewardRequest()); // \OpenAPI\Client\com\ziqni\admin\sdk\model\CreateEntityRewardRequest[] | Create Rewards in the Ziqni database

try {
    $result = $apiInstance->createRewards($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->createRewards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\CreateEntityRewardRequest[]**](../Model/CreateEntityRewardRequest.md)| Create Rewards in the Ziqni database | |

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

## `deleteRewards()`

```php
deleteRewards($id): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



Delete Rewards for a given identifier specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources

try {
    $result = $apiInstance->deleteRewards($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->deleteRewards: ', $e->getMessage(), PHP_EOL;
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

## `deleteRewardsByQuery()`

```php
deleteRewardsByQuery($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



Delete Rewards from Ziqni database by unique Rewards ID's or any other POST body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest(); // \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest | Delete Rewards from Ziqni database by unique Rewards ID's or any other POST body parameters using the POST method

try {
    $result = $apiInstance->deleteRewardsByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->deleteRewardsByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest**](../Model/QueryRequest.md)| Delete Rewards from Ziqni database by unique Rewards ID&#39;s or any other POST body parameters using the POST method | [optional] |

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

## `getRewards()`

```php
getRewards($id, $_limit, $_skip): \OpenAPI\Client\com\ziqni\admin\sdk\model\RewardResponse
```



Returns a list of Rewards. This assumes that rewards have first been uploaded via a POST request or web console

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources
$_limit = 56; // int | Limit the returned total records found
$_skip = 56; // int | Skip the returned records found and return the next batch of records

try {
    $result = $apiInstance->getRewards($id, $_limit, $_skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->getRewards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| The unique identifiers of the resources | [optional] |
| **_limit** | **int**| Limit the returned total records found | [optional] |
| **_skip** | **int**| Skip the returned records found and return the next batch of records | [optional] |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\RewardResponse**](../Model/RewardResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRewardsByQuery()`

```php
getRewardsByQuery($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\RewardResponse
```



Retrieve Rewards from Ziqni database by unique Rewards ID's or any other POST body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest(); // \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest | Retrieve Rewards from Ziqni database by unique Rewards ID's or any other Post body parameters using the POST method

try {
    $result = $apiInstance->getRewardsByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->getRewardsByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest**](../Model/QueryRequest.md)| Retrieve Rewards from Ziqni database by unique Rewards ID&#39;s or any other Post body parameters using the POST method | [optional] |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\RewardResponse**](../Model/RewardResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRewards()`

```php
updateRewards($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



Update existing Rewards in the Ziqni database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RewardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateEntityRewardRequest()); // \OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateEntityRewardRequest[] | Update Reward details in the Ziqni database.

try {
    $result = $apiInstance->updateRewards($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardsApi->updateRewards: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateEntityRewardRequest[]**](../Model/UpdateEntityRewardRequest.md)| Update Reward details in the Ziqni database. | |

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
