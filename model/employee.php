<?php
include_once "include/db.php";
class employee{
    public $pdo = null;
    public function get_emp_info(){
        $this->pdo = Database::connect();
        if($this->pdo!=null){
            echo "success connection";
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            $sql = "select * from employee";
            $sql = "SELECT employee. *,department.name as dept_name,department.id as dept_id FROM
                    employee inner join department
                    on employee.dept=department.id";
            $statement = $this->pdo->prepare($sql);
            $statement -> execute();
            $results = $statement -> fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
    }
}

?>
