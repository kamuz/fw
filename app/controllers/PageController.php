<?php

namespace app\controllers;

class PageController{

	public function __construct( $route ) {
		debug( $route );
	}

	public function indexAction(){
		echo __METHOD__;
	}

	public function viewAction(){
		echo __METHOD__;
	}
}