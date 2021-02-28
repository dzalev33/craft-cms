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
    public $apiHost;
    public $location;
    public $yelpApiKey;
    public $host;

    public function init()
    {
        $this->yelpApiKey = getenv('YELP_API_KEY');
        $this->apiHost = 'https://api.yelp.com/';
        $this->location = 'Melbourne';
        $this->host = 'v3/businesses/search?location=';
    }

    /**
     *
     * @return mixed
     */
    public function MakeRequest()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->getSearchResultsByLocationPath(),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FAILONERROR => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                "Accept: application/json",
                "Authorization: Bearer $this->yelpApiKey ",
            ),
        ));
        $response = curl_exec($curl);
        if (curl_errno($curl)) {
            $error_msg = curl_error($curl);
        }
        curl_close($curl);

        if (isset($error_msg)) {
            return $error_msg;
        }

        return $response;
    }

    public function getSearchResultsByLocationPath()
    {
        return $this->apiHost . $this->host . $this->location;
    }
}
