<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DescriptorResource extends JsonResource
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
            "id"            =>$this->id,
            "code"          =>$this->code,
            "name"          =>$this->name,
            "description"   =>$this->description,
            "function"      =>$this->function,
            "other"         =>$this->other,
            "references"     =>json_decode($this->references),
        ];
    }
}
