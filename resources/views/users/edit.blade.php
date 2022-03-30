@extends('layouts.master')

@section('title', 'Editar usuário')

@section('css')
@endsection


@section('breadcrumb')
    <div class="row align-items-center">
        <div class="col">
            <!-- Page pre-title -->
            <div class="page-pretitle">
                Overview
            </div>
            <h2 class="page-title">
                Editar usuário
            </h2>
        </div>
    @endsection

    @section('content')

        <div class="row row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Editar Usuário</h3>
                    </div>

                    <div class="card-body">

                        @include('includes.validations-form')
                        <br>
                                <form action="{{ route('users.update', $user->id) }}" method="post">
                                    @method('PUT')
                                    @include('users._partials.form')
                                </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
