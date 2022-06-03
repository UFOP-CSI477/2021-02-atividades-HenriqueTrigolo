function calcular(){

    let n1 = document.dados.valor1;
    let n2 = document.dados.valor2;

    if(validar(n1) && validar(n2)){
        let resultado =  parseInt(n1.value) + parseInt(n2.value);
        document.dados.resultado.value = resultado;
    }
}

function validar(campo){

    let n = campo.value;

    if(n.lenght == 0 || isNaN(parseInt(n))){
        window.alert("Informe o valor correspondente");
        campo.value = "";
        campo.focus();
        return false;
    }

    return true;
}