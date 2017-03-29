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


          /*static pages*/
Route::get('/delivery', function (){
    return view('information.delivery');//реализовано
});
Route::get('/maps', function (){
    return view('information.maps');//реализовано
});
Route::get('/order/success', function (){
    return view('order.success');//реализовано
});


             /*Dynamic pages */
         /*Registration and authorization*/
Route::get('/login','SessionController@create');//реализовано
Route::post('/login','SessionController@store');//реализовано
Route::get('/register','RegistrationController@create');//реализовано
Route::post('/register','RegistrationController@store');//реализовано
Route::get('/logout','SessionController@destroy');//реализовано

                     /* feedback*/
Route::get('/communicate', 'CommunicateController@index');//реализовано
Route::post('/communicate','CommunicateController@store');//реализовано

                    /*Start news and action pages */
Route::get('/', 'NewsController@index');//реализовано
Route::get('/home', 'NewsController@index')->name('home');//реализовано
Route::get('/news/{action}', 'NewsController@show');//реализовано
Route::get('/moderator/news/create', 'NewsController@create');//реализовано
Route::post('/moderator/news/store', 'NewsController@store');//реализовано
Route::get('/moderator/news/{id}', 'NewsController@edit');//реализовано
Route::post('/moderator/news/update', 'NewsController@update');//реализовано хотя потом можно допилить
Route::DELETE('/moderator/news/destroy/{id}', 'NewsController@destroy');//реализовано

                      /* Show and editing of products*/
Route::get('/product' , 'ProductController@index');//реализовано
Route::get('/product/{alias}' ,'ProductController@show');//реализовано
Route::get('/moderator/product/edit/{id}', 'ProductController@edit');//реализовано
Route::get('/moderator/product/create', 'ProductController@create');//реализовано
Route::post('/moderator/product/store', 'ProductController@store');//реализовано
Route::post('/moderator/product/update/{id}', 'ProductController@update');//реализовано хотя потом можно допилить
Route::DELETE('/moderator/product/destroy/{id}','ProductController@destroy');//реализовано


Route::get('/cart_add/{product}' ,'CartController@add');//реализовано
Route::get('/cart_minus/{product}' ,'CartController@minus');//реализовано

                              //Basket
Route::get('/order/show','OrderController@index');//реализовано
Route::get('/order' , 'OrderController@create');//реализовано
Route::post('/order' , 'OrderController@store');//реализовано


                     //select and search
Route::get('product/category/{category}' , 'SearchController@searchCategory');//реализовано
Route::get('product/{category}/select/{type}/{param}' , 'SearchController@searchCategory');//реализовано
Route::get('product/select/{type}/{param}' ,'SearchController@show');//реализовано




Route::post('product/search' ,'SearchController@search');//поиск
Route::get('product/bookmark_add' ,'SearchController@bookmark');//добавление в закладки
Route::get('product/bookmark_minus' ,'SearchController@bookmark');//удаление с  закладок


//доделать админку с добавлением описания товара и добавлением фото


// добавить  к продуктам коментариии
//удаление с корзины и что-то надо думать с корзиной
//распределение ролей
//404
//грёбанный JS тормозит





