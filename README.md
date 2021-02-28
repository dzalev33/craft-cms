# Yelp API for Craft CMS 3.x
Get data from Yelp API

## Project setup

- when you clone the project, run `composer-install` to get the vendor files.
- run `./craft setup` to build it locally
- Copy the `YELP_API_KEY` from the `.env.example` file so you can have access to the API



## Requirements

This module requires Craft CMS 3.0.0-RC1 or later.

## Installation

To install the module, follow these instructions.

First, you'll need to add the contents of the `app.php` file to your `config/app.php` (or just copy it there if it does not exist). This ensures that your module will get loaded for each request. The file might look something like this:
```
return [
    'modules' => [
        'yelp-api-module' => [
            'class' => \modules\yelpapimodule\YelpApiModule::class,
        ],
    ],
    'bootstrap' => ['yelp-api-module'],
];
```
You'll also need to make sure that you add the following to your project's `composer.json` file so that Composer can find your module:

    "autoload": {
        "psr-4": {
          "modules\\yelpapimodule\\": "modules/yelpapimodule/src/"
        }
    },

After you have added this, you will need to do:

    composer dump-autoload
 
 …from the project’s root directory, to rebuild the Composer autoload map. This will happen automatically any time you do a `composer install` or `composer update` as well.

## Yelp API Overview

This is a simple get request to the Yelp API that gets restaurants based 
on location

## Using Yelp API
you can call the module in any twig file using `{{ craft.yelpApiModule.getData }}`


Brought to you by [Stefan Salev](dzalev.com)
