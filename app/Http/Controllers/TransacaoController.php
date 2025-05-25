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

    public function show($id) {
        $transacao = Transacao::find($id);

        return response()->json([
            'message' => 'Transação encontrada com sucesso',
            'transacao:' => $transacao
        ]);
    }

    public function update(Request $request, $id) {
        $transacao = Transacao::find($id);
        $transacao->update($request->all());

        return response()->json([
            'message' => 'Transação atualizada com sucesso',
            'transacao' => $transacao
        ], 200);
    }

    public function destroy($id) {
        $transacao = Transacao::find($id);
        $transacao->delete();

        return response()->json([
            'message' => 'Transação excluída com sucesso',
        ], 200);
    }

}
