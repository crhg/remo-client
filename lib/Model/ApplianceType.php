<?php
/**
 * ApplianceType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Crhg\RemoClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Nature API
 *
 * Read/Write Nature Remo
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Crhg\RemoClient\Model;
use \Crhg\RemoClient\ObjectSerializer;

/**
 * ApplianceType Class Doc Comment
 *
 * @category Class
 * @description Type of the appliance. \&quot;AC\&quot; (Air conditioner) is 1st class citizen appliance, which is included in our IRDB (InfraRed signals DataBase). The \&quot;ApplianceModel\&quot; stores meta data about the appliance. We provide AC specific UI. Everything else is \&quot;IR\&quot;. We just learn the signals from the remote and store them, and when users tap the button on the smartphone app, our server sends it through Remo.
 * @package  Crhg\RemoClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApplianceType
{
    /**
     * Possible values of this enum
     */
    const AC = 'AC';
    const IR = 'IR';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AC,
            self::IR,
        ];
    }
}

