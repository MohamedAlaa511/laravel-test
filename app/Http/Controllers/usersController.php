<?php

namespace App\Http\Controllers;

use App\Http\Requests\registerRequests;
use App\Http\Requests\UrlRequests;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Website ;
use App\Services\urlCheckService;

class usersController extends Controller
{
    public function add_new_user(registerRequests $request){
        $validator         = $request -> validated();
        $user               = new User ;
        $user -> name       = $validator["username"];
        $user -> email      = $validator["email"];
        $user -> password   = $validator["password"];
        $user -> status     = "PENDING"; 
        $user -> save();
        session()->flash('status', 'تم الإضافة بنجاح');
        return redirect("login");
     
    }


}
