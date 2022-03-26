@extends('layouts.master')

@section('title', 'Editar usuário - {{ $user->name }}')


@section('css')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
     <h4 class="page-title">Editar usuário</h4>
        <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="javascript:void(0);">CDA</a></li>
         <li class="breadcrumb-item"><a href="javascript:void(0);">Usuários</a></li>
         <li class="breadcrumb-item active">Editar usuário</li>
     </ol>
 </div>
@endsection

@section('content')
                       <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Editar usuário - {{ $user->name }}</h4>
                                        <p class="text-muted m-b-30">Configurações do usuário
                                            @include('includes.validations-form')
                                            <br>
                                                    <form action="{{ route('users.update', $user->id) }}" method="post">
                                                        @method('PUT')
                                                        @include('users._partials.form')
                                                    </form>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
@endsection

@section('script')
@endsection