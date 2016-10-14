<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
foreach (new DirectoryIterator(__DIR__.'/Routes') as $file)
{
    if (!$file->isDot() && !$file->isDir() && $file->getFilename() != '.gitignore')
    {
        require_once __DIR__.'/Routes/'.$file->getFilename();
        //require_once __DIR__.'/Routes/'.$file->getFilename();
    }
}

Route::get('/', ['as' => 'doLogin', 'uses' => 'CustomAuthController@getLogin']);   
Route::post('/login', ['as' => 'loginpost', 'uses' => 'CustomAuthController@postLogin']);
Route::get('/logout', 'CustomAuthController@getLogout');



Route::group(['prefix' => '/index'], function(){
	Route::get('/inicio',['as' => 'doInicio', 'uses' => 'InicioController@index']);

});

/*
Route::get('/', function () {
    return view('main');
});
*/


