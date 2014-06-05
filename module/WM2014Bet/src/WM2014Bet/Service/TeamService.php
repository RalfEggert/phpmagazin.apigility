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
 * Class TeamService
 *
 * @package WM2014Bet\Service
 */
class TeamService extends AbstractService
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
    public function fetchOptions()
    {
        $teamsData = $this->sendGetRequest($this->getRestRoute());

        $teamsList = array();

        foreach ($teamsData->_embedded->teams as $teamRow) {
            $teamsList[$teamRow->id] = $teamRow->title;
        }

        return $teamsList;
    }

} 