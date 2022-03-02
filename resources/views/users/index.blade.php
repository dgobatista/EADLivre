

@extends('layouts.app')

@section('title', 'Listagem de usuários')

@section('content')

<h1>Lista de usuários</h1>

<ul>
    @foreach($users as $user)
 
    <li>
        {{ $user-> name }} -
        {{ $user-> email }}
        | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
    </li>

    @endforeach
</ul>

@endsection