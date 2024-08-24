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
        @method('PUT')
        @include('admin.users.partials.form')
    </form>
@endsection