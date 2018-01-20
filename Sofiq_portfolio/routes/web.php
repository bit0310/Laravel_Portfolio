<?php


Route::get('/', [
    'uses' => 'PortfolioController@index',
    'as'=>  '/'
    ]);


Route::get('/about', [
    'uses' => 'PortfolioController@about',
    'as'=>  'about'
]);


Route::get('/portfolio', [
    'uses' => 'PortfolioController@portfolio',
    'as'=>  'portfolio'
]);

Route::get('/research', [
    'uses' => 'PortfolioController@research',
    'as'=>  'research'
]);


Route::get('/project1', [
    'uses' => 'PortfolioController@project1',
    'as'=>  'project1'
]);

Route::get('/project2', [
    'uses' => 'PortfolioController@project2',
    'as'=>  'project2'
]);


Route::get('/contact', [
    'uses' => 'PortfolioController@contact',
    'as'=>  'contact'
]);


Route::get('/gallery', [
    'uses' => 'PortfolioController@gallery',
    'as'=>  'gallery'
]);


Route::get('/register', [
    'uses' => 'PortfolioController@register',
    'as'=>  'register'
]);