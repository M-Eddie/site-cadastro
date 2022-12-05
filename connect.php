<?php
class connect
{
    protected $connect;
    public function __construct()
    {
        $this->connect = mysqli_connect('localhost:3306', 'root', '', 'estagio');
    }
}