@extends('admin.layouts.app')

@section('title', 'Cria usuário')
@section('content')
    <h1>Novo Usuário</h1>
    {{-- @include('admin.includes.errors') --}}
    <x-alert/>
    <form action="{{ route('users.store') }}" method="POST">
        {{-- <input type="text" name="_token" value="{{ csrf_token() }}"> --}}
        @include('admin.users.partials.form')
    </form>
@endsection