# Rossity/PhpQuickbase

A Quick Base RESTful API implementation of their OpenAPI spec.


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/rossity/php-quickbase.git"
    }
  ],
  "require": {
    "rossity/php-quickbase": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Rossity/PhpQuickbase/vendor/autoload.php');
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
$generated = new \Rossity\PhpQuickbase\Model\InlineObject3(); // \Rossity\PhpQuickbase\Model\InlineObject3

try {
    $result = $apiInstance->copyApp($appId, $qBRealmHostname, $authorization, $userAgent, $generated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->copyApp: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.quickbase.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AppsApi* | [**copyApp**](docs/Api/AppsApi.md#copyapp) | **POST** /apps/{appId}/copy | Copy an app
*AppsApi* | [**createApp**](docs/Api/AppsApi.md#createapp) | **POST** /apps | Create an app
*AppsApi* | [**deleteApp**](docs/Api/AppsApi.md#deleteapp) | **DELETE** /apps/{appId} | Delete an app
*AppsApi* | [**getApp**](docs/Api/AppsApi.md#getapp) | **GET** /apps/{appId} | Get an app
*AppsApi* | [**getAppEvents**](docs/Api/AppsApi.md#getappevents) | **GET** /apps/{appId}/events | Get app events
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
*UserTokenApi* | [**cloneUserToken**](docs/Api/UserTokenApi.md#cloneusertoken) | **POST** /usertoken/clone | Clone a user token
*UserTokenApi* | [**deactivateUserToken**](docs/Api/UserTokenApi.md#deactivateusertoken) | **POST** /usertoken/deactivate | Deactivate a user token
*UserTokenApi* | [**deleteUserToken**](docs/Api/UserTokenApi.md#deleteusertoken) | **DELETE** /usertoken | Delete a user token

## Models

- [AppsAppIdCopyProperties](docs/Model/AppsAppIdCopyProperties.md)
- [AppsAppIdEventsOwner](docs/Model/AppsAppIdEventsOwner.md)
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
- [InlineObject14](docs/Model/InlineObject14.md)
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
- [InlineResponse2004](docs/Model/InlineResponse2004.md)
- [RecordsQueryGroupBy](docs/Model/RecordsQueryGroupBy.md)
- [RecordsQueryOptions](docs/Model/RecordsQueryOptions.md)
- [ReportsQuery](docs/Model/ReportsQuery.md)
- [ReportsQueryFormulaFields](docs/Model/ReportsQueryFormulaFields.md)
- [TablesTableIdRelationshipForeignKeyField](docs/Model/TablesTableIdRelationshipForeignKeyField.md)
- [TablesTableIdRelationshipSummaryFields](docs/Model/TablesTableIdRelationshipSummaryFields.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## About this package

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
