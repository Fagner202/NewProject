<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

    public function store(Request $request)
    {
        // dd($request->all());
        User::create($request->all());
        // dd(User::create($request->all()));
        return redirect()->route('users.index');
        // return 'Cadastrando o usuário';
    }
}