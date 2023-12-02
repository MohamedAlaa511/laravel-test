<?php

namespace App\Livewire;
use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Services\linksService;
use App\Models\Link ;
use App\Models\User ;
use App\Models\Point ;
use App\Models\View ;
use App\Models\Visit ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LinkCard extends Component
{
    public $linkService;
    public $code;
    public $status = false;
    public $errors = "";
    public $links_data = "" ;

    public $link ;

    public function mount($link){
       $this -> link = $link ;
    }

 
    public function confirm_visit($link_id ){
        $linkService = new linksService;
        $link = new Link ;
        if($linkService -> check_code( $link , $this -> code  ,  $link_id )){
             if(Point::ADD_USER_POINT($link_id)){
                if(Visit::ADD_USER_VISIT($link_id)){
                    $this -> status = "done";
                }else{
                    $this -> errors = " يرجي المحاولة في وقت أخر كود ( كود الخطاْ 2 ) ";
                }
             }else{
                $this -> errors = " يرجي المحاولة في وقت أخر كود ( كود الخطاْ 3 ) ";
             }
        }else {
            $this -> errors = " الكود خطأ يرجي اداخال الكود الصحيح ( كود الخطاْ 1 ) ";
        }
    }

    public function render()
    {
        return view('livewire.link-card');
    }
}
