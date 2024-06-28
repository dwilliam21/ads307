<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index',['filter'=>'group:admin']);
$routes->get('cadastro', 'Home::cadastro');

//routes adiministrador
$routes->get('/', 'Home::index',['filter'=>'group:admin']);
$routes->get('exibirAluno', 'AlunoController::exibirAluno',['filter'=>'group:admin']);
$routes->get('inserirAluno', 'AlunoController::inserirAluno',['filter'=>'group:admin']);
$routes->post('inserirAluno', 'AlunoController::inserirAluno',['filter'=>'group:admin']);
$routes->get('avaliacao', 'AvaliacaoController::avaliacao',['filter'=>'group:admin']);
$routes->post('avaliacao', 'AvaliacaoController::avaliacao',['filter'=>'group:admin']);
$routes->get('exibirAvaliacao', 'AvaliacaoController::exibirAvaliacao',['filter'=>'group:admin']);
$routes->get('submissao', 'SubmissaoController::submissao',['filter'=>'group:admin']);
$routes->post('submissao','SubmissaoController::submissao',['filter'=>'group:admin']);
$routes->get('exibirSubmissao', 'SubmissaoController::exibirSubmissao',['filter'=>'group:admin']);
$routes->get('admin', 'Home::administracao',['filter'=>'group:admin']);

//routes aluno
$routes->get('aluno','Home::homeAluno',['filter'=>'group:user']);
$routes->get('submissaoAluno', 'SubmissaoController::submissaoAluno',['filter'=>'group:user']);
$routes->post('submissaoAluno','SubmissaoController::submissaoAluno',['filter'=>'group:user']);

//routes avaliador
$routes->get('avaliador','Home::homeAvaliador',['filter'=>'group:avaliador']);
$routes->get('avaliador/avaliacao', 'AvaliadorController::avaliacao',['filter'=>'group:avaliador']);
$routes->post('avaliador/avaliacao', 'AvaliadorController::avaliacao',['filter'=>'group:avaliador']);
$routes->get('avaliador/exibirAvaliacao', 'AvaliadorController::exibirAvaliacao',['filter'=>'group:avaliador']);
$routes->get('avaliador/exibirSubmissao', 'AvaliadorController::exibirSubmissao',['filter'=>'group:avaliador']);


service('auth')->routes($routes);