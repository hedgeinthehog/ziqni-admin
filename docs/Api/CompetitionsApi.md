# OpenAPI\Client\CompetitionsApi

All URIs are relative to https://api.ziqni.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCompetitions()**](CompetitionsApi.md#createCompetitions) | **POST** /competitions |  |
| [**createSimpleCompetitions()**](CompetitionsApi.md#createSimpleCompetitions) | **POST** /competitions/simple |  |
| [**getCompetitions()**](CompetitionsApi.md#getCompetitions) | **GET** /competitions |  |
| [**getCompetitionsByQuery()**](CompetitionsApi.md#getCompetitionsByQuery) | **POST** /competitions/query |  |
| [**getCompetitionsToClone()**](CompetitionsApi.md#getCompetitionsToClone) | **GET** /competitions/{id}/clone | Get Competition To Clone |
| [**getLeaderboardByCompetitionId()**](CompetitionsApi.md#getLeaderboardByCompetitionId) | **GET** /competitions/{id}/leaderboard |  |
| [**updateCompetitions()**](CompetitionsApi.md#updateCompetitions) | **PUT** /competitions |  |
| [**updateCompetitionsState()**](CompetitionsApi.md#updateCompetitionsState) | **PUT** /competitions/state |  |


## `createCompetitions()`

```php
createCompetitions($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Create a new Competition in the Ziqni database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CompetitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateCompetitionRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateCompetitionRequest | Create a Competition in the Ziqni database

try {
    $result = $apiInstance->createCompetitions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompetitionsApi->createCompetitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\CreateCompetitionRequest**](../Model/CreateCompetitionRequest.md)| Create a Competition in the Ziqni database | |

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

## `createSimpleCompetitions()`

```php
createSimpleCompetitions($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Create a Simple Competition in the Ziqni database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CompetitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateSimpleCompetitionRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateSimpleCompetitionRequest | Create a Competition in the Ziqni database

try {
    $result = $apiInstance->createSimpleCompetitions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompetitionsApi->createSimpleCompetitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\CreateSimpleCompetitionRequest**](../Model/CreateSimpleCompetitionRequest.md)| Create a Competition in the Ziqni database | |

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

## `getCompetitions()`

```php
getCompetitions($id, $_limit, $_skip): \OpenAPI\Client\com.ziqni.admin.sdk.model\CompetitionResponse
```



Returns a list of Competitions. This assumes that competitions have first been uploaded via a POST request or web console

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CompetitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources
$_limit = 56; // int | Limit the returned total records found
$_skip = 56; // int | Skip the returned records found and return the next batch of records

try {
    $result = $apiInstance->getCompetitions($id, $_limit, $_skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompetitionsApi->getCompetitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| The unique identifiers of the resources | [optional] |
| **_limit** | **int**| Limit the returned total records found | [optional] |
| **_skip** | **int**| Skip the returned records found and return the next batch of records | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\CompetitionResponse**](../Model/CompetitionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompetitionsByQuery()`

```php
getCompetitionsByQuery($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\CompetitionResponse
```



Retrieve Competitions from Ziqni database by unique Competition ID's or any other POST body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CompetitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest | Retrieve Competitions from Ziqni database by unique Competition ID's or any other POST body parameters using the POST method

try {
    $result = $apiInstance->getCompetitionsByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompetitionsApi->getCompetitionsByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest**](../Model/QueryRequest.md)| Retrieve Competitions from Ziqni database by unique Competition ID&#39;s or any other POST body parameters using the POST method | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\CompetitionResponse**](../Model/CompetitionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompetitionsToClone()`

```php
getCompetitionsToClone($id): \OpenAPI\Client\com.ziqni.admin.sdk.model\CloneCompetitionResponse
```

Get Competition To Clone

Clones a Competition for the identifier provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CompetitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the resource

try {
    $result = $apiInstance->getCompetitionsToClone($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompetitionsApi->getCompetitionsToClone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Unique identifier of the resource | |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\CloneCompetitionResponse**](../Model/CloneCompetitionResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLeaderboardByCompetitionId()`

```php
getLeaderboardByCompetitionId($id, $_limit, $_skip): \OpenAPI\Client\com.ziqni.admin.sdk.model\CompetitionLeaderboardResponse
```



Use /leadeboard instead. Returns a list of Leaderborads for the Competition id provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CompetitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the resource
$_limit = 56; // int | Limit the returned total records found
$_skip = 56; // int | Skip the returned records found and return the next batch of records

try {
    $result = $apiInstance->getLeaderboardByCompetitionId($id, $_limit, $_skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompetitionsApi->getLeaderboardByCompetitionId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Unique identifier of the resource | |
| **_limit** | **int**| Limit the returned total records found | [optional] |
| **_skip** | **int**| Skip the returned records found and return the next batch of records | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\CompetitionLeaderboardResponse**](../Model/CompetitionLeaderboardResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCompetitions()`

```php
updateCompetitions($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Update an existing Competition in the Ziqni database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CompetitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateCompetitionRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateCompetitionRequest | Update a Competition in the Ziqni database. * A Competitions Id must exist in the Ziqni database for update

try {
    $result = $apiInstance->updateCompetitions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompetitionsApi->updateCompetitions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateCompetitionRequest**](../Model/UpdateCompetitionRequest.md)| Update a Competition in the Ziqni database. * A Competitions Id must exist in the Ziqni database for update | |

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

## `updateCompetitionsState()`

```php
updateCompetitionsState($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Manages the Competitions state

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CompetitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateCompetitionStatusRequest()); // \OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateCompetitionStatusRequest[] | Updates the state of the Competition

try {
    $result = $apiInstance->updateCompetitionsState($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompetitionsApi->updateCompetitionsState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateCompetitionStatusRequest[]**](../Model/UpdateCompetitionStatusRequest.md)| Updates the state of the Competition | [optional] |

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
