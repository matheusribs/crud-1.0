<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>

<style type="text/css">

#divPrincipal{

    margin-left: 30%;
    margin-right: 30%;
    margin-top: 1%;
    margin-bottom: 1%; 
    border-radius: 50px;

}

#body{

    background-color: #ffffff;

}

.form-control{

    margin-bottom: 18px;

}


</style>


<?php


 // impressão de conteúdo HTML dentro de variável
 $pagina = '<html>
    
        <head>
        </head>


        <body id="body">
        <div align="center" id="divPrincipal">
            <h4 style="margin-bottom: 20px;">Cadastro de Vendedores</h4>
            <form class="form-control" action="enviardados.php" method="POST">

                <input class="form-control" type="text" placeholder="NOME*"></input>
                <input class="form-control" type="text" placeholder="SOBRENOME*"></input>
                <input type="text" class="form-control" placeholder="EMAIL*"></input>
                <input class="form-control" type="text" name="cep" id="cep" placeholder="CEP*"></input>
                <input type="text" class="form-control" name="rua" id="rua" placeholder="RUA*"></input>                
                <input class="form-control" type="text" name="bairro" id="bairro" placeholder="BAIRRO*"></input>
                <input type="text" class="form-control" name="cidade" id="cidade" placeholder="CIDADE*"></input>
                <input type="text" class="form-control" name="uf" id="uf" placeholder="ESTADO*"></input>
                <input type="text" class="form-control" placeholder="NÚMERO*"></input>
                <input type="text" class="form-control" placeholder="COMPLEMENTO*"></input>
                <div class="d-grid gap-2">
                    <button class="btn btn-dark" type="submit">CADASTRAR</button>
                </div>
                
            </form>
        </div>
        </body>
    
    
    </html>';


    echo $pagina;


?>

<script type="text/javascript">

$(document).ready(function() {

function limpa_formulário_cep() {
    // Limpa valores do formulário de cep.
    $("#rua").val("");
    $("#bairro").val("");
    $("#cidade").val("");
    $("#uf").val("");
    $("#ibge").val("");
}

//Quando o campo cep perde o foco.
$("#cep").blur(function() {

    //Nova variável "cep" somente com dígitos.
    var cep = $(this).val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            $("#rua").val("...");
            $("#bairro").val("...");
            $("#cidade").val("...");
            $("#uf").val("...");
            $("#ibge").val("...");

            //Consulta o webservice viacep.com.br/
            $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                if (!("erro" in dados)) {
                    //Atualiza os campos com os valores da consulta.
                    $("#rua").val(dados.logradouro);
                    $("#bairro").val(dados.bairro);
                    $("#cidade").val(dados.localidade);
                    $("#uf").val(dados.uf);
                    $("#ibge").val(dados.ibge);
                } //end if.
                else {
                    //CEP pesquisado não foi encontrado.
                    limpa_formulário_cep();
                    alert("CEP não encontrado.");
                }
            });
        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
});
});


</script>