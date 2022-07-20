<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "web2";

$conn = mysqli_connect($server,$username,$password,$database);
if($conn)
{
    echo "connection";
}
else{
    echo "Disconnection";
}

if( isset($_POST['updatebutton'])  )
{
    // 1.Fetch Form Data
        $firstName = $_POST ['firstname'];
       $lastName = $_POST ['lastname'];
       $email = $_POST ['email'];
       $phone = $_POST ['phonenumber'];
    // 2.Submit Form Data
       $insertData = mysqli_query($conn, "INSERT INTO contactus(firstname,lastname,email,phonenumber)
       VALUES('$firstName','$lastName','$email','$phone')");
       if($insertData)
       {
           echo "Data Submitted Successfully";
       }
       else{
           echo "Error Occured";
       }
}
?>









<!DOCTYPE html>
<html>
    <head>
    <title>Bootstrap Admin Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Creating admin dashboard">
	<meta name="keywords" content="HTML,CSS,Zalego,Technology,Zalego institute,JavaScript">
	<meta name="author" content="Your name">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
    <?php require_once ('includes/navbar.php') ?>
</nav>


	<!-- All our code. write here   -->

<div class="sidebar">
<?php require_once('includes/sidebar.php') ?>
</div>			
<div class="Main-content">
 <div class="container-fluid">
	  <div class="row">
	   <div class="col-lg-12">
       <div class="card">
	     <div class="card-header bg-dark text-white text-center">
                            <span> add Students </span>
                        </div>
                        <div class="card-body">
                            <form action="add-enrollment.php" method="POST" class="container">
                                    <div class="row">
                                        <div class="pb-3 col-lg-12">
                                            <label for="firstname" class="form-label">First Name:</label>
                                            <input type="text" name="firstname"  class="" placeholder="Enter your first name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="pb-3 col-lg-12">
                                            <label for="lastname" class="form-label">Last Name:</label>
                                            <input type="text" name="lastname"  class="" placeholder="Enter your last name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="pb-3 col-lg-12">
                                            <label for="phonenumber" class="form-label">Phone Number:</label>
                                            <input type="text" name="phonenumber"  class="" placeholder="+2547...">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="pb-3 col-lg-12">
                                            <label for="email" class="form-label">Email Address:</label>
                                            <input type="text" name="email"  class="" placeholder="Please enter your email address">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-lg-12">
                                            <button style="margin-top:10px" type="submit" name="updatebutton" class="btn btn-primary">Add</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                     </div>
                    </div>
                </div>
            </div>
		</div>
	</div>



	
    <script src="jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>