<?php
/**
 * Zend Framework 2 - PHP-Magazin Apigility
 *
 * Beispiele für ZF2 Apigility
 *
 * @package    Application
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @link       http://www.ralfeggert.de/
 */

namespace WM2014Bet\Service;

use Zend\Http\Client;
use Zend\Json\Json;

/**
 * Class AbstractService
 *
 * @package WM2014Bet\Service
 */
abstract class AbstractService
{
    /**
     * @param $route
     *
     * @return array
     */
    public function sendGetRequest($route)
    {
        $client = new Client($route);
        $client->setMethod('get');
        $client->setHeaders(
            array(
                'Accept' => 'application/json',
            )
        );

        $response = $client->send();
        $response = $response->getContent();
        $data     = Json::decode($response);

        return $data;
    }

    /**
     * @param       $route
     * @param array $postData
     *
     * @return array
     */
    public function sendPostRequest($route, array $postData)
    {
        $client = new Client($route);
        $client->setMethod('POST');
        $client->setParameterPost($postData);
        $client->setEncType(Client::ENC_FORMDATA);
        $client->setAuth('wm2014', 'wm2014', Client::AUTH_BASIC);
        $client->setHeaders(
            array(
                'Accept' => 'application/json',
            )
        );

        $response = $client->send();
        $response = $response->getContent();
        $data     = Json::decode($response);

        return $data;
    }

}