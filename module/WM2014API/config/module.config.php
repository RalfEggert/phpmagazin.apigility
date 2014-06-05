<?php
return array(
    'router' => array(
        'routes' => array(
            'wm2014-api.rest.teams' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/teams[/:teams_id]',
                    'defaults' => array(
                        'controller' => 'WM2014API\\V1\\Rest\\Teams\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'wm2014-api.rest.teams',
        ),
    ),
    'zf-rest' => array(
        'WM2014API\\V1\\Rest\\Teams\\Controller' => array(
            'listener' => 'WM2014API\\V1\\Rest\\Teams\\TeamsResource',
            'route_name' => 'wm2014-api.rest.teams',
            'route_identifier_name' => 'teams_id',
            'collection_name' => 'teams',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '32',
            'page_size_param' => null,
            'entity_class' => 'WM2014API\\V1\\Rest\\Teams\\TeamsEntity',
            'collection_class' => 'WM2014API\\V1\\Rest\\Teams\\TeamsCollection',
            'service_name' => 'teams',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'WM2014API\\V1\\Rest\\Teams\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'WM2014API\\V1\\Rest\\Teams\\Controller' => array(
                0 => 'application/vnd.wm2014-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'WM2014API\\V1\\Rest\\Teams\\Controller' => array(
                0 => 'application/vnd.wm2014-api.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'WM2014API\\V1\\Rest\\Teams\\TeamsEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'wm2014-api.rest.teams',
                'route_identifier_name' => 'teams_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'WM2014API\\V1\\Rest\\Teams\\TeamsCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'wm2014-api.rest.teams',
                'route_identifier_name' => 'teams_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'WM2014API\\V1\\Rest\\Teams\\TeamsResource' => array(
                'adapter_name' => 'MySQL',
                'table_name' => 'teams',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'WM2014API\\V1\\Rest\\Teams\\Controller',
                'entity_identifier_name' => 'id',
            ),
            '' => array(
                'adapter_name' => 'MySQL',
                'table_name' => 'teams',
                'table_service' => 'WM2014API\\V1\\Rest\\Teams\\TeamsResource\\Table',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'entity_identifier_name' => 'id',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'WM2014API\\V1\\Rest\\Teams\\Controller' => array(
            'input_filter' => 'WM2014API\\V1\\Rest\\Teams\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'WM2014API\\V1\\Rest\\Teams\\Validator' => array(
            0 => array(
                'name' => 'id',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
                'description' => 'Team identifier',
            ),
            1 => array(
                'name' => 'title',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
                'description' => 'Team title',
            ),
            2 => array(
                'name' => 'code',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
                'description' => 'Team code',
            ),
        ),
    ),
);
