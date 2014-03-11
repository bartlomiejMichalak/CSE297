<?php
include "SetGameController.php";
session_start();


class action_login {
    
    public function Login() {
        if(!isset($_SESSION['controller'])){
            $_SESSION['controller'] = new SetGameController();
        }
        $current = $_SESSION['controller'];
        $name = $_POST['myusername'];
        $current->login($name);
        
        header("Location: index.php");
    }
}