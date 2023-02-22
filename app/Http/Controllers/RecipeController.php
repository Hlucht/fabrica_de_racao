<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecipeRequest;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    //Lista todas as receitas cadastradas 
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes',  ['recipes' => $recipes]);
    }


    //Registra uma nova receita
    public function store(StoreRecipeRequest $request)
    {
        $recipe = Recipe::create($request->all());
        $recipe->save();
        return $recipe;
    }


    //Atualiza uma receita
    public function update(Request $request, string $recipe)
    {
        Recipe::find($recipe)->update($request->all());
    }


    //Exclui uma receita
    public function destroy(string $recipe)
    {
        Recipe::find($recipe)->delete();
    }
}
