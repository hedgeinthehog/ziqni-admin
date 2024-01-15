# OpenAPI\Client\MemberMessagesApi

All URIs are relative to https://api.ziqni.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMemberMessages()**](MemberMessagesApi.md#createMemberMessages) | **POST** /member-messages |  |
| [**deleteMemberMessages()**](MemberMessagesApi.md#deleteMemberMessages) | **DELETE** /member-messages |  |
| [**deleteMemberMessagesByQuery()**](MemberMessagesApi.md#deleteMemberMessagesByQuery) | **POST** /member-messages/delete |  |
| [**getMemberMessages()**](MemberMessagesApi.md#getMemberMessages) | **GET** /member-messages |  |
| [**getMemberMessagesByQuery()**](MemberMessagesApi.md#getMemberMessagesByQuery) | **POST** /member-messages/query |  |


## `createMemberMessages()`

```php
createMemberMessages($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



Create Member Messages in the Ziqni database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MemberMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com\ziqni\admin\sdk\model\CreateMemberMessageRequest()); // \OpenAPI\Client\com\ziqni\admin\sdk\model\CreateMemberMessageRequest[] | Create Messages in the Ziqni database

try {
    $result = $apiInstance->createMemberMessages($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemberMessagesApi->createMemberMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\CreateMemberMessageRequest[]**](../Model/CreateMemberMessageRequest.md)| Create Messages in the Ziqni database | |

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

## `deleteMemberMessages()`

```php
deleteMemberMessages($id): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



Delete Member Messages for a given identifier specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MemberMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources

try {
    $result = $apiInstance->deleteMemberMessages($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemberMessagesApi->deleteMemberMessages: ', $e->getMessage(), PHP_EOL;
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

## `deleteMemberMessagesByQuery()`

```php
deleteMemberMessagesByQuery($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



Delete Member Messages by query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MemberMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest(); // \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest | Delete Member Messages from Ziqni database by unique message ID's or any other POST body parameters using the POST method

try {
    $result = $apiInstance->deleteMemberMessagesByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemberMessagesApi->deleteMemberMessagesByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest**](../Model/QueryRequest.md)| Delete Member Messages from Ziqni database by unique message ID&#39;s or any other POST body parameters using the POST method | [optional] |

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

## `getMemberMessages()`

```php
getMemberMessages($id, $_limit, $_skip): \OpenAPI\Client\com\ziqni\admin\sdk\model\MemberMessageResponse
```



Returns a list of Member Messages. This assumes that Messages have first been uploaded via a POST request or web console

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MemberMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources
$_limit = 56; // int | Limit the returned total records found
$_skip = 56; // int | Skip the returned records found and return the next batch of records

try {
    $result = $apiInstance->getMemberMessages($id, $_limit, $_skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemberMessagesApi->getMemberMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| The unique identifiers of the resources | [optional] |
| **_limit** | **int**| Limit the returned total records found | [optional] |
| **_skip** | **int**| Skip the returned records found and return the next batch of records | [optional] |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\MemberMessageResponse**](../Model/MemberMessageResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMemberMessagesByQuery()`

```php
getMemberMessagesByQuery($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\MemberMessageResponse
```



Retrieve Member Messages from Ziqni database by unique message ID's or any other POST body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\MemberMessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest(); // \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest | Retrieve Member Messages from Ziqni database by unique message ID's or any other POST body parameters using the POST method

try {
    $result = $apiInstance->getMemberMessagesByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemberMessagesApi->getMemberMessagesByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest**](../Model/QueryRequest.md)| Retrieve Member Messages from Ziqni database by unique message ID&#39;s or any other POST body parameters using the POST method | [optional] |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\MemberMessageResponse**](../Model/MemberMessageResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
