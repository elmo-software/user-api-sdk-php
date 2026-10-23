# Elmo\UserApi\UserEventsApi

All URIs are relative to https://api.elmotalent.com.au, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUserCreationEventItem()**](UserEventsApi.md#getUserCreationEventItem) | **GET** /core/v1/user-creation-events/{id} | Retrieves specific user creation event |
| [**getUserUpdateEventItem()**](UserEventsApi.md#getUserUpdateEventItem) | **GET** /core/v1/user-update-events/{id} | Retrieves specific user update event |
| [**getUsercreationtemplateUserCreationTemplateCollection()**](UserEventsApi.md#getUsercreationtemplateUserCreationTemplateCollection) | **GET** /core/v1/user-creation-template | Get all the profile data of a user |
| [**postUserCreationEventCollection()**](UserEventsApi.md#postUserCreationEventCollection) | **POST** /core/v1/user-creation-events | Triggers an event to create a new user |
| [**updateUserCreationEventCollection()**](UserEventsApi.md#updateUserCreationEventCollection) | **POST** /core/v1/user-update-events | Triggers an event to update an existing user. |


## `getUserCreationEventItem()`

```php
getUserCreationEventItem($id): \Elmo\UserApi\Model\UserEvents
```

Retrieves specific user creation event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\UserEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getUserCreationEventItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserEventsApi->getUserCreationEventItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Elmo\UserApi\Model\UserEvents**](../Model/UserEvents.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserUpdateEventItem()`

```php
getUserUpdateEventItem($id): \Elmo\UserApi\Model\UserEvents
```

Retrieves specific user update event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\UserEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getUserUpdateEventItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserEventsApi->getUserUpdateEventItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\Elmo\UserApi\Model\UserEvents**](../Model/UserEvents.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsercreationtemplateUserCreationTemplateCollection()`

```php
getUsercreationtemplateUserCreationTemplateCollection(): \Elmo\UserApi\Model\UserCreationTemplate
```

Get all the profile data of a user

If the ability to set custom field values of type checkbox, menu, or tiered menu is required, then the Accept Header must include the value \"application/vnd.elmo.core.user.v2+json\" This will ensure that the endpoint returns the schema to set the standard user profile fields and the custom field types, which includes custom text, date, menu, tiered menu, or checkbox fields. Do note, this format version option is an early Beta release.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\UserEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUsercreationtemplateUserCreationTemplateCollection();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserEventsApi->getUsercreationtemplateUserCreationTemplateCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Elmo\UserApi\Model\UserCreationTemplate**](../Model/UserCreationTemplate.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.elmo.core.user.v2+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUserCreationEventCollection()`

```php
postUserCreationEventCollection($body): \Elmo\UserApi\Model\UserEvents
```

Triggers an event to create a new user

The word **Event** is used to highlight asynchronous requests. Instead of creating a new user, you are Posting an event that will **eventually** create a new user. After your payload is validated, you get back a user event id. You then need to fire a request at `GET user-creation-events/{id}` to get the newly created user's id.  Because the payload for creating a user varies and is a fluid schema (schema changes based on configurations), you need to get the template by visiting `GET /user-creation-template`.  User will be created with role \"Employee\" by default.  If the ability to set custom field values of type checkbox, menu, or tiered menu is required, then the Accept Header must include the value \"application/vnd.elmo.core.user.v2+json\" This will ensure that the endpoint supports updating both the standard user profile fields and the custom field types, which include text fields, date fields, menus, tiered menus, or checkboxes. Do note, this format version option is an early Beta release.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\UserEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->postUserCreationEventCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserEventsApi->postUserCreationEventCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**|  | [optional] |

### Return type

[**\Elmo\UserApi\Model\UserEvents**](../Model/UserEvents.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.elmo.core.user.v2+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserCreationEventCollection()`

```php
updateUserCreationEventCollection($body): \Elmo\UserApi\Model\UserEvents
```

Triggers an event to update an existing user.

The word **Event** is used to highlight asynchronous requests. Instead of updating a user, you are Posting an event that will **eventually** update a new user. After your payload is validated, you get back a user event id. You then need to fire a request at `GET user-update-events/{id}` to get the status of update event.  Because the payload for updating a user varies and is a fluid schema (schema changes based on configurations), you need to get the template by visiting `GET /user-creation-template`.  If the ability to set custom field values of type checkbox, menu, or tiered menu is required, then the Accept Header must include the value \"application/vnd.elmo.core.user.v2+json\" This will ensure that the endpoint supports updating both the standard user profile fields and the custom field types, which include text fields, date fields, menus, tiered menus, or checkboxes. Do note, this format version option is an early Beta release.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\UserEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->updateUserCreationEventCollection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserEventsApi->updateUserCreationEventCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**|  | [optional] |

### Return type

[**\Elmo\UserApi\Model\UserEvents**](../Model/UserEvents.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/vnd.elmo.core.user.v2+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
