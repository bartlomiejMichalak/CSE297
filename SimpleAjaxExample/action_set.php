<?php

include "SetGameController.php";
session_start();

class action_set {

    public function set() {
        if (!isset($_SESSION['controller'])) {
            
            $_SESSION['controller'] = new SetGameController();
            
        }
        $current = $_SESSION['controller'];
        $array = $_GET['array'];
        
        $array[0] = intval($array[0]);
        $array[1] = intval($array[1]);
        $array[2] = intval($array[2]);
        
        $current->submitSet($array);
    }
}
?>
