<?php
    $conn = mysqli_connect("localhost", "id17245865_yumfods", "y!M2W[^)u@jVTPz/", "id17245865_food") or die(mysqli_error($conn));
    if(!isset($_SESSION)){
        session_start();
    }
?>