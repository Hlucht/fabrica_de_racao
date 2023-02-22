<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $table = 'ingredients';

    protected $fillable = [
        'description'
    ];


    public function recipe_ingredients()
    {
        return $this->hasMany(RecipeIngredient::class);
    }
}
