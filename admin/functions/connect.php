<?php 


define('HOST' , 'localhost');
define('USERNAME' , 'root');
define('PASSOWRD' , '');
define('DBNAME' , 'color_project');

$conn = new mysqli(HOST , USERNAME , PASSOWRD , DBNAME);

// for arabic
$conn -> set_charset('uft8');




