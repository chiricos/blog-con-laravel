<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('article/{nombre?}',function($nombre = "no coloco nombre"){
	echo 'el nombre que has colocado es '. $nombre;
});

Route::get('articles1',[
	'as' =>	'articles',
	'users'	=>	'UserController@index'
	]);

Route::group(['prefix'=>'articles'],function(){
	Route::get('vista/{article?}',function($article = "vacio"){
		echo $article;
	});
	Route::get('view/{id}',[
		'uses'		=>		'TestController@view',
		'as'		=>		'articlesView'
		]);
});



/*========================
BLOG
========================*/

Route::group(['prefix'=>'admin'],function(){

	Route::resource('users','UsersController');
	Route::get('users/{id}/destroy',[
		'uses'	=>	'UsersController@destroy',
		'as'	=>	'admin.users.destroy'
	]);
});