<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransacaoController;


Route::get('financeiro/transacao/listar', [TransacaoController::class, 'index']);

Route::post('financeiro/transacao/adicionar', [TransacaoController::class, 'store']);