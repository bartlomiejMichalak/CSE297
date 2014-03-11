<?php
include 'Task.php';

class TaskManagerDAO {
    private $_mysqli;
    public $tasks = Array();
    
    function __construct() {        
    }

    function __destruct() {
    }

    private function getDBConnection() {
        if (!isset($_mysqli)) {
            $_mysqli = new mysqli("localhost", "root", "", "taskmanager");
            if ($_mysqli->errno) {
                printf("Unable to connect: %s", $_mysqli->error);
                exit();
            }
        }
        return $_mysqli;
    }

    public function getTaskList() {
        $lst = array();
        $con = $this->getDBConnection();
        $result = $con->query("SELECT * FROM task");
        $i = 0;
        while ($row = $result->fetch_row()) {
            $newTask = new Task($row[1], $row[2], $row[3]);
            array_push($this->tasks,$newTask);
            $lst[$i++] = $newTask;
        }
        return $lst;
    }
    
    

public function addTask($description, $type, $datedue){
    
    $con = $this->getDBConnection();
    $sql = "INSERT INTO task(description,type,duedate) VALUES('".$description."','".$type."','".$datedue."'";
    
    $sql = $sql = $sql.")";
    $con->query($sql);
    
}

public function deleteTask($id){
    $con = $this->getDBConnection();
    $task = $this->tasks[$id];
    $sql = "DELETE FROM task WHERE description = '".$task->description."' AND type = '".$task->type."' AND duedate = '".$task->duedate."';";
    $con->query($sql);
}

 
}

?>
