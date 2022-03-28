@extends('layouts.master')

@section('title', 'Criar usuário')


@section('css')
@endsection

@section('breadcrumb')
<div class="col-sm-6">
     <h4 class="page-title">Criar usuário</h4>
        <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="javascript:void(0);">CDA</a></li>
         <li class="breadcrumb-item"><a href="javascript:void(0);">Usuários</a></li>
         <li class="breadcrumb-item active">Criar usuário</li>
     </ol>
 </div>
@endsection

@section('content')
                       <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Criar novo usuário</h4>
                                            @include('includes.validations-form')
                                            <form action="{{ route('users.store') }}" method="post">
                                                @csrf
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




