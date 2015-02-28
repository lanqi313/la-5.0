<?php
use App\User;

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

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Route::controller('auth', 'Auth\AuthController');
//Route::controller('password', 'Auth\PasswordController');

// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');
// Route::get('auth/login', 'Auth\AuthController@getLogin');
// Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::post('auth/logout', 'Auth\AuthController@getLogout');


Route::get('book','BookController@alluser_book');

// Route::post('findbook','BookController@find_book');
Route::post('findbook',function()
{
    return "good";
});
 
// Route::get('forget',function()
// {
//     return  view('forget_password');
// });
// Route::post('forget',function()
// {
//     return  View::make('login');
// });
// Route::get('change_password',function()
//   {
//     return  View::make('users.change_password');
//   });
// Route::get('delete_book', function()
// {
//     return View::make('admin.delete_book');

// });
// Route::post('delete_book','BookController@delete_book');
// Route::post('insert_book','BookController@insert_book');
// Route::get('insert_book', function()
// {
//     return View::make('admin.insert_book');

// }); 
//   Route::get('logout',function()
//   {
//     Auth::logout();
//     return Redirect::to('login');
// });
// Route::get('user_book','BookController@user_book');
// Route::get('state','BookController@book_state');
// Route::get('borrow/{username}/{isbn}','BookController@borrow');
// Route::get('back/{username}/{isbn}','BookController@back');
// Route::post('change_password','BookController@change_password');