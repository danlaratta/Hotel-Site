<?php
    include_once 'db_connection.php';

    $start = $_POST['trip-start'];
    $end = $_POST['trip-end'];
    $rooms = $_POST['rooms'];
    $adults = $_POST['adults'];
    $kids = $_POST['kids'];

    $sql = "INSERT INTO reservation (res_checkin, res_checkout, rooms, adults, kids) VALUES('$start', '$end', '$rooms', '$adults', '$kids');";

    mysqli_query($con, $sql);

    header("Location: ../web_development/rooms.html?reservation=success");



?>