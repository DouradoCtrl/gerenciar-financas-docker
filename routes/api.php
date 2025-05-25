<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransacaoController;


Route::get('financeiro/transacao/listar/todos', [TransacaoController::class, 'index']);

Route::post('financeiro/transacao/cadastrar', [TransacaoController::class, 'store']);

Route::get('financeiro/transacao/listar/{id}', [TransacaoController::class, 'show']);

Route::put('financeiro/transacao/editar/{id}', [TransacaoController::class, 'update']);

Route::delete('financeiro/transacao/excluir/{id}', [TransacaoController::class, 'destroy']);
