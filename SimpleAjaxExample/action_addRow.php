<?php
include "SetGameController.php";
session_start();


class action_addRow {

    public function addRow () {
        
        if (!isset($_SESSION['controller'])) {
            $_SESSION['controller'] = new SetGameController();
        }
        $current = $_SESSION['controller'];       
        $current->addRow();        
    }

}

?>