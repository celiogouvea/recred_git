@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')
    <ol class="breadcrumb">
        <li><a href="">Home</a></li>
        <li><a href="">Usuário</a></li>
        <li><a href="">Editar</a></li>
    </ol>
    <br/>
    
@stop

@section('content')
<div class="box">
        <div class="box-body">
            <div class="small-box bg-blue">
                <div class="inner">
                    <h3>Cadastro de Usuário</h3>
                    <br/>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
            </div>
        </div>
</div>

<div class="box box-primary">
  <div class="form-group">
    <form method="POST" action="{{ route('admin.usuarioSalvar')}}">

    {!! csrf_field() !!}

      <p>Nome:</p>
      <div>
        <input type="text" name="name" placeholder="Ex: Fulano de Tal" class="form-control"/>
      </div>
      <p>Email:</p>
      <div>
        <input type="text" name="email" placeholder="Ex: fulanodetal@fulano.com.br" class="form-control"/>
      </div>
      <p>Senha:</p>
      <div>
        <input type="password" name="password" placeholder="Ex: 556889 ou hhyt6592" class="form-control"/>
      </div>
      <p>Imagem:</p>
      <div>
        <input type="text" name="imagem" placeholder="Ex: ......." class="form-control"/>
      </div>
      <p>C.P.F:</p>
      <div>
        <input type="text" name="cpf" placeholder="Ex: 00000000000" class="form-control"/>
      </div>
      <p>Telefone:</p>
      <div>
        <input type="text" name="telefone" placeholder="Ex: 63999998888" class="form-control"/>
      </div>
      <p>Endereço:</p>
      <div>
        <input type="text" name="endereco" placeholder="Ex: rua __ . lt __" class="form-control"/>
        <input type="text" name="bairro" placeholder="Qd. 101 Norte" class="form-control"/>
        <input type="text" name="cidade" placeholder="Palmas" class="form-control"/>
        <input type="text" name="estado" placeholder="TO" class="form-control"/>
      </div>


      <br/><br/>
      <div>
        <center>
          <button type"submit" class="btn btn-success">Salvar</button>
        </center>
      </div>
      <br/>
    </form>
  </div>
</div>



@stop