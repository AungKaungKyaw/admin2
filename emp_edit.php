<?php
include_once "controller/emp_controller.php";

//$emp_controller = new emp_controller();
//$results=$emp_controller->get_employee();
include_once "controller/department_controller.php";

$id=$_GET['id'];
$emp_controller=new emp_controller();
$emp_result=$emp_controller->get_employee_single($id);
session_start();

$dept_control = new department_controller();
$results = $dept_control->get_dept();

if(isset($_POST['submit'])) {
    $error =false;
    if(!empty($_POST['name'])) {

        $name = $_POST['name'];
    } else {
        $name_error = "Please Enter Name";
        $error=true;
    }
    if(!empty($_POST['nrc'])) {

        $nrc = $_POST['nrc'];
    } else {
        $nrc_error = "Please Enter nrc";
        $error=true;
    }
    if(!empty($_POST['position'])) {

        $position = $_POST['position'];
    } else {
        $position_error = "Please Enter position";
        $error=true;
    }
    if(!empty($_POST['dept'])) {

        $dept = $_POST['dept'];
    } else {
        $dept_error = "Please Enter dept";
        $error=true;
    }
    if(!empty($_POST['email'])) {

        $email = $_POST['email'];
    } else {
        $email_error = "Please Enter email";
        $error=true;
    }
    if(!empty($_POST['phone'])) {

        $phone = $_POST['phone'];

    } else {
        $phone_error = "Please Enter phone";
        $error=true;
    }
    if(!empty($_POST['address'])) {

        $address = $_POST['address'];
    } else {
        $address_error = "Please Enter address";
        $error=true;
    }
    if($error==false){

        $emp_controller = new emp_controller();
        $emp_results = $emp_controller->add_employee($name,$nrc,$position,$dept,$email,$phone,$address);
        if($emp_results){
            $_SESSION['message']="Successfully added new employee";
            header('location:emp_index.php');
        }

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
                        <input type="text" name="name" placeholder="Enter name" class="form-control" value="<?php echo $emp_result[0]['name']; ?>">
                        <span class="text-danger"><?php if(isset($name_error)) echo $name_error;?></span>

                    </div>
                    <div class="col-lg-12">
                        <label>Nrc</label>
                        <input type="text" name="nrc" placeholder="Enter Nrc " class="form-control" value="<?php echo $emp_result[0]['nrc']; ?>">
                        <span class="text-danger"><?php if(isset($nrc_error)) echo $nrc_error;  ?></span>

                    </div>
                    <div class="col-lg-12">
                        <label>Position</label>
                        <input type="text" name="position" placeholder="Enter Position" class="form-control" value="<?php echo $emp_result[0]['position']; ?>">
                        <span class="text-danger"><?php if(isset($position_error)) echo $position_error;  ?></span>

                    </div>
                    <div class="col-lg-12">
                        <label>Department</label>
                        <select class="form-control" name="dept">
                            <option selected>Select Department Name</option>
                            <?php

                            foreach($results as $result){
                                if(isset($dept) && $dept == $result['id']){
                                    echo "<option selected value='".$result['id']."'>".$result['name']."</option>";
                                }
                                else{
                                    echo "<option value='".$result['id']."'>".$result['name']."</option>";
                                }

                            }
                            ?>
                        </select>
                        <span class="text-danger"><?php if(isset($dept_error)) echo $dept_error;  ?></span>

                    </div>
                    <div class="col-lg-12">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Enter Email " class="form-control" value="<?php echo $emp_result[0]['email']; ?>">
                        <span class="text-danger"><?php if(isset($email_error)) echo $email_error;  ?></span>

                    </div>
                    <div class="col-lg-12">
                        <label>Phone</label>
                        <input type="text" name="phone" placeholder="Enter Phone " class="form-control" value="<?php echo $emp_result[0]['Phone']; ?>">
                        <span class="text-danger"><?php if(isset($phone_error)) echo $phone_error;  ?></span>

                    </div>
                    <div class="col-lg-12">
                        <label>Address</label>
                        <input type="text" name="address" placeholder="Enter Address" class="form-control" value="<?php echo $emp_result[0]['address']; ?>">
                        <span class="text-danger"><?php if(isset($address_error)) echo $address_error;  ?></span>

                    </div>
                    <div class="col-lg-12">
                        <br>
                        <button type="submit" class="btn btn-primary" name="submit">Update</button>
                    </div>

                </form>
            </div>





        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

<?php include_once "mastery_layout/footer.php"; ?>