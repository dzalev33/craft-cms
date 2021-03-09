<?php

use craft\elements\Entry;
use craft\helpers\UrlHelper;
use yii\web\ForbiddenHttpException;


return [
    'endpoints' => [
        'api/restaurants.json' => function () {

            return [
                'resourceKey' => 'Restaurants',
                'elementType' => Entry::class,
                'criteria' => ['section' => 'restaurants', 'limit' => '20'],
                'elementsPerPage' => 20,
                'transformer' => function (Entry $entry) {
                    return [
                        'id' => $entry->id,
                        'restaurant_name' => $entry->title,
                        'alias' => $entry->alias,
                        'address' => $entry->address,
                        'category' => $entry->categoriesTitle,
                        'country' => $entry->country,
                        'state' => $entry->state,
                        'city' => $entry->city,
                        'zip_code' => $entry->zipCode,
                        'phone' => $entry->phone,
                        'image_url' => $entry->imageUrl,
                        'restaurant_url' => $entry->restaurantUrl
                    ];
                }
            ];
        }
    ]
];