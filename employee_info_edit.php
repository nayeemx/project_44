<!DOCTYPE html>
<html lang="en">

<?php

	include('connection.php');
	
	if(isset($_GET['employee_id']))
	{
		$employee_id = $_GET['employee_id'];
		$sql = "select * from employee_info where employee_id = '$employee_id'";
		$result = $conn->query($sql);
		if($row = mysqli_fetch_array($result))
		{
			$employee_name 		= $row['employee_name'];
			$employee_email 	= $row['employee_email'];
			$employee_phone_no 	= $row['employee_phone_no'];
			$employee_address 	= $row['employee_address'];
			$employee_id 		= $row['employee_id'];
		}
	}
	
	if(isset($_POST['update']))
	{
		$employee_name 		= $_POST['employee_name'];
		$employee_email 	= $_POST['employee_email'];
		$employee_phone_no 	= $_POST['employee_phone_no'];
		$employee_address 	= $_POST['employee_address'];
		$employee_id 		= $_POST['employee_id'];
		
		$sql = "update employee_info set employee_name='$employee_name', employee_email='$employee_email', employee_phone_no='$employee_phone_no', employee_address='$employee_address' where employee_id=$employee_id";
		
		$result = $conn->query($sql);
		
		if($result)
		{
			echo "Update Successfully!";
			echo "<meta http-equiv='refresh' content='1;url=employee_list_view.php'>";
		}
	}
?>

<head>
  <?php  include('header_resources.php');   ?>
</head>

<body>
  <section id="container">
  
  	<?php
		
		include('header.php');
		
		include('nav.php');
	
	
	?>
    
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3> Employee Information</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
             
              <form class="form-horizontal style-form" action="employee_info_edit.php" method="post">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Employee Name</label>
                  <div class="col-sm-6">
                    <input type="text" name="employee_name" value="<?php echo $employee_name;  ?>" class="form-control">
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Employee Email</label>
                  <div class="col-sm-6">
                    <input type="text" name="employee_email" value="<?php echo $employee_email;  ?>" class="form-control">
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Employee Phone No</label>
                  <div class="col-sm-6">
                    <input type="text" name="employee_phone_no" value="<?php echo $employee_phone_no;  ?>" class="form-control">
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Employee Address</label>
                  <div class="col-sm-6">
                    <input type="text" name="employee_address" value="<?php echo $employee_address;  ?>" class="form-control">
                  </div>
                </div>
				
				<div class="form-group">
                  <div class="col-sm-8" align="center">
                    <input type="submit" name="update" value="Update" class="btn btn-info">
					
					<input type="hidden" name="employee_id" value="<?php echo $employee_id;  ?>" class="btn btn-info">
                  </div>
                </div>
                
              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
        
          
      
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    
    <!--footer end-->
  </section>
  
  <?php   include('footer_resources.php');  ?>

</body>

</html>
