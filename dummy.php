<?php
$server= "localhost";
$username= "root";
$password= "";
$database= "web2";

$conn = mysqli_connect($server,$username,$password,$database);
$sqlQuery = mysqli_query($conn, "SELECT * FROM enrollment");

$fetchrecords = mysqli_fetch_array($sqlQuery);
while ($fetchrecords = mysqli_fetch_array($sqlQuery)) {
    # code
    echo $fetchrecords['fullname'] .' '. $fetchrecords['email'] .'<br>';
    }
?>