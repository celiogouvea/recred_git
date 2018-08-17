@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')
    
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            <div class="small-box bg-blue">
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
                <h5 class="box-title">Nome:</h5>
            </div>
            <div class="box-body">
                <h4>{{$user->name}}</h4>
            </div>
            <div class="box-header with-border">
                <h5 class="box-title">Email:</h5>
            </div>
            <div class="box-body">
                <h4>{{$user->email}}</h4>
            </div>
            <div class="box-header with-border">
                <h5 class="box-title">C.P.F:</h5>
            </div>
            <div class="box-body">
                <h4>{{$user->cpf}}</h4>
            </div>
            <div class="box-header with-border">
                <h5 class="box-title">Telefone:</h5>
            </div>
            <div class="box-body">
                <h4>{{$user->telefone}}</h4>
            </div>
            <div class="box-header with-border">
                <h5 class="box-title">Endereço:</h5>
            </div>
            <div class="box-body">
                <h4>{{$user->endereco}}, {{$user->bairro}} , {{$user->cidade}} - {{$user->estado}}</h4>
            </div>
        </div>
    </div>
@stop