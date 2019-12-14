<?php

// usage example
// php decoder-cli.php {vin}

define('API_USERNAME', "HERE YOUR API USER NAME");
define('API_PASSWORD', "HERE YOUR API PASSWORD");
define('API_PERSONAL_KEY', 'HERE YOUR API KEY');

$vin = end($argv);

require_once(__DIR__ . '/autoload.php');
$api_instance = new Swagger\Client\Api\DefaultApi(API_PERSONAL_KEY);

try {
    $loginData = $api_instance->loginRequest(API_USERNAME, API_PASSWORD);
    $decoderResult = $api_instance->sourceDecoderRequest($vin, $loginData->getToken());

    var_dump($decoderResult->getVinDecoder());
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}