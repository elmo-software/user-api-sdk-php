# Elmo\UserApi\CandidatesApi

All URIs are relative to https://api.elmotalent.com.au, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCandidates()**](CandidatesApi.md#getCandidates) | **GET** /recruitment/v1/candidates | Get a list of candidates |


## `getCandidates()`

```php
getCandidates($page, $items_per_page, $id, $first_name, $last_name, $email, $home_phone, $mobile): \Elmo\UserApi\Model\CandidateListResponse
```

Get a list of candidates

Get a list of candidates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Elmo\UserApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Elmo\UserApi\Api\CandidatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number
$items_per_page = 56; // int | Number of items per page
$id = 'id_example'; // string | Candidate ID
$first_name = 'first_name_example'; // string | Candidate's first name
$last_name = 'last_name_example'; // string | Candidate's last name
$email = 'email_example'; // string | Candidate's email
$home_phone = 'home_phone_example'; // string | Candidate's home phone
$mobile = 'mobile_example'; // string | Candidate's mobile

try {
    $result = $apiInstance->getCandidates($page, $items_per_page, $id, $first_name, $last_name, $email, $home_phone, $mobile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CandidatesApi->getCandidates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number | [optional] |
| **items_per_page** | **int**| Number of items per page | [optional] |
| **id** | **string**| Candidate ID | [optional] |
| **first_name** | **string**| Candidate&#39;s first name | [optional] |
| **last_name** | **string**| Candidate&#39;s last name | [optional] |
| **email** | **string**| Candidate&#39;s email | [optional] |
| **home_phone** | **string**| Candidate&#39;s home phone | [optional] |
| **mobile** | **string**| Candidate&#39;s mobile | [optional] |

### Return type

[**\Elmo\UserApi\Model\CandidateListResponse**](../Model/CandidateListResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
