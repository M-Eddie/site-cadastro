<?php
// CONEXÃO AO MODEL
require_once("cadastroModel.php");
$model = new cadastroModel;
date_default_timezone_set("America/Sao_Paulo");


// coleta de informações do formulário
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$dataNasc = $_POST['dataNasc'];
// Transforma o e-mail em string
$email = strval($_POST['email']);
$senha = $_POST['senha'];
//Coleta a data atual como data de criação do usuário
$dataCria = date("Y-m-d H:i:s");

// Seleção do e-mail na tabela usuarios
$emailarray = $model->selectEmail($email);

// Comparação de valores
if ($emailarray == $email) {
  // Aviso de e-mail já cadastrado
  echo "<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        paginaCadastro.html';</script>";
  die();
  // Caso não exista um e-mail idêntico já cadastrado, o programa segue:
} else {
  // Inserção dos novos dados na tabela
  $insert = $model->insertUsuario($nome, $sobrenome, $dataNasc, $dataCria, $email, $senha);
  // Verificação de sucesso na operação

  // Sucesso
  if ($insert) {
    echo "<script language='javascript' type='text/javascript'>
        alert('Usuário cadastrado com sucesso!');
        window.location.href='paginaCadastro.html';
        </script>";
    // Falha
  } else {
    echo "<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar esse usuário');
        window.location.href='paginaCadastro.html';
        </script>";
  }
}