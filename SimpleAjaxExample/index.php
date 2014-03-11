<?php
include 'Request.php';

$request = new Request();
$class = 'action_' . $request->getCommand();
require_once $class . '.php';
$action = new $class;
$cmd = $request->getCommand();
$action->$cmd($request);
?>