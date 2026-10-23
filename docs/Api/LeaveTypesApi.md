# Elmo\UserApi\LeaveTypesApi

All URIs are relative to https://api.elmotalent.com.au, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLeaveTypeCollection()**](LeaveTypesApi.md#getLeaveTypeCollection) | **GET** /core/v1/leave-types | Gets all leave types |
| [**getLeaveTypeItem()**](LeaveTypesApi.md#getLeaveTypeItem) | **GET** /core/v1/leave-types/{id} | Gets a single leave type |


## `getLeaveTypeCollection()`

```php
getLeaveTypeCollection($id, $title, $accrual_type, $page, $items_per_page, $deleted): \Elmo\UserApi\Model\LeaveType[]
```

Gets all leave types



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\LeaveTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | Exact match of ids
$title = 'title_example'; // string | Exact/Partial match of title
$accrual_type = 'accrual_type_example'; // string | Exact match of type
$page = 56; // int | The page number
$items_per_page = 56; // int | The number of items per page
$deleted = True; // bool | Deleted status of leave types

try {
    $result = $apiInstance->getLeaveTypeCollection($id, $title, $accrual_type, $page, $items_per_page, $deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveTypesApi->getLeaveTypeCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| Exact match of ids | [optional] |
| **title** | **string**| Exact/Partial match of title | [optional] |
| **accrual_type** | **string**| Exact match of type | [optional] |
| **page** | **int**| The page number | [optional] |
| **items_per_page** | **int**| The number of items per page | [optional] |
| **deleted** | **bool**| Deleted status of leave types | [optional] |

### Return type

[**\Elmo\UserApi\Model\LeaveType[]**](../Model/LeaveType.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLeaveTypeItem()`

```php
getLeaveTypeItem($id): \Elmo\UserApi\Model\LeaveType
```

Gets a single leave type



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\LeaveTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier to retrieve Leave Type

try {
    $result = $apiInstance->getLeaveTypeItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeaveTypesApi->getLeaveTypeItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier to retrieve Leave Type | |

### Return type

[**\Elmo\UserApi\Model\LeaveType**](../Model/LeaveType.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
