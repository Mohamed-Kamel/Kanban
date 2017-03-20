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
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="./assets/css/style.css" rel="stylesheet">
</head>

<body>
<!--START HEADER-->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse" data-target="#navbar" aria-expanded="false"
                    aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span>
            </button>
            <a class="navbar-brand"
               href="http://getbootstrap.com/examples/theme/#">Bootstrap theme</a>
        </div>
    </div>
</nav>
<!--END HEADER-->


<div class="wrapper">
    <!--START CONTENT PAGE-->
    <div class="">
        <div class="row">
            <div class="col-md-3">
                <div class="div-tasks-block">
                    <h1 class="new-tasks">
                        New Tasks
                        <button class="add-task" data-toggle="modal"
                                data-target="#newTask">
                            <i class="fa fa-plus-square"></i>
                        </button>
                    </h1>
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
                                            <label for="example-text-input"
                                                   class="col-md-2 col-form-label">Task Title</label>
                                            <div class="col-md-10">
                                                <input id="title" name="title" class="form-control"
                                                       type="text" placeholder="Tak Title">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input"
                                                   class="col-md-2 col-form-label">Task Content</label>
                                            <div class="col-md-10">
													<textarea id="description" name="description"
                                                              class="form-control"
                                                              placeholder="Task Content"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a type="submit" class="btn btn-default addNewTaskSubmit"
                                           data-dismiss="modal">ADD</a>
                                        <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Cancel
                                        </button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>

                    <!--START TASK BLOCK-->
                    <div id="new">
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

                    <!--Modal For Delete-->
                    <div id="deleteTask" class="modal fade" role="dialog">
                        <form name="hidden">
                            <input type="hidden" id="taskId"/>
                        </form>
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body">
                                    <p></p>
                                </div>

                                <div class="modal-footer">
                                    <button id="del_btn" type="button" class="del btn btn-default"
                                            data-dismiss="modal">Yes
                                    </button>
                                    <button type="button" class="btn btn-default"
                                            data-dismiss="modal">No
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--START TASK BLOCK-->
                </div>
            </div>
            <div class="col-md-3">
                <div class="div-tasks-block">
                    <h1 class="new-tasks">Tasks in progress</h1>
                    <!--START TASK BLOCK-->

                    <div id="doing">
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
                         -->    </div>

                    <!--START TASK BLOCK-->
                </div>
            </div>
            <div class="col-md-3">
                <div class="div-tasks-block">
                    <h1 class="new-tasks">Tasks Revision Test</h1>
                    <!--START TASK BLOCK-->
                    <div id="testing">

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
            <div class="col-md-3">
                <div class="div-tasks-block">
                    <h1 class="new-tasks">Done Tasks</h1>


                    <!--START TASK BLOCK no 1-->
                    <div id="done">
                        <!-- This is done list -->
                        <!-- 							<div class="task-block" id="5">
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
                         -->                        </div>
                    <!--START TASK BLOCK-->


                </div>
            </div>

        </div>
    </div>
    <!--END CONTENT PAGE-->
</div>

<!--JAVASCRIPT FILES-->
<script
        src="./assets/js/jquery.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script>

    showAll();
    function showAll() {
        $("#new").empty();
        $("#doing").empty();
        $("#testing").empty();
        $("#done").empty();
        $.ajax({
            url: "../general.php",
            method: "POST",
            data: {"submit": "show"},
            success: function (results) {
                results = JSON.parse(results);
                for (var result in results) {
                    if (result == "new") {
                        var res = results.new;
                        for (var i = 0; i < res.length; i++) {
                            var body = $("<div></div>").addClass("task-block").attr("id", res[i].task_id);
                            var title = $("<h2></h2>").addClass("task-block-header").text(res[i].title);
                            var btn = $("<button></button>").attr("data-toggle", "modal").attr("data-target", "#deleteTask").addClass("delete-task").append("<i class=\"fa fa-times\"></i>");
                            var btnEdit = $("<button></button>").attr("data-toggle", "modal").attr("data-target", "#editTask").addClass("edit-task").append("<i class=\"fa fa-pencil-square-o\"></i>");
                            title.append(btn, btnEdit);
                            var desc = $("<p></p>").addClass("task-block-header").text(res[i].description);
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
                            var desc = $("<p></p>").addClass("task-block-header").text(res[i].description);
                            $("#doing").append(body);
                            body.append(title);
                            body.append(desc);
                        }
                    }

                    if (result == "testing") {
                        var res = results.testing;

                        for (var i = 0; i < res.length; i++) {
                            var body = $("<div></div>").addClass("task-block").attr("id", res[i].task_id);
                            var title = $("<h2></h2>").addClass("task-block-header").text(res[i].title);
                            var desc = $("<p></p>").addClass("task-block-header").text(res[i].description);
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
                            var desc = $("<p></p>").addClass("task-block-header").text(res[i].description);
                            $("#done").append(body);
                            body.append(title);
                            body.append(desc);
                        }
                    }

                }
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    jQuery(document).ready(function ($) {
        $(".addNewTaskSubmit").on("click", add_task);
        // Ajax requet to add task
        function add_task(event) {
            event.preventDefault();

            var title = $("#title").val();
            var description = $("#description").val();

            $.ajax({
                method: "POST",
                url: "../general.php",
                data: {
                    "title": title,
                    "description": description,
                    "submit": "add"
                }
            }).done(function (results) {
                results = JSON.parse(results);
                showAll();
                //newBody.attr("id", );
                // body.insertAfter()

            }).fail(function (error) {
                console.log(error.responseJSON);
            });
            console.log("add");
        };

        //x button action
        $(".task-block-header").on("click", "i", function () {
            var taskName = $(this).parent().text().trim("");

            $("#deleteTask").find(".modal-body p").text("Are You sure You want to Delete This Task: " + taskName);

            $("#deleteTask").find("input").attr("id", $(this).parents("div").attr("id"));
//            console.log($("#deleteTask").find("input").attr("id"));
        });

        //yes modal button action
        $("#del_btn").on("click", remove_task);
        // Ajax requet to remove task
        function remove_task(event) {
            event.preventDefault();
            var form_name = document.forms["hidden"];
            console.log(form_name);
            var task_id = $(form_name).find("input").attr("id");
            console.log(task_id);
            $.ajax({
                method: "POST",
                url: "../general.php",
                data: {"task_id": task_id, "submit": "delete"}
            }).done(function (result) {

                showAll();
            }).fail(function (error) {
                console.log(error.responseJSON);
            });
        };

    });
</script>


</body>
</html>
