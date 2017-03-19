<?php

require_once "Model.php";

class User {

    private $db;

    function __construct() {
        $this->db = new Model();
    }

    function insert($data) {

        $user_name = $data['username'];
        $email = $data['email'];
        $password = $data['password'];
        $image = $data['image'];

        $sql = " INSERT INTO `users`(`username`, `email`, `password`, `image`) VALUES"
                . "( $user_name,$email,$password,$image)";

        //return boolean 
        return $this->db->booleanQuery($sql);
    }

    
    // delete user by id 
    function delete($id) {
        $sql = "DELETE FROM `users` WHERE id=$id";
        return $this->db->booleanQuery($sql);
    }

    
    // update user in table

    function update($use_data) {
        $id = $use_data['user_id'];
        $user_name = $use_data['username'];
        $email = $use_data['email'];
        $password = $use_data['password'];
        $image = $use_data['image'];

        $sql = " UPDATE `users` SET ``username`=$user_name,
                   `email`=$email,`password`=$password,`image`=$image WHERE user_id`=$id";

        return $this->db->booleanQuery($sql);
    }

    
    // select user by id ;
    function select($id) {

        $sql = "select * from users where user_id=$id";
        return $this->db->selectQuery($sql);
    }

}
