<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <form id="form-contato" class="col-md-6 offset-md-2 ">
            <div class="container">
                <div class="row espaco">
                    <div class="col-xl-7 col-md-5 offset-md-3"
                         style="margin-top: 10%;">
                        <div class="card-header bg-light text-center
                             ">Cadastro de Cliente</div>
                             <?php
                             include_once '../dao/daoPessoa.php';
                             include_once '../model/Pessoa.php';



                             if (isset($_POST['cadastrar'])) {

                                 $nome = $_POST['nome'];
                                 $cpf = $_POST['cpf'];

                                 $dtNasc = $_POST['dtNasc'];
                                 $telefone = $_POST['Tel'];
                                 $email = $_POST['email'];
                                 $login = $_POST['login'];
                                 $senha = $_POST['senha'];
                                 $perfil = $_POST['perfil'];


                                 $pc = new PessoController();
                                 echo $pc->inserirPessoa($nome, $cpf, $dtNasc, $telefone, $email, $login, $senha, $perfil);
                             }
                             ?>
                        <div class="card-body border">

                            <div>
                                <form method="post" action="">
                                    <div class="row espaco">
                                        <form id="form-contato" class="col-md-6 offset-md-2 ">
                                            <label for="nome">Nome:</label>
                                            <br>
                                            <input type="text" id="nome" class="form-control"
                                                   name="nome" placeholder="nome completo" required>

                                            <br>
                                            <form method="post" action="">
                                                <div class="row espaco">
                                                    <label for="cpf">Cpf:</label>
                                                    <br>
                                                    <input type="text" id="cpf" name="cpf" class="form-control"  placeholder="xxx.xxx.xxx-xx"
                                                           pattern="\d{0,3}\.\d{1,3}\.\d{1,3}-\d{1,2}" required>


                                                    <br>
                                                    <form method="post" action="">
                                                        <div class="row espaco">
                                                            <label for="nascimento">Data de Nascimento:</label>
                                                            <br>
                                                            <input type="date" id="nascimento" class="form-control" name="nascimento" required>

                                                            <br>
                                                            <form method="post" action="">
                                                                <div class="row espaco">
                                                                    <label for="tel">Telefone:</label>
                                                                    <br>
                                                                    <input type="tel" id="tel" name="tel" class="form-control" placeholder="(xx)9xxx-xxxx" pattern="\(\d{2}\)[\s]\d{4,5}-\d{4}" required
                                                                           onblur="limpaNumero()">

                                                                    <br>
                                                                    <form method="post" action="">

                                                                        <label for="email">Email:</label>
                                                                        <br>
                                                                        <input type="email" id="email" class="form-control" name="email" placeholder="Digite seu Email Atual"
                                                                               pattern="([\w].{3,20})@([\w].+)\.([\w]{3,5})" required>


                                                                        <form id="form-contato" class="col-md-6 offset-md-2 ">
                                                                            <label for="nome">Login:</label>
                                                                            <br>
                                                                            <input type="text" id="login" class="form-control"
                                                                                   name="login" placeholder="Digite o login" required>


                                                                            <br>
                                                                            <form method="post" action="">
                                                                                <div class="row espaco">
                                                                                    <label for="senha">Senha:</label>
                                                                                    <br>
                                                                                    <input type="password" id="senha" class="form-control" name="senha" placeholder="Registre sua Senha" pattern="" required>

                                                                                    <br>
                                                                                    <form method="post" action="">
                                                                                        <div class="row espaco">
                                                                                            <label for="senha">Senha2:</label>
                                                                                            <br>
                                                                                            <input type="password" id="senha2" class="form-control" name="senha2" placeholder="Confirme sua Senha" pattern="" required>



                                                                                            <label for="perfil">Perfil</label>
                                                                                            <select name="perfil" class="form-control">
                                                                                                <option>[--Selecione--]</option>
                                                                                                <option>Cliente</option>
                                                                                                <option>Funcionario</option>                                                                                                                 
                                                                                            </select>



                                                                                            <div>
                                                                                            </div>
                                                                                            <div class="row espaco" style="margin-top: 20px;">
                                                                                                <div class="col-md-8 offset-md-5 ">
                                                                                                    <input class="btn btn-success "  type="submit" name="cadastrar" value="Enviar"> 
                                                                                                    &nbsp;&nbsp;
                                                                                                    <input class="btn btn-light " type="reset" value="Limpar">
                                                                                                    </form>

                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="conteiner-fluid" > 
                                                                                                <div class="row" >
                                                                                                    <div class="col-md-8 offset-md-5">

                                                                                                    </div>
                                                                                                </div>



                                                                                                <script src="js/bootstrap.js"></script>
                                                                                                <script src="js/bootstrap.min.js"></script>
                                                                                                </body>




                                                                                                </html>

