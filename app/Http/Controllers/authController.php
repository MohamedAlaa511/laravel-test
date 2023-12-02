<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function authenticate(Request $request){
        $user_data = $request -> validate([
            "email"        => ["required" , "email"] , 
            "password"     => "required" ,
            "remember_me"
        ]);

        // if(Auth::guard("admin")->attempt($user_data , $request->get("remember_me")) || Auth::guard("web")->attempt($user_data , $request->get("remember_me"))){
        //    $request -> session() -> regenerate();
        //    return redirect()->intended('/add-link');
        // }else {
        //     return back()->withErrors([
        //         "email"    => "البريد الإلكتروني غير صحيح" ,
        //         "password" => "كلمة المرور غير صحيحة "
        //     ]);
        // }

        if(Auth::guard('admin')->attempt($user_data , $request->get('remember_me'))){
            $request -> session() -> regenerate();
            return redirect()->intended('/');
        }


        if(Auth::guard('user')->attempt($user_data , $request->get('remember_me'))){
            $request -> session() -> regenerate();
            return redirect()->intended('/');
        }

                return back()->withErrors([
                "email"    => "البريد الإلكتروني غير صحيح" ,
                "password" => "كلمة المرور غير صحيحة "
            ]);
    }

    public function logout( Request $request ){
         Auth::guard('user')->logout();
         $request -> session() -> invalidate();
         $request -> session() -> regenerate() ;
         return redirect("/");
    }
}
