<?php
return array(
    'db' => array(
        'adapters' => array(
            'MySQL' => array(),
        ),
    ),
    'zf-mvc-auth' => array(
        'authentication' => array(
            'http' => array(
                'accept_schemes' => array(
                    0 => 'basic',
                ),
                'realm' => 'api',
            ),
        ),
    ),
);
