<?php

namespace app\controllers;

class MainController extends AppController {
	public function indexAction(){
		debug( $this->route );
		echo __METHOD__;
	}

	public function viewAction(){
		echo __METHOD__;
	}
}