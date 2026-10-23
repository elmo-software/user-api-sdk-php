# Elmo\UserApi\MetadataApi

All URIs are relative to https://api.elmotalent.com.au, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPersonalContactDetailsMetadataCollection()**](MetadataApi.md#getPersonalContactDetailsMetadataCollection) | **GET** /core/v1/metadata/personal-contact-details | Get metadata of configurable personal contact detail fields |
| [**getPositionCustomFieldsMetadataCollection()**](MetadataApi.md#getPositionCustomFieldsMetadataCollection) | **GET** /core/v1/metadata/position | Get metadata of configurable Position fields |
| [**getUserMetadataCollection()**](MetadataApi.md#getUserMetadataCollection) | **GET** /core/v1/metadata/user | Gets metadata of configurable User fields |


## `getPersonalContactDetailsMetadataCollection()`

```php
getPersonalContactDetailsMetadataCollection(): \Elmo\UserApi\Model\PropertyMetadata[]
```

Get metadata of configurable personal contact detail fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPersonalContactDetailsMetadataCollection();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->getPersonalContactDetailsMetadataCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Elmo\UserApi\Model\PropertyMetadata[]**](../Model/PropertyMetadata.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPositionCustomFieldsMetadataCollection()`

```php
getPositionCustomFieldsMetadataCollection(): \Elmo\UserApi\Model\PropertyMetadata[]
```

Get metadata of configurable Position fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPositionCustomFieldsMetadataCollection();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->getPositionCustomFieldsMetadataCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Elmo\UserApi\Model\PropertyMetadata[]**](../Model/PropertyMetadata.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserMetadataCollection()`

```php
getUserMetadataCollection(): \Elmo\UserApi\Model\PropertyMetadata[]
```

Gets metadata of configurable User fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserMetadataCollection();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->getUserMetadataCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Elmo\UserApi\Model\PropertyMetadata[]**](../Model/PropertyMetadata.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
