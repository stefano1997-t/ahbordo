<?php

   include_once("conexao.php");

   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $cpf = $_POST['cpf'];
   $idade = $_POST['idade'];
   $senha = $_POST['senha'];
   $ddd = $_POST['ddd'];
   $telefone = $_POST['telefone'];
   $cep = $_POST['cep'];
   $confsenha = $_POST['confsenha'];
   $rua = $_POST['rua'];
   $bairro = $_POST['bairro'];
   $cidade = $_POST['cidade'];
   $numero = $_POST['numero'];
   $complemento = $_POST['complemento'];

   $sql = " INSERT INTO usuario (nome,email,cpf,idade,senha,ddd,telefone,cep,confsenha,rua,bairro,cidade,numero,complemento) VALUES ('$nome','$email','$cpf','$idade','$senha','$ddd','$telefone','$cep','$confsenha','$rua','$bairro','$cidade','$numero','$complemento')";

   $salvar = mysqli_query($conexao,$sql);


   mysqli_close($conexao);

?>