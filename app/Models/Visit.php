<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;



class Visit extends Model
{
    use HasFactory , HasUlids;

    protected $fillable = [
        "id" ,
        "user_id" ,
        "link_id",
    ];


    public static function ADD_USER_VISIT( $link_id ){
        $link = new Visit();
        $link-> user_id = Auth::id();
        $link-> link_id = $link_id;
        if($link->save()){
         return true;
        }else  {
         return false;
        }
     }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function link(){
        return $this->belongsTo(Link::class);
    }


        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "visits";
    public $timestamps = true;
}
