function calcular(){

    let n1 = document.dados.PrimeiroNome;
    let n2 = document.dados.Sobrenome;
    let n3 = document.dados.Idade;
    let n4 = document.dados.Estado;
    let n5 = document.dados.Cidade;
    let n6 = document.dados.Endereco;
    let n7 = document.dados.Telefone;
    let n8 = document.dados.Email;
    
    let camposTextuais = [n1, n2, n4, n5, n6, n8];
    let camposNumericos = [n3, n7];
    let errosTextuais = [];
    let errosNumericos = [];

    errosTextuais = camposTextuais.filter(campo => {
        return !validarTexto(campo);
    });
    
    errosNumericos = camposNumericos.filter(campo => {
        return !validarNumero(campo);
    });

    if(errosTextuais.length == 0 && errosNumericos.length == 0){
        window.alert("Campos informados corretamente");
    }
    
}

function validarTexto(campo){

    let n = campo.value;

    if(n.lenght == 0 || !isNaN(n)){
        window.alert("Informe o campo correspondente");
        campo.value = "";
        campo.focus();
        return false;
    }
    return true;
}

function validarNumero(campo){

    let n = campo.value;
    console.log(n.lenght);
    if(n.lenght == 0 || isNaN(parseInt(n))){
        window.alert("Informe o campo correspondente");
        campo.value = "";
        campo.focus();
        return false;
    }
    return true;
}