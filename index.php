<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script><link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.js"></script>

<style type="text/css">

#divPrincipal{
    margin-left: 5%;
    margin-right: 5%;
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

 // impressão de conteúdo
 $pagina = '<html>
    
        <head>
            <title>Consulta Vendedores</title>
        </head>


        <body id="body">
        <div align="center" id="divPrincipal">
            <h4 style="margin-bottom: 10px;">Consulta Vendedores</h4>
            <div align="right" style="margin-bottom: 10px;">
                <a class="btn btn-dark" href="cadastro.php">CADASTRAR VENDEDORES</a>
            </div>
            <table id="tabelaConsulta" class="table table-dark table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>CEP</th>
                <th style="width: 450px;">Rua</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Número</th>
                <th>Complemento</th> 
            </tr>
            </thead>
            <tfooter>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>CEP</th>
                <th style="width: 450px;">Rua</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Número</th>
                <th>Complemento</th> 
            </tr>
            </tfooter>

            </table>
        </div>
        </body>
    
    </html>';

    echo $pagina;

?>

<script type="text/javascript">

$(document).ready(function() {

  $('#tabelaConsulta').DataTable( {                  
      "processing": true,
      //"dateFormat": "DD/MM/YYYY"
      "serverSide": true,
      //"bDestroy": true,
      "filter": true, // Última atulização para desativar o campo de busca no datatables.
      "ajax": "retornoDados.php",
      "language": {
      "sProcessing":    "Procesando...",
      "sLengthMenu":    "Mostrar _MENU_ registros",
      "sZeroRecords":   "Nenhum resultado encontrado",
      "sEmptyTable":    "Nenhum dado disponível nesta tabela",
      "sInfo":          "Mostrando registros de _START_ a _END_ de um total de _TOTAL_ registros",
      "sInfoEmpty":     "Mostrando registros de 0 a 0 de um total de 0 registros",
      "sInfoFiltered":  "(filtrado de um total de _MAX_ registros)",
      "sInfoPostFix":   "",
      "sSearch":        "Buscar:",
      "sUrl":           "",
      "sInfoThousands":  ",",
      "sLoadingRecords": "Carregando...",
      "oPaginate": {
          "sFirst":    "Primeiro",
          "sLast":    "Último",
          "sNext":    "Próximo",
          "sPrevious": "Anterior"
      },
      "oAria": {
          "sSortAscending":  ": Ative para classificar a Coluna em ordem crescente",
          "sSortDescending": ": Ative classifica a Coluna em ordem decrescente"
      }                                        
    }
  });                                    
});     


</script>