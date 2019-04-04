<?php

namespace App\Http\Controllers;

use App\Like;
use App\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function likeIt(Reply $reply){
        $reply->like()->create([
            'user_id'=>'1'
        ]);

        //return "something <br/>";
    }

    public function unLikeIt(Reply $reply){
        //$reply->like()->where(['user_id', auth()->id()])->first()->delete();
        $reply->like()->where('user_id','1')->first()->delete();
        //return "test disini <br/>";
    }
}
