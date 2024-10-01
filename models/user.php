<?php
// Inclui o arquivo 'database.php' que contém a classe Database para gerenciar a conexão com o banco de dados
require_once 'models/database.php';

// Definição da classe User, que representa as operações relacionadas aos usuários no sistema
class User
{
     // Função para encontrar um usuário pelo email
     public static function findByEmail($email)
     {
         
     }

    // Função para encontrar um usuário pelo ID
    public static function find($id)
    {
       
    }

        // Função para criar um novo usuário no banco de dados
        public static function create($data)
        {
           
        }
        
    // Função para buscar todos os usuários do banco de dados
    public static function all()
    {
        
    }

    // Função para atualizar os dados de um usuário existente
    public static function update($id, $data)
    {
       
    }

    // Função para excluir um usuário pelo ID
    public static function delete($id)
    {
        
    }

}
?>
