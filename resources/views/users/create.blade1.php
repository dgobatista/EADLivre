
@extends('layouts.app')

@section('title', 'Criar usuário')


@section('content') 


@include('includes.validations-form')

<form action="{{ route('users.store') }}" method="post">
    @csrf
    @include('users._partials.form')
</form>

@endsection