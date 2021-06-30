<?php
include_once ('../bd/Conecta.php');
include_once '../model/Pessoa.php';

class daoPessoa {
    public $conn;
    
    function inserir(Pessoa $p) {
        $conn = new Conecta();
        $sql = "insert into pessoa values (null, '" . $p->getNome() .
                "','" . $p->getDtNasc() . "','" . $p->getLogin() . "','" .
                $p->getSenha() . "','" . $p->getPerfil() . "','" .
                $p->getEmail() . "','" . $p->getCpf() . "')";
        if (mysqli_query($conn->conectadb(), $sql))
            $msg = "Dados cadastrados com sucesso!";
        else
            $msg = "Erro no cadastramento.";
        mysqli_close($conn->conectadb());
        return $msg;
    }

}
