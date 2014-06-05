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

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class MatchServiceFactory
 *
 * @package WM2014Bet\Service
 */
class MatchServiceFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $viewHelperManager = $serviceLocator->get('ViewHelperManager');

        $serverUrlHelper = $viewHelperManager->get('ServerUrl');
        $urlHelper = $viewHelperManager->get('Url');

        $restRoute = $serverUrlHelper() . $urlHelper('wm2014-api.rest.matches');

        $service = new MatchService();
        $service->setRestRoute($restRoute);

        return $service;
    }

} 