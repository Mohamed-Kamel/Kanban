<?php


require_once("./Models/Model.php");
require_once("./Models/Task.php");
require_once("./Controllers/TasksController.php");

$task = new TasksController();


if ($_POST["submit"] == "show") {
    $task->getUserTasks();
}


if ($_POST["submit"] == "add") {

    $task->addNewTask($_POST);

}


if ($_POST["submit"] == "delete") {
    $task->deleteTaskById($_POST["task_id"]);
}

