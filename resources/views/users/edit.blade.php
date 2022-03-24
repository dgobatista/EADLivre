
@extends('layouts.app')

@section('title', 'Editar usuário {{ $user->name }}')


@section('content') 
    
<h1>Editar usuário - {{ $user->name }}</h1>

@if ($errors->any())
    <ul class="errors">

        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach

    </ul>
@endif


<form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    @include('users._partials.form')
</form>

@endsection