<?php
include_once "model/employee.php";
class emp_controller extends employee {

    public function get_employee(){
        return $this->get_emp_info();
    }
}

?>
