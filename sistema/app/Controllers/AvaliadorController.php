<?php

namespace App\Controllers;

use App\Models\ModelAvaliacao;
use App\Models\ModelSubmissao;

class AvaliadorController extends BaseController
{
    public function avaliacao(): string
    {
        $data['titulo'] = "Simpac";
        $data['h1'] = "Avaliação de Trabalhos";
        
        $data['inserir'] = "Inserir";

        if($this->request->getMethod() === 'post'){

        $avaliacaoModel = new ModelAvaliacao();

        $avaliacaoModel->set('IdAluno',$this->request->getPost('IdAluno'));
        $avaliacaoModel->set('IdAvaliador',$this->request->getPost('IdAvaliador'));
        $avaliacaoModel->set('Introducao',$this->request->getPost('Introducao'));
        $avaliacaoModel->set('Organizacao',$this->request->getPost('Organizacao'));
        $avaliacaoModel->set('Repeticoes',$this->request->getPost('Repeticoes'));
        $avaliacaoModel->set('Apresentacao',$this->request->getPost('Apresentacao'));
        $avaliacaoModel->set('Conclusao',$this->request->getPost('Conclusao'));
        $avaliacaoModel->set('TempoApresentacao',$this->request->getPost('TempoApresentacao'));

        if($avaliacaoModel->insert()){

            $data['msg'] = "Avaliação inserido com sucesso";

        }
        else{

            $data['msg'] = "Erro ao inserir avaliação";
        }
        }
        return view('avaliador/avaliacao',$data);
    }

    public function exibirAvaliacao(): string
    {
        $avaliacaoModel = new ModelAvaliacao();

        //$avaliacao = $avaliacaoModel -> findAll();

        $dados = [ 'avaliacao' => $avaliacaoModel->paginate(10),
                   'pager'  => $avaliacaoModel->pager];

        return view('avaliador/exibirAvaliacao', $dados);
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

        return view('avaliador/exibirSubmissao',$data);
    }
}
