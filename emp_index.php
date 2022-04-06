<?php
include_once "controller/emp_controller.php";

session_start();

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

                <?php
                if(isset($_SESSION['message'])){
                    echo "<span class='text-primary'>".$_SESSION['message']."</span>";
                }
                ?>
                <table class="table table-striped">
                    <?php

                    foreach($results as $result){
                        echo "<tr>";
                        echo "<td>".$result['name']."</td>";
                        echo "<td>".$result['nrc']."</td>";
                        echo "<td>".$result['position']."</td>";
                        echo "<td>".$result['dept_name']."</td>";
                        echo "<td>".$result['email']."</td>";
                        echo "<td>".$result['phone']."</td>";
                        echo "<td>".$result['address']."</td>";
                        echo "<td>".
                            "<a class='btn btn-primary'>View</a>".
                            "<a class='btn btn-warning'>View</a>".
                            "<a class='btn btn-danger'>View</a>"
                            ."</td>";
                        echo "</tr>";
                    }

                    ?>
                </table>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->
    </div>
<?php
if(isset($_SESSION['message'])){
    session_destroy();
}
?>
    <!-- End of Main Content -->

<?php include_once "mastery_layout/footer.php"; ?>