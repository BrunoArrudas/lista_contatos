<?php

class Contato {

    private $id;
    private $nome;
    private $telefone;
    private $email;

    public function __construct($id, $nome, $telefone, $email)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
    }
    
    public function getId(){
       return $this->id;
    }

    public function getNome(){
       return $this->nome;
    }

    public function getTelefone(){
       return $this->telefone;
    }

    public function getEmail(){
       return $this->email;
    }

    
<<<<<<< Updated upstream




}





?>
=======
    public function setTelefone($telefone)
    {
        // Verificar se o número é um telefone válido
        $this->telefone = $telefone;
    }
    
    public function setEmail($email)
    {
        // Verificar se um email é válido
        $this->email = $email;
    }
}

>>>>>>> Stashed changes
