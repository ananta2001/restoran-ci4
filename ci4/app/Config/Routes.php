<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('admin', 'admin/login::index');

//$routes->get('kategori/(:any)', 'Admin\Kategori::selectWhere/$1');

$routes->group('admin', ['filter' => 'Auth'], function ($routes) {
	$routes->add('/', 'Admin\adminpage::index');
	$routes->add('kategori', 'Admin\kategori::read');
	$routes->add('kategori/create', 'Admin\kategori::create');
	$routes->add('kategori/find/(:any)', 'Admin\kategori::find/$1');
	$routes->add('kategori/delete/(:any)', 'Admin\kategori::delete/$1');

	$routes->add('menu', 'Admin\menu::index');
	$routes->add('menu', 'Admin\menu::read');
	$routes->add('menu/create', 'Admin\menu::create');
	$routes->add('menu/find/(:any)', 'Admin\menu::find/$1');
	$routes->add('menu/delete/(:any)', 'Admin\menu::delete/$1');

	$routes->add('pelanggan', 'Admin\pelanggan::index');
	$routes->add('pelanggan/create', 'Admin\pelanggan::create');
	$routes->add('pelanggan/find/(:any)', 'Admin\pelanggan::find/$1');
	$routes->add('pelanggan/delete/(:any)', 'Admin\pelanggan::delete/$1');

	$routes->add('order', 'Admin\order::index');
	$routes->add('order/find/(:any)', 'Admin\order::find/$1');

	$routes->add('orderdetail', 'Admin\orderdetail::index');

	$routes->add('user', 'Admin\user::index');
	$routes->add('user/find/(:any)', 'Admin\user::find/$1');
	$routes->add('user/delete/(:any)', 'Admin\user::delete/$1');
});

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
