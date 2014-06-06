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

namespace WM2014Bet\Form;

use Zend\Form\Form;

/**
 * Class BetForm
 *
 * @package WM2014Bet\Form
 */
class BetForm extends Form
{
    /**
     * Setup form
     */
    public function init()
    {
        $this->add(
            array(
                'type'       => 'Text',
                'name'       => 'goals1',
                'options'    => array(
                    'label'  => 'Tore Team 1',
                ),
                'attributes' => array(
                    'class'  => 'span1',
                ),
            )
        );

        $this->add(
            array(
                'type'       => 'Text',
                'name'       => 'goals2',
                'options'    => array(
                    'label'  => 'Tore Team 2',
                ),
                'attributes' => array(
                    'class'  => 'span1',
                ),
            )
        );

        $this->add(
            array(
                'type'       => 'Submit',
                'name'       => 'save_bet',
                'options'    => array(),
                'attributes' => array(
                    'value' => 'Tipp abgeben',
                    'id'    => 'save',
                    'class' => 'btn btn-primary btn-sm',
                ),
            )
        );
    }
}