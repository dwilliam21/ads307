<?php

namespace App\Controllers;

use App\Models\ModelAluno;
use App\Models\ModelAvaliacao;
use App\Models\ModelSubmissao;
use CodeIgniter\CodeIgniter;

class SubmissaoController extends BaseController
{
    public function submissao() : string
    {
        $dados['titulo'] = "Simpac";
        $dados['h1'] = "Submissao de projetos";
        $dados['inserir'] = "Inserir";

        if ($this->request->getMethod() === "post"){
            $submissaoModel = new ModelSubmissao();

            $submissaoModel->set('TituloTrabalho',$this->request->getPost('TituloTrabalho'));
            $submissaoModel->set('Curso',$this->request->getPost('Curso'));
            $submissaoModel->set('Autor',$this->request->getPost('Autor'));

            $submissaoModel->insert();
        }
        


        return view('administrador/submissao',$dados);
    }

    public function exibirSubmissao() : string
    {
        $exibirsubmissao = new ModelSubmissao();
        $listasubmissao = $exibirsubmissao->asArray()->paginate(10);
        $table = new \CodeIgniter\View\Table();
        $table->setHeading(['Id','TituloTrabalho', 'Curso', 'Autor', 'Situacao']);
        $template = [
            'table_open' => '<table class="table table-bordered border-primary">',
        
            'thead_open'  => '<thead>',
            'thead_close' => '</thead>',
        
            'heading_row_start'  => '<tr>',
            'heading_row_end'    => '</tr>',
            'heading_cell_start' => '<th>',
            'heading_cell_end'   => '</th>',
        
            'tfoot_open'  => '<tfoot>',
            'tfoot_close' => '</tfoot>',
        
            'footing_row_start'  => '<tr>',
            'footing_row_end'    => '</tr>',
            'footing_cell_start' => '<td>',
            'footing_cell_end'   => '</td>',
        
            'tbody_open'  => '<tbody>',
            'tbody_close' => '</tbody>',
        
            'row_start'  => '<tr>',
            'row_end'    => '</tr>',
            'cell_start' => '<td>',
            'cell_end'   => '</td>',
        
            'row_alt_start'  => '<tr>',
            'row_alt_end'    => '</tr>',
            'cell_alt_start' => '<td>',
            'cell_alt_end'   => '</td>',
        
            'table_close' => '</table>',
        ];
        
        $table->setTemplate($template);
        $data = ['tabela' => $table->generate($listasubmissao),
                 'inf' => $exibirsubmissao->paginate(10),
                 'pager' => $exibirsubmissao->pager];

        //$submissaoModel = new ModelSubmissao();

        //$submissao =  $submissaoModel -> findAll();
        //$dados = [ 'submissao' => $submissaoModel->paginate(10),
           //        'pager'  => $submissaoModel->pager];

        return view('administrador/exibirSubmissao',$data);
    }

    public function submissaoAluno() : string
    {
        $dados['titulo'] = "Simpac";
        $dados['h1'] = "Submissao de projetos";
        $dados['inserir'] = "Inserir";

        if ($this->request->getMethod() === "post"){
            $submissaoModel = new ModelSubmissao();

            $submissaoModel->set('TituloTrabalho',$this->request->getPost('TituloTrabalho'));
            $submissaoModel->set('Curso',$this->request->getPost('Curso'));
            $submissaoModel->set('Autor',$this->request->getPost('Autor'));

            $submissaoModel->insert();
        }
        


        return view('aluno/submissaoAluno',$dados);
    }

}
