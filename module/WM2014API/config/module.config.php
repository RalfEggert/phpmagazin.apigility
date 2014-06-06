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
            'wm2014-api.rest.matches' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/matches[/:matches_id]',
                    'defaults' => array(
                        'controller' => 'WM2014API\\V1\\Rest\\Matches\\Controller',
                    ),
                ),
            ),
            'wm2014-api.rest.bets' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/bets[/:bets_id]',
                    'defaults' => array(
                        'controller' => 'WM2014API\\V1\\Rest\\Bets\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'wm2014-api.rest.teams',
            1 => 'wm2014-api.rest.matches',
            2 => 'wm2014-api.rest.bets',
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
        'WM2014API\\V1\\Rest\\Matches\\Controller' => array(
            'listener' => 'WM2014API\\V1\\Rest\\Matches\\MatchesResource',
            'route_name' => 'wm2014-api.rest.matches',
            'route_identifier_name' => 'matches_id',
            'collection_name' => 'matches',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '48',
            'page_size_param' => null,
            'entity_class' => 'WM2014API\\V1\\Rest\\Matches\\MatchesEntity',
            'collection_class' => 'WM2014API\\V1\\Rest\\Matches\\MatchesCollection',
            'service_name' => 'matches',
        ),
        'WM2014API\\V1\\Rest\\Bets\\Controller' => array(
            'listener' => 'WM2014API\\V1\\Rest\\Bets\\BetsResource',
            'route_name' => 'wm2014-api.rest.bets',
            'route_identifier_name' => 'bets_id',
            'collection_name' => 'bets',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'WM2014API\\V1\\Rest\\Bets\\BetsEntity',
            'collection_class' => 'WM2014API\\V1\\Rest\\Bets\\BetsCollection',
            'service_name' => 'bets',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'WM2014API\\V1\\Rest\\Teams\\Controller' => 'HalJson',
            'WM2014API\\V1\\Rest\\Matches\\Controller' => 'HalJson',
            'WM2014API\\V1\\Rest\\Bets\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'WM2014API\\V1\\Rest\\Teams\\Controller' => array(
                0 => 'application/vnd.wm2014-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'WM2014API\\V1\\Rest\\Matches\\Controller' => array(
                0 => 'application/vnd.wm2014-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'WM2014API\\V1\\Rest\\Bets\\Controller' => array(
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
            'WM2014API\\V1\\Rest\\Matches\\Controller' => array(
                0 => 'application/vnd.wm2014-api.v1+json',
                1 => 'application/json',
            ),
            'WM2014API\\V1\\Rest\\Bets\\Controller' => array(
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
            'WM2014API\\V1\\Rest\\Matches\\MatchesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'wm2014-api.rest.matches',
                'route_identifier_name' => 'matches_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'WM2014API\\V1\\Rest\\Matches\\MatchesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'wm2014-api.rest.matches',
                'route_identifier_name' => 'matches_id',
                'is_collection' => true,
            ),
            'WM2014API\\V1\\Rest\\Bets\\BetsEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'wm2014-api.rest.bets',
                'route_identifier_name' => 'bets_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'WM2014API\\V1\\Rest\\Bets\\BetsCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'wm2014-api.rest.bets',
                'route_identifier_name' => 'bets_id',
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
                'table_name' => 'bets',
                'table_service' => 'WM2014API\\V1\\Rest\\Bets\\BetsResource\\Table',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'entity_identifier_name' => 'id',
            ),
            'WM2014API\\V1\\Rest\\Matches\\MatchesResource' => array(
                'adapter_name' => 'MySQL',
                'table_name' => 'matches',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'WM2014API\\V1\\Rest\\Matches\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'WM2014API\\V1\\Rest\\Bets\\BetsResource' => array(
                'adapter_name' => 'MySQL',
                'table_name' => 'bets',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'WM2014API\\V1\\Rest\\Bets\\Controller',
                'entity_identifier_name' => 'id',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'WM2014API\\V1\\Rest\\Teams\\Controller' => array(
            'input_filter' => 'WM2014API\\V1\\Rest\\Teams\\Validator',
        ),
        'WM2014API\\V1\\Rest\\Matches\\Controller' => array(
            'input_filter' => 'WM2014API\\V1\\Rest\\Matches\\Validator',
        ),
        'WM2014API\\V1\\Rest\\Bets\\Controller' => array(
            'input_filter' => 'WM2014API\\V1\\Rest\\Bets\\Validator',
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
        'WM2014API\\V1\\Rest\\Matches\\Validator' => array(
            0 => array(
                'name' => 'id',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
                'description' => 'Match identifier',
            ),
            1 => array(
                'name' => 'team1',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
                'description' => 'Team 1 to play match',
            ),
            2 => array(
                'name' => 'team2',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
                'description' => 'Team 2 to play match',
            ),
            3 => array(
                'name' => 'date',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
                'description' => 'Date of match',
            ),
        ),
        'WM2014API\\V1\\Rest\\Bets\\Validator' => array(
            0 => array(
                'name' => 'id',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
                'description' => 'Bet identifier',
            ),
            1 => array(
                'name' => 'match',
                'required' => true,
                'filters' => array(),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\Int',
                        'options' => array(),
                    ),
                ),
                'description' => 'Bet match identifier',
                'error_message' => 'Bet match identifier has to be an integer.',
            ),
            2 => array(
                'name' => 'goals1',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
                'error_message' => 'Goals for team 1 has to be an integer.',
                'description' => 'Goals for team 1.',
            ),
            3 => array(
                'name' => 'goals2',
                'required' => true,
                'filters' => array(),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\Int',
                        'options' => array(),
                    ),
                ),
                'description' => 'Goals for team 2.',
                'error_message' => 'Goals for team 2 has to be an integer.',
            ),
        ),
    ),
);
