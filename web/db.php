<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dbhost = 'localhost';
        $dbuser = 'martin';
        $dbpass = 'password';
        $dbname = 'test';
        $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        
        if($mysqli->connect_errno ) {
        printf("Connect failed: %s<br />", $mysqli→connect_error);
        exit();
        }
        printf('Connected successfully.<br />');

        $sql = "SELECT * FROM shifts";
        
        $result = $mysqli->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                // printf("Id: %s, Title: %s, Author: %s, Date: %d <br />", 
                //     $row["tutorial_id"], 
                //     $row["tutorial_title"], 
                //     $row["tutorial_author"],
                //     $row["submission_date"]);   
                echo "<pre>"; 
                print_r($row);  
                echo "</pre>"; 
            }         
        } else {
        printf('No record found.<br />');
        }
        mysqli_free_result($result);
        $mysqli->close();
    /* 
        userId
        userFirstName
        userLastName
        userEmail
        userPhone
        userPass

        shiftId
        shiftUserId
        shiftStart
        shiftEnd
    */
    ?>
</body>
</html>


<?php
    $dbhost = 'localhost';
    $dbuser = 'martin';
    $dbpass = 'password';
    $dbname = 'test';
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    
    if($mysqli->connect_errno ) {
    printf("Connect failed: %s<br />", $mysqli→connect_error);
    exit();
    }
    printf('Connected successfully.<br />');

    $sql = "SELECT * FROM shifts";
    
    $result = $mysqli->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            // printf("Id: %s, Title: %s, Author: %s, Date: %d <br />", 
            //     $row["tutorial_id"], 
            //     $row["tutorial_title"], 
            //     $row["tutorial_author"],
            //     $row["submission_date"]);   
            echo "<pre>"; 
            print_r($row);  
            echo "</pre>"; 
        }         
    } else {
    printf('No record found.<br />');
    }
    mysqli_free_result($result);
    $mysqli->close();
/* 
    userId
    userFirstName
    userLastName
    userEmail
    userPhone
    userPass

    shiftId
    shiftUserId
    shiftStart
    shiftEnd
*/

?>


