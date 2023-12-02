<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Link extends Model
{
    use HasFactory , HasUlids;
            /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'user_id',
        'link_id',
        'code',
        'source',
        'name',
        'short_link',
        'points',
        'status',
    ];
    
    public static function SHOW_ACTIVE_LINKS(){
        $visitedLinks = Visit::where('user_id', Auth::id())->pluck('link_id');

        $links = self::where('status', 'ACTIVE')
            ->whereNotIn('id', $visitedLinks)
            ->where('user_id', '!=', Auth::id())
            ->get();

        return $links;
    }

    public static function LINK_INFO(){

    }

    public static function link_points( $link_id ){
       return $link = self::where("id", $link_id)->first()->points;
    }



    public static function ADD_USER_VISIT(){
        
    }

    public static function ADD_USER_VIEW(){

    }

    // relationships 
    public function visits(){
        return $this->hasMany(Visit::class);
    }

    public function views(){
        return $this->hasMany(View::class);
    }
        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "links";
    public $timestamps = true;
}
