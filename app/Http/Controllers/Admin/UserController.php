<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    
    public function index()
    {
        // dd(auth()->user());
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
        $roles = Role::all();

        return view('admin.users.create', compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        // dd($request->all());
        User::create($request->validated());
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

        $roles = Role::all(); // Buscar todos os papéis (roles) disponíveis para popular o dropdown
        // dd($roles);

        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'role' => 'required|exists:roles,id',
            'password' => 'nullable|string|min:8|confirmed',
        ]);
    
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
    
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
    
        $user->roles()->sync($request->role); // Atualiza o papel do usuário
    
        $user->save();
    
        return redirect()
            ->route('users.index')
            ->with('message', 'Usuário atualizado com sucesso');
    }

    public function show(string $id)
    {
        if (!$user = User::find($id)) {
            return back()->with('message', 'Usuário não encontrado');
        }

        return view('admin.users.show', compact('user'));
    }

    public function destroy(string $id)
    {
        if (!$user = User::find($id)) {
            return back()->with('message', 'Usuário não encontrado');
        }

        if (Auth::user()->id === $user->id) {
            return back()
            ->with('message', 'Você não pode deletar seu proprio usuário');
        }

        $user->delete();

        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário deletado com sucesso');
    }
}
