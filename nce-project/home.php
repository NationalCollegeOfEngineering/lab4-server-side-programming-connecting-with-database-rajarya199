<?php
session_start();
// include_once('/nce-project/helper/databse.php');
include('helper/database.php');

error_reporting(0);
if(isset($_SESSION['is_login']) || $_SESSION['is_login'] != 'yes') {
    $un = $_POST['name'];
    $pw = $_POST['password'];
    if($un == 'admin' && $pw == 'admin123') {
        // set session/ cookies
        $_SESSION['is_login'] = 'yes';
    } else {
        $_SESSION['is_login'] = 'no';
        session_destroy();
        header("location: /nce-project/index.php");
    }
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
    ?> <br>
    welcome
    <table>
        <tr>
            <td> s.no</td>
            <td>name</td>
            <td>address</td>
        </tr>
        <?php
                $pdo=connectdatabase();
                $select_query=" SELECT user_id,username,address FROM users";
                $stmt=$pdo->query($select_query);
                $rows=$stmt->fetchAll(PDO::FETCH_ASSOC) ;
                $i=1;
                foreach($rows as $row){
                    ?>


            <tr>
            <td><?php echo $row['user_id'];?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['address'];?></td>
        </tr>
            <?php
                } 
        ?>
       
        
    </table>
    <?php 
    include_once('layout/footer.php');
    if(isset)
    ?>
        <a href="/nce-project/logout.php"> Click to logout</a>
</body>

</html>
