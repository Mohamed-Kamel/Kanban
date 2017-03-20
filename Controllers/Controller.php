<?php

/**
 * Created by PhpStorm.
 * User: hamada
 * Date: 20/03/17
 * Time: 07:10 م
 */
class Controller
{
    /**
     * Method to validate input by regex
     * @param $pattern
     * @param $input
     * @return int
     */
    public function validate_input($pattern, $input){
        return preg_match($pattern, $input);
    }

    /**
     * Method to validate email
     * @param $email
     * @return mixed
     */
    public function validate_email($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }


    /**
     * Method to validate image
     * @param $image
     * @return mixed
     */
    public function validate_image($image){
        return filter_var($image, FILTER_VALIDATE_URL);
    }
}