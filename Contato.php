<?php

class Contato
{
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

    public function getId()
    {
        return $this->id;
    }
    
    public function getNome()
    {
        return $this->nome;
    }
    
<<<<<<< HEAD
<<<<<<< Updated upstream
=======
    public function getTelefone()
    {
        return $this->telefone;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
>>>>>>> 645aa7fc94904755d4a1a01be4cded2ec6e281e4

    public function setNome($nome)
    {
        // Verificador se o nome não é vazio e tem ao menos duas letras, e não contém número
        // enfim, se é um nome válido
        $this->nome = $nome;
    }
    
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
<<<<<<< HEAD
}
<<<<<<< HEAD





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
=======
=======
}
>>>>>>> bc4585de1271735f3c47032a4a2a7cd2592cd8aa
>>>>>>> 645aa7fc94904755d4a1a01be4cded2ec6e281e4
