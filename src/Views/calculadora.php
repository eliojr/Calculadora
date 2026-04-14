<?php if(isset($_SESSION['usuario_id'])): ?>
	<div class="historico-container">
        <h3> Seu Histórico </h3>
        <form id="form-historico">
            <div id="lista-calculos">
                <div class="item">
                    <input type="checkbox" name="selecionados[]" value="1">
                    <span> 10 + 5 = 15 </span>
                </div>
            </div>
            <button type="button" onclick="excluirSelecionados()"> Excluir Selecionados </button>
        </form>
	</div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calculadora IPI </title>
    <link rel="stylesheet" href="css/style_calc.css">
    <script src='js/script_calc.js' defer></script>
</head>
<body>
    
    <div class="calc">
        <div class="tela">
            <input type="text" id="display" readonly placeholder="0">
        </div>

        <div class="grade">
            <button onclick="clear_display()" class="limpar">C</button>
            <button onclick="add_op('/')" class="op">/</button>
            <button onclick="add_op('*')" class="op">*</button>

            <button onclick="add_numero('7')">7</button>
            <button onclick="add_numero('8')">8</button>
            <button onclick="add_numero('9')">9</button>
            <button onclick="add_op('-')" class="op">-</button>

            <button onclick="add_numero('4')">4</button>
            <button onclick="add_numero('5')">5</button>
            <button onclick="add_numero('6')">6</button>
            <button onclick="add_op('+')" class="op">+</button>

            <button onclick="add_numero('1')">1</button>
            <button onclick="add_numero('2')">2</button>
            <button onclick="add_numero('3')">3</button>
            <button onclick="calcular()" class="igual">=</button>

            <button onclick="add_numero('0')" class="zero">0</button>
            <button onclick="add_numero('.')">.</button>
        </div>
    </div>
</body>
</html>
