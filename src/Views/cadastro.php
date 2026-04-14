<link rel="stylesheet" href="css/style_calc.css">
<div class="auth-container">
    <h2> Criar nova conta </h2>
    <form action="index.php?rota=salvar-cadastro" method="POST">
    	<div class="input-group">
    		<label> Nome de Usuário:</label>
            <input type="text" name="nome" required placeholder="Seu nome">
    	</div>
        <div class="input-group">
        	<label> Senha </senha>
            <input type="password" name="senha" required placeholder="Crie uma senha forte">
        </div>
        <button type="submit" class="btn-auth"> Cadastrar</button>
    </form>
    <p> Já tem conta? <a href="index.php?rota=login"> Faça login </a></p>
</div>
