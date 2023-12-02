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


class LinksList extends Component
{

    public $links_data = "" ;

 
    public function mount(linksService $linksService){
        $this->links_data   = Link::SHOW_ACTIVE_LINKS();
    }
    public function render()
    {
        return view('livewire.links-list' , [
            'links_data' => $this -> links_data 
        ]);
    }
}
