<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User ;
use App\Models\Visit ;
use App\Models\View ;
use App\Models\Link ;
use App\Services\linksService;


class staticsController extends Controller
{

    public function index( linksService $service){
        $links = self::links();
        $points = self::points();
        $user_links_visits = self::user_links_visits();
        $user_visits = self::user_visits();
        $views = self::views();
        $links_data = $service -> SHOW_LINKS_STATICS(); 
        return view("users.main", [
        "links" => $links ,
        "points" => $points ,
         "user_links_visits" => $user_links_visits , 
         "user_visits" => $user_visits , 
         "views" => $views , 
         "links_data" => $links_data
        ]);
    }
    public function links(){
       $user_data = User::find(Auth::id()) ;
       return $user_data->links()->count();
    }

    public function points(){
        $user_data = User::find(Auth::id()) ;
        return $user_data->points()->sum("point");
    }

    public function user_visits(){
        $user_data = Visit::where("user_id" , Auth::id()) -> count();
        return $user_data;
    }
    public function user_links_visits(){
        $visitedLinks = Visit::join('links', 'visits.link_id', '=', 'links.id')
        ->where('links.user_id', Auth::id())
        ->pluck('link_id');

        
        $links = Visit::whereIn('link_id', $visitedLinks)->count();
        return $links;
    }

    public function views(){
        $user_data = User::find(Auth::id()) ;
        return $user_data->views()->count();
    }

    public function seen(){
        
    }
}
