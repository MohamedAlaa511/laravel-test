<?php

namespace App\Http\Controllers;

use App\Http\Requests\UrlRequests;
use Illuminate\Http\Request;
use App\Services\urlCheckService;
use App\Services\linksService;
use App\Models\Link ;
use App\Models\User ;
use Illuminate\Support\Facades\Auth;

class linksController extends Controller
{
    public function show( linksService $service ){

      return view("users.visits");
    }


    public function create( linksService $service , urlCheckService $url_service , UrlRequests $request ){
          return $service -> ADD_NEW_LINK( $url_service , $request);  
    }

}
