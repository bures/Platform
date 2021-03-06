<?php

/**
 * SMS API
 * Farmerline SMS API
 *
 * OpenAPI spec version: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * SMS API
 * @version 1.0.0
 */

$app->get('/', function () use ($app) {
    return $app->version();
});

/**
 * POST smsSendPost
 * Summary: Send SMS
 * Notes: The Send SMS sends an SMS message to bulk/single recepients. The response includes the status of the Message delivery. 
 * Output-Formats: [application/json]
 */
$app->POST('/v1/sms/send', 'SendApi@smsSendPost');

