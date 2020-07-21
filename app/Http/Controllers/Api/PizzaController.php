<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\AddIngredientToPizza;
use App\Http\Requests\Api\RemoveIngredientFromPizza;
use App\Http\Resources\PizzaResource;
use App\Models\Pizza;

class PizzaController extends BaseController
{
    public function index()
    {
        $skip = $this->calculateSkip();
        $limit = $this->calculateLimit();
        $pizzas = Pizza::with('ingredients')->skip($skip)->limit($limit)->get();

        return PizzaResource::collection($pizzas);
    }

    public function addIngredient(AddIngredientToPizza $request)
    {
        $data = $request->only('pizza_id', 'ingredient_id');

        /* @var Pizza $pizza */
        $pizza = Pizza::find($data['pizza_id']);

        $pizza->ingredients()->attach($data['ingredient_id']);

        return new PizzaResource($pizza);
    }

    public function removeIngredient(RemoveIngredientFromPizza $request)
    {
        $data = $request->only('pizza_id', 'ingredient_id');

        /* @var Pizza $pizza */
        $pizza = Pizza::find($data['pizza_id']);

        $pizza->ingredients()->detach($data['ingredient_id']);

        return new PizzaResource($pizza);
    }
}
