<?php
    session_start();
    require_once '../src/Controllers/AuthController.php';
    
    $rota = $_GET['rota'] ?? 'login'; // Primeira tela a ser exibida
    $auth = new AuthController();
    
    switch($rota){
    
        case 'cadastro':
            include '../src/Views/cadastro.php';
        break;
        
        case 'salvar-cadastro':
            $auth->cadastrar();
        break;
        
        case 'login':
            include '../src/Views/login.php';
        break;
        
        case 'fazer-login':
            $auth->login();
        break;
        
        case 'logout':
            $auth->logout();
        break;
        
        case 'calculadora':
            default:
            include '../src/Views/calculadora.php';
        break;
    }
?>
