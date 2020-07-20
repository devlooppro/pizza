<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\IngredientResource;
use App\Models\Ingredient;

class IngredientController extends BaseController
{
    public function index()
    {
        $skip = $this->calculateSkip();
        $limit = $this->calculateLimit();
        $ingredients = Ingredient::skip($skip)->limit($limit)->get();

        return IngredientResource::collection($ingredients);
    }
}
