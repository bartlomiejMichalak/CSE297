<?php
include "SetGameController.php";
session_start();


class action_endGame {

    public function endGame() {
        
        if (!isset($_SESSION['controller'])) {
            $_SESSION['controller'] = new SetGameController();
        }
        $current = $_SESSION['controller'];       
        $current->endGame();        
    }

}

?>