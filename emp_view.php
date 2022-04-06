<?php
include_once "controller/emp_controller.php";
include_once "controller/department_controller.php";


//
//session_start();
//
//$dept_control = new department_controller();
//$results = $dept_control->get_dept();
$id = $_GET['id'];
$emp_controller = new emp_controller();
$result=$emp_controller->get_employee_single($id);


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
                        <label>Name - <?php echo $result[0]['name']; ?></label>



                    </div>
                    <div class="col-lg-12">
                        <label>Nrc - <?php echo $result[0]['nrc']; ?></label>

                    </div>
                    <div class="col-lg-12">
                        <label>Position - <?php echo $result[0]['position']; ?></label>

                    </div>
                    <div class="col-lg-12">
                        <label>Department - <?php echo $result[0]['dept_name']; ?></label>


                    </div>
                    <div class="col-lg-12">
                        <label>Email - <?php echo $result[0]['email']; ?></label>

                    </div>
                    <div class="col-lg-12">
                        <label>Phone - <?php echo $result[0]['phone']; ?></label>

                    </div>
                    <div class="col-lg-12">
                        <label>Address - <?php echo $result[0]['address']; ?></label>

                    </div>
                    <div class="col-lg-12">
                        <br>
                        <a class="btn btn-primary">Back</a>
                    </div>

                </form>
            </div>





        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

<?php include_once "mastery_layout/footer.php"; ?>