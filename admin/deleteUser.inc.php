<?php 
require_once __DIR__. "/admin.classes.php";
require_once __DIR__. "/deleteUserclasses.php";
$id = $_GET['id'];
$stmt = new DeleteUser($id);
header("location: index.php?m=1");
return $stmt;

