@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')
    <h1>Usuário</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">


        </div>
        <div class="box-body">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>Dados do Usuário</h3>
                    <br/>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                    </div>
                <a href="#" class="small-box-footer">Editar Dados<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Nome:</h3>
            </div>
            <div class="box-body">
                <h2>{{$user->name}}</h2>
            </div>
            <div class="box-header with-border">
                <h3 class="box-title">Email:</h3>
            </div>
            <div class="box-body">
                <h2>{{$user->email}}</h2>
            </div>
            <div class="box-header with-border">
                <h3 class="box-title">C.P.F:</h3>
            </div>
            <div class="box-body">
                <h2>{{$user->cpf}}</h2>
            </div>
            <div class="box-header with-border">
                <h3 class="box-title">Telefone</h3>
            </div>
            <div class="box-body">
                <h2>{{$user->telefone}}</h2>
            </div>
            <div class="box-header with-border">
                <h3 class="box-title">Endereço:</h3>
            </div>
            <div class="box-body">
                <h2>{{$user->endereco}}, {{$user->bairro}} , {{$user->cidade}} - {{$user->estado}}</h2>
            </div>
        </div>
    </div>
@stop