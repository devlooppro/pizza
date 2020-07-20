<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\PizzaResource;
use App\Models\Pizza;

class PizzaController extends BaseController
{
    public function index()
    {
        $skip = $this->calculateSkip();
        $limit = $this->calculateLimit();
        $pizzas = Pizza::skip($skip)->limit($limit)->get();

        return PizzaResource::collection($pizzas);
    }
}
