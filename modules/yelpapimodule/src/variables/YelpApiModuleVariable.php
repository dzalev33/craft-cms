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
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.yelpApiModule.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.yelpApiModule.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }

    public function cicka()
    {
        $string = 'sdfsdfsdf';
        return $string;
    }

    public function requestToken(){

        $client = new GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.yelp.com/v3/businesses/search?location=Melbourne', [
            'query' => ['exampleParam' => 'example']
        ]);
        $responseBody = json_decode($response->getBody(), true);
        var_dump($responseBody);


    }
}
