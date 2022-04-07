<?php
include_once "include/db.php";
class employee{
    public $pdo = null;
    public function get_emp_info(){
        $this->pdo = Database::connect();
        if($this->pdo!=null){
            echo "success connectionfff";
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            $sql = "select * from employee";
            $sql = "SELECT employee.*, department.name as dept_name FROM employee INNER JOIN department
                    on employee.dept=department.id";
            $statement = $this->pdo->prepare($sql);
            $statement -> execute();
            $results = $statement -> fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
    }
    public function add_emp($name,$nrc,$position,$dept,$email,$phone,$address){
        $this->pdo = Database::connect();
        if($this->pdo!=null){
            echo "success connectionasdf";
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            $sql = "select * from employee";
            $sql = "insert into employee(name,nrc,position,dept,email,phone,address) values(:name,:nrc,:pos,:dept,:email,:phone,:addr)";
            $statement = $this->pdo->prepare($sql);
            $statement->bindParam(":name",$name);
            $statement->bindParam(":nrc",$nrc);
            $statement->bindParam(":pos",$position);
            $statement->bindParam(":dept",$dept);
            $statement->bindParam(":email",$email);
            $statement->bindParam(":phone",$phone);
            $statement->bindParam(":addr",$address);
            echo "hello";
            if($statement->execute()){
                echo "hello";
                return true;
            }
            else {
                return false;
            }
        }
    }
    public function get_emp_info_single($id){
        $this->pdo = Database::connect();
        if($this->pdo!=null){
            echo "success connectionfff";
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            $sql = "select * from employee";
            $sql = "SELECT employee.*, department.name as dept_name department.id as dept_id FROM employee INNER JOIN department
                    on employee.dept=department.id and employee.id=:id";
            $statement = $this->pdo->prepare($sql);
            $statement->bindParam(":id",$id);
            $statement -> execute();
            $results = $statement -> fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
    }
}

?>
