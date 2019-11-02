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
                </div>
                <h4 class="page-title">Usuários</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <div class="responsive-table-plugin">
                    <div class="table-rep-plugin">
                        <div class="table-responsive" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                @foreach($users as $user)

                                <tr>
                                    <td>{{ $user->name}}</td>
                                    <td>{{ $user->email}}</td>
                                    <td>



                                        <a href="" class="btn btn-info" data-myname="{{$user->name}}" data-myemail="{{$user->email}}" data-useid="{{$user->id}}" data-mytype="{{$user->type}}" data-myphone="{{$user->phone}}" data-toggle="modal" data-target="#editNewUser">
                                            Editar
                                        </a>
                                        <a href="" class="btn btn-danger" data-useid="{{$user->id}}" data-toggle="modal" data-target="#deleteNewUser">
                                            Excluir
                                        </a>
                                    </td>
                                </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end .table-responsive -->


<!-- Responsive Table js -->
<script src="{{ URL::asset('assets/libs/rwd-table/rwd-table.min.js')}}"></script>

<!-- Init js -->
<script src="{{ URL::asset('assets/js/pages/responsive-table.init.js')}}"></script>

@endsection
