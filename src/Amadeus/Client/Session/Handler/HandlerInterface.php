<?php
/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
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
 *
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Session\Handler;

use Amadeus\Client\Params\SessionHandlerParams;
use Amadeus\Client\Struct\BaseWsMessage;

/**
 * HandlerInterface
 *
 * Interface for session handlers
 *
 * @package Amadeus\Client\Session\Handler
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
interface HandlerInterface
{
    /**
     * @param SessionHandlerParams $params
     */
    public function __construct(SessionHandlerParams $params);

    /**
     * @param string $messageName
     * @param BaseWsMessage $messageBody
     * @param array $messageOptions
     * @return string|\stdClass
     */
    public function sendMessage($messageName, BaseWsMessage $messageBody, $messageOptions);
}