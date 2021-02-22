<?php

namespace App\Http\Resources\Bot;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Bot\CriminalCollection;
use App\Http\Resources\Bot\DivisionCollection;
use App\Http\Resources\Bot\RoleCollection;

class UserResource extends JsonResource
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
            
            'telegram_user_id' =>$this->telegram_user_id,
            'full_name' =>$this->full_name,
            'year' =>$this->year,
            'head' =>$this->head,
            'roles' =>new RoleCollection($this->roles),
            'divisions' =>new DivisionCollection($this->divisions),
            'criminals' => new CriminalCollection($this->criminals)
        ];

    }
}
