# Elmo\UserApi\LocationsApi

All URIs are relative to https://api.elmotalent.com.au, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLocationCollection()**](LocationsApi.md#getLocationCollection) | **GET** /core/v1/locations | Gets all the locations |
| [**getLocationItem()**](LocationsApi.md#getLocationItem) | **GET** /core/v1/locations/{id} | Gets a single location |
| [**getLocationTemplateCollection()**](LocationsApi.md#getLocationTemplateCollection) | **GET** /core/v1/location-creation-template | Gets location template |
| [**postLocationCollection()**](LocationsApi.md#postLocationCollection) | **POST** /core/v1/locations | Create a new location |
| [**putLocationItem()**](LocationsApi.md#putLocationItem) | **PUT** /core/v1/locations/{id} | Update an existing location |


## `getLocationCollection()`

```php
getLocationCollection($id, $title, $location_id, $description, $page, $items_per_page, $deleted, $format): \Elmo\UserApi\Model\Location[]
```

Gets all the locations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | Exact match of id/s
$title = 'title_example'; // string | Exact/Partial match of title
$location_id = array('location_id_example'); // string[] | Exact match of the location code
$description = 'description_example'; // string | Exact/Partial match of descriptions
$page = 56; // int | Page number
$items_per_page = 56; // int | The number of items per page
$deleted = True; // bool | Type of locations to be returned
$format = 'format_example'; // string | Format for description field - 'HTML' preserves formatting (default), 'TEXT' removes HTML tags

try {
    $result = $apiInstance->getLocationCollection($id, $title, $location_id, $description, $page, $items_per_page, $deleted, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getLocationCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| Exact match of id/s | [optional] |
| **title** | **string**| Exact/Partial match of title | [optional] |
| **location_id** | [**string[]**](../Model/string.md)| Exact match of the location code | [optional] |
| **description** | **string**| Exact/Partial match of descriptions | [optional] |
| **page** | **int**| Page number | [optional] |
| **items_per_page** | **int**| The number of items per page | [optional] |
| **deleted** | **bool**| Type of locations to be returned | [optional] |
| **format** | **string**| Format for description field - &#39;HTML&#39; preserves formatting (default), &#39;TEXT&#39; removes HTML tags | [optional] |

### Return type

[**\Elmo\UserApi\Model\Location[]**](../Model/Location.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLocationItem()`

```php
getLocationItem($id, $format): \Elmo\UserApi\Model\Location
```

Gets a single location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier to retrieve the Location
$format = 'format_example'; // string | Format for description field - 'HTML' preserves formatting (default), 'TEXT' removes HTML tags

try {
    $result = $apiInstance->getLocationItem($id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getLocationItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier to retrieve the Location | |
| **format** | **string**| Format for description field - &#39;HTML&#39; preserves formatting (default), &#39;TEXT&#39; removes HTML tags | [optional] |

### Return type

[**\Elmo\UserApi\Model\Location**](../Model/Location.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLocationTemplateCollection()`

```php
getLocationTemplateCollection(): \Elmo\UserApi\Model\LocationTemplateEmployeeLed[]
```

Gets location template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getLocationTemplateCollection();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getLocationTemplateCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Elmo\UserApi\Model\LocationTemplateEmployeeLed[]**](../Model/LocationTemplateEmployeeLed.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postLocationCollection()`

```php
postLocationCollection($post_location_collection_request): \Elmo\UserApi\Model\LocationMutate
```

Create a new location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_location_collection_request = new \Elmo\UserApi\Model\PostLocationCollectionRequest(); // \Elmo\UserApi\Model\PostLocationCollectionRequest

try {
    $result = $apiInstance->postLocationCollection($post_location_collection_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->postLocationCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_location_collection_request** | [**\Elmo\UserApi\Model\PostLocationCollectionRequest**](../Model/PostLocationCollectionRequest.md)|  | |

### Return type

[**\Elmo\UserApi\Model\LocationMutate**](../Model/LocationMutate.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putLocationItem()`

```php
putLocationItem($id, $put_location_item_request): \Elmo\UserApi\Model\LocationMutate
```

Update an existing location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of the location to update
$put_location_item_request = new \Elmo\UserApi\Model\PutLocationItemRequest(); // \Elmo\UserApi\Model\PutLocationItemRequest

try {
    $result = $apiInstance->putLocationItem($id, $put_location_item_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->putLocationItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the location to update | |
| **put_location_item_request** | [**\Elmo\UserApi\Model\PutLocationItemRequest**](../Model/PutLocationItemRequest.md)|  | |

### Return type

[**\Elmo\UserApi\Model\LocationMutate**](../Model/LocationMutate.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
