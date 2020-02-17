
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Laratta Resort </title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <script src="navbar.js"></script>
    
     <script type="text/javascript">
        function nextSlide() {
	       if (typeof $ == "undefined") var $ = function(sel) { 
               return document.querySelector(sel); 
           }	
	       $(".slider").appendChild($(".slider img:first-child"));
        }
        setInterval(nextSlide, 5000)
    </script>
    
</head>

<body>
    
    <a href="index.php"> <img class="logo" src="images/logo-blue.png"/> </a>
    
    <nav class="topNav">
        <ul>
            <li> 1-800-LARATTA </li>
            <li> | </li>
            <li> LarattaResort@gmail.com </li>
            <li> | </li>
            <li> 15 Laratta Lane, Nassau, Bahamas </li>
        </ul>    
    </nav>
    
    <nav class="lowerNav">
        <ul>
            <li> <a href="dining.html"> Dining </a> </li>
            <li> <a href="excursion.html"> Excursions </a> </li>
            <li> <a href="activities.html"> Activities </a> </li>
            <li> <a href="casino.html"> Casino </a> </li>
        </ul>
    </nav>
    
    <div class="slider">
        <img src="images/slide1.jpeg" style="width:100%">
        <img src="images/slide2.jpg" style="width:100%">
        <img src="images/slide3.jpg" style="width:100%">
        <img src="images/slide4.jpg" style="width:100%">
    </div>
    
    <h1 class="page-title"> Room Confirmation </h1>
    
    
    <table>
        <tr>
            <th> Room Description </th>
            <th> Check-in </th>
            <th> Check-out </th>
            <th> Rooms </th>
            <th> Total Price</th>
        </tr>
        
        <?php
            include_once 'db_connection.php';
            include_once 'rooms.php';
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
        
            echo "<tr><td>" . $row2['name'] . "</td><td>" . $row3['res_checkin'] . "</td><td>" . $row4['res_checkout'] . "</td><td>"  . $row1['rooms'] . "</td><td>" . $price1 . "</td></tr>";
        
            
            echo "</table>";

        ?>
        
    </table>
    
    <div class="confirm-container">
        
        <form id="confirm" action="form-submit.php" method="POST">
            
            <h1 id="title-h1"> Customer Information </h1>
            
            <label id="label" for="fname"> First Name </label> <br>
            <input type="text" id="input" name="fname" placeholder="First Name">

            <br><br>

            <label id="label" for="lname"> Last Name: </label> <br>
            <input type="text" id="input" name="fname" placeholder="First Name">

            <br><br>

            <label id="label" for="email"> Email: </label> <br>
            <input type="text" id="input" name="email" placeholder="Email">

            <br><br>

            <label id="label" for="number"> Phone Number: </label> <br>
            <input type="text" id="input" name="number" placeholder="Phone Number">

            <br><br>

            <label id="label" for="address"> Address: </label> <br>
            <input type="text" id="input" name="address" placeholder="Address">

            <br><br>

            <label id="label" for="city"> City: </label> <br>
            <input type="text" id="input" name="city" placeholder="City">

            <br><br>

            <label id="label" for="state"> State: </label> <br>
            <input type="text" id="input" name="state" placeholder="State ">
            
            <br> <br>
            
            <button id="confirm-submit" name="confirm-submit" type="submit"> Submit </button>
            
        </form>
    </div>
    
    
           
    
        
    <footer>
        <ul>
            <li> 1-800-LARATTA </li>
            <li> | </li>
            <li> LarattaResort@gmail.com </li>
            <li> | </li>
            <li> 15 Laratta Lane, Nassau, Bahamas </li>
        </ul> 
            
    </footer>

    
    
</body>
    
</html>
