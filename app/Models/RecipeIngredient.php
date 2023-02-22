<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RecipeIngredient extends Model
{
    use HasFactory;

    protected $table = 'recipe_ingredients';

    protected $fillable = [
        'order',
        'amount',
        'ingredient_id',
        'recipe_id',
    ];


    public function ingredient()
    {
        return $this->belongsTo(Ingredient::class);
    }


    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }


    public function ingredients_recipe($id_recipe)
    {
        $ingredient_ids = DB::table('recipe_ingredients')->where('recipe_id', $id_recipe)->pluck('ingredient_id')->all();

        $ingredients = [];
        foreach ($ingredient_ids as  $ingredient_id) {
            $ingredients = DB::table('ingredients')->where('id', $ingredient_ids)->get();
        }

        return  $ingredients;

        //Funcionalidade não finalizada - Os ingredientes não foram recuperados, a variável está sendo 
        //sobreescrita e por isso o retorno tráz apenas o último valor.
    }
}
