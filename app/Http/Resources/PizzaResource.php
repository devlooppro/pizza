<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class PizzaResource
 * @package App\Http\Resources
 *
 * @property-read int id
 * @property string name
 * @property-read Carbon created_at
 * @property-read Carbon updated_at
 *
 * @property-read Collection ingredients
 */
class PizzaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'ingredients' => IngredientResource::collection($this->ingredients),
        ];
    }
}
