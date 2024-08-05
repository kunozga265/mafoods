<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'            =>  $this->id,
            'photo'         =>  $this->photo,
            'title'         =>  $this->title,
            'postedBy'      =>  $this->posted_by,
            'slug'          =>  $this->slug,
            'body'          =>  $this->body,
            'date'          =>  $this->date,
            'date_ISO'      =>  date('Y-m-d',$this->date),
            'user'          =>  new UserResource($this->user),
        ];
    }
}
