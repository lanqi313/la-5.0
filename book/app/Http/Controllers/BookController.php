<?php    namespace App\Http\Controllers;

class BookController extends Controller {

	

	function borrow($username,$isbn ){
		$title = "All  book  database:";
		$bookstat = "borrowbook";
		$books = Book::all();
		$book_state = Book::where('isbn' , '=', "$isbn") -> first();
		$book_state ->state =  'no';
		$book_state ->save();
		$userbook  =  new Userbook;
		$userbook -> username  =  $username;
		$userbook  ->isbn  = $isbn;
		$userbook ->save();
		return View::make('book')->with('books', $books)->with('title',$title)->with('bookstat',$bookstat);
	}
	function  back($username,$isbn){
		$title = "The  user's  book  database:";
		$bookstat = "backbook";
		$book_state = Book::where('isbn' , '=', "$isbn") -> first();
		$book_state ->state =  'yes';
		$book_state ->save();
		$book  =  Userbook::where('isbn',  '=',  $isbn)->delete();
		$user_book  =Userbook::where('username',  '=',  $username)->get();
		return View::make('users.userbook')->with('books', $user_book)->with('title',$title)->with('bookstat',$bookstat);

	}
	
	function  alluser_book(){
		$books = Book::all();
		$title = "All  book  database:";
		$bookstat = "borrowbook";
		return View::make('book')->with('books', $books)->with('title',$title)->with('bookstat',$bookstat);

	}
	function  user_book(){
		$username = Auth::user()->nickname;
		$user_book  =Userbook::where('username',  '=',  $username)->get();
		$title = "The  user's  book  database:";
		$bookstat = "backbook";
		return View::make('users.userbook')->with('books', $user_book)->with('title',$title)->with('bookstat',$bookstat);

	}
	function  delete_book(){
		$isbn  =   Input::get('isbn');
		$book  =  Book::where('isbn',  '=',  $isbn)->delete();
		return  View::make('admin.delete_book');
		
	}
	function  insert_book(){
		$isbn  =  Input::get('isbn');
		$bookname  =  Input::get('bookname');
		$bookstate   =   Input::get('bookstate');
		$id   =  Input::get('id');
		$book  =  new  Book;
		$book  ->  isbn =  $isbn;
		$book ->  bookname  =  $bookname;
		$book  -> state  =  $bookstate;
		$book  ->  id  =  $id;
		$book ->  save();
		return  View::make('admin.insert_book');

	}
	function   change_password(){


		return  View::make('change_password');
	}
  

	function  test(){

		$username  =  Auth::user()->nickname;
		$user_book  =Userbook::where('username',  '=',  $username)->get();


		return   View::make('testphp')->with('user_book',$user_book);
	}



}