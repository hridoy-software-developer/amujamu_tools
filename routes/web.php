<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/check', 'DashboardController@check')
    ->name('Dashboard.check');

Route::get('/login', 'DashboardController@login')
    ->name('Dashboard.login');
    
Route::get('/dashboard', 'DashboardController@index')
    ->name('Dashboard.index');

Route::group(
[
    'prefix' => 'locations',
], function () {

    Route::get('/', 'LocationsController@index')
         ->name('locations.location.index');

    Route::get('/create','LocationsController@create')
         ->name('locations.location.create');

    Route::get('/show/{location}','LocationsController@show')
         ->name('locations.location.show')
         ->where('id', '[0-9]+');

    Route::get('/{location}/edit','LocationsController@edit')
         ->name('locations.location.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'LocationsController@store')
         ->name('locations.location.store');
               
    Route::put('location/{location}', 'LocationsController@update')
         ->name('locations.location.update')
         ->where('id', '[0-9]+');

    Route::delete('/location/{location}','LocationsController@destroy')
         ->name('locations.location.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'clients',
], function () {

    Route::get('/', 'ClientsController@index')
         ->name('clients.client.index');

    Route::get('/create','ClientsController@create')
         ->name('clients.client.create');

    Route::get('/show/{client}','ClientsController@show')
         ->name('clients.client.show')
         ->where('id', '[0-9]+');

    Route::get('/{client}/edit','ClientsController@edit')
         ->name('clients.client.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'ClientsController@store')
         ->name('clients.client.store');
               
    Route::put('client/{client}', 'ClientsController@update')
         ->name('clients.client.update')
         ->where('id', '[0-9]+');

    Route::delete('/client/{client}','ClientsController@destroy')
         ->name('clients.client.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
    [
        'prefix' => 'manual_bookings',
    ], function () {
    
        Route::get('/', 'ManualBookingController@index')
        ->name('manual_bookings.manual_booking.index');

        Route::get('/deatils', 'ManualBookingController@deatils')
        ->name('manual_bookings.manual_booking.deatils');

        Route::get('/Manual_Booking', 'ManualBookingController@index')
        ->name('manual_bookings.manual_booking.Manual_Booking');
    
        Route::get('/create','ManualBookingController@create')
        ->name('manual_bookings.manual_booking.create');
    
        Route::post('/create_booking','ManualBookingController@create_booking')
        ->name('manual_bookings.manual_booking.create_booking');
        
        Route::get('/booking_save','ManualBookingController@booking_save')
        ->name('manual_bookings.manual_booking.booking_save');
        
        Route::get('/booking_list_save','ManualBookingController@booking_list_save')
        ->name('manual_bookings.manual_booking.booking_list_save');
    
    });
