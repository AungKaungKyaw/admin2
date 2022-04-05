<?php
include_once "controller/emp_controller.php";
$emp_controller = new emp_controller();
$results=$emp_controller->get_employee();
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
            <div class="col-lg-12">
                <label></label>
                <input type="text" name="name" placeholder="Enter name" class="form-control">

            </div>
            <div class="col-lg-12">
                <label></label>
                <input type="text" name="nrc" placeholder="Enter Nrc " class="form-control">

            </div>
            <div class="col-lg-12">
                <label></label>
                <input type="text" name="position" placeholder="Enter Position" class="form-control">

            </div>
            <div class="col-lg-12">
                <label></label>
                <select class="form-control">
                    <option></option>
                </select>

            </div>
            <div class="col-lg-12">
                <label></label>
                <input type="text" name="email" placeholder="Enter Email " class="form-control">

            </div>
            <div class="col-lg-12">
                <label></label>
                <input type="text" name="phone" placeholder="Enter Phone " class="form-control">

            </div>
            <div class="col-lg-12">
                <label></label>
                <input type="text" name="address" placeholder="Enter Address" class="form-control">

            </div>
            <div class="col-lg-12">
                <br>
                <button type="submit" class="btn btn btn-primary">Add</button>

            </div>
        </div>


    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

<?php include_once "mastery_layout/footer.php"; ?>