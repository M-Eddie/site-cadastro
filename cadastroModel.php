<?php
require_once("connect.php");
class cadastroModel extends connect{
    public function selectEmail($email){
        $query_select = "SELECT email FROM usuarios WHERE email = '$email'";
        $select = mysqli_query($this->connect, $query_select);
        return $select;
    }

    public function insertUsuario($nome,$sobrenome,$dataNasc,$dataCria,$email,$senha,){
        $query = "INSERT INTO usuarios (nome,sobrenome,dataNasc,dataCria,email,senha) VALUES ('$nome','$sobrenome','$dataNasc','$dataCria','$email','$senha')";
        $insert = mysqli_query($this->connect, $query);
        return $insert;
    }
}