<?php

namespace App\Controllers;

use App\Models\ModelAluno;
use App\Models\ModelAvaliacao;

class Home extends BaseController
{
    public function index(): string
    {
        return view('administrador/homeAdm');
    }

    public function homeAluno(): string
    {
        return view('aluno/homeAluno');
    }
    public function homeAvaliador(): string
    {
        return view('avaliador/homeAvaliador');
    }

    public function cadastro(): string
    {
        return view('cadastro');
    }
    
    public function login() : string
    {
        return view('login');
    }

    public function administracao() : string
    {
        return view('administrador/homeAdm');
    }
}
