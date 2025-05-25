<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransacaoController;


Route::get('financeiro/listar/todos', [TransacaoController::class, 'index']);

Route::post('financeiro/adicionar/despesa', [TransacaoController::class, 'store']);