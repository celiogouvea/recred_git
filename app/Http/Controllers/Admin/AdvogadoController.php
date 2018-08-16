<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdvogadoController extends Controller
{
    public function index()
    {
        return view('admin.advogado.index');
    }

    public function cadastro()
    {
        return view('admin.advogado.cadastro');
    }

    public function editar()
    {
        return view('admin.advogado.editar');
    }

    public function excluir()
    {
        return view('admin.advogado.excluir');
    }
}
