// EXECUTAR MASCARAS
function mascara(o,f) //define o objeto e chama a função
{
    objeto=o 
    funcao=f 
    setTimeout("executaMascara()",1)
}

function executaMascara() {
    objeto.value=funcao(objeto.value)
}

//CEP
function cep(variavel){
    variavel=variavel.replace(/\D/g,"") //remove caracteres não numericas
    variavel=variavel.replace(/(\d{5})(\d)/,"$1-$2") //adiciona o hifem entre o quinto e o sexto digito
    return variavel
}


//NOME
function nome(variavel) {
    variavel = variavel.replace(/[^a-zA-ZÀ-ÿ\s]/g, "");
    variavel = variavel.replace(/\s+/g, " ").trim();
    return variavel;
}
//CNPJ
function cnpjEmpre(variavel) {
    variavel = variavel.replace(/\D/g, ''); // Remove caracteres não numéricos
    variavel = variavel.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/,"$1.$2.$3/$4-$5");
    return variavel
  }