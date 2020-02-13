<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LikeController extends Controller
{
    public function like_it(Reply $reply)
    {
        $reply->like()->create(['user_id'=>1]);
        return response('You liked',Response::HTTP_CREATED);
    }

    public function unlike(Reply $reply)
    {
        $reply->like()->where('user_id',1)->delete();
        return response('You unlike',Response::HTTP_ACCEPTED);
    }
}
