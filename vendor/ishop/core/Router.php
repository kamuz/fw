<?php

namespace ishop;

class Router {

	// All routes
	protected static $routes = [];
	// Current route
	protected static $route = [];

	// Add rule to the routes
	public static function add( $regexp, $route = [] ) {
		self::$routes[ $regexp ] = $route;
	}

	// Get all routes
	public static function getRoutes() {
		return self::$routes;
	}

	// Get current route
	public static function getRoute() {
		return self::$route;
	}

	// Work with URL
	public static function dispatch( $url ) {
		if ( self::matchRoute( $url ) ) {
			echo 'Okay';
		} else {
			echo 'Nope';
		}
	}

	// Search matches
	public static function matchRoute( $url ) {
		return false;
	}
}