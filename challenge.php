<?php
session_start();
if(!isset($_SESSION['teacher']) || !$_SESSION['teacher']){
    // Redirect them to the login page
    header("Location: login.php");  
}
?>
<!DOCTYPE html>
<html>
<body>
<?php
$hintErr = "";
$hint = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["hint"])) {
    $hintErr = "Hints are required";
  } else {
    $hint = test_input($_POST["hint"]);
    //
    if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
      $usernameErr = "Only letters and numbers allowed";
    }
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
  <form method="post" action="uploadchallenge.php" enctype="multipart/form-data">
    <p>
              Please Enter the Challenge Details.
            </p>
            <p>
              Hints:
            </p>
            <input type="text" name="hints"/>
            <p>
              Please Upload text file</p>
            <p>
              File:
            </p>
            <input type="hidden" name="size" value="350000">
            <input type="file" name="filesToUpload" id="filesToUpload"> 
            <input TYPE="submit" name="submit" title="Add data to the Database" value="Add Challenge"/>
          </form></body>
</html>