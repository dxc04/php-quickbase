# # InlineObject6

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**summaryFields** | [**\Rossity\PhpQuickbase\Model\TablesTableIdRelationshipSummaryFields[]**](TablesTableIdRelationshipSummaryFields.md) | Array of summary field objects which will turn into summary fields in the parent table. When you specify the &#39;COUNT&#39; accumulation type, you have to specify 0 as the summaryFid (or not set it in the request). &#39;DISTINCT-COUNT&#39; requires that summaryFid be set to an actual fid. | [optional]
**lookupFieldIds** | **int[]** | Array of field ids in the parent table that will become lookup fields in the child table. | [optional]
**parentTableId** | **string** | The parent table id for the relationship. |
**foreignKeyField** | [**\Rossity\PhpQuickbase\Model\TablesTableIdRelationshipForeignKeyField**](TablesTableIdRelationshipForeignKeyField.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
