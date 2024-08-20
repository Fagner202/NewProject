@extends('admin.layouts.app')

@section('title', 'Editar usuário')

@section('content')
    <h1>Editar usuário {{ $user->name }}</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        {{-- <input type="text" name="_token" value="{{ csrf_token() }}"> --}}
        @csrf()
        @method('PUT')
        <input type="text" name="name" placeholder="Nome" value="{{ $user->name }}">
        <input type="text" name="email" placeholder="Email"  value="{{ $user->email }}">
        {{-- <input type="text" name="password" placeholder="Senha"> --}}
        <button type="submit">Enviar</button>
    </form>
@endsection