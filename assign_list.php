<?php
session_start();
if(!isset($_SESSION['teacher']) || !isset($_SESSION['student'])){
    // Redirect them to the login page
    header("Location: login.php");  
} 
$fileList = glob('baitap/*');
foreach($fileList as $filename){
    if(is_file($filename)){
	$target = basename("$filename",".pdf").PHP_EOL;
	$mypath="/var/www/website/baitap/$target";
	mkdir($mypath, 0777, true);
        echo $target . '<a href="' . $filename . '"> Download </a>' . '<a href=submit.php> Nop bai </a>' . '<a href=view_submitted.php> Bai da nop </a>', '<br>';
    }   
}
?>