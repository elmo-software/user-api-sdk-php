# Elmo\UserApi\LeaveRequestsApi

All URIs are relative to https://api.elmotalent.com.au, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLeaveRequestCollection()**](LeaveRequestsApi.md#getLeaveRequestCollection) | **GET** /core/v1/leave-requests | Gets all the leave request |
| [**getLeaveRequestItem()**](LeaveRequestsApi.md#getLeaveRequestItem) | **GET** /core/v1/leave-requests/{id} | Gets a single leave request |


## `getLeaveRequestCollection()`

```php
getLeaveRequestCollection($status, $leave_type_id): \Elmo\UserApi\Model\LeaveRequest[]
```

Gets all the leave request



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\LeaveRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 'status_example'; // string | Exact match of status
$leave_type_id = 'leave_type_id_example'; // string | Exact match of leave type Id

try {
    $result = $apiInstance->getLeaveRequestCollection($status, $leave_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveRequestsApi->getLeaveRequestCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | **string**| Exact match of status | [optional] |
| **leave_type_id** | **string**| Exact match of leave type Id | [optional] |

### Return type

[**\Elmo\UserApi\Model\LeaveRequest[]**](../Model/LeaveRequest.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLeaveRequestItem()`

```php
getLeaveRequestItem($id): \Elmo\UserApi\Model\LeaveRequest
```

Gets a single leave request



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\LeaveRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier to retrieve LeaveRequest

try {
    $result = $apiInstance->getLeaveRequestItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveRequestsApi->getLeaveRequestItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier to retrieve LeaveRequest | |

### Return type

[**\Elmo\UserApi\Model\LeaveRequest**](../Model/LeaveRequest.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
