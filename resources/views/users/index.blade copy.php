@extends('layouts.master')

@section('title', 'Listagem de usuários')

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="{{ URL::asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection



@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Usuários</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Cda</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Config</a></li>
    </ol>
</div>                          
@endsection

@section('content')





<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="mt-0 header-title">Listagem de usuários</h4>
                                        <p class="text-muted m-b-30">Configuração dos usuários.
                                        </p>

                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>E-mail</th>
                                                <th>Comentários</th>
                                                <th></th>
                                                <th></th>

                                            </tr>
                                        </thead>
                                            <tbody>

                                                
                                                    @foreach($users as $user)        
                                                    <tr>                              
                                                        <td>{{ $user-> name }}</td>
                                                        <td>{{ $user-> email }}</td>
                                                        <td>xxx</td>          
                                                        <td><a href="{{ route('users.edit', $user->id) }}"><button type="button" class="btn btn-primary btn-sm">Editar</button></a></td>
                                                        <td><a href="{{ route('users.show', $user->id) }}"><button type="button" class="btn btn-primary btn-sm">Detalhes</button></a></td>
                                     
                                                    </tr>
                                                    @endforeach
                                                
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

@endsection

@section('script')

@endsection