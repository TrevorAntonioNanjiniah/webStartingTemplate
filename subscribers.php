<?php
  require_once('logics/dbconnection.php');
  $sqlQuery = mysqli_query($conn, "SELECT * FROM subscribers");

?>
<!DOCTYPE html>
<html>
    <?php
     require_once('includes/headers.php');
    ?>
    <body>
        <div class="header">
            <?php
            require_once('includes/navbar.php');
            ?>
        </div>
        <div class="sidebar">
            <?php
            require_once('includes/sidebar.php');
            ?>
        </div>
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 pt-3">
                        <div class="card-header bg-dark text-white text-center">
                            <span>Subscribers</span>
                        </div>
                        <div class="card-body">
                        <table class="table table-striped table-hover table-responsive" style="font-size:12px;">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Email</th>
                                    <th>Subscribed on</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php while($fetchrecords = mysqli_fetch_array($sqlQuery))  {   ?>
                                      <tr>
									  <td><?php echo $fetchrecords['no']?></td>
									  <td><?php echo $fetchrecords['email']?></td>
									  <td><?php echo $fetchrecords['created_at']?></td>
									  <td>
									  <a href="edit-enrollment.php?id=<?php echo $fetchrecords['no']?>" class="btn btn-primary btn-small">
											<i class="fa fa-edit"></i>
									  </a>
									  <a href="edit-enrollment.php?id=<?php echo $fetchrecords['no']?>" class="btn btn-info btn-small">
											<i class="fa fa-eye"></i>
									  </a>
									  <a href="edit-enrollment.phpid=<?php echo $fetchrecords['no']?>" class="btn btn-danger btn-small">
											<i class="fa fa-trash"></i>
										</a>
									  

							           </td>					          

										</tr>
							  <?php }?>	
                            </tbody> 

                        </table>
                    </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once('includes/scripts.php')?>
    </body>
</html>