<?php
/**
 * Yelp API module for Craft CMS 3.x
 *
 * Get data from Yelp API
 *
 * @link      dzalev.com
 * @copyright Copyright (c) 2021 Stefan Salev
 */

namespace modules\yelpapimodule\variables;

use modules\yelpapimodule\YelpApiModule;

use Craft;
use GuzzleHttp;

/**
 * Yelp API Variable
 *
 * Craft allows modules to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.yelpApiModule }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Stefan Salev
 * @package   YelpApiModule
 * @since     1.0.0
 */
class YelpApiModuleVariable
{

    public function getRestaurants()
    {
        return YelpApiModule::$instance->yelpApiModuleService->getData();
    }
}
