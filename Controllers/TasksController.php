<?php



class TasksController extends Controller
{


    //object from the Task model
    private $taskModel;
    private $errors = [];
    private $id_pattern = "/[0-9]+/";
    private $string_pattern = "/[a-z0-9_.\-:@#%&'\" ,! \t()\n]+/i";
    private $status_pattern = "/(new|doing|done|testing)/";
    private $userId;


    /**
     * TasksController constructor.
     *
     */
    public function __construct()
    {
        if(isset($_SESSION["user_id"])){
            $this->userId = $_SESSION["user_id"];
            $this->taskModel = new Task();
        }
    }


    /**
     * Method to show all tasks to specific user
     */
    public function getUserTasks()
    {
        //validate userId
        if (!$this->validate_input($this->id_pattern, $this->userId) || $this->userId < 1) {
            //return errors message and die
            $this->errors[] = "invalid user id";
        }

        if (count($this->errors) > 0) {
//            return $this->errors;
            echo json_encode($this->errors);
        } else {
            //query by user id
            $result = $this->taskModel->select($this->userId);
            if(count($result) > 0) {
                $result = $this->categoize($result);
                //send it to the fornt-end to draw it
                echo json_encode($result);
//            return $result;
            }else{
                echo json_encode(false);
            }
        }
    }


    /**
     * Method to add new task
     * @param $data
     */
    public function addNewTask($data)
    {
        //data is a post request $_POST

        $title = $data["title"];
        $desc = $data["description"];


        //if any attribute is empty don't insert it
        if (empty($title) || empty($desc)) {
            $this->errors[] = "Empty title or description";
            echo json_encode($this->errors);
            exit;
        }

        //validate data

        if (!$this->validate_input($this->string_pattern, $title)) {
            //return errors title not valid in json and die
            $this->errors[] = "Enter a valid title";
        }

        if (!$this->validate_input($this->string_pattern, $desc)) {
            //return errors desc not valid json
            $this->errors[] = "Enter a valid description";
        }

        if (count($this->errors) > 0) {

            echo json_encode($this->errors);
        } else {

            $result = $this->taskModel->insert($this->userId, $data);

            if ($result) {
                echo json_encode(true);
            } else {
                $this->errors[] = "Database errors can't add new task";
                echo json_encode($this->errors);
            }
        }
    }


    /**
     * Delete task by taskid and userid
     * @param $taskId
     */
    public function deleteTaskById($taskId)
    {

        //validate taskid
        if (!$this->validate_input($this->id_pattern, $taskId)) {
            $this->errors[] = "Invalid Task id";
        }

        if (count($this->errors) > 0) {
            return $this->errors;
        } else {

            if ($this->taskModel->delete($taskId)) {
                return true;
            } else {
                $this->errors[] = "Database error Can't delete task";
                return $this->errors;
            }
        }

    }


    /**
     * Edit Task by its id
     * @param $data
     */
    public function editTaskById($data)
    {

        $userId = $_SESSION["user_id"];
        $taskId = $data["task_id"];
        $title = $data["title"];
        $desc = $data["description"];
        $status = $data["status"];


        //if any attribute is empty don't insert it
        if (empty($title) || empty($desc)) {
            $this->errors[] = "Empty title or description";
            return $this->errors;
        }


        if (!$this->validate_input($this->id_pattern, $taskId)) {
            $this->errors[] = "TaskId not valid";
        }

        if (!$this->validate_input($this->string_pattern, $title)) {
            $this->errors[] = "Enter a valid title";
        }

        if (!$this->validate_input($this->string_pattern, $desc)) {
            $this->errors[] = "Enter a valid description";
        }

        if (!$this->validate_input($this->status_pattern, $status)) {
            $this->errors[] = "status not valid";
        }


        if (count($this->errors) > 0) {

            return $this->errors;

        } else {

            if ($this->taskModel->ensure($userId, $taskId)) {

                $result = $this->taskModel->update($data);

                if ($result) {
                    return true;
                } else {

                    $this->errors[] = "Database error can't edit this task";

                }

            } else {

                $this->errors[] = "This user don't have this task";

            }
        }
    }


    /**
     * Divide the tasks to categories
     * @param $data
     * @return array
     */
    public function categoize($data)
    {

        $new = [];
        $doing = [];
        $testing = [];
        $done = [];


        foreach ($data as $row) {

            if ($row["status"] == "new") {
                $new[] = $row;
            } elseif ($row["status"] == "doing") {
                $doing[] = $row;
            } elseif ($row["status"] == "testing") {
                $testing[] = $row;
            } elseif ($row["status"] == "done") {
                $done[] = $row;
            }

        }

        $result = [
            "new" => $new,
            "doing" => $doing,
            "testing" => $testing,
            "done" => $done
        ];

        return $result;
    }

}