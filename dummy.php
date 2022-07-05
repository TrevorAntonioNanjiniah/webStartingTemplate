<?php
 require_once('logics/dbconnection.php');

$sqlQuery = mysqli_query($conn, "SELECT * FROM enrollment");

$fetchrecords = mysqli_fetch_array($sqlQuery);
while ($fetchrecords = mysqli_fetch_array($sqlQuery)) {
    # code
    echo $fetchrecords['fullname'] .' '. $fetchrecords['email'] .'<br>';
    }
?>