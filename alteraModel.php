<?php
require_once("connect.php");
class alteraModel extends connect
{
    public function alteraDados($idUsuario, $nome, $sobrenome, $dataNasc, $dataAltera, $email, $senha)
    {
        $query = "UPDATE usuarios SET nome = '$nome', sobrenome = '$sobrenome', dataNasc = '$dataNasc', dataAltera = '$dataAltera', email ='$email', senha = '$senha' WHERE idUsuario = '$idUsuario'";
        $altera = mysqli_query($this->connect, $query);
        return $altera;
    }
}