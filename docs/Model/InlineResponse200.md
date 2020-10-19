# # InlineResponse200

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the table. | [optional] 
**id** | **string** | The unique identifier (dbid) of the table. | [optional] 
**alias** | **string** | The automatically-created table alias for the table. | [optional] 
**description** | **string** | The description of the table, as configured by an application administrator. | [optional] 
**created** | **string** | The time and date when the table was created, in the ISO 8601 time format YYYY-MM-DDThh:mm:ss.sssZ (in UTC time zone). | [optional] 
**updated** | **string** | The time and date when the table schema or data was last updated, in the ISO 8601 time format YYYY-MM-DDThh:mm:ss.sssZ (in UTC time zone). | [optional] 
**nextRecordId** | **int** | The incremental Record ID that will be used when the next record is created, as determined when the API call was ran. | [optional] 
**nextFieldId** | **int** | The incremental Field ID that will be used when the next field is created, as determined when the API call was ran. | [optional] 
**defaultSortFieldId** | **int** | The id of the field that is configured for default sorting. | [optional] 
**defaultSortOrder** | **string** | The configuration of the default sort order on the table. | [optional] 
**keyFieldId** | **int** | The id of the field that is configured to be the key on this table, which is usually the Quick Base Record ID. | [optional] 
**singleRecordName** | **string** | The builder-configured singular noun of the table. | [optional] 
**pluralRecordName** | **string** | The builder-configured plural noun of the table. | [optional] 
**sizeLimit** | **string** | The size limit for the table. | [optional] 
**spaceUsed** | **string** | The amount of space currently being used by the table. | [optional] 
**spaceRemaining** | **string** | The amount of space remaining for use by the table. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


