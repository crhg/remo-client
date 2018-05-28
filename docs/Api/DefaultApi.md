# Crhg\RemoClient\DefaultApi

All URIs are relative to *https://api.nature.global/1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**applianceOrdersPost**](DefaultApi.md#applianceOrdersPost) | **POST** /appliance_orders | 
[**appliancesApplianceAirconSettingsPost**](DefaultApi.md#appliancesApplianceAirconSettingsPost) | **POST** /appliances/{appliance}/aircon_settings | 
[**appliancesApplianceDeletePost**](DefaultApi.md#appliancesApplianceDeletePost) | **POST** /appliances/{appliance}/delete | 
[**appliancesAppliancePost**](DefaultApi.md#appliancesAppliancePost) | **POST** /appliances/{appliance} | 
[**appliancesApplianceSignalOrdersPost**](DefaultApi.md#appliancesApplianceSignalOrdersPost) | **POST** /appliances/{appliance}/signal_orders | 
[**appliancesApplianceSignalsGet**](DefaultApi.md#appliancesApplianceSignalsGet) | **GET** /appliances/{appliance}/signals | 
[**appliancesApplianceSignalsPost**](DefaultApi.md#appliancesApplianceSignalsPost) | **POST** /appliances/{appliance}/signals | 
[**appliancesGet**](DefaultApi.md#appliancesGet) | **GET** /appliances | 
[**appliancesPost**](DefaultApi.md#appliancesPost) | **POST** /appliances | 
[**detectappliancePost**](DefaultApi.md#detectappliancePost) | **POST** /detectappliance | 
[**devicesDeviceDeletePost**](DefaultApi.md#devicesDeviceDeletePost) | **POST** /devices/{device}/delete | 
[**devicesDeviceHumidityOffsetPost**](DefaultApi.md#devicesDeviceHumidityOffsetPost) | **POST** /devices/{device}/humidity_offset | 
[**devicesDevicePost**](DefaultApi.md#devicesDevicePost) | **POST** /devices/{device} | 
[**devicesDeviceTemperatureOffsetPost**](DefaultApi.md#devicesDeviceTemperatureOffsetPost) | **POST** /devices/{device}/temperature_offset | 
[**devicesGet**](DefaultApi.md#devicesGet) | **GET** /devices | 
[**signalsSignalDeletePost**](DefaultApi.md#signalsSignalDeletePost) | **POST** /signals/{signal}/delete | 
[**signalsSignalPost**](DefaultApi.md#signalsSignalPost) | **POST** /signals/{signal} | 
[**signalsSignalSendPost**](DefaultApi.md#signalsSignalSendPost) | **POST** /signals/{signal}/send | 
[**usersMeGet**](DefaultApi.md#usersMeGet) | **GET** /users/me | 
[**usersMePost**](DefaultApi.md#usersMePost) | **POST** /users/me | 


# **applianceOrdersPost**
> applianceOrdersPost($appliances)



Reorder appliances.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Crhg\RemoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Crhg\RemoClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$appliances = "appliances_example"; // string | List of all appliances' IDs comma separated

try {
    $apiInstance->applianceOrdersPost($appliances);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->applianceOrdersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appliances** | **string**| List of all appliances&#39; IDs comma separated |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appliancesApplianceAirconSettingsPost**
> appliancesApplianceAirconSettingsPost($appliance, $temperature, $operation_mode, $air_volume, $air_direction, $button)



Update air conditioner settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Crhg\RemoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Crhg\RemoClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$appliance = "appliance_example"; // string | Appliance ID.
$temperature = "temperature_example"; // string | Temperature
$operation_mode = "operation_mode_example"; // string | AC operation mode
$air_volume = "air_volume_example"; // string | AC air volume
$air_direction = "air_direction_example"; // string | AC air direction
$button = "button_example"; // string | Button

try {
    $apiInstance->appliancesApplianceAirconSettingsPost($appliance, $temperature, $operation_mode, $air_volume, $air_direction, $button);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appliancesApplianceAirconSettingsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appliance** | **string**| Appliance ID. |
 **temperature** | **string**| Temperature | [optional]
 **operation_mode** | **string**| AC operation mode | [optional]
 **air_volume** | **string**| AC air volume | [optional]
 **air_direction** | **string**| AC air direction | [optional]
 **button** | **string**| Button | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appliancesApplianceDeletePost**
> appliancesApplianceDeletePost($appliance)



Delete appliance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Crhg\RemoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Crhg\RemoClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$appliance = "appliance_example"; // string | Appliance ID.

try {
    $apiInstance->appliancesApplianceDeletePost($appliance);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appliancesApplianceDeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appliance** | **string**| Appliance ID. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appliancesAppliancePost**
> \Crhg\RemoClient\Model\Appliance appliancesAppliancePost($appliance, $image, $nickname)



Update appliance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Crhg\RemoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Crhg\RemoClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$appliance = "appliance_example"; // string | Appliance ID.
$image = "image_example"; // string | Basename of the image file included in the app. Ex: \"ico_ac_1\"
$nickname = "nickname_example"; // string | Appliance name

try {
    $result = $apiInstance->appliancesAppliancePost($appliance, $image, $nickname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appliancesAppliancePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appliance** | **string**| Appliance ID. |
 **image** | **string**| Basename of the image file included in the app. Ex: \&quot;ico_ac_1\&quot; |
 **nickname** | **string**| Appliance name |

### Return type

[**\Crhg\RemoClient\Model\Appliance**](../Model/Appliance.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appliancesApplianceSignalOrdersPost**
> appliancesApplianceSignalOrdersPost($appliance, $signals)



Reorder signals under this appliance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Crhg\RemoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Crhg\RemoClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$appliance = "appliance_example"; // string | Appliance ID.
$signals = "signals_example"; // string | List of all signals' IDs comma separated

try {
    $apiInstance->appliancesApplianceSignalOrdersPost($appliance, $signals);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appliancesApplianceSignalOrdersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appliance** | **string**| Appliance ID. |
 **signals** | **string**| List of all signals&#39; IDs comma separated |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appliancesApplianceSignalsGet**
> \Crhg\RemoClient\Model\Signal[] appliancesApplianceSignalsGet($appliance)



Fetch signals registered under this appliance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Crhg\RemoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Crhg\RemoClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$appliance = "appliance_example"; // string | Appliance ID.

try {
    $result = $apiInstance->appliancesApplianceSignalsGet($appliance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appliancesApplianceSignalsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appliance** | **string**| Appliance ID. |

### Return type

[**\Crhg\RemoClient\Model\Signal[]**](../Model/Signal.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appliancesApplianceSignalsPost**
> \Crhg\RemoClient\Model\Signal appliancesApplianceSignalsPost($message, $appliance, $image, $name)



Create a signal under this appliance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Crhg\RemoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Crhg\RemoClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message = "\"{\\\\\\\"freq\\\\\\\":38,\\\\\\\"data\\\\\\\":[2523,2717,786,903,777,924,763,1964,768,1958,769,1955,772,1953,773,914,770,902,786,54147,2523,2721,782,920,761,924,773,1936,779,1948,784,1957,768,1942,784,921,758,924,772],\\\\\\\"format\\\\\\\":\\\\\\\"us\\\\\\\"}\\n\""; // string | JSON serialized object describing infrared signals. Includes \"data\", \"freq\" and \"format\" keys.
$appliance = "appliance_example"; // string | Appliance ID.
$image = "image_example"; // string | Basename of the image file included in the app. Ex: \"ico_io\"
$name = "name_example"; // string | Signal name

try {
    $result = $apiInstance->appliancesApplianceSignalsPost($message, $appliance, $image, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appliancesApplianceSignalsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | **string**| JSON serialized object describing infrared signals. Includes \&quot;data\&quot;, \&quot;freq\&quot; and \&quot;format\&quot; keys. |
 **appliance** | **string**| Appliance ID. |
 **image** | **string**| Basename of the image file included in the app. Ex: \&quot;ico_io\&quot; |
 **name** | **string**| Signal name |

### Return type

[**\Crhg\RemoClient\Model\Signal**](../Model/Signal.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appliancesGet**
> \Crhg\RemoClient\Model\Appliance[] appliancesGet()



Fetch the list of appliances.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Crhg\RemoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Crhg\RemoClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->appliancesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appliancesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Crhg\RemoClient\Model\Appliance[]**](../Model/Appliance.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **appliancesPost**
> \Crhg\RemoClient\Model\Appliance appliancesPost($nickname, $device, $image, $model)



Create a new appliance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Crhg\RemoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Crhg\RemoClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nickname = "nickname_example"; // string | Appliance name
$device = "device_example"; // string | Device ID
$image = "image_example"; // string | Basename of the image file included in the app. Ex: \"ico_ac_1\"
$model = "model_example"; // string | ApplianceModel ID if the appliance we're trying to create is included in IRDB.

try {
    $result = $apiInstance->appliancesPost($nickname, $device, $image, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->appliancesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nickname** | **string**| Appliance name |
 **device** | **string**| Device ID |
 **image** | **string**| Basename of the image file included in the app. Ex: \&quot;ico_ac_1\&quot; |
 **model** | **string**| ApplianceModel ID if the appliance we&#39;re trying to create is included in IRDB. | [optional]

### Return type

[**\Crhg\RemoClient\Model\Appliance**](../Model/Appliance.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detectappliancePost**
> \Crhg\RemoClient\Model\ApplianceModelAndParam[] detectappliancePost($message)



Find the air conditioner best matching the provided infrared signal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Crhg\RemoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Crhg\RemoClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message = "\"{\\\\\\\"freq\\\\\\\":38,\\\\\\\"data\\\\\\\":[2523,2717,786,903,777,924,763,1964,768,1958,769,1955,772,1953,773,914,770,902,786,54147,2523,2721,782,920,761,924,773,1936,779,1948,784,1957,768,1942,784,921,758,924,772],\\\\\\\"format\\\\\\\":\\\\\\\"us\\\\\\\"}\\n\""; // string | JSON serialized object describing infrared signals. Includes \"data\", \"freq\" and \"format\" keys.

try {
    $result = $apiInstance->detectappliancePost($message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->detectappliancePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | **string**| JSON serialized object describing infrared signals. Includes \&quot;data\&quot;, \&quot;freq\&quot; and \&quot;format\&quot; keys. |

### Return type

[**\Crhg\RemoClient\Model\ApplianceModelAndParam[]**](../Model/ApplianceModelAndParam.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicesDeviceDeletePost**
> devicesDeviceDeletePost($device)



Delete Remo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Crhg\RemoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Crhg\RemoClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device = "device_example"; // string | Device ID.

try {
    $apiInstance->devicesDeviceDeletePost($device);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->devicesDeviceDeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device** | **string**| Device ID. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicesDeviceHumidityOffsetPost**
> devicesDeviceHumidityOffsetPost($device, $offset)



Update humidity offset.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Crhg\RemoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Crhg\RemoClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device = "device_example"; // string | Device ID.
$offset = 56; // int | Humidity offset value added to the measured humidity.

try {
    $apiInstance->devicesDeviceHumidityOffsetPost($device, $offset);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->devicesDeviceHumidityOffsetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device** | **string**| Device ID. |
 **offset** | **int**| Humidity offset value added to the measured humidity. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicesDevicePost**
> devicesDevicePost($device, $name)



Update Remo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Crhg\RemoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Crhg\RemoClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device = "device_example"; // string | Device ID.
$name = "name_example"; // string | Signal name

try {
    $apiInstance->devicesDevicePost($device, $name);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->devicesDevicePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device** | **string**| Device ID. |
 **name** | **string**| Signal name |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicesDeviceTemperatureOffsetPost**
> devicesDeviceTemperatureOffsetPost($device, $offset)



Update temperature offset.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Crhg\RemoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Crhg\RemoClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device = "device_example"; // string | Device ID.
$offset = 56; // int | Temperature offset value added to the measured temperature.

try {
    $apiInstance->devicesDeviceTemperatureOffsetPost($device, $offset);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->devicesDeviceTemperatureOffsetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device** | **string**| Device ID. |
 **offset** | **int**| Temperature offset value added to the measured temperature. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **devicesGet**
> \Crhg\RemoClient\Model\Devices devicesGet()



Fetch the list of Remo devices the user has access to.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Crhg\RemoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Crhg\RemoClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->devicesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->devicesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Crhg\RemoClient\Model\Devices**](../Model/Devices.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signalsSignalDeletePost**
> signalsSignalDeletePost($signal)



Delete an infrared signal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Crhg\RemoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Crhg\RemoClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signal = "signal_example"; // string | Signal ID.

try {
    $apiInstance->signalsSignalDeletePost($signal);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->signalsSignalDeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signal** | **string**| Signal ID. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signalsSignalPost**
> signalsSignalPost($signal, $image, $name)



Update infrared signal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Crhg\RemoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Crhg\RemoClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signal = "signal_example"; // string | Signal ID.
$image = "image_example"; // string | Basename of the image file included in the app. Ex: \"ico_io\"
$name = "name_example"; // string | Signal name

try {
    $apiInstance->signalsSignalPost($signal, $image, $name);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->signalsSignalPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signal** | **string**| Signal ID. |
 **image** | **string**| Basename of the image file included in the app. Ex: \&quot;ico_io\&quot; |
 **name** | **string**| Signal name |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signalsSignalSendPost**
> signalsSignalSendPost($signal)



Send infrared signal.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Crhg\RemoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Crhg\RemoClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signal = "signal_example"; // string | Signal ID.

try {
    $apiInstance->signalsSignalSendPost($signal);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->signalsSignalSendPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signal** | **string**| Signal ID. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersMeGet**
> \Crhg\RemoClient\Model\User usersMeGet()



Fetch the authenticated user's information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Crhg\RemoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Crhg\RemoClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->usersMeGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->usersMeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Crhg\RemoClient\Model\User**](../Model/User.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersMePost**
> \Crhg\RemoClient\Model\User usersMePost($nickname)



Update authenticated user's information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Crhg\RemoClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Crhg\RemoClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nickname = "nickname_example"; // string | User's nickname.

try {
    $result = $apiInstance->usersMePost($nickname);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->usersMePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nickname** | **string**| User&#39;s nickname. |

### Return type

[**\Crhg\RemoClient\Model\User**](../Model/User.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

