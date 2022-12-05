<?php
require_once("connect.php");
class deletarModel extends connect
{
    public function deletarId($idUsuario)
    {
        $query_delete = "DELETE FROM usuarios WHERE idUsuario = '$idUsuario'";
        $delete = mysqli_query($this->connect, $query_delete);
        return $delete;
    }
}