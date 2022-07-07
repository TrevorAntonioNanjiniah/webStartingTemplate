<?php
    require_once('logics/dbconnection.php');
    $queryuser = mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']."'   ");

    while($fetchuser =mysqli_fetch_array($queryuser))
    {
        $fullname = $fetchuser['fullname'];
        $phonenumber = $fetchuser['phonenumber'];
        $email = $fetchuser['email'];
        $gender = $fetchuser['gender'];
        $course = $fetchuser['course'];
        
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
                                <h4>Edit Student:</h4>
                            </div>
                            <div class="card-body">
                                <form action="enroll.php" method="POST" >
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <label class="form-label" for="fullname">Full Name:</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Full Name" name="fullname" value ="<?php echo $fullname ?>" >
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                                    <label class="form-label" for="phonenumber">Phone Number:</label>
                                                    <input type="tel" class="form-control" placeholder="+2547---" name="phonenumber" value= "<?php echo $phonenumber ?>">

                                        </div>
                                    </div>
                                    <div class="row">
                                             <div class="col-lg-6 mb-3">
                                                <label class="form-label" for="email">Email Address:</label>
                                                <input type="email" class="form-control" placeholder="Please enter your Email" name="email" value= "<?php echo $email?>">
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <label for="gender" class="form-label">What's your Gender?</label> <br>
                                                <select name="gender" class="form-control" placeholder="option" aria-label="Default select example" >
                                                    <option selected><?php echo $gender ?></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                             </div>
                                     </div>
                                    <div class="row">
                                            <div class="col-lg-6 mb-3">
                                                <label for="course" class="form-label">What's your preffered course</label><br>
                                                    <select name="course" aria-label="Default select example" class="form-control" >
                                                        <option selected><?php echo $course ?></option>
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
                                            <button type="submit" name="SubmitButton" class="btn btn-outline-primary">Update Record</button>
                                                
                                        </div>
                                           
                                     </div>
                                <form>
                            </div>
                            
                    </div>
                </div>
            </div>
		</div>
	</div>
	
	<?php require_once('includes/scripts.php') ?>

</body>
</html>