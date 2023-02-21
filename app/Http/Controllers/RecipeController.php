<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\Recipe;

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
    public function update(UpdateRecipeRequest $request, Recipe $recipe): RedirectResponse
    {
        Recipe::find($recipe)->update($request);
        return redirect()->route('/receitas');
    }


    //Exclui uma receita
    public function destroy(Recipe $recipe): RedirectResponse
    {
        Recipe::find($recipe)->delete();
        return redirect()->route('/receitas');
    }
}
