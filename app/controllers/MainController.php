<?php

namespace app\controllers;

use ishop\App;

class MainController extends AppController {

	public function indexAction(){
		$this->setMeta( App::$app->getProperty('shop_name') . ' - Home page', 'This is test description' );
		$company = 'Upwork';
		$todo = ['Call with client', 'Go to the shop', 'Play with children'];
		$position = 'WordPress Developer';
		$this->set( ['name' => 'Vladimir', 'country' => 'Ukraine', 'todo' => $todo, 'work' => compact( 'company', 'position' )] );
	}

	public function viewAction(){

	}
}