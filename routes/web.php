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

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin'], function(){

    //rota para o home de administrador
    $this->get('admin', 'AdminController@index')->name('admin.home');

    //Usuário
    //rota para dados do usuario
    $this->get('usuario', 'UsuarioController@index')->name('admin.usuario');
    //rota para cadastro de usuario
    $this->get('cadastroUsuario', 'UsuarioController@cadastro')->name('admin.cadastrUsuario');
    //rota para editar usuario
    $this->get('editarUsuario', 'UsuarioController@cadastro')->name('admin.editarUsuario');
    //rota para excluir usuario
    $this->get('excluirUsuario', 'UsuarioController@cadastro')->name('admin.editarUsuario');

    //Advogado
    //rota para dados do usuario
    $this->get('advogado', 'AdvogadoController@index')->name('admin.advogado');
    //rota para cadastro de usuario
    $this->get('cadastroAdvogado', 'AdvogadoController@cadastro')->name('admin.cadastroAdvogado');
    //rota para editar usuario
    $this->get('editarAdvogado', 'AdvogadoController@cadastro')->name('admin.editarAdvogado');
    //rota para excluir usuario
    $this->get('excluirAdvogado', 'AdvogadoController@cadastro')->name('admin.editarAdvogado');





});



$this->get('/', 'Site\SiteControlle@index')->name('home');

Auth::routes();

