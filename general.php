<?php

require_once("./Models/User.php");
require_once("./Models/Model.php");
require_once("./Models/Task.php");
require_once("./Controllers/Controller.php");
require_once("./Controllers/TasksController.php");
require_once("./Controllers/UsersController.php");


$task = new TasksController();
$user = new UsersController();

// Show all tasks to specific user
if (isset($_POST["submit"]) && $_POST["submit"] == "show") {
    $task->getUserTasks();
}

// Add new task
if (isset($_POST["submit"]) && $_POST["submit"] == "add") {

    $task->addNewTask($_POST);

}

// Delete task
if (isset($_POST["submit"]) && $_POST["submit"] == "delete") {
    $task->deleteTaskById($_POST["task_id"]);
}

// Login
if(isset($_POST["login"])) {
    $user->login($_POST);
}

//Signup
if(isset($_POST["signup"])){
    $user->signup($_POST);
}