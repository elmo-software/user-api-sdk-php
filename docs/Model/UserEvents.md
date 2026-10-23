# # UserEvents

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The id of the event. This is not the resource id. You will need to poll this event to get its current state | [optional]
**entity_name** | **string** | The entityName contains the resource name the event was linked to. So the entityName for the UserEvent would be \&quot;**user**\&quot; | [optional]
**resource_id** | **string** | The id of the linked resource. | [optional]
**response_code** | **int** |  | [optional]
**summary** | **string** | The summary of the event represents its state in a summarized view | [optional]
**logs** | **object** | The logs contains details of what succeeded and what failed. It can contain additional information not found in the summary | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
