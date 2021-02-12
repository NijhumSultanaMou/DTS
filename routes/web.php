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

//frontend
Route::get('/','Frontend\FrontendController@index');
Route::get('/about-us','Frontend\FrontendController@aboutus');
Route::get('/contact-us','Frontend\FrontendController@contactus');
Route::get('/blog','Frontend\FrontendController@blog');
Route::get('/areaguide','Frontend\FrontendController@areaguide');
Route::get('/property','Frontend\FrontendController@property');
Route::get('/user_login','Frontend\FrontendController@user_login');
Route::get('/user_register','Frontend\FrontendController@user_register');

// Owner
Route::get('/Owner/OwnerDashboard',[
        'uses'=>'Owner\OwnerPropertyController@index',
        'as'=>'Owner.index'
    ]);

Route::get('/Owner/Create',[
        'uses'=>'Owner\OwnerPropertyController@create',
        'as'=>'Owner.Create'
    ]);

Route::post('/Owner/store',[
        'uses'=>'Owner\OwnerPropertyController@store',
        'as'=>'Owner.store'
    ]);
Route::get('/Owner/View', [
    'uses'=>'Owner\OwnerPropertyController@show',
    'as'=>'Owner.View'
]);

    Route::get('/Owner/edit/{id}',[
        'uses'=>'Owner\OwnerPropertyController@edit',
        'as'=>'Owner.edit'
    ]);

       Route::post('/Owner/update/{id}',[
        'uses'=>'Owner\OwnerPropertyController@update',
        'as'=>'Owner.update'
    ]);

    Route::get('/Owner/delete/{id}',[
	'uses'=>'Owner\OwnerPropertyController@destroy',
	'as'=>'Owner.delete'
]);

Route::get('/Owner/ViewNecessity', [
    'uses'=>'Owner\OwnerPropertyController@tenantnecessity',
    'as'=>'Owner.ViewNecessity'
]);

// Tenant

    Route::get('/Tenant/TenantDashboard',[
        'uses'=>'Tenant\TenantNecessityController@index',
        'as'=>'Tenant.index'
    ]);

Route::get('/Tenant/Create',[
        'uses'=>'Tenant\TenantNecessityController@create',
        'as'=>'Tenant.Create'
    ]);

Route::post('/Tenant/store',[
        'uses'=>'Tenant\TenantNecessityController@store',
        'as'=>'Tenant.store'
    ]);

Route::get('/Tenant/View', [
    'uses'=>'Tenant\TenantNecessityController@show',
    'as'=>'Tenant.View'
]);

Route::get('/Tenant/edit/{id}',[
        'uses'=>'Tenant\TenantNecessityController@edit',
        'as'=>'Tenant.edit'
    ]);

       Route::post('/Tenant/update/{id}',[
        'uses'=>'Tenant\TenantNecessityController@update',
        'as'=>'Tenant.update'
    ]);

Route::get('/Tenant/delete/{id}',[
    'uses'=>'Tenant\TenantNecessityController@destroy',
    'as'=>'Tenant.delete'
]);  

Route::get('/Tenant/ViewProperty', [
    'uses'=>'Tenant\TenantNecessityController@ownerproperty',
    'as'=>'Tenant.ViewProperty'
]);

Route::get('/Tenant/ViewArea', [
    'uses'=>'Tenant\TenantNecessityController@viewarea',
    'as'=>'Tenant.ViewArea'
]);

//admin
//admin_property
Route::get('/Admin/AdminDashboard',[
        'uses'=>'Admin\AdminController@index',
        'as'=>'Admin.index'
    ]);

Route::get('/Admin/property_view', [
    'uses'=>'Admin\PropertyController@show',
    'as'=>'Admin.property_view'
]);

Route::get('/Admin/property_edit/{id}',[
        'uses'=>'Admin\PropertyController@edit',
        'as'=>'Admin.property_edit'
    ]);

       Route::post('/Admin/update/{id}',[
        'uses'=>'Admin\PropertyController@update',
        'as'=>'Admin.update'
    ]);

Route::get('/Admin/delete/{id}',[
    'uses'=>'Admin\PropertyController@destroy',
    'as'=>'Admin.delete'
]);  

//admin_necessity

Route::get('/Admin/necessity_view', [
    'uses'=>'Admin\NecessityController@show',
    'as'=>'Admin.necessity_view'
]);

Route::get('/Admin/necessity_edit/{id}',[
        'uses'=>'Admin\NecessityController@edit',
        'as'=>'Admin.necessity_edit'
    ]);

       Route::post('/Admin/updated/{id}',[
        'uses'=>'Admin\NecessityController@update',
        'as'=>'Admin.updated'
    ]);

Route::get('/Admin/deleted/{id}',[
    'uses'=>'Admin\NecessityController@destroy',
    'as'=>'Admin.deleted'
]);  

//admin_areaguide
Route::get('/Admin/create_area',[
        'uses'=>'Admin\AreaGuideController@create',
        'as'=>'Admin.Create'
    ]);

Route::post('/Admin/store',[
        'uses'=>'Admin\AreaGuideController@store',
        'as'=>'Admin.store'
    ]);

Route::get('/Admin/view_area', [
    'uses'=>'Admin\AreaGuideController@show',
    'as'=>'Admin.view_area'
]);

Route::get('/Admin/area_edit/{id}',[
        'uses'=>'Admin\AreaGuideController@edit',
        'as'=>'Admin.area_edit'
    ]);

   Route::post('/Admin/updates/{id}',[
        'uses'=>'Admin\AreaGuideController@update',
        'as'=>'Admin.updates'
    ]);

   Route::get('/Admin/deletes/{id}',[
    'uses'=>'Admin\AreaGuideController@destroy',
    'as'=>'Admin.deletes'
]);  
//other
Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
