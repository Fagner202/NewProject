<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Lista de Usuários</h1>
    <table class="table">
        <thead>
            <tr>    
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Criado em</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Exibe os links de paginação -->
    {{ $users->links('pagination::bootstrap-5') }}
@endsection
