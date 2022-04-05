<?php
include_once "controller/emp_controller.php";

//$emp_controller = new emp_controller();
//$results=$emp_controller->get_employee();
include_once "controller/department_controller.php";

$dept_control = new department_controller();
$results = $dept_control->get_dept();

if(isset($_POST['submit'])) {
    if(!empty($_POST['name'])) {

        $name = $_POST['name'];
    } else {
        $name_error = "Please Enter Name";
    }
    if(!empty($_POST['nrc'])) {

        $nrc = $_POST['nrc'];
    } else {
        $nrc_error = "Please Enter nrc";
    }
    if(!empty($_POST['position'])) {

        $position = $_POST['position'];
    } else {
        $position_error = "Please Enter position";
    }
    if(!empty($_POST['dept'])) {

        $dept = $_POST['dept'];
    } else {
        $dept_error = "Please Enter dept";
    }
    if(!empty($_POST['email'])) {

        $email = $_POST['email'];
    } else {
        $email_error = "Please Enter email";
    }
    if(!empty($_POST['phone'])) {

        $phone = $_POST['phone'];

    } else {
        $phone_error = "Please Enter phone";
    }
    if(!empty($_POST['address'])) {

        $address = $_POST['address'];
    } else {
        $address_error = "Please Enter address";
    }
}

?>

<?php include_once "mastery_layout/header.php"; ?>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="emp_create.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> add new employee</a>
        </div>
        <div class="row">
            <div class="row">
                <div class="col-lg-12">
                    <form method="post">

                        <div class="col-lg-12">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Enter name" class="form-control">
                            <span class="text-danger"><?php if(isset($name_error)) echo $name_error;?></span>

                        </div>
                        <div class="col-lg-12">
                            <label>Nrc</label>
                            <input type="text" name="nrc" placeholder="Enter Nrc " class="form-control">
                            <span class="text-danger"><?php if(isset($nrc_error)) echo $nrc_error;  ?></span>

                        </div>
                        <div class="col-lg-12">
                            <label>Position</label>
                            <input type="text" name="position" placeholder="Enter Position" class="form-control">
                            <span class="text-danger"><?php if(isset($position_error)) echo $position_error;  ?></span>

                        </div>
                        <div class="col-lg-12">
                            <label>Department</label>
                            <select class="form-control">
                                <option selected>Select Department Name</option>
                                <?php

                                foreach($results as $result){
                                    echo "<option value='".$result['id']."'>".$result['name']."</option>";
                                }
                                ?>
                            </select>
                            <span class="text-danger"><?php if(isset($name_error)) echo $name_error;  ?></span>

                        </div>
                        <div class="col-lg-12">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Enter Email " class="form-control">
                            <span class="text-danger"><?php if(isset($email_error)) echo $email_error;  ?></span>

                        </div>
                        <div class="col-lg-12">
                            <label>Phone</label>
                            <input type="text" name="phone" placeholder="Enter Phone " class="form-control">
                            <span class="text-danger"><?php if(isset($phone_error)) echo $phone_error;  ?></span>

                        </div>
                        <div class="col-lg-12">
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Enter Address" class="form-control">
                            <span class="text-danger"><?php if(isset($address_error)) echo $address_error;  ?></span>

                        </div>
                        <div class="col-lg-12">
                            <br>
                            <button type="submit" class="btn btn-primary" name="submit">Add</button>
                        </div>

                    </form>
                </div>





    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

<?php include_once "mastery_layout/footer.php"; ?>