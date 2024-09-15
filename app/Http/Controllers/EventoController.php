<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use Illuminate\Support\Facades\DB;
class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Evento::query();

        // Verificar se há filtro por nome
        if ($request->has('nome') && $request->nome != '') {
            $query->where('nome', 'like', '%' . $request->nome . '%');
        }

        // Verificar se há filtro por data
        if ($request->has('data') && $request->data != '') {
            $query->where('data', 'like', '%' . $request->data . '%');
        }

        // Verificar se há filtro por localizacao
        if ($request->has('localizacao') && $request->localizacao != '') {
            $query->where('localizacao', 'like', '%' . $request->localizacao . '%');
        }

        // Paginação dos resultados
        $eventos = $query->paginate(10); // Exibir 10 resultados por página
        // dd($eventos->elements());

        return view('eventos.index', ['eventos' => $eventos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd(auth()->user());
        return view('eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $event = new Evento();
        $event->nome = $request->nome;
        $event->descricao = $request->descricao;
        $event->data = $request->data;
        $event->hora_inicio = $request->hora_inicio;
        $event->hora_fim = $request->hora_fim;
        $event->localizacao = $request->localizacao;
        $event->vagas = $request->vagas;
        $event->ativo = $request->ativo;
        $event->save();
        return redirect()->route('eventos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd($id);
        $event = Evento::findOrFail($id);
        // dd($event);
        return view('eventos.edit', [
            'evento' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $event = Evento::findOrFail($id);
        $event->nome = $request->nome;
        $event->descricao = $request->descricao;
        $event->data = $request->data;
        $event->hora_inicio = $request->hora_inicio;
        $event->hora_fim = $request->hora_fim;
        $event->localizacao = $request->localizacao;
        $event->vagas = $request->vagas;
        $event->ativo = $request->ativo;
        $event->save();
        return redirect()->route('eventos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        $event = Evento::findOrFail($id);
        $event->delete();
        return redirect()->route('eventos.index');
        // return response()->json(['success' => 'Evento excluído com sucesso!']);
    }

    public function vincular(string $id)
    {
        // dd($id);
        $event = Evento::findOrFail($id);
        // dd($event);

        // obter o ID do usuário logado
        $userId = auth()->user()->id;
        // dd($userId);

        // Inserir o registro na tabela evento_usuario
        DB::table('evento_usuario')->insert([
            'usuario_id' => $userId,
            'evento_id' => $id,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('eventos.index')
        ->with('success', 'Você foi vinculado ao evento com sucesso');
    }
}
