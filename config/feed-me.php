<?php

return [
    '*' => [
        'pluginName' => 'Feed Me',
        'cache' => 60,
        'requestOptions' => [],
        'skipUpdateFieldHandle' => 'skipFeedMeUpdate',
        'backupLimit' => 100,
        'dataDelimiter' => '-|-',
        'csvColumnDelimiter' => '',
        'parseTwig' => false,
        'compareContent' => true,
        'sleepTime' => 0,
        'logging' => true,
        'runGcBeforeFeed' => false,
        'queueTtr' => 300,
        'queueMaxRetry' => 5,
        'assetDownloadCurl' => false,
        'feedOptions' => [
            '1' => [
                'feedUrl' => 'https://api.yelp.com/v3/businesses/search?location=Melbourne',
                'requestOptions' => [
                    'headers' => [
                        'Accept' => 'application/json',
                        'Authorization' => 'Bearer qYbGPqo8GtGE-pvPIFgKZhWvoOaWzsTvvWsIf53TfuPtDu-JIVaCVaLlPKNRIhgAB8t42l4t5nVWGjIkbQjvfQogl31PQDgdmx1WPqOzt1JPr0R36IGUwO1Hdi46YHYx',
                    ]
                ],
            ]
        ],
    ]
];