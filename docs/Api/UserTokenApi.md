# Rossity\PhpQuickbase\UserTokenApi

All URIs are relative to https://api.quickbase.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cloneUserToken()**](UserTokenApi.md#cloneUserToken) | **POST** /usertoken/clone | Clone a user token
[**deactivateUserToken()**](UserTokenApi.md#deactivateUserToken) | **POST** /usertoken/deactivate | Deactivate a user token
[**deleteUserToken()**](UserTokenApi.md#deleteUserToken) | **DELETE** /usertoken | Delete a user token


## `cloneUserToken()`

```php
cloneUserToken($qBRealmHostname, $authorization, $userAgent, $generated): map[string,object]
```

Clone a user token

Clones the authenticated user token. All applications associated with that token are automatically associated with the new token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Rossity\PhpQuickbase\Api\UserTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$qBRealmHostname = 'qBRealmHostname_example'; // string | Your Quick Base domain, for example demo.quickbase.com
$authorization = 'authorization_example'; // string | The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth).
$userAgent = 'userAgent_example'; // string | Information is entered by the person or utility invoking the API. Choose between the default in your toolkit or custom create it. Being as descriptive as possible will help in identification and troubleshooting.
$generated = new \Rossity\PhpQuickbase\Model\InlineObject14(); // \Rossity\PhpQuickbase\Model\InlineObject14

try {
    $result = $apiInstance->cloneUserToken($qBRealmHostname, $authorization, $userAgent, $generated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserTokenApi->cloneUserToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qBRealmHostname** | **string**| Your Quick Base domain, for example demo.quickbase.com |
 **authorization** | **string**| The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth). |
 **userAgent** | **string**| Information is entered by the person or utility invoking the API. Choose between the default in your toolkit or custom create it. Being as descriptive as possible will help in identification and troubleshooting. | [optional]
 **generated** | [**\Rossity\PhpQuickbase\Model\InlineObject14**](../Model/InlineObject14.md)|  | [optional]

### Return type

**map[string,object]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deactivateUserToken()`

```php
deactivateUserToken($qBRealmHostname, $authorization, $userAgent): map[string,object]
```

Deactivate a user token

Deactivates the authenticated user token. Once this is done, the user token must be reactivated in the user interface.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Rossity\PhpQuickbase\Api\UserTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$qBRealmHostname = 'qBRealmHostname_example'; // string | Your Quick Base domain, for example demo.quickbase.com
$authorization = 'authorization_example'; // string | The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth).
$userAgent = 'userAgent_example'; // string | Information is entered by the person or utility invoking the API. Choose between the default in your toolkit or custom create it. Being as descriptive as possible will help in identification and troubleshooting.

try {
    $result = $apiInstance->deactivateUserToken($qBRealmHostname, $authorization, $userAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserTokenApi->deactivateUserToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qBRealmHostname** | **string**| Your Quick Base domain, for example demo.quickbase.com |
 **authorization** | **string**| The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth). |
 **userAgent** | **string**| Information is entered by the person or utility invoking the API. Choose between the default in your toolkit or custom create it. Being as descriptive as possible will help in identification and troubleshooting. | [optional]

### Return type

**map[string,object]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUserToken()`

```php
deleteUserToken($qBRealmHostname, $authorization, $userAgent): map[string,object]
```

Delete a user token

Deletes the authenticated user token. This is not reversible.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Rossity\PhpQuickbase\Api\UserTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$qBRealmHostname = 'qBRealmHostname_example'; // string | Your Quick Base domain, for example demo.quickbase.com
$authorization = 'authorization_example'; // string | The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth).
$userAgent = 'userAgent_example'; // string | Information is entered by the person or utility invoking the API. Choose between the default in your toolkit or custom create it. Being as descriptive as possible will help in identification and troubleshooting.

try {
    $result = $apiInstance->deleteUserToken($qBRealmHostname, $authorization, $userAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserTokenApi->deleteUserToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qBRealmHostname** | **string**| Your Quick Base domain, for example demo.quickbase.com |
 **authorization** | **string**| The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth). |
 **userAgent** | **string**| Information is entered by the person or utility invoking the API. Choose between the default in your toolkit or custom create it. Being as descriptive as possible will help in identification and troubleshooting. | [optional]

### Return type

**map[string,object]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
