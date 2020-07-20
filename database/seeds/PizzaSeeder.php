<?php

use App\Models\Ingredient;
use App\Models\Pizza;
use Illuminate\Database\Seeder;

/**
 * Class PizzaSeeder
 */
class PizzaSeeder extends Seeder
{
    private $ingredients = [
        'Salami' => 2.5,
        'Tomato' => 0.5,
        'Mozzarella cheese' => 1.5,
        'Dutch cheese' => 1.5,
        'Broccoli' => 0.5,
        'Mushrooms' => 0.7,
        'Chicken fillet' => 2,
        'Pineapple' => 1.2,
        'Pepper' => 0.8,
        'Onion' => 0.3,
        'Bacon' => 2.1,
    ];

    private $pizzas = [
        'MacDac Pizza',
        'Lovely Mushroom Pizza',
        'BBQ',
        'Salami pizza',
        'Margarita',
        'Quattro stagioni',
    ];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $ingredientModels = collect([]);
        foreach ($this->ingredients as $ingredient => $price) {
            $ingredientModels[] = Ingredient::create([
                'name' => $ingredient,
                'price' => $price
            ]);
        }

        foreach ($this->pizzas as $pizzaName) {
            $ingredientsCount = rand(2, 5);
            $pizzaIngredientIds = $ingredientModels->shuffle()->take($ingredientsCount)->pluck('id')->toArray();
            $pizza = Pizza::create([
                'name' => $pizzaName
            ]);
            $pizza->ingredients()->sync($pizzaIngredientIds);
        }
    }
}
