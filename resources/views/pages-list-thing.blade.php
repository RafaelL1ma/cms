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

                        <a href="" style="margin-right: 5px;" class="btn btn-primary" data-toggle="modal" data-target="#associationCourseIe">Associar Cursos</a>
                        <a href="" style="margin-right: 5px;" class="btn btn-info" data-toggle="modal" data-target="#associationAdmIe">Associar Adminstrador</a>
                        <a href="" class="btn btn-success" data-toggle="modal" data-target="#createNewIe">Nova Instituição</a>


                    </ol>
                </div>
                <h4 class="page-title">Instituições</h4>
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

                                        <th>title</th>
                                        <th>slug</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($thing as $t)
                                    <tr>

                                        <td>{{ $t->title}}</td>
                                        <td>{{ $t->slug}}</td>


                                        <td>
                                            <a href="" class="btn btn-info" data-mycompanyname="{{$ies->company_name}}" data-mystreet="{{$ies->street}}" data-myneighborhood="{{$ies->neighborhood}}" data-mycity="{{$ies->city}}" data-mynumber="{{$ies->number}}" data-myphone="{{$ies->phone}}" data-myuf="{{$ies->uf}}" data-mycnpj="{{$ies->cnpj}}" data-myfantasyname="{{$ies->fantasy_name}}" data-iesid="{{$ies->id}}" data-toggle="modal" data-target="#editNewIes">
                                                Editar
                                            </a>
                                            <a href="" class="btn btn-danger" data-iesid="{{$ies->id}}" data-toggle="modal" data-target="#deleteNewIes">
                                                Excluir
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end .table-responsive -->
