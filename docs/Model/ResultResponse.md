# ResultResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**approximation** | [**\Swagger\Client\Model\ApproximationResult**](ApproximationResult.md) |  | [optional] 
**complete** | **bool** | Маркер завершенности. Все ли данные получены или слежует еще раз обратиться за обновлением результата | [optional] 
**in_sale** | [**\Swagger\Client\Model\InSaleResult**](InSaleResult.md) |  | [optional] 
**law_info** | [**\Swagger\Client\Model\LawResult**](LawResult.md) |  | [optional] 
**request_date** | **int** | Дата формирования запроса в формате UnixTimestamp | [optional] 
**request_id** | **string** | Уникальный идентификатор запроса | [optional] 
**status** | **string** | Статус выполнения (new, in_progress, incomplete, done) | [optional] 
**success** | **bool** | Статус обработки на стороне сервера | [optional] 
**vin_decoder** | [**\Swagger\Client\Model\DecoderResult**](DecoderResult.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


