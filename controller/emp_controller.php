<?php
include_once "model/employee.php";
class emp_controller extends employee {

    public function get_employee(){
        return $this->get_emp_info();
    }
    public function add_employee($name,$nrc,$position,$dept,$email,$phone,$address){
        return $this->add_emp($name,$nrc,$position,$dept,$email,$phone,$address);
    }
    public function get_employee_single($id){
        return $this->get_emp_info_single($id);
    }
}

?>
