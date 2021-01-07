# # InlineObject8

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**audited** | **bool** | Indicates if the field is being tracked as part of Quick Base Audit Logs. You can only set this property to \&quot;true\&quot; if the app has audit logs enabled. See Enable data change logs under [Quick Base Audit Logs](https://help.quickbase.com/user-assistance/audit_logs.html). | [optional]
**fieldHelp** | **string** | The configured help text shown to users within the product. | [optional]
**bold** | **bool** | Indicates if the field is configured to display in bold in the product. | [optional]
**properties** | [**\Rossity\PhpQuickbase\Model\FieldsProperties**](FieldsProperties.md) |  | [optional]
**appearsByDefault** | **bool** | Indicates if the field is marked as a default in reports. | [optional]
**fieldType** | **string** | The [field types](https://help.quickbase.com/user-assistance/field_types.html), click on any of the field type links for more info. |
**permissions** | [**\Rossity\PhpQuickbase\Model\FieldsPermissions[]**](FieldsPermissions.md) | Field Permissions for different roles. | [optional]
**addToForms** | **bool** | Whether the field you are adding should appear on forms. | [optional]
**label** | **string** | The label (name) of the field. |
**findEnabled** | **bool** | Indicates if the field is marked as searchable. | [optional]
**noWrap** | **bool** | Indicates if the field is configured to not wrap when displayed in the product. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
