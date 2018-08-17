<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsuarioController extends Controller
{

    protected function validator(Request $request)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'cpf' => 'required|string|cpf|min:11|max:11|unique:users',
            'telefone'=> 'required|string|min:9|max:11',
            'endereco'=> 'required|string|max:255',
            'bairro'=> 'required|string|max:255',
            'cidade'=> 'required|string|max:255',
            'estado'=> 'required|string|max:2'
        ]);
    }






    public function index()
    {
        $user = auth()->user();

        return view('admin.usuario.index', compact('user'));
    }

    //metodo view cadastro
    public function cadastro()
    {
        return view('admin.usuario.cadastro');
    }
    //metodo salvar
    public function usuarioSalvar( Request $request, User $user)
    {
        $user->salvar($request->all());
        return view('admin.home.index');
    }





    public function editar()
    {
        return view('admin.usuario.editar');
    }

    public function excluir()
    {
        return view('admin.usuario.excluir');
    }





}
