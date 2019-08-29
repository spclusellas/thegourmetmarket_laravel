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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@main')->name('home');

Route::get('/faqs', 'PagesController@faqs')->name('faqs');

// Route::get('/', 'HomeController@index');
Route::get('/faq', 'FAQController@index');

// Estas dor rutas se crearon antes de hacer el auth
// Route::get('/signin', 'SignInController@index');
// Route::get('/register', 'RegisterController@index');

Auth::routes();

Route::get('/home', 'HomeController@main')->name('home');

Route::get('/productos', 'ProductController@index');
Route::get('/Organicos', 'ProductController@indexOrganico');
Route::get('/Hogar', 'ProductController@indexHogar');
Route::get('/Snacks', 'ProductController@indexSnacks');
Route::get('/Vinos', 'ProductController@indexVinos');
Route::get('/Alacena', 'ProductController@indexAlacena');
Route::get('/Otra', 'ProductController@indexOtra');
Route::get('/Sale', 'ProductController@indexSale');
Route::get('/Novedades', 'ProductController@indexNovedades');

// Aquí es donde controlo lo del carrito de compras, agregar productos
Route::get('cart/add/{id}', "CartController@add")->name('cart.add')->middleware('auth');
//Carrito de compras elimino productos
Route::get('cart/remove/{id}', "CartController@remove")->name('cart.remove')->middleware('auth');
//Muestro los productos del carrito
Route::get('/cart', 'CartController@show')->name('cart')->middleware('auth');
// Route::get('/agregar-al-carrito/{id}', [
//   'uses' => 'ProductController@addToCart',
//   'as' => 'product.addToCart'
// ]);
// Route::get('/carrito', [
//   'uses' => 'ProductController@getCarrito',
//   'as' => 'product.carrito'
// ]);


// Aquí es donde muestros los productos
Route::get('/show/{id}', 'ProductController@show')->name('front.product.show');
//Ruta creada para buscar los productos
Route::get('/search', 'ProductController@search')->name('product.search');
//Este grupo de rutas controla si el usuario es administrador o no
//Ojo El usuario administrador deben colocarle en la base de datos tabla users, el role 7
Route::group(['prefix' => 'admin', 'middleware' => ['auth','role']], function () {
    Route::resource('/products', 'AdminProductController');
    Route::resource('/users', 'AdminUserController');
});
//Aquí accedo al perfil del usuario para efctuar cualquier ajuste
Route::get('/profile', "UserController@show")->name("profile")->middleware('auth');

Auth::routes();

//Rutas para el acceso a administrador
Route::group(['prefix' => 'auth'], function () {
    Route::get('/{provider}', 'Auth\LoginController@redirectToProvider');
    Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
});


    Route::get('/edit/{id}', 'UserUpdate@edit')->middleware('auth')->name('edit');
    Route::put('/update/{id}', 'UserUpdate@update')->name('update');

    Route::get('/destroy/{id}', 'AdminProductController@destroy')->middleware('auth')->name('product.destroy');
