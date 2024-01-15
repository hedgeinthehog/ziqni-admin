# # UpdateFileObjectRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**custom_fields** | **array<string,mixed>** | A list of id&#39;s used to add cutom fields | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**repository_id** | **string** | The repository identifier this file belongs too | [optional]
**name** | **string** | Name of the original file uploaded | [optional]
**mime_type** | **string** | Mime type of the file. Valid mime types - text/csv or application/vmd.ms-excel | [optional]
**parent_folder_path** | **string** | The folder containing the attachment within the repository | [optional]
**constraints** | **string[]** | Additional constraints, if the value is present it means the | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
