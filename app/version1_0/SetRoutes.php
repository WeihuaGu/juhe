<?php
namespace app\version1_0;
Class SetRoutes{
	function setRoutes($app){
	require_once 'users/routes.php';
	require_once 'grab/routes.php';
	return $app;
       }

}

