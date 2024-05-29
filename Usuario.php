<?php

class Usuario
{
    private $id;
    private $nome;
    private $senha;
    private $email;
    private $token;

    public function __construct($id, $nome, $senha, $email, $token)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->senha = $senha;
        $this->email = $email;
        $this->token = $token;
    }

    public function getId()
    {
        return $this->id;
    }
<<<<<<< HEAD

=======
>>>>>>> b69a4aeb44e7a6c4974b4ba01d234d1a3740dc48
    public function getNome()
    {
        return $this->nome;
    }
<<<<<<< HEAD

=======
>>>>>>> b69a4aeb44e7a6c4974b4ba01d234d1a3740dc48
    public function getSenha()
    {
        return $this->senha;
    }
<<<<<<< HEAD

=======
>>>>>>> b69a4aeb44e7a6c4974b4ba01d234d1a3740dc48
    public function getEmail()
    {
        return $this->email;
    }
<<<<<<< HEAD

=======
>>>>>>> b69a4aeb44e7a6c4974b4ba01d234d1a3740dc48
    public function getToken()
    {
        return $this->token;
    }

<<<<<<< HEAD

=======
>>>>>>> b69a4aeb44e7a6c4974b4ba01d234d1a3740dc48
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
<<<<<<< HEAD

=======
>>>>>>> b69a4aeb44e7a6c4974b4ba01d234d1a3740dc48
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
<<<<<<< HEAD

=======
>>>>>>> b69a4aeb44e7a6c4974b4ba01d234d1a3740dc48
    public function setEmail($email)
    {
        $this->email = $email;
    }
<<<<<<< HEAD

    public function setToken($token)
    {
        $this->token = $token;
    }    
}
=======
    public function setToken($token)
    {
        $this->token = $token;
    }
}
>>>>>>> b69a4aeb44e7a6c4974b4ba01d234d1a3740dc48
