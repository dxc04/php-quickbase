# Rossity\PhpQuickbase\AuthApi

All URIs are relative to https://api.quickbase.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTempTokenDBID()**](AuthApi.md#getTempTokenDBID) | **GET** /auth/temporary/{dbid} | Get a temporary token for a dbid


## `getTempTokenDBID()`

```php
getTempTokenDBID($dbid, $qBRealmHostname, $userAgent, $qBAppToken): map[string,object]
```

Get a temporary token for a dbid

Use this endpoint to get a temporary authorization token, scoped to either an app or a table. You can then use this token to make other API calls (see [authorization](../auth)).  This token expires in 5 minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Rossity\PhpQuickbase\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dbid = 'dbid_example'; // string | The unique identifier of an app or table.
$qBRealmHostname = 'qBRealmHostname_example'; // string | Your Quick Base domain, for example demo.quickbase.com
$userAgent = 'userAgent_example'; // string | This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities.
$qBAppToken = 'qBAppToken_example'; // string | Your Quick Base app token

try {
    $result = $apiInstance->getTempTokenDBID($dbid, $qBRealmHostname, $userAgent, $qBAppToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getTempTokenDBID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dbid** | **string**| The unique identifier of an app or table. |
 **qBRealmHostname** | **string**| Your Quick Base domain, for example demo.quickbase.com |
 **userAgent** | **string**| This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities. | [optional]
 **qBAppToken** | **string**| Your Quick Base app token | [optional]

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
