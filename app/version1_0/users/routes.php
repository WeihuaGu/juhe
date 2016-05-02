<?php

namespace app\version1_0\users;
// Routes
$app->get('/v1_0/users', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/users' route");
     echo '<h1> this is the users restful api</h1>';
    // Render index view
    //return $this->renderer->render($response, 'juhehelp.phtml', $args);
})->setName('users');
$app->put('/v1_0/users', function ($request, $response, $args) {
	$data = array('Status' => 'created', 'userid' =>'0000');
        $jsonresponse=$response->withJson($data, 201);
	return $jsonresponse;
});

