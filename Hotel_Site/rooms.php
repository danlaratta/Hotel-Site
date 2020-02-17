<?php

     
    function room1() { 
        include_once 'db_connection.php';
        
        // selecting room type price
        $query1 = "SELECT `price` FROM `room` WHERE `type` = 'room1'";
        
        //selecting number of rooms
        $query2 = "SELECT * FROM `reservation` ORDER BY `rooms` DESC LIMIT 1";
        
        //selecting room name
        $query3 = "SELECT `name` FROM `room` WHERE `type` = 'room1'";
        
        //selecting start date
        $query4 = "SELECT `res_checkin` FROM `reservation` ORDER BY `rooms` DESC LIMIT 1";
        
        //selecting end date
        $query5 = "SELECT `res_checkout` FROM `reservation` ORDER BY `rooms` DESC LIMIT 1";
        

        $result1 = mysqli_query($con, $query1);
        $resultCheck = mysqli_num_rows($result1);
        
        $result2 = mysqli_query($con, $query2);
        $resultCheck = mysqli_num_rows($result2);
        
        $result3 = mysqli_query($con, $query3);
        $resultCheck = mysqli_num_rows($result3);
        
        $result4 = mysqli_query($con, $query4);
        $resultCheck = mysqli_num_rows($result4);
        
        $result5 = mysqli_query($con, $query5);
        $resultCheck = mysqli_num_rows($result5);


        //price
        $row = mysqli_fetch_assoc($result1);
        // number of rooms
        $row1 = mysqli_fetch_assoc($result2);
        // room name
        $row2 = mysqli_fetch_assoc($result3);
        
        //start date
        $row3 = mysqli_fetch_assoc($result4);
        
        //end date
        $row4 = mysqli_fetch_assoc($result5);
        
        $price = ($row['price'] * $row1['rooms']);
		$price1 = ("$" . number_format($price, 2));   
        
        header("Location: ../web_development/confirmation.php?purchase=confirmation");
        
    } 

    function room2() { 
       include_once 'db_connection.php';
        
        // selecting room type price
        $query5 = "SELECT `price` FROM `room` WHERE `type` = 'room2'";
        
        //selecting number of rooms
        $query2 = "SELECT * FROM `reservation` ORDER BY `rooms` DESC LIMIT 1";

        //selecting room name
        $query6 = "SELECT `name` FROM `room` WHERE `type` = 'room2'";
        
        //selecting start date
        $query4 = "SELECT `res_checkin` FROM `reservation` ORDER BY `rooms` DESC LIMIT 1";
        
        //selecting end date
        $query5 = "SELECT `res_checkout` FROM `reservation` ORDER BY `rooms` DESC LIMIT 1";
        

        $result1 = mysqli_query($con, $query5);
        $resultCheck = mysqli_num_rows($result1);
        
        $result2 = mysqli_query($con, $query2);
        $resultCheck = mysqli_num_rows($result2);
        
        $result8 = mysqli_query($con, $query6);
        $resultCheck = mysqli_num_rows($result3);
        
        $result4 = mysqli_query($con, $query4);
        $resultCheck = mysqli_num_rows($result4);
        
        $result5 = mysqli_query($con, $query5);
        $resultCheck = mysqli_num_rows($result5);


        //price
        $row = mysqli_fetch_assoc($result7);
        // number of rooms
        $row1 = mysqli_fetch_assoc($result2);
        // room name
        $row2 = mysqli_fetch_assoc($result8);
        
        //start date
        $row3 = mysqli_fetch_assoc($result4);
        
        //end date
        $row4 = mysqli_fetch_assoc($result5);
        
        $price = ($row['price'] * $row1['rooms']);
		$price1 = ("$" . number_format($price, 2));  
        
        header("Location: ../web_development/confirmation.php?purchase=confirmation");
    } 

    function room3() { 
        include_once 'db_connection.php';
        
        // selecting room type price
        $query1 = "SELECT `price` FROM `room` WHERE `type` = 'room3'";
        
        //selecting number of rooms
        $query2 = "SELECT * FROM `reservation` ORDER BY `rooms` DESC LIMIT 1";
        
        //selecting room name
        $query3 = "SELECT `name` FROM `room` WHERE `type` = 'room3'";
        
        //selecting start date
        $query4 = "SELECT `res_checkin` FROM `reservation` ORDER BY `rooms` DESC LIMIT 1";
        
        //selecting end date
        $query5 = "SELECT `res_checkout` FROM `reservation` ORDER BY `rooms` DESC LIMIT 1";
        

        $result1 = mysqli_query($con, $query1);
        $resultCheck = mysqli_num_rows($result1);
        
        $result2 = mysqli_query($con, $query2);
        $resultCheck = mysqli_num_rows($result2);
        
        $result3 = mysqli_query($con, $query3);
        $resultCheck = mysqli_num_rows($result3);
        
        $result4 = mysqli_query($con, $query4);
        $resultCheck = mysqli_num_rows($result4);
        
        $result5 = mysqli_query($con, $query5);
        $resultCheck = mysqli_num_rows($result5);


        //price
        $row = mysqli_fetch_assoc($result1);
        // number of rooms
        $row1 = mysqli_fetch_assoc($result2);
        // room name
        $row2 = mysqli_fetch_assoc($result3);
        
        //start date
        $row3 = mysqli_fetch_assoc($result4);
        
        //end date
        $row4 = mysqli_fetch_assoc($result5);
        
        $price = ($row['price'] * $row1['rooms']);
		$price1 = ("$" . number_format($price, 2));  
        
        header("Location: ../web_development/confirmation.php?purchase=confirmation");
    } 

    function room4() { 
        include_once 'db_connection.php';
        
        // selecting room type price
        $query1 = "SELECT `price` FROM `room` WHERE `type` = 'room4'";
        
        //selecting number of rooms
        $query2 = "SELECT * FROM `reservation` ORDER BY `rooms` DESC LIMIT 1";

        //selecting room name
        $query3 = "SELECT `name` FROM `room` WHERE `type` = 'room4'";
        
        //selecting start date
        $query4 = "SELECT `res_checkin` FROM `reservation` ORDER BY `rooms` DESC LIMIT 1";
        
        //selecting end date
        $query5 = "SELECT `res_checkout` FROM `reservation` ORDER BY `rooms` DESC LIMIT 1";
        

        $result1 = mysqli_query($con, $query1);
        $resultCheck = mysqli_num_rows($result1);
        
        $result2 = mysqli_query($con, $query2);
        $resultCheck = mysqli_num_rows($result2);
        
        $result3 = mysqli_query($con, $query3);
        $resultCheck = mysqli_num_rows($result3);
        
        $result4 = mysqli_query($con, $query4);
        $resultCheck = mysqli_num_rows($result4);
        
        $result5 = mysqli_query($con, $query5);
        $resultCheck = mysqli_num_rows($result5);


        //price
        $row = mysqli_fetch_assoc($result1);
        // number of rooms
        $row1 = mysqli_fetch_assoc($result2);
        // room name
        $row2 = mysqli_fetch_assoc($result3);
        
        //start date
        $row3 = mysqli_fetch_assoc($result4);
        
        //end date
        $row4 = mysqli_fetch_assoc($result5);
        
        $price = ($row['price'] * $row1['rooms']);
		$price1 = ("$" . number_format($price, 2));  
        
        header("Location: ../web_development/confirmation.php?purchase=confirmation");
    } 

    function room5() { 
        include_once 'db_connection.php';
        
        // selecting room type price
        $query1 = "SELECT `price` FROM `room` WHERE `type` = 'room5'";
        
        //selecting number of rooms
        $query2 = "SELECT * FROM `reservation` ORDER BY `rooms` DESC LIMIT 1";

       //selecting room name
        $query3 = "SELECT `name` FROM `room` WHERE `type` = 'room5'";
        
        //selecting start date
        $query4 = "SELECT `res_checkin` FROM `reservation` ORDER BY `rooms` DESC LIMIT 1";
        
        //selecting end date
        $query5 = "SELECT `res_checkout` FROM `reservation` ORDER BY `rooms` DESC LIMIT 1";
        

        $result1 = mysqli_query($con, $query1);
        $resultCheck = mysqli_num_rows($result1);
        
        $result2 = mysqli_query($con, $query2);
        $resultCheck = mysqli_num_rows($result2);
        
        $result3 = mysqli_query($con, $query3);
        $resultCheck = mysqli_num_rows($result3);
        
        $result4 = mysqli_query($con, $query4);
        $resultCheck = mysqli_num_rows($result4);
        
        $result5 = mysqli_query($con, $query5);
        $resultCheck = mysqli_num_rows($result5);


        //price
        $row = mysqli_fetch_assoc($result1);
        // number of rooms
        $row1 = mysqli_fetch_assoc($result2);
        // room name
        $row2 = mysqli_fetch_assoc($result3);
        
        //start date
        $row3 = mysqli_fetch_assoc($result4);
        
        //end date
        $row4 = mysqli_fetch_assoc($result5);
        
        $price = ($row['price'] * $row1['rooms']);
		$price1 = ("$" . number_format($price, 2));  
        
        header("Location: ../web_development/confirmation.php?purchase=confirmation");
    } 

    function room6() { 
         include_once 'db_connection.php';
        
        // selecting room type price
        $query1 = "SELECT `price` FROM `room` WHERE `type` = 'room6'";
        
        //selecting number of rooms
        $query2 = "SELECT * FROM `reservation` ORDER BY `rooms` DESC LIMIT 1";

        //selecting room name
        $query3 = "SELECT `name` FROM `room` WHERE `type` = 'room6'";
        
        //selecting start date
        $query4 = "SELECT `res_checkin` FROM `reservation` ORDER BY `rooms` DESC LIMIT 1";
        
        //selecting end date
        $query5 = "SELECT `res_checkout` FROM `reservation` ORDER BY `rooms` DESC LIMIT 1";
        

        $result1 = mysqli_query($con, $query1);
        $resultCheck = mysqli_num_rows($result1);
        
        $result2 = mysqli_query($con, $query2);
        $resultCheck = mysqli_num_rows($result2);
        
        $result3 = mysqli_query($con, $query3);
        $resultCheck = mysqli_num_rows($result3);
        
        $result4 = mysqli_query($con, $query4);
        $resultCheck = mysqli_num_rows($result4);
        
        $result5 = mysqli_query($con, $query5);
        $resultCheck = mysqli_num_rows($result5);


        //price
        $row = mysqli_fetch_assoc($result1);
        // number of rooms
        $row1 = mysqli_fetch_assoc($result2);
        // room name
        $row2 = mysqli_fetch_assoc($result3);
        
        //start date
        $row3 = mysqli_fetch_assoc($result4);
        
        //end date
        $row4 = mysqli_fetch_assoc($result5);
        
        $price = ($row['price'] * $row1['rooms']);
		$price1 = ("$" . number_format($price, 2));     
        
        header("Location: ../web_development/confirmation.php?purchase=confirmation");
    } 
    
    
    if (array_key_exists('room1', $_POST)) { 
        room1(); 
    } 

    else if (array_key_exists('room2', $_POST)) { 
        room2(); 
    } 

    else if (array_key_exists('room3', $_POST)) { 
        room3(); 
    } 

    else if (array_key_exists('room4', $_POST)) { 
        room4(); 
    } 

    else if (array_key_exists('room5', $_POST)) { 
        room5(); 
    } 

    else if (array_key_exists('room6', $_POST)) { 
        room6(); 
    } 



?>