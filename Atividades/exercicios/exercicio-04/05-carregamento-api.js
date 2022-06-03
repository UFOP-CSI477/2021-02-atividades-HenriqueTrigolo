function limpaSelect(campo){
    while(campo.length > 1){
        campo.remove(1);
    }
}

function preencherSelectEstados(data){

    let estados = document.getElementById("estados");
    let regiaoSelect = document.getElementById("regiao");
    limpaSelect(estados);

    for(let index in data){
        const {id, nome, sigla, regiao} = data[index];
        
        if(regiaoSelect.value == regiao.nome){
            let option = document.createElement("option");
            option.value = id;
            option.innerHTML = `${sigla}-${nome}`;

            estados.appendChild(option);
        }
    }
}

function CarregarEstados(){
    fetch("https://servicodados.ibge.gov.br/api/v1/localidades/estados")
        .then(response => response.json())
        .then(data => preencherSelectEstados(data))
        .catch(error => console.error(error))
}

function preencherSelectCidades(data){

    let cidades = document.getElementById("cidades");
    limpaSelect(cidades);

    

    for(let index in data){
        const {id, nome} = data[index];

        let option = document.createElement("option");
        option.value = id;
        option.innerHTML = nome;

        cidades.appendChild(option);
        
    }
}

function CarregaCidades(){
    const estados = document.getElementById("estados");
    const estado_id = estados.value;

    const cidades = document.getElementById("cidades");
    limpaSelect(cidades);

    if(estado_id == ""){
        return;
    }

    const url_cidades = `https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estado_id}/municipios`;

    fetch(url_cidades)
        .then(response => response.json())
        .then(data => preencherSelectCidades(data))
        .catch(error => console.error(error))
}