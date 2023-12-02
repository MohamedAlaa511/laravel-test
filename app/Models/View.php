<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    use HasFactory , HasUlids;

    protected $fillable = [
        "id" ,
        "link_id" ,
        "user_id"
    ];
    
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
    protected $table = "views";
    public $timestamps = true;
}
