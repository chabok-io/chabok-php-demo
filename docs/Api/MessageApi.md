# Swagger\Client\MessageApi

All URIs are relative to *https://sandbox.push.adpdigital.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**messageFetchById**](MessageApi.md#messageFetchById) | **GET** /messages/fetchById/{messageId} | Fetch a pushed message by id


# **messageFetchById**
> \Swagger\Client\Model\Message messageFetchById($message_id)

Fetch a pushed message by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiSecurity
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$api_instance = new Swagger\Client\Api\MessageApi();
$message_id = "message_id_example"; // string | 

try {
    $result = $api_instance->messageFetchById($message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->messageFetchById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\Message**](../Model/Message.md)

### Authorization

[ApiSecurity](../../README.md#ApiSecurity)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
