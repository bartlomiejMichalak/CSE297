<?php

class Request {
    private $request = array();
    
    public function __construct() {
        if (!empty($_POST)) $this->request = $_POST;
        if (!empty($_GET)) $this->request = $_GET;
    }
    
    public function get($name) {
        if (array_key_exists($name, $this->request)) return $this->request[$name];
        return '';
    }
    
    public function set($name, $value) {
        $this->request[$name] = $value;
    }
    
    public function getCommand() {
        if (isset($this->request['add']))
            return $this->request['add'];
        else if(isset($this->request['delete']))
            return $this->request['delete'];
    else
        return 'DisplayList';
}
}

?>
