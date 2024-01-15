# # FileObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique system generated identifier |
**space_name** | **string** | This is the space name which is linked to the account |
**created** | **\DateTime** | ISO8601 timestamp for when a Model was created. All records are stored in UTC time zone |
**custom_fields** | **array<string,mixed>** |  | [optional]
**tags** | **string[]** | A list of id&#39;s used to tag models | [optional]
**metadata** | **array<string,string>** |  | [optional]
**repository_id** | **string** | The repository identifier this file belongs too |
**name** | **string** | Name of the original file uploaded |
**mime_type** | **string** | Mime type of the file. Valid mime types - text/csv or application/vmd.ms-excelor or application/x-directory for directories |
**path** | **string** | The name of the attachment within the bucket |
**parent_folder_path** | **string** | The folder name containing the attachment within the bucket |
**uri** | **string** | The uniform resource identifier where the file can be viewed/downloaded | [optional]
**size** | **int** | The size of the file | [optional]
**constraints** | **string[]** | Additional constraints, if the value is present it means the | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
