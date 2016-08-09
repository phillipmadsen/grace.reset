<?php
/**
 * Created by PhpStorm.
 * User: Phillip Madsen
 * Date: 8/2/2016
 * Time: 1:43 PM
 */
Route::group(['prefix' => LaravelLocalization::getCurrentLocale(), 'before' => ['localization', 'before']], function ()
{
    Route::get('/admin/ecom', [ 'as' => 'ecom', 'uses' =>'EcomController@index']);


    Route::get('/admin/products', [ 'as' => 'admin.products', 'uses' =>'EcomController@products']);
    Route::get('/admin/product/create', [ 'as' => 'admin.product.create', 'uses' =>'EcomController@createProduct']);
    Route::get('/admin/product/{id}/edit', [ 'as' => 'admin.product.edit', 'uses' =>'EcomController@editProduct']);


    Route::get('/admin/users', [ 'as' => '', 'uses' =>'EcomController@users']);
    Route::get('/admin/categories', [ 'as' => '', 'uses' =>'EcomController@categories']);
    Route::get('/admin/sections', [ 'as' => '', 'uses' =>'EcomController@sections']);
    Route::get('/admin/payment', [ 'as' => '', 'uses' =>'EcomController@payment']);
    Route::post('/admin/payment', [ 'as' => '', 'uses' =>'EcomController@paymentConfig']);
    Route::get('/admin/orders', [ 'as' => '', 'uses' =>'EcomController@orders']);
    Route::get('/admin/messages', [ 'as' => '', 'uses' =>'EcomController@messages']);
    Route::get('/admin/pages', [ 'as' => '', 'uses' =>'EcomController@pages']);
    Route::get('/admin/coupons', [ 'as' => '', 'uses' =>'EcomController@coupons']);


    Route::get('/admin/category/create', [ 'as' => '', 'uses' =>'EcomController@createCategory']);
    Route::get('/admin/category/{id}/edit', [ 'as' => '', 'uses' =>'EcomController@editCategory']);
    Route::get('/admin/user/create', [ 'as' => '', 'uses' =>'EcomController@createUser']);
    Route::get('/admin/user/{id}/edit', [ 'as' => '', 'uses' =>'EcomController@editUser']);
    Route::get('/admin/section/create', [ 'as' => '', 'uses' =>'EcomController@createSection']);
    Route::get('/admin/section/{id}/edit', [ 'as' => '', 'uses' =>'EcomController@editSection']);
    Route::get('/admin/message/{id}', [ 'as' => '', 'uses' =>'EcomController@showMessage']);
    Route::get('/admin/order/{id}', [ 'as' => '', 'uses' =>'EcomController@showOrder']);
    Route::get('/admin/page/create', [ 'as' => '', 'uses' =>'EcomController@createPage']);
    Route::get('/admin/page/{page_name}/edit', [ 'as' => '', 'uses' =>'EcomController@editPage']);
    Route::get('/admin/coupon/create', [ 'as' => '', 'uses' =>'EcomController@createCoupon']);
    Route::get('/admin/coupon/{id}/edit', [ 'as' => '', 'uses' =>'EcomController@editCoupon']);

});
