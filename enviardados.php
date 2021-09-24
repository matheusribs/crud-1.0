<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<?php

// Declaração de variáveis com atribuição ao POST capturados no formualario da pagina cadastro.php
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['uf'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];


$conn = new mysqli("127.0.0.1:3307", "root", "", "bdcrud");

if($conn == TRUE){

   // echo 'Conexão realizada com sucesso';

}else {

  //  echo 'Problema com a conexão com o banco';

}


// Inserção SQL na tabela vendedores no banco
$sql = "INSERT INTO vendedores  (nome, sobrenome, email, cep, rua, bairro, cidade, estado, numero, complemento) VALUES 
('$nome','$sobrenome','$email','$cep','$rua','$bairro','$cidade','$estado','$numero','$complemento')";


// Condição referente a inserção dos dados capturados na tabela vendedores do banco de dados
if ($conn->query($sql) == TRUE){

    echo    '<div class="alert alert-success" role="alert">
               CADASTRO DO VENDEDOR '.strtoupper($nome).', FOI REALIZADO COM SUCESSO!
               <a href="cadastro.php" class="btn btn-dark">CADASTRAR MAIS</a>
            </div>';

}else{

    echo    '<div class="alert alert-danger" role="alert">
                ERRO AO CADASTRAR, <a href="#">TENTE NOVAMENTE</a>
            </div>';

}

?>