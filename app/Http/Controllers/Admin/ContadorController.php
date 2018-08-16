<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContadorController extends Controller
{
    public function index()
    {
        return view('admin.contador.index');
    }

    public function cadastro()
    {
        return view('admin.contador.cadastro');
    }

    public function editar()
    {
        return view('admin.contador.editar');
    }

    public function excluir()
    {
        return view('admin.contador.excluir');
    }
}
