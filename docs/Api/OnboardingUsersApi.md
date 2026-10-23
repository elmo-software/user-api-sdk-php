# Elmo\UserApi\OnboardingUsersApi

All URIs are relative to https://api.elmotalent.com.au, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOnboardingUserCollection()**](OnboardingUsersApi.md#getOnboardingUserCollection) | **GET** /core/v1/onboarding-users | Gets all the onboarding users |
| [**getOnboardingUserItem()**](OnboardingUsersApi.md#getOnboardingUserItem) | **GET** /core/v1/onboarding-users/{id} | Gets a single onboarding user |
| [**postOnboardingUserConvert()**](OnboardingUsersApi.md#postOnboardingUserConvert) | **POST** /core/v1/onboarding-users/{id}/convert | Converts a single onboarding user to a general user |


## `getOnboardingUserCollection()`

```php
getOnboardingUserCollection($id, $first_name, $last_name, $email, $page, $items_per_page, $deleted): \Elmo\UserApi\Model\OnboardingUser[]
```

Gets all the onboarding users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\OnboardingUsersApi(
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
$deleted = True; // bool | Type of Onboarding Users to be returned

try {
    $result = $apiInstance->getOnboardingUserCollection($id, $first_name, $last_name, $email, $page, $items_per_page, $deleted);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingUsersApi->getOnboardingUserCollection: ', $e->getMessage(), PHP_EOL;
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
| **deleted** | **bool**| Type of Onboarding Users to be returned | [optional] |

### Return type

[**\Elmo\UserApi\Model\OnboardingUser[]**](../Model/OnboardingUser.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOnboardingUserItem()`

```php
getOnboardingUserItem($id): \Elmo\UserApi\Model\OnboardingUser
```

Gets a single onboarding user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\OnboardingUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getOnboardingUserItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingUsersApi->getOnboardingUserItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Elmo\UserApi\Model\OnboardingUser**](../Model/OnboardingUser.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOnboardingUserConvert()`

```php
postOnboardingUserConvert($id): \Elmo\UserApi\Model\CommonMutationResponse
```

Converts a single onboarding user to a general user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\OnboardingUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->postOnboardingUserConvert($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingUsersApi->postOnboardingUserConvert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Elmo\UserApi\Model\CommonMutationResponse**](../Model/CommonMutationResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
