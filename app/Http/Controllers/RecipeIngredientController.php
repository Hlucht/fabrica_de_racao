<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Ingredient;
use App\Models\RecipeIngredient;
use App\Http\Requests\StoreRecipeIngredientRequest;

class RecipeIngredientController extends Controller
{
    //Adicona um ingrediente em uma receita
    public function store(StoreRecipeIngredientRequest $request)
    {
        RecipeIngredient::create($request->all())->save();
    }


    //Mostra uma única receita
    public function show(string $id)
    {
        $class = new RecipeIngredient;

        $recipe = Recipe::find($id);

        $ingredients = Ingredient::all();

        $ingredients_recipe = $class->ingredients_recipe($id);

        return view('recipeIngredients', ['recipe' => $recipe, 'ingredients' => $ingredients, 'ingredients_recipe' => $ingredients_recipe]);
    }
}
