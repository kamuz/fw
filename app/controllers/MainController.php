<?php

namespace app\controllers;

class MainController extends AppController {
	public function indexAction(){
		debug( $this->route );
	}

	public function viewAction(){
		echo __METHOD__;
	}
}