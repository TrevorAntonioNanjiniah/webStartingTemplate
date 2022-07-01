<?php
$msg='';
require_once('processRegister.php')

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
    <!-- <div class="container">
        <div class="card bg-danger text-white text-center">
            <div class="card-header">
                <span>Zalego| Admin Register</span>
            </div>
        </div>

        <div class="col-lg-6 offset-lg-3">
            <span></span>
            <img src="zalego-logo.jfif" width="100" height="100" alt="logo" class="mx-auto d-block rounded-circle">
                        <span><?php echo $msg ?></span>
        </div> -->
             <form action="register.php" method="post" class="form-group" autocomplete="of" height="100vh">
                        <div class="justify-content-center align-items-center">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-group">Username:</label>
                                        <input type="text" class="form-control" name="username" place-holder="Enter your username"></input>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-group">Email:</label>
                                        <input type="email" class="form-control" name="email" place-holder="Enter your Email"></input>
                                    </div>
                                 </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-group">Password:</label>
                                        <input type="password" class="form-control" name="password" place-holder="Enter your password"></input>
                                    </div>
                                </div>
                            </div>
                        </div>
             </form>
        </div>

    </div>
</body>
</html>