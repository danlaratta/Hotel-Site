   <?php
        include_once 'db_connection.php';
    
        $fname = $_POST['fame'];
        $lname = $_POST['lame'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        
        $sql = "INSERT INTO user (fame, lame, email, phone, address, city, state) VALUES('$fname', '$lname', '$email', '$phone', '$address', ' $city', '$state');";
    
        mysqli_query($con, $sql);

        header("Location: ../web_development/confirmation.html?form=submitted");

    
    ?>