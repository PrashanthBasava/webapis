# Khash\KountRisAppApi

All URIs are relative to *http://localhost:51122*

Method | HTTP request | Description
------------- | ------------- | -------------
[**kountRisAppPost**](KountRisAppApi.md#kountRisAppPost) | **POST** /api/KountRisApp | 


# **kountRisAppPost**
> string kountRisAppPost($_product_details)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Khash\Api\KountRisAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$_product_details = new \Khash\Khash\ProductDetails(); // \Khash\Khash\ProductDetails | 

try {
    $result = $apiInstance->kountRisAppPost($_product_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KountRisAppApi->kountRisAppPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_product_details** | [**\Khash\Khash\ProductDetails**](../Model/ProductDetails.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

