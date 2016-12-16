# Swagger\Client\DefaultApi

All URIs are relative to *http://10.0.0.127/appbox/framework-siwiat/ab/index.php/json/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getChannelsResponse**](DefaultApi.md#getChannelsResponse) | **GET** /getchannels | Get channels
[**getValuesResponse**](DefaultApi.md#getValuesResponse) | **GET** /getvalues | Get channel values


# **getChannelsResponse**
> \Swagger\Client\Model\GetChannelsResponse getChannelsResponse()

Get channels

Get all available channels

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();

try {
    $result = $api_instance->getChannelsResponse();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getChannelsResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GetChannelsResponse**](../Model/GetChannelsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getValuesResponse**
> \Swagger\Client\Model\GetValuesResponse getValuesResponse($valueids)

Get channel values

Get channel values by the {valueid}

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$valueids = "valueids_example"; // string | The value id of a channel

try {
    $result = $api_instance->getValuesResponse($valueids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getValuesResponse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **valueids** | **string**| The value id of a channel |

### Return type

[**\Swagger\Client\Model\GetValuesResponse**](../Model/GetValuesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

