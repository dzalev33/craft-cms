<?php
/**
 * Yelp API module for Craft CMS 3.x
 *
 * servuice
 *
 * @link      dzalev.com
 * @copyright Copyright (c) 2021 Stefan Salev
 */

namespace modules\yelpapimodule\services;

use GuzzleHttp\Client;
use modules\yelpapimodule\YelpApiModule;
use Craft;
use craft\base\Component;
use OAuthToken;
use yii\base\Exception;
use GuzzleHttp;

/**
 * YelpApiModuleService Service
 *
 * @author    Stefan Salev
 * @package   YelpApiModule
 * @since     1.0.0
 */
class YelpApiModuleService extends Component
{
    private $url = '';
    public $apiHost;
    public $location;
    public $yelpApiKey;
    public $host;
    public $siteBaseUrl;

    public function init()
    {
        $this->yelpApiKey = getenv('YELP_API_KEY');
        $this->siteBaseUrl =getenv('PRIMARY_SITE_URL');
        $this->apiHost ='api/restaurants.json';
        $this->location = 'Melbourne';
        $this->host = 'v3/businesses/search?location=';
    }

    public function url( $baseUrl = '',$apiHost = '' ){
        $this->url = $baseUrl;
        $this->apiHost = $apiHost;

        return $baseUrl . $apiHost;
    }

    public function getRequest(){
        $siteBaseUrl = $this->siteBaseUrl;
        $apiHost = $this->apiHost;
        $restaurantsUrl = $this->url($siteBaseUrl,  $apiHost);

        $client = new Client();
        $response = $client->request('GET', $restaurantsUrl);

        return json_decode($response->getBody(), true);
    }

    public function getData(){

        $responseBody = $this->getRequest();

        return json_encode($responseBody);
    }
}
