<?php
    if (isset($_GET['id'])){

        require 'conection.php';

        //echo 'conection:' . $connection;

        $id = (int)$_GET['id'];

        $sql = "DELETE FROM `pokemon` WHERE `ID` = $id";

        if($conn->query($sql) === TRUE){
            echo 'Record deleted successfully';
            header("Refresh:5; url=index.php", true, 303);
        } else {
            echo 'Error deleting record: ' . $con->error;
        }

    }

?>