<?php
require_once("alteraModel.php");
$model = new alteraModel;
date_default_timezone_set("America/Sao_Paulo");
$idUsuario = $_POST['idUsuario'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$dataNasc = $_POST['dataNasc'];
// Transforma o e-mail em string
$email = strval($_POST['email']);
$senha = $_POST['senha'];
$dataAltera = date("Y-m-d H:i:s");

$altera = $model->alteraDados($idUsuario, $nome, $sobrenome, $dataNasc, $dataAltera, $email, $senha);
if ($altera) {
  echo "<script language='javascript' type='text/javascript'>
        alert('Usuário alterado com sucesso!') window.location.href='listaCadastro.php';;
        </script>";
  // Falha
} else {
  echo "<script language='javascript' type='text/javascript'>
        alert('Não foi possível alterar esse usuário');
        window.location.href='listaCadastro.php';
        </script>";
}