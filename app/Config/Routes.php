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

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

//ROUTES API
$routes->resource('Api/alergi/');
$routes->resource('Api/alergi');
$routes->resource('Api/analisisrekomendasi');
$routes->resource('Api/datalifestyle');
$routes->resource('Api/datapasien');
$routes->resource('Api/konten');
$routes->resource('Api/kuesioner');
$routes->resource('Api/kuesionerpasien');
$routes->resource('Api/lifestylepasien');
$routes->resource('Api/pasien');
$routes->resource('Api/pesan');
$routes->resource('Api/riwayatkeluarga');
$routes->resource('Api/riwayatobat');
$routes->resource('Api/riwayatpenyakit');
$routes->resource('Api/tekanandarah');


//---------------------------------------------------------------------
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
