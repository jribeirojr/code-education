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


Route::get('/', 'WelcomeController@index');

Route::group(['prefix'=>'admin'], function(){

	Route::get('products', ['as'=>'produtos', 'uses'=>'AdminProductsController@index']);

	Route::get('categories', ['as'=>'categorias', 'uses'=>'AdminProductsController@index']);

});


// Route::get('admin/categories', 'AdminCategoriesController@index');

// Route::get('admin/products', 'AdminProductsController@index');

// // Serve para quando desejo ter mais de um verbo para a mesma rota / action
// Route::match(['post', 'get'], '/exemplo02', function(){
// 	return 'Definie quais os verbos ela irá aceitar';
// });

// // Quando desejo que uma determinada rota utilize todos os verbos (put, delete, get, post)
// Route::any('/exemplo03', function(){
// 	return 'todos os tipos de verbos';
// });

// // Com passagem de parâmetros, com o ? é um parâmetro não obrigatório
// // Colocando o Where no final da rota, podemos trabalhar com expressões regulares, da forma abaixo só aceita números e não texto
// // Para não ficar repetindo o where no fnal de cada rota podemos criar um pattern, exmeplo
// // 		Route:;pattern('id', '[0-9]');
// // 		Neste caso podemos tirar o WHERE do final da rota, e toda vez que encontrar um parâmetro do tipo ID irá aplicar a regra
// Route::get('user/{id?}', function($id = null){
// 	if($id)
// 		return "Olá $id";

// 	return "Não possui id";
// })->where('id', '[0-9]+');

// // Rotas agrupadas - podem ser usadas para área administrativa
// // ao invés de fazer isto Route::get(admin/products....), usamos da maneira abaixo dentro de um grupo de rotas
// // pode ser usado também ao invés de PREFIX usamos NAMESPACE ou MIDDLEWARE
// Route::group(['prefix'=>'admin'], function(){
// 	Route::get('products', function(){
// 		return "Products Admin";
// 	});

// });

// Podemos passar na rota um model por exemplo
// 

// Perguntas
//		E se tiver que passar mais de um parâmetro dentro de uma rota e validar ela, o mais correto seria criar o pattern para isso?
//		E se eu tiver que criar mais de um pattern, o mesmo é um array ou teria que criar linha por linha, se eu tiver 30 parâmetros diferentes, como ficaria?
//		