<?php

namespace App\Http\Resources\Home;

use Illuminate\Http\Resources\Json\JsonResource;

class HomeResource extends JsonResource
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
            'data' => [
                // 'id' => $this->id,
                'user_id' => $this->user_id,
                'type_id' => $this->type_id,
                'title' => $this->title,
                'address' => $this->address,
                'city' => $this->city,
                'state' => $this->state,
                'country' => $this->country,
                'lat' => $this->lat,
                'lng' => $this->lng,
                'guests' => $this->guests,
                'rooms' => $this->rooms,
                'beds' => $this->beds,
                'baths' => $this->baths,
                'pricePerNight' => $this->pricePerNight,
                'description' => $this->description,
                'note' => $this->note,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ],
        ];
    }
}
