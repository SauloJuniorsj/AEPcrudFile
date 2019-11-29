<?php

class Usuario
{
    public $dados;

    /**
     * Metodo construtor
     * chamado quando a classe é 
     * instaciada
     */
    public function __construct()
    {
        $this->dados = [
          'nome' => $_POST['nome'] . ',',
          'email' => $_POST['email'] . ',',
          'senha' => $_POST['senha'] . ',',
            'espaco' => PHP_EOL
        ];
    }

    public function writeFile()
    {
        file_put_contents('arquivo.txt', $this->dados,  FILE_APPEND);
        Header('Location: tela.php');

    }

    public function readFile()
    {
        $usuario = file_get_contents('arquivo.txt');

    }

}