<?php
session_start();
if(!isset($_SESSION["user_id"])){
    header("refresh:0;url=../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title></title>

        <!-- CSS FILES -->
        <link href="./Views/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="./Views/assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="./Views/assets/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!--START HEADER-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="header-logout">
                    <form method="post" >
                        <button name="logout" type="submit"><i class="fa fa-power-off"></i> logout</button>
                    </form>
                </div>
                <div class="navbar-header">
                    <a class="navbar-brand"><img src="./Views/assets/images/logo.png"></a>
                </div>
            </div>
        </nav>
        <!--END HEADER-->


        <div class="wrapper">
            <!--START CONTENT PAGE-->
            <div class="">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="div-tasks-block">
                            <h1 class="new-tasks">
                                New Tasks
                                <button class="add-task" data-toggle="modal"
                                        data-target="#newTask">
                                    <i class="fa fa-plus-square"></i>
                                </button>
                            </h1>


                            <!--START TASK BLOCK-->
                            <div id="new" class="drag">
                                <input type="hidden" class="delete-task">
                                <!-- This is new list -->
                                <!-- <div class="task-block" id="5">
    <h2 class="task-block-header">
        Task Title
        <button class="delete-task" data-toggle="modal"
            data-target="#deleteTask">
            <i class="fa fa-times"></i>
        </button>
        <button class="edit-task" data-toggle="modal"
            data-target="#editTask">
            <i class="fa fa-pencil-square-o"></i>
        </button>
    </h2>
    <p class="task-block-content">Lorem Ipsum is simply dummy text of
        the printing and typesetting industry.</p>
</div> -->
                            </div>


                            <!--START TASK BLOCK-->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="div-tasks-block">
                            <h1 class="new-tasks">Tasks in progress</h1>
                            <!--START TASK BLOCK-->
                            <div id="doing" class="drag">
                                <!-- This is doing list -->
                                <!-- 		<div class="task-block" id="5">
            <h2 class="task-block-header">
                Task Title
                <button class="delete-task" data-toggle="modal"
                    data-target="#deleteTask">
                    <i class="fa fa-times"></i>
                </button>
            </h2>
            <p class="task-block-content">Lorem Ipsum is simply dummy text of
                the printing and typesetting industry.</p>
        </div>
                                -->
                            </div>

                            <!--START TASK BLOCK-->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="div-tasks-block">
                            <h1 class="new-tasks">Tasks Revision Test</h1>
                            <!--START TASK BLOCK-->
                            <div id="testing" class="drag">

                                <!-- This is testing list -->
                                <!-- <div class="task-block" id="5">
    <h2 class="task-block-header">
        Task Title
        <button class="delete-task" data-toggle="modal"
            data-target="#deleteTask">
            <i class="fa fa-times"></i>
        </button>
    </h2>
    <p class="task-block-content">Lorem Ipsum is simply dummy text of
        the printing and typesetting industry.</p>
</div> -->
                            </div>

                            <!--START TASK BLOCK-->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="div-tasks-block">
                            <h1 class="new-tasks">Done Tasks</h1>


                            <!--START TASK BLOCK no 1-->
                            <div id="done" class="drag">
                                <!-- This is done list -->
                                <!-- <div class="task-block" id="5">
          <h2 class="task-block-header">
                  Task Title
                  <button class="delete-task" data-toggle="modal" data-target="#deleteTask">
                        <i class="fa fa-times"></i>
                  </button>
           </h2>
           <p class="task-block-content">Lorem Ipsum is simply dummy text of
              the printing and typesetting industry.</p>
       </div>
                                -->
                            </div>
                            <!--START TASK BLOCK-->
                        </div>
                    </div>

                </div>
            </div>
            <!--END CONTENT PAGE-->
        </div>
        <div id="newTask" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add New Task</h4>
                    </div>
                    <form name="addTask" id="addTask" method="post">
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Task
                                    Title</label>
                                <div class="col-md-10">
                                    <input id="title" name="title" class="form-control" type="text"
                                           placeholder="Tak Title">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Task
                                    Content</label>
                                <div class="col-md-10">
                                    <textarea id="description" name="description"
                                              class="form-control" placeholder="Task Content"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a type="submit" class="btn btn-default addNewTaskSubmit"
                               data-dismiss="modal"><i class="fa fa-plus-square"></i> ADD</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-ban"></i> Cancel
                            </button>
                        </div>
                    </form>

                </div>

            </div>
        </div>

        <!-- Edit Modal -->
        <div id="editTask" class="modal fade" role="dialog">
            <input type="hidden" class="hidden_id" />
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit Task</h4>
                    </div>
                    <form name="editTask" method="post">
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Task
                                    Title</label>
                                <div class="col-md-10">
                                    <input id="title1" name="title" class="form-control" type="text"
                                           placeholder="Tak Title">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Task
                                    Content</label>
                                <div class="col-md-10">
                                    <textarea id="description1" name="description"
                                              class="form-control" placeholder="Task Content"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a type="submit" class="btn btn-default editTaskSubmit"
                               data-dismiss="modal"><i class="fa fa-check-circle"></i> Edit</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-ban"></i> Cancel
                            </button>
                        </div>
                    </form>

                </div>

            </div>
        </div>




        <!--Modal For Delete-->

        <div id="deleteTask" class="modal fade" role="dialog">
            <form name="hidden">
                <input type="hidden" id="taskId" />
            </form>
            <div class="modal-dialog">
                <!-- Modal content delete-->
                <div class="modal-content">
                    <div class="modal-body">
                        <p></p>
                    </div>

                    <div class="modal-footer">
                        <button id="del_btn" type="button" class="del btn btn-danger"
                                data-dismiss="modal"><i class="fa fa-check"></i> Yes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-ban"></i> No
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="errorMoving" class="modal fade" role="dialog">
            <form name="hidden">
                <input type="hidden" id="taskId" />
            </form>
            <div class="modal-dialog">
                <!-- Modal content delete-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close close-remove-error" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">You can move one step only !!</h4>
                    </div>
                </div>
            </div>
        </div>

        <!--JAVASCRIPT FILES-->
        <script src="./Views/assets/js/jquery.min.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="./Views/assets/js/bootstrap.min.js"></script>


        <script>

            jQuery(document).ready(function ($) {

                // to render all tasks
                function showAll() {
                    $("#new").empty();
                    $("#doing").empty();
                    $("#testing").empty();
                    $("#done").empty();
                    $.ajax({
                        method: "POST",
                        data: {"submit": "show"},
                        success: function (results) {
                            results = JSON.parse(results);
                            for (var result in results) {
                                if (result == "new") {
                                    var res = results.new;
                                    for (var i = 0; i < res.length; i++) {

                                        var body = $("<div></div>").addClass("task-block ui-draggable ui-draggable-handle").attr("id", res[i].task_id),
                                                title = $("<h2></h2>").addClass("task-block-header"),
                                                span = $("<span></span>").text(res[i].title),
                                                btn = $("<button></button>").attr("data-toggle", "modal").attr("data-target", "#deleteTask").addClass("delete-task").append("<i class='fa fa-times'></i>"),
                                                btnEdit = $("<button></button>").attr("data-toggle", "modal").attr("data-target", "#editTask").addClass("edit-task").append("<i class='fa fa-pencil-square-o'></i>");
                                        title.append(span, btn, btnEdit);
                                        var desc = $("<p></p>").addClass("task-block-content").text(res[i].description);
                                        $("#new").append(body);
                                        body.append(title);
                                        body.append(desc);
                                    }

                                }

                                if (result == "doing") {
                                    var res = results.doing;
                                    for (var i = 0; i < res.length; i++) {
                                        var body = $("<div></div>").addClass("task-block").attr("id", res[i].task_id);
                                        var title = $("<h2></h2>").addClass("task-block-header").text(res[i].title);
                                        var desc = $("<p></p>").addClass("task-block-content").text(res[i].description);
                                        $("#doing").append(body);
                                        body.append(title);
                                        body.append(desc);
                                    }
                                }

                                if (result == "testing") {
                                    var res = results.testing;

                                    for (var i = 0; i < res.length; i++) {
                                        var body = $("<div></div>").addClass("task-block").attr("id", res[i].task_id);
                                        var title = $("<h2>/h2>").addClass("task-block-header").text(res[i].title);
                                        var desc = $("<p></p>").addClass("task-block-content").text(res[i].description);
                                        $("#testing").append(body);
                                        body.append(title);
                                        body.append(desc);
                                    }
                                }

                                if (result == "done") {
                                    var res = results.done;
                                    for (var i = 0; i < res.length; i++) {
                                        var body = $("<div></div>").addClass("task-block").attr("id", res[i].task_id);
                                        var title = $("<h2></h2>").addClass("task-block-header").text(res[i].title);
                                        var desc = $("<p></p>").addClass("task-block-content").text(res[i].description);
                                        $("#done").append(body);
                                        body.append(title);
                                        body.append(desc);
                                    }
                                }

                            }
                            Render();
                        },
                        error: function (error) {
                        }
                    });
                }


                showAll();

                $(".addNewTaskSubmit").on("click", add_task);
                // Ajax requet to add task
                function add_task(event) {
                    event.preventDefault();

                    var title = $("#title").val();
                    var description = $("#description").val();

                    $.ajax({
                        method: "POST",
                        data: {
                            "title": title,
                            "description": description,
                            "submit": "add"
                        }
                    }).done(function (results) {
                        results = JSON.parse(results);
                        showAll();
                        $("#title").val("");
                        $("#description").val("");

                    }).fail(function (error) {
                    });
                }
                ;

                //used to call all function after page render using jquery
                function Render() {
                    // x button action to delete
                    $(".delete-task").on("click", function (event) {
                        var taskName = $(event.target).parent().parent().text().trim(""),
                                id = $(event.target).parents('.task-block').prop("id");
                        $("#deleteTask").find(".modal-body p").text("Are You sure You want to Delete This Task: " + taskName);
                        $("#deleteTask").find("input").attr("id", id);
                    });

                    //confirm delete action from modal
                    $("#del_btn").on("click", remove_task);
                    // Ajax requet to remove task
                    function remove_task(event) {
                        event.preventDefault();
                        var form_name = document.forms["hidden"];
                        var task_id = $(form_name).find("input").attr("id");
                        // console.log(task_id);
                        $.ajax({
                            method: "POST",
                            data: {"task_id": task_id, "submit": "delete"}
                        }).done(function (result) {
                            $("#" + task_id).remove();

                        }).fail(function (error) {
                        });
                    }
                    ;

                    //drag and drop
                    $(".task-block").draggable({
                        helper: 'clone'
                    });

                    $(".div-tasks-block").droppable({
                        drop: function (event, ui) {
                            var id = $(ui.draggable).attr("id");
                            var status = $(this).find(".drag").attr("id");
                            var title = $(ui.draggable).find("h2").text();
                            var description = $(ui.draggable).find("p").text();
                            var to = $(event.target).find("div").attr("id");
                            var from = $(ui.draggable).parent("div").attr("id");
                            if (from == "new") {
                                from = 1;
                            } else if (from == "doing") {
                                from = 2;
                            } else if (from == "testing") {
                                from = 3;
                            } else if (from == "done") {
                                from = 4;
                            }

                            if (to == "new") {
                                to = 1;
                            } else if (to == "doing") {
                                to = 2;
                            } else if (to == "testing") {
                                to = 3;
                            } else if (to == "done") {
                                to = 4;
                            }

                            if (Math.abs(from - to) == 1) {
                                $.ajax({
                                    method: "POST",
                                    data: {
                                        "task_id": id,
                                        "title": title,
                                        "description": description,
                                        "status": status,
                                        "submit": "update"
                                    }
                                }).done(function (results) {

                                    showAll();

                                }).fail(function (error) {
                                });
                            }else if(Math.abs(from - to) == 0){
			    }else {
                                $("#errorMoving").show();

                            }
                        }
                    });
                    $(".close-remove-error").click(function () {
                        $("#errorMoving").hide();
                    });
                    //edit task
                    $(".edit-task").on("click", function (event) {
                        var id = $(event.target).parents('.task-block').prop("id");
                        var title = $(event.target).parents('.task-block').find('span').text();
                        var description = $(event.target).parents('.task-block').find('p').text();

                        $("#editTask").find(".hidden_id").attr("id", id);
                        $("#editTask").find("#title1").val(title);
                        $("#editTask").find("#description1").val(description);
                    });

                    $(".editTaskSubmit").on("click", edit_task);
                    // Ajax requet to add task
                    function edit_task(event) {
                        event.preventDefault();

                        var title = $("#title1").val();
                        var description = $("#description1").val();
                        var id = $(".hidden_id").attr("id");
                        $.ajax({
                            method: "POST",
                            data: {
                                "task_id": id,
                                "title": title,
                                "description": description,
                                "status": "new",
                                "submit": "update"
                            }
                        }).done(function (results) {
                            $("#" + id).find("span").text(title);
                            $("#" + id).find("p").text(description);

                        }).fail(function (error) {
                        });
                    }
                    ;

                }
            });

        </script>
        <script src="./Views/assets/js/custom.js"></script>
    </body>
</html>
