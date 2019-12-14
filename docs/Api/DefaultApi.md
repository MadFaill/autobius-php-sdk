# Swagger\Client\DefaultApi

All URIs are relative to *https://api.autobius.ru/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**loginRequest**](DefaultApi.md#loginRequest) | **POST** /login | Авторизация и получение JWT Token.
[**refreshRequest**](DefaultApi.md#refreshRequest) | **GET** /auth/refresh_token | Обновление авторизационного токена.
[**sourceDecoderRequest**](DefaultApi.md#sourceDecoderRequest) | **GET** /sources/v1/decode/{vin} | Декодирование VIN и получение по нему всей доступной информации по конкретному автомобилю.


# **loginRequest**
> \Swagger\Client\Model\LoginResponse loginRequest($username, $password)

Авторизация и получение JWT Token.

Для взаимодействия с API необходимо авторизоваться и получить JWT Token, который в последствии необходимо указывать в заголовке.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$username = "username_example"; // string | Уникальный логин, выданный при регистрации
$password = "password_example"; // string | Личный пароль, выданный при регистрации

try {
    $result = $api_instance->loginRequest($username, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->loginRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| Уникальный логин, выданный при регистрации |
 **password** | **string**| Личный пароль, выданный при регистрации |

### Return type

[**\Swagger\Client\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refreshRequest**
> \Swagger\Client\Model\LoginResponse refreshRequest($authorisation)

Обновление авторизационного токена.

Необходимо периодически вызывать этот метод, иначе раз в час придется заново дергать \"авторизацию\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$authorisation = "authorisation_example"; // string | Bearer заголовок с тоекном

try {
    $result = $api_instance->refreshRequest($authorisation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->refreshRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorisation** | **string**| Bearer заголовок с тоекном |

### Return type

[**\Swagger\Client\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sourceDecoderRequest**
> \Swagger\Client\Model\VinDecoderResponse sourceDecoderRequest($vin, $authorisation)

Декодирование VIN и получение по нему всей доступной информации по конкретному автомобилю.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DefaultApi();
$vin = "vin_example"; // string | 17ти символьный уникальный идентификационный номер автомобиля  `! FRAME не поддерживается системой`
$authorisation = "authorisation_example"; // string | Bearer заголовок с тоекном

try {
    $result = $api_instance->sourceDecoderRequest($vin, $authorisation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->sourceDecoderRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vin** | **string**| 17ти символьный уникальный идентификационный номер автомобиля  &#x60;! FRAME не поддерживается системой&#x60; |
 **authorisation** | **string**| Bearer заголовок с тоекном |

### Return type

[**\Swagger\Client\Model\VinDecoderResponse**](../Model/VinDecoderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

