<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpac</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        #nav1010{
            display: none;
        }
        @media (max-width: 1010px) {
            #nav1010{
            display: inline;
        }
            .navfull{display: none;}
        }
    </style>
</head>
<body>

<div id="nav1010">
            <nav class="navbar navbar-light bg-light sticky-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="javascript:void(0)">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAaCAMAAACTisy7AAAAV1BMVEVHcEwjVoMueakSTX0xbJgtcqEqdaUvZJBDfacsWIMpdKQjVIH///8mYY8nbZwpZ5UjW4kkWIQITH5TfqMJWo6BnbiqvtACZJno7fK9zNqZssgXZpjQ2+TVWCOCAAAACnRSTlMA4eTtSsyldh+d0AtR7gAAARdJREFUKJFlkouiRSAQRR0H0UMpRfj/77yzK4/rLK+ZWRKZqrpo2ECwvvqhH8TJh73crcC3ebqPePEY/LVvKYZrXNi0EBM2CxBMZSwTTno7AetXuW6IxZQl1UJIUngJIhKTHsyMMTZag4vMaCQmzYjAIZ9ckX5CDbMqYJyhkykSiVItLZrKaDrmmNxqc+mWDrfPB5xWl9SZObqZrPO4qFS6pdYy6DnjvMqyP91OH3ls3vuwylSgF6rGgk4T5lVYUMCndKcd+VokTyn+en/JcXEhHjH4HUmb1rbjfCz7uAAKidIu/GR0a9jClu7rzv657B6wsojau7suu9A7Lf8c0Z7WyY3Or/5r6jI0ct79tm7Purqu2+7Rln/dbR320Vx8ygAAAABJRU5ErkJggg==" width="30" height="30" class="d-inline-block align-top" alt="">
                        Univiçosa - SIMPAC
                    </a>
                    <button class="navbar-toggler text-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end text-bg-light" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                            <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?= base_url("/index.php")?>">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Avaliação
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-light">
                                    <li><a class="dropdown-item" href="<?= base_url("/index.php/avaliacao")?>">Avaliação</a></li>
                                    <li><a class="dropdown-item" href="#">Exibir Avaliações</a></li>
                                </li>
                    </ul>
                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Projetos
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-light">
                                    <li><a class="dropdown-item" href="<?= base_url("/index.php/submissao")?>">Submissao de projetos</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url("/index.php/exibirSubmissao")?>">Exibir Projetos</a></li>
                                </li>
                    </ul>
                    <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Alunos
                                </a>
                                <ul class="dropdown-menu dropdown-menu-light">
                                <li><a class="dropdown-item" href="<?= base_url("/index.php/inserirAluno")?>">Cadastrar Aluno</a></li>
                                <li><a class="dropdown-item" href="<?= base_url("/index.php/exibirAluno")?>">Exibir Alunos</a></li>
                    </li>
                            </ul>
                            <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="navfull">
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-expand navbar sticky-top">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAaCAMAAACTisy7AAAAV1BMVEVHcEwjVoMueakSTX0xbJgtcqEqdaUvZJBDfacsWIMpdKQjVIH///8mYY8nbZwpZ5UjW4kkWIQITH5TfqMJWo6BnbiqvtACZJno7fK9zNqZssgXZpjQ2+TVWCOCAAAACnRSTlMA4eTtSsyldh+d0AtR7gAAARdJREFUKJFlkouiRSAQRR0H0UMpRfj/77yzK4/rLK+ZWRKZqrpo2ECwvvqhH8TJh73crcC3ebqPePEY/LVvKYZrXNi0EBM2CxBMZSwTTno7AetXuW6IxZQl1UJIUngJIhKTHsyMMTZag4vMaCQmzYjAIZ9ckX5CDbMqYJyhkykSiVItLZrKaDrmmNxqc+mWDrfPB5xWl9SZObqZrPO4qFS6pdYy6DnjvMqyP91OH3ls3vuwylSgF6rGgk4T5lVYUMCndKcd+VokTyn+en/JcXEhHjH4HUmb1rbjfCz7uAAKidIu/GR0a9jClu7rzv657B6wsojau7suu9A7Lf8c0Z7WyY3Or/5r6jI0ct79tm7Purqu2+7Rln/dbR320Vx8ygAAAABJRU5ErkJggg==" width="30" height="30" class="d-inline-block align-top" alt="">
                Univiçosa - SIMPAC
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url("/index.php")?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Avaliação
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-light">
                                    <li><a class="dropdown-item" href="<?= base_url("/index.php/avaliacao")?>">Avaliação</a></li>
                                    <li><a class="dropdown-item" href="#">Exibir Avaliações</a></li>
                                </li>
                    </ul>
                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Projetos
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-light">
                                    <li><a class="dropdown-item" href="<?= base_url("/index.php/submissao")?>">Submissao de projetos</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url("/index.php/exibirSubmissao")?>">Exibir Projetos</a></li>
                                </li>
                    </ul>
                    <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Alunos
                                </a>
                                <ul class="dropdown-menu dropdown-menu-light">
                                <li><a class="dropdown-item" href="<?= base_url("/index.php/inserirAluno")?>">Cadastrar Aluno</a></li>
                                <li><a class="dropdown-item" href="<?= base_url("/index.php/exibirAluno")?>">Exibir Alunos</a></li>
                    </li>
                </ul>
                

                
            </div> 
        </nav>
    </div>

    <h1 align="center">Exibição de Avaliações</h1>

    <table class="d-flex justify-content-center table table-bordered border-primary">
        <tr>
            <th>Id</th>
            <th>IdAluno</th>
            <th>IdAvaliador</th>
            <th>Introdução</th>
            <th>Organização</th>
            <th>Repetições</th>
            <th>Apresentação</th>
            <th>Conclusão</th>
            <th>Tempo de Apresentação</th>
        </tr>

        <?php foreach($avaliacao as $avaliacao): ?> 
        <tr>
            <td><?php echo $avaliacao['Id'] ?></td>
            <td><?php echo $avaliacao['IdAluno'] ?></td>
            <td><?php echo $avaliacao['IdAvaliador'] ?></td>
            <td><?php echo $avaliacao['Introducao'] ?></td>
            <td><?php echo $avaliacao['Organizacao'] ?></td>
            <td><?php echo $avaliacao['Repeticoes'] ?></td>
            <td><?php echo $avaliacao['Apresentacao'] ?></td>
            <td><?php echo $avaliacao['Conclusao'] ?></td>
            <td><?php echo $avaliacao['TempoApresentacao'] ?></td>
        </tr>
        <?php endforeach ?>


    </table>

    <div class="d-flex justify-content-center">
            <?php echo $pager-> links('default','paginacao_full') ?>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>