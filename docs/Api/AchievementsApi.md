# OpenAPI\Client\AchievementsApi

All URIs are relative to https://api.ziqni.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAchievements()**](AchievementsApi.md#createAchievements) | **POST** /achievements | Create Achievements |
| [**deleteAchievements()**](AchievementsApi.md#deleteAchievements) | **DELETE** /achievements | Delete Achievements |
| [**deleteAchievementsByQuery()**](AchievementsApi.md#deleteAchievementsByQuery) | **POST** /achievements/delete |  |
| [**getAchievementToClone()**](AchievementsApi.md#getAchievementToClone) | **GET** /achievements/{id}/clone |  |
| [**getAchievements()**](AchievementsApi.md#getAchievements) | **GET** /achievements | Get Achievements |
| [**getAchievementsByQuery()**](AchievementsApi.md#getAchievementsByQuery) | **POST** /achievements/query |  |
| [**getAntecendentsForAchievement()**](AchievementsApi.md#getAntecendentsForAchievement) | **GET** /achievements/{id}/antecedents | NOT AVAILABLE IN CURRENT RELEASE |
| [**getIssuedAchievementsCountById()**](AchievementsApi.md#getIssuedAchievementsCountById) | **GET** /achievements/{id}/issued |  |
| [**getMembersAchievementsDetails()**](AchievementsApi.md#getMembersAchievementsDetails) | **GET** /achievements/{id}/members |  |
| [**updateAchievements()**](AchievementsApi.md#updateAchievements) | **PUT** /achievements | Update Achievements |
| [**updateAchievementsLiveStatus()**](AchievementsApi.md#updateAchievementsLiveStatus) | **PUT** /achievements/state |  |


## `createAchievements()`

```php
createAchievements($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```

Create Achievements

Create Achievements in the Ziqni database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AchievementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateAchievementRequest()); // \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateAchievementRequest[] | Create Achievements in the Ziqni database

try {
    $result = $apiInstance->createAchievements($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AchievementsApi->createAchievements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\CreateAchievementRequest[]**](../Model/CreateAchievementRequest.md)| Create Achievements in the Ziqni database | |

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

## `deleteAchievements()`

```php
deleteAchievements($id): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```

Delete Achievements

Delete Achievements for a given identifier specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AchievementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources

try {
    $result = $apiInstance->deleteAchievements($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AchievementsApi->deleteAchievements: ', $e->getMessage(), PHP_EOL;
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

## `deleteAchievementsByQuery()`

```php
deleteAchievementsByQuery($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Delete Achievements from Ziqni database by unique Achievements ID's or any other POST body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AchievementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest | Delete Achievements from Ziqni database by unique Achievements ID's or any other Post body parameters using the POST method

try {
    $result = $apiInstance->deleteAchievementsByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AchievementsApi->deleteAchievementsByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest**](../Model/QueryRequest.md)| Delete Achievements from Ziqni database by unique Achievements ID&#39;s or any other Post body parameters using the POST method | [optional] |

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

## `getAchievementToClone()`

```php
getAchievementToClone($id): \OpenAPI\Client\com.ziqni.admin.sdk.model\CloneAchievementResponse
```



Clones an Achievement for the identifier provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AchievementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the resource

try {
    $result = $apiInstance->getAchievementToClone($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AchievementsApi->getAchievementToClone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Unique identifier of the resource | |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\CloneAchievementResponse**](../Model/CloneAchievementResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAchievements()`

```php
getAchievements($id, $_limit, $_skip): \OpenAPI\Client\com.ziqni.admin.sdk.model\AchievementResponse
```

Get Achievements

Returns a list of Achievements. This assumes that achievements have first been uploaded via a POST request or web console

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AchievementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources
$_limit = 56; // int | Limit the returned total records found
$_skip = 56; // int | Skip the returned records found and return the next batch of records

try {
    $result = $apiInstance->getAchievements($id, $_limit, $_skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AchievementsApi->getAchievements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| The unique identifiers of the resources | [optional] |
| **_limit** | **int**| Limit the returned total records found | [optional] |
| **_skip** | **int**| Skip the returned records found and return the next batch of records | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\AchievementResponse**](../Model/AchievementResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAchievementsByQuery()`

```php
getAchievementsByQuery($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\AchievementResponse
```



Retrieve Achievements from Ziqni database by unique Achievements ID's or any other POST body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AchievementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest | Retrieve Achievements from Ziqni database by unique Achievements ID's or any other Post body parameters using the POST method

try {
    $result = $apiInstance->getAchievementsByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AchievementsApi->getAchievementsByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest**](../Model/QueryRequest.md)| Retrieve Achievements from Ziqni database by unique Achievements ID&#39;s or any other Post body parameters using the POST method | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\AchievementResponse**](../Model/AchievementResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAntecendentsForAchievement()`

```php
getAntecendentsForAchievement($id, $_limit, $_skip): \OpenAPI\Client\com.ziqni.admin.sdk.model\AchievementResponse
```

NOT AVAILABLE IN CURRENT RELEASE

Receive a list of Antecedent Achievements for the Achievement identified provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AchievementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the resource
$_limit = 56; // int | Limit the returned total records found
$_skip = 56; // int | Skip the returned records found and return the next batch of records

try {
    $result = $apiInstance->getAntecendentsForAchievement($id, $_limit, $_skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AchievementsApi->getAntecendentsForAchievement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Unique identifier of the resource | |
| **_limit** | **int**| Limit the returned total records found | [optional] |
| **_skip** | **int**| Skip the returned records found and return the next batch of records | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\AchievementResponse**](../Model/AchievementResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIssuedAchievementsCountById()`

```php
getIssuedAchievementsCountById($id): \OpenAPI\Client\com.ziqni.admin.sdk.model\AchievementIssuedResponse
```



Receive a count of Issued Achievements by identifier provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AchievementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the resource

try {
    $result = $apiInstance->getIssuedAchievementsCountById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AchievementsApi->getIssuedAchievementsCountById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Unique identifier of the resource | |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\AchievementIssuedResponse**](../Model/AchievementIssuedResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMembersAchievementsDetails()`

```php
getMembersAchievementsDetails($id, $member_id, $_limit, $_skip): \OpenAPI\Client\com.ziqni.admin.sdk.model\MemberAchievementIssuedResponse
```



Receive a list of members that had an Achievement issued for the Achievement identified provided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AchievementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Unique identifier of the resource
$member_id = 'member_id_example'; // string | Id of a member
$_limit = 56; // int | Limit the returned total records found
$_skip = 56; // int | Skip the returned records found and return the next batch of records

try {
    $result = $apiInstance->getMembersAchievementsDetails($id, $member_id, $_limit, $_skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AchievementsApi->getMembersAchievementsDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Unique identifier of the resource | |
| **member_id** | **string**| Id of a member | [optional] |
| **_limit** | **int**| Limit the returned total records found | [optional] |
| **_skip** | **int**| Skip the returned records found and return the next batch of records | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\MemberAchievementIssuedResponse**](../Model/MemberAchievementIssuedResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAchievements()`

```php
updateAchievements($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```

Update Achievements

Update existing Achievements in the Ziqni database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AchievementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateAchievementRequest()); // \OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateAchievementRequest[] | Update Achievements in the Ziqni database. * An Achievement Id must exist in the Ziqni database for update

try {
    $result = $apiInstance->updateAchievements($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AchievementsApi->updateAchievements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateAchievementRequest[]**](../Model/UpdateAchievementRequest.md)| Update Achievements in the Ziqni database. * An Achievement Id must exist in the Ziqni database for update | |

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

## `updateAchievementsLiveStatus()`

```php
updateAchievementsLiveStatus($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Manage the state of achievement - Draft, Live, Archived

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AchievementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com.ziqni.admin.sdk.model\AchievementLiveStatusRequest()); // \OpenAPI\Client\com.ziqni.admin.sdk.model\AchievementLiveStatusRequest[] | Updates the state of the Achievement

try {
    $result = $apiInstance->updateAchievementsLiveStatus($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AchievementsApi->updateAchievementsLiveStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\AchievementLiveStatusRequest[]**](../Model/AchievementLiveStatusRequest.md)| Updates the state of the Achievement | [optional] |

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
