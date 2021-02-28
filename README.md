# Yelp API for Craft CMS 3.x
Get data from Yelp API

## Project setup

- when you clone the project, run `composer-install` to get the vendor files.
- run `./craft setup` to build it locally
- Copy the `YELP_API_KEY` from the `.env.example` file so you can have access to the API

## Yelp API Overview

This is a simple get request to the Yelp API that gets restaurants based 
on location

## Using Yelp API
you can call the module in any twig file using `{{ craft.yelpApiModule.getData }}`


Brought to you by [Stefan Salev](dzalev.com)
