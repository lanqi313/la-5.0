<?php


class Book extends Model   {

  public $timestamps =  false;
  protected $fillable = ['bookname', 'isbn', 'state','id'];

  public function user(){
  
  }
}
