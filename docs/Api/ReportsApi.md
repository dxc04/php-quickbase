# Rossity\PhpQuickbase\ReportsApi

All URIs are relative to https://api.quickbase.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getReport()**](ReportsApi.md#getReport) | **GET** /reports/{reportId} | Get a report
[**getTableReports()**](ReportsApi.md#getTableReports) | **GET** /reports | Get reports for a table
[**runReport()**](ReportsApi.md#runReport) | **POST** /reports/{reportId}/run | Run a report


## `getReport()`

```php
getReport($reportId, $tableId, $qBRealmHostname, $authorization, $userAgent): map[string,object]
```

Get a report

Get the schema (properties) of an individual report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Rossity\PhpQuickbase\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reportId = 'reportId_example'; // string | The identifier of the report, unique to the table.
$tableId = 'tableId_example'; // string | The unique identifier of table.
$qBRealmHostname = 'qBRealmHostname_example'; // string | Your Quick Base domain, for example demo.quickbase.com
$authorization = 'authorization_example'; // string | The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth).
$userAgent = 'userAgent_example'; // string | This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities.

try {
    $result = $apiInstance->getReport($reportId, $tableId, $qBRealmHostname, $authorization, $userAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reportId** | **string**| The identifier of the report, unique to the table. |
 **tableId** | **string**| The unique identifier of table. |
 **qBRealmHostname** | **string**| Your Quick Base domain, for example demo.quickbase.com |
 **authorization** | **string**| The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth). |
 **userAgent** | **string**| This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities. | [optional]

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

## `getTableReports()`

```php
getTableReports($tableId, $qBRealmHostname, $authorization, $userAgent): \Rossity\PhpQuickbase\Model\InlineResponse2002[]
```

Get reports for a table

Get the schema (properties) of all reports for a table. If the user running the API is an application administrator, the API will also return all personal reports with owner's user id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Rossity\PhpQuickbase\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tableId = 'tableId_example'; // string | The unique identifier of the table.
$qBRealmHostname = 'qBRealmHostname_example'; // string | Your Quick Base domain, for example demo.quickbase.com
$authorization = 'authorization_example'; // string | The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth).
$userAgent = 'userAgent_example'; // string | This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities.

try {
    $result = $apiInstance->getTableReports($tableId, $qBRealmHostname, $authorization, $userAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getTableReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tableId** | **string**| The unique identifier of the table. |
 **qBRealmHostname** | **string**| Your Quick Base domain, for example demo.quickbase.com |
 **authorization** | **string**| The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth). |
 **userAgent** | **string**| This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities. | [optional]

### Return type

[**\Rossity\PhpQuickbase\Model\InlineResponse2002[]**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `runReport()`

```php
runReport($reportId, $tableId, $qBRealmHostname, $authorization, $skip, $top, $userAgent, $generated): map[string,object]
```

Run a report

Runs a report, based on an ID and returns the underlying data associated with it. The format of the data will vary based on the report type. Reports that focus on record-level data (table, calendar, etc.) return the individual records. Aggregate reports (summary, chart) will return the summarized information as configured in the report. UI-specific elements are not returned, such as totals, averages and visualizations. Returns data with intelligent pagination based on the approximate size of each record. The metadata object will include the necessary information to iterate over the response and gather more data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Rossity\PhpQuickbase\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reportId = 'reportId_example'; // string | The identifier of the report, unique to the table.
$tableId = 'tableId_example'; // string | The identifier of the table for the report.
$qBRealmHostname = 'qBRealmHostname_example'; // string | Your Quick Base domain, for example demo.quickbase.com
$authorization = 'authorization_example'; // string | The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth).
$skip = 56; // int | The number of records to skip. You can set this value when paginating through a set of results.
$top = 56; // int | The maximum number of records to return. You can override the default Quick Base pagination to get more or fewer results. If your requested value here exceeds the dynamic maximums, we will return a subset of results and the rest can be gathered in subsequent API calls.
$userAgent = 'userAgent_example'; // string | This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities.
$generated = new \stdClass; // object

try {
    $result = $apiInstance->runReport($reportId, $tableId, $qBRealmHostname, $authorization, $skip, $top, $userAgent, $generated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->runReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reportId** | **string**| The identifier of the report, unique to the table. |
 **tableId** | **string**| The identifier of the table for the report. |
 **qBRealmHostname** | **string**| Your Quick Base domain, for example demo.quickbase.com |
 **authorization** | **string**| The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth). |
 **skip** | **int**| The number of records to skip. You can set this value when paginating through a set of results. | [optional]
 **top** | **int**| The maximum number of records to return. You can override the default Quick Base pagination to get more or fewer results. If your requested value here exceeds the dynamic maximums, we will return a subset of results and the rest can be gathered in subsequent API calls. | [optional]
 **userAgent** | **string**| This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities. | [optional]
 **generated** | **object**|  | [optional]

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
