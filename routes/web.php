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
route::get('/','StaticPagesController@home');
route::get('/help','StaticPagesController@help');
route::get('/about','StaticPagesController@about');
