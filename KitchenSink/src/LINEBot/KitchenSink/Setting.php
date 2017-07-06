<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace LINE\LINEBot\KitchenSink;

class Setting
{
    public static function getSetting()
    {
        return [
            'settings' => [
                'displayErrorDetails' => true, // set to false in production

                'logger' => [
                    'name' => 'slim-app',
                    'path' => __DIR__ . '/../../../logs/app.log',
                ],

                'bot' => [
                    'channelToken' => getenv('LINEBOT_CHANNEL_TOKEN') ?: 'R4TTAOd0VhSWfLhxx1R3jRTwnwzRVos9UNRKkGjf7tW/iffaL6KXn6zp3CHWafbK0z5pTfopAKBf										JHIkdM6xHt+B2AcAZdfmQkESi57QDvcVLN+pMndVsi811gqmHYt0JubvPHeFV7ltS7R3hA8kMAdB04t89/1O/w1cDnyilFU=',
                    'channelSecret' => getenv('LINEBOT_CHANNEL_SECRET') ?: 'a765040c095986fff77eb159bc269c39',
                ],

                'apiEndpointBase' => getenv('LINEBOT_API_ENDPOINT_BASE')?:'',
            ],
        ];
    }
}
