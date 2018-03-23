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

// funcion de busqueda de slug---inyeccion de dependencias
Route::bind('productos', function($slug){
	return ActivaElectronic\Producto::where('slug',$slug)->first();
});

Route::get('/', 'FrontController@index');
Route::get('nosotros', 'FrontController@nosotros');
Route::get('politicas', 'FrontController@politicas');
Route::get('productos', 'FrontController@productos');

Route::get('soluciones', 'FrontController@soluciones');
Route::get('desarollo', 'FrontController@desarollo');
Route::get('software', 'FrontController@software');
Route::get('descargas', 'FrontController@descargas');
Route::get('contactenos', 'FrontController@contactenos');
Route::get('distribuidor', 'FrontController@distribuidor');
Route::get('admin','FrontController@admin');

Route::get('categorias/{categoria}',[
    'uses' =>'FrontController@searchCategorias',
    'as' => '/.search.categorias'
	]);

Route::get('productos/{slug}',[
'as' => 'product-detail',
'uses' =>'FrontController@show'
]);


//admin  
Route::resource('usuario','UsuarioController');
Route::resource('categori','CategoriaController');
Route::resource('product','ProductoController');
Route::resource('slider','SliderController');
Route::resource('solucion','SolucionesController');

Route::resource('listadeprecios','ListaController');
//orden


Route::get('admin/orders',[
  'as' => 'admin.order.index',
  'uses' => 'OrderController@index'
  ]);

Route::resource('log','LogController');
Route::get('logout','LogController@logout');



//administrar rutas de carrito.................

Route::get('cart/show', [
   'as' => 'cart-show',
   'uses' => 'CartController@show'
	]);
Route::get('cart/add/{productos}', [
   'as' => 'cart-add',
   'uses' => 'CartController@add'
	]);

Route::get('cart/delete/{productos}', [
    'as' => 'cart-delete',
    'uses' => 'CartController@delete'
  ]);

Route::get('cart/trash',[
    'as' => 'cart-trash',
    'uses' => 'CartController@trash'
  ]);
Route::get('cart/update/{productos}/{cantidad?}', [
    'as' => 'cart-update',
    'uses' => 'CartController@update'
  ]);

//order detail........

Route::get('order-detail',[

'as' => 'order-detail',
'uses' => 'CartController@orderDetail'
  ]);


//enviar por email

Route::resource('email','MailController');
Route::resource('registro','DistribuidorController');
Route::resource('pedido','PedidoController');


//recuperar contraseña

//Route::get('password/email','Auth\passwordController@getEmail');
//Route::post('password/email','Auth\passwordController@postEmail');