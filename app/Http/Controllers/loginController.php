<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginModel;


class loginController extends Controller
{
    //
    public function signup(Request $req)
    {
        $login = new loginModel;
        $login->fname = $req->fname;
        $login->lname = $req->lname;
        $login->email = $req->email;
        $login->password = $req->password;
        $result = $login->save();
        if($result){
        return "your data has been entered successfully";
        }
        else{
            return "something is wrong";
        }
        
    }
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $result= loginModel::where('email',$email)->where('password',$password)->first();
        if($result){
        return "you are now logged in";
        }
        else{
            return "something is errer";
        }
    }
}
