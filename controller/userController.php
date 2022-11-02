<?php
include_once('../Model/connect.php');
session_start();



$connection = new connect;
$connection->connection();

class userController{
    public function login($userName, $password){
        if($_POST['username'] == null or $_POST['password'] == null){
            echo "<script>window.alert('Você precisa preencher todos os campos!'); location='http://localhost/helper/?page=login';</script>";
            exit();
        }else{
            
            $connection = new connect;
            $connection = $connection->connection();
            $userNameString = mysqli_real_escape_string($connection, $userName);
            
            $verifyUser = "select * from users where user = '{$userNameString}'";
            $execute = mysqli_query($connection, $verifyUser);
            $numquery = mysqli_num_rows($execute);
            $booValidate = filter_var($numquery, FILTER_VALIDATE_BOOL);

            if($booValidate == true){
                $passwordString = mysqli_real_escape_string($connection, $password);
                $passwordEncrypt = password_hash($passwordString, PASSWORD_DEFAULT); //Trás a senha POST e converte em Hash
                
                //Busca senha hash cadastrada, comparando o nome de usuário.
                $queryPassword = "select * from users where user = '{$userNameString}' ";
                $executeQueryPassword = mysqli_query($connection, $queryPassword);
                $listQuery = mysqli_fetch_assoc($executeQueryPassword);
                $result = $listQuery['password'];

                //Compara senha trazida do POST com senha resgatada do Banco de Dados
                if(password_verify($passwordString, $result)):
                    $_SESSION['user'] = $listQuery['user'];
                    $_SESSION['password'] = $listQuery['password'];
                    header("location: http://localhost/helper/views/admin/index.php");
                    //echo "<h1 class'h1Bemvindo'>Bem vindo</h1>" . "<br>" . "<h2 class='h1Bemvindo'>{$listQuery['user']}<h2>"; 
                else:
                    echo "Algo deu errado!";
                    echo "<br><hr>" . "{$passwordEncrypt}" . "<br>Não é Compatível com:<br>" . "{$result}";
                endif;
            }else{
                echo "<script>window.alert('Não detectamos esse usuário em nosso banco de dados! Crie uma conta'); location='http://localhost/helper/?page=login';</script>";
            }
            exit();
        }
    }

}
header('content_Type: text/html')
?>
<header>
    <link href="http://localhost/helper/public/css/style-teste.css" rel="Stylesheet">
</header>