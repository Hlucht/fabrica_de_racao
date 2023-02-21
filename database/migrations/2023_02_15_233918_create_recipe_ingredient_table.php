<?php

use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('recipe_ingredients', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->float('amount');
            $table->foreignIdFor(Ingredient::class, 'ingredient_id');
            $table->foreignIdFor(Recipe::class, 'recipe_id');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('recipe_ingredient');
    }
};
