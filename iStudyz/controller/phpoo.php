<?php
class Cliente {
    private $nome;
    private $id;
    private $email;
    private $senha;

    public function __construct($nome, $id, $email, $senha) {
        $this->nome = $nome;
        $this->id = $id;
        $this->email = $email;
        $this->senha = $senha;
    }
}
?>