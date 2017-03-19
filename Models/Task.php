<?php

require_once "Model.php";

class Task {

    private $db;

    function __construct() {
        $this->db = new Model();
    }

    // insert data in tasks table
    function insert( $user_id,$data) {

        $title = $data['title'];
        $description = $data['`description'];
        $sql = " INSERT INTO `tasks`(`title`,`description`,`user_id`) VALUES ( $description,$data,$user_id)";
        //return boolean
        return $this->db->booleanQuery($sql);
    }

    // update data in tasks table
    function update($data) {

        $id = $data['id'];
        $title = $data['title'];
        $description = $data['`description'];
        $status = $data['status'];

        $sql = " UPDATE `tasks` `title`=$title,`description`=$description,status`=$status  where  id=$id";
        return $this->db->booleanQuery($sql);
    }

    // delete data in tasks table
    function delete($id) {
        $sql = "DELETE FROM `tasks` WHERE id=$id";
        return $this->db->booleanQuery($sql);
    }

    // select data from tasks table

    function select($user_id) {
        $sql = " SELECT * FROM tasks where user_id=$user_id";

        $values = $this->db->selectQuery($sql);
        return $values;
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
