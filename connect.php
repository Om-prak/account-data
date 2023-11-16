

<?php


    // Retrieve user input from the form
    $name = $_POST["name"];
    $pass = $_POST["password"];


    // database Information

    $servername = "sql306.infinityfree.com";
    $username = "if0_35435408";
    $password = "eY9kNEKeiaJ";
    $database = "if0_35435408_db_01";
        
    
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Database connection failed: ".mysqli_connect_error());
        }
    if($conn){



        $sql = "INSERT INTO `my table` (`name`, `pass`) VALUES ( '$name', '$pass')";
        // // echo "sucessfull";

        // $sql= "CREATE DATABASE IF NOT EXISTS db_02";
        // $sql = "CREATE TABLE IF NOT EXISTS `my table` (`sno` INT(6) NOT NULL AUTO_INCREMENT , `name`  VARCHAR(12) , `pass` VARCHAR(10) , PRIMARY KEY (`sno`))";

        $result = mysqli_query($conn, $sql);
        // mysqli_query($conn, $table);

        if($result)
        {
            echo "inserted sucessfull";
        }
        else{
            echo"not inserted";
        }

        }
    
    

    // Display the submitted data
    // echo "<h2>Submitted Information:</h2>";
    // echo "Name: " . $name . "<br>";
    // echo "pass: " . $pass;
?>