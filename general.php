<?php

require_once("./Models/Model.php");
require_once("./Models/User.php");
require_once("./Models/Task.php");
require_once("./Controllers/Controller.php");
require_once("./Controllers/TasksController.php");
require_once("./Controllers/UsersController.php");
require_once("./Includes/functions.php");

session_start();

$task = new TasksController();
$user = new UsersController();

if (isset($_SESSION["user_id"])) {
    // Show all tasks to specific user
    if (isset($_POST["submit"]) && $_POST["submit"] == "show") {
        $task->getUserTasks();
        exit;

        // Add new task
    } elseif (isset($_POST["submit"]) && $_POST["submit"] == "add") {

        $task->addNewTask($_POST);
        exit;
        // Delete task
    } elseif (isset($_POST["submit"]) && $_POST["submit"] == "delete") {
        $task->deleteTaskById($_POST["task_id"]);
        exit;
    } elseif (isset($_POST["submit"]) && $_POST["submit"] == "update") {

	    $task->editTaskById($_POST);
	    exit;

	} elseif(isset($_POST["logout"])){
        unset($_SESSION["user_id"]);
        session_destroy();
        echo load_view("./Views/signup.php");
        exit;
    }else{
        echo load_view("./Views/index.php");
        exit;
    }

} else {
    // Login
    if (isset($_POST["login"])) {
        $result = $user->login($_POST);
        if ($result === true) {
            echo load_view("./Views/index.php");
            exit;
        } else {
            //show login with errors
            echo load_view("./Views/signup.php", ["errors" => $result]);
            exit;
        }
        //signup
    } elseif (isset($_POST["signup"])) {
//        print_r($_POST);
        $result = $user->signup($_POST);
//        echo json_encode(var_dump($result));
        /**
         * todo : Error when you register after alert
         */
        if ($result === true) {
        	echo json_encode(true);
            exit;
        } else {
            //show signup with errors
            header("HTTP/1.0 404 Not Found");
            echo json_encode($result);
            exit;
        }
    } else {
        echo load_view("./Views/signup.php");
        exit;
    }
}
