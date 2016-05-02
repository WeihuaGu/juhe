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
$app->post('/v1_0/users', function ($request, $response, $args) {
	$data = array('Status' => 'created', 'userid' =>'0000');
        $jsonresponse=$response->withJson($data, 201);
	return $jsonresponse;
});

$app->get('/v1_0/users/{id:[0-9]+}', function ($request, $response, $args) {
      $data = array('name' => 'ali', "updatedAt"=>"2015-07-14T02:31:50.100Z",
  "phone"=>"18612340000");
	echo $args['id'];
        $jsonresponse=$response->withJson($data, 201);
	return $jsonresponse;
});

