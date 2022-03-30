@extends('layouts.master')

@section('title', 'Criar usuário')

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
                Criar usuário
            </h2>
        </div>
    @endsection

    @section('content')

        <div class="row row-cards">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Criar Usuário</h3>
                    </div>

                    <div class="card-body">

                        @include('includes.validations-form')
                        <br>
                        @include('includes.validations-form')
                        <form action="{{ route('users.store') }}" method="post">
                            @csrf
                            @include('users._partials.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
