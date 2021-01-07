# Rossity\PhpQuickbase\RecordsApi

All URIs are relative to https://api.quickbase.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteRecords()**](RecordsApi.md#deleteRecords) | **DELETE** /records | Delete record(s)
[**runQuery()**](RecordsApi.md#runQuery) | **POST** /records/query | Query for data
[**upsert()**](RecordsApi.md#upsert) | **POST** /records | Insert/Update record(s)


## `deleteRecords()`

```php
deleteRecords($qBRealmHostname, $authorization, $userAgent, $generated): map[string,object]
```

Delete record(s)

Deletes record(s) in a table based on a query. Alternatively, all records in the table can be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Rossity\PhpQuickbase\Api\RecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$qBRealmHostname = 'qBRealmHostname_example'; // string | Your Quick Base domain, for example demo.quickbase.com
$authorization = 'authorization_example'; // string | The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth).
$userAgent = 'userAgent_example'; // string | This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities.
$generated = new \Rossity\PhpQuickbase\Model\InlineObject12(); // \Rossity\PhpQuickbase\Model\InlineObject12

try {
    $result = $apiInstance->deleteRecords($qBRealmHostname, $authorization, $userAgent, $generated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsApi->deleteRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qBRealmHostname** | **string**| Your Quick Base domain, for example demo.quickbase.com |
 **authorization** | **string**| The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth). |
 **userAgent** | **string**| This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities. | [optional]
 **generated** | [**\Rossity\PhpQuickbase\Model\InlineObject12**](../Model/InlineObject12.md)|  | [optional]

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

## `runQuery()`

```php
runQuery($qBRealmHostname, $authorization, $userAgent, $generated): map[string,object]
```

Query for data

Pass in a query in the [Quick Base query language](https://help.quickbase.com/api-guide/componentsquery.html). Returns record data with intelligent pagination based on the approximate size of each record. The metadata object will include the necessary information to iterate over the response and gather more data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Rossity\PhpQuickbase\Api\RecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$qBRealmHostname = 'qBRealmHostname_example'; // string | Your Quick Base domain, for example demo.quickbase.com
$authorization = 'authorization_example'; // string | The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth).
$userAgent = 'userAgent_example'; // string | This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities.
$generated = new \Rossity\PhpQuickbase\Model\InlineObject13(); // \Rossity\PhpQuickbase\Model\InlineObject13

try {
    $result = $apiInstance->runQuery($qBRealmHostname, $authorization, $userAgent, $generated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsApi->runQuery: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qBRealmHostname** | **string**| Your Quick Base domain, for example demo.quickbase.com |
 **authorization** | **string**| The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth). |
 **userAgent** | **string**| This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities. | [optional]
 **generated** | [**\Rossity\PhpQuickbase\Model\InlineObject13**](../Model/InlineObject13.md)|  | [optional]

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

## `upsert()`

```php
upsert($qBRealmHostname, $authorization, $userAgent, $generated): map[string,object]
```

Insert/Update record(s)

Insert and/or update record(s) in a table. In this single API call, inserts and updates can be submitted. Update can use the key field on the table, or any other supported unique field. Refer to the [Field types page](../fieldInfo) for more information about how each field type should be formatted. This operation allows for incremental processing of successful records, even when some of the records fail.   **Note:** This endpoint supports a maximum payload size of 10MB.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Rossity\PhpQuickbase\Api\RecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$qBRealmHostname = 'qBRealmHostname_example'; // string | Your Quick Base domain, for example demo.quickbase.com
$authorization = 'authorization_example'; // string | The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth).
$userAgent = 'userAgent_example'; // string | This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities.
$generated = new \Rossity\PhpQuickbase\Model\InlineObject11(); // \Rossity\PhpQuickbase\Model\InlineObject11

try {
    $result = $apiInstance->upsert($qBRealmHostname, $authorization, $userAgent, $generated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordsApi->upsert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **qBRealmHostname** | **string**| Your Quick Base domain, for example demo.quickbase.com |
 **authorization** | **string**| The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth). |
 **userAgent** | **string**| This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities. | [optional]
 **generated** | [**\Rossity\PhpQuickbase\Model\InlineObject11**](../Model/InlineObject11.md)|  | [optional]

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
