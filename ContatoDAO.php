<?php

require_once 'Database.php';
require_once 'Contato.php';

class ContatoDAO {    
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getById($id) {
        try {
            $sql = "SELECT * FROM contatos_info WHERE id = :id";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $contato = $stmt->fetch(PDO::FETCH_ASSOC);
            return $contato ? new Contato($contato['id'], $contato['nome'], $contato['telefone'], $contato['email']) : null;

        } catch (PDOException $e) {
            return null;
        }
    }

    
    public function getAll() {
        try {
            $sql = "SELECT * FROM contatos_info";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return array_map(function($contato){
                return new Contato($contato['id'], $contato['nome'], $contato['telefone'], $contato['email']);
            }, $contatos);
        } catch (PDOException $e) {
            return [];
        }
    }

<<<<<<< HEAD
<<<<<<< Updated upstream
=======
    public function create($contato) {
        try {
            $sql = "INSERT INTO contatos_info (nome, telefone, email) 
                    VALUES (:nome, :telefone, :email)";
            $stmt = $this->db->prepare($sql);

            $nome = $contato->getNome();
            $telefone = $contato->getTelefone();
            $email = $contato->getEmail();

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            return true;

        } catch (PDOException $e) {
            return false;
        }
    }

    public function update($contato) {
        try {
            $sql = "UPDATE contatos_info SET nome = :nome, telefone = :telefone, email = :email WHERE id = :id";
            $stmt = $this->db->prepare($sql);

            $id = $contato->getId();
            $nome = $contato->getNome();
            $telefone = $contato->getTelefone();
            $email = $contato->getEmail();

            $stmt->bindParam(':id', $id);           
            $stmt->bindParam(':nome', $nome);           
            $stmt->bindParam(':telefone', $telefone);           
            $stmt->bindParam(':email', $email);
            
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function  delete($id) {
        try {
            $sql = "DELETE FROM contatos_info WHERE id = :id";
            
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
>>>>>>> Stashed changes
}

=======
>>>>>>> 645aa7fc94904755d4a1a01be4cded2ec6e281e4
    public function create($contato) {
        try {
            $sql = "INSERT INTO contatos_info (nome, telefone, email) 
                    VALUES (:nome, :telefone, :email)";
            $stmt = $this->db->prepare($sql);

            $nome = $contato->getNome();
            $telefone = $contato->getTelefone();
            $email = $contato->getEmail();

            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':telefone', $telefone);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            return true;

        } catch (PDOException $e) {
            return false;
        }
    }

    public function update($contato) {
        try {
            $sql = "UPDATE contatos_info SET nome = :nome, telefone = :telefone, email = :email WHERE id = :id";
            $stmt = $this->db->prepare($sql);

            $id = $contato->getId();
            $nome = $contato->getNome();
            $telefone = $contato->getTelefone();
            $email = $contato->getEmail();

            $stmt->bindParam(':id', $id);           
            $stmt->bindParam(':nome', $nome);           
            $stmt->bindParam(':telefone', $telefone);           
            $stmt->bindParam(':email', $email);
            
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
<<<<<<< HEAD

    public function  delete($id) {
        try {
            $sql = "DELETE FROM contatos_info WHERE id = :id";
            
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
=======
>>>>>>> bc4585de1271735f3c47032a4a2a7cd2592cd8aa
}

?>