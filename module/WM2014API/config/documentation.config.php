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
    'WM2014API\\V1\\Rest\\Matches\\Controller' => array(
        'collection' => array(
            'GET' => array(
                'description' => 'Retrieve a paginated list of matches.',
                'request' => null,
                'response' => '{
   "_links": {
       "self": {
           "href": "/matches"
       },
       "first": {
           "href": "/matches?page={page}"
       },
       "prev": {
           "href": "/matches?page={page}"
       },
       "next": {
           "href": "/matches?page={page}"
       },
       "last": {
           "href": "/matches?page={page}"
       }
   }
   "_embedded": {
       "matches": [
           {
               "_links": {
                   "self": {
                       "href": "/matches[/:matches_id]"
                   }
               }
              "id": "Match identifier",
              "team1": "Team 1 to play match",
              "team2": "Team 2 to play match",
              "date": "Date of match"
           }
       ]
   }
}',
            ),
            'description' => 'Retrieve a match collection.',
        ),
        'entity' => array(
            'GET' => array(
                'description' => 'Retrieve an entity of a match.',
                'request' => null,
                'response' => '{
   "_links": {
       "self": {
           "href": "/matches[/:matches_id]"
       }
   }
   "id": "Match identifier",
   "team1": "Team 1 to play match",
   "team2": "Team 2 to play match",
   "date": "Date of match"
}',
            ),
            'description' => 'Retrieve a match entity.',
        ),
        'description' => 'REST service to retrieve match collections and entities.',
    ),
    'WM2014API\\V1\\Rest\\Bets\\Controller' => array(
        'collection' => array(
            'GET' => array(
                'description' => 'Retrieve a paginated list of bets.',
                'request' => null,
                'response' => '{
   "_links": {
       "self": {
           "href": "/bets"
       },
       "first": {
           "href": "/bets?page={page}"
       },
       "prev": {
           "href": "/bets?page={page}"
       },
       "next": {
           "href": "/bets?page={page}"
       },
       "last": {
           "href": "/bets?page={page}"
       }
   }
   "_embedded": {
       "bets": [
           {
               "_links": {
                   "self": {
                       "href": "/bets[/:bets_id]"
                   }
               }
              "id": "Bet identifier",
              "match": "Bet match identifier",
              "goals1": "Goals for team 1.",
              "goals2": "Goals for team 2."
           }
       ]
   }
}',
            ),
            'POST' => array(
                'description' => 'Create a new bet entity.',
                'request' => '{
   "id": "Bet identifier",
   "match": "Bet match identifier",
   "goals1": "Goals for team 1.",
   "goals2": "Goals for team 2."
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/bets[/:bets_id]"
       }
   }
   "id": "Bet identifier",
   "match": "Bet match identifier",
   "goals1": "Goals for team 1.",
   "goals2": "Goals for team 2."
}',
            ),
            'description' => 'Retrieve a bet collection.',
        ),
        'entity' => array(
            'GET' => array(
                'description' => 'Retrieve an entity of a bet.',
                'request' => null,
                'response' => '{
   "_links": {
       "self": {
           "href": "/bets[/:bets_id]"
       }
   }
   "id": "Bet identifier",
   "match": "Bet match identifier",
   "goals1": "Goals for team 1.",
   "goals2": "Goals for team 2."
}',
            ),
            'DELETE' => array(
                'description' => 'Delete an entity of a bet.',
                'request' => '{
   "id": "Bet identifier",
   "match": "Bet match identifier",
   "goals1": "Goals for team 1.",
   "goals2": "Goals for team 2."
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/bets[/:bets_id]"
       }
   }
   "id": "Bet identifier",
   "match": "Bet match identifier",
   "goals1": "Goals for team 1.",
   "goals2": "Goals for team 2."
}',
            ),
            'description' => 'Retrieve or delete a bet entity.',
        ),
        'description' => 'REST service to retrieve and manipulate bet collections and entities.',
    ),
);
