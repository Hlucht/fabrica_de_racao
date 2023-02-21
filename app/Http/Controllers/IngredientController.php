<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIngredientRequest;
use App\Http\Requests\UpdateIngredientRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\Ingredient;

class IngredientController extends Controller
{
    //Lista todos os ingredientes cadastrados 
    public function index()
    {
        $ingredients = Ingredient::all();
        return view('ingredients',  ['ingredients' => $ingredients]);
    }


    //Registra um novo ingrediente
    public function store(StoreIngredientRequest $request)
    {
        $ingredient = Ingredient::create($request->all());
        $ingredient->save();
        return $ingredient;
    }


    //Atualiza um ingrediente
    public function update(UpdateIngredientRequest $request, Ingredient $ingrediente): RedirectResponse
    {
        Ingredient::find($ingrediente)->update($request);
        return redirect()->route('/ingredientes');
    }

    
    //Exclui um ingrediente
    public function destroy(Ingredient $ingrediente): RedirectResponse
    {
        Ingredient::find($ingrediente)->delete();
        return redirect()->route('/ingredientes');
    }
}
