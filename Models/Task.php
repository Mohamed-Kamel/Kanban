<?php


class Task {

    private $db;

    function __construct() {
        $this->db = new Model();
    }

    // insert data in tasks table
    function insert($user_id,$data) {

        $title = $data['title'];
        $description = $data['description'];

        $sql = "INSERT INTO tasks SET title='$title',
         description = '$description',
         user_id = $user_id";
        //return boolean
        return $this->db->booleanQuery($sql);

    }

    // update data in tasks table
    function update($data) {

        $id = $data['task_id'];
        $title = $data['title'];
        $description = $data['description'];
        $status = $data['status'];

        $sql = "UPDATE tasks SET title='$title',
                        description='$description',
                        status='$status' 
                        where task_id=$id";

        return $this->db->booleanQuery($sql);
    }

    // delete data in tasks table
    function delete($id) {
        $sql = "DELETE FROM `tasks` WHERE task_id=$id";
        return $this->db->booleanQuery($sql);
    }

    // select data from tasks table

    function select($user_id) {
        $sql = " SELECT * FROM tasks where user_id=$user_id";
        $values = $this->db->selectQuery($sql);
        return $values;
    }
    
    function  ensure($user_id,$task_id){
        $sql=" SELECT * FROM tasks where user_id=$user_id AND task_id=$task_id";
         $values = $this->db->selectQuery($sql);
         if($values){
             return TRUE;
         } else {
             return FALSE;    
         }
        
    }

}

//$sss = new Task();
//$res=$sss->select(1);
//echo '<pre>';
//foreach($res as $row){
//    foreach ($row as $key => $val ){
//        echo $key. " : " .$val;
//    }
//}
