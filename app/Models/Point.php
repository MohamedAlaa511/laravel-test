<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Point extends Model
{
    use HasFactory , HasUlids;
   
    protected $fillable = [
        "id" , 
        "user_id",
        "point_id",
        "link_id",
        "type",
        "points",
    ];

    public static function ADD_USER_POINT( $link_id , $type = "VISIT" ){
        $link = new Point();
        $link->user_id = Auth::id();
        $link->link_id = $link_id;
        $link-> point  = Link::link_points($link_id);
        $link->type = $type;
        if($link->save()){
         return true;
        }else  {
         return false;
        }
     }

    public function user(){
        return $this -> belongsTo( User::class );
    }
        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "points";
    public $timestamps = true;
}
