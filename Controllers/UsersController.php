<?php

/**
 * Created by PhpStorm.
 * User: hamada
 * Date: 20/03/17
 * Time: 07:04 م
 */

class UsersController extends Controller
{

    private $userModel;
    private $id_pattern = "/[0-9]+/";
    private $string_pattern = "/[a-z0-9_.\-:@#%&'\" ,! \t()\n]+/i";
    private $errors = [];

    public function __construct()
    {
        $this->userModel = new User();
    }

    /**
     * Method to signup
     * @param $data
     */
    public function signup($data)
    {
        $username = $data["username"];
        $email = $data["email"];
        /**
         * todo : Encrypt the password
         */
        $password = $data["password"];
        $image = $data["image"];

        if (empty($username) || empty($email) || empty($password)) {
            $this->errors[] = "Empty username, email or password";
            echo json_encode($this->errors);
            return;
        }

        if (!$this->validate_input($this->string_pattern, $username)) {
            $this->errors[] = "Enter a valid username";
        }
        if (!$this->validate_email($email)) {
            $this->errors[] = "Enter a valid email";
        }
        if (!$this->validate_image($image)) {
            $this->errors[] = "Enter a valid url";
        }
        if (count($this->errors) > 0) {
            echo json_encode($this->errors);
            return;
        } else {
            if ($this->userModel->insert($data)) {
                echo json_encode(true);
                return;
            } else {
                $this->errors[] = "Database error can't insert new user";
                echo json_encode($this->errors);
                return;
            }
        }
    }

    /**
     * Method to login
     * @param $data
     */
    public function login($data)
    {
        $username = $data["username"];
        /**
         * todo : encrypt the password
         */
        $password = $data["password"];

        if(empty($username) || empty($password)){
            $this->errors[] = "Empty username or password";
            echo json_encode($this->errors);
            return;
        }

        if(!$this->validate_input($this->string_pattern, $username)){
            $this->errors[] = "Enter a valid username";
        }

        if(count($this->errors) > 0){
            echo json_encode($this->errors);
            return;
        }

        if(count($this->userModel->select($data)) > 0){
            session_start();
            $_SESSION["user_id"];
            echo json_encode(true);
            return;
        }else{
            $this->errors[] = "Enter valid username or password";
            echo json_encode($this->errors);
            return;
        }
    }
}
