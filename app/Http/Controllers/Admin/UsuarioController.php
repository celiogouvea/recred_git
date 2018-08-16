<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsuarioController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('admin.usuario.index', compact('user'));
    }

    public function cadastro()
    {
        return view('admin.usuario.cadastro');
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
