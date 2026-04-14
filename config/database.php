<?php
    // config/database.php
    function getConnection(){
        // Dados do seu banco de dados
        $host = "";
        $db_name = "";
        $username = "";
        $password = "";
        
        try{ 
            // Criação da conexão via PDO
            $conn = new PDO("mysql:host=$host; dbname=$db_name; charset=utf8", $username, $password);
            
            // Configura o PDO para lançar exceções em caso de erro
            $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $exception){
            // Se der erro ele para a execução e mostra o motivo
            die("Erro de conexão: " . $exception->getMessage());
        }
    }
?>
