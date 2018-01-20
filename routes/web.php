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
//首頁
Route::get('/', function () {
    return view('welcome');
});
//所有在職廚師列表
Route::get('chefs', 'ChefsController@index')
    ->name('chefs.index');
//新增廚師資料
Route::get('chefs/create', 'ChefsController@create')
    ->name('chefs.create');
//儲存資料
Route::post('chefs', 'ChefsController@store')
    ->name('chefs.store');
//檢視某位廚師的所有食譜
Route::get('chefs/{id}', 'ChefsController@show')
    ->where('id', '[0-9]+')
    ->name('chefs.show');
//修改廚師資料
Route::get('chefs/{id}/edit', 'ChefsController@edit')
    ->where('id', '[0-9]+')
    ->name('chefs.edit');
//更新廚師資料
Route::patch('chefs/{id}', 'ChefsController@update')
    ->where('id', '[0-9]+')
    ->name('chefs.update');
//軟刪除
Route::get('chefs/{id}/delete', 'ChefsController@destroy')
    ->where('id', '[0-9]+')
    ->name('chefs.destroy');
//回復資料
Route::get('chefs/{id}/restore', 'ChefsController@restore')
    ->where('id', '[0-9]+')
    ->name('chefs.restore');
//所有離職廚師列表
Route::get('chefs/quit', 'ChefsController@quit')
    ->name('chefs.quit');
//所有食譜列表
Route::get('cookbooks', 'CookbooksController@index')
    ->name('cookbooks.index');
//新增食譜資料
Route::get('cookbooks/create', 'CookbooksController@create')
    ->name('cookbooks.create');
//儲存資料
Route::post('cookbooks', 'CookbooksController@store')
    ->name('cookbooks.store');

Route::get('cookbooks/{id}', 'CookbooksController@show')
    ->where('id', '[0-9]+')
    ->name('cookbooks.show');
//修改食譜資料
Route::get('cookbooks/{id}/edit', 'CookbooksController@edit')
    ->where('id', '[0-9]+')
    ->name('cookbooks.edit');
//更新食譜資料
Route::patch('cookbooks/{id}', 'CookbooksController@update')
    ->where('id', '[0-9]+')
    ->name('cookbooks.update');
//軟刪除
Route::get('cookbooks/{id}/delete', 'CookbooksController@destroy')
    ->where('id', '[0-9]+')
    ->name('cookbooks.destroy');
//回復資料
Route::get('cookbooks/{id}/restore', 'CookbooksController@restore')
    ->where('id', '[0-9]+')
    ->name('cookbooks.restore');
//所有已刪除食譜列表
Route::get('cookbooks/deleted', 'CookbooksController@deleted')
    ->name('cookbooks.deleted');
