<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    
    public function index()
    {
        // $users = User::all();
        $users = User::paginate(10);

        // dd($users);

        return view('admin.users.index', [
            'users' => $users
        ]);
        // return 'UserController@index';
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(StoreUserRequest $request)
    {
        // dd($request->all());
        User::create($request->all());
        // dd(User::create($request->all()));
        return redirect()
        ->route('users.index')
        ->with('success', 'Usuário criado com sucesso');
        // return 'Cadastrando o usuário';
    }

    public function edit(string $id)
    {
        // dd($id);
        // $user = User::where('id', '=', $id)->first();
        // $user = User::where('id', $id)->first(); // firstOrFail()
        if (!$user = User::find($id)) {
            // dd('Entando dentro da condição');
            return redirect()
            ->route('users.index')
            ->with('message', 'Usuário não encontrado');
        }
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        if (!$user = User::find($id)) {
            return back()->with('message', 'Usuário não encontrado');
        }
        $user->update([$request->only([
            'name',
            'email'
        ])]);

        return redirect()
        ->route('users.index')
        ->with('success', 'Usuário criado com sucesso');
    }
}
