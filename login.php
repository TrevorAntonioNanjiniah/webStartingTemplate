<?php
session_start();

require_once('connection.php');
if(isset($_POST['login']) )
{

    $username= $_POST['username'];
    $password= $_POST['password'];
    $newPass= md5($password);

    $sql = mysqli_query($conn, "SELECT * FROM account WHERE username='$username' and password= '$newPass'");
    $fetch= mysqli_fetch_array($sql);

    if($fetch > 0 )
    {
        $-SESSION['login'] = $username;
        
        header('location: index.php');
    }
    else{
        echo "error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
