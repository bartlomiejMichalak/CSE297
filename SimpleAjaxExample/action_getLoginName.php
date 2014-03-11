<?php

include "SetGameController.php";
session_start();

class action_getLoginName {

    public function getLoginName() {


        if (!isset($_SESSION['controller'])) {
            $_SESSION['controller'] = new SetGameController();
        }
        $current = $_SESSION['controller'];
        header('Content-type: text/json');
        return json_encode(array('loginname' => $current->getLoginName()));
    }

}

?>