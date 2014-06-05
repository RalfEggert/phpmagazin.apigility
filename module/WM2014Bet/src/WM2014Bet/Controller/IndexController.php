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

namespace WM2014Bet\Controller;

use WM2014Bet\Service\MatchService;
use WM2014Bet\Service\TeamService;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Class IndexController
 *
 * @package WM2014Bet\Controller
 */
class IndexController extends AbstractActionController
{
    /**
     * @var MatchService
     */
    protected $matchService = null;

    /**
     * @var TeamService
     */
    protected $teamService = null;

    /**
     * @param \WM2014Bet\Service\MatchService $matchService
     */
    public function setMatchService($matchService)
    {
        $this->matchService = $matchService;
    }

    /**
     * @return \WM2014Bet\Service\MatchService
     */
    public function getMatchService()
    {
        return $this->matchService;
    }

    /**
     * @param \WM2014Bet\Service\TeamService $teamService
     */
    public function setTeamService($teamService)
    {
        $this->teamService = $teamService;
    }

    /**
     * @return \WM2014Bet\Service\TeamService
     */
    public function getTeamService()
    {
        return $this->teamService;
    }

    /**
     * @return ViewModel
     */
    public function indexAction()
    {
        $viewModel = new ViewModel();
        $viewModel->setVariable('matches', $this->getMatchService()->fetchAll());
        $viewModel->setVariable('teams', $this->getTeamService()->fetchOptions());

        return $viewModel;
    }

    /**
     * @return ViewModel
     */
    public function showAction()
    {
        $id = $this->params()->fromRoute('id');

        $viewModel = new ViewModel();
        $viewModel->setVariable('match', $this->getMatchService()->fetchOne($id));
        $viewModel->setVariable('teams', $this->getTeamService()->fetchOptions());

        return $viewModel;
    }

}