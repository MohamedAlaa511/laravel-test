<?php

namespace App\Services;

use App\Models\Website ;
use App\Models\Point ;
use App\Models\Link ;
use Illuminate\Http\Request;
use App\Http\Requests\UrlRequests;
use Illuminate\Support\Facades\Auth;

class urlCheckService 
{

    public $block_status ;


    public  function in_block_list( UrlRequests $requests  ){
        $valid_data     = $requests -> validated();
        $short_link_url = $valid_data["SHORT_LINK"];
        $link_info      = explode("/" , $short_link_url); 
        $website_link = Website::whereIn( "link" , $link_info )->get();
        $this->block_status = ( $website_link-> count() > 0) ?  True :  false ; 
        return $this -> block_status  ;
    }
    
    public function check_user_points( UrlRequests $requests ){
        $valid_data   = $requests -> validated(); 
        $link_points  = $valid_data["LINK_POINTS"];
        $user_id      = Auth::user() -> id;
        $user_points  = Point::where("user_id" , $user_id)->sum("point");
        return ($user_points >= $link_points && $link_points != 0) ? true  : false ;
    }

    public function add_new_link(UrlRequests $requests ){
       $link =  $requests -> validated();          
              $add_new_link = Link::create([
               "user_id"    => Auth::user()->id ,
               "name"       => $link["LINK_ALIAS"] , 
               "short_link" => $link["SHORT_LINK"] , 
               "code"       => $link["SHORT_LINK_CODE"] ,
               "source"     => $link["VISIT_SOURCE_LINK"] , 
               "points"     => $link["LINK_POINTS"] ,  
              ]);
              if(!$add_new_link){
                  return false ;
               }

               return true ;

    }

}
