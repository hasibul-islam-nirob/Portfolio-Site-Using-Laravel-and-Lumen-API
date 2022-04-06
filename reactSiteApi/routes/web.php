<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// ============  Chart Data Routing Start ==================
$router->get('/chartData','ChartDataController@onAllSelect');

// ============  Chart Data Routing End ==================


// ============  Contact Routing Start ==================
$router->post('/contactSend','ContactTableController@onContactSend');

// ============  Contact Routing End ==================


// ============ Course Routing Start ==================
$router->get('/courseHome','CourseTableController@onSelectFour');
$router->get('/courseAll','CourseTableController@onSelectAll');
$router->post('/courseDetails','CourseTableController@onSelectDetails');
// ============ Course Routing End ==================


// ============  Client Review Data Routing Start ==================
$router->get('/','ChartDataController@onAllSelect');
// ============  Client Review Data Routing End ==================