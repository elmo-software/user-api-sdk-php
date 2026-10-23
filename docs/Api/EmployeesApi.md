# Elmo\UserApi\EmployeesApi

All URIs are relative to https://api.elmotalent.com.au, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEmploymentDetailsCollection()**](EmployeesApi.md#getEmploymentDetailsCollection) | **GET** /core/v1/employees | Get employment details of all employees |
| [**getEmploymentDetailsItem()**](EmployeesApi.md#getEmploymentDetailsItem) | **GET** /core/v1/employees/{id} | Get a single employment details by Id |


## `getEmploymentDetailsCollection()`

```php
getEmploymentDetailsCollection($page, $items_per_page): \Elmo\UserApi\Model\GetEmploymentDetailsCollection200Response
```

Get employment details of all employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The page number
$items_per_page = 56; // int | The number of items per page

try {
    $result = $apiInstance->getEmploymentDetailsCollection($page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->getEmploymentDetailsCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The page number | [optional] |
| **items_per_page** | **int**| The number of items per page | [optional] |

### Return type

[**\Elmo\UserApi\Model\GetEmploymentDetailsCollection200Response**](../Model/GetEmploymentDetailsCollection200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmploymentDetailsItem()`

```php
getEmploymentDetailsItem($id): \Elmo\UserApi\Model\Employee
```

Get a single employment details by Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getEmploymentDetailsItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->getEmploymentDetailsItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Elmo\UserApi\Model\Employee**](../Model/Employee.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
