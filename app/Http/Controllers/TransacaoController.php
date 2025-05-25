<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transacao;

class TransacaoController extends Controller
{
    public function index() {
        $transacao = Transacao::all();
        return response()->json([
            'message' => 'Transações listadas com sucesso',
            'transacao' => $transacao       
        ], 200);

    }

    public function store(Request $request) {
        $transacao = Transacao::create($request->all());

        return response()->json([
            'message' => 'Transação criada com sucesso',
            'transacao' => $transacao
        ], 201);
    }

}
