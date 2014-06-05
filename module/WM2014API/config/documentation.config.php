<?php
return array(
    'WM2014API\\V1\\Rest\\Teams\\Controller' => array(
        'collection' => array(
            'GET' => array(
                'description' => 'Retrieve a paginated list of teams.',
                'request' => null,
                'response' => '{
   "_links": {
       "self": {
           "href": "/teams"
       },
       "first": {
           "href": "/teams?page={page}"
       },
       "prev": {
           "href": "/teams?page={page}"
       },
       "next": {
           "href": "/teams?page={page}"
       },
       "last": {
           "href": "/teams?page={page}"
       }
   }
   "_embedded": {
       "teams": [
           {
               "_links": {
                   "self": {
                       "href": "/teams[/:teams_id]"
                   }
               }
              "id": "Team identifier",
              "title": "Team title",
              "code": "Team code"
           }
       ]
   }
}',
            ),
            'description' => 'Retrieve a team collection.',
        ),
        'entity' => array(
            'GET' => array(
                'description' => 'Retrieve an entity of a team.',
                'request' => null,
                'response' => '{
   "_links": {
       "self": {
           "href": "/teams[/:teams_id]"
       }
   }
   "id": "Team identifier",
   "title": "Team title",
   "code": "Team code"
}',
            ),
            'description' => 'Retrieve a team entity.',
        ),
        'description' => 'REST service to retrieve team collections and entities.',
    ),
);
