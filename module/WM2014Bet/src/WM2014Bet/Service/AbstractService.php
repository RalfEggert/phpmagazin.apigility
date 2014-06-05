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
}