<?php

session_start();

include 'Action.php';
include 'TaskManagerDAO.php';

class Action_Delete implements Action{
    
    public function execute($request){
        $dao = new TaskManagerDAO();
        foreach($_GET['check'] as $id){
            $dao->deleteTask($id);
        }
        
        
        $tasks = $dao->getTaskList();
        $_SESSION['tasks'] = $tasks;
        header("Location: tasklist.php");
    }
}
?>
