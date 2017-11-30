<?php
/**
 * Association de cinéphile
 * @version 1.0
 */

require_once __DIR__ . '/vendor/autoload.php';

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new \Slim\Container($configuration);

$app = new Slim\App($c);

use Models\Adherent;

/**
 * GET getAdherentByID
 * Summary: Retourne l&#39;adhérent correspondant à l&#39;id
 * Notes: 
 * Output-Formats: [application/json, text/html]
 */
$app->GET('/adherents/{id}', function($request, $response, $args) {
            
            
            $adherent = new Adherent();

            $adherent->setNom('jean');
            $adherent->setPrenom('claude');

            return $response->withJson($adherent);

            /*$response->write('oui');
            return $response;*/
            });


/**
 * GET getAdherents
 * Summary: Retourne tous les adherents
 * Notes: 
 * Output-Formats: [application/json, text/html]
 */
$app->GET('/adherents', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getAdherents as a GET method ?');
            return $response;
            });


/**
 * POST postAdherents
 * Summary: Crée des adherents
 * Notes: 
 * Output-Formats: [application/json, text/html]
 */
$app->POST('/adherents', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing postAdherents as a POST method ?');
            return $response;
            });


/**
 * GET getCategorieByID
 * Summary: Retourne la catégorie correspondant à l&#39;id
 * Notes: 
 * Output-Formats: [application/json, text/html]
 */
$app->GET('/categories/{id}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getCategorieByID as a GET method ?');
            return $response;
            });


/**
 * GET getCategories
 * Summary: Retourne toutes les categories
 * Notes: 
 * Output-Formats: [application/json, text/html]
 */
$app->GET('/categories', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getCategories as a GET method ?');
            return $response;
            });


/**
 * POST postCategories
 * Summary: Crée des categories
 * Notes: 
 * Output-Formats: [application/json, text/html]
 */
$app->POST('/categories', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing postCategories as a POST method ?');
            return $response;
            });


/**
 * GET getCinemaByID
 * Summary: Retourne le cinéma correspondant à l&#39;id
 * Notes: 
 * Output-Formats: [application/json, text/html]
 */
$app->GET('/cinemas/{id}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getCinemaByID as a GET method ?');
            return $response;
            });


/**
 * GET getCinemas
 * Summary: Retourne tous les cinémas
 * Notes: 
 * Output-Formats: [application/json, text/html]
 */
$app->GET('/cinemas', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getCinemas as a GET method ?');
            return $response;
            });


/**
 * POST postCinemas
 * Summary: Crée des cinémas
 * Notes: 
 * Output-Formats: [application/json, text/html]
 */
$app->POST('/cinemas', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing postCinemas as a POST method ?');
            return $response;
            });


/**
 * GET getFilmByID
 * Summary: Retourne le film correspondant à l&#39;id
 * Notes: 
 * Output-Formats: [application/json, text/html]
 */
$app->GET('/films/{id}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getFilmByID as a GET method ?');
            return $response;
            });


/**
 * GET getFilms
 * Summary: Retourne tous les films
 * Notes: 
 * Output-Formats: [application/json, text/html]
 */
$app->GET('/films', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getFilms as a GET method ?');
            return $response;
            });


/**
 * POST postFilms
 * Summary: Crée des films
 * Notes: 
 * Output-Formats: [application/json, text/html]
 */
$app->POST('/films', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing postFilms as a POST method ?');
            return $response;
            });


/**
 * GET getSeanceByID
 * Summary: Retourne la seance correspondant à l&#39;id
 * Notes: 
 * Output-Formats: [application/json, text/html]
 */
$app->GET('/seances/{id}', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getSeanceByID as a GET method ?');
            return $response;
            });


/**
 * GET getSeances
 * Summary: Retourne toutes les seances
 * Notes: 
 * Output-Formats: [application/json, text/html]
 */
$app->GET('/seances', function($request, $response, $args) {
            
            
            
            
            $response->write('How about implementing getSeances as a GET method ?');
            return $response;
            });


/**
 * POST postSeances
 * Summary: Crée des seances
 * Notes: 
 * Output-Formats: [application/json, text/html]
 */
$app->POST('/seances', function($request, $response, $args) {
            
            
            
            $body = $request->getParsedBody();
            $response->write('How about implementing postSeances as a POST method ?');
            return $response;
            });



$app->run();
