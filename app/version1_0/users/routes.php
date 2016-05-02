<?php
/**
请实例化控制器，并且在控制器中获取到模型数据，然后传递给$args数组


**/
namespace app\version1_0\users;
// Routes
$app->get('/users', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/users' route");
     echo '<h1> users test! </h1>';
    // Render index view
    //return $this->renderer->render($response, 'juhehelp.phtml', $args);
})->setName('users');

