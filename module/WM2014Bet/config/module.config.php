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

return array(
    'router'          => array(
        'routes' => array(
            'wm2014-bet' => array(
                'type'          => 'Literal',
                'options'       => array(
                    'route'    => '/wm2014-bet',
                    'defaults' => array(
                        '__NAMESPACE__' => 'WM2014Bet\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes'  => array(
                    'action' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'       => '/:action[/:id]',
                            'constraints' => array(
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id'     => '[a-f0-9-]*',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'WM2014Bet\Service\Bet'   => 'WM2014Bet\Service\BetServiceFactory',
            'WM2014Bet\Service\Match' => 'WM2014Bet\Service\MatchServiceFactory',
            'WM2014Bet\Service\Team'  => 'WM2014Bet\Service\TeamServiceFactory',
        ),
    ),
    'controllers'     => array(
        'factories' => array(
            'WM2014Bet\Controller\Index' => 'WM2014Bet\Controller\IndexControllerFactory',
        ),
    ),
    'form_elements'   => array(
        'invokables' => array(
            'WM2014Bet\Form\Bet' => 'WM2014Bet\Form\BetForm',
        ),
    ),
    'view_manager'    => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
