<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AWBController;

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
Route::get('/', function()
{
    return 'Hello World';
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');

    Route::get('awb_entry','DashboardController@awb_entry')->name('awb.awb_entry');

    Route::post('storeawb','AWBController@storeawb')->name('storeawb');
    
    
    Route::resource('delivery-statuses','DeliveryStatusesController');

    Route::resource('service-areas','ServiceAreasController');
    
    Route::resource('roles','RolesController');

    Route::resource('users','UsersController');

    Route::get('change-password','UsersController@changePassword')->name('user.change-password');

    Route::post('update-password','UsersController@updatePassword')->name('user.update-password');
    
    Route::get('markStatusBulk', 'AWBController@markStatusBulk')->name('markStatusBulk');
    Route::post('markStatusDoneBulk', 'AWBController@markStatusDoneBulk')->name('markStatusDoneBulk');



});

require __DIR__.'/auth.php';
