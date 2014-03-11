<?php

class Task {
    public $description;
    public $type;
    public $duedate;

    function __construct($description, $type, $duedate) {        
        $this->description = $description;
        $this->type = $type;
        $this->duedate = $duedate;
    }
    
}

?>
