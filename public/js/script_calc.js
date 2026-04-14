const vd = document.getElementById('display');
vd.value = '0';
        
function add_numero(num){
    // Lógica para o zero inicial
    if(vd.value === '0' && num !== '.'){
        vd.value = num;
        return;
    }
    
    // Lógica para o ponto decimal
    if(num === '.'){
        const lastchar = vd.value.slice(-1);
        
        // Se o visor estiver vazio ou o último caractere for um operador (+, -, *, /)
        // transforma o '.' em '0.' para evitar algo como '7*-.4'
        if(vd.value === "" || ['+', '-', '*', '/'].includes(lastchar)){
            vd.value += "0.";
            return;
        }
        
        // Divide a expressão para verificar se o último número já tem ponto
        const partes = vd.value.split(/[\+\-\*\/]/);
        const ultimonumero = partes[partes.length - 1];
        
        if(ultimonumero.includes('.')){
            return; // Já tem ponto nesse número, não faz nada
        }
    }
    vd.value += num;
}

function add_op(op){
    const lastchar = vd.value.slice(-1);
    if(['+', '-', '*', '/'].includes(lastchar)){
        return; // já tem um operação como último caractere
    }
    vd.value += op;
}

function clear_display(){
    vd.value = '0';
}

function calcular(){
    try{
        let result = eval(vd.value);
        
        // Verificação se o resultado é Infinito ou se não é um número (Nan)
        if(result === Infinity || result === -Infinity){
            vd.value = "Erro: Div. por 0";
        }else{
            if(isNaN(result)){
                vd.value = "Erro matemático";
            }else{
                // Se o resultado for um número decimal longo, limita as casas decimais
                // Ex: 0.1 + 0.2 vira 0.3 em vez de 0.3000000000000000004
                result = Number(result.toFixed(8)).toString();
                vd.value = result;
                console.log("Resultado calculado: ", result);
            }
        }
        
    }catch(e){
        alert("Expressão inválida!")
    }
}








