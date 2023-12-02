<?php

namespace App\Services;

use App\Models\Link ;
use App\Models\User ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class linksService 
{

    public $block_status ;


    public  function SHOW_ACTIVE_LINKS(){
        $links  = Link::where("status" , "ACTIVE")->where("user_id" , "!=" , Auth::id())->get();
        return $links;
    }

    public function SHOW_LINKS_STATICS(){

        $userId = Auth::id();
        $links = DB::table('links as l')
        ->leftJoin(DB::raw('(SELECT link_id, COUNT(*) AS visits FROM visits GROUP BY link_id) v'), 'v.link_id', '=', 'l.id')
        ->leftJoin(DB::raw('(SELECT link_id, COUNT(*) AS views FROM views GROUP BY link_id) vi'), 'vi.link_id', '=', 'l.id')
        ->select('l.*', DB::raw('COALESCE(v.visits, 0) as visits'), DB::raw('COALESCE(vi.views, 0) as views') , DB::raw('COALESCE(l.name, name) as name'))
        ->where('l.user_id', $userId)
        ->orderBy('visits', 'desc')
        ->get();
 
     return $links;
    }
    
    public function check_code( Link $links , $code , $id ){ 
        $code_confirm = $code  ;
        $link_id = $id ;
        $check_code = $links->where("id" , $link_id )->where("code" , "=" , $code_confirm)->get();
        if( $check_code->count() == 1){
          return true;
        }else {
          return false ;
        }
      }

    // $service => service/UrlService  check user points and short link block list
    // $request => App\Http\Requests\UrlRequests  validate post request  
    public function ADD_NEW_LINK( $service , $request){
        $check_user_points     = $service -> check_user_points($request);
        $check_link_block_list = $service -> in_block_list($request);
 
        if(!$check_link_block_list){
          if($check_user_points){
             if($service -> add_new_link($request)){
                 session()->flash('status', 'تم الإضافة بنجاح');
                 return back();
             }else {
                 session()->flash('error', 'error in something try again later');
                 return redirect("add-link")->withInput();
             }
          }else{
            session()->flash('LINK_POINTS', 'نقاطك لا تكفي ');
            return redirect("add-link")->withInput();
           }
         }else{
          session()->flash('SHORT_LINK', 'موقع إختصار روابط محظور');
          return redirect("add-link")->withInput();
        }
    }


}
