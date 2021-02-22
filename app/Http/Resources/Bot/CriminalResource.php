<?php

namespace App\Http\Resources\Bot;

use Illuminate\Http\Resources\Json\JsonResource;

class CriminalResource extends JsonResource
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
            'puser'=>$this->puser,
            'reason' =>$this->reason
        ];
        
    }
}
