function Pessoa(nome, sobrenome, email, estado, cidade){
    this.nome = nome;
    this.sobrenome = sobrenome;
    this.email = email;
    this.estado = estado;
    this.cidade = cidade;
}

function carregaDadosDoForm(){
    const nome = document.DadosForm.NomeUsuario.value;
    const sobrenome = document.DadosForm.SobrenomeUsuario.value;
    const email = document.DadosForm.EmailUsuario.value;
    const estado = document.DadosForm.EstadoUsuario.value;
    const cidade = document.DadosForm.CidadeUsuario.value;

    const pessoa = new Pessoa(nome, sobrenome, email, estado, cidade);
    window.alert(`Dados carregados com sucesso ${nome}`);

    document.getElementById("nome").value = pessoa.nome + " " + pessoa.sobrenome;
    document.getElementById("email").value = pessoa.email;
    document.getElementById("estado").value = pessoa.estado;
    document.getElementById("cidade").value = pessoa.cidade;
}

function processo(){
    var data = new Date;
    var hora = data.getHours();
    var min = data.getMinutes();
    var seg = data.getSeconds();
    document.getElementById("Horario").value = hora + "h" + min + ":" + seg; 
}

function iniciar(){
    setInterval(processo); 
}