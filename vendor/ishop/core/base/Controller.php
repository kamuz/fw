<?php

namespace ishop\base;

abstract class Controller {

	public $route;
	public $controller;
	public $model;
	public $view;
	public $prefix;
	public $data = [];
	public $meta = [];

	// Define app variables
	public function __construct( $route ) {
		$this->route = $route;
		$this->controller = $route['controller'];
		$this->model = $route['controller'];
		$this->view = $route['action'];
		$this->prefix = $route['prefix'];
	}

	// Save data for sending from controller to view
	public function set( $date ) {
		$this->data = $data;
	}

	// Set meta data
	public function setMeta( $title = '', $description = '' ) {
		$this->meta['title'] = $title;
		$this->meta['description'] = $description;
	}
}