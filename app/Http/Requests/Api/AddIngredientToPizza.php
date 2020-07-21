<?php

namespace App\Http\Requests\Api;

/**
 * Class AddIngredientToPizza
 * @package App\Http\Requests\Api
 */
class AddIngredientToPizza extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $pizza_id = $this->route('pizza_id');

        return [
            'pizza_id' => 'required|int|exists:pizzas,id',
            'ingredient_id' => "required|int|exists:ingredients,id|unique:pizza_ingredient,ingredient_id,NULL,id,pizza_id,$pizza_id"
        ];
    }

    public function all($keys = NULL)
    {
        $data = parent::all($keys);
        $data['pizza_id'] = $this->route('pizza_id');
        $data['ingredient_id'] = $this->route('ingredient_id');

        return $data;
    }
}
