@extends('layouts.app')
@section('title', 'Lista de Usuários')

@section('content')
    <h1 class="title">{{ $greeting }}</h1>
    <img width="400" src="{{ Vite::asset('resources/images/bmw-s-1000-rr-sports-bikes-2023-5k-8k-3840x2160-8709.jpeg') }}">
    @foreach($users as $user)
        <div class="user-name">{{ $user->name }} ({{ $user->email }})</div>
        {{ $users->links() }}
    @endforeach
@endsection
