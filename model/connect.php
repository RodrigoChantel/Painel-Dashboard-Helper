<?php

class connect{
    public function connection(){
        $host = "127.0.0.1";
        $user = "root";
        $password = "";
        $db = "helper";

        $connect = mysqli_connect ($host, $user, $password, $db) or die ('Falha na conexão com o Banco de Dados.');

        return $connect;
    }
}


