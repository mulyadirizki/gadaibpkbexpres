<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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
$routes->setAutoRoute(false);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->get('login', 'C_login::index');
$routes->post('login/proses', 'C_login::proses');
// $routes->get('v_register', 'C_login::register');
// $routes->post('register/proses', 'C_login::proses_register');

$routes->get('logout', 'C_login::logout');

$routes->get('pengajuan-simulasi', 'C_front::pengajuan');

$routes->get('proses-kredit', 'C_front::pengajuan');

$routes->post('proses-pengajuan-simulasi', 'C_front::process_simulasi');

$routes->post('sent-message', 'C_front::process');

// Route to administrator
$routes->group('administrator', ['filter' => 'ceklogin'], function($routes){
	$routes->get('/', 'C_admin::index');

	$routes->get('message', 'C_admin::pesan');
	$routes->get('message/hapus/(:any)', 'C_front::delete/$1');
	$routes->get('pengajuan-customers', 'C_admin::pengajuan');
	$routes->get('pengajuan-customers/hapus/(:any)', 'C_front::delete_pengajuan/$1');

	$routes->get('profile', 'C_admin::profile');
	$routes->get('profile/create', 'C_profile::create');
	$routes->post('profile/store', 'C_profile::process');
	$routes->get('profile/edit/(:any)', 'C_profile::update/$1');
	$routes->post('profile/store-edit/(:any)', 'C_profile::process_edit/$1');
	$routes->get('profile/hapus/(:any)', 'C_profile::delete/$1');

	$routes->get('gambar-kendaraan', 'C_admin::images');
	$routes->get('images/create', 'C_upload::create');
	$routes->post('images/store', 'C_upload::process');
	$routes->get('images/hapus/(:any)', 'C_upload::delete/$1');
	
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
