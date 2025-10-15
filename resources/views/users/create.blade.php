@extends('layouts.app')
@section('title', 'Cadastro de Usuário')

@section('content')
    <h1>Cadastro de Usuário</h1>
    <form enctype="multipart/form-data" action="{{ route('users.store') }}" method="POST">
        @csrf

        @if($errors->any())
            @foreach($errors->all() as $error)
                <div>
                    {{ $error }}
                </div>
            @endforeach

        @endif
        <div>
            <label for="">Nome</label>
            <input type="text" name="name" value="{{ old('name') }}">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" value="{{ old('email') }}">
        </div>
        <div>
            <label for="">Senha</label>
            <input type="password" name="password" value="{{ old('password') }}">
        </div>
        <div>
            <label for="">Avatar</label>
            <input type="file" name="avatar">
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
@endsection
