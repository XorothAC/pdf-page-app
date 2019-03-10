<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// Route::get('/', function () use ($router) {
//     return $router->app->version();
// });

Route::get('/', 'DocumentController@index');

Route::group(['prefix' => 'api/v1', 'middleware' => 'auth'], function ($router) {
    Route::get('documents', 'DocumentController@displayDocuments');
    Route::post('documents', 'DocumentController@displayDocuments');

    Route::get('documents/{document}', 'DocumentController@getDocument');
    Route::post('documents/{document}', 'DocumentController@addDocument');
    Route::delete('documents/{document}', 'DocumentController@deleteDocument');

    Route::get('documents/{document}/attachment', 'DocumentController@getDocumentAttach');
    Route::get('documents/{document}/attachment/previews', 'DocumentController@displayDocaments');
    Route::get('documents/{document}/attachment/previews/{preview}', 'DocumentController@displayDocuments');
    Route::get('documents/{document}/attachment/upload', 'DocumentController@getDocument');
    Route::post('documents/{document}/attachment/upload', 'DocumentController@displayDocuments');

    Route::get('users', 'getUsers');
    Route::post('users', 'addUser');
});

Route::group(['prefix' => '/'], function () use ($router) {
    Route::get('{any}', 'DocumentController@displayDocuments');
    Route::post('{any}', 'DocumentController@displayDocuments');
    Route::put('{any}', 'DocumentController@displayDocuments');
    Route::patch('{any}', 'DocumentController@displayDocuments');
    Route::delete('{any}', 'DocumentController@displayDocuments');
});