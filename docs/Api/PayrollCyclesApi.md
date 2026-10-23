# Elmo\UserApi\PayrollCyclesApi

All URIs are relative to https://api.elmotalent.com.au, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPayrollCycleCollection()**](PayrollCyclesApi.md#getPayrollCycleCollection) | **GET** /core/v1/payroll-cycles | Gets all the payroll cycles |
| [**getPayrollCycleItem()**](PayrollCyclesApi.md#getPayrollCycleItem) | **GET** /core/v1/payroll-cycles/{id} | Gets a single payroll cycle |


## `getPayrollCycleCollection()`

```php
getPayrollCycleCollection($id, $title, $description, $type, $weeks_per_annum, $page, $items_per_page): \Elmo\UserApi\Model\PayrollCycle[]
```

Gets all the payroll cycles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\PayrollCyclesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | Exact match of id/s
$title = 'title_example'; // string | Exact/Partial match of title
$description = 'description_example'; // string | Exact/Partial match of description
$type = 'type_example'; // string | Type of payroll cycle
$weeks_per_annum = 'weeks_per_annum_example'; // string | Exact match of weeksPerAnnum number
$page = 56; // int | The page number
$items_per_page = 56; // int | The number of items per page

try {
    $result = $apiInstance->getPayrollCycleCollection($id, $title, $description, $type, $weeks_per_annum, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollCyclesApi->getPayrollCycleCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| Exact match of id/s | [optional] |
| **title** | **string**| Exact/Partial match of title | [optional] |
| **description** | **string**| Exact/Partial match of description | [optional] |
| **type** | **string**| Type of payroll cycle | [optional] |
| **weeks_per_annum** | **string**| Exact match of weeksPerAnnum number | [optional] |
| **page** | **int**| The page number | [optional] |
| **items_per_page** | **int**| The number of items per page | [optional] |

### Return type

[**\Elmo\UserApi\Model\PayrollCycle[]**](../Model/PayrollCycle.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayrollCycleItem()`

```php
getPayrollCycleItem($id): \Elmo\UserApi\Model\PayrollCycle
```

Gets a single payroll cycle

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\PayrollCyclesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier to retrieve Payroll Cycles

try {
    $result = $apiInstance->getPayrollCycleItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollCyclesApi->getPayrollCycleItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier to retrieve Payroll Cycles | |

### Return type

[**\Elmo\UserApi\Model\PayrollCycle**](../Model/PayrollCycle.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
