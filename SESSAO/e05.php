<?php 
require_once("e03.php");
session_regenerate_id();
echo session_id();
var_dump($_SESSION);
 ?>