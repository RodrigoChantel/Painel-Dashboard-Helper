<?php
include_once('../Controller/userController.php');

if($_POST['page'] == "login"){
    $login = new userController;
    $login->login($_POST['username'], $_POST['password']);
    header("Location: http://localhost/helper/controller/userController.php");
}