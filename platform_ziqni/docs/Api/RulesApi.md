# OpenAPI\Client\RulesApi

All URIs are relative to https://api.ziqni.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteRulesByQuery()**](RulesApi.md#deleteRulesByQuery) | **POST** /rules/delete |  |
| [**getRuleSchemas()**](RulesApi.md#getRuleSchemas) | **GET** /rules/schema |  |
| [**getRules()**](RulesApi.md#getRules) | **GET** /rules |  |
| [**getRulesByQuery()**](RulesApi.md#getRulesByQuery) | **POST** /rules/query |  |
| [**lookupOperandsRules()**](RulesApi.md#lookupOperandsRules) | **POST** /rules/operand-lookup |  |
| [**updateRules()**](RulesApi.md#updateRules) | **PUT** /rules |  |
| [**validateRules()**](RulesApi.md#validateRules) | **POST** /rules/validate |  |


## `deleteRulesByQuery()`

```php
deleteRulesByQuery($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



Delete Rules from Ziqni database by unique Rules ID's or any other POST body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest(); // \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest | Delete Rules from Ziqni database by unique Rules ID's or any other POST body parameters using the POST method

try {
    $result = $apiInstance->deleteRulesByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->deleteRulesByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest**](../Model/QueryRequest.md)| Delete Rules from Ziqni database by unique Rules ID&#39;s or any other POST body parameters using the POST method | [optional] |

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

## `getRuleSchemas()`

```php
getRuleSchemas($context): \OpenAPI\Client\com\ziqni\admin\sdk\model\Response
```



Returns a list of rules. This assumes that rules have first been created during achievement, competition or contest setup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$context = 'context_example'; // string | The context to retrieve, either achievement, competition or contest

try {
    $result = $apiInstance->getRuleSchemas($context);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->getRuleSchemas: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **context** | **string**| The context to retrieve, either achievement, competition or contest | |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\Response**](../Model/Response.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRules()`

```php
getRules($id, $_limit, $_skip): \OpenAPI\Client\com\ziqni\admin\sdk\model\RuleResponse
```



Returns a list of rules. This assumes that rules have first been created during achievement, competition or contest setup. The id is the ID of the entity the rules describe

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources
$_limit = 56; // int | Limit the returned total records found
$_skip = 56; // int | Skip the returned records found and return the next batch of records

try {
    $result = $apiInstance->getRules($id, $_limit, $_skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->getRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| The unique identifiers of the resources | [optional] |
| **_limit** | **int**| Limit the returned total records found | [optional] |
| **_skip** | **int**| Skip the returned records found and return the next batch of records | [optional] |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\RuleResponse**](../Model/RuleResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRulesByQuery()`

```php
getRulesByQuery($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\RuleResponse
```



Retrieve Rules from Ziqni database by unique Rewards ID's or any other POST body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest(); // \OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest | Retrieve Rules from Ziqni database by unique Rewards ID's or any other Post body parameters using the POST method

try {
    $result = $apiInstance->getRulesByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->getRulesByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\QueryRequest**](../Model/QueryRequest.md)| Retrieve Rules from Ziqni database by unique Rewards ID&#39;s or any other Post body parameters using the POST method | [optional] |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\RuleResponse**](../Model/RuleResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `lookupOperandsRules()`

```php
lookupOperandsRules($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\RuleOperandLookupResponse
```



Search or get rule operand values

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com\ziqni\admin\sdk\model\RuleOperandLookupRequest()); // \OpenAPI\Client\com\ziqni\admin\sdk\model\RuleOperandLookupRequest[] | Search for operand values and human readable text options

try {
    $result = $apiInstance->lookupOperandsRules($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->lookupOperandsRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\RuleOperandLookupRequest[]**](../Model/RuleOperandLookupRequest.md)| Search for operand values and human readable text options | |

### Return type

[**\OpenAPI\Client\com\ziqni\admin\sdk\model\RuleOperandLookupResponse**](../Model/RuleOperandLookupResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRules()`

```php
updateRules($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



Update existing rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateRuleRequest()); // \OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateRuleRequest[] | Update rules for a given Achievement, Competition or Contest identifier.

try {
    $result = $apiInstance->updateRules($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->updateRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateRuleRequest[]**](../Model/UpdateRuleRequest.md)| Update rules for a given Achievement, Competition or Contest identifier. | |

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

## `validateRules()`

```php
validateRules($body): \OpenAPI\Client\com\ziqni\admin\sdk\model\ApiResponse
```



Validate rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateRuleRequest()); // \OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateRuleRequest[] | Validate rules

try {
    $result = $apiInstance->validateRules($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RulesApi->validateRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com\ziqni\admin\sdk\model\UpdateRuleRequest[]**](../Model/UpdateRuleRequest.md)| Validate rules | |

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
