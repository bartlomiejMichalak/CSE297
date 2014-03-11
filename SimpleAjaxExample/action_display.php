<?php
include "SetGameController.php";
session_start();


class action_display {

    public function display($request) {
        header("Location: setGame.php");
    }

}

?>
