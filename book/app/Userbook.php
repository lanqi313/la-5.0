<?php
	
	class Userbook extends Model   {

     		protected $table = 'userbook';
       		public $timestamps =  false;
       		

	public function book()
	    {
	             return $this->hasOne('App\Book','isbn','isbn');
	    }

	}


	