<?php

include_once "model/department.php";
class department_controller extends department {
    public function get_dept(){
        return $this->get_department();
    }
}

?>
