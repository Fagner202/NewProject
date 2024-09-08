<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function handleRequest(Request $request)
    {
        dd($request->all());
        // Processar dados da requisição AJAX
        $data = $request->all(); // Exemplo: obtém todos os dados enviados

        // Processa os dados como quiser
        $response = ['message' => 'Requisição AJAX recebida com sucesso', 'data' => $data];

        return response()->json($response); // Retorna resposta JSON
    }

    public function deleteEvento(Request $request)
    { 
        dd($request->all());
        $id = $request->input('id');
    }
}
