@extends('layouts.master')

@section('css')
<!-- Responsive Table css -->
<link href="{{ URL::asset('assets/libs/rwd-table/rwd-table.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<!-- Start Content-->
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <!-- Button trigger modal -->
                        @can('isAdmin')
                        <a href="" style="margin-right:5px;" class="btn btn-info" data-toggle="modal" data-target="#associationCoordinatorCourse">Associar Curso</a>
                        @endcan
                        @can('isCoordinator')
                        <a href="" style="margin-right:5px;" class="btn btn-info" data-toggle="modal" data-target="#associationGroupUser">Associar Classe</a>
                        <a href="" style="margin-right:5px;" class="btn btn-primary" data-toggle="modal" data-target="#associationSubjectUser">Associar Disciplina</a>
                        @endcan
                    </ol>
                </div>
                <h4 class="page-title">Usuários</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

                                            <form action="/home/new/users" method="POST">

                                                @csrf
                                                <div class="form-group">
                                                    <label for="fullname">Nome Completo</label>
                                                    <input class="form-control" type="text" id="fullname" placeholder="Digite o nome" name="name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="emailaddress">E-mail</label>
                                                    <input class="form-control" type="email" id="emailaddress" placeholder="Digite o e-mail" name="email" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Senha</label>
                                                    <input class="form-control" type="password" id="password" placeholder="Digite a senha" name="password" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="type">Tipo</label>
                                                    <select class="custom-select custom-select-sm">
                                                        <option selected>Selecione o criador</option>
                                                        @foreach($users as $user)
                                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                                        @endforeach
                                                    </select>

                                                    <button type="submit" class="btn btn-sm btn-success">Salvar</button>

                                                </div>

                                    </div>

<!-- Responsive Table js -->
<script src="{{ URL::asset('assets/libs/rwd-table/rwd-table.min.js')}}"></script>

<!-- Init js -->
<script src="{{ URL::asset('assets/js/pages/responsive-table.init.js')}}"></script>

@endsection
