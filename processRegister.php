<?php
     require_once('connection.php');

     if(isset($_POST['signup']))
     {
        //fetch form data
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpass = $_POST['cpasswaord'];

        $passHash=md5();

        //check if username exist in the database
        $sqlUsername= mysqli_query($conn,"SELECT * FROM account 
        WHERE username = '$username'");
        $checkusername=mysqli_num_rows($sqlUsername);
        //check for email
        $sqlEmail= mysqli-query($conn, "SELECT * FROM accont WHERE email = '$email'");
        $checkEmail=mysqli_num_rows($sqlEmail);


        if($checkUsername != 0){
            $msg ="Username already exist";
        }
        elseif($checkEmail != 0){
            $msg ="Email is already in use. Please try a different email address";
        }
        //password confirmation
        elseif($password != $cpass)
        {
            $msg ="Passwords do not march";
        }
        //submit data to database table
        else
        {
            //create insert query
            $sql = mysqli_query($conn, "INSERT INTO account(username,email,password)
            VALUES('$username','$email',''$passHash')");

            if($sql)
            {
                $msg= "Data submitted succesfully";
            }
            else
            {
                $msg= "Error";
            }
        }
        
     }
?>