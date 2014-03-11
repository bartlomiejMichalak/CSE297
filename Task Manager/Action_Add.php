<?php

session_start();

include 'Action.php';
include 'TaskManagerDAO.php';

class Action_Add implements Action {

    public function execute($request) {
        $dao = new TaskManagerDAO();
        $dao->addTask($request->get('desc'), $request->get('type'),$request->get('duedate'));
        $tasks = $dao->getTaskList();
        $_SESSION['tasks'] = $tasks;
        header("Location: tasklist.php");
    }
}

?>
