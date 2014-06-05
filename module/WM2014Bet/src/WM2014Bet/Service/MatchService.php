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

/**
 * Class MatchService
 *
 * @package WM2014Bet\Service
 */
class MatchService extends AbstractService
{
    /**
     * @var string
     */
    protected $restRoute = '';

    /**
     * @param string $restRoute
     */
    public function setRestRoute($restRoute)
    {
        $this->restRoute = $restRoute;
    }

    /**
     * @return string
     */
    public function getRestRoute()
    {
        return $this->restRoute;
    }

    /**
     * @return array
     */
    public function fetchAll()
    {
        $matchesData = $this->sendGetRequest($this->getRestRoute());

        return $matchesData->_embedded->matches;
    }

    /**
     * @param $id
     *
     * @return array
     */
    public function fetchOne($id)
    {
        $matchData = $this->sendGetRequest($this->getRestRoute() . '/' . $id);

        return $matchData;
    }

}