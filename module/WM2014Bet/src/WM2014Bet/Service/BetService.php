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
 * Class BetService
 *
 * @package WM2014Bet\Service
 */
class BetService extends AbstractService
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
        $betsData = $this->sendGetRequest($this->getRestRoute());

        return $betsData->_embedded->bets;
    }

    /**
     * @param $id
     *
     * @return array
     */
    public function fetchOne($id)
    {
        $betData = $this->sendGetRequest($this->getRestRoute() . '/' . $id);

        return $betData;
    }

    /**
     * @param       $matchId
     * @param array $data
     *
     * @return array
     */
    public function save($matchId, array $data)
    {
        $postData = array(
            'match'  => $matchId,
            'goals1' => $data['goals1'],
            'goals2' => $data['goals2'],
        );

        $betData = $this->sendPostRequest($this->getRestRoute(), $postData);

        return $betData;
    }

}