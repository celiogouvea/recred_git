<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix'=> 'admin'], function(){

    //rota para o home de administrador
    $this->get('/', 'AdminController@index')->name('admin.home');

    //Usuário
    //rota para dados do usuario
    $this->get('usuario', 'UsuarioController@index')->name('admin.usuario');
    //rota para cadastro de usuario
    $this->get('cadastroUsuario', 'UsuarioController@cadastro')->name('admin.cadastrUsuario');
    $this->post('cadastroUsuario', 'UsuarioController@usuarioSalvar')->name('admin.usuarioSalvar');
    //rota para editar usuario
    $this->get('editarUsuario', 'UsuarioController@cadastro')->name('admin.editarUsuario');
    //rota para excluir usuario
    $this->get('excluirUsuario', 'UsuarioController@cadastro')->name('admin.editarUsuario');

    //Advogado
    //rota para dados do advogado
    $this->get('advogado', 'AdvogadoController@index')->name('admin.advogado');
    //rota para cadastro de advogado
    $this->get('cadastroAdvogado', 'AdvogadoController@cadastro')->name('admin.cadastroAdvogado');
    //rota para editar advogado
    $this->get('editarAdvogado', 'AdvogadoController@cadastro')->name('admin.editarAdvogado');
    //rota para excluir advogado
    $this->get('excluirAdvogado', 'AdvogadoController@cadastro')->name('admin.editarAdvogado');

    //Contador
    //rota para dados do contador
    $this->get('contador', 'ContadorController@index')->name('admin.contador');
    //rota para cadastro de contador
    $this->get('cadastroContador', 'ContadorController@cadastro')->name('admin.cadastroContador');
    //rota para editar contador
    $this->get('editarContador', 'ContadorController@cadastro')->name('admin.editarContador');
    //rota para excluir contador
    $this->get('excluirContador', 'ContadorController@cadastro')->name('admin.editarContador');

    //Empresa
    //rota para dados do empresa
    $this->get('empresa', 'EmpresaController@index')->name('admin.empresa');
    //rota para cadastro de empresa
    $this->get('cadastroEmpresa', 'EmpresaController@cadastro')->name('admin.cadastroEmpresa');
    //rota para editar empresa
    $this->get('editarEmpresa', 'EmpresaController@cadastro')->name('admin.editarEmpresar');
    //rota para excluir empresa
    $this->get('excluirEmpresa', 'EmpresaController@cadastro')->name('admin.editarEmpresa');
    //rota para cadastro de nota fisca da empresa
    $this->get('cadastroEmpresaNota', 'EmpresaController@cadastro')->name('admin.cadastroEmpresaNota');
    //rota para editar de nota fisca da empresa
    $this->get('editarEmpresaNota', 'EmpresaController@cadastro')->name('admin.editarEmpresarNota');
    //rota para excluir de nota fisca da empresa
    $this->get('excluirEmpresaNota', 'EmpresaController@cadastro')->name('admin.editarEmpresaNota');



});



$this->get('/', 'Site\SiteControlle@index')->name('home');

Auth::routes();

