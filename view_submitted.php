<?php
session_start();
if(!isset($_SESSION['teacher']) || !$_SESSION['teacher']){
    // Redirect them to the login page
    header("Location: login.php");  
}
include 'assign_list.php';
$fileList = glob("$mypath/*");
foreach($fileList as $filename){
    if(is_file($filename)){
	$target = basename("$filename").PHP_EOL;
        echo $target . '<a href="' . $filename . '"> Download </a>','<br>';
    }   
}
?>