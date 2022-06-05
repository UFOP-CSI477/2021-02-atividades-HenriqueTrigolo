function validar(){
    let nomeProduto = document.formProdutos.nome;
    let UMProduto = document.formProdutos.unidadeMedida;
    
    if(validarCampo(nomeProduto) && validarCampo(UMProduto)){
        window.alert("Campos informados corretamente");
    }
}

function validarCampo(campo){

    let n = campo.value;
    
    if(n.lenght == 0 || !n){
        window.alert("Informe o campo correspondente");
        campo.value = "";
        campo.focus();
        return false;
    }
    return true;
}