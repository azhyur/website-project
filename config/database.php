<?php

class dbController
{

    private $connection;

    public function __construct()
    {
        $this->connection = mysqli_connect("localhost", "root", "", "auditory_training");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die;
        }
    }


    /*
     * returns array of rows from result of a select
     */
    public function executeSelect($query)
    {
        $result = mysqli_query($this->connection, $query);
        $ret_array = array();

        while($row = mysqli_fetch_array($result)){
            $ret_array[] = $row;
        }

        return $ret_array;
    
    }

}

?>
