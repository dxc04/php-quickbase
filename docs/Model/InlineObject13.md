# # InlineObject13

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**options** | [**\Rossity\PhpQuickbase\Model\RecordsQueryOptions**](RecordsQueryOptions.md) |  | [optional]
**where** | **string** | The filter, using the Quick Base query language, which determines the records to return. If this parameter is omitted, the query will return all records. | [optional]
**groupBy** | [**\Rossity\PhpQuickbase\Model\RecordsQueryGroupBy[]**](RecordsQueryGroupBy.md) | An array that contains the fields to group the records by. | [optional]
**sortBy** | **object** | By default, queries will be sorted by the given sort fields or the default sort if the query does not provide any. Set to false to avoid sorting when the order of the data returned is not important. Returning data without sorting can improve performance. | [optional]
**select** | **string[]** | An array of field ids for the fields that should be returned in the response. If empty, the default columns on the table will be returned. | [optional]
**from** | **string** | The table identifier. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
