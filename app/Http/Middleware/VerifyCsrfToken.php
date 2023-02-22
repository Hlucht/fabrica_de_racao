<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    protected $except = [
        '/ingredientes',
        '/ingrediente/*',
        '/ingrediente/edicao/*',

        '/receitas',
        '/receita',
        '/receita/*',
        '/receita/edicao/*',
    ];
}
