<?php
session_start();
error_reporting(0);
if (isset($_SESSION['is_login']) || $_SESSION['is_login'] == 'yes') {
    header("location: /nce-project/home.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php 
    include_once('layout/header.php');
    ?>
    <form action="home.php" method="post">
        username: <input type="text" name="name" id="name">
        <br> <br>
        password: <input type="password" name="password" id="password">
        <br> <br>
        <button> login</button>
        DO not have account?
        <a href="/nce-project/signup.php"> Signup</a>
    </form>
    <?php 
    include_once('layout/footer.php');
    ?>
</body>
</html>