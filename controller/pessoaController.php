<?php

include_once '../dao/daoPessoa.php';

class pessoaController {

    public function inserirPessoa($nome, $dtnasc, $login, $senha, $perfil, $email, $cpf) {
        $pessoa = new Pessoa();
        $pessoa->setNome($nome);
        $pessoa->setDtnasc($dtnasc);
        $pessoa->setLogin($login);
        $pessoa->getSenha();
        $pessoa->setPerfil($perfil);
        $pessoa->setEmail($email);
        $pessoa->setCpf($cpf);
        
        $daoPessoa = new daoPessoa();
        $daoPessoa->iserir($pessoa);
    }

}
