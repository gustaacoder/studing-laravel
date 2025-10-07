@extends('layouts.app')
@section('title', 'Mostrar Usuário')

@section('content')
    <h1>Mostrar Usuário {{ $user->name }}</h1>

    @if($user->id === 1)
        <div>Sou Admin</div>
    @else
        <div>Não sou Admin</div>
    @endif
@endsection
