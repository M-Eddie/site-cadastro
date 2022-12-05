<?php
require_once("deletarModel.php");
$idUsuario = $_REQUEST['id'];
$model = new deletarModel;
$delete = $model->deletarId($idUsuario);
if ($delete) {
    echo "<script language='javascript' type='text/javascript'>
    alert('Usuário deletado com sucesso!'); window.location.href='listaCadastro.php';
    </script>";
}