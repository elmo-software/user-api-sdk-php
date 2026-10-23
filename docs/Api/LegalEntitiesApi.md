# Elmo\UserApi\LegalEntitiesApi

All URIs are relative to https://api.elmotalent.com.au, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getLegalEntitityCollection()**](LegalEntitiesApi.md#getLegalEntitityCollection) | **GET** /core/v1/legal-entities | Gets all the legal entities |
| [**getLegalEntitiyItem()**](LegalEntitiesApi.md#getLegalEntitiyItem) | **GET** /core/v1/legal-entities/{id} | Gets a single legal entity |


## `getLegalEntitityCollection()`

```php
getLegalEntitityCollection($id, $business_name, $trading_name, $abn, $branch_number, $contact_name, $phone, $fax, $email, $page, $items_per_page): \Elmo\UserApi\Model\LegalEntity[]
```

Gets all the legal entities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\LegalEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | Exact match of id/s
$business_name = 'business_name_example'; // string
$trading_name = 'trading_name_example'; // string
$abn = 'abn_example'; // string
$branch_number = 'branch_number_example'; // string
$contact_name = 'contact_name_example'; // string
$phone = 'phone_example'; // string
$fax = 'fax_example'; // string
$email = 'email_example'; // string
$page = 56; // int | The collection page number
$items_per_page = 56; // int | The number of items per page

try {
    $result = $apiInstance->getLegalEntitityCollection($id, $business_name, $trading_name, $abn, $branch_number, $contact_name, $phone, $fax, $email, $page, $items_per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegalEntitiesApi->getLegalEntitityCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| Exact match of id/s | [optional] |
| **business_name** | **string**|  | [optional] |
| **trading_name** | **string**|  | [optional] |
| **abn** | **string**|  | [optional] |
| **branch_number** | **string**|  | [optional] |
| **contact_name** | **string**|  | [optional] |
| **phone** | **string**|  | [optional] |
| **fax** | **string**|  | [optional] |
| **email** | **string**|  | [optional] |
| **page** | **int**| The collection page number | [optional] |
| **items_per_page** | **int**| The number of items per page | [optional] |

### Return type

[**\Elmo\UserApi\Model\LegalEntity[]**](../Model/LegalEntity.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLegalEntitiyItem()`

```php
getLegalEntitiyItem($id): \Elmo\UserApi\Model\LegalEntity
```

Gets a single legal entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\LegalEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier to retrieve the legal entity

try {
    $result = $apiInstance->getLegalEntitiyItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LegalEntitiesApi->getLegalEntitiyItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identifier to retrieve the legal entity | |

### Return type

[**\Elmo\UserApi\Model\LegalEntity**](../Model/LegalEntity.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
