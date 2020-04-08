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

Route::get('/', function () {
    return view('welcome');
});

        // Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

         // Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register'); /**Formulario de Registro */
Route::post('register', 'Auth\RegisterController@register');

 Route::get('/home', 'HomeController@index')->name('home');
 Route::get('/appl', 'applController@index')->name('appl');
 Route::get('/Contact', 'ContactController@Contact')->name('Contact');
 Route::get('/Productos', 'ProductosController@Productos')->name('Productos');
 Route::get('/Servicios', 'ServiciosController@Servicios')->name('Servicios');

                                         /**RUTAS DE CLIENTES */
 Route::post('clientes/guardar', 'ClientesController@guardar');/**Guardar el registro en base de datos */
 Route::get('Clientes', 'ClientesController@GestionClientes'); /**Vizualizar los clientes creados */
 Route::get('Clientes/agregar', 'ClientesController@clientes');/**Formulario de agregar Clientes */

                                        /**RUTAS DE USUARIO */
 Route::get('RegistroUsuarios/guardar', 'RegistroUsuariosController@guardar');/**Guardar el registro en base de datos */
 Route::get('/GestionUser', 'GestionUserController@GestionUser')->name('GestionUser');/**Vizualizar los usuarios creados */
 Route::get('GestionUserEdit/updateUser/{id}', 'GestionUserController@updateUser');/**Vizualizar los usuarios creados */
 //Route::get('RegistroUsuarios/agregar', 'RegistroUsuariosController@usuarios');/**Formulario de agregar Clientes */


                                        /**RUTAS DE EMAIL */
 Route::post('Mail/store', 'MailController@store');
 Route::post('/Mail', 'MailController@Mail')->name('Mail');

            //Register the typical reset password routes for an application.
 Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
 Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
 Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
 Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

 //         Register the typical email verification routes for an application.
 Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
 Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
 Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
