<?php

class model {

    
     // loacal host conect data
    
    private $hostname = 'localhost';
    private $username = 'root';
    private $pass = '';
    private $database = 'kanban';
    private $globalCon;

    // get link to database connection 
    private function connect() {
        $this->globalCon = new mysqli($this->hostname, $this->username, $this->pass, $this->database);
        if ($this->globalCon->connect_error)
            die($this->globalCon->connect_error);
    }

    // insert update delete 
    function booleanQuery($sql) {
        $this->connect();
        $result = $this->globalCon->query($sql) or $this->globalCon->error;
        $this->globalCon->close();
        return $result;
    }
    
    // select from data base 

    function selectQuery($sql) {
        $this->connect();
        $result = $this->globalCon->query($sql) or die($this->globalCon->error);
        $data = null;
        if ($result->num_rows > 0)
            while ($row = $result->fetch_assoc())
                $data[] = $row;
        $this->globalCon->close();
        return $data;
    }

}
