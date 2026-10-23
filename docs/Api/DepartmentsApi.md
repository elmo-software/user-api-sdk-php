# Elmo\UserApi\DepartmentsApi

All URIs are relative to https://api.elmotalent.com.au, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDepartmentCollection()**](DepartmentsApi.md#getDepartmentCollection) | **GET** /core/v1/departments | Gets all the departments |
| [**getDepartmentItem()**](DepartmentsApi.md#getDepartmentItem) | **GET** /core/v1/departments/{id} | Gets a single department |
| [**getDepartmentTemplateCollection()**](DepartmentsApi.md#getDepartmentTemplateCollection) | **GET** /core/v1/department-creation-template | Get department template schema |
| [**postDepartmentCollection()**](DepartmentsApi.md#postDepartmentCollection) | **POST** /core/v1/departments | Create a new department |
| [**putDepartmentItem()**](DepartmentsApi.md#putDepartmentItem) | **PUT** /core/v1/departments/{id} | Update an existing department |


## `getDepartmentCollection()`

```php
getDepartmentCollection($id, $title, $department_id, $description, $page, $items_per_page, $deleted, $format): \Elmo\UserApi\Model\Department[]
```

Gets all the departments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\DepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | Exact match of id/s
$title = 'title_example'; // string | Exact/Partial match of title
$department_id = array('department_id_example'); // string[] | Exact match of the department Id
$description = 'description_example'; // string | Exact/Partial match of descriptions
$page = 56; // int | The page number
$items_per_page = 56; // int | The number of items per page
$deleted = True; // bool | Type of departments to be returned
$format = 'format_example'; // string | Format for description field - 'HTML' preserves formatting (default), 'TEXT' removes HTML tags

try {
    $result = $apiInstance->getDepartmentCollection($id, $title, $department_id, $description, $page, $items_per_page, $deleted, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->getDepartmentCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| Exact match of id/s | [optional] |
| **title** | **string**| Exact/Partial match of title | [optional] |
| **department_id** | [**string[]**](../Model/string.md)| Exact match of the department Id | [optional] |
| **description** | **string**| Exact/Partial match of descriptions | [optional] |
| **page** | **int**| The page number | [optional] |
| **items_per_page** | **int**| The number of items per page | [optional] |
| **deleted** | **bool**| Type of departments to be returned | [optional] |
| **format** | **string**| Format for description field - &#39;HTML&#39; preserves formatting (default), &#39;TEXT&#39; removes HTML tags | [optional] |

### Return type

[**\Elmo\UserApi\Model\Department[]**](../Model/Department.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDepartmentItem()`

```php
getDepartmentItem($id, $format): \Elmo\UserApi\Model\Department
```

Gets a single department

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\DepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier to retrieve Department
$format = 'format_example'; // string | Format for description field - 'HTML' preserves formatting (default), 'TEXT' removes HTML tags

try {
    $result = $apiInstance->getDepartmentItem($id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->getDepartmentItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier to retrieve Department | |
| **format** | **string**| Format for description field - &#39;HTML&#39; preserves formatting (default), &#39;TEXT&#39; removes HTML tags | [optional] |

### Return type

[**\Elmo\UserApi\Model\Department**](../Model/Department.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDepartmentTemplateCollection()`

```php
getDepartmentTemplateCollection(): \Elmo\UserApi\Model\DepartmentTemplateEmployeeLed
```

Get department template schema

Returns a JSON schema template for department creation, following the json-schema.org draft-04 specification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\DepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDepartmentTemplateCollection();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->getDepartmentTemplateCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Elmo\UserApi\Model\DepartmentTemplateEmployeeLed**](../Model/DepartmentTemplateEmployeeLed.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDepartmentCollection()`

```php
postDepartmentCollection($post_department_collection_request): \Elmo\UserApi\Model\DepartmentMutate
```

Create a new department

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\DepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_department_collection_request = new \Elmo\UserApi\Model\PostDepartmentCollectionRequest(); // \Elmo\UserApi\Model\PostDepartmentCollectionRequest

try {
    $result = $apiInstance->postDepartmentCollection($post_department_collection_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->postDepartmentCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_department_collection_request** | [**\Elmo\UserApi\Model\PostDepartmentCollectionRequest**](../Model/PostDepartmentCollectionRequest.md)|  | |

### Return type

[**\Elmo\UserApi\Model\DepartmentMutate**](../Model/DepartmentMutate.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putDepartmentItem()`

```php
putDepartmentItem($id, $put_department_item_request): \Elmo\UserApi\Model\DepartmentMutate
```

Update an existing department

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\DepartmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of the department to update
$put_department_item_request = new \Elmo\UserApi\Model\PutDepartmentItemRequest(); // \Elmo\UserApi\Model\PutDepartmentItemRequest

try {
    $result = $apiInstance->putDepartmentItem($id, $put_department_item_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DepartmentsApi->putDepartmentItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the department to update | |
| **put_department_item_request** | [**\Elmo\UserApi\Model\PutDepartmentItemRequest**](../Model/PutDepartmentItemRequest.md)|  | |

### Return type

[**\Elmo\UserApi\Model\DepartmentMutate**](../Model/DepartmentMutate.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
