<?php
include "SetGameController.php";
session_start();


class action_shuffle {

    public function shuffle() {
        
        if (!isset($_SESSION['controller'])) {
            $_SESSION['controller'] = new SetGameController();
        }
        $current = $_SESSION['controller'];       
        $current->shuffle();        
    }

}

?>