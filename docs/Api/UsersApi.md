# Elmo\UserApi\UsersApi

All URIs are relative to https://api.elmotalent.com.au, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPersonalContactDetails()**](UsersApi.md#getPersonalContactDetails) | **GET** /core/v1/users/{id}/personal-contact-details | Gets personal contact details of a user |
| [**getUserCollection()**](UsersApi.md#getUserCollection) | **GET** /core/v1/users | Gets all the users |
| [**getUserItem()**](UsersApi.md#getUserItem) | **GET** /core/v1/users/{id} | Gets a single user |
| [**postActivate()**](UsersApi.md#postActivate) | **POST** /core/v1/users/{id}/activate | Activate a user |
| [**postDeactivate()**](UsersApi.md#postDeactivate) | **POST** /core/v1/users/{id}/deactivate | Deactivate a user |
| [**putPersonalContactDetails()**](UsersApi.md#putPersonalContactDetails) | **PUT** /core/v1/users/{id}/personal-contact-details | Update personal contact details of a user |


## `getPersonalContactDetails()`

```php
getPersonalContactDetails($id): \Elmo\UserApi\Model\PersonalContactDetails
```

Gets personal contact details of a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getPersonalContactDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getPersonalContactDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Elmo\UserApi\Model\PersonalContactDetails**](../Model/PersonalContactDetails.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserCollection()`

```php
getUserCollection($id, $first_name, $last_name, $email, $page, $items_per_page, $deleted, $exclude_vendor_users): \Elmo\UserApi\Model\User[]
```

Gets all the users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = array('id_example'); // string[] | Exact match of Id/s
$first_name = 'first_name_example'; // string | Exact/Partial match of first name
$last_name = 'last_name_example'; // string | Exact/Partial match of last name
$email = 'email_example'; // string | Exact/Partial match of email
$page = 56; // int | Page number
$items_per_page = 56; // int | The number of items per page
$deleted = True; // bool | Type of Users to be returned
$exclude_vendor_users = True; // bool | Exclude vendor users from the response

try {
    $result = $apiInstance->getUserCollection($id, $first_name, $last_name, $email, $page, $items_per_page, $deleted, $exclude_vendor_users);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | [**string[]**](../Model/string.md)| Exact match of Id/s | [optional] |
| **first_name** | **string**| Exact/Partial match of first name | [optional] |
| **last_name** | **string**| Exact/Partial match of last name | [optional] |
| **email** | **string**| Exact/Partial match of email | [optional] |
| **page** | **int**| Page number | [optional] |
| **items_per_page** | **int**| The number of items per page | [optional] |
| **deleted** | **bool**| Type of Users to be returned | [optional] |
| **exclude_vendor_users** | **bool**| Exclude vendor users from the response | [optional] |

### Return type

[**\Elmo\UserApi\Model\User[]**](../Model/User.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserItem()`

```php
getUserItem($id): \Elmo\UserApi\Model\User
```

Gets a single user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getUserItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Elmo\UserApi\Model\User**](../Model/User.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postActivate()`

```php
postActivate($id): \Elmo\UserApi\Model\MutationResponse
```

Activate a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->postActivate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postActivate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Elmo\UserApi\Model\MutationResponse**](../Model/MutationResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDeactivate()`

```php
postDeactivate($id): \Elmo\UserApi\Model\MutationResponse
```

Deactivate a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->postDeactivate($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postDeactivate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Elmo\UserApi\Model\MutationResponse**](../Model/MutationResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putPersonalContactDetails()`

```php
putPersonalContactDetails($id, $put_personal_contact_details_request): \Elmo\UserApi\Model\PersonalContactDetailsMutate
```

Update personal contact details of a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$put_personal_contact_details_request = new \Elmo\UserApi\Model\PutPersonalContactDetailsRequest(); // \Elmo\UserApi\Model\PutPersonalContactDetailsRequest

try {
    $result = $apiInstance->putPersonalContactDetails($id, $put_personal_contact_details_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->putPersonalContactDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **put_personal_contact_details_request** | [**\Elmo\UserApi\Model\PutPersonalContactDetailsRequest**](../Model/PutPersonalContactDetailsRequest.md)|  | [optional] |

### Return type

[**\Elmo\UserApi\Model\PersonalContactDetailsMutate**](../Model/PersonalContactDetailsMutate.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
