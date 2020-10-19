# # InlineResponse2001

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The identifier of the report, unique to the table. | [optional] 
**name** | **string** | The configured name of the report. | [optional] 
**type** | **string** | The type of report in Quick Base (e.g., chart). | [optional] 
**description** | **string** | The configured description of a report. | [optional] 
**ownerId** | **int** | Optional, showed only for personal reports. The user ID of report owner. | [optional] 
**query** | [**\Rossity\PhpQuickbase\Model\ReportsQuery**](ReportsQuery.md) |  | [optional] 
**properties** | [**object**](.md) | A list of properties specific to the report type. To see a detailed description of the properties for each report type, See [Report Types.](../reportTypes) | [optional] 
**usedLast** | **string** | The instant at which a report was last used. | [optional] 
**usedCount** | **int** | The number of times a report has been used. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


