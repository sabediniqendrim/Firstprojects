<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->get('/reserve', 'ExampleController@index')->name('reserve');
    $router->resource('business_hours', business_hoursController::class);
    $router->resource('appointments', AppointmentsController::class);
    $router->resource('feiertag', FeiertagController::class);
    $router->get('/reserveadmin','AppointmentsadminController@index' )->name('reserveadmin');

});
