@extends('layouts.master')

@section('title', 'Editar usuário - {{ $user->name }}')


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
                       <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Editar usuário - {{ $user->name }}</h4>
                                        <p class="text-muted m-b-30">Configurações de usuários
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

                        <div class="container-xl">
                            <div class="row row-cards">
                              
                            <div class="col-md-6">
                              <div class="card">
                                <div class="card-header">
                                  <h3 class="card-title">Basic form</h3>
                                </div>
                                <div class="card-body">
                                  <form>
                                    <div class="form-group mb-3 ">
                                      <label class="form-label">Email address</label>
                                      <div>
                                        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small class="form-hint">We'll never share your email with anyone else.</small>
                                      </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                      <label class="form-label">Password</label>
                                      <div>
                                        <input type="password" class="form-control" placeholder="Password">
                                        <small class="form-hint">
                                          Your password must be 8-20 characters long, contain letters and numbers, and must not contain
                                          spaces, special characters, or emoji.
                                        </small>
                                      </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                      <label class="form-label">Select</label>
                                      <div>
                                        <select class="form-select">
                                          <option>Option 1</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group mb-3">
                                      <label class="form-label">Checkboxes</label>
                                      <div>
                                        <label class="form-check">
                                          <input class="form-check-input" type="checkbox" checked="">
                                          <span class="form-check-label">Option 1</span>
                                        </label>
                                        <label class="form-check">
                                          <input class="form-check-input" type="checkbox">
                                          <span class="form-check-label">Option 2</span>
                                        </label>
                                        <label class="form-check">
                                          <input class="form-check-input" type="checkbox" disabled="">
                                          <span class="form-check-label">Option 3</span>
                                        </label>
                                      </div>
                                    </div>
                                    <div class="form-footer">
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
@endsection






@section('script')
@endsection