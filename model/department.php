<?php

class department{
    public function get_department(){
        $this->pdo = Database::connect();
        if($this->pdo!=null){
            echo "success connection";
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            $sql = "select * from employee";
            $sql = "select * from department";
            $statement = $this->pdo->prepare($sql);
            $statement -> execute();
            $results = $statement -> fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
    }
}

?>
