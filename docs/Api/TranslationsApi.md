# OpenAPI\Client\TranslationsApi

All URIs are relative to https://api.ziqni.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTranslations()**](TranslationsApi.md#createTranslations) | **POST** /translations | creating a translation |
| [**deleteTranslations()**](TranslationsApi.md#deleteTranslations) | **DELETE** /translations |  |
| [**deleteTranslationsByQuery()**](TranslationsApi.md#deleteTranslationsByQuery) | **POST** /translations/delete | Delete translations by query |
| [**getTranslations()**](TranslationsApi.md#getTranslations) | **GET** /translations |  |
| [**getTranslationsByEntityId()**](TranslationsApi.md#getTranslationsByEntityId) | **GET** /translations/find-by-entity-id |  |
| [**getTranslationsByQuery()**](TranslationsApi.md#getTranslationsByQuery) | **POST** /translations/query |  |
| [**updateTranslations()**](TranslationsApi.md#updateTranslations) | **PUT** /translations |  |


## `createTranslations()`

```php
createTranslations($create_translation_request): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```

creating a translation

Create a new Translation in the Ziqni system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_translation_request = array(new \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateTranslationRequest()); // \OpenAPI\Client\com.ziqni.admin.sdk.model\CreateTranslationRequest[]

try {
    $result = $apiInstance->createTranslations($create_translation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->createTranslations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_translation_request** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\CreateTranslationRequest[]**](../Model/CreateTranslationRequest.md)|  | |

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

## `deleteTranslations()`

```php
deleteTranslations($id): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Delete the Translations for a given identifier specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources

try {
    $result = $apiInstance->deleteTranslations($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->deleteTranslations: ', $e->getMessage(), PHP_EOL;
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

## `deleteTranslationsByQuery()`

```php
deleteTranslationsByQuery($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```

Delete translations by query

Delete a Translation or a list of Translations from Ziqni by unique Translation ID's or any other POST body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest | Delete a Translation or a list of Translations from Ziqni by unique Translation ID's or any other POST body parameters using the POST method

try {
    $result = $apiInstance->deleteTranslationsByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->deleteTranslationsByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest**](../Model/QueryRequest.md)| Delete a Translation or a list of Translations from Ziqni by unique Translation ID&#39;s or any other POST body parameters using the POST method | [optional] |

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

## `getTranslations()`

```php
getTranslations($id, $_limit, $_skip): \OpenAPI\Client\com.ziqni.admin.sdk.model\TranslationResponse
```



Returns a list of translations. This assumes that rules have first been created during achievement, competition or contest setup. The id is the ID of the entity the translations describe

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | The unique identifiers of the resources
$_limit = 56; // int | Limit the returned total records found
$_skip = 56; // int | Skip the returned records found and return the next batch of records

try {
    $result = $apiInstance->getTranslations($id, $_limit, $_skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->getTranslations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| The unique identifiers of the resources | [optional] |
| **_limit** | **int**| Limit the returned total records found | [optional] |
| **_skip** | **int**| Skip the returned records found and return the next batch of records | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\TranslationResponse**](../Model/TranslationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTranslationsByEntityId()`

```php
getTranslationsByEntityId($ref_ids, $_limit, $_skip): \OpenAPI\Client\com.ziqni.admin.sdk.model\TranslationResponse
```



Returns a list of Translations. This assumes that translations have first been uploaded via a POST request or web console

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ref_ids = array('ref_ids_example'); // string[] | The reference ids  of the resources
$_limit = 56; // int | Limit the returned total records found
$_skip = 56; // int | Skip the returned records found and return the next batch of records

try {
    $result = $apiInstance->getTranslationsByEntityId($ref_ids, $_limit, $_skip);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->getTranslationsByEntityId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ref_ids** | [**string[]**](../Model/string.md)| The reference ids  of the resources | [optional] |
| **_limit** | **int**| Limit the returned total records found | [optional] |
| **_skip** | **int**| Skip the returned records found and return the next batch of records | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\TranslationResponse**](../Model/TranslationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTranslationsByQuery()`

```php
getTranslationsByQuery($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\TranslationResponse
```



Retrieve a Translation or a list of Translations from Ziqni by unique Translation ID's or any other POST body parameters using the POST method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest(); // \OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest | Retrieve a Translation or a list of Translations from Ziqni by unique Translation ID's or any other Post body parameters using the POST method

try {
    $result = $apiInstance->getTranslationsByQuery($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->getTranslationsByQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\QueryRequest**](../Model/QueryRequest.md)| Retrieve a Translation or a list of Translations from Ziqni by unique Translation ID&#39;s or any other Post body parameters using the POST method | [optional] |

### Return type

[**\OpenAPI\Client\com.ziqni.admin.sdk.model\TranslationResponse**](../Model/TranslationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTranslations()`

```php
updateTranslations($body): \OpenAPI\Client\com.ziqni.admin.sdk.model\ApiResponse
```



Update existing translations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateTranslationRequest()); // \OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateTranslationRequest[] | Update Translations.

try {
    $result = $apiInstance->updateTranslations($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslationsApi->updateTranslations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\com.ziqni.admin.sdk.model\UpdateTranslationRequest[]**](../Model/UpdateTranslationRequest.md)| Update Translations. | |

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
