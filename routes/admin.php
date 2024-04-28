<?php

Route::prefix('/admin')->group(function(){
    //Dashboard
    Route::get('/', 'App\Http\Controllers\Admin\DashboardController@getDashboard');
    
    //User
    Route::get('/users', 'App\Http\Controllers\Admin\UserController@getUsers');
    
    //module products
    Route::get('/products', 'App\Http\Controllers\Admin\ProductController@getHome');
    Route::get('/product/add', 'App\Http\Controllers\Admin\ProductController@getProductAdd');
    Route::post('/product/add', 'App\Http\Controllers\Admin\ProductController@postProductAdd');
    Route::get('/product/{id}/edit', 'App\Http\Controllers\Admin\ProductController@getProductEdit');
    Route::post('/product/{id}/edit', 'App\Http\Controllers\Admin\ProductController@postProductEdit');
    Route::get('/product/{id}/delete', 'App\Http\Controllers\Admin\ProductController@getProductDelete');
    //categories
    Route::get('/categories/{module}', 'App\Http\Controllers\Admin\CategoriesController@getHome');
    Route::post('/category/add', 'App\Http\Controllers\Admin\CategoriesController@postCategoryAdd');
    Route::get('/category/{id}/edit', 'App\Http\Controllers\Admin\CategoriesController@getCategoryEdit');
    Route::post('/category/{id}/edit', 'App\Http\Controllers\Admin\CategoriesController@postCategoryEdit');
    Route::get('/category/{id}/delete', 'App\Http\Controllers\Admin\CategoriesController@getCategoryDelete');
    //clients
    Route::get('/clients', 'App\Http\Controllers\Admin\ClientController@getHome');
    Route::get('/client/add', 'App\Http\Controllers\Admin\ClientController@getClientAdd');
    Route::post('/client/add', 'App\Http\Controllers\Admin\ClientController@postClientAdd');
    Route::get('/client/{id_c}/edit', 'App\Http\Controllers\Admin\ClientController@getClientEdit');
    Route::post('/client/{id_c}/edit', 'App\Http\Controllers\Admin\ClientController@postClientEdit');
    Route::get('/client/{id_c}/delete', 'App\Http\Controllers\Admin\ClientController@getClientDelete');
    //bills
    Route::get('/bills', 'App\Http\Controllers\Admin\BillController@getHome');
    Route::get('/bill/add', 'App\Http\Controllers\Admin\BillController@getBillAdd');
    Route::post('/bill/add', 'App\Http\Controllers\Admin\BillController@postBillAdd');
    Route::get('/bill/{id}/edit', 'App\Http\Controllers\Admin\BillController@getBillEdit');
    Route::post('/bill/{id}/edit', 'App\Http\Controllers\Admin\BillController@postBillEdit');
    Route::get('/bill/{id}/delete', 'App\Http\Controllers\Admin\BillController@getBillDelete');
    Route::get('/admin/bills/{id}/pdf', 'App\Http\Controllers\Admin\BillController@downloadPDF')->name('bill.pdf');
});
