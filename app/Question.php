<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Reply;

class Question extends Model
{
    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function replies(){
    	return $this->hasMany(Reply::class);
    }

    public function category(){
    	return $this->belongsTo(Category::class);
    }
}
