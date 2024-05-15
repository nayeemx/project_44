<!DOCTYPE html>
<html lang="en">

<?php

include('connection.php');

if (isset($_POST['save'])) {
  $employee_name     = $_POST['employee_name'];
  $employee_email     = $_POST['employee_email'];
  $employee_phone_no     = $_POST['employee_phone_no'];

  // echo $employee_name. '<br>' . $employee_email . '<br>' . $employee_phone_no;
  // die;


  $sql = "insert into employee_info(employee_name, employee_email, employee_phone_no) values ('$employee_name', '$employee_email', '$employee_phone_no')";

  // echo $sql; die;

  $result = $conn->query($sql);

  if ($result == 1) {
    echo "Successfully Inserted!";
    // header("Location: employee_list_view.php");
  }
}
?>

<head>
  <?php include('header_resources.php');   ?>
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

              <form class="form-horizontal style-form" action="employee_info.php" method="post">
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Employee Name</label>
                  <div class="col-sm-6">
                    <input type="text" name="employee_name" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Email</label>
                  <div class="col-sm-6">
                    <input type="text" placeholder="Your Email" name="employee_email" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Phone Number</label>
                  <div class="col-sm-6">
                    <input type="text" placeholder="Your Phone Number" name="employee_phone_no" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-8" align="center">
                    <input type="submit" name="save" class="btn btn-info">
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

  <?php include('footer_resources.php');  ?>

</body>

</html>