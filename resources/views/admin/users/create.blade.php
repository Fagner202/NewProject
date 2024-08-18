@extends('admin.layouts.app')

@section('title', 'Cria usuário')
@section('content')
    <h1>Novo Usuário</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        {{-- <input type="text" name="_token" value="{{ csrf_token() }}"> --}}
        @csrf()
        <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
        <input type="text" name="email" placeholder="Email"  value="{{ old('email') }}">
        <input type="text" name="password" placeholder="Senha">
        <button type="submit">Enviar</button>
    </form>
@endsection