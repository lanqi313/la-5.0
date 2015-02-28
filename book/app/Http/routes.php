<?php

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('login', function()
{
    return View::make('login');
});
Route::post('login', function()
{
    $username = Request::input('username');
    $password =Request::input('password');

    $attempt = Auth::attempt(['nickname' => $username, 'password' => $password];      
    if ($attempt)
    {
        return Redirect::intended('book');
    } else {
        return Redirect::to('login')->withInput();
    }
});

Route::post('register',function()
{
    $rules = [ 'nickname' => 'required|min:4|unique:users,nickname',
        'password' => 'required|min:6|confirmed',
    ];
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->passes())
    {
        $user = User::create(Input::only('password', 'nickname'));
        $user->password = Hash::make(Input::get('password'));
        if ($user->save())
        {
            return Redirect::to('login')->with('message', ['type' => 'success', 'content' => 'Register successfully, please login']);
        }
    } else {
        return "false";
    }
});
Route::get('forget',function()
{
    return  View::make('forget_password');
});
Route::post('forget',function()
{
    return  View::make('login');
});
Route::get('register', function()
{
    return View::make('users.create');

});
Route::get('change_password',function()
  {
    return  View::make('users.change_password');
  });
Route::get('delete_book', function()
{
    return View::make('admin.delete_book');

});
Route::post('delete_book','BookController@delete_book');
Route::post('insert_book','BookController@insert_book');
Route::get('insert_book', function()
{
    return View::make('admin.insert_book');

});


Route::post('findbook',function()
{
    $bookname = Input::get('bookname');
    $book = Book :: where(array('bookname' => $bookname)) ->get();
    return View::make('findbook') -> with('book',$book);
});

  
  Route::get('logout',function()
  {
    Auth::logout();
    return Redirect::to('login');
});
Route::get('book','BookController@alluser_book');
Route::get('user_book','BookController@user_book');
Route::get('state','BookController@book_state');
Route::get('borrow/{username}/{isbn}','BookController@borrow');
Route::get('back/{username}/{isbn}','BookController@back');
Route::get('fuck','BookController@test');
Route::post('change_password','BookController@change_password');