<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Models\User;


class UserController extends Controller
{
   public function register(Request $request){
       $credentials = [
            'email'    => $request->input('email'),
            'name'     =>  $request->input('name'),
            'password' => $request->input('password'),
        ];
       $exist = User::where('email',$request->input('email'))->first();
       if($exist){
           return abort(422, '该邮箱已经被注册');
       }
        $user = Sentinel::registerAndActivate($credentials);
        return "{\"message\":\"注册成功\"}";
   }
    
   public function login(Request $request){
       $credentials = [
            'email'    => $request->input('email'),
            'password' => $request->input('password'),
        ];

        $res = Sentinel::authenticate($credentials);
        if(!$res){
            return abort(401, "账号或者密码错误");
        }
        return redirect('/contacts_list');
   }
   
   public function loginView(){
       return view('login');
   }
   
}

