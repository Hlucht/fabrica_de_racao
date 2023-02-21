<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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


    public function ingredient(){
        return $this->belongsTo(Ingredient::class);
    }

    
    public function recipe(){
        return $this->belongsTo(Recipe::class);
    }
}
