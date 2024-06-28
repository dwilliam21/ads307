<?php

namespace App\Controllers;

use App\Models\ModelAluno;

class AlunoController extends BaseController
{
    public function exibirAluno(): string
    {
        // $text['title'] = "Simpac";
        // $text['h1'] = "Exibição de Alunos";

        $alunosModel = new ModelAluno();

        //$alunos =  $alunosModel -> findAll();

        //$dados = [ 'alunos' => $alunosModel->paginate(10),
          //         'pager'  => $alunosModel->pager];

          $listaAluno = $alunosModel->asArray()->paginate(10);
        $table = new \CodeIgniter\View\Table();
        $table->setHeading(['Id','Matricula','Nome','Curso','Email','Senha']);
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
        $data = ['tabela' => $table->generate($listaAluno),
                 'inf' => $alunosModel->paginate(10),
                 'pager' => $alunosModel->pager];

        return view('administrador/exibirAluno', $data);
    }

    public function inserirAluno(): string
    {
        $data['titulo'] = "Simpac";
        $data['h1'] = "Inserir Alunos";
        
        $data['inserir'] = "Inserir";

        if($this->request->getMethod() === 'post'){

            $alunoModel = new ModelAluno();

            $alunoModel->set('Matricula',$this->request->getPost('Matricula'));
            $alunoModel->set('Nome',$this->request->getPost('Nome'));
            $alunoModel->set('Curso',$this->request->getPost('Curso'));
            $alunoModel->set('Email',$this->request->getPost('Email'));
            $alunoModel->set('Senha',$this->request->getPost('Senha'));

            if($alunoModel->insert()){

                $data['msg'] = "Aluno inserido com sucesso";

            }
            else{

                $data['msg'] = "Erro ao inserir aluno";
            }
        }

        return view('administrador/inserirAluno',$data);
    }
}
