<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReplyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'body'=>$this->body,
            'question_id'=> new QuestionResource($this->question),
            'user_id'=>$this->user,
            'created_at'=>$this->created_at->diffForHumans(),
        ];
    }
}
