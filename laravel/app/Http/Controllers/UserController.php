<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller {

    /**
     * 显示所给定的用户个人数据。
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
     //  var_dump(User::findOrFail($id));
        $user = User::find(1);
        return view('user.profile', ['user' => $user]);
    }

}