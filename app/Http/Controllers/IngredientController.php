<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIngredientRequest;
use App\Models\Ingredient;
use Illuminate\Http\Request;

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
    public function update(Request $request, string $ingredient)
    {
        Ingredient::find($ingredient)->update($request->all());
    }


    //Exclui um ingrediente
    public function destroy(string $ingredient)
    {
        Ingredient::find($ingredient)->delete();
    }
}
