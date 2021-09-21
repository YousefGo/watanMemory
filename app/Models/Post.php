<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['text' , 'user_id' , 'image'];
    

    public function userName(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }


}
