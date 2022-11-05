<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
// $routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
// $routes->get('user/(:num)', 'User::getEdit/$1');
// $routes->group('user', static function ($routes) {
//     $routes->get('user/(:num)', 'User::getEdit/$1');
// });

$routes->group('user', static function ($router) {
    $router->get('/', 'User::index');
    $router->get('(:num)', 'User::edit/$1');
    $router->get('table', 'User::table');
    $router->get('tambah', 'User::tambah');
    $router->get('edit', 'User::edit');

    $router->delete('(:num)', 'User::delete/$1');

    $router->post('/', 'User::postIndex');
});

$routes->group('penduduk', static function ($router) {
    $router->get('/', 'Penduduk::index');
    $router->get('table', 'Penduduk::table');
    $router->get('tambah', 'Penduduk::tambah');
    $router->get('edit', 'Penduduk::edit');
    $router->get('(:num)', 'Penduduk::edit/$1');
    $router->get('detail/(:num)', 'Penduduk::detail/$1');

    $router->delete('(:num)', 'Penduduk::delete/$1');

    $router->post('/', 'Penduduk::add');
    $router->post('(:num)', 'Penduduk::save/$1');
});

$routes->group('kriteria', static function ($router) {
    $router->get('/', 'Kriteria::index');
    $router->get('table', 'Kriteria::table');
    $router->get('tambah', 'Kriteria::tambah');
    $router->get('edit', 'Kriteria::edit');
    $router->get('(:num)', 'Kriteria::edit/$1');
    $router->get('detail/(:num)', 'Kriteria::detail/$1');

    $router->delete('(:num)', 'Kriteria::delete/$1');

    $router->post('/', 'Kriteria::add');
    $router->post('(:num)', 'Kriteria::save/$1');
});



$routes->group('subkriteria', static function ($router) {
    $router->get('/', 'Subkriteria::index');
    $router->get('table', 'Subkriteria::table');
    $router->get('tambah', 'Subkriteria::tambah');
    $router->get('edit', 'Subkriteria::edit');
    $router->get('(:num)', 'Subkriteria::edit/$1');
    $router->get('detail/(:num)', 'Subkriteria::detail/$1');

    $router->delete('(:num)', 'Subkriteria::delete/$1');

    $router->post('/', 'Subkriteria::add');
    $router->post('(:num)', 'Subkriteria::save/$1');
});

$routes->group('tablemoora', static function ($router) {
    $router->get('/', 'Perhitungan::index');
    $router->get('table', 'Perhitungan::table');
    $router->get('tambah', 'Perhitungan::tambah');
    $router->get('edit', 'Perhitungan::edit');
    $router->get('(:num)', 'Perhitungan::edit/$1');
    $router->get('detail/(:num)', 'Perhitungan::detail/$1');

    $router->delete('(:num)', 'Perhitungan::delete/$1');

    $router->post('/', 'Perhitungan::add');
    $router->post('(:num)', 'Perhitungan::save/$1');
});

$routes->group('keputusan', static function ($router) {
    $router->get('/', 'Keputusan::index');
    $router->get('table', 'Keputusan::table');
    $router->get('tambah', 'Keputusan::tambah');
    $router->get('edit', 'Keputusan::edit');
    $router->get('(:num)', 'Keputusan::edit/$1');
    $router->get('detail/(:num)', 'Keputusan::detail/$1');

    $router->delete('(:num)', 'Keputusan::delete/$1');

    $router->post('/', 'Keputusan::add');
    $router->post('(:num)', 'Keputusan::save/$1');
});

$routes->group('laporan', static function ($router) {
    $router->get('/', 'Laporan::index');
});



// my custom router

// $routes->post('/user', 'User::postUser');
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
