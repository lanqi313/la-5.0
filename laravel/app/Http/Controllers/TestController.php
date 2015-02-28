<?php  namespace App\Http\Controllers;
        class TestController extends Controller{
            function  test()
            {
                    $name = 'big';
                    $sch = 'your';
                    return  view('auth.login')->with('name',$name)->with('sch',$sch);
            }
        }