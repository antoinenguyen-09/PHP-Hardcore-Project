<?php
session_start();

if(!isset($_SESSION['teacher']) || !isset($_SESSION['student'])){
    // Redirect them to the login page
    header("Location: login.php");  
} 
else{
    $create = "challenge.php";
    $play = "answer.php";
} 
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body> 
    <h1><?php echo "Welcome ".$_SESSION['user']." to our class!";?></h1> ​
    <a href='list.php'><button type="button" class="btn btn-secondary btn-lg btn-block btn-success">List of students</button></a>
    <a href='assign_list.php'><button type="button" class="btn btn-secondary btn-lg btn-block btn-warning">List of assignments</button></a>
    <a id="game" href='#'><button onclick="game()" type="button" class="btn btn-secondary btn-lg btn-block btn-info">Games</button></a>
    <?php if($_SESSION['teacher']) echo '<a href="addstu.php"><button type="button" class="btn btn-secondary btn-lg btn-block btn-danger">Add a student</button></a><a href="giaobai.php"><button type="button" class="btn btn-secondary btn-lg btn-block">Upload assignment</button></a>'; ?>
    <?php if($_SESSION['student']) echo '<a href="view_mess.php"><button type="button" class="btn btn-secondary btn-lg btn-block btn-danger">View message</button></a><a href="submit.php"><button type="button" class="btn btn-secondary btn-lg btn-block">Submit assignment</button></a>'; ?>
    <?php if($_SESSION['student']) echo '<a href="st_update.php"><button type="button" class="btn btn-secondary btn-lg btn-block btn-light">Update your profile</button></a>'; ?>
    <a href='signout.php'><button type="button" class="btn btn-secondary btn-lg btn-block btn-dark">Sign out</button></a>
    <script> 
    function game() {
        var page = "<?php if($_SESSION['teacher']) echo $create; else if($_SESSION['student']) echo $play; else echo '#'; ?>";
        document.querySelector("#game").href = page;    
    } 
    </script>
</body>
</html>
