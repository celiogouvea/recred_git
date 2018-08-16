<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmpresaController extends Controller
{
    public function index()
    {
        return view('admin.empresa.index');
    }

    public function cadastro()
    {
        return view('admin.empresa.cadastro');
    }

    public function editar()
    {
        return view('admin.empresa.editar');
    }

    public function excluir()
    {
        return view('admin.empresa.excluir');
    }

    public function cadastroNota()
    {
        return view('admin.empresa.cadastroNota');
    }

    public function editarNota()
    {
        return view('admin.empresa.editarNota');
    }

    public function excluirNota()
    {
        return view('admin.empresa.excluirNota');
    }
}
