<?php

namespace app\version1_0\grab;
// Routes
$app->get('/v1_0/grab', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/users' route");
     echo '<h1> this is the grab restful api</h1>';
    // Render index view
    //return $this->renderer->render($response, 'juhehelp.phtml', $args);
})->setName('grab');
$app->get('/v1_0/grab/vip/youkuaccounts', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/users' route");
    $accout=new YouKu();
    $accouts=$accout->getAccout();
    $jsonresponse=$response->withJson($accouts, 201);
    return $jsonresponse;
})->setName('grab_vip_youkuacccounts');
$app->get('/v1_0/grab/vip/iqiyiaccounts', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/users' route");
    $accout=new AiQiYi();
    $accouts=$accout->getAccout();
    $jsonresponse=$response->withJson($accouts, 201);
    return $jsonresponse;
})->setName('grab_vip_iqiyiacccounts');
