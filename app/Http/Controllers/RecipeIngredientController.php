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
        $recipe = RecipeIngredient::create($request->all());
        $recipe->save();
        return $recipe;

        //Funcionalidade não finalizada
    }
    
    
    //Mostra uma única receita
    public function show(string $id)
    {
        $recipe = Recipe::find($id);
        $ingredients = Ingredient::all();
        return view('recipeIngredients', ['recipe' => $recipe, 'ingredients' => $ingredients]);
    }
}
