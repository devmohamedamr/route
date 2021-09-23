<?php
session_start();

$email = "mohamed@mohamed.com";
$password = "123";
if(isset($_POST['name'])){
    if($email == $_POST['email'] && $password == $_POST['password']){
        $_SESSION['user'] = true;
        header("LOCATION: home.php");
    }else{
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['age'] = $_POST['age'];

        header("LOCATION: login.php");
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <input type="text" name="name" value="<?= $_SESSION['name']; ?>">
        <input type="text" name="email"  value="<?= $_SESSION['email']; ?>">
        <input type="text" name="password"  value="<?= $_SESSION['password']; ?>">
        <input type="text" name="age"  value="<?= $_SESSION['age']; ?>">
        <input type="submit" value="login">
    </form>
</body>
</html>