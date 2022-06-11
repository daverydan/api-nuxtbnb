<?php

namespace App\Http\Resources\Home;

use App\Http\Resources\User\UserResource;
use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Resources\Json\ResourceCollection;

class HomeCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return $this->collection->map(function ($data) {
            return [
                'id' => $data->id,
                // 'user_id' => $data->user_id,
                // 'type_id' => $data->type_id,
                'title' => $data->title,
                // 'type' => new TypeResource(Type::find($data->type_id)),
                'type' => Type::find($data->type_id)->name,
                'address' => $data->address,
                'city' => $data->city,
                'state' => $data->state,
                'country' => $data->country,
                'lat' => $data->lat,
                'lng' => $data->lng,
                'guests' => $data->guests,
                'rooms' => $data->rooms,
                'beds' => $data->beds,
                'baths' => $data->baths,
                'pricePerNight' => $data->pricePerNight,
                'description' => $data->description,
                'note' => $data->note,
                'created_at' => $data->created_at,
                'updated_at' => $data->updated_at,
                // 'features' => FeatureCollection($this->whenLoaded('features')),
                // 'features' => Home::with('features')->where('id', $data->id)->first(),
                // 'features' => $data->pivot->features(),
                // 'features' => $data->features,
                'features' => $data->getFeatures(),
                'host' => new UserResource(User::find($data->user_id)),
            ];
        });
    }
}
