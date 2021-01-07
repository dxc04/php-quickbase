# Rossity\PhpQuickbase\FilesApi

All URIs are relative to https://api.quickbase.com/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteFile()**](FilesApi.md#deleteFile) | **DELETE** /files/{tableId}/{recordId}/{fieldId}/{versionNumber} | Delete file
[**downloadFile()**](FilesApi.md#downloadFile) | **GET** /files/{tableId}/{recordId}/{fieldId}/{versionNumber} | Download file


## `deleteFile()`

```php
deleteFile($tableId, $recordId, $fieldId, $versionNumber, $qBRealmHostname, $authorization, $userAgent): map[string,object]
```

Delete file

Deletes one file attachment version. Meta-data about files can be retrieved from the /records and /reports endpoints, where applicable. Use those endpoints to get the necessary information to delete file versions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Rossity\PhpQuickbase\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tableId = 'tableId_example'; // string | The unique identifier of the table.
$recordId = 56; // int | The unique identifier of the record.
$fieldId = 56; // int | The unique identifier of the field.
$versionNumber = 56; // int | The file attachment version number.
$qBRealmHostname = 'qBRealmHostname_example'; // string | Your Quick Base domain, for example demo.quickbase.com
$authorization = 'authorization_example'; // string | The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth).
$userAgent = 'userAgent_example'; // string | Information is entered by the person or utility invoking the API. Choose between the default in your toolkit or custom create it. Being as descriptive as possible will help in identification and troubleshooting.

try {
    $result = $apiInstance->deleteFile($tableId, $recordId, $fieldId, $versionNumber, $qBRealmHostname, $authorization, $userAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->deleteFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tableId** | **string**| The unique identifier of the table. |
 **recordId** | **int**| The unique identifier of the record. |
 **fieldId** | **int**| The unique identifier of the field. |
 **versionNumber** | **int**| The file attachment version number. |
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

## `downloadFile()`

```php
downloadFile($tableId, $recordId, $fieldId, $versionNumber, $qBRealmHostname, $authorization, $userAgent): object
```

Download file

Downloads the file attachment, with the file attachment content encoded in base64 format. The API response returns the file name in the `Content-Disposition` header. Meta-data about files can be retrieved from the /records and /reports endpoints, where applicable. Use those endpoints to get the necessary information to fetch files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Rossity\PhpQuickbase\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tableId = 'tableId_example'; // string | The unique identifier of the table.
$recordId = 56; // int | The unique identifier of the record.
$fieldId = 56; // int | The unique identifier of the field.
$versionNumber = 56; // int | The file attachment version number.
$qBRealmHostname = 'qBRealmHostname_example'; // string | Your Quick Base domain, for example demo.quickbase.com
$authorization = 'authorization_example'; // string | The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth).
$userAgent = 'userAgent_example'; // string | Information is entered by the person or utility invoking the API. Choose between the default in your toolkit or custom create it. Being as descriptive as possible will help in identification and troubleshooting.

try {
    $result = $apiInstance->downloadFile($tableId, $recordId, $fieldId, $versionNumber, $qBRealmHostname, $authorization, $userAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->downloadFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tableId** | **string**| The unique identifier of the table. |
 **recordId** | **int**| The unique identifier of the record. |
 **fieldId** | **int**| The unique identifier of the field. |
 **versionNumber** | **int**| The file attachment version number. |
 **qBRealmHostname** | **string**| Your Quick Base domain, for example demo.quickbase.com |
 **authorization** | **string**| The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth). |
 **userAgent** | **string**| Information is entered by the person or utility invoking the API. Choose between the default in your toolkit or custom create it. Being as descriptive as possible will help in identification and troubleshooting. | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
