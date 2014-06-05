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

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class IndexControllerFactory
 *
 * @package WM2014Bet\Controller
 */
class IndexControllerFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $controllerManager
     *
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $controllerManager)
    {
        $serviceLocator     = $controllerManager->getServiceLocator();
        $formElementManager = $serviceLocator->get('FormElementManager');

        $teamService  = $serviceLocator->get('WM2014Bet\Service\Team');
        $matchService = $serviceLocator->get('WM2014Bet\Service\Match');

        $controller = new IndexController();
        $controller->setMatchService($matchService);
        $controller->setTeamService($teamService);

        return $controller;
    }

} 