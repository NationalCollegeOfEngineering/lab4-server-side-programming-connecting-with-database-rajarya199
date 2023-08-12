<?php
require_once "helper/database.php";
$abc=connectdatabase();
if(isset($_POST['signup']) && isset($_POST['un'])){
    $insert_query=" INSERT INTO users  (username,password,address) VALUES(:un,:pw,:addr)";
    $stmt=$abc->prepare($insert_query);
    $stmt->execute(
        array(
            ':un'=>$_POST['un'],
            ':pw'=>$_POST['pwd'],
            ':addr'=>$_POST['addresss']
        )
        );
        echo 'signup successfu <a href="/nce-project">Login</a>';
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
    <form action="" method="post">
        Username: <input type="text" name="un" id="un">
        <br><br>
        Password: <input type="password" name="pwd" id="pwd">
        <br><br>
        Address: <input type="text" name="addresss" id="address">
        <br><br>
        <input type="submit" value="signup" name="signup">
        <?php include_once('layout/footer.php')
        ?>
    </form> 
</body>
</html>