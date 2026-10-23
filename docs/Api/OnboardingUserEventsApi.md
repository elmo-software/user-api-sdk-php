# Elmo\UserApi\OnboardingUserEventsApi

All URIs are relative to https://api.elmotalent.com.au, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOnboardingUserCreationEventItem()**](OnboardingUserEventsApi.md#getOnboardingUserCreationEventItem) | **GET** /core/v1/onboarding-user-creation-events/{id} | Retrieves specific onboarding user creation event |
| [**getOnboardingUserUpdateEventItem()**](OnboardingUserEventsApi.md#getOnboardingUserUpdateEventItem) | **GET** /core/v1/onboarding-user-update-events/{id} | Retrieves specific onboarding user update event |
| [**getOnboardingusercreationtemplateOnboardingUserCreationTemplateCollection()**](OnboardingUserEventsApi.md#getOnboardingusercreationtemplateOnboardingUserCreationTemplateCollection) | **GET** /core/v1/onboarding-user-creation-template | Get all the profile data of an onboarding user |
| [**postOnboardingUserCreationEventCollection()**](OnboardingUserEventsApi.md#postOnboardingUserCreationEventCollection) | **POST** /core/v1/onboarding-user-creation-events | Triggers an event to create a new onboarding user |
| [**updateOnboardingUserCreationEventCollection()**](OnboardingUserEventsApi.md#updateOnboardingUserCreationEventCollection) | **POST** /core/v1/onboarding-user-update-events | Triggers an event to update an existing onboarding user. |


## `getOnboardingUserCreationEventItem()`

```php
getOnboardingUserCreationEventItem($id): \Elmo\UserApi\Model\OnboardingUserEvents
```

Retrieves specific onboarding user creation event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\OnboardingUserEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getOnboardingUserCreationEventItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingUserEventsApi->getOnboardingUserCreationEventItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Elmo\UserApi\Model\OnboardingUserEvents**](../Model/OnboardingUserEvents.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOnboardingUserUpdateEventItem()`

```php
getOnboardingUserUpdateEventItem($id): \Elmo\UserApi\Model\OnboardingUserEvents
```

Retrieves specific onboarding user update event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\OnboardingUserEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getOnboardingUserUpdateEventItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingUserEventsApi->getOnboardingUserUpdateEventItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Elmo\UserApi\Model\OnboardingUserEvents**](../Model/OnboardingUserEvents.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOnboardingusercreationtemplateOnboardingUserCreationTemplateCollection()`

```php
getOnboardingusercreationtemplateOnboardingUserCreationTemplateCollection(): \Elmo\UserApi\Model\OnboardingUserCreationTemplate
```

Get all the profile data of an onboarding user

If the ability to set custom field values of type checkbox, menu, or tiered menu is required, then the Accept Header must include value \"application/vnd.elmo.core.user.v2+json\" This will ensure that the endpoint returns the schema to set the standard onboarding user profile fields and the custom field types, which includes custom text, date, menu, tiered menu, or checkbox fields. Do note, this format version option is an early Beta release.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\OnboardingUserEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getOnboardingusercreationtemplateOnboardingUserCreationTemplateCollection();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingUserEventsApi->getOnboardingusercreationtemplateOnboardingUserCreationTemplateCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Elmo\UserApi\Model\OnboardingUserCreationTemplate**](../Model/OnboardingUserCreationTemplate.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.elmo.core.user.v2+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOnboardingUserCreationEventCollection()`

```php
postOnboardingUserCreationEventCollection($body): \Elmo\UserApi\Model\OnboardingUserEvents
```

Triggers an event to create a new onboarding user

The word **Event** is used to highlight asynchronous requests. Instead of creating a new onboarding user, you are Posting an event that will **eventually** create a new user. After your payload is validated, you get back a user event id. You then need to fire a request at `GET onboarding-user-creation-events/{id}` to get the newly created user's id.  Because the payload for creating a user varies and is a fluid schema (schema changes based on configurations), you need to get the template by visiting `GET /onboarding-user-creation-template`.  Onboarding User will be created with role \"Employee\" by default.  If the ability to set custom field values of type checkbox, menu, or tiered menu is required, then the Accept Header must include the value \"application/vnd.elmo.core.user.v2+json\" This will ensure that the endpoint supports updating both the standard onboarding user profile fields and the custom field types, which include text fields, date fields, menus, tiered menus, or checkboxes. Do note, this format version option is an early Beta release.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\OnboardingUserEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->postOnboardingUserCreationEventCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingUserEventsApi->postOnboardingUserCreationEventCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**|  | [optional] |

### Return type

[**\Elmo\UserApi\Model\OnboardingUserEvents**](../Model/OnboardingUserEvents.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.elmo.core.user.v2+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateOnboardingUserCreationEventCollection()`

```php
updateOnboardingUserCreationEventCollection($body): \Elmo\UserApi\Model\OnboardingUserEvents
```

Triggers an event to update an existing onboarding user.

The word **Event** is used to highlight asynchronous requests. Instead of updating an onboarding user, you are Posting an event that will **eventually** update a new user. After your payload is validated, you get back a user event id. You then need to fire a request at `GET onboarding-user-update-events/{id}` to get the status of update event.  Because the payload for updating an onboarding user varies and is a fluid schema (schema changes based on configurations), you need to get the template by visiting `GET /onboarding-user-creation-template`.  If the ability to set custom field values of type checkbox, menu, or tiered menu is required, then the Accept Header must include the value \"application/vnd.elmo.core.user.v2+json\" This will ensure that the endpoint supports updating both the standard onboarding user profile fields and the custom field types, which include text fields, date fields, menus, tiered menus, or checkboxes. Do note, this format version option is an early Beta release.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\OnboardingUserEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->updateOnboardingUserCreationEventCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnboardingUserEventsApi->updateOnboardingUserCreationEventCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**|  | [optional] |

### Return type

[**\Elmo\UserApi\Model\OnboardingUserEvents**](../Model/OnboardingUserEvents.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.elmo.core.user.v2+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
