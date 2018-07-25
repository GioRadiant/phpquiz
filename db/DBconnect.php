<?php
class DbConnect{
/*DB connection*/
    var $host = 'localhost';
    var $user = 'YourDBuser';
    var $pass = 'YourDBpassword';
    var $db = 'YourDBname';
    var $myconn;

    function ConnectDB() {
        $con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (!$con) {
            die('Could not connect to database!');
        } else {
            $this->myconn = $con;
        }
        return $this->myconn;
    }

    function CloseConnectDB() {
        mysqli_close($this->myconn);
        //echo 'Connection closed!';
    }
/*end of DB connection*/
}
?>