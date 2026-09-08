<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

Route::resource('alunos', AlunoController::class);
