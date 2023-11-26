<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->setAutoRoute(true);

// Membuat Database
$routes->get('create-db', function(){
    $forge = \Config\Database::forge();
    if ($forge->createDatabase('wedding')) 
    {
        echo 'Database created!';
    }
});

// CRUD
$routes->get('acara', 'Acara::index'); // Acara index, create mengambil dari controller Acara
$routes->get('acara/add', 'Acara::create');
$routes->post('acara', 'Acara::store');
$routes->get('acara/edit/(:num)', 'Acara::edit/$1');
$routes->put('acara/(:any)', 'Acara::update/$1');
$routes->delete('acara/(:segment)', 'Acara::destroy/$1');

// $routes->get('home', 'Home::index');
$routes->addRedirect('/', 'home');

// Login
$routes->get('login', 'Auth::login');

$routes->get('groups/trash', 'Groups::trash');
$routes->get('groups/restore/(:any)', 'Groups::restore/$1');
$routes->get('groups/restore/', 'Groups::restore');
$routes->delete('groups/delete2/(:any)', 'Groups::delete2/$1');
$routes->delete('groups/delete2', 'Groups::delete2');
$routes->presenter('groups', ['filter' => 'isLoggedIn']);

