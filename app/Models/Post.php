<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'user_id',
        
                        ];
 //////////////////////////////////////////model relations ////////////////////////////////
    // public function myUserRelation(){ //user_id is forign key
    //      return $this->belongsTo(User::class,'user_id');
    // }

     /////////////////another style of model relation function///////////////////////////////////////
    public function user(){
        return $this->belongsTo(User::class);

    }

}


