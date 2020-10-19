# Rossity\PhpQuickbase\FieldsApi

All URIs are relative to *https://api.quickbase.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createField**](FieldsApi.md#createField) | **POST** /fields | Create a field
[**deleteFields**](FieldsApi.md#deleteFields) | **DELETE** /fields | Delete field(s)
[**getField**](FieldsApi.md#getField) | **GET** /fields/{fieldId} | Get field
[**getFieldUsage**](FieldsApi.md#getFieldUsage) | **GET** /fields/usage/{fieldId} | Get usage for a field
[**getFields**](FieldsApi.md#getFields) | **GET** /fields | Get fields for a table
[**getFieldsUsage**](FieldsApi.md#getFieldsUsage) | **GET** /fields/usage | Get usage for all fields
[**updateField**](FieldsApi.md#updateField) | **POST** /fields/{fieldId} | Update a field



## createField

> map[string,object] createField($tableId, $qBRealmHostname, $authorization, $userAgent, $generated)

Create a field

Creates a field within a table, including the custom permissions of that field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Rossity\PhpQuickbase\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tableId = 'tableId_example'; // string | The unique identifier of the table.
$qBRealmHostname = 'qBRealmHostname_example'; // string | Your Quick Base domain, for example demo.quickbase.com
$authorization = 'authorization_example'; // string | The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth).
$userAgent = 'userAgent_example'; // string | This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities.
$generated = new \Rossity\PhpQuickbase\Model\InlineObject8(); // \Rossity\PhpQuickbase\Model\InlineObject8 | 

try {
    $result = $apiInstance->createField($tableId, $qBRealmHostname, $authorization, $userAgent, $generated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->createField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tableId** | **string**| The unique identifier of the table. |
 **qBRealmHostname** | **string**| Your Quick Base domain, for example demo.quickbase.com |
 **authorization** | **string**| The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth). |
 **userAgent** | **string**| This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities. | [optional]
 **generated** | [**\Rossity\PhpQuickbase\Model\InlineObject8**](../Model/InlineObject8.md)|  | [optional]

### Return type

**map[string,object]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteFields

> map[string,object] deleteFields($tableId, $qBRealmHostname, $authorization, $userAgent, $generated)

Delete field(s)

Deletes one or many fields in a table, based on field id. This will also permanently delete any data or calculations in that field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Rossity\PhpQuickbase\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tableId = 'tableId_example'; // string | The unique identifier of the table.
$qBRealmHostname = 'qBRealmHostname_example'; // string | Your Quick Base domain, for example demo.quickbase.com
$authorization = 'authorization_example'; // string | The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth).
$userAgent = 'userAgent_example'; // string | This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities.
$generated = new \Rossity\PhpQuickbase\Model\InlineObject9(); // \Rossity\PhpQuickbase\Model\InlineObject9 | 

try {
    $result = $apiInstance->deleteFields($tableId, $qBRealmHostname, $authorization, $userAgent, $generated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->deleteFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tableId** | **string**| The unique identifier of the table. |
 **qBRealmHostname** | **string**| Your Quick Base domain, for example demo.quickbase.com |
 **authorization** | **string**| The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth). |
 **userAgent** | **string**| This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities. | [optional]
 **generated** | [**\Rossity\PhpQuickbase\Model\InlineObject9**](../Model/InlineObject9.md)|  | [optional]

### Return type

**map[string,object]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getField

> map[string,object] getField($fieldId, $tableId, $qBRealmHostname, $authorization, $includeFieldPerms, $userAgent)

Get field

Gets the properties of an individual field, based on field id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Rossity\PhpQuickbase\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fieldId = 56; // int | The unique identifier (fid) of the field.
$tableId = 'tableId_example'; // string | The unique identifier (dbid) of the table.
$qBRealmHostname = 'qBRealmHostname_example'; // string | Your Quick Base domain, for example demo.quickbase.com
$authorization = 'authorization_example'; // string | The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth).
$includeFieldPerms = false; // bool | Set to 'true' if you'd like to get back the custom permissions for the field(s).
$userAgent = 'userAgent_example'; // string | This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities.

try {
    $result = $apiInstance->getField($fieldId, $tableId, $qBRealmHostname, $authorization, $includeFieldPerms, $userAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->getField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldId** | **int**| The unique identifier (fid) of the field. |
 **tableId** | **string**| The unique identifier (dbid) of the table. |
 **qBRealmHostname** | **string**| Your Quick Base domain, for example demo.quickbase.com |
 **authorization** | **string**| The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth). |
 **includeFieldPerms** | **bool**| Set to &#39;true&#39; if you&#39;d like to get back the custom permissions for the field(s). | [optional] [default to false]
 **userAgent** | **string**| This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities. | [optional]

### Return type

**map[string,object]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFieldUsage

> \Rossity\PhpQuickbase\Model\InlineResponse2003[] getFieldUsage($fieldId, $tableId, $qBRealmHostname, $authorization, $userAgent)

Get usage for a field

Get a single fields usage statistics. This is a summary of the information that can be found in the usage table of field properties.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Rossity\PhpQuickbase\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fieldId = 56; // int | The unique identifier (fid) of the field.
$tableId = 'tableId_example'; // string | The unique identifier (dbid) of the table.
$qBRealmHostname = 'qBRealmHostname_example'; // string | Your Quick Base domain, for example demo.quickbase.com
$authorization = 'authorization_example'; // string | The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth).
$userAgent = 'userAgent_example'; // string | This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities.

try {
    $result = $apiInstance->getFieldUsage($fieldId, $tableId, $qBRealmHostname, $authorization, $userAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->getFieldUsage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldId** | **int**| The unique identifier (fid) of the field. |
 **tableId** | **string**| The unique identifier (dbid) of the table. |
 **qBRealmHostname** | **string**| Your Quick Base domain, for example demo.quickbase.com |
 **authorization** | **string**| The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth). |
 **userAgent** | **string**| This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities. | [optional]

### Return type

[**\Rossity\PhpQuickbase\Model\InlineResponse2003[]**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFields

> \Rossity\PhpQuickbase\Model\InlineResponse2002[] getFields($tableId, $qBRealmHostname, $authorization, $includeFieldPerms, $userAgent)

Get fields for a table

Gets the properties for all fields in a specific table. The properties for each field are the same as in Get field.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Rossity\PhpQuickbase\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tableId = 'tableId_example'; // string | The unique identifier (dbid) of the table.
$qBRealmHostname = 'qBRealmHostname_example'; // string | Your Quick Base domain, for example demo.quickbase.com
$authorization = 'authorization_example'; // string | The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth).
$includeFieldPerms = false; // bool | Set to 'true' if you'd like to get back the custom permissions for the field(s).
$userAgent = 'userAgent_example'; // string | This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities.

try {
    $result = $apiInstance->getFields($tableId, $qBRealmHostname, $authorization, $includeFieldPerms, $userAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->getFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tableId** | **string**| The unique identifier (dbid) of the table. |
 **qBRealmHostname** | **string**| Your Quick Base domain, for example demo.quickbase.com |
 **authorization** | **string**| The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth). |
 **includeFieldPerms** | **bool**| Set to &#39;true&#39; if you&#39;d like to get back the custom permissions for the field(s). | [optional] [default to false]
 **userAgent** | **string**| This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities. | [optional]

### Return type

[**\Rossity\PhpQuickbase\Model\InlineResponse2002[]**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFieldsUsage

> \Rossity\PhpQuickbase\Model\InlineResponse2003[] getFieldsUsage($tableId, $qBRealmHostname, $authorization, $skip, $top, $userAgent)

Get usage for all fields

Get all the field usage statistics for a table. This is a summary of the information that can be found in the usage table of field properties.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Rossity\PhpQuickbase\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tableId = 'tableId_example'; // string | The unique identifier (dbid) of the table.
$qBRealmHostname = 'qBRealmHostname_example'; // string | Your Quick Base domain, for example demo.quickbase.com
$authorization = 'authorization_example'; // string | The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth).
$skip = 56; // int | The number of fields to skip from the list.
$top = 56; // int | The maximum number of fields to return.
$userAgent = 'userAgent_example'; // string | This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities.

try {
    $result = $apiInstance->getFieldsUsage($tableId, $qBRealmHostname, $authorization, $skip, $top, $userAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->getFieldsUsage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tableId** | **string**| The unique identifier (dbid) of the table. |
 **qBRealmHostname** | **string**| Your Quick Base domain, for example demo.quickbase.com |
 **authorization** | **string**| The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth). |
 **skip** | **int**| The number of fields to skip from the list. | [optional]
 **top** | **int**| The maximum number of fields to return. | [optional]
 **userAgent** | **string**| This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities. | [optional]

### Return type

[**\Rossity\PhpQuickbase\Model\InlineResponse2003[]**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateField

> map[string,object] updateField($fieldId, $tableId, $qBRealmHostname, $authorization, $userAgent, $generated)

Update a field

Updates the properties and custom permissions of a field. The attempt to update certain properties might cause existing data to no longer obey the field’s new properties and may be rejected. See the descriptions of required, unique, and choices, below, for specific situations. Any properties of the field that you do not specify in the request body will remain unchanged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Rossity\PhpQuickbase\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fieldId = 56; // int | The unique identifier (fid) of the field.
$tableId = 'tableId_example'; // string | The unique identifier of the table.
$qBRealmHostname = 'qBRealmHostname_example'; // string | Your Quick Base domain, for example demo.quickbase.com
$authorization = 'authorization_example'; // string | The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth).
$userAgent = 'userAgent_example'; // string | This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities.
$generated = new \Rossity\PhpQuickbase\Model\InlineObject10(); // \Rossity\PhpQuickbase\Model\InlineObject10 | 

try {
    $result = $apiInstance->updateField($fieldId, $tableId, $qBRealmHostname, $authorization, $userAgent, $generated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->updateField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fieldId** | **int**| The unique identifier (fid) of the field. |
 **tableId** | **string**| The unique identifier of the table. |
 **qBRealmHostname** | **string**| Your Quick Base domain, for example demo.quickbase.com |
 **authorization** | **string**| The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth). |
 **userAgent** | **string**| This is entered by the person or utility invoking the API. You might custom create this or use the default one of your toolkit. Being descriptive here may offer more identification and troubleshooting capabilities. | [optional]
 **generated** | [**\Rossity\PhpQuickbase\Model\InlineObject10**](../Model/InlineObject10.md)|  | [optional]

### Return type

**map[string,object]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

