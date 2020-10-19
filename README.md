# Rossity\PhpQuickbase
A PHP library for the [Quick Base JSON REST API](https://developer.quickbase.com/) utilizing the OpenAPI definitions.

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Rossity/PhpQuickbase.git"
    }
  ],
  "require": {
    "Rossity/PhpQuickbase": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/Rossity/PhpQuickbase/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Rossity\PhpQuickbase\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$appId = 'appId_example'; // string | The unique identifier of an app
$qBRealmHostname = 'qBRealmHostname_example'; // string | Your Quick Base domain, for example demo.quickbase.com
$authorization = 'authorization_example'; // string | The Quick Base authentication scheme you are using to authenticate the request, as described on the [authorization page](../auth).
$userAgent = 'userAgent_example'; // string | Information is entered by the person or utility invoking the API. Choose between the default in your toolkit or custom create it. Being as descriptive as possible will help in identification and troubleshooting.

try {
    $result = $apiInstance->getApp($appId, $qBRealmHostname, $authorization, $userAgent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->copyApp: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.quickbase.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AppsApi* | [**copyApp**](docs/Api/AppsApi.md#copyapp) | **POST** /apps/{appId}/copy | Copy an app
*AppsApi* | [**createApp**](docs/Api/AppsApi.md#createapp) | **POST** /apps | Create an app
*AppsApi* | [**deleteApp**](docs/Api/AppsApi.md#deleteapp) | **DELETE** /apps/{appId} | Delete an app
*AppsApi* | [**getApp**](docs/Api/AppsApi.md#getapp) | **GET** /apps/{appId} | Get an app
*AppsApi* | [**updateApp**](docs/Api/AppsApi.md#updateapp) | **POST** /apps/{appId} | Update an app
*AuthApi* | [**getTempTokenDBID**](docs/Api/AuthApi.md#gettemptokendbid) | **GET** /auth/temporary/{dbid} | Get a temporary token for a dbid
*FieldsApi* | [**createField**](docs/Api/FieldsApi.md#createfield) | **POST** /fields | Create a field
*FieldsApi* | [**deleteFields**](docs/Api/FieldsApi.md#deletefields) | **DELETE** /fields | Delete field(s)
*FieldsApi* | [**getField**](docs/Api/FieldsApi.md#getfield) | **GET** /fields/{fieldId} | Get field
*FieldsApi* | [**getFieldUsage**](docs/Api/FieldsApi.md#getfieldusage) | **GET** /fields/usage/{fieldId} | Get usage for a field
*FieldsApi* | [**getFields**](docs/Api/FieldsApi.md#getfields) | **GET** /fields | Get fields for a table
*FieldsApi* | [**getFieldsUsage**](docs/Api/FieldsApi.md#getfieldsusage) | **GET** /fields/usage | Get usage for all fields
*FieldsApi* | [**updateField**](docs/Api/FieldsApi.md#updatefield) | **POST** /fields/{fieldId} | Update a field
*FilesApi* | [**deleteFile**](docs/Api/FilesApi.md#deletefile) | **DELETE** /files/{tableId}/{recordId}/{fieldId}/{versionNumber} | Delete file
*FilesApi* | [**downloadFile**](docs/Api/FilesApi.md#downloadfile) | **GET** /files/{tableId}/{recordId}/{fieldId}/{versionNumber} | Download file
*RecordsApi* | [**deleteRecords**](docs/Api/RecordsApi.md#deleterecords) | **DELETE** /records | Delete record(s)
*RecordsApi* | [**runQuery**](docs/Api/RecordsApi.md#runquery) | **POST** /records/query | Query for data
*RecordsApi* | [**upsert**](docs/Api/RecordsApi.md#upsert) | **POST** /records | Insert/Update record(s)
*ReportsApi* | [**getReport**](docs/Api/ReportsApi.md#getreport) | **GET** /reports/{reportId} | Get a report
*ReportsApi* | [**getTableReports**](docs/Api/ReportsApi.md#gettablereports) | **GET** /reports | Get reports for a table
*ReportsApi* | [**runReport**](docs/Api/ReportsApi.md#runreport) | **POST** /reports/{reportId}/run | Run a report
*TablesApi* | [**createRelationship**](docs/Api/TablesApi.md#createrelationship) | **POST** /tables/{tableId}/relationship | Create a relationship
*TablesApi* | [**createTable**](docs/Api/TablesApi.md#createtable) | **POST** /tables | Create a table
*TablesApi* | [**deleteRelationship**](docs/Api/TablesApi.md#deleterelationship) | **DELETE** /tables/{tableId}/relationship/{relationshipId} | Delete a relationship
*TablesApi* | [**deleteTable**](docs/Api/TablesApi.md#deletetable) | **DELETE** /tables/{tableId} | Delete a table
*TablesApi* | [**getAppTables**](docs/Api/TablesApi.md#getapptables) | **GET** /tables | Get tables for an app
*TablesApi* | [**getRelationships**](docs/Api/TablesApi.md#getrelationships) | **GET** /tables/{tableId}/relationships | Get all relationships
*TablesApi* | [**getTable**](docs/Api/TablesApi.md#gettable) | **GET** /tables/{tableId} | Get a table
*TablesApi* | [**updateRelationship**](docs/Api/TablesApi.md#updaterelationship) | **POST** /tables/{tableId}/relationship/{relationshipId} | Update a relationship
*TablesApi* | [**updateTable**](docs/Api/TablesApi.md#updatetable) | **POST** /tables/{tableId} | Update a table


## Documentation For Models

 - [AppsAppIdCopyProperties](docs/Model/AppsAppIdCopyProperties.md)
 - [AppsVariables](docs/Model/AppsVariables.md)
 - [FieldsFieldIdProperties](docs/Model/FieldsFieldIdProperties.md)
 - [FieldsPermissions](docs/Model/FieldsPermissions.md)
 - [FieldsProperties](docs/Model/FieldsProperties.md)
 - [FieldsUsageField](docs/Model/FieldsUsageField.md)
 - [FieldsUsageUsage](docs/Model/FieldsUsageUsage.md)
 - [FieldsUsageUsageActions](docs/Model/FieldsUsageUsageActions.md)
 - [FieldsUsageUsageAppHomePages](docs/Model/FieldsUsageUsageAppHomePages.md)
 - [FieldsUsageUsageDefaultReports](docs/Model/FieldsUsageUsageDefaultReports.md)
 - [FieldsUsageUsageExactForms](docs/Model/FieldsUsageUsageExactForms.md)
 - [FieldsUsageUsageFields](docs/Model/FieldsUsageUsageFields.md)
 - [FieldsUsageUsageForms](docs/Model/FieldsUsageUsageForms.md)
 - [FieldsUsageUsageNotifications](docs/Model/FieldsUsageUsageNotifications.md)
 - [FieldsUsageUsagePersonalReports](docs/Model/FieldsUsageUsagePersonalReports.md)
 - [FieldsUsageUsageRelationships](docs/Model/FieldsUsageUsageRelationships.md)
 - [FieldsUsageUsageReminders](docs/Model/FieldsUsageUsageReminders.md)
 - [FieldsUsageUsageReports](docs/Model/FieldsUsageUsageReports.md)
 - [FieldsUsageUsageRoles](docs/Model/FieldsUsageUsageRoles.md)
 - [FieldsUsageUsageWebhooks](docs/Model/FieldsUsageUsageWebhooks.md)
 - [InlineObject](docs/Model/InlineObject.md)
 - [InlineObject1](docs/Model/InlineObject1.md)
 - [InlineObject10](docs/Model/InlineObject10.md)
 - [InlineObject11](docs/Model/InlineObject11.md)
 - [InlineObject12](docs/Model/InlineObject12.md)
 - [InlineObject13](docs/Model/InlineObject13.md)
 - [InlineObject2](docs/Model/InlineObject2.md)
 - [InlineObject3](docs/Model/InlineObject3.md)
 - [InlineObject4](docs/Model/InlineObject4.md)
 - [InlineObject5](docs/Model/InlineObject5.md)
 - [InlineObject6](docs/Model/InlineObject6.md)
 - [InlineObject7](docs/Model/InlineObject7.md)
 - [InlineObject8](docs/Model/InlineObject8.md)
 - [InlineObject9](docs/Model/InlineObject9.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [RecordsQueryGroupBy](docs/Model/RecordsQueryGroupBy.md)
 - [RecordsQueryOptions](docs/Model/RecordsQueryOptions.md)
 - [ReportsQuery](docs/Model/ReportsQuery.md)
 - [ReportsQueryFormulaFields](docs/Model/ReportsQueryFormulaFields.md)
 - [TablesTableIdRelationshipForeignKeyField](docs/Model/TablesTableIdRelationshipForeignKeyField.md)
 - [TablesTableIdRelationshipSummaryFields](docs/Model/TablesTableIdRelationshipSummaryFields.md)



