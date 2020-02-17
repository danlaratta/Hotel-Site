<?php
    include_once 'db_connection.php';
?>

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
    
    <div class="booking">
        <form action="reservation.php" method="POST">
            <h1 class="book"> Book Your Trip: </h1>
            <input type="date" id="start" name="trip-start" 
            value="yyyy-mm-dd" min="2019-11-03" max="2020-12-31">

            <input type="date" id="end" name="trip-end" 
            value="yyyy-mm-dd" min="2019-11-04" max="2020-12-31">

            <select id="rooms" name="rooms">
                <option value="volvo"> Number of Rooms </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
            </select>

            <select id="adults" name="adults">
                <option value="volvo"> Number of Adults </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
            </select>

            <select id="children" name="kids">
                <option value="volvo"> Number of Children </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
            </select>

            <button type="submit" id="submit"> Book Now </button>

        </form>

    </div>


    <div class="welcome">
        <h1> LARATTA RESORT </h1>
        <h2> Escape and Experience <br> Paradise </h2>
        <p> Take a step away from your ordinary life and revel in all this luxurious resort has to offer! It rests upon one of the most beautiful sun kissed beaches in the Bahamas. Hang out at the poolside bar live music during the day and dance the night away at the night club. Test your luck in the casino and get great night sleep in our cozy rooms. Laratta Resort is the place to be!  </p>
    </div>

    <div class="info">
        <a href="dining.html" class="dining-home">
            <div class="overlay1"> </div> 
            <h1>  Dining </h1>
            <img class="img1" src="images/dining.jpg"> 
        </a>

        <a href="excursion.html" class="excursion-home">
            <div class="overlay2"> </div>   
            <h1> Excursions </h1>
            <img class="img2" src="images/excursion.jpg">
        </a>

        <a href="casino.html" class="casino-home"> 
            <div class="overlay3"> </div>
            <h1> Casino </h1>
            <img class="img3" src="images/casino.jpg"> 
        </a>

    </div>
        
    <div class="family">
        <div class="family-info">
            <h1> Family Friendly </h1>
            <p> Laratta Resort offers an atmosphere where kids, teens, and adults can enjoy themselves.  Including pools including water slides, water sports, family-friendly poolside activities, and a multitude of bars. Our resort is the ultimate all-inclusive resort for all ages.   </p>
            <a href="activities.html"> Learn More </a>
        </div>
            
        <img src="images/family.jpg">
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
