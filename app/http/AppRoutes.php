<?php
namespace app\http;
class AppRoutes{

	function setRoutes($app){
	$this->setversion1_0($app);		
	}
	function setversion1_0($app){
	$v1_0=new \app\version1_0\SetRoutes();	
        $v1_0->setRoutes($app);
	}

}
