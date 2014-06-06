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

use WM2014Bet\Form\BetForm;
use WM2014Bet\Service\BetService;
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
     * @var BetService
     */
    protected $betService = null;

    /**
     * @var BetForm
     */
    protected $betForm = null;

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
     * @param \WM2014Bet\Service\BetService $betService
     */
    public function setBetService($betService)
    {
        $this->betService = $betService;
    }

    /**
     * @return \WM2014Bet\Service\BetService
     */
    public function getBetService()
    {
        return $this->betService;
    }

    /**
     * @param \WM2014Bet\Form\BetForm $betForm
     */
    public function setBetForm($betForm)
    {
        $this->betForm = $betForm;
    }

    /**
     * @return \WM2014Bet\Form\BetForm
     */
    public function getBetForm()
    {
        return $this->betForm;
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

        if ($this->getRequest()->isPost()) {
            $this->getBetService()->save($id, $this->params()->fromPost());

            return $this->redirect()->toRoute('wm2014-bet/action', array(), true);
        }

        $viewModel = new ViewModel();
        $viewModel->setVariable('match', $this->getMatchService()->fetchOne($id));
        $viewModel->setVariable('teams', $this->getTeamService()->fetchOptions());
        $viewModel->setVariable('form', $this->getBetForm());

        return $viewModel;
    }

}