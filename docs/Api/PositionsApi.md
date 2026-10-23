# Elmo\UserApi\PositionsApi

All URIs are relative to https://api.elmotalent.com.au, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPositionCollection()**](PositionsApi.md#getPositionCollection) | **GET** /core/v1/positions | Gets all the positions |
| [**getPositionItem()**](PositionsApi.md#getPositionItem) | **GET** /core/v1/positions/{id} | Gets a single position |
| [**getPositionTemplateCollection()**](PositionsApi.md#getPositionTemplateCollection) | **GET** /core/v1/position-creation-template | Get position template schema |
| [**postPositionCollection()**](PositionsApi.md#postPositionCollection) | **POST** /core/v1/positions | Create a new position |
| [**putPositionItem()**](PositionsApi.md#putPositionItem) | **PUT** /core/v1/positions/{id} | Update an existing position |


## `getPositionCollection()`

```php
getPositionCollection($id, $title, $position_id, $description, $page, $items_per_page, $deleted, $format): \Elmo\UserApi\Model\Position[]
```

Gets all the positions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\PositionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | Exact match of id/s
$title = 'title_example'; // string | Exact/Partial match of title
$position_id = array('position_id_example'); // string[] | Exact match of the position code
$description = 'description_example'; // string | Exact/Partial match of descriptions
$page = 56; // int | Page number
$items_per_page = 56; // int | The number of items per page
$deleted = True; // bool | Type of positions to be returned
$format = 'format_example'; // string | Format for description field - 'HTML' preserves formatting (default), 'TEXT' removes HTML tags

try {
    $result = $apiInstance->getPositionCollection($id, $title, $position_id, $description, $page, $items_per_page, $deleted, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PositionsApi->getPositionCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| Exact match of id/s | [optional] |
| **title** | **string**| Exact/Partial match of title | [optional] |
| **position_id** | [**string[]**](../Model/string.md)| Exact match of the position code | [optional] |
| **description** | **string**| Exact/Partial match of descriptions | [optional] |
| **page** | **int**| Page number | [optional] |
| **items_per_page** | **int**| The number of items per page | [optional] |
| **deleted** | **bool**| Type of positions to be returned | [optional] |
| **format** | **string**| Format for description field - &#39;HTML&#39; preserves formatting (default), &#39;TEXT&#39; removes HTML tags | [optional] |

### Return type

[**\Elmo\UserApi\Model\Position[]**](../Model/Position.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPositionItem()`

```php
getPositionItem($id, $format): \Elmo\UserApi\Model\Position
```

Gets a single position

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\PositionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$format = 'format_example'; // string | Format for description field - 'HTML' preserves formatting (default), 'TEXT' removes HTML tags

try {
    $result = $apiInstance->getPositionItem($id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PositionsApi->getPositionItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **format** | **string**| Format for description field - &#39;HTML&#39; preserves formatting (default), &#39;TEXT&#39; removes HTML tags | [optional] |

### Return type

[**\Elmo\UserApi\Model\Position**](../Model/Position.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPositionTemplateCollection()`

```php
getPositionTemplateCollection(): \Elmo\UserApi\Model\PositionTemplateEmployeeLed
```

Get position template schema

Returns a JSON schema template for position creation, following the json-schema.org draft-04 specification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\PositionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPositionTemplateCollection();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PositionsApi->getPositionTemplateCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Elmo\UserApi\Model\PositionTemplateEmployeeLed**](../Model/PositionTemplateEmployeeLed.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPositionCollection()`

```php
postPositionCollection($post_position_collection_request): \Elmo\UserApi\Model\PositionMutate
```

Create a new position

**Note:** We do not support Custom Position Fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\PositionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_position_collection_request = new \Elmo\UserApi\Model\PostPositionCollectionRequest(); // \Elmo\UserApi\Model\PostPositionCollectionRequest

try {
    $result = $apiInstance->postPositionCollection($post_position_collection_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PositionsApi->postPositionCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_position_collection_request** | [**\Elmo\UserApi\Model\PostPositionCollectionRequest**](../Model/PostPositionCollectionRequest.md)|  | |

### Return type

[**\Elmo\UserApi\Model\PositionMutate**](../Model/PositionMutate.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPositionItem()`

```php
putPositionItem($id, $put_position_item_request): \Elmo\UserApi\Model\PositionMutate
```

Update an existing position

**Note:** We do not support Custom Position Fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\PositionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier of the position to update
$put_position_item_request = new \Elmo\UserApi\Model\PutPositionItemRequest(); // \Elmo\UserApi\Model\PutPositionItemRequest

try {
    $result = $apiInstance->putPositionItem($id, $put_position_item_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PositionsApi->putPositionItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier of the position to update | |
| **put_position_item_request** | [**\Elmo\UserApi\Model\PutPositionItemRequest**](../Model/PutPositionItemRequest.md)|  | |

### Return type

[**\Elmo\UserApi\Model\PositionMutate**](../Model/PositionMutate.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
