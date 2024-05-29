<?php

require_once 'Database.php';
require_once 'Usuario.php';

<<<<<<< HEAD
class UsuarioDAO
{
=======
class UsuarioDAO{
>>>>>>> b69a4aeb44e7a6c4974b4ba01d234d1a3740dc48
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function create($usuario)
    {
        try {
<<<<<<< HEAD
            $sql = "INSERT INTO usuario (nome, senha, email, token)
                    VALUES (:nome, :senha, :email, :token)";
=======

            $sql = "INSERT INTO usuario (nome, senha, email, token) VALUES (:nome, :senha, :email, :token)";
            
>>>>>>> b69a4aeb44e7a6c4974b4ba01d234d1a3740dc48
            $stmt = $this->db->prepare($sql);

            $nome = $usuario->getNome();
            $senha = $usuario->getSenha();
            $email = $usuario->getEmail();
            $token = $usuario->getToken();

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':token', $token);

            $stmt->execute();
<<<<<<< HEAD

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function getByEmail($email)
    {
        try {
            $sql = "SELECT * FROM usuario WHERE email = :email";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            return $usuario ? new Usuario(
                $usuario['id'],
                $usuario['nome'],
                $usuario['senha'],
                $usuario['email'],
                $usuario['token']
            ) : null;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function updateToken($id, $token) {
        try {
            $sql = "UPDATE usuario SET token = :token WHERE id = :id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':token', $token);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
=======
            
            return true;
        } catch (PDOException $e){
            return false;
        }
    }
}



?>
>>>>>>> b69a4aeb44e7a6c4974b4ba01d234d1a3740dc48
