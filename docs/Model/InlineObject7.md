# # InlineObject7

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**summaryFields** | [**\Rossity\PhpQuickbase\Model\TablesTableIdRelationshipSummaryFields[]**](TablesTableIdRelationshipSummaryFields.md) | An array of objects, each representing a configuration of one field from the child table, that will become summary fields on the parent table. When you specify the &#39;COUNT&#39; accumulation type, you have to specify 0 as the summaryFid (or not set it in the request). &#39;DISTINCT-COUNT&#39; requires that summaryFid be set to an actual fid. | [optional]
**lookupFieldIds** | **int[]** | An array of field ids on the parent table that will become lookup fields on the child table. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
