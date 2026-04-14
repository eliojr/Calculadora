<?php
    // src/Controllers/AuthController.php
    require_once __DIR__ . '/../../config/database.php';
    
    class AuthController {
        public function cadastrar() {
            // 1. Pegar os dados do formulário
            $nome = $_POST['nome'] ?? '';
            $senha = $_POST['senha'] ?? '';
    
            if (empty($nome) || empty($senha)) {
                die("Preencha todos os campos!");
            }
    
            // 2. Criptografar a senha (NUNCA salve senha pura no banco!)
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    
            try {
                $db = getConnection();
                
                // 3. Preparar a SQL para evitar SQL Injection
                $sql = "INSERT INTO usuarios (nome, senha) VALUES (:nome, :senha)";
                $stmt = $db->prepare($sql);
                
                // 4. Executar
                $stmt->execute([
                    ':nome' => $nome,
                    ':senha' => $senhaHash
                ]);
    
                echo "Cadastro realizado com sucesso! <a href='index.php?rota=login'>Ir para Login</a>";
                
            } catch (PDOException $e) {
                if ($e->getCode() == 23000) { // Erro de duplicidade (nome já existe)
                    die("Este nome de usuário já está em uso.");
                }
                die("Erro ao cadastrar: " . $e->getMessage());
            }
        }
        
        public function login() {
            $nome = $_POST['nome'] ?? '';
            $senha = $_POST['senha'] ?? '';
    
            if (empty($nome) || empty($senha)) {
                die("Preencha todos os campos!");
            }
    
            $db = getConnection();
    
            // 1. Busca o usuário pelo nome
            $stmt = $db->prepare("SELECT * FROM usuarios WHERE nome = :nome");
            $stmt->execute([':nome' => $nome]);
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    
            // 2. Verifica se o usuário existe e se a senha "bate" com a hash
            if ($usuario && password_verify($senha, $usuario['senha'])) {
                // 3. Inicia a sessão oficial
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['usuario_nome'] = $usuario['nome'];
    
                // Redireciona para a calculadora
                header("Location: index.php?rota=calculadora");
                exit();
            } else {
                die("Usuário ou senha inválidos! <a href='index.php?rota=login'>Tentar novamente</a>");
            }
        }
    
        public function logout() {
            session_destroy();
            header("Location: index.php?rota=login");
            exit();
        }
    }
?>
