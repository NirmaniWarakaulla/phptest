<?php
// var_dump($_REQUEST);
$db_name="student";
$tbl_name="details";
$fname = $_REQUEST["name"];
$lname = $_REQUEST["lname"];
$pwd = $_REQUEST["pwd"]; 
$pwd1 = $_REQUEST["pwd1"];

$query = "Insert into $tbl_name(first_name,last_name,password,confirm_password)values('$fname' , '$lname' , '$pwd' , '$pwd1')";
?>