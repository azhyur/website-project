<?php

class AdminVerify 
{
    public static function isAdmin()
    {

        session_start();

        if(isset($_SESSION['sess_user_id'])){
            $con = mysqli_connect("localhost", "root", "", "auditory_training");

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $result = mysqli_query($con, "SELECT * FROM users WHERE id = " . $_SESSION['sess_user_id']);

            if(mysqli_num_rows($result) != 0) {
                $row = mysqli_fetch_array($result);
                if($row['role'] == 'admin') {
                    return true;
                }
            }
        }

        return false;
    }
}

?>
