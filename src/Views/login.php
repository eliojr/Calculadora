<link rel="stylesheet" href="css/style_calc.css">
<div class="auth-container">
    <h2>Acessar sua Conta</h2>
    <form action="index.php?rota=fazer-login" method="POST">
        <div class="input-group">
            <label>Usuário:</label>
            <input type="text" name="nome" required>
        </div>
        <div class="input-group">
            <label>Senha:</label>
            <input type="password" name="senha" required>
        </div>
        <button type="submit" class="btn-auth">Entrar</button>
    </form>
    <p>Ainda não tem conta? <a href="index.php?rota=cadastro">Crie uma aqui</a></p>
</div>
