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
    private $string_pattern = "/^[a-z]+/i";
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
        $this->errors = [];
        $username = $data["username"];
        $email = $data["email"];
        /**
         * todo : Encrypt the password
         */
        $password = $data["password"];
        $confirm_password = $data["confirm_password"];

        if (empty($username) || empty($email) || empty($password)) {
            $this->errors[] = "Empty username, email or password";
        }

        if (!$this->validate_input($this->string_pattern, $username)) {
            $this->errors[] = "Enter a valid username";
        }
        if (!$this->validate_email($email)) {
            $this->errors[] = "Enter a valid email";
        }

        if($password != $confirm_password){
            $this->errors[] = "Enter typical password";
        }

        if (count($this->errors) > 0) {
            return $this->errors;
        } else {
            $result = $this->userModel->insert($data);
            if ($result === true) {
                return true;
            } else {
                $this->errors[] = "This username or email is registered";
                return $this->errors;
            }
        }
    }

    /**
     * Method to login
     * @param $data
     */
    public function login($data)
    {
        $this->errors = [];
        $username = $data["username"];
        /**
         * todo : encrypt the password
         */
        $password = $data["password"];

        if (empty($username) || empty($password)) {
            $this->errors[] = "Empty username or password";
            return $this->errors;
        }

        if (!$this->validate_input($this->string_pattern, $username)) {
            $this->errors[] = "Enter a valid username";
        }

        if (count($this->errors) > 0) {
            return $this->errors;
        }
        $row = $this->userModel->select($data);
        if (count($row) > 0) {
            $_SESSION["user_id"] = $row[0]["user_id"];
            return true;
        } else {
            $this->errors[] = "Enter valid username or password";
            return $this->errors;
        }
    }

}