<?php
/**
 * ResultResponseTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * VIN-API
 *
 * # Условия использования  Данные, получаемые в API не подлежат передаче третьим лицам. Предоставляются исключительно для личного пользования. В случае обнаружения нарушений, администрация в праве в одностороннем порядке заблокировать доступ к API до выяснения обстоятельств.  # Принцип работы API  API асинхронное. Для того чтобы получить данные по VIN сначала необходимо добавить задачу в очередь и получить ее уникальный идентификатор. После чего уже по этому идентификатору можно получить данные.  При постановке задачи в очередь, вы можете указать URL, на который по ее готовности система автоматически отправит POST запрос с результатом. Таким образом не нужно будет самим забирать результат. В случае, если URL окажется недоступен, система попробует повторить отправку от 1 до 5 раз с разными интервалами. В случае, если эти попытки окажутся безуспешными, система перестанет отправлять результат и необходимо будет уже самостоятельно сделать запрос в API на получение результата по идентификатору задачи. Успешным является запрос, в ходе которого удаленный сервер вернул статус 200. Все остальные статусы система рассматривает как безуспешные.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@autobius.ru
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * ResultResponseTest Class Doc Comment
 *
 * @category    Class */
// * @description Result результат обработки запроса на получение информации по VIN его и возвращаем как результат так же можно теперь возвращать incomplete, это мега круто же &#x3D;)
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ResultResponseTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {

    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {

    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {

    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {

    }

    /**
     * Test "ResultResponse"
     */
    public function testResultResponse()
    {

    }

    /**
     * Test attribute "approximation"
     */
    public function testPropertyApproximation()
    {

    }

    /**
     * Test attribute "complete"
     */
    public function testPropertyComplete()
    {

    }

    /**
     * Test attribute "in_sale"
     */
    public function testPropertyInSale()
    {

    }

    /**
     * Test attribute "law_info"
     */
    public function testPropertyLawInfo()
    {

    }

    /**
     * Test attribute "request_date"
     */
    public function testPropertyRequestDate()
    {

    }

    /**
     * Test attribute "request_id"
     */
    public function testPropertyRequestId()
    {

    }

    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {

    }

    /**
     * Test attribute "success"
     */
    public function testPropertySuccess()
    {

    }

    /**
     * Test attribute "vin_decoder"
     */
    public function testPropertyVinDecoder()
    {

    }

}
