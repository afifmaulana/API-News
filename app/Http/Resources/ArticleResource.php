<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
            "id" => $this->id,
            "title" => $this->title,
            "content" => $this->content,
            "image" => $this->image,
            "user" => new UserResource($this->user),
            "category" => new CategoryResource($this->category),
            //"reviews" => ReviewResource::collection($this->reviews),
            "total_comment" =>count($this->reviews)
        ];
    }
}
