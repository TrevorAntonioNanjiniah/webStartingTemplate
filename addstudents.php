<?php
    $message ="";
    require_once('logics/dbconnection.php');
    $queryuser = mysqli_query($conn, "SELECT * FROM enrollment");

    while($fetchuser =mysqli_fetch_array($queryuser))
    {
        $fullname = $fetchuser['fullname'];
        $phonenumber = $fetchuser['phonenumber'];
        $email = $fetchuser['email'];
        $gender = $fetchuser['gender'];
        $course = $fetchuser['course'];
        
    }

    // update user records
    if(isset($_POST['addnewrecord']))
    {
        //fetch form data
        $name = $_POST['fullname'];
        $forphonenumber = $_POST['phonenumber'];
        $emailaddress = $_POST['email'];
        $forgender = $_POST['gender'];
        $forcourse = $_POST['course'];

        // update records
        $insertquery = mysqli_query($conn, "INSERT INTO enrollment SET fullname='$name', phonenumber='$forphonenumber', email='$emailaddress', gender='$forgender' course='$forgender'");
        if($insertquery)
        {
            $message= "Data Updated";
        }
        else{
            $message= "Error Occured";
        }
    }
?>

<!DOCTYPE html>
<html>
<?php require_once('includes/headers.php') ?>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php') ?>

	<div class="sidebar">
	<?php require_once('includes/sidebar.php') ?>
	</div>
    <div class="main-content">
		<div class="container-fluid">
			<div class="row">
                <div class="col-lg-12">
                    <div class="card">
                            <div class="card-header bg-dark text-center text-white">
                                <h4>Add New Student:</h4>
                                <span><?php echo $message ?></span>
                            </div>
                            <div class="card-body">
                                <form action="addstudents.php" method="POST" >
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <label class="form-label" for="fullname">Full Name:</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Full Name" name="fullname" >
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                                    <label class="form-label" for="phonenumber">Phone Number:</label>
                                                    <input type="tel" class="form-control" placeholder="+2547---" name="phonenumber" >

                                        </div>
                                    </div>
                                    <div class="row">
                                             <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="email">Email Address:</label>
                                                <input type="email" class="form-control" placeholder="Please enter your Email" name="email">
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <label for="gender" class="form-label">What's your Gender?</label> <br>
                                                <select name="gender" class="form-control" placeholder="option" aria-label="Default select example" >
                                                    <option selected></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                             </div>
                                     </div>
                                    <div class="row">
                                            <div class="col-lg-6 mb-3">
                                                <label for="course" class="form-label">What's your preffered course</label><br>
                                                    <select name="course" aria-label="Default select example" class="form-control" >
                                                        <option selected></option>
                                                        <option value="Android App Development"> Android App Development</option>
                                                        <option value="Web Designs & Development">Web Designs & Development</option>
                                                        <option value="Data Analysis">Data Analysis</option>
                                                        <option value="Cyber Security">Cyber Security</option>
                                                    </select>
                                            </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-6 padding-bottom:5px;">
                                            <button type="submit" name="addnewrecord" class="btn btn-outline-primary">Add New Record</button>      
                                        </div>
                                    </div>
                                <form>
                            </div>
                            
                    </div>
                </div>
            </div>
		</div>
	</div>